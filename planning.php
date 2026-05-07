<?php
include "functions.php";

genererPlanning();

$planning = lirePlanning();
echo"Ajouté avec succès";
?>



<!DOCTYPE html>
<html lang="francais">
<head>
    <title>planning</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<header>
    <h1> gestion des auditoires</h1>
    <h2>planning</h2>
    <nav>
<a href="index.php">Accueil</a>
    <a href="salles.php">Salles</a>
    <a href="promotion.php">Promotion</a>
    <a href="cours.php">Cours</a>
    <a href="planning.php">Planning</a>

    </nav>
</header>


<table border="1">
<tr>
<th>Jour</th>
<th>Heure</th>
<th>Promo</th>
<th>Cours</th>
<th>Salle</th>
</tr>

<?php foreach($planning as $p): ?>
<tr>
<td><?= $p["jour"] ?></td>
<td><?= $p["heure"] ?></td>
<td><?= $p["promo"] ?></td>
<td><?= $p["cours"] ?></td>
<td><?= $p["salle"] ?></td>
</tr>
<?php endforeach; ?>
</table>


</body>
</html>