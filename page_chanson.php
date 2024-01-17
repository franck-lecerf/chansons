<?PHP

//$id_chanson=1;
// lecture du fichier
$nom_fichier="test.txt";
$chemin="./fichiers_chanson/";
$le_fichier=fopen($chemin.$nom_fichier,"r");

while (!feof($le_fichier)){


echo fgets($le_fichier). '<br>';

}
fclose($le_fichier);
?>
