<html> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>  <!--force l'encodage-->
        <title> Recherche </title> <!-- titre de l'onglet-->
    </head> 
    <body> 
        <h1> Recherche </h1> <!-- en-tête type1 afin del'afficher avec ce style-->
        <br /> 
                   <form action="searchproc.php" method='POST'> 
                    <?php  
                    echo "Recherche prédictive : Entrer soit le action, soit le chain ou les 2 <br>";
                     // Connexion à mysql en local (localhost est équivalent à 127.0.0.1) // Sélectionner la base MyTestDB en php7.2
                     $rt=mysqli_connect('database', 'root', 'tiger', 'mytestdb') or die("Erreur de connexion au serveur"); 
                     $qchain = 'SELECT distinct chain FROM bibliographie '; 
                     $result = $rt->query($qchain);   // Lance la requête SQL 
                     
                     //On parcourt la liste des enregistrements 
                     echo "<datalist id=\"zeliste\">";
                     while ($row = mysqli_fetch_assoc($result)) { 
                         $chain = htmlentities($row['chain']);                           
                         echo "<option value=$chain></option> \n";  //table div  
                     }  echo "</datalist> </br>";

                     echo "<datalist id=\"actionliste\">";
                     $qpchain = 'SELECT distinct aaction FROM bibliographie '; 
                     $result2 = $rt->query($qpchain);   // Lance la requête SQL 
                     while ($row2 = mysqli_fetch_assoc($result2)) { 
                        $action = htmlentities($row2['aaction']); //$row est notre variable contenant la liste                                               
                        echo "<option value=$action></option> \n"; 
                    }  echo "</datalist> </br>";


                     // Fermeture de la connexion à la BD  via mysqli_connect pour PHP7 avec la variable
                     mysqli_close($rt); 
         //datalist > search car récupére depuis la BDD mais datalist montre la liste                 
                 echo "<input name=\"zechains\" id=\"zelistinput\" type=\"search\" list=\"zeliste\" placeholder=\"Entrer le chain\" autocomplete=\"on\">";
        //input type datalist de base, mais marche avec search, text... donc c'est peu rigoureux 
   echo "<input name=\"zeactions\" id=\"searchaction\" type=\"search\" list=\"actionliste\" placeholder=\"Entrer l'action\" autocomplete=\"on\"><br>";
                //fonctionnel avec et sans autocomplete                 
    // echo "<input name=\"zechains\" id=\"zelistinput\" type=\"search\" placeholder=\"Entrer le chain\" autocomplete=\"on\">";
                       echo "<button type=\"submit\" value=\"rechercher\">Rechercher</button> ";//ss forme de bouton
                       echo "<button type=\"reset\" value=\"Touteffacer\"> Effacer le formulaire  </button> ";
                     ?>
                     
            </form>
    </body> 
</html> 
