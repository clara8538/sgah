<?php
include "functions.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    ajouterCours($_POST["nom"]);
    echo "✔ Cours ajouté";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Cours</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Gestion des Auditoires</h1>
    <h2>Ajouter cours</h2>

    <nav>
        <a href="index.php">accueil</a>
        <a href="salle.php">Salles</a>
        <a href="promotion.php">Promotion</a>
        <a href="cours.php">Cours</a>
        <a href="planning.php">Planning</a>
    </nav>
</header>

<h2>Cours</h2>

<form method="POST">
    <select name="nom">
        <option value="PHP">PHP</option>
        <option value="Algorithme">HTML/CSS</option>
        <option value="Langage Python">Langage Pyton</option>
        <option value="Réseaux Information">Réseaux</option>
    </select>

    <br><br>

    <button type="submit">Ajouter</button>
</form>

</body>
</html>