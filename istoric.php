<?php
    include('header.php');
    include('myFunctions.php');
    include ('dbcon.php');
?>

<div class = "py-3">
    <div class = "container">
        <h6>
            <a href = "home.php" style = "text-decoration: none; color: #088178">Home</a>
            / 
            <a href = "cart.php" style = "text-decoration: none; color: #088178">Cos de cumparaturi</a>
             / Istoric comenzi
        </h6>
    </div>
</div>

<section id = "cart" class = "section-p1">
    <h5>Comenzile tale</h5>
    <?php
        $comenzi = getOrders();
        foreach ($comenzi as $item)
        {
            ?>
            <div class = "card">
                <div class = "card-body">
                    <h5 style = "text-decoration: none; color: #088178"><?= $item['nr_expeditie'] ?>  <span style = "font-size: 13px; color: #cdb0ee"><?= $item['creat_la'] ?></span></h5>
                    <table width="100%">
                        <thead>
                            <tr>
                                <td>Produs</td>
                                <td>Cantitate</td>
                                <td>Subtotal</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $items = getProducts($item['id']);
                                $suma = 0;
                                foreach ($items as $prod)
                                {
                                    $suma += $prod['cantitate'] * $prod['pret'];
                                    ?>
                                    <tr>
                                        <td><?= $prod['nume'] ?></td>
                                        <td><?= $prod['cantitate'] ?></td>
                                        <td><?= $prod['cantitate'] * $prod['pret'] ?> RON</td>
                                    </tr>
                                    <?php
                                }
                                $suma += 5;
                            ?>
                            <tr>
                                <td>Transport</td>
                                <td>-</td>
                                <td>5 RON</td>
                            </tr>
                        </tbody>
                    </table>
                    <h6 style = "text-decoration: none; color: #088178; text-align: right;">Total: <?= $suma?> RON</h6>
                </div>
            </div>
            <br>
            <?php
        }
    ?>
</section>

<?php
    $user_id = $_SESSION['auth_user']['user_id'];
    $delete_query = "DELETE FROM cos WHERE user_id = '$user_id'";
    $delete_query_run = mysqli_query($con, $delete_query);
    include("footer.php");
?>