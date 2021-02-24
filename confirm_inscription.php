<?php session_start() ;

//include('navbar.php');
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


<?php


try
{
    // On se connecte à MySQL
    $db = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '');
    $db->setAttribute( PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION );
}catch(PDOException $exception)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die("Erreur de connexion PDO mySQL:".$exception-> getMessage());
}



?>
<h1 class="fadeInDown text-center" style="color: chartreuse;"><b>INSCRIPTION</b></h1>
<!--<h2 class="flash">bonjour:<?php echo $_SESSION['users_email'] ?></h2>
<p class="text-center flash"><img width="10%" src="https://www.gif-maniac.com/gifs/52/52100.gif" /></p>-->


<h2 class="text-center"></h2>
<form method="post" action="login.php">
    <div class="container m5">
        <div class="form-group">
            <label for="users_name">users name</label>
            <input type="text" class="form-control" id="users_name" name="users_name" required>
        </div>

        <div class="form-group">
            <label for="users">email utilisateur</label>
            <textarea rows="5" type="text" class="form-control" id="users_email" name="users_email" required></textarea>
        </div>

        <div class="form-group">
            <label for="users_password">mot de passe</label>
            <input type="text" class="form-control" id="users_password" name="users_password" required>
        </div>


        <div class="form_group">
            <button type="submit" class="btn btn-outline-success button">valider</button>
        </div>
    </div>
</form>
<a href="menu.php" class="btn btn-info m-5 button">retour</a>