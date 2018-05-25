<?php
if (!isset($_POST['title']) || !isset($_POST['subtitle']) || !isset($_POST['img']) || !isset($_POST['texts']) || !isset($_POST['company']) || !isset($_POST['mark']) || !isset($_POST['category'])) {
    header('location: ../add.php?error=nopostdatatoadd');
    exit;
}
require_once '../includes/connect.php';
/*
$picture=$_FILES['image']['name'];
$folder='img/';

move_uploaded_file($_FILES['image']['tmp_name'], "folder".$picture);
*/
if (!empty($_POST['submit'])) {
    $addform = "INSERT INTO `articles`
      (
      `title`,
      `subtitle`,
      `img`,
      `texts`,
      `company`,
      `mark`,
      `category` )
    VALUES
      (
      :title,
      :subtitle,
      :img,
      :texts,
      :company,
      :mark,
      :category )
    ;";
    $stmt = $conn->prepare($addform);
    $stmt->bindValue(':title', $_POST['title']);
    $stmt->bindValue(':subtitle', $_POST['subtitle']);
    $stmt->bindValue(':img', $_POST['img']);
    $stmt->bindValue(':texts', $_POST['texts']);
    $stmt->bindValue(':company', $_POST['company']);
    $stmt->bindValue(':mark', $_POST['mark']);
    $stmt->bindValue(':category', $_POST['category']);
    $stmt->execute();
}
header('Location: ../show.php');
