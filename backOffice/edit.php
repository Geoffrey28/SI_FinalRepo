<?php
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
;";
$stmt = $conn->prepare($requete);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Articles</title>
</head>
<body>

<form action="functions/doedit.php" method="post">
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
    <input type="text" placeholder="Titre" value="<?=$row['title']?>" name="title">
    <input type="text" placeholder="Sous-titre" value="<?=$row['subtitle']?>" name="subtitle">
    <input type="text" placeholder="Image" value="<?=$row['img']?>" name="img">
    <!--  <input type="file" placeholder="Image" name="img"> -->
    <textarea name="texts" placeholder="Contenu" cols="30" rows="10"><?=$row['texts']?></textarea>
    <input type="text" placeholder="Nom de la compagnie" value="<?=$row['company']?>" name="company">
    <input type="text" placeholder="Note" value="<?=$row['mark']?>" name="mark"><label for="mark">/100</label>
    <select name="category">
        <option value="gastronomie">Gastronomie</option>
        <option value="bienEtre">Bien-être</option>
        <option value="Cultures">Culture</option>
        <option value="Sports">Sport</option>
    </select>
    <input type="submit" value="Envoyer" name="submit">
</form>

</body>
</html>