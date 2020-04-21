<?php
    error_reporting(E_ALL);
    ini_set('display_errors','On');
    session_start();
    require_once "vendor/autoload.php";
    require_once "database.php";
    require_once "Auth.php";
    require_once "core/App.php";
    require_once "core/Controller.php";
    $app = new App;