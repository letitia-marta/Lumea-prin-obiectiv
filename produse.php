<?php
    include ('header.php');
    include ('myFunctions.php');

    if (isset($_GET['category']))
    {
        $category_name = $_GET['category'];
        $category_data = getByName("categories", $category_name);
        $category = mysqli_fetch_array($category_data);
        if ($category)
        {
            $cid = $category['id'];
            ?>

            <div class = "py-3">
                <div class = "container">
                    <h6>
                        <a href = "home.php" style = "text-decoration: none; color: #088178">Home</a>
                        / 
                        <a href = "shopStartPage.php" style = "text-decoration: none; color: #088178">Colectii</a>
                        / 
                        <?= $category['name']; ?>
                    </h6>
                </div>
            </div>

            <section id="product1" class="section-p1">
                <div class="pro-container">
                    <?php
                        $products = getProdByCategory($cid);
                        if (mysqli_num_rows($products) > 0)
                        {
                            foreach ($products as $item)
                            {
                                ?>
                                <div class="pro" onclick="window.location.href='productView.php?product=<?= $item['name'] ?>';">
                                    <img src="uploads/<?= $item['image']; ?>" alt="Product image">
                                    <div class="des">
                                        <h5><?= $item['name']; ?></h5>
                                        <h4><?= $item['price']; ?> RON</h4>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        else
                        {
                            ?>
                            <h4 style = "color: #088178">In curand...</h4>
                            <?php
                        }
                    ?>
                </div>
            </section>
            <?php
        }
        else
        {
            ?>
            <h4 style = "color: #d81010">A intervenit o eroare</h4>
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