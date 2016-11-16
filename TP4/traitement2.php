
<!DOCTYPE php>
<html>
   <head>
     <title>Bonjour</title>
     <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
     <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
   </head>
   <body>
   
<p><?php
	$type=$_POST["argent"];
	$nombre=$_POST["n"];
	if($type=="euro"){
		$nombre1=$nombre*6.55957;
		echo $nombre." euro=".$nombre1." franc";
	}
	if($type=="franc"){
		$nombre1=$nombre/6.55957;
		echo $nombre." franc=".$nombre1." euro";
	}
?></p>

	</body>
</html>