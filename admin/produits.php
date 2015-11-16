<?php

require_once("includes/init.php");
require_once("includes/classes/pages/CustomPage.php");

$page = new CustomPage(UserLevel::ADMIN);
$page->setTitle(T_("Produits"));
$page->setMenu($MENU_ITEMS);


function displayPictureForm ($id) {

    global $page, $DB, $INPUT, $TPL;


    $dir = "images/products";
    if(!file_exists($dir)){
        mkdir($dir);
    }
    $dir = $dir."/".$id."/";
    if(!file_exists($dir)){
        mkdir($dir);
    }
    $dirthumb = $dir."/thumb";
    if(!file_exists($dirthumb)){
        mkdir($dirthumb);
    }

    for ($i=1;$i<=10;$i++) {
        if ($INPUT->files->keyExists("Image".$i)) {

            $image = $INPUT->files->getValue("Image".$i);
            if ($image["size"] != 0) {

                $img = imagecreatefrompng($image["tmp_name"]);
                $img_out_medium = imagecreatetruecolor(400,250);
                imagecopyresampled($img_out_medium, $img, 0,0,0,0,400,250, imagesx($img), imagesy($img));
                $imagename = explode(".",$image["name"]);
                $path = $dirthumb . "/" . $imagename[0] . "_mini_thumb.png";
                $path = $dir."/".$imagename[0].".png";
                imagepng($img_out_medium,$path,9);
                imagedestroy($img_out_medium);
                imagedestroy($img);
                system("/usr/bin/pngquant --force --ext .png ".$path);


                $imgthumb = imagecreatefrompng($image["tmp_name"]);
                $img_out_medium = imagecreatetruecolor(50, 50);
                imagecopyresampled($img_out_medium, $imgthumb, 0, 0, 0, 0, 50, 50, imagesx($imgthumb), imagesy($imgthumb));
                $imagename = explode(".",$image["name"]);
                $path = $dirthumb . "/" . $imagename[0] . "_mini_thumb.png";
                imagepng($img_out_medium, $path, 9);
                imagedestroy($img_out_medium);
                imagedestroy($imgthumb);
                system("/usr/bin/pngquant --force --ext .png " . $path);
            }

            //move_uploaded_file($image["tmp_name"],$dir."/".$image["name"]."_mini_thumb.png");
        }

    }

    require_once("includes/classes/widgets/FormWidget.php");
    $form = new FormWidget(T_("Ajouter de nouvelles images pour le produit")." ".$DB->getScalar("name","tb_products",["id","=",$id]),"",FormWidget::FORM_METHOD_POST,"320px","right");


    $items = [];
    $items[] = ["name" => "Image1", "label" => T_("Image 1"),  "type" => FormWidget::FORM_ITEM_FILE, "validation" => "true","value"=>""];
    $items[] = ["name" => "Image2", "label" => T_("Image 2"),  "type" => FormWidget::FORM_ITEM_FILE, "validation" => "true","value"=>""];
    $items[] = ["name" => "Image3", "label" => T_("Image 3"),  "type" => FormWidget::FORM_ITEM_FILE, "validation" => "true","value"=>""];
    $items[] = ["name" => "Image4", "label" => T_("Image 4"),  "type" => FormWidget::FORM_ITEM_FILE, "validation" => "true","value"=>""];
    $items[] = ["name" => "Image5", "label" => T_("Image 5"),  "type" => FormWidget::FORM_ITEM_FILE, "validation" => "true","value"=>""];
    $items[] = ["name" => "Image6", "label" => T_("Image 6"),  "type" => FormWidget::FORM_ITEM_FILE, "validation" => "true","value"=>""];
    $items[] = ["name" => "Image7", "label" => T_("Image 7"),  "type" => FormWidget::FORM_ITEM_FILE, "validation" => "true","value"=>""];
    $items[] = ["name" => "Image8", "label" => T_("Image 8"),  "type" => FormWidget::FORM_ITEM_FILE, "validation" => "true","value"=>""];
    $items[] = ["name" => "Image9", "label" => T_("Image 9"),  "type" => FormWidget::FORM_ITEM_FILE, "validation" => "true","value"=>""];
    $items[] = ["name" => "Image10", "label" => T_("Image 10"),  "type" => FormWidget::FORM_ITEM_FILE, "validation" => "true","value"=>""];


    $buttons = [
        ["name" => "add", "icon" => "check", "label" => T_("Save Changes"), "type" => FormWidget::FORM_BUTTON_SUBMIT],
        ["name" => "cancel", "icon" => "cancel", "label" => T_("Cancel"), "type" => FormWidget::FORM_BUTTON_LINK, "url" => "users.php"],
    ];


    $TPL->assign("form", $form->generate($items, $buttons));


    require_once("includes/classes/widgets/TableWidget.php");
    $table =


    $columns = array();
    $columns[] = array("name" => T_("#"), "db_name" => "id","width" => "30px");
    $columns[] = array("name" => T_("name"), "db_name" => "name", "width" => "160px");
    $columns[] = array("name" => T_("image"), "db_name" => "image", "width" => "160px");



    $galleryfile = lsfile($dirthumb);
    $gallery = "";
    for ($i=0;$i<count($galleryfile);$i++) {
        $gallery[$i]["id"] = $i+1;
        $gallery[$i]["name"] = $galleryfile[$i];
        $gallery[$i]["image"] = "<img src=\"".$dirthumb."/".$galleryfile[$i]."\"></img>";
    }


    $table = new TableWidget($gallery, T_("No element!"), "");
    $table->setActionsWidth(112);
    $table_gallery = $table->generate($columns, "id", 1, 1, "id", "DESC");



    $TPL->assign("gallery", $table_gallery);
    $content_data = $TPL->fetch("content_produits_pictures.tpl");
    $page->setContent($content_data);
    $page->show();

    die();

}


/**
 *
 */
function displaySuperTable() {

    global $page, $DB;

    require_once("includes/classes/SuperTable.php");


    $categories = $DB->select("*","tb_categories");






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
                "label" => T_("Categories"),
                "column" => "id_category",
                "table" => [
                    "width" => "120px",
                ],
                "form" => [
                    "type" => FormWidget::FORM_ITEM_SELECT,
                    "validation" => "",
                    "add" => true,
                    "modify" => true,
                    "value" => [
                        "source" =>
                            $categories
                        ,
                        "selection" => "en_US"
                    ],
                ]
            ],
            [
                "label" => T_("description"),
                "column" => "description",
                "table" => [
                    "width" => "120px"
                ],
                "form" => [
                    "type" => FormWidget::FORM_ITEM_TEXTAREA,
                    "width" => "400px",
                    "validation" => "",
                    "add" => true,
                    "modify" => true,
                    "value" => ""
                ]
            ],
            [
                "label" => T_("Featured"),
                "column" => "featured",
                "table" => [
                    "width" => "120px",
                    "replace" => [
                        0 => '<span style="color:red">'.T_("No").'</span>',
                        1 => '<span style="color:green">'.T_("Yes").'</span>'
                    ]
                ],
                "form" => [
                    "type" => FormWidget::FORM_ITEM_CHECKBOX,
                    "width" => "400px",
                    "validation" => "",
                    "add" => true,
                    "modify" => true,
                    "value" => true
                ]

            ],

        ];



    class MySuperTable extends SuperTable
    {

        public function callbackFilterRow($row) {

            global $DB;


            $row["id_category"] = $DB->getScalar("name","tb_categories", array("id","=",$row["id_category"]));


            return $row;
        }
    }


    $buttons = [];
    $buttons[] = ["id" => "pictures", "label" => "", "icon" => "image", "tooltip" => T_("Gallerie de photos"), "confirm" => false, "before" => true];



    $st = new MySuperTable("tb_products");
    $st->setLabel("title_table",T_("Produits"));
    $st->setLabel("title_add",T_("Ajouter un produit"));
    $st->setLabel("button_add",T_("Ajouter un produit"));
    $st->setLabel("button_modify",T_("Modifier un produit"));
    $st->setFields($fields);
    $st->SetSortedColumn("tb_products.id", "DESC");
    $st->setActions(true, true, true, $buttons);
    $st->setSearchable(true);
    //$st->setFilter(T_("Categories"),"id_category",$categories);

    $page->setContent($st->display());
    $page->show();

}

// Handle user requests
if ($INPUT->get->keyExists("pictures")) {

    displayPictureForm($INPUT->get->getInt("pictures"));

}

displaySuperTable();