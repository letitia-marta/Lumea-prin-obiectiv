<?php
    include ('header.php');
    include ('myFunctions.php');

    if (isset($_GET['product']))
    {
        /*$category_name = $_GET['category'];
        $category_data = getByName("categories", $category_name);
        $category = mysqli_fetch_array($category_data);*/

        $product_name = $_GET['product'];
        $product_data = getByName("products", $product_name);
        $product = mysqli_fetch_array($product_data);

        if ($product)
        {
            ?>
            <section id="prodetails" class="section-p1">
                <div class="single-pro-image">
                    <img src="uploads/<?= $product['image']; ?>" width="100%" id="MainImg" alt="">
                </div>
                <div class="single-pro-details product_data">
                    <h6>
                        <a href = "home.php" style = "text-decoration: none; color: #088178">Home</a>
                        / 
                        <a href = "shopStartPage.php" style = "text-decoration: none; color: #088178">Colectii</a>
                        / 
                        <?= $product['name']; ?>
                    </h6>
                    <br>
                    <h4><?= $product['name']; ?></h4>
                    <h2><?= $product['price']; ?> RON</h2>
                    <div class = "row">
                        <div class = "col-md-4">
                            <div class = "input-group mb-3" style = "width: 130px">
                                <button class = "input-group-text decrement-btn" style = "background-color: #ebacfb; color: #000000">-</button>
                                <input type = "text" class = "form-control text-center input-qty bg-white" value = "1" disabled>
                                <button class = "input-group-text increment-btn" style = "background-color: #ebacfb; color: #000000">+</button>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary px-4 addToCartBtn" value="<?= $product['id']; ?>"><i class = "fa fa-shopping-cart me-2"></i>Adauga in cos</button>
                    <h4><br>Detalii produs</h4>
                    <span><?= $product['description']; ?></span>
                </div>
            </section>
            <?php
        }
        else
        {
            ?>
            <h4 style = "color: #d81010">Produsul nu a fost gasit</h4>
            <?php
        }
    }
    else
    {
        ?>
        <h4 style = "color: #d81010">A intervenit o eroare</h4>
        <?php
    }

    include("footer.php");
?>