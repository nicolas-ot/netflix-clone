<?php

    ob_start();
    session_start();

    date_default_timezone_set("Europe/Berlin");

    try {
        $con = new PDO("mysql:dbname=webzie;host=localhost", "root", "");
        $con->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_WARNING);
    }
    catch (PDOException $e) {
        exit("Connection failed: " . $e->getMessage());
    }
?>