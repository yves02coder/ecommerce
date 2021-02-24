        <?php
        session_start()
        ?>
        <?php
        include('navbar.php');
        ?>


        <?php 
       // $prenom=$_POST['prenom'];
        //$_SESSION['prenom']=$prenom;
        
        if(isset($_POST['email'])){
            
         echo('<p class="text-center"><img src="https://thumbs.gfycat.com/RelievedRectangularIcefish-size_restricted.gif"></p>');
        }

        ?>

        <h1 class="fadeInDown text-center" style="color: chartreuse;"><b>BIENVENUE A SCAR-LAND</b></h1>
        <h2 class="flash">bonjour:<?php echo $_SESSION['email'] ?></h2>
        <!--<p class="text-center flash"><img width="10%" src="https://www.gif-maniac.com/gifs/52/52100.gif" /></p>-->

        <!--<h3 style="color:blue;" class="fadeInDown text-center"></br> Bonjour et bienvenue
        </h3>-->

        <?php
        
        //$reponse=$bd->query('SELECT * FROM produit');
        try
        {
            // On se connecte à MySQL
            $db = new PDO('mysql:host=localhost;dbname=e commerce;charset=utf8', 'root', '');
            $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        }catch(PDOException $exception)
        {
            // En cas d'erreur, on affiche un message et on arrête tout
                die("Erreur de connexion PDO mySQL:".$exception-> getMessage());
        }
        //requète sql stocké dans une variable
        $sql="SELECT `id_produit`, `nom_produit`, `description_produit`, `image_produit`, `prix_produit` FROM `id_produit` ORDER BY id_produit DESC ";
        //execution requète après creation stock connexion PDO


        
      
?>
        <div class="container">
            <d class="row mt-5">

                <?php
            foreach($db->query($sql) as $row){
                    ?>
                <div class="col-3 mt-2">
                    <img class="img-fluid" width="70%" src="<?php echo $row['image_produit']?>" />
                </div>
                <div class="col-3 mt-2">
                    <p><b><?php echo $row['description_produit'] ?></b></p>
                </div>
                <div class="col-3 mt-2">
                    <p heigth:20px;><b><?php echo $row['prix_produit'] .' €'?></b></p>

                </div>
                <div class="col-3 mt-2">
                    <a href="detail_produit.php?id=<?php echo  $row['id_produit']  ?>" id=""
                        class="btn btn-warning button ml-2">detail</a>
                    <a href="supprimer_produit.php?id=<?php echo  $row['id_produit']  ?>" id=""
                        class="btn btn-danger button ml-2">delete</a>
                    <a href="update.php?id=<?php echo  $row['id_produit']  ?>" id=""
                        class="btn btn-info button ml-2">update</a>

                </div>



                <?php
        }
        ?>
        </div>


        </div>


        <!--<div class="container">
            <table class=" table table-striped">
                <thead>
                    <tr>
                        <th>jordan</th>
                        <th>description</th>
                        <th>prix</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                foreach($db->query($sql) as $row){
    
                ?>
                    <tr>

                        <td>
                            <img style="height: 104px;" src="<?php echo $row['image_produit']?>" class="img-fluid" />;
                        </td>

                        <td>
                            <p> <?php echo $row['description_produit'] ?>;</p>

                        </td>
                        <td>
                            <p> <?php echo $row['prix_produit'] .' €'?>;</p>
                        </td>
                        <td><a href="detail_produit.php?id=<?php echo  $row['id_produit']  ?>" id=""
                                class="btn btn-primary ">Panier</a>
                        </td>
                    </tr>
                    <?php
        }
        ?>

                </tbody>

            </table>
        </div>-->





        <a href="catalog.php" class="btn btn-info m-5 button">suivant</a>