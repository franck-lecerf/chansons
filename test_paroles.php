<H1>Les Paroles</H1>


<?PHP
function enleverEntreCrochets($chaine) {
    // Utilisation d'une expression régulière pour enlever le contenu entre crochets
    $chaineSansCrochets = preg_replace('/\[[^\]]*\]/', '', $chaine);
    
    return $chaineSansCrochets;
}

// Exemple d'utilisation
$chaineOriginale = "Ceci est [du texte] avec [des crochets].";
$chaineModifiee = enleverEntreCrochets($chaineOriginale);

echo $chaineModifiee;

//$id_chanson=1;
// lecture du fichier
$nom_fichier="test.txt";
$chemin="./fichiers_chanson/";
$le_fichier=fopen($chemin.$nom_fichier,"r");

while (!feof($le_fichier)){


echo  enleverEntreCrochets(fgets($le_fichier)). '<br>';

}
fclose($le_fichier);
?>
