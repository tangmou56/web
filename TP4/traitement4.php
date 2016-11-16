
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

$nb=cherche("SELECT COUNT(*) FROM `Equipes`");
echo " Il y a ".$nb[0]." personnes";

$nbparis=cherche("SELECT COUNT(*) FROM Equipes WHERE ")

?></p>
	</body>
</html>