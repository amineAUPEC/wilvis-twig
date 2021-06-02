<html> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>  <!--force l'encodage-->
        <title> Projet Gestion des stocks </title> <!-- nom de l'onglet-->
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
                    <a class="navbar-brand" href="#">Projet Gestion des stock</a>
                </div>
                    <ul class="nav navbar-nav ">
                    <!-- <ul class="nav navbar-nav ">navbar navbar-dark bg-dark" -->
                    <li class="active"><a href="consutation.php">Home</a></li>
                    <li><a href="ajouter.php">+ objet</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">ID <!--pour trier par l'id-->
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="ORDERBYID.php">Afficher et trier par id </a></li>
                            <li><a href="ORDERBYIDDESC.php">Afficher et trier par id décroissant ⇩</a></li>
                        </ul>
                    </li>
              
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Nom <!--pour trier par le nom-->
                    <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="ORDERBYNOM.php">Afficher et trier par Nom A-Z  </a></li>
                            <li><a href="ORDERBYNOMDESC.php">Afficher et trier par Nom Z-A décroissant ⇩</a></li>
                        </ul>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Salle <!--pour trier par la salle-->
                    <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="ORDERBYsalle.php">Afficher et trier par Salle A-Z  </a></li>
                            <li><a href="ORDERBYsalleDESC.php">Afficher et trier par Salle Z-A décroissant ⇩</a></li>
                        </ul>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Quantité <!--pour trier par la quantité-->
                    <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="ORDERBYquantite.php">Afficher et trier par quantité ⇑ </a> </li>
                            <li><a href="ORDERBYquantiteDESC.php">Afficher et trier par quantité décroissant ⇩</a></li>
                        </ul>           
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Prix <!--pour trier par prix-->
                    <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="ORDERBYprix.php">Afficher et trier par prix ⇑ </a></li>
                            <li><a href="ORDERBYprixDESC.php">Afficher et trier par prix décroissant ⇩</a></li>
                        </ul>                                   
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Géré <!--pour trier par la gestion-->
                    <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="ORDERBYgere.php">Géré par A-Z ⇑ </a></li>
                            <li><a href="ORDERBYgereDESC.php">Géré par Z-A ⇩</a></li>
                        </ul>                         
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
                <!--<h1> Projet Gestion des stocks </h1> --><!-- en-tête type1 afin del'afficher avec ce style-->
                <!-- <a href="ajouter.php">Ajouter un objet</a><br>   lien vers la page ajouter pour ajouter la référence -->
                <!-- <a href="ORDERBYID.php">Afficher et trier par id </a> -->
                <!-- <a href="ORDERBYIDDESC.php">Afficher et trier par id décroissant ⇩</a> <br><br>pour trier par l'id -->
                <!-- <a href="ORDERBYNOM.php">Afficher et trier par Nom A-Z </a>  -->
                <!-- <a href="ORDERBYNOMDESC.php">Afficher et trier par Nom Z-A décroissant ⇩</a> <br><br>pour trier par le nom -->
                <!-- <a href="ORDERBYsalle.php">Afficher et trier par salle </a> pour trier par la salle -->
                <!-- <a href="ORDERBYsalleDESC.php">Afficher et trier par salle décroissant ⇩</a><br><br> pour trier par la salle -->
                <!-- <a href="ORDERBYquantite.php">Afficher et trier par quantité ⇑ </a> pour trier par la salle -->
                <!-- <a href="ORDERBYquantiteDESC.php">Afficher et trier par quantité décroissant ⇩</a><br><br> pour trier par la salle -->
                <!-- <a href="ORDERBYprix.php">Afficher et trier par prix ⇑ </a> pour trier par prix -->
                <!-- <a href="ORDERBYprixDESC.php">Afficher et trier par prix décroissant ⇩</a><br><br> pour trier par la prix -->
                <!-- <a href="ORDERBYgere.php">Géré par A-Z ⇑ </a> pour trier par la gestion -->
                <!-- <a href="ORDERBYgereDESC.php">Géré par Z-A ⇩</a><br><br> pour trier par la gestion -->
                <!-- <a href="supprimertout.php?id=dumpyid"> Formater la table </a>  -->
                <!-- <a href="resetall.php?id=dumpyid"> Réinitialiser la table </a>  -->
                <br /> 
                    <table> 
                        <tr> <!-- table row = colonnes-->
                            <th>Géré par</th>  <!--table header en-tête de la table 1ère colonne-->
                            <th>Salle</th>  <!--table header en-tête de la table 1ère colonne-->
                            <th>Nom</th>  <!--table header en-tête de la table 2ème colonne-->
                            <th>Quantité</th>  <!--table header en-tête de la table 1ère colonne-->
                            <th>Prix</th>  <!--table header en-tête de la table 1ère colonne-->
                            <th>Prix à l'unité</th>  <!--table header en-tête de la table 1ère colonne-->
                            <th>Options</th>  <!--table header en-tête de la table 1ère colonne-->
                            <th> </th>  <!--table header en-tête de la table 1ère colonne-->
                            <th>&nbsp;</th> <!--espace insécable -> espace ordinaire-->
                        </tr> 
                            <?php 
                            // Connexion à mysql en local (localhost est équivalent à 127.0.0.1) // Sélectionner la base MyTestDB en php7.2
                            $rt=mysqli_connect('database', 'root', 'tiger','mytestdb') or die("Erreur de connexion au serveur"); 
                            // On récupère maintenant tous les enregistrements de la table bibliographie 
                            // variable $query pour contenir la requete SQL de selection de ts les champs de la table bibliographie 
                            $query = 'SELECT id, salle, nom, gere, quantite, prix FROM bibliographie'; 
                            // Lance la requête SQL 
                            $result = $rt->query($query) or die('Erreur SQL !<br>'.$query.'<br>'.mysqli_error()) ; 
                            // On parcourt la liste des enregistrements 
                            while ($row = mysqli_fetch_assoc($result)) { 
                            // htmlentities convertie les caractères accentués pour qu’ils s’affichent correctement en HTML 
                                $gere = htmlentities($row['gere']); 
                                $salle = htmlentities($row['salle']); 
                                $nom = htmlentities($row['nom']); //$row est notre variable contenant la liste
                                $id = $row['id']; 
                                $quantite = htmlentities($row['quantite']); //$row est notre variable contenant la liste
                                $prix = htmlentities($row['prix']); //$row est notre variable contenant la liste
                                $prixunit=$prix/$quantite;
                                echo "<tr> \n"; //table row
                                echo "<td>$gere</td> \n";  //table div 
                                echo "<td>$salle</td> \n";  //table div 
                                echo "<td>$nom</td> \n"; 
                                echo "<td>$quantite</td> \n"; 
                                echo "<td>$prix</td> \n"; 
                                echo "<td>$prixunit</td> \n"; 
                                echo " <td> <a href=\"moins.php?id=$id\">-</a></td>"; 
                                echo "<td> <a href=\"plus.php?id=$id\">+</a></td>"; 
                                //renvoie des paramètres associés vers la page modifier.php à chaque ligne de la BDD
                                echo "<td><a href=\"modifier.php?gere=$gere&id=$id&salle=$salle&nom=$nom&quantite=$quantite&prix=$prix\">Modifier</a>"; 
                                //renvoie juste l'id associé vers la page supprimer.php à chaque ligne de la BDD
                                echo " <a href=\"supprimer.php?id=$id\">Supprimer</a></td>";
                                echo "</tr>"; 
                            } 
                            $query2 = 'SELECT SUM(prix)as prixtot FROM bibliographie'; 
                            $result2 = $rt->query($query2) or die('Erreur SQL !<br>'.$query2.'<br>'.mysqli_error()) ; 
                            while ($row2 = mysqli_fetch_assoc($result2)) { 
                                $prixtot = htmlentities($row2['prixtot']); 
                            }
                            $query3 = 'SELECT SUM(quantite)as quanttot FROM bibliographie'; 
                            $result3 = $rt->query($query3) or die('Erreur SQL !<br>'.$query3.'<br>'.mysqli_error()) ; 
                            while ($row3 = mysqli_fetch_assoc($result3)) { 
                                $quanttot = htmlentities($row3['quanttot']); 
                            }
                            echo "Prix total: $prixtot<br>";
                            echo "Quantité total produit: $quanttot";
                            // Fermeture de la connexion à la BD  via mysqli_connect pour PHP7 avec la variable
                            mysqli_close($rt); 
                            ?> 
                    </table> 
           
            <h3>Bienvenue sur le gestionnaire des stocks et sur AWS   </h3>
            <img src="./upec.png"> 
        <div>
    </body> 
</html> 
