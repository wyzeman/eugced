<?php
$MENU_ITEMS = [
    [
        "label" => T_("System Summary"),
        "url" => "mainpage.php",
        "user_level" => UserLevel::STAFF
    ],  [
        "label" => T_("Produits"),
        "url" => "produits.php",
        "user_level" => UserLevel::STAFF,

    ], [
        "label" => T_("Categories"),
        "url" => "categories.php",
        "user_level" => UserLevel::STAFF,

    ], [
        "label" => T_("User Manager"),
        "url" => "users.php",
        "user_level" => UserLevel::ADMIN
    ], [
        "label" => T_("Exit"),
        "url" => "logoff.php",
        "user_level" => UserLevel::STAFF
    ],
];

