<?php session_start() ; ?>
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

}else{
    echo "merci de remplir le champ du produit";
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


            $sql="INSERT INTO id_produit(nom_produit,description_produit,image_produit,prix_produit) VALUES(?,?,?,?)";
            $ajouter=$db->prepare($sql);
            //binder(lier) des elements
            $ajouter->bindParam(1,$nom_produit);
            $ajouter->bindParam(2,$description_produit);

            $ajouter->bindParam(3,$image_produit);

            $ajouter->bindParam(4,$prix_produit);

            if($ajouter->execute(array($nom_produit, $description_produit, $image_produit, $prix_produit))){
                var_dump($ajouter);
                echo "votre produit est ajouté";
                echo"<a href='listeProduit.php' class='btn btn-danger'>retour a la liste</a>";
            }else{
                echo'merci de remplir tout les champs';
            }


?>