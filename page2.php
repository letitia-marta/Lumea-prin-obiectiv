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
                <li><a class="active" href="home.php">Home</a></li>
                    <li><?php echo '<a href="shopStartPage.php">';?>Shop</li>
                    <li><?php echo '<a href="about.php">';?>Despre mine</li>
                    <li><?php echo '<a href="contact.php">';?>Contact</li>
                    <li><?php echo '<a href="register.php">';?>Inregistrare</li>
                    <li><?php echo '<a href="login.php">';?>Log In</li>
                    <li><?php echo '<a href="cart.php">';?>Cos</li>
                </ul>
            </div>
        </section>

        <section id="product1" class="section-p1">
            <div class="pro-container">
                <div class="pro">
                    <img src="photos/landscape/why he ourple.jpg" alt="">
                    <div class="des">
                        <h5>Purple</h5>
                    </div>
                </div>

                <div class="pro">
                    <img src="photos/landscape/spring 5.jpg" alt="">
                    <div class="des">
                        <h5>Tiny flower</h5>
                    </div>
                </div>

                <div class="pro">
                    <img src="photos/landscape/leaves.jpg" alt="">
                    <div class="des">
                        <h5>Birth of a leaf</h5>
                    </div>
                </div>

                <div class="pro">
                    <img src="photos/landscape/flower.jpg" alt="">
                    <div class="des">
                        <h5>Pink Rhododendron</h5>
                    </div>
                </div>

                <div class="pro">
                    <img src="photos/landscape/bells.jpg" alt="">
                    <div class="des">
                        <h5>White bells</h5>
                    </div>
                </div>

                <div class="pro">
                    <img src="photos/landscape/close to heaven.jpg" alt="">
                    <div class="des">
                        <h5>Close to heaven</h5>
                    </div>
                </div>

                <div class="pro">
                    <img src="photos/landscape/droplets 2.jpg" alt="">
                    <div class="des">
                        <h5>Droplets</h5>
                    </div>
                </div>

                <div class="pro">
                    <img src="photos/landscape/winter.jpg" alt="">
                    <div class="des">
                        <h5>Frozen</h5>
                    </div>
                </div>

                <div class="pro">
                    <img src="photos/landscape/crescent.jpg" alt="">
                    <div class="des">
                        <h5>Crescent</h5>
                    </div>
                </div>

                <div class="pro">
                    <img src="photos/landscape/single rose.jpg" alt="">
                    <div class="des">
                        <h5>Halo</h5>
                    </div>
                </div>

                <div class="pro">
                    <img src="photos/landscape/debarcarea obligatorie.jpg" alt="">
                    <div class="des">
                        <h5>Mandatory debarking</h5>
                    </div>
                </div>

                <div class="pro">
                    <img src="photos/landscape/evening.jpg" alt="">
                    <div class="des">
                        <h5>Evening</h5>
                    </div>
                </div>

                <div class="pro">
                    <img src="photos/landscape/angelic.jpg" alt="">
                    <div class="des">
                        <h5>God's balcony</h5>
                    </div>
                </div>

                <div class="pro">
                    <img src="photos/landscape/hall.jpg" alt="">
                    <div class="des">
                        <h5>Hall</h5>
                    </div>
                </div>

                <div class="pro">
                    <img src="photos/landscape/arch.jpg" alt="">
                    <div class="des">
                        <h5>Arch</h5>
                    </div>
                </div>

                <div class="pro">
                    <img src="photos/landscape/pine.jpg" alt="">
                    <div class="des">
                        <h5>Pine tree</h5>
                    </div>
                </div>

                <div class="pro">
                    <img src="photos/landscape/dark red.jpg" alt="">
                    <div class="des">
                        <h5>Dark red</h5>
                    </div>
                </div>

                <div class="pro">
                    <img src="photos/landscape/flowers.jpg" alt="">
                    <div class="des">
                        <h5>Rebirth</h5>
                    </div>
                </div>

                <div class="pro">
                    <img src="photos/landscape/spring 2.jpg" alt="">
                    <div class="des">
                        <h5>Spring</h5>
                    </div>
                </div>

                <div class="pro">
                    <img src="photos/landscape/roses.jpg" alt="">
                    <div class="des">
                        <h5>Double delight</h5>
                    </div>
                </div>
            </div>
        </section>

        <section id="pagination" class="section-p1">
            <?php echo '<a href="home.php">1';?>
            <?php echo '<a href="page2.php">2';?>
            <a href="#">→</a>
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