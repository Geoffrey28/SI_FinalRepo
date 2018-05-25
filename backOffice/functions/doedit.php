<?php
if (!isset($_POST['title']) || !isset($_POST['subtitle']) || !isset($_POST['img']) || !isset($_POST['texts']) || !isset($_POST['company']) || !isset($_POST['mark']) || !isset($_POST['category'])) {
    header('location: ../edit.php');
    exit;
}
require_once "../includes/connect.php";
$requete = "UPDATE
    `articles`
SET
    `title` = :title,
    `subtitle` = :subtitle,
    `img` = :img,
    `texts` = :texts,
    `company` = :company,
    `mark` = :mark,
    `category` = :category
WHERE
    `id` = :id
;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':subtitle', $_POST['subtitle']);
$stmt->bindValue(':img', $_POST['img']);
$stmt->bindValue(':texts', $_POST['texts']);
$stmt->bindValue(':company', $_POST['company']);
$stmt->bindValue(':mark', $_POST['mark']);
$stmt->bindValue(':category', $_POST['category']);
$stmt->execute();
header('location : ../show.php');
