<?php
    // info for data base
    $dsn = 'mysql:host=localhost;dbname=senan';
    $user = 'root';
    $pass='';
    // info about the connection
    try{
        $db = new PDO($dsn, $user, $pass);
        echo 'OK';
    }
    catch(PDOException $s)
    {
        echo 'NO'. $s->getMessage();
    }