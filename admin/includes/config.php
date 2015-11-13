<?php

define("CONFIG_CHARSET","utf-8");
define("CONFIG_TIMEZONE","America/Montreal");
define("CONFIG_WEBSITE_NAME","Eug & Ced");
define("CONFIG_WEBSITE_URL","http://localhost/eugced/");
if (!isset($_SERVER["HTTP_HOST"])) {
    define("CONFIG_WEBSITE_CURRENT_URI", "");
} else {
    define("CONFIG_WEBSITE_CURRENT_URI", "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]);
}
define("CONFIG_ROOT_PATH", "/var/www/html/eugced/");
define("CONFIG_VERSION_NUMBER","1.0");

define("CONFIG_DB_HOSTNAME", "127.0.0.1");
define("CONFIG_DB_USERNAME", "root");
define("CONFIG_DB_PASSWORD", "");
define("CONFIG_DB_NAME","eugced");

define("CONFIG_SESSION_IDENTIFIER","eugced");

define("CONFIG_WEBSITE_PUBLIC_URL","http://localhost/eugced/");
define("CONFIG_WEBSITE_PUBLIC_PATH","/var/www/html/eugced/");

// User levels

class UserLevel {
    const NORMAL = 1;
    const STAFF = 100;
    const ADMIN = 255;
}

