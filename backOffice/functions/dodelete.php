<?php
if (!isset($_POST['id'])) {
    header('Location: delete.php?error=nopostdatadelete');
    exit;
}
var_dump($_POST);
require_once "../includes/connect.php";
$requete = "DELETE FROM
`articles`
WHERE
`id` = :id
;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();

header('Location: ../show.php');
