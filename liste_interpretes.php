<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    </head>
<BODY>


<A href='page_chanson.php'>la page</A><BR>
<?PHP
include ('connexion.php');
echo '<H1>Mon appli de chansons</H1>';
$req_interprete="select * from Interprete";
$resu=mysqli_query($idconnexion,$req_interprete);
echo $req;
echo "<BR><HR color=blue>";
echo "<TABLE border=1>";
while(  $line = mysqli_fetch_array($resu)){
                echo "<TR>";
		echo "<TD>".$line[0];
		$id_interprete=$line[0];
		echo "</TD>";
                echo "<TD>".$line[1]."</TD>";
                echo "<TD>".$line[2]."</TD>";
                echo "</TD>";
                }

echo "</TABLE>";


?>
