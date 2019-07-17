<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('config/config.php');
require_once 'helpers/url_helper.php';
require_once 'helpers/session_helper.php';

spl_autoload_register(function($className){
	require_once('libraries/'.$className.'.php');
});
