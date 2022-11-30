<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title> Mon premier php </title>
</head>
<body>
<?php
/*$utilisateur = array(
    'nom' => 'Dupont',
    'prenom' => 'Jean',
    'age' => 25,
    'ville' => 'Paris'
);

$utilisateur = [
    'nom' => 'Dupont',
    'prenom' => 'Jean',
    'age' => 25,
    'ville' => 'Paris'
];

$utilisateur['nom'] = 'Dupont';

$utilisateur[] = "Nouvelle valeur";

foreach ($utilisateur as $key => $value) {
    echo $key . ' : ' . $value . '<br>';
}*/?>
<p>Voiture : <?php
$marque = "Renault";
$immatriculation = "256AB34";
$couleur = "Rouge";
$nbSieges = 5;
echo $immatriculation . ' de marque ' . $marque . ' (couleur ' . $couleur . ', ' . $nbSieges . ') ';
?>
</p>
<div></div>
<?php
$voiture = [
    'marque' => 'Renault',
    'immatriculation' => '256AB34',
    'couleur' => 'Rouge',
    'nbSieges' => 5
];
var_dump($voiture);
?>

<!--Affichez le contenu de la “voiture-tableau” au même format HTML <p> Voiture 256AB34 de marque Renault (couleur bleu, 5 sieges) </p>-->
<p>Voiture : <?php
echo $voiture['immatriculation'] . ' de marque ' . $voiture['marque'] . ' (couleur ' . $voiture['couleur'] . ', ' . $voiture['nbSieges'] . ') ';
    ?>
</p>
<div></div>
<?php
$voitures = [
    [
        'marque' => 'Renault',
        'immatriculation' => '256AB34',
        'couleur' => 'Rouge',
        'nbSieges' => 5
    ],
    [
        'marque' => 'Peugeot',
        'immatriculation' => '1234AB56',
        'couleur' => 'Bleu',
        'nbSieges' => 5
    ],
    [
        'marque' => 'Citroen',
        'immatriculation' => '7890CD12',
        'couleur' => 'Vert',
        'nbSieges' => 5
    ]
];
var_dump($voitures);
?>

<!--Modifier votre code d’affichage pour écrire proprement en HTML un titre “Liste des voitures :” puis une liste (<ul><li>...</li></ul>) contenant les informations des voitures.-->
<h1>Liste des voitures :</h1>
<ul>
    <?php
    if (count($voiture) != 0) foreach ($voitures as $voiture) {
        echo '<li>Voiture : ' . $voiture['immatriculation'] . ' de marque ' . $voiture['marque'] . ' (couleur ' . $voiture['couleur'] . ', ' . $voiture['nbSieges'] . ') </li>';}
    else echo 'Il n’y a aucune voiture.';
    ?>
</ul>

</body>
</html>