<H1> page pour afficher les accords</H1>


<?php
function extraireEntreCrochets($chaine) {
    // Utilisation d'une expression régulière pour extraire le contenu entre crochets
    preg_match_all('/\[[^\]]*\]/', $chaine, $resultats);

    // Les résultats sont stockés dans le tableau $resultats
    // La première occurrence contient les parties entre crochets sans les crochets
    return $resultats[0];
}

// Exemple d'utilisation
$chaineOriginale = "Ceci est [du texte] avec [des crochets].";
$resultats = extraireEntreCrochets($chaineOriginale);

// Affichage des résultats
foreach ($resultats as $occurrence) {
    echo $occurrence . PHP_EOL;
}




//$id_chanson=1;
// lecture du fichier
$nom_fichier="test.txt";
$chemin="./fichiers_chanson/";
$le_fichier=fopen($chemin.$nom_fichier,"r");
echo "<HR>";
while (!feof($le_fichier)){


	$chaineOriginale= fgets($le_fichier);
	$resultats = extraireEntreCrochets($chaineOriginale);
	foreach ($resultats as $occurrence) {
		echo $occurrence . PHP_EOL;

	}
	echo "<BR>";
}
fclose($le_fichier);
?>
