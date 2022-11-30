<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title> testVoiture </title>
</head>
<body>
<?php
require_once 'Voiture.php';
$voiture1 = new Voiture('256AB34', 'Renault', 'Rouge', 5);
echo $voiture1;
setCouleur($voiture1, ['Bleu']);
?>
</body>
</html>



