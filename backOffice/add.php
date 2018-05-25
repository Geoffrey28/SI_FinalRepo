<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Articles</title>
</head>
<body>

<form action="functions/doadd.php" method="post">
    <input type="text" placeholder="Titre" name="title">
    <input type="text" placeholder="Sous-titre" name="subtitle">
    <input type="text" placeholder="Image" name="img">
    <!--  <input type="file" placeholder="Image" name="img"> -->
    <textarea name="texts" placeholder="Contenu" cols="30" rows="10"></textarea>
    <input type="text" placeholder="Nom de la compagnie" name="company">
    <input type="text" placeholder="Note" name="mark"><label for="mark">/100</label>
    <select name="category">
        <option selected disabled hidden>Catégories</option>
        <option value="gastronomie">Gastronomie</option>
        <option value="bienEtre">Bien-être</option>
        <option value="Cultures">Culture</option>
        <option value="Sports">Sport</option>
    </select>
    <input type="submit" value="Envoyer" name="submit">
</form>
</body>
</html>