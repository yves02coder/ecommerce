<?php
session_start(); // On démarre la session AVANT toute chose
include('navbar.php');

try{
    $db=new PDO("mysql:host=localhost;dbname=e commerce;charset=utf8;","root","");
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    echo "connexion a la base de donnée";

}catch(PDOException $e){

    echo "Erreur de connexion a PDO";
}
?>

<body style="background-color: #8599a1ee;margin:30px;">

    <div class="alert-danger p-5 flash">
        <h1><mark><b style="color: red;">ATTENTION L'ACTION EST IRREVERSIBLE</b></mark></h1>
    </div>
    <div class="">

        <?php
//requète sql
$sql="SELECT * FROM id_produit WHERE id_produit=?";
//requète dans une variable
$requete=$db->prepare($sql);
//objet qui return la declaration AOP

//recuperation de id avec $_GET
$id=$_GET['id'];
//var_dump($id);
//faire heriter le'?' a tout les $_GET['id']

$requete->bindParam(1,$id);

//execution requète passé a 'id'
$requete->execute();

//afficher les valeur par 'id'
$resultat=$requete->fetch();

?>


        <ul class="liste-detail">
            <li class="liste-detail"><b><?php echo $resultat['nom_produit']?></b></li>
            <!-- <li><?php //echo $resultat['id_produit']?></li>-->
            <li><b><img class="img-fluid" width="20%" src="<?php echo $resultat['image_produit']?>"
                        alt="<?php $resultat['nom_produit']  ?>" title="<?php $resultat['nom_produit']  ?>" /></b></li>
            <li><b><?php echo $resultat['prix_produit']?>€</b></li>
            <li class="liste-detail" style="width: 20%;"><b><?php echo $resultat['description_produit']?></b></li>
        </ul>

        <a href="confirmer_suppression.php?id=<?php echo $resultat['id_produit']?>" class="btn btn-danger mb-2 button">
            Voulez vous vraiment supprimez ?<?php echo ' '.$resultat['nom_produit']  ?></a>

    </div>
    <a href="index.php " class="btn btn-message mt-5 button "> ANNULER </a>
</body>