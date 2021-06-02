<!DOCTYPE html> 
<html> 
    <head> 
        <title>Réinitialiser la table principale</title> 
    </head> 
<body> 
    <h1>Réinitialiser la table principale</h1> 
    <?php 
        // connexion mysqli et base de données complété
        $rt=mysqli_connect('database', 'root', 'tiger', 'mytestdb') or die("Erreur de connexion au serveur"); 
        //mysqli_select_db('MyTestDB') or die("Erreur de connexion à la base de données");
        if(isset($_GET['id'])) { //on a transmis un fauxid  car le if requiert un id 
            //$query="DELETE FROM bibliographie "; //marche aussi 
            $query="TRUNCATE TABLE bibliographie "; //RESET LA VALEUR de l'auto-incrémentation
            $result = $rt->query($query);  

            
            $query2="insert Into bibliographie VALUES (1, 'fw', 'FORWARD', 'eth0', 'eth1', '172.16.110.0/24', '172.16.110.25', '21', '80', 'ACCEPT', 'FILTER', 'kavi', 'tcp', '')"; //RESET LA VALEUR de l'auto-incrémentation
            $result2 = $rt->query($query2);  
            
            $query3="insert into bibliographie VALUES (2, 'fw', 'OUTPUT', '', 'eth1', '', '172.16.110.25', '', '80', 'ACCEPT', 'FILTER', 'AAA', 'tcp', '')"; //RESET LA VALEUR de l'auto-incrémentation
            $result3 = $rt->query($query3);  
            
            $query4="insert into bibliographie VALUES (3, 'fw', 'FORWARD', 'eth1', 'eth0', '172.16.110.0/24', '172.16.110.25', '21', '80', 'ACCEPT', 'FILTER', 'AAA', 'tcp', '')"; //RESET LA VALEUR de l'auto-incrémentation
            $result4 = $rt->query($query4);   


            $query5="insert into bibliographie VALUES (4, 'web', 'INPUT', 'eth0', '', '172.16.110.0/24', '', '21', '', 'ACCEPT', 'FILTER', 'AAA', 'tcp', '')"; //RESET LA VALEUR de l'auto-incrémentation
            $result5 = $rt->query($query5);  


            $query6="insert into bibliographie VALUES (5, 'attack', 'INPUT', 'eth0', '', '', '172.16.110.25', '21', '', 'ACCEPT', 'FILTER', 'AAA', 'tcp', '')"; //RESET LA VALEUR de l'auto-incrémentation
            $result6 = $rt->query($query6);  
            

            $query7="insert into bibliographie VALUES (6, 'fw', 'INPUT', 'eth0', '', '', '', '21', '', 'ACCEPT', 'FILTER', 'kavi', 'tcp', '')"; //RESET LA VALEUR de l'auto-incrémentation
            $result7 = $rt->query($query7);  
            
            // on va à la page confirmant que tout est Ok 
            header('Location: operationOk.php'); 
            } 
        else {// bien sûr on aurait pu inverser le contenu du if et du else pour éviter la récup d'un id
            echo 'Aucune suppression effectu&eacute;e.'; 
            }    
        mysqli_close($rt); 
    ?> 
</body> 
</html>
