<footer class = "footer pt-5">
    <div class = "container-fluid">
        <div class = "row align-items-center justify-content-lg-between">
            <div class = "col-lg-6">
                <ul class = "nav nav-footer justify-content-center justify-content-lg-end">
                    <li class = "nav-item">
                        <a href = "about.php" class = "nav-link pe-0 text-muted" target = "_blank">Despre mine</a>
                    </li>
                    <li class = "nav-item">
                        <a href = "contact.php" class = "nav-link pe-0 text-muted" target = "_blank">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</main>
    <script src = "jquery-3.7.1.min.js"></script>
    <script src = "bootstrap.bundle.min.js"></script>
    <script src = "perfect-scrollbar.min.js"></script>
    <script src = "smooth-scrollbar.min.js"></script>
    <script src = "custom.js"></script>
    
    <!-- Alertify JS -->
    <script src = "//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
        <?php
            if (isset($_SESSION['message']))
            {
                ?>
                alertify.set('notifier','position', 'top-right');
                alertify.success('<?= $_SESSION['message']; ?>');
                <?php
                unset($_SESSION['message']);
            }
          ?>
    </script>
    
  </body>
</html>