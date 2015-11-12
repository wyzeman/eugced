<?php

require_once("includes/init.php");
require_once("includes/classes/pages/CustomPage.php");

$page = new CustomPage(UserLevel::STAFF);
$page->setTitle(T_("Reporters"));
$page->setMenu($MENU_ITEMS);

/**
 *
 */
function displaySuperTable() {

    global $page, $DB, $TPL;

    require_once("includes/classes/SuperTable.php");

    $fields =
        [
            [
                "label" => T_("Date added"),
                "column" => "timestamp",
                "table" => [
                    "width" => "60px",
                ],
            ],
            [
                "label" => T_("Name"),
                "column" => "name",
                "table" => [
                    "width" => "120px"
                ],
                "form" => [
                    "type" => FormWidget::FORM_ITEM_INPUT,
                    "validation" => "",
                    "add" => true,
                    "modify" => true,
                    "width" => "320px",
                    "value" => "",
                ]
            ],
            [
                "label" => T_("Email Address"),
                "column" => "email_address",
                "table" => [
                    "width" => "120px"
                ],
                "form" => [
                    "type" => FormWidget::FORM_ITEM_INPUT,
                    "validation" => "",
                    "add" => true,
                    "modify" => true,
                    "width" => "400px",
                    "value" => "",
                ]
            ],
            [
                "label" => T_("Website"),
                "column" => "website",
                "table" => [
                    "width" => "120px"
                ],
                "form" => [
                    "type" => FormWidget::FORM_ITEM_INPUT,
                    "validation" => "",
                    "add" => true,
                    "modify" => true,
                    "width" => "400px",
                    "value" => "",
                ]
            ],
            [
                "label" => T_("Twitter"),
                "column" => "twitter",
                "table" => [
                    "width" => "120px"
                ],
                "form" => [
                    "type" => FormWidget::FORM_ITEM_INPUT,
                    "validation" => "",
                    "add" => true,
                    "modify" => true,
                    "width" => "200px",
                    "value" => "",
                ]
            ],
            [
                "label" => T_("Facebook"),
                "column" => "facebook",
                "table" => [
                    "width" => "120px"
                ],
                "form" => [
                    "type" => FormWidget::FORM_ITEM_INPUT,
                    "validation" => "",
                    "add" => true,
                    "modify" => true,
                    "width" => "200px",
                    "value" => "",
                ]
            ],            [
                "label" => T_("Youtube"),
                "column" => "youtube",
                "table" => [
                    "width" => "120px"
                ],
                "form" => [
                    "type" => FormWidget::FORM_ITEM_INPUT,
                    "validation" => "",
                    "add" => true,
                    "modify" => true,
                    "width" => "200px",
                    "value" => "",
                ]
            ],

        ];



    class MySuperTable extends SuperTable
    {


        public function callbackAddPost($items,  $foreign_items, $insert_id) {

            global $DB;
            $DB->update("tb_keys",["timestamp"=>time()],["id","=",$insert_id]);
        }

        public function callbackAddValidate($items, $foreign_items) {

            global $DB;

            if ($items["name"] == "") {
                return ["result"=>false,"error"=>T_("Name is empty!")];
            }

            return ["result"=>true, "error"=>""];
        }

        public function callbackModifyValidate($items, $foreign_items, $modify_id) {

            global $DB;

            if ($items["name"] == "") {
                return ["result"=>false,"error"=>T_("Name is empty!")];
            }

            return ["result"=>true, "error"=>""];
        }

        public function callbackFilterRow($row) {

            global $DB;

            if ($row["timestamp"] > 0) {
                $row["timestamp"] = date("m/d/Y", $row["timestamp"]);
            }

            return $row;
        }


    }


    $st = new MySuperTable("tb_reporters");
    $st->setPayload($TPL->fetch("payloads/reporters.tpl"));
    $st->setLabel("title_table",T_("Reporters"));
    $st->setLabel("title_add",T_("Add Reporter"));
    $st->setLabel("button_add",T_("Add Reporter"));
    $st->setLabel("button_modify",T_("Modify Reporter"));
    $st->setFields($fields);
    $st->SetSortedColumn("tb_reporters.id", "DESC");
    $st->setActions(true, true, true, []);
    $st->setSearchable(true);

    $st->setButtonsAdd([["name" => "scrap", "icon" => "cancel", "label" => T_("Scrap from link"), "type" => FormWidget::FORM_BUTTON_JAVASCRIPT, "url" => ""]]);
    $page->setContent($st->display());
    $page->show();

}


if ($INPUT->get->keyExists("scrap")) {
    $url = $INPUT->get->noTags("scrap");

    $items = [
        "name" => "",
        "email" => "",
        "website" => "",
        "twitter" => "",
        "facebook" => "",
        "youtube" => ""
    ];


    $content = file_get_contents($url);
    

    print(json_encode($items));
    die();
}
//

displaySuperTable();