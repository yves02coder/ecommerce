<?php session_start(); 
require('navbar.php');
?>

<body
    style="background-image: url('https://media.giphy.com/media/KxmgCycxXyohtRU5vS/giphy.gif');background-size:cover;">
    <h1 class="fadeInDown text-center" style="color: chartreuse;"><b>BIENVENUE A SCAR-LAND</b></h1>
    <?php
try
{
    // On se connecte à MySQL
    $db = new PDO('mysql:host=localhost;dbname=e commerce;charset=utf8','root', '');
    $db->setAttribute( PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION );
}catch(PDOException $exception)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die("Erreur de connexion PDO mySQL:".$exception-> getMessage());
}


if(isset($_POST['nom_produit'])&& !empty($_POST['nom_produit'])){
$nom_produit=htmlspecialchars(strip_tags($_POST['nom_produit']));

}

if(isset($_POST['description_produit'])&& !empty($_POST['description_produit'])){
    $description_produit=htmlspecialchars(strip_tags($_POST['description_produit']));
    
    }else{
        echo "merci de remplir le champ du produit";
    }

    if(isset($_POST['image_produit'])&& !empty($_POST['image_produit'])){
        $image_produit=htmlspecialchars(strip_tags($_POST['image_produit']));
        
        }else{
            echo "merci de remplir le champ du produit";
        }

        if(isset($_POST['prix_produit'])&& !empty($_POST['prix_produit'])){
            $prix_produit=htmlspecialchars(strip_tags($_POST['prix_produit']));
            
            }else{
                echo "merci de remplir le champ du produit";
            }
            $prix_produit=(int)$prix_produit;

            $sql="UPDATE id_produit  SET nom_produit=?,description_produit=?,image_produit=?,prix_produit=? WHERE  id_produit=? ";
            $update=$db->prepare($sql);
            //binder(lier) des elements
            $update->bindParam(1,$nom_produit);
            $update->bindParam(2,$description_produit);

            $update->bindParam(3,$image_produit);

            $update->bindParam(4,$prix_produit);
            $id=$_GET['id'];

            $update->execute(array($nom_produit, $description_produit, $image_produit, $prix_produit,$id));

            if($update)
            {
                //var_dump($update);
                echo "votre produit a bien ete modifié";
                echo"<a href='index.php' class='btn btn-danger button'>retour a la liste</a>";
            }else{
                echo'merci de remplir tout les champs';
            }
            ?>
</body>