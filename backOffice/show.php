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
$stmt->execute();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Articles</title>
</head>
<body>
    <h1>Articles</h1>
    <a class="btn btn-success" href="add.php">Ajouter</a>
    <table class="table">
        <tr>
            <th class="col">#</th>
            <th class="col">id</th>
            <th class="col">Title</th>
            <th class="col">Subtitle</th>
            <th class="col">img</th>
            <th class="col">texts</th>
            <th class="col">company</th>
            <th class="col">Note</th>
            <th class="col">category</th>
            <th class="col">date</th>
            <th class="col">Modifier</th>
            <th class="col">Supprimer</th>
        </tr>
        <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
        <tr>
            <th class="row"><?=$row['id']?></th>
            <th class="row"><?=$row['title']?></th>
            <th class="row"><?=$row['subtitle']?></th>
            <th class="row"><?=$row['img']?></th>
            <th class="row"><?=$row['texts']?></th>
            <th class="row"><?=$row['company']?></th>
            <th class="row"><?=$row['mark']?>/100</th>
            <th class="row"><?=$row['category']?></th>
            <th class="row"><?=$row['date']?></th>
            <th class="row"><a class="btn btn-primary" href="edit.php?id=<?=$row['id']?>">Modifier</a></th>
            <th class="row"><a class="btn btn-danger" href="delete.php?id=<?=$row['id']?>">Delete</a></th>
        </tr>
        <?php endwhile;?>
    </table>
</body>
</html>
