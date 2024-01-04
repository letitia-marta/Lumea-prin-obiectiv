<?php
    include('header.php');
    include('myFunctions.php');
?>

<div class = "py-3">
    <div class = "container">
        <h6>
            <a href = "home.php" style = "text-decoration: none; color: #088178">Home</a>
            / 
            <a href = "cart.php" style = "text-decoration: none; color: #088178">Cos de cumparaturi</a>
             / Check out
        </h6>
    </div>
</div>

<section id = "cart" class = "section-p1">
    <div class = "card">
        <div class = "card-body">
            <form action = "comanda.php" method = "POST">
                <div class = "row">
                    <div class = "col-md-7">
                        <h5>Detalii</h5>
                        <hr>
                        <div class = "row">
                            <div class = "col-md-6 mb-3">
                                <label class = "fw-bold ">Nume</label>
                                <input type = "text" name = "nume" value = "<?= $_SESSION['auth_user']['nume'] ?>" class = "form-control">
                            </div>
                            <div class = "col-md-6 mb-3">
                                <label class = "fw-bold ">E-mail</label>
                                <input type = "text" name = "email" value = "<?= $_SESSION['auth_user']['email'] ?>" class = "form-control">
                            </div>
                            <div class = "col-md-6 mb-3">
                                <label class = "fw-bold ">Telefon</label>
                                <input type = "text" name = "telefon" value = "+40 " class = "form-control">
                            </div>
                            <div class = "col-md-6 mb-3">
                                <label class = "fw-bold ">Cod postal</label>
                                <input type = "text" name = "cod_postal" placeholder = "--- ---" class = "form-control">
                            </div>
                            <div class = "col-md-12 mb-3">
                                <label class = "fw-bold ">Adresa</label>
                                <textarea name = "adresa" class = "form-control" rows = "5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class = "col-md-5">
                        <h5>Detalii comanda</h5>
                        <hr>
                        <table width="100%">
                            <thead>
                                <tr>
                                    <td>Imagine</td>
                                    <td>Produs</td>
                                    <td>Cantitate</td>
                                    <td>Pret</td>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php
                                        $items = getCartItems();
                                        $suma = 0;
                                        foreach ($items as $citem)
                                        {
                                            $suma = $suma + $citem['prod_qty'] * $citem['price'];
                                            ?>
                                            <tr>
                                                <td>
                                                    <img src = "uploads/<?= $citem['image'] ?>" width = "50px" alt = "<?= $citem['name'];?>">
                                                </td>
                                                <td><?= $citem['name'] ?></td>
                                                <td><?= $citem['prod_qty'] ?></td>
                                                <td><?= $citem['prod_qty'] * $citem['price'] ?> RON</td>
                                            </tr>
                                            <?php
                                        }
                                    ?>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>-</td>
                                        <td>Transport</td>
                                        <td>-</td>
                                        <td>5 RON</td>
                                    </tr>
                            </tbody>
                        </table>
                        <hr>
                        <h5>Total: <span class = "float-end fw-bold"><?= $suma + 5 ?> RON</span></h5>
                        <div class = "">
                            <input type = "hidden" name = "metoda_plata" value = "COD">
                            <a href = "final.php"><button type = "submit" name = "order-btn" class = "w-100" style = "font-size: 14px;font-weight: 600;padding: 15px 30px;color: #ffffff;background-color: #088178;border-radius: 4px;cursor: pointer;border: none;outline: none;transition: 0.2s;">Plaseaza comanda</button></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
    include("footer.php");
?>
