<?php

require_once("includes/init.php");
require_once("includes/classes/pages/CustomPage.php");

$page = new CustomPage(UserLevel::ADMIN);
$page->setTitle(T_("Produits"));
$page->setMenu($MENU_ITEMS);


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


            $row["id_category"] = $DB->getScalar("name","tb_categories", array("id","=",$row["id"]));


            return $row;
        }
    }


    $buttons = [];



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



displaySuperTable();