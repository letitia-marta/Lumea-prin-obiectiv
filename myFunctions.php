<?php
    //session_start();
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

    function redirect ($url, $message)
    {
        $_SESSION['message'] = $message;
        header('Location: '.$url);
        exit();
    }
?>