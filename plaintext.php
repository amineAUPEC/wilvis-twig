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
  
                    <li><a href="consultation.php"> consultation </a> </li>
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

                            <?php 
                            // Connexion à mysql en local (localhost est équivalent à 127.0.0.1) // Sélectionner la base MyTestDB en php7.2
                            $rt = mysqli_connect('database', 'root', 'tiger', 'mytestdb'); 
                            // On récupère maintenant tous les enregistrements de la table bibliographie 
                            // variable $query pour contenir la requete SQL de selection de ts les champs de la table bibliographie 
                            $query = 'SELECT id, devices, chain, inpint, outint, source, dest, sport, dport,aaction, atable, proto, gere FROM bibliographie'; 
                            // Lance la requête SQL 
                            $result = $rt->query($query) or die('Erreur SQL !<br>'.$query.'<br>').mysqli_error() ; 
                            echo "#!/bin/bash <br> <br>";
                            $concatstr_begin= "#!/bin/bash <br> <br>";
                            $allconcatstr = "";
                            $allconcatstr = $allconcatstr.$concatstr_begin;
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
// base url
                                // echo "iptables -A $chain  -i $inpint -o $outint -s $source -d $dest -p $proto --sport $sport --dport $dport -j $action <br><br>";

// base concat 
                            
                            $concatstr="iptables -A $chain";
                            if (  $inpint !="" ) {

                                    $concatstr="$concatstr -i $inpint";
                            }

                            if (  $outint !="" ) {

                                $concatstr="$concatstr -o $outint";
                            }

                            if (  $source !="" ) {

                                $concatstr="$concatstr -s $source";
                            }

                            if (  $dest !="" ) {

                                $concatstr="$concatstr -d $dest";
                            }

                            if (  $proto !="" ) {

                                $concatstr="$concatstr -p $proto";
                            }

                            if (  $sport !="" ) {

                                $concatstr="$concatstr --sport $sport";
                            }
                            
                            if (  $dport !="" ) {

                                $concatstr="$concatstr --dport $dport";
                            }   
                            
                            
                            if (  $dport !="" ) {

                                $concatstr="$concatstr --dport $dport";
                            }     
                            
                            
                            if (  $action !="" ) {

                                $concatstr="$concatstr -j $action";
                            }  
                            
                            
                            if (  $devices !="" ) {

                                $concatstr="$concatstr # on $devices";
                            }    
                            
                            
                            if (  $gere !="" ) {

                                $concatstr="$concatstr # by $gere";
                            }          
                            $allconcatstr=$allconcatstr.$concatstr."<br><br>";
                            
                            
                            // echo " $concatstr <br><br>";


                                // echo "<td>$enabling</td> \n"; 

                                // echo "<td></td> \n"; 
                                // echo " <td> </td>"; 
                                // echo "<td> </td>"; 
                                //renvoie des paramètres associés vers la page modifier.php à chaque ligne de la BDD
                                //renvoie juste l'id associé vers la page supprimer.php à chaque ligne de la BDD
                                echo "</tr>"; 

                                // $file_str="$concatstr_begin $concatstr";
                                
                            } 


                            // $file_str="$concatstr_begin $concatstr";
                            // echo "end $file_str";
                            echo "$allconcatstr";
                            // echo "end $allconcatstr";
                            // $query2 = 'SELECT SUM(prix)as prixtot FROM bibliographie'; 
                            // $result2 = $rt->query($query2) or die('Erreur SQL !<br>'.$query2.'<br>'.mysqli_error()) ; 
                            // while ($row2 = mysqli_fetch_assoc($result2)) { 
                            //     $prixtot = htmlentities($row2['prixtot']); 
                            // }

                            // Fermeture de la connexion à la BD  via mysqli_connect pour PHP7 avec la variable
                            mysqli_close($rt);
                            
                            $handle = fopen("file.txt", "w");
                            fwrite($handle, "$allconcatstr");
                            fclose($handle);
                            header_remove(); 
                            header('Content-Type: application/octet-stream');
                            // header('Content-Disposition: attachment; filename='.basename('file.txt'));
                            // header('Expires: 0');
                            // header('Cache-Control: must-revalidate');
                            // header('Pragma: public');
                            // header('Content-Length: ' . filesize('file.txt'));
                            readfile('file.txt');
                            exit;



                            ?> 

                    </table> 
           
            <h3>Bienvenue sur le gestionnaire web du Firewall   </h3>
            <img src="./upec.png"> 
        <div>
    </body> 
</html> 
