<?php
require "environment.php";

define("BASE_URL", "http://projeto1");

global $config;
$config = array();

if (ENVIRONMENT == "development") {
	$config["dbname"] = "mydb";
	$config["host"]   = "localhost";
	$config["dbuser"] = "root";
	$config["dbpass"] = "";
} else {
	$config["dbname"] = "mydb";
	$config["host"]   = "localhost";
	$config["dbuser"] = "root";
	$config["dbpass"] = "";
}