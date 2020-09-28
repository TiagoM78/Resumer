<?php

$ageduvisiteur = 20;

echo '<p>le visiteur a ' . $ageduvisiteur . ' ans</p>';

$prix = 2.5;
$quantite = 10;

$total = $prix * $quantite;

echo '<p>cela coute ' . $total . ' euros</p>';

$age = 8;
 
if ($age <= 12) // SI l'âge est inférieur ou égal à 12
{
    echo "<p>Salut gamin ! Bienvenue sur mon site !<br /></p>";
    $autorisation_entrer = "Oui";
}
else // SINON
{
    echo "Ceci est un site pour enfants, vous êtes trop vieux pour pouvoir  entrer. Au revoir !<br />";
    $autorisation_entrer = "Non";
}
 
echo "<p>Avez-vous l'autorisation d'entrer ? La réponse est : $autorisation_entrer</p>";

$autorisation_entrer = "Oui";

if ($autorisation_entrer == "Oui") // SI on a l'autorisation d'entrer
{
    // instructions à exécuter quand on est autorisé à entrer
}
elseif ($autorisation_entrer == "Non") // SINON SI on n'a pas l'autorisation d'entrer
{
    // instructions à exécuter quand on n'est pas autorisé à entrer
}
else // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
{
    echo "<p>Euh, je ne connais pas ton âge, tu peux me le rappeler s'il te plaît ?</p>";
}

$autorisation_entrer = true;

if ($autorisation_entrer == true)
{
    echo "<p>Bienvenue petit nouveau.</p>";
}
elseif ($autorisation_entrer == false)
{
    echo "<p>T'as pas le droit d'entrer !</p>";
}

$autorisation_entrer = false;

if ($autorisation_entrer)
{
    echo "<p>Bienvenue petit nouveau.</p>";
}
else
{
    echo "<p>T'as pas le droit d'entrer !</p>";
}

$age = 8;
$langue = "anglais";


if ($age <= 12 AND $langue == "français")
{
    echo "<p>Bienvenue sur mon site !</p>";
}
elseif ($age <= 12 AND $langue == "anglais")
{
    echo "<p>Welcome to my website!</p>";
}

$pays = "France";

if ($pays == "France" OR $pays == "Belgique")
{
    echo "<p>Bienvenue sur notre site !</p>";
}
else
{
    echo "<p>Désolés, notre service n'est pas encore disponible dans votre pays !</p>";
}

$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 5)
{
    echo '<p>Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br /></p>';
    $nombre_de_lignes++;
}

$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 5)
{
    echo '<p>Ceci est la ligne n°' . $nombre_de_lignes . '<br /></p>';
    $nombre_de_lignes++;
}

for ($nombre_de_lignes = 1; $nombre_de_lignes <= 5; $nombre_de_lignes++)
{
    echo '<p>Ceci est la ligne n°' . $nombre_de_lignes . '<br /></p>';
}

$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

$prenoms[0] = 'François';
$prenoms[1] = 'Michel';
$prenoms[2] = 'Nicole';

echo $prenoms[1];

$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

echo $coordonnees['ville'];

$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

for ($numero = 0; $numero < 5; $numero++)
{
    echo $prenoms[$numero] . '<br />';
}

$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

$position = array_search('Fraise', $fruits);
echo '"Fraise" se trouve en position ' . $position . '<br />';

$position = array_search('Banane', $fruits);
echo '"Banane" se trouve en position ' . $position;

$phrase = 'Bonjour tout le monde ! Je suis une phrase !';
$longueur = strlen($phrase);
 
 
echo '<p>La phrase ci-dessous comporte ' . $longueur . ' caractères :<br /></p>' . $phrase;

$ma_variable = str_replace('b', 'p', 'bim bam boum');
 
echo $ma_variable;

?>