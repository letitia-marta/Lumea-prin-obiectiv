<?php
    //session_start();
    include("header.php");
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                    if(isset($_SESSION['message']))
                    { ?> 
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>!</strong> <?= $_SESSION['message'] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                        unset($_SESSION['message']);
                    }
                ?> 
            </div>
        </div>
    </div>
</div>

<section id="product1" class="section-p1">
    <h2>Galerie</h2>
    <div class="pro-container">
        <div class="pro">
            <img src="photos/portrait/branches.jpg" alt="">
            <div class="des">
                <h5>Leaves</h5>
            </div>
        </div>

        <div class="pro">
            <img src="photos/portrait/spring.jpg" alt="">
            <div class="des">
                <h5>Spring</h5>
            </div>
        </div>

        <div class="pro">
            <img src="photos/portrait/leaves.jpg" alt="">
            <div class="des">
                <h5>Autumn</h5>
            </div>
        </div>

        <div class="pro">
            <img src="photos/portrait/snow.jpg" alt="">
            <div class="des">
                <h5>Snow</h5>
            </div>
        </div>

        <div class="pro">
            <img src="photos/portrait/swan.jpg" alt="">
            <div class="des">
                <h5>Elegance</h5>
            </div>
        </div>

        <div class="pro">
            <img src="photos/portrait/sky branch 2.jpg" alt="">
            <div class="des">
                <h5>Stairway to heaven</h5>
            </div>
        </div>

        <div class="pro">
            <img src="photos/portrait/snowy trees.jpg" alt="">
            <div class="des">
                <h5>Winter wonderland</h5>
            </div>
        </div>

        <div class="pro">
            <img src="photos/portrait/lamp pine 2.jpg" alt="">
            <div class="des">
                <h5>Pine</h5>
            </div>
        </div>

        <div class="pro">
            <img src="photos/portrait/sky roses 2.jpg" alt="">
            <div class="des">
                <h5>Roses</h5>
            </div>
        </div>

        <div class="pro">
            <img src="photos/portrait/snowy trees 2.jpg" alt="">
            <div class="des">
                <h5>Blue</h5>
            </div>
        </div>

        <div class="pro">
            <img src="photos/portrait/swan 3.jpg" alt="">
            <div class="des">
                <h5>Swan</h5>
            </div>
        </div>

        <div class="pro">
            <img src="photos/portrait/sky branch 3.jpg" alt="">
            <div class="des">
                <h5>Branches</h5>
            </div>
        </div>

        <div class="pro">
            <img src="photos/portrait/sky branch.jpg" alt="">
            <div class="des">
                <h5>Serendipity</h5>
            </div>
        </div>

        <div class="pro">
            <img src="photos/portrait/spring 2.jpg" alt="">
            <div class="des">
                <h5>Flower</h5>
            </div>
        </div>

        <div class="pro">
            <img src="photos/portrait/rose.jpg" alt="">
            <div class="des">
                <h5>Red</h5>
            </div>
        </div>

        <div class="pro">
            <img src="photos/portrait/white flower.jpg" alt="">
            <div class="des">
                <h5>Grace</h5>
            </div>
        </div>
    </div>
</section>

<section id="pagination" class="section-p1">
    <a href="home.php">1</a>
    <a href="page2.php">2</a>
    <a href="page2.php">→</a>
</section>

<?php
    include("footer.php");
?>