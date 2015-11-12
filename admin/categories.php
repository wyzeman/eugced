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
            ]
        ];



    class MySuperTable extends SuperTable
    {


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