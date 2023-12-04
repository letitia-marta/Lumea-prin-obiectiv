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
                    <li><?php echo '<a class="active" href="shopStartPage.php">';?>Shop</li>
                    <li><?php echo '<a href="about.php">';?>Despre mine</li>
                    <li><?php echo '<a href="contact.php">';?>Contact</li>
                    <li><?php echo '<a href="register.php">';?>Inregistrare</li>
                    <li><?php echo '<a href="login.php">';?>Log In</li>
                    <li><?php echo '<a href="cart.php">';?>Cos</li>
                </ul>
            </div>
        </section>  

        <section id="prodetails" class="section-p1">
            <div class="single-pro-image">
                <img src="" width="100%" id="MainImg" alt="">
            </div>
            <div class="single-pro-details">
                <h6>Home / Produs</h6>
                <br>
                <h4>Produs</h4>
                <h2>50 RON</h2>
                <input type="number" value="1">
                <button class="normal">Adauga in cos</button>
                <h4><br>Detalii produs</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur augue nisi, a semper nisi dignissim ut. Donec auctor ante diam, vel efficitur mi ornare in. Maecenas magna felis, sollicitudin eget tristique a, dapibus dictum justo. Vestibulum in nibh elit. Aenean dignissim nulla id risus gravida, sed feugiat ipsum aliquet. Etiam vulputate nec tellus at elementum. Donec venenatis nisi at tellus ullamcorper sodales. Duis sed scelerisque sapien. Praesent pharetra pharetra massa nec dapibus. Praesent ut orci fringilla, efficitur mi in, blandit velit. Aliquam diam erat, cursus at tincidunt et, commodo ac erat. Donec scelerisque nunc in neque molestie, ac viverra leo suscipit. Suspendisse potenti. Vestibulum lobortis dolor in purus ornare, non imperdiet sapien porta.</span>
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