<?php
    include('dbcon.php');

    function getAll ($table)
    {
        global $con;
        $query = "SELECT * FROM $table";
        return $query_run = mysqli_query($con,$query);
    }

    function getByID ($table, $id)
    {
        global $con;
        $query = "SELECT * FROM $table WHERE id = '$id'";
        return $query_run = mysqli_query($con,$query);
    }

    function getByName ($table, $name)
    {
        global $con;
        $query = "SELECT * FROM $table WHERE name = '$name' LIMIT 1";
        return $query_run = mysqli_query($con,$query);
    }

    function getProdByCategory ($category_id)
    {
        global $con;
        $query = "SELECT * FROM products WHERE category_id = '$category_id'";
        return $query_run = mysqli_query($con,$query);
    }

    function getCartItems()
    {
        global $con;
        if (isset($_SESSION['auth_user']['user_id']))
        {
            $userId = $_SESSION['auth_user']['user_id'];
            $query = "SELECT c.id AS cid, c.prod_id, c.prod_qty, p.id AS pid, p.name, p.image, p.price
                    FROM cos AS c
                    JOIN products AS p ON c.prod_id = p.id
                    WHERE c.user_id = '$userId'
                    ORDER BY c.id DESC";

            return $query_run = mysqli_query($con, $query);
        }
        else
        {
            //$_SESSION['message'] = 'Conecteaza-te pentru a accesa cosul de cumparaturi';
            header('Location: login.php');
        }
    }

    function getOrders()
    {
        global $con;
        if (isset($_SESSION['auth_user']['user_id']))
        {
            $userId = $_SESSION['auth_user']['user_id'];
            $query = "SELECT id, nr_expeditie, nume, telefon, adresa, cod_postal, total, creat_la
                    FROM comenzi WHERE user_id = '$userId' ORDER BY creat_la DESC";
            return $query_run = mysqli_query($con, $query);
            /*if ($query_run)
            {
                return $query_run;
            }
            else
            {
                return 0;
            }*/
        }
        else
        {
            //$_SESSION['message'] = 'Conecteaza-te pentru a accesa cosul de cumparaturi';
            header('Location: login.php');
        }
    }

    function getProducts($id_comanda)
    {
        global $con;
        $products = array();

        if (isset($_SESSION['auth_user']['user_id']))
        {
            $query = "SELECT p.name AS nume, c.cantitate AS cantitate, p.price AS pret
                    FROM comanda AS c JOIN products AS p ON c.id_produs = p.id
                    WHERE c.id_comanda = '$id_comanda'";
            $query_run = mysqli_query($con, $query);

            if ($query_run)
            {
                while ($row = mysqli_fetch_assoc($query_run))
                {
                    $products[] = $row;
                }
            }
        }
        else
        {
            // $_SESSION['message'] = 'Conecteaza-te pentru a accesa cosul de cumparaturi';
            header('Location: login.php');
        }

        return $products;
    }

    function getFeedback()
    {
        global $con;
        $query = "SELECT f.nume, f.email, f.subiect, f.mesaj, u.role_as FROM feedback f JOIN utilizatori u ON f.email = u.email ORDER BY f.id DESC";
        return $query_run = mysqli_query($con, $query);
    }

    function redirect ($url, $message)
    {
        $_SESSION['message'] = $message;
        header('Location: '.$url);
        exit();
    }
?>
