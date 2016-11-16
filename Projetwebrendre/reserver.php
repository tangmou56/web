<p><?php
    $nom=$_POST["nom"];
    $date=$_POST["date"];
    $mail=$_POST["mail"];
    $jeux=$_POST["jeux"];




$requete="SELECT * FROM VR_grp10_Paniers";
$requetedis="SELECT * FROM VR_grp10_JeuxLudotheque";
$Serveur="info.univ-lemans.fr";
$Utilisateur="info201a_user";
$MotDePasse="com72";

$LienBase=mysql_connect($Serveur,$Utilisateur,$MotDePasse);

$retour=mysql_select_db("info201a",$LienBase);

if(!$retour){
echo "impossible de connecter";}

$Reponse = mysql_query($requete,$LienBase);
$Reponsemax = mysql_query($requete,$LienBase);
$Reponsedis = mysql_query($requetedis,$LienBase);
		$max=0;
	while($rmax=mysql_fetch_array($Reponsemax)){
		if($nom==$rmax[1]||$mail==$rmax[2]){
			$max=$max+1;
		}
	}
    while($rdis=mysql_fetch_array($Reponsedis)){
        if($rdis[0]==$jeux){
            $ndisp=$rdis[2];
        }
    }
 $today=date("Y-m-d");
    $possible=1;
while($r=mysql_fetch_array($Reponse)){
    if($jeux==$r[0]){
        if(strtotime($date)<strtotime($today)){
                    $possible=0;
                   
        }  
        if($ndisp<=0){
            $possible=0;
            
        }
        if($max>=3){
            $possible=0;
            
        }      
    }
}
     if(strtotime($date)<strtotime($today)){
         echo 'Choisir une date dans la future. ';
     }
     if($ndisp<=0){
        echo 'Les jeux sont touts en réservé. ';
     }
    if($max>=3){
        echo "Vous pouvze réserver au maximale 3 jeux. ";
    }        
    
    
    
    if($possible==0){
        echo " Veuillez chiosir un autre date ou jeux.";
        echo "<a href ='horaires.php'>Retourner a la page précédent.</a>";
    }
    else{
       $requete="INSERT INTO `VR_grp10_Paniers` (`Nom`, `Client`, `Admail`, `Creneau`) VALUES ('".$jeux."', '".$nom."', '".$mail."', '".$date."');";
        $requetedis="UPDATE VR_grp10_JeuxLudotheque SET NbJeuxDispos=NbJeuxDispos-1 WHERE Nom='".$jeux."';";
         $Reponses = mysql_query($requete,$LienBase);
        $Reponsesdis = mysql_query($requetedis,$LienBase);
           echo "Réservation succés.";
        
        echo "<a href ='horaires.php'>Retourner a la page précédent.</a>";
    }
    
    
    
    
    
    
    ?></p>