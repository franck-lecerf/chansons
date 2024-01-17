<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    </head>
<BODY>


<A href='page_chanson.php'>la page</A><BR>
<?PHP
include ('connexion.php');
echo '<H1>Mon appli de chansons</H1>';
$req_interprete="select ID,Nom,Prenom from Interprete";
$resu=mysqli_query($idconnexion,$req_interprete);
echo $req;
echo "<BR><HR color=blue>";
echo "<TABLE border=1>";
while(  $line = mysqli_fetch_array($resu)){
                echo "<TR>";
		echo "<TD>".$line[0];
		$id_interprete=$line[0];
		$req_chansons="select * from Chanson where Interprete=$id_interprete"; 
		echo $req_chansons;
		$resu_chansons=mysqli_query($idconnexion,$req_chansons);
			while(  $line_chansons = mysqli_fetch_array($resu_chansons)){
			echo "<BR>".$line_chansons[0];
			echo "<BR>".$line_chansons[1];
			echo "<BR>".$line_chansons[2];
			echo "<BR>".$line_chansons[3];
			}
		echo "</TD>";
                echo "<TD>".$line[1]."</TD>";
                echo "<TD>".$line[2]."</TD>";
                echo "</TD>";
                }

echo "</TABLE>";


?>
