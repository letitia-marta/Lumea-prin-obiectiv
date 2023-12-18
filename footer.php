<section id="newsletter" class="section-p1">
    <div class="newstext">
        <h4>Aboneaza-te la newsletter</h4>
        <p>Primeste pe e-mail noutatile si <span>ofertele speciale</span>.</p>
    </div>
    <div class="form">
        <form action="newsletter.php" method="POST">
            <input type="text" name="email" placeholder="email">
            <button class="normal" name="newsletter-btn">Aboneaza-te</button>
        </form>
    </div>
</section>

<footer class="section-p1">
    <div class="col">
        <h4>Contact</h4>
        <p><strong>Adresa:</strong> Timisoara, Romania</p>
        <p><strong>Telefon:</strong> +40 770 915 325</p>
        <div class="follow">
            <h4>Urmareste-ma</h4>
            <div class="icon">
                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
                <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <div class="col">
        <h4>Despre</h4>
        <a href="#">Livrare</a>
        <a href="#">Polita de securitate</a>
        <a href="#">Termeni si conditii</a>
        <a href="contact.php">Contact</a>
    </div>
    <div class="col">
        <h4>Contul meu</h4>
        <a href="login.php">Conectare</a>
        <a href="cart.php">Cosul meu</a>
        <a href="#">Urmareste comanda</a>
        <a href="#">Ajutor</a>
    </div>
    <div class="copyright">
        <p>© 2023, Lumea prin obiectiv</p>
    </div>
</footer>

<script src="jquery-3.7.1.min.js"></script>
<script src="bootstrap.bundle.min.js"></script>
<script src="custom.js"></script>

<!-- Alertify JS -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
    alertify.set('notifier','position', 'top-right');
    <?php
        if (isset($_SESSION['message']))
        {
            ?>
            alertify.success('<?= $_SESSION['message']; ?>');
            <?php
            unset($_SESSION['message']);
        }
    ?>
</script>

</body>
</html>