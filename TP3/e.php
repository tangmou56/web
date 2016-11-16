
<!DOCTYPE php>
<html>
   <head>
     <title>Exercice3</title>
     <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
     <link rel="stylesheet" type="text/css" href="style1.css" media="screen" />
   </head>
   <body>


   <p><?php
	echo "<ol>";
	for($i=1;$i<=10;$i++){
		echo "<li class='ti'>Table de ".$i."</li>";
		echo "<ul>";
		for($j=1;$j<=10;$j++){
			echo "<li class='under'>".$i."x".$j."=".$j*$i."</li>";
		}
		echo "</ul>";
	}
	echo "</ol>";
	
	$tab=array(
	"LUNDI"=>"Sole à l'indienne","mardi"=>"Boeuf bourguignon");

		echo "{$tab['LUNDI']}";	
	
	
	?></p>

   </body>