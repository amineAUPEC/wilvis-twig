<?php //modifier.php 
    // Si on vient de la page modifier.php (on utilise la méthode POST pour transmettre les données du formulaire modifiée) 
    if (isset($_POST['enreg']) ) { 
        // Connexion à mysql complété !!!!
        $rt = mysqli_connect('database', 'root', 'tiger', 'mytestdb')  or die("Erreur de connexion au serveur"); 
        // Selection à la base MyTestDB complété à l'intérieur de mysqli
        //mysqli_select_db('MyTestDB') or die("Erreur de connexion à la base de données"); n'existant pas 
        
	   //ici je réadapte de la méthode GET à la méthode post je les récupère dans la boucle de préférence
        $gere= $_POST['gere'];
        $action=$_POST['action'];
		$id=$_POST['id'];
        $chain=$_POST['chain'];
        $devices=$_POST['devices'];
        $inpint=$_POST['inpint'];           
        $outint=$_POST['outint'];           
        $source=$_POST['source'];           
        $dest=$_POST['dest']; 
        $sport=$_POST['sport'];
        $dport=$_POST['dport'];
        $proto=$_POST['proto'];
        $atable=$_POST['atable'];
        // modification de l'enregistrement correspondant à l'id  
        // je préfère mettre entre simple quote si ces des chaines de caractères donc $id étant un int peut être sans quote
		$query="UPDATE bibliographie SET gere='$gere', chain='$chain', aaction='$action', devices='$devices', inpint='$inpint', outint='$outint',source='$source', dest='$dest', sport='$sport', dport='$dport', atable='$atable', proto='$proto'    where id='$id'"; 
        $result = $rt->query($query); 
        mysqli_close($rt); 
        // on va à la page confirmant que tout est Ok 
        //header('Location: operationOk.php'); //la page n'étant pas encore créé -> consultation.php
        header('Location:consultation.php'); 
    } 
?> 
<html> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
        <title> Modification d'une référence </title> 
    </head> 
    <body> 
        <h1> Modifier un objet</h1> 
        <form action="modifier.php" method="POST"> 
        <table> 
        <tr> <td align="right">géré par</td> 
            <td><input name="gere" value="<?php echo $_GET['gere']; ?>" 
            /></td> 
        </tr> 
        <tr> <td align="right">action</td> 
            <td><input name="action" value="<?php echo $_GET['action']; ?>" 
            /></td> 
        </tr> 
            <tr> <td align="right">chain</td> 
            <td><input name="chain" value="<?php echo $_GET['chain']; ?>" /></td>
        </tr>
        <tr> <td align="right">Devices</td> 
            <td><input name="devices" value="<?php echo $_GET['devices']; ?>" 
            /></td> 
        </tr> 
        <tr> <td align="right">Input interface</td> 
            <td><input name="inpint" value="<?php echo $_GET['inpint']; ?>" 
            /></td> 
        </tr> 
        
        <tr> <td align="right">Output interface</td> 
            <td><input name="outint" value="<?php echo $_GET['outint']; ?>" 
            /></td> 
        </tr>         
        <tr> <td align="right">source</td> 
            <td><input name="source" value="<?php echo $_GET['source']; ?>" 
            /></td> 
        </tr>  
        <tr> <td align="right">dest</td> 
            <td><input name="dest" value="<?php echo $_GET['dest']; ?>" 
            /></td> 
        </tr>  
        <tr> <td align="right">Source port</td> 
            <td><input name="sport" value="<?php echo $_GET['sport']; ?>" 
            /></td> 
        </tr>  
        <tr> <td align="right">Destination port</td> 
            <td><input name="dport" value="<?php echo $_GET['dport']; ?>" 
            /></td> 
        </tr>    
        <tr> <td align="right">proto</td> 
            <td><input name="proto" value="<?php echo $_GET['proto']; ?>" 
            /></td> 
        </tr>  
        <tr> <td align="right">Table</td> 
            <td><input name="atable" value="<?php echo $_GET['atable']; ?>" 
            /></td> 
        </tr>  

        <tr> <td><input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" /> </td> </tr> 
        <tr> <td><input type="hidden" name="enreg"  /> </td> </tr> 
            <tr> <td align="center" colspan="2"><input type="submit" value="Modifier" /> </tr> 
        </table> 
        </form> 
    </body> 
</html>
