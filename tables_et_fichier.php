<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    </head>
<BODY>
<?PHP
include ('connexion.php');
echo '<H1>Les tables</H1>';
$req_interprete="select *  from Interprete";
$resu=mysqli_query($idconnexion,$req_interprete);
echo $req;
echo "<BR><HR color=blue>";
echo "<TABLE border=1>";
while(  $line = mysqli_fetch_array($resu)){
                echo "<TR>";
                echo "<TD>".$line[0]"</TD>";
                echo "<TD>".$line[1]."</TD>";
                echo "<TD>".$line[2]."</TD>";
                echo "</TD>";
                }

echo "</TABLE>";

$req_interprete="select *  from Interprete";
$resu=mysqli_query($idconnexion,$req_interprete);
echo $req;
echo "<BR><HR color=blue>";
echo "<TABLE border=1>";
while(  $line = mysqli_fetch_array($resu)){
                echo "<TR>";
                echo "<TD>".$line[0]"</TD>";
                echo "<TD>".$line[1]."</TD>";
                echo "<TD>".$line[2]."</TD>";
                echo "</TD>";
                }

echo "</TABLE>";

?>

