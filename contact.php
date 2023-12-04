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
                    <li><?php echo '<a class="active" href="contact.php">';?>Contact</li>
                    <li><?php echo '<a href="register.php">';?>Inregistrare</li>
                    <li><?php echo '<a href="login.php">';?>Log In</li>
                    <li><?php echo '<a href="cart.php">';?>Cos</li>
                </ul>
            </div>
        </section>

        <section id="contact-details" class="section-p1">
            <div class="details">
                <h2>Contacteaza-ma</h2>
                <div>
                    <li>
                        <i class="fal fa-map"></i>
                        <p>Timisoara, Romania</p>
                    </li>
                    <li>
                        <i class="far fa-envelope"></i>
                        <p>contact@lumeaprinobiectiv.ro</p>
                    </li>
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <p>+40 770 915 325</p>
                    </li>
                </div>
            </div>

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.6831775620753!2d21.22634367569889!3d45.75749717108026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47456781b7c76ba9%3A0xdf9cdca30597d91!2zUGlhyJthIFVuaXJpaSwgVGltaciZb2FyYQ!5e0!3m2!1sen!2sro!4v1701359642981!5m2!1sen!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <section id="form-details">
            <form action="">
                <span>LASA UN MESAJ</span>
                <h2>Parerea ta este importanta</h2>
                <input type="text" placeholder="Nume">
                <input type="text" placeholder="e-mail">
                <input type="text" placeholder="Subiect">
                <textarea name="" id="" cols="30" rows="10" placeholder="Mesaj"></textarea>
                <button class="normal">Trimite</button>
            </form>

            <div class="people">
                <div>
                    <img src="photos/utilitare/profile.jpg" alt="">
                    <p><span>Letitia Iliescu</span> Fotograf <br> Telefon: +40 770 915 325 <br> Email: letitia.iliescu@lumeaprinobiectiv.ro</p>
                </div>
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