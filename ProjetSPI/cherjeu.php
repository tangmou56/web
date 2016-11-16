<html>
   <head>
     <title>Ludothèque</title>
     <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
     <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
   </head>



   <body>	
		<div class="title">
   		<br/>
   		
		<h1 class="inlinenom">Ludothèque de l'université</h1>
        <h1 class="inlinetile">Chercher</h1>
		</div>
        <div class="lien">
            <hr/>
            
            		<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href ="ludotheque.html">acceuil</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href ="info.php">infomation</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href ="horaires.php">horaires</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href ="cherjeu.php">chercher</a></h2>
            <hr/>
        </div>

			
		<div class="textimg">
		<img class="tex" src="cher.jpeg" />
		</div>
         <br/>
		<div class="text">
		<div class="textposition">
		<form method="post" action="chercher.php">
		Age : <input name="age" size="25px"/> <br /> <br />
		Nombre de joueurs : <input name="joueur" /><br /><br />
		Caractère : <select name="type">
		 <?php
                $requete="SELECT DISTINCT(Carac) FROM VR_grp10_Jeux";

				$Serveur="info.univ-lemans.fr";
				$Utilisateur="info201a_user";
				$MotDePasse="com72";

                $LienBase=mysql_connect($Serveur,$Utilisateur,$MotDePasse);

                $retour=mysql_select_db("info201a",$LienBase);

                if(!$retour){
                    echo "impossible de connecter";}

                $Reponse = mysql_query($requete,$LienBase);
                while($r=mysql_fetch_array($Reponse)){ 
                    echo "<option value='".$r[0]."'>".$r[0]."</option>";
                 }
                
                ?>
                </select><br /><br />
		<input type="submit" value="Valider" name = "valider" />
		</div>
		</form>

		</div>
	
   </body>

</html>
