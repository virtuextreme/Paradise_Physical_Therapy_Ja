<?php 
    //Developement Connection
    $host='127.0.0.1';
    $db = 'paradise_db';
    $user = 'root';
    $pass = 'p@ssw0rd';
    $charset = 'utf8mb4';
   
   
   
   
   //Remore Database connection
    //$host='remotemysql.com';
    //$db = '8IdmzXv6Za';
    //$user = '8IdmzXv6Za';
    //$pass = 'fcYTjXHaGB';
    //$charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);
   
    $user->insertUser("admin","@dministrat0r");
?>