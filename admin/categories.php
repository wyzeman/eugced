<?php

require_once("includes/init.php");
require_once("includes/classes/pages/CustomPage.php");

$page = new CustomPage(UserLevel::ADMIN);
$page->setTitle(T_("Categories"));
$page->setMenu($MENU_ITEMS);



/**
 *
 */
function displaySuperTable() {

    global $page;

    require_once("includes/classes/SuperTable.php");


    $fields =
        [
            [
                "label" => T_("name"),
                "column" => "name",
                "table" => [
                    "width" => "120px"
                ],
                "form" => [
                    "type" => FormWidget::FORM_ITEM_INPUT,
                    "width" => "200px",
                    "validation" => "required",
                    "add" => true,
                    "modify" => true,
                    "value" => ""
                ]
            ],
            [
                "label" => T_("Image"),
                "column" => "@image",
                "table" => [
                    "width" => "60px"
                ],
                "form" => [
                    "type" => FormWidget::FORM_ITEM_FILE,
                    "width" => "300px",
                    "height" => "200px",
                    "validation" => "required",
                    "add" => true,
                    "modify" => true,
                    "value" => ""
                ]
            ]
        ];



    class MySuperTable extends SuperTable
    {

        public function callbackFilterRow($row) {

            global $DB;

            $items = $DB->select("*","tb_categories");

            foreach($items as &$item){
                $row["image"] = '<img class="item_image" src="' . 'images/categories/'. $row["id"] . '_mini_thumb.png">';
            }

            return $row;
        }

        public function callbackAddPre($items, $foreign_items){
            global $INPUT;

            if (isset($items["image"])) {
                unset($items["image"]);
            }

            if ($INPUT->files->keyExists("image")){
                $photo = $INPUT->files->getValue("image");
                if ($photo["size"] > 0){
                    if ($photo["type"] != "image/png") {
                        die_warning("categories.php",T_("Invalid file type, please use a PNG image."));
                    }

                    if ($photo["error"] != 0) {
                        die_warning("categories.php",T_("An error occurred while trying to upload your image."));
                    }
                }
            }

            return $items;
        }

        public function callbackAddPost($items, $foreign_items, $insert_id){
            global $INPUT, $DB;

            $dir = "images/categories/";
            if(!file_exists($dir)){
                mkdir($dir);
            }
            if ($INPUT->files->keyExists("image")){

                $image = $INPUT->files->getValue("image");
                if ($image["size"] != 0){

                    $img = imagecreatefrompng($image["tmp_name"]);
                    $img_out_medium = imagecreatetruecolor(400,250);
                    imagecopyresampled($img_out_medium, $img, 0,0,0,0,400,250, imagesx($img), imagesy($img));
                    $path = $dir."/".$insert_id.".png";
                    imagepng($img_out_medium,$path,9);
                    imagedestroy($img_out_medium);
                    imagedestroy($img);
                    system("/usr/bin/pngquant --force --ext .png ".$path);

                    $imgthumb = imagecreatefrompng($image["tmp_name"]);
                    $img_out_medium = imagecreatetruecolor(50,50);
                    imagecopyresampled($img_out_medium, $imgthumb, 0,0,0,0,50,50, imagesx($imgthumb), imagesy($imgthumb));
                    $path = $dir."/".$insert_id."_mini_thumb.png";
                    imagepng($img_out_medium,$path,9);
                    imagedestroy($img_out_medium);
                    imagedestroy($imgthumb);
                    system("/usr/bin/pngquant --force --ext .png ".$path);

                    //move_uploaded_file($image["tmp_name"],$dir."/".$insert_id."_mini_thumb.png");
                }else{
                    copy(CONFIG_WEBSITE_PUBLIC_PATH."images/default_item.png",$dir."/".$insert_id.".png");
                }
            }



        }



    }


    $buttons = [];


    $st = new MySuperTable("tb_categories");
    $st->setLabel("title_table",T_("Categories"));
    $st->setLabel("title_add",T_("Ajouter une catégorie"));
    $st->setLabel("button_add",T_("Ajouter une catégorie"));
    $st->setLabel("button_modify",T_("Modifier une catégorie"));
    $st->setFields($fields);
    $st->SetSortedColumn("tb_categories.id", "DESC");
    $st->setActions(true, true, true, $buttons);
    $st->setSearchable(true);

    $page->setContent($st->display());
    $page->show();

}

displaySuperTable();