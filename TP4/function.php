
<!DOCTYPE php>
<html>
   <head>
     <title>Bonjour</title>
     <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
     <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
   </head>
   <body>
   
<p><?php

function cherche($requete){
$Serveur="info.univ-lemans.fr";
$Utilisateur="info201a_user";
$MotDePasse="com72";

$LienBase=mysql_connect($Serveur,$Utilisateur,$MotDePasse);

$retour=mysql_select_db("info201a",$LienBase);

if(!$retour){
echo "impossible de connecter";}

$Reponse = mysql_query($requete,$LienBase);
$r=mysql_fetch_array($Reponse);
return $r;

}


//paramètres de connexion à la base de données $Base="nom-base";
$Serveur="info.univ-lemans.fr";
$Utilisateur="info201a_user";
$MotDePasse="com72";

$LienBase=mysql_connect($Serveur,$Utilisateur,$MotDePasse);

$retour=mysql_select_db("info201a",$LienBase);
 
if(!$retour){
echo "impossible de connecter";}

$Requete="SELECT * FROM Equipes";

$Reponse = mysql_query($Requete,$LienBase);
$Comptnombre="SELECT COUNT(*) FROM `Equipes`";

$a=mysql_fetch_array($Reponse);
echo " ".$a[1];
$a=mysql_fetch_array($Reponse);
echo " ".$a[1];
$r=mysql_query($Comptnombre,$LienBase);
$rr=mysql_fetch_array($r);
echo " Il y a ".$rr[0]." personnes";

$aa=cherche("SELECT * FROM Equipes");

echo $aa[0];


?></p>
	</body>
</html>