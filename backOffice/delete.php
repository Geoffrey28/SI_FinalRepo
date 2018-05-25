<?php
if (!isset($_GET['id'])) {
    header('Location: show.php?error=noidprovideddelete');
    exit;
}
require_once "includes/connect.php";
$requete = "SELECT
`id`,
`title`,
`subtitle`,
`img`,
`texts`,
`company`,
`mark`,
`category`,
`date`
FROM
  `articles`
WHERE
  `id` = :id
;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T'es sur?</title>
</head>
<body>
<form action="functions/dodelete.php" method="post">
    <input type="hidden" name="id" value="<?=$row['id']?>">
    <label for="">T'es sur de vouloir supprimer<br> <?=$row['title']?></label><br>
    <input type="submit" value="OUI">
</form>
</body>
</html>
