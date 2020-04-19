<?php
    use \RedBeanPHP\R as R;
    R::setup('mysql:host=mysql;dbname=db', 'root', 'pass');
    R::freeze(true);
    if(!R::testConnection()){
        exit("Нет подключения к бд");
    }