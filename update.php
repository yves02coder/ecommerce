<?php
session_start();
include('navbar.php');
?>
<h1 class="fadeInDown text-center" style="color: chartreuse;"><b>BIENVENUE A SCAR-LAND</b></h1>
<?php
try
{
    // On se connecte à MySQL
    $db = new PDO('mysql:host=localhost;dbname=e commerce;charset=utf8', 'root', '');
    $db->setAttribute( PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION );
}catch(PDOException $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die("Erreur de connexion PDO mySQL:".$exception-> getMessage());
}
$sql="SELECT * FROM id_produit WHERE id_produit = ?";

$req=$db->prepare($sql);
$update=$_GET['id'];
$req->bindParam(1,$update);
$req->execute();
$resultat=$req->fetch();
//echo $update;
if($resultat){
?>
<h3 class="text-center">Mettez a jour par ici</h3>
<form method="post" action="confirm_apdate.php?id=<?php echo $resultat['id_produit']?>">
    <div class="m-5">
        <div class="form-group">
            <label for="nom_produit"><b>nom produit</b></label>
            <input type="text" class="form-control" id="nom_produit" name="nom_produit" required
                placeholder="<?= $resultat['nom_produit']?>" value="<?= $resultat['nom_produit']?>">
        </div>

        <div class="form-group">
            <label for="description_produit"><b> produit</b></label>
            <textarea rows="5" type="text" class="form-control" id="description_produit" name="description_produit"
                required placeholder="<?= $resultat['description_produit']?>"
                value="<?= $resultat['description_produit']?>"></textarea>
        </div>

        <div class="form-group">
            <label for="image_produit"><b>image produit</b></label>
            <input type="text" class="form-control" id="image_produit" name="image_produit" required
                placeholder="<?= $resultat['image_produit']?>" value="<?= $resultat['image_produit']?>">
        </div>


        <div class="form_group">
            <label for="prix_produit"><b>Prix produit</b></label>
            <input type="text" class="form-control" id="prix_produit" name="prix_produit" required
                placeholder="<?= $resultat[(int)'prix_produit']?>" value="<?= $resultat['prix_produit']?>">
        </div>


        <div class="form_group">
            <button type="submit" class="btn btn-outline-success button">modifier le produit</button>
        </div>
    </div>
</form>
<?php
}
?>