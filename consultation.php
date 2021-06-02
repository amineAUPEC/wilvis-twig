<html> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>  <!--force l'encodage-->
        <title> Projet IDPS-Firewall </title> <!-- nom de l'onglet-->
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="./style2.css" rel="stylesheet"> <!--Important après Bootstrap pour pouvoir utiliser notre CSS-->
    </head> 
    <body> 
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Projet IDPS-Firewall-Web-Manager</a>
                </div>
                    <ul class="nav navbar-nav ">
                    <!-- <ul class="nav navbar-nav ">navbar navbar-dark bg-dark" -->
                    <li class="active"><a href="consultation.php">Home</a></li>
                    <li><a href="ajouter.php">+ objet</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">ID <!--pour trier par l'id-->
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="ORDERBYID.php">Afficher et trier par id </a></li>
                            <li><a href="ORDERBYIDDESC.php">Afficher et trier par id décroissant ⇩</a></li>
                        </ul>
                    </li>
  

                    <li><a href="plaintext.php"> GenIptables </a> </li>
                    <li><a href="supprimertout.php?id=dumpyid"> Formater la table </a> </li><!--pour effacer le contenu de la table-->
                    <li><a href="resetall.php?id=dumpyid"> Réinitialiser la table </a> </li><!--pour restaurer le contenu de la table-->
                    <li><a href="pdf.php"> PDF </a> </li><!--pour restaurer le contenu de la table-->
                    <button onclick="window.print()">Imprimer</button>
                    <li><a href="search.php"> Rechercher </a> </li><!--pour restaurer le contenu de la table-->
                    <!-- <form class="form-inline" action="./search.php">
                    <input class="form-control mr-sm-2" name="recsearch" type="text" placeholder="Search">
                    <button class="btn btn-success" type="submit">Search</button> -->
                    </ul>
                    
            </div>
            
        </nav>
            <div >
                <br /> 
                    <table> 
                        <tr> <!-- table row = colonnes-->
                            <th><li class="dropdown nav navbar-nav">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Géré <!--pour trier par la gestion-->
                                <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="ORDERBYgere.php">Géré par A-Z ⇑ </a></li>
                                        <li><a href="ORDERBYgereDESC.php">Géré par Z-A ⇩</a></li>
                                    </ul>      
                            </th>  <!--table header en-tête de la table 1ère colonne-->
                            <th> <li class="dropdown nav navbar-nav">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Devices <!--pour trier par la Devices-->
                                    <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="ORDERBYsalle.php">Afficher et trier par Devices A-Z  </a></li>
                                            <li><a href="ORDERBYsalleDESC.php">Afficher et trier par Devices Z-A décroissant ⇩</a></li>
                                        </ul>
                                
                            </th>  <!--table header en-tête de la table 1ère colonne-->
                            <th> 
                                <li class="dropdown nav navbar-nav">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Chaîne<!--pour trier par Chaîne-->
                                <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="ORDERBYNOM.php">Afficher et trier par Chaîne A-Z  </a></li>
                                        <li><a href="ORDERBYNOMDESC.php">Afficher et trier par Chaîne Z-A décroissant ⇩</a></li>
                                    </ul>
                            </th>  <!--table header en-tête de la table 2ème colonne-->
                            <th>
                                <li class="dropdown nav navbar-nav">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">INPINT <!--pour trier par la INPUT INTERFACE-->
                                <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="ORDERBYquantite.php">Afficher et trier par INPUT INTERFACE ⇑ </a> </li>
                                        <li><a href="ORDERBYquantiteDESC.php">Afficher et trier par INPUT INTERFACE décroissant ⇩</a></li>
                                    </ul>          
                                    
                            </th>  <!--table header en-tête de la table 1ère colonne-->
                            <th>
                            <li class="dropdown nav navbar-nav">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">OUTINT <!--pour trier par prix-->
                            <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="ORDERBYprix.php">Afficher et trier par OUTPUT INTERFACE ⇑ </a></li>
                                    <li><a href="ORDERBYprixDESC.php">Afficher et trier par OUTPUT INTERFACE décroissant ⇩</a></li>
                                </ul>        


                            </th>  <!--table header en-tête de la table 1ère colonne-->
                            <th>

                            <li class="dropdown nav navbar-nav">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">SOURCE <!--pour trier par prix-->
                            <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="ORDERBYprix.php">Afficher et trier par SOURCE ⇑ </a></li>
                                    <li><a href="ORDERBYprixDESC.php">Afficher et trier par SOURCE décroissant ⇩</a></li>
                                </ul> 
                                    
                            </th>  <!--table header en-tête de la table 1ère colonne-->

                            <th>

                            <li class="dropdown nav navbar-nav">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">DEST <!--pour trier par prix-->
                            <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="ORDERBYprix.php">Afficher et trier par DEST ⇑ </a></li>
                                    <li><a href="ORDERBYprixDESC.php">Afficher et trier par DEST décroissant ⇩</a></li>
                                </ul>        
                                
                            
                            </th>  <!--table header en-tête de la table 1ère colonne-->
                            <th>
                            <li class="dropdown nav navbar-nav">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">SPORT <!--pour trier par prix-->
                            <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="ORDERBYprix.php">Afficher et trier par SOURCE PORT ⇑ </a></li>
                                    <li><a href="ORDERBYprixDESC.php">Afficher et trier par SOURCE PORT décroissant ⇩</a></li>
                                </ul>

                            </th>


                            <th>
                            <li class="dropdown nav navbar-nav">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">DPORT <!--pour trier par prix-->
                            <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="ORDERBYprix.php">Afficher et trier par DEST PORT ⇑ </a></li>
                                    <li><a href="ORDERBYprixDESC.php">Afficher et trier par DEST PORT décroissant ⇩</a></li>
                                </ul>        
                            
                            </th>
                            <th>
                            <li class="dropdown nav navbar-nav">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Proto 
                            <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="ORDERBYprix.php">Afficher et trier par Proto ⇑ </a></li>
                                    <li><a href="ORDERBYprixDESC.php">Afficher et trier par Proto décroissant ⇩</a></li>
                                </ul>        
                            
                            </th>
                            <th> 
                            <li class="dropdown nav navbar-nav">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Action <!--pour trier par Action-->
                            <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="ORDERBYNOM.php">Afficher et trier par Action A-Z  </a></li>
                                    <li><a href="ORDERBYNOMDESC.php">Afficher et trier par Action Z-A décroissant ⇩</a></li>
                                </ul>    

                            </th>
                            <th>
                            <li class="dropdown nav navbar-nav">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Table <!--pour trier par prix-->
                            <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="ORDERBYprix.php">Afficher et trier par Table ⇑ </a></li>
                                    <li><a href="ORDERBYprixDESC.php">Afficher et trier par Table décroissant ⇩</a></li>
                                </ul>        
                            
                            </th>

                            
                            
                            <!-- <th> 
                            <li class="dropdown nav navbar-nav">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">ROUTING 
                            <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="ORDERBYprix.php">Afficher et trier par POSTPREROUTING ⇑ </a></li>
                                    <li><a href="ORDERBYprixDESC.php">Afficher et trier par POSTPREROUTING décroissant ⇩</a></li>
                                </ul>                         

                            </th>                             -->
                            <!-- <th> 
                            <li class="dropdown nav navbar-nav">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">SOURCE PORT <!-pour trier par prix--
                            <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="ORDERBYprix.php">Afficher et trier par SOURCE PORT ⇑ </a></li>
                                    <li><a href="ORDERBYprixDESC.php">Afficher et trier par SOURCE PORT décroissant ⇩</a></li>
                                </ul>                         


                            </th>-->
                            



<!-- 
                            <th> </th>  table header en-tête de la table 1ère colonne -->
                            <th>&nbsp;</th> <!--espace insécable espace ordinaire--> 
                        </tr> 
                            <?php 
                            // Connexion à mysql en local (localhost est équivalent à 127.0.0.1) // Sélectionner la base MyTestDB en php7.2
                            $rt = mysqli_connect('database', 'root', 'tiger', 'mytestdb'); 
                            // On récupère maintenant tous les enregistrements de la table bibliographie 
                            // variable $query pour contenir la requete SQL de selection de ts les champs de la table bibliographie 
                            $query = 'SELECT id, devices, chain, inpint, outint, source, dest, sport, dport,aaction, atable, proto, gere FROM bibliographie'; 
                            // Lance la requête SQL 
                            $result = $rt->query($query) or die('Erreur SQL !<br>'.$query.'<br>').mysqli_error() ; 
                            // On parcourt la liste des enregistrements 
                            while ($row = mysqli_fetch_assoc($result)) { 
                            // htmlentities convertie les caractères accentués pour qu’ils s’affichent correctement en HTML 
                                $chain = htmlentities($row['chain']); 
                                $action = htmlentities($row['aaction']); //$row est notre variable contenant la liste
                                $id = $row['id']; 
                                $devices = htmlentities($row['devices']); //$row est notre variable contenant la liste
                                $inpint = htmlentities($row['inpint']); //$row est notre variable contenant la liste


                                $outint = htmlentities($row['outint']); 
                                $source = htmlentities($row['source']); 
                                $dest = htmlentities($row['dest']); 
                                $sport = htmlentities($row['sport']); 
                                $dport = htmlentities($row['dport']); 
                                $proto = htmlentities($row['proto']); 
                                $action = htmlentities($row['aaction']); 
                                $atable = htmlentities($row['atable']); 
                                $gere = htmlentities($row['gere']); 
                                // $enabling = htmlentities($row['enabling']); 


                                echo "<tr> \n"; //table row
                                echo "<td>$gere</td> \n";  //table div 
                                echo "<td>$devices</td> \n"; 
                                echo "<td>$chain</td> \n";  //table div 
                                echo "<td>$inpint</td> \n"; 
                                echo "<td>$outint</td> \n"; 
                                echo "<td>$source</td> \n"; 
                                echo "<td>$dest</td> \n"; 
                                echo "<td>$sport</td> \n"; 
                                echo "<td>$dport</td> \n"; 
                                echo "<td>$proto</td> \n"; 
                                echo "<td>$action</td> \n"; 
                                echo "<td>$atable</td> \n"; 
                                // echo "<td>$enabling</td> \n"; 

                                // echo "<td></td> \n"; 
                                // echo " <td> </td>"; 
                                // echo "<td> </td>"; 
                                //renvoie des paramètres associés vers la page modifier.php à chaque ligne de la BDD
                                echo "<td><a href=\"modifier.php?gere=$gere&id=$id&devices=$devices&chain=$chain&inpint=$inpint&outint=$outint&outint=$source&source=$dest&dest=$sport&sport=$dport&dport=$action&action=$atable&atable=$proto&proto\">Modifier</a>"; 
                                //renvoie juste l'id associé vers la page supprimer.php à chaque ligne de la BDD
                                echo " <a href=\"supprimer.php?id=$id\">Supprimer</a></td>";
                                echo "</tr>"; 
                            } 
                            // $query2 = 'SELECT SUM(prix)as prixtot FROM bibliographie'; 
                            // $result2 = $rt->query($query2) or die('Erreur SQL !<br>'.$query2.'<br>'.mysqli_error()) ; 
                            // while ($row2 = mysqli_fetch_assoc($result2)) { 
                            //     $prixtot = htmlentities($row2['prixtot']); 
                            // }

                            // Fermeture de la connexion à la BD  via mysqli_connect pour PHP7 avec la variable
                            mysqli_close($rt); 
                            ?> 
                    </table> 
           
            <h3>Bienvenue sur le gestionnaire web du Firewall   </h3>
            <img src="./upec.png"> 
        <div>
    </body> 
</html> 
