
<?php
include "functions.php";

if($_POST){
    ajouterPromo($_POST["nom"],$_POST["effectif"]);
    echo"ajouté avec succès";
}
?>

<!DOCTYPE html>
<html lang="francais">
<head>
    <meta charset="UTF-8">
    <title>promotion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Gestion des Auditoires</h1>
        <h2>Ajouter promotion</h2>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="salles.php">Salles</a>
    <a href="promotion.php">Promotion</a>
    <a href="cours.php">Cours</a>
    <a href="planning.php">Planning</a>

        </nav>
    </header>

<form method="POST">
<select name="nom">
    <option>L1 Informatique</option>
    <option>L2 Informatique</option>
    <option>L3 Informatique</option>
    <option>L4 Informatique</option>
</select><br>

Effectif: <input name="effectif"><br>
<button>Ajouter</button>
</form>

</body>
</html>