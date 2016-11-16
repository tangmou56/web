
<!DOCTYPE php>
<html>
   <head>
     <title>Bonjour</title>
     <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
     <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
   </head>
   <body>
   
<p><?php
	$log=$_POST["log"];
	$cle=$_POST["cle"];
	$tab=array(
	"nom"=>"MARIE",
	"prenom"=>"ANNA",
	"age"=>"19",
	"log"=>"marie1997",
	"cle"=>"11223344",
	"mail"=>"marieanna@gmail.com");
	if($log=="{$tab['log']}"&&$cle=="{$tab['cle']}"){
		echo "Bonjour {$tab['prenom']}";
	}
	else{
		echo "Mot de passe ou login incorrecte";
	}
?></p>

	</body>
</html>