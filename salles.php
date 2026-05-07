 <?php
include "functions.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    ajouterSalle($_POST["nom"], $_POST["capacite"]);
    echo "✔ Salle ajoutée";
}
?>


<!DOCTYPE html>
<html lang="francais">
<head>
    <meta charset="UTF-8">
    <title>salle</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Gestion des Auditoires</h1>
        <h2>Ajouter Salles</h2>
        <nav>
             <a href="index.php">Accueil</a>
 <a href="salles.php">Salles</a>
    <a href="promotion.php">Promotion</a>
    <a href="cours.php">Cours</a>
    <a href="planning.php">Planning</a>
        </nav>
    </header>
    
</body>
</html>



<form method="POST">
    Nom salle: <input name="nom" required><br>
    Capacité: <input name="capacite" required><br>
    <button type="submit">Ajouter</button>
</form>