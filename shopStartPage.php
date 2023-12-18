<?php
    include ('header.php');
    include ('myFunctions.php');
?>

<div class = "py-3">
    <div class = "container">
        <h6>
            <a href = "home.php" style = "text-decoration: none; color: #088178">Home</a>
             / Colectii
        </h6>
    </div>
</div>

<section id="product1" class="section-p1">
    <div class="pro-container">
        <?php
            $categories = getAll("categories");
            if (mysqli_num_rows($categories) > 0)
            {
                foreach ($categories as $item)
                {
                    ?>
                    <div class="pro" onclick="window.location.href='produse.php?category=<?= $item['name'] ?>';">
                        <img src="uploads/<?= $item['image']; ?>" alt="">
                        <div class="des">
                            <h5><?= $item['name']; ?></h5>
                        </div>
                    </div>
                    <?php
                }
            }
            else
            {
                echo "In curand...";
            }
        ?>
    </div>
</section>

<?php
    include("footer.php");
?>

<!--<i class="fa-light fa-cart-shopping" style="color: #465b52;"></i>