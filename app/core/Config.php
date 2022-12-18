<?php

//website name
define("WEBSITE_TITLE", 'Best shoes');

//database name
define('DB_NAME', "bestshoes");
define('DB_USER', "root");
define('DB_PASS', "");
define('DB_TYPE', "mysql");
define('DB_HOST', "localhost");


define('THEME', 'template_ecommerce/');
define('NODE', 'node_modules/');


//define debug mode
define('DEBUG', true);

if (DEBUG) {
    ini_set('display_errors', 1);
} else {
    ini_set('display_errors', 0);
}
