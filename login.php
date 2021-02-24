<?php
session_start();
ob_start();

//include "navbar.php";

try
{
    // On se connecte à MySQL
    $db = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}catch(PDOException $exception)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die("Erreur de connexion PDO mySQL:".$exception-> getMessage());
}
//requète sql stocké dans une variable
$sql="SELECT * FROM users_id";
//execution requète après creation stock connexion PDO
if(isset($_POST['users_email'])&& !empty($_POST['users_email'])){
    $users_email=htmlspecialchars(strip_tags($_POST['users_email']));
    
    }else{
        echo "merci de remplir le champ du produit";
    }
    if(isset($_POST['users_password'])&& !empty($_POST['users_password'])){
        $users_password=htmlspecialchars(strip_tags($_POST['users_password']));
        
        }else{
            echo "merci de remplir le champ";
        }
        if(isset($_POST['users_name'])&& !empty($_POST['users_name'])){
            $users_name=(strip_tags($_POST['users_name']));
            
            }else{
                echo "merci de remplir le champ ";
            }

    


    $sql="INSERT INTO users(users_email,users_password,users_name) VALUES(?,?,?)";
    $inscrire=$db->prepare($sql);
    //binder(lier) des elements
    $inscrire->bindParam(1,$users_email);
    $inscrire->bindParam(2,$users_password);
     $inscrire->bindParam(3,$users_name);

    if($inscrire->execute(array($users_email, $users_password,$users_name,))){
        var_dump($inscrire);
        echo "votre compte a ete creé";
        echo"<a href='connexion.php' class='btn btn-danger'>retour a la liste</a>";
    }else{
        echo'merci de remplir tout les champs';
    }
?>