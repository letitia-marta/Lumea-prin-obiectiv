<?php
    include('header.php');
    include('myFunctions.php');
?>

<div class = "py-3">
    <div class = "container">
        <h6>
            <a href = "home.php" style = "text-decoration: none; color: #088178">Home</a>
            / Cos de cumparaturi
        </h6>
    </div>
</div>

<?php
    $items = getCartItems();
    $suma = 0;
    foreach($items as $citem)
    {
        $suma += $citem['prod_qty'] * $citem['price'];
    }
    if ($suma > 0)
    {
        ?>
        <section id="cart" class="section-p1">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Imagine</td>
                        <td>Produs</td>
                        <td>Pret</td>
                        <td>Cantitate</td>
                        <td>Subtotal</td>
                        <td>Elimina</td>
                    </tr>
                </thead>
                <tbody>
                    <div id = "mycart">
                        <?php
                            foreach ($items as $citem)
                            {
                                ?>
                                <tr>
                                    <td>
                                        <img src = "uploads/<?= $citem['image'] ?>" width = "50px" alt = "<?= $citem['name'];?>">
                                    </td>
                                    <td><?= $citem['name'] ?></td>
                                    <td><?= $citem['price'] ?> RON</td>
                                    <td>
                                        <div class="single-pro-details product_data">
                                            <div class = "row">
                                                <div class = "col-md-4">
                                                    <input type = "hidden" class = "prodId" value = "<?= $citem['prod_id'] ?>">
                                                    <div class = "input-group mb-3" style = "width: 130px">
                                                        <button class = "input-group-text decrement-btn updateQty" style = "background-color: #ebacfb; color: #000000">-</button>
                                                        <input type = "text" class = "form-control text-center input-qty bg-white" value = "<?= $citem['prod_qty'] ?>" disabled>
                                                        <button class = "input-group-text increment-btn updateQty" style = "background-color: #ebacfb; color: #000000">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><?= $citem['prod_qty'] * $citem['price'] ?> RON</td>
                                    <td>
                                        <button class = "btn btn-danger btn-sm deleteItem" value = "<?= $citem['cid'] ?>"><i class = "fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <?php
                            }
                        ?>
                    </div>
                </tbody>
            </table>
        </section>
        
        <section id="cart-add" class="section-p1">
            <div id="subtotal">
                <h3>Total cos cumparaturi</h3>
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td><?= $suma ?> RON</td>
                    </tr>
                    <tr>
                        <td>Livrare</td>
                        <td>5 RON</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td><?= $suma + 5?> RON</td>
                    </tr>
                </table>
                <a href = "checkout.php" class = "btn btn-primary" style="font-size: 14px;font-weight: 600;padding: 15px 30px;color: #ffffff;background-color: #088178;border-radius: 4px;cursor: pointer;border: none;outline: none;transition: 0.2s;">Finalizare</a>
            </div>
        </section>
        <?php
    }
    else
    {
        ?>
        <h4 style = "color: #088178">Cosul este gol</h4>
        <?php
    }

    include("footer.php");
?>
