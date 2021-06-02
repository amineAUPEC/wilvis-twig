<?php 
//code php7
 if (isset($_POST['zenames']) && isset($_POST['zesalles']) || isset($_POST['zenames']) || isset($_POST['zesalles'])  ) { 
        // Récupération du nom et salle, quantite=username, mdp du formulaire
        $tosearchnom = addslashes($_POST['zenames']); //ADDSLASHED AJOUTE DES ANTI-SLASH dans la chaîne 
        $tssalle = addslashes($_POST['zesalles']); //ainsi on évite les injections PHP/SQL

        // Connexion à mysql et à la base bibliographie 
        $rt=mysqli_connect('database', 'root', 'tiger','MytestDB') or die("Erreur de connexion au serveur");      
	    //mysql_select_db('MytestDB);
		
        // Requête SQL mise à jour dans la table bibliographie pour les champs  
    


        if ($tosearchnom!='' && $tssalle==true){
            $query3="SELECT nom, salle, quantite FROM bibliographie WHERE nom='$tosearchnom' or salle='$tssalle' and quantite=quantite";  //autoincrémentation de l'id 
            $result3 = $rt->query($query3) or die("erreur :/"); 
            echo "<br> Vous recherchez par nom <i> $tosearchnom </i> et par salle <i> $tssalle : </i>  <br>"; 
            echo "<b>Voici le résultat  : </b> <hr>";
            while ($row3 = mysqli_fetch_assoc($result3)) { 
                // htmlentities convertie les caractères accentués pour qu’ils s’affichent correctement en HTML 
                    $nom3 = htmlentities($row3['nom']); 
                    $salle3 = htmlentities($row3['salle']); //$row est notre variable contenant la liste
                    $quantite3 = htmlentities($row3['quantite']);
echo "<br> Son nom est : <b> $nom3 </b> \n , <u> $salle3</u> son quantite est :  <a href=\"quantiteto:$quantite3\">$quantite3</a>";
                   //envoi direct de quantite
                } }
    

        elseif ($tssalle==true){        
        $query="SELECT nom, salle, quantite FROM bibliographie WHERE salle='$tssalle'";  //autoincrémentation de l'id 
        $result = $rt->query($query) or die("erreur :/"); 
        echo "Vous recherchez par salle : $tssalle <br>"; 
        echo "Voici le résultat  : ";
        while ($row = mysqli_fetch_assoc($result)) { 
            // htmlentities convertie les caractères accentués pour qu’ils s’affichent correctement en HTML 
                $nom = htmlentities($row['nom']); 
                $salle = htmlentities($row['salle']); //$row est notre variable contenant la liste
                $quantite = htmlentities($row['quantite']);
               echo "<br> Son nom est : <b> $nom </b> \n , $salle son quantite est :  <a href=\"quantiteto:$quantite\">$quantite</a>";
               //envoi direct de quantite
            } }


           
            elseif ($tosearchnom!=''){ 
            $query2="SELECT nom, salle, quantite FROM bibliographie WHERE nom='$tosearchnom'";  //autoincrémentation de l'id 
            $result2 = $rt->query($query2) or die("erreur :/"); 
            echo "<br> Vous recherchez par nom : $tosearchnom <br>"; 
            echo "Voici le résultat  : ";
            while ($row2 = mysqli_fetch_assoc($result2)) { 
                // htmlentities convertie les caractères accentués pour qu’ils s’affichent correctement en HTML 
                    $nom2 = htmlentities($row2['nom']); 
                    $salle2 = htmlentities($row2['salle']); //$row est notre variable contenant la liste
                    $quantite2 = htmlentities($row2['quantite']);
echo "<br> Son nom est : <b> $nom2 </b> \n , $salle2 son quantite est :  <a href=\"quantiteto:$quantite2\">$quantite2</a>";
                   //envoi direct de quantite
                } }
    
              else {
        echo "Vous devez saisir soit le nom soit le salle";
}



        // déconnexion 
        mysqli_close($rt); 
        // On va vers la page logged.php 
        //header('Location: lastloggedinsc.php'); 
    } 







    ?> 



