<?php 
//code php7
 if (isset($_POST['zechains']) && isset($_POST['zeactions']) || isset($_POST['zechains']) || isset($_POST['zeactions'])  ) { 
        // Récupération du chain et action, quantite=username, mdp du formulaire
        $tosearchchain = addslashes($_POST['zechains']); //ADDSLASHED AJOUTE DES ANTI-SLASH dans la chaîne 
        $tsaction = addslashes($_POST['zeactions']); //ainsi on évite les injections PHP/SQL

        // Connexion à mysql et à la base bibliographie 
        $rt=mysqli_connect('database', 'root', 'tiger', 'mytestdb') or die("Erreur de connexion au serveur");      
	    //mysql_select_db('MytestDB);
		
        // Requête SQL mise à jour dans la table bibliographie pour les champs  
    


        if ($tosearchchain!='' && $tsaction==true){
            $query3="SELECT chain, aaction FROM bibliographie WHERE chain='$tosearchchain' or aaction='$tsaction'";  //autoincrémentation de l'id 
            $result3 = $rt->query($query3) or die("erreur :/"); 
            echo "<br> Vous recherchez par chain <i> $tosearchchain </i> et par action <i> $tsaction : </i>  <br>"; 
            echo "<b>Voici le résultat  : </b> <hr>";
            while ($row3 = mysqli_fetch_assoc($result3)) { 
                // htmlentities convertie les caractères accentués pour qu’ils s’affichent correctement en HTML 
                    $chain3 = htmlentities($row3['chain']); 
                    $action3 = htmlentities($row3['aaction']); //$row est notre variable contenant la liste
                    // $quantite3 = htmlentities($row3['quantite']);
echo "<br> Son chain est : <b> $chain3 </b> \n , <u> $action3</u> son quantite est :  ";
                   //envoi direct de quantite
                } }
    

        elseif ($tsaction==true){        
        $query="SELECT chain, aaction FROM bibliographie WHERE aaction='$tsaction'";  //autoincrémentation de l'id 
        $result = $rt->query($query) or die("erreur :/"); 
        echo "Vous recherchez par action : $tsaction <br>"; 
        echo "Voici le résultat  : ";
        while ($row = mysqli_fetch_assoc($result)) { 
            // htmlentities convertie les caractères accentués pour qu’ils s’affichent correctement en HTML 
                $chain = htmlentities($row['chain']); 
                $action = htmlentities($row['aaction']); //$row est notre variable contenant la liste
                // $quantite = htmlentities($row['quantite']);
               echo "<br> Son chain est : <b> $chain </b> \n , $action son quantite est : ";
               //envoi direct de quantite
            } }


           
            elseif ($tosearchchain!=''){ 
            $query2="SELECT chain, aaction FROM bibliographie WHERE chain='$tosearchchain'";  //autoincrémentation de l'id 
            $result2 = $rt->query($query2) or die("erreur :/"); 
            echo "<br> Vous recherchez par chain : $tosearchchain <br>"; 
            echo "Voici le résultat  : ";
            while ($row2 = mysqli_fetch_assoc($result2)) { 
                // htmlentities convertie les caractères accentués pour qu’ils s’affichent correctement en HTML 
                    $chain2 = htmlentities($row2['chain']); 
                    $action2 = htmlentities($row2['aaction']); //$row est notre variable contenant la liste
                    // $quantite2 = htmlentities($row2['quantite']);
echo "<br> Son chain est : <b> $chain2 </b> \n , $action2 son quantite est :  ";
                   //envoi direct de quantite
                } }
    
              else {
        echo "Vous devez saisir soit le chain soit le action";
}



        // déconnexion 
        mysqli_close($rt); 
        // On va vers la page logged.php 
        //header('Location: lastloggedinsc.php'); 
    } 







    ?> 



