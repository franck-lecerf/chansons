<H1> page pour afficher laliste des accords</H1>


<?php
function extraireEntreCrochets($chaine) {
    // Utilisation d'une expression régulière pour extraire le contenu entre crochets
    preg_match_all('/\[[^\]]*\]/', $chaine, $resultats);

    // Les résultats sont stockés dans le tableau $resultats
    // La première occurrence contient les parties entre crochets sans les crochets
    return $resultats[0];
}






//$id_chanson=1;
// lecture du fichier
$nom_fichier="test.txt";
$chemin="./fichiers_chanson/";
$le_fichier=fopen($chemin.$nom_fichier,"r");
echo "<HR>";
$liste_accords=array();
while (!feof($le_fichier)){


	$chaineOriginale= fgets($le_fichier);
	$resultats = extraireEntreCrochets($chaineOriginale);
	foreach ($resultats as $occurrence) {
		echo $occurrence . PHP_EOL;
		$liste_accords[$occurence]++;
	}
	echo "<BR>";
}
foreach($liste_accords as $key => $accord) {
      echo $accord.' a la clé '.$key.'<br />';
   }
fclose($le_fichier);
?>
