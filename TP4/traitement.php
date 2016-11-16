
<!DOCTYPE php>
<html>
   <head>
     <title>Bonjour</title>
     <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
     <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
   </head>
   <body>
   
<p><?php
	$nom=$_POST["nom"];
	$prenom=$_POST["prenom"];
	echo "Bonjour ".$prenom ." ".$nom.". Il est ".date("d/m/Y");
?></p>

	</body>
</html>