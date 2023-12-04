<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <title>Lumea prin obiectiv</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <section id="header">
            <a href="#"><img src="img/logo.png" class="logo" alt=""></a>
            <div>
                <ul id="navbar">
                <li><a href="home.php">Home</a></li>
                    <li><?php echo '<a href="shopStartPage.php">';?>Shop</li>
                    <li><?php echo '<a href="about.php">';?>Despre mine</li>
                    <li><?php echo '<a href="contact.php">';?>Contact</li>
                    <li><?php echo '<a href="register.php">';?>Inregistrare</li>
                    <li><?php echo '<a href="login.php">';?>Log In</li>
                    <li><?php echo '<a class="active" href="cart.php">';?>Cos</li>
                    <a href="#" id="close"><i class="far fa-times"></i></a>
                </ul>
            </div>
        </section>  

        <section id="cart" class="section-p1">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Elimina</td>
                        <td>Imagine</td>
                        <td>Produs</td>
                        <td>Pret</td>
                        <td>Cantitate</td>
                        <td>Subtotal</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><i class="far fa-times-circle"></i><a href="#"></a></td>
                        <td><img src="" alt=""></td>
                        <td>Produs</td>
                        <td>50 RON</td>
                        <td><input type="number" value="1"></td>
                        <td>50 RON</td>
                    </tr>
                    <tr>
                        <td><i class="far fa-times-circle"></i><a href="#"></a></td>
                        <td><img src="" alt=""></td>
                        <td>Produs</td>
                        <td>50 RON</td>
                        <td><input type="number" value="1"></td>
                        <td>50 RON</td>
                    </tr>
                    <tr>
                        <td><i class="far fa-times-circle"></i><a href="#"></a></td>
                        <td><img src="" alt=""></td>
                        <td>Produs</td>
                        <td>50 RON</td>
                        <td><input type="number" value="1"></td>
                        <td>50 RON</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="cart-add" class="section-p1">
            <div id="subtotal">
                <h3>Total cos cumparaturi</h3>
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td>150 RON</td>
                    </tr>
                    <tr>
                        <td>Livrare</td>
                        <td>7 RON</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>157 RON</td>
                    </tr>
                </table>
                <button class="normal">Finalizare</button>
            </div>
        </section>

        <section id="newsletter" class="section-p1">
            <div class="newstext">
                <h4>Aboneaza-te la newsletter</h4>
                <p>Primeste pe e-mail noutatile si <span>ofertele speciale</span>.</p>
            </div>
            <div class="form">
                <input type="text" placeholder="email">
                <button class="normal">Aboneaza-te</button>
            </div>
        </section>

        <footer class="section-p1">
            <div class="col">
                <img class="logo" src="logo.png">
                <h4>Contact</h4>
                <p><strong>Adresa:</strong> Timisoara, Romania</p>
                <p><strong>Telefon:</strong> +40 770 915 325</p>
                <div class="follow">
                    <h4>Urmareste-ma</h4>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-pinterest-p"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>

            <div class="col">
                <h4>Despre</h4>
                <a href="#">Livrare</a>
                <a href="#">Polita de securitate</a>
                <a href="#">Termeni si conditii</a>
                <a href="#">Contact</a>
            </div>

            <div class="col">
                <h4>Contul meu</h4>
                <a href="#">Conectare</a>
                <a href="#">Cosul meu</a>
                <a href="#">Wishlist</a>
                <a href="#">Urmareste comanda</a>
                <a href="#">Ajutor</a>
            </div>

            <div class="copyright">
                <p>© 2023, Lumea prin obiectiv</p>
            </div>
        </footer>

        <script src="script.js"></script>
    </body>
</html>

<!--<i class="fa-light fa-cart-shopping" style="color: #465b52;"></i>