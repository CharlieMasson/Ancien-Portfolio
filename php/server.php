<?php 
$host = "localhost";
$dbname = "portfolio";
$admin = "root";
$password = "";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname" , $admin , $password);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->query('SET NAMES utf8');
}
catch(PDOException $e){
    die(print_r("erreur bdd:", $e->getMessage()));
}
?>