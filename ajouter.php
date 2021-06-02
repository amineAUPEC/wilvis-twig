<?php 
//code php7.2 !!!! mysqli au lieu de mysql
    if (isset($_POST['chain']) && isset($_POST['action'])) { 
        // Récupération de l'chain et du action du formulaire
        $chain = addslashes($_POST['chain']); //ADDSLASHED AJOUTE DES ANTI-SLASH dans la chaîne 
        $action = addslashes($_POST['action']); //ainsi on évite les injections PHP/SQL
        
        $devices=addslashes($_POST['devices']);
        $inpint=addslashes($_POST['inpint']);
        $outint=addslashes($_POST['outint']);
        $source=addslashes($_POST['source']);
        $dest=addslashes($_POST['dest']);
        $sport=addslashes($_POST['sport']);
        $dport=addslashes($_POST['dport']);
        // $proto=addslashes($_POST['proto']);
        $atable=addslashes($_POST['atable']);
        $gere= addslashes($_POST['gere']);
        // Connexion à mysql et à la base bibliographie 
        $rt = mysqli_connect('database', 'root', 'tiger', 'mytestdb') or die("Erreur de connexion au serveur sql");      
		//$id=$_GET['id']++;//$id='4'; USECASE#5340
		// Requête SQL mise à jour dans la table bibliographie pour les champs chain et action 
        $query="INSERT INTO bibliographie (devices, chain, inpint, outint, source, dest, sport, dport,aaction, atable, gere) VALUES ('$devices','$chain','$inpint', '$outint', '$source', '$dest', '$sport', '$dport','$action', '$atable','$gere') ";  //autoincrémentation de l'id 
        //$query="INSERT INTO bibliographie VALUES ($id,'$chain','$action') "; //->cnw but bad only one id allowed USECASE 5340
		$result = $rt->query($query); 
        // déconnexion 
        mysqli_close($rt); 
        // On va vers la page operationOk.php 
        header('Location: operationOk.php'); 
    } 
?> 
<html> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
        <title> Ajouter une règle FW</title> 
    </head> 
    <body> 
        <h1> Ajouter une règle au Firewall</h1> 
            <form action="ajouter.php" method="POST"> 
           
            <table> 
                <tr> 
                    <td align="right">géré par :</td> 
                    <td><input name="gere"/></td> 
                </tr>
                <tr> 
                     <td align="right">devices</td> 
                     <td><input name="devices"/></td> 
                </tr>
                <tr> 
                     <td align="right">chain</td> 
                     <td><input name="chain" value="INPUT" required/></td> 
                </tr>
                <tr> 
                     <td align="right">Input interface</td> 
                     <td><input name="inpint" /></td> 
                </tr>
                <tr> 
                     <td align="right">Output interface</td> 
                     <td><input name="outint"/></td> 
                </tr>
                <tr> 
                     <td align="right">source</td> 
                     <td><input name="source"/></td> 
                </tr>
                <tr> 
                     <td align="right">dest</td> 
                     <td><input name="dest"/></td> 
                </tr>
                <tr> 
                     <td align="right">source port</td> 
                     <td><input name="sport"/></td> 
                </tr>
                
                <tr> 
                     <td align="right">Destination port</td> 
                     <td><input name="dport"/></td> 
                <!-- </tr>  
                <tr> 
                     <td align="right">proto</td> 
                     <td><input name="proto"/></td> 
                </tr>                 -->
                <tr> 
                     <td align="right">Action</td> 
                     <td><input name="action" value="ACCEPT" required/></td> 
                </tr>

                <tr> 
                    <td align="right">Table :</td> 
                    <td><input name="atable" value="FILTER"/></td> 
                </tr>                

                <tr> <td><input type="hidden" name="id" value="4" /> </td> </tr> <!-- id pour la méthode #5340-->
                <tr><td align="center" colspan="2"><input type="submit" value="Ajouter"/> </tr> 
            </table> 
            </form> 
    </body> 
</html>
