<?php session_start() ?>

<?php
include('navbar.php');
?>

<body
    style="background-image: url('https://www.desantisbreindel.com/wp-content/uploads/2019/05/color-tech-featured.jpg');background-size:cover; margin:20px;">
    <h1 class="fadeInDown text-center" style="color: chartreuse;"><b>BIENVENUE A SCAR-LAND</b></h1>
    <?php


try{
    $db=new PDO("mysql:host=localhost;dbname=e commerce;charset=utf8;","root","");
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    echo "connexion a la base de donnée";

}catch(PDOException $e){

    echo "Erreur de connexion a PDO";
}
$sql="SELECT* FROM id_produit WHERE id_produit=?";
$req=$db->prepare($sql);

$id=$_GET['id'];
echo $id;
$req->bindParam(1,$id);
$req->execute();
$resultat=$req->fetch();
//var_dump($resultat);
if($resultat){
?>
    <h2>bonjour:<?php echo $_SESSION['email'] ?></h2>
    <!--<img width="10%" src="https://www.gif-maniac.com/gifs/52/52100.gif" />-->
    <ul class="liste-detail">
        <li class="liste-detail"><?php echo $resultat['nom_produit']?></li>
        <li><?php echo $resultat['id_produit']?></li>
        <li><img class="img-fluid" width="20%" src="<?php echo $resultat['image_produit']?>"
                alt="<?php $resultat['nom_produit']  ?>" title="<?php $resultat['nom_produit']  ?>" /></li>
        <li><?php echo $resultat['prix_produit']?>€</li>
        <li class="liste-detail" style="width: 20%;"><?php echo $resultat['description_produit']?></li>
    </ul>
    <a href="index.php" class="btn btn-success button ml-5">retour</a>
    <?php
}else{
    echo "id inconnu";
}
?>
    <a href="paye.php" class="btn btn-success button ml-5">suivant</a>
</body>