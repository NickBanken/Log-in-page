<?php
    try{
        $handler = new PDO(
            'mysql:host=localhost;dbname=HikingData',
            'root',
            'qwerty',
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
        $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo $e->getMessage();
        die();
    }
?>