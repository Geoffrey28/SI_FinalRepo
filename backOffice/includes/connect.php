<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=siteperfect','root', 'root');
    $conn->exec("SET NAMES UTF8");
} catch(PDOException $exception){
    die("Revenez plus tard.");
}