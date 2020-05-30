<?php
 
$config = array(
    "db" => array(
        "dbname" => "mote",
        "username" => "root",
        "password" => "admin",
        "host" => "localhost"
    ),
    "paths" => array(
        "images" => array(
            "content" => $_SERVER["DOCUMENT_ROOT"] . "/images/content",
            "layout" => $_SERVER["DOCUMENT_ROOT"] . "/images/layout"
        )
    ),
    "web" => array(
        "defaultNoteCount" => 10,
    ),
);

/*
    Creating constants for heavily used paths makes things a lot easier.
    eg. require_once(LIBRARY_PATH . "Paginator.php")
*/
defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));
 
defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));

/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);

?>