<?php
session_start();
?>
<link href="style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<?php

//require'navbar.php';


$email="ecommerce@pj3";
$password="bonjour";


if(isset($_POST['email']) && !empty( $_POST['email']) && isset($_POST['password']) && !empty( $_POST['password'])){
    
    if($email==$_POST['email'] && $password==$_POST['password']){
    $_SESSION['email']=$_POST['email'];
    echo $_SESSION['email'];
    $_SESSION['password']=$_POST['password'];
    echo $_SESSION['password'];
    
    header('location:http://localhost/Ecommerce/index.php');

    }else{
        echo "merci de mettre des valeures valides";
        echo "<img class='image'; src='https://gifsdomi.files.wordpress.com/2014/03/gif-smiley-scc3a8ne-divers-217.gif' />";
    }

}else{
    echo "<p class='paragraph'>merci de mettre des valeures valides</p>";
   
    echo '<img class="img" width="30%" src="https://gifsdomi.files.wordpress.com/2014/03/gif-smiley-scc3a8ne-divers-217.gif"/>';
}
?>
<p class="bouton"><a href="menu.php" class="btn btn-info button m-2 p-3">retour</a></p>