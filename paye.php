<?php
session_start()
?>
<?php
include('navbar.php');
?>

<h1 style="color:blue;" class="fadeInDown text-center"></br>Passons a la caisse</h1>
<h2>bonjour:<?php echo $_SESSION['email'] ?></h2>
<!--<img width="10%" src="https://www.gif-maniac.com/gifs/52/52100.gif" />-->

<div class="row">
    <div class="col-75">
        <div class="container">
            <form action="paye.php">
                <h3></h3>

                <div class="row">
                    <div class="col-50 m-5 p-2">

                        <label for="fname"><i class="fa fa-user"></i> Nom</label></br>
                        <input type="text" id="fname" name="firstname" placeholder="pierre vincent">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="john@example.com">
                        <label for="adr"><i class="fa fa-address-card-o"></i> Addresse</label>
                        <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                        <label for="city"><i class="fa fa-institution"></i> Ville</label>
                        <input type="text" id="city" name="city" placeholder="valence">

                        <div class="row m-2 p-2">
                            <div class="col-50">
                                <label for="state">Pays</label>
                                <input type="text" id="state" name="state" placeholder="NY">
                            </div>
                            <div class="col-50 m-2 p-2">
                                <label for="zip">code postal</label>
                                <input type="text" id="zip" name="zip" placeholder="10001">
                            </div>
                        </div>
                    </div>

                    <div class="col-50 m-2 p-2">
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>
                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"></br>
                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="September"></br>

                        <div class="row">
                            <div class="col-50 m-2 p-2">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2018">
                            </div>
                            <div class="col-50 m-2 p-2">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="352">
                            </div>
                        </div>
                    </div>

                </div>
                <label>
                    <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                </label>
                <input type="submit" value="Continue to checkout" class="btn">
            </form>
        </div>
    </div>

    <div class="col-25">
        <div class="container">
            <h4>Cart
                <span class="price" style="color:black">
                    <i class="fa fa-shopping-cart"></i>

                </span>
            </h4>
        </div>
    </div>
</div>
<a href="index.php" class="btn btn-success">retour</a>