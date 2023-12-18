<?php
    session_start();
    include('dbcon.php');

    if (isset($_POST['add_category_btn']))
    {
        $name = $_POST['name'];
        $description = $_POST['description'];

        $image = $_FILES['image']['name'];
        $path = "D:/LETITIA/scoala/UVT/discipline/anul 2/sem 1/PI/XAMPP/htdocs/uploads";
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_ext;

        $cate_query = "INSERT INTO categories (name,description,image) VALUES ('$name','$description','$filename')";

        $cate_query_run = mysqli_query($con, $cate_query);
        if ($cate_query_run)
        {
            move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
            $_SESSION['message'] = "Colectia a fost adaugata";
            header('Location: addCategory.php');
        }
        else
        {
            $_SESSION['message'] = "A intervenit o eroare";
            header('Location: addCategory.php');
        }
    }
    else if (isset($_POST['update_category_btn']))
    {
        $category_id = $_POST['category_id'];
        $name = $_POST['name'];
        $description = $_POST['description'];

        $new_image = $_FILES['image']['name'];
        $old_image = $_POST['old_image'];

        if ($new_image != "")
        {
            $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
            $update_filename = time().'.'.$image_ext;
        }
        else
        {
            $update_filename = $old_image;
        }

        $path = "D:/LETITIA/scoala/UVT/discipline/anul 2/sem 1/PI/XAMPP/htdocs/uploads";
        $update_query = "UPDATE categories SET name = '$name', description = '$description', image = '$update_filename' WHERE id = '$category_id'";
        $update_query_run = mysqli_query($con, $update_query);

        if ($update_query_run)
        {
            if ($_FILES['image']['name'] != "")
            {
                move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$new_image);
                if (file_exists("D:/LETITIA/scoala/UVT/discipline/anul 2/sem 1/PI/XAMPP/htdocs/uploads".$old_image))
                {
                    unlink("D:/LETITIA/scoala/UVT/discipline/anul 2/sem 1/PI/XAMPP/htdocs/uploads".$old_image);
                }
            }
            $_SESSION['message'] = "Colectia a fost modificata";
            header('Location: editCategory.php?id='.$category_id);
        }
        else
        {
            $_SESSION['message'] = "A intervenit o eroare";
            header('Location: editCategory.php?id='.$category_id);
        }
    }
    else if (isset($_POST['delete_category_btn']))
    {
        $category_id = mysqli_real_escape_string($con, $_POST['category_id']);
        $delete_query = "DELETE FROM categories WHERE id = '$category_id'";
        $delete_query_run = mysqli_query($con, $delete_query);

        if ($delete_query_run)
        {
            $_SESSION['message'] = "Categoria a fost stearsa";
            header('Location: category.php');
        }
        else
        {
            $_SESSION['message'] = "A intervenit o eroare";
            header('Location: category.php');
        }
    }
    else if (isset($_POST['add_product_btn']))
    {
        $category_id = $_POST['category_id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $image = $_FILES['image']['name'];

        $path = "D:/LETITIA/scoala/UVT/discipline/anul 2/sem 1/PI/XAMPP/htdocs/uploads";
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_ext;

        if ($name != "" && $description != "" && $category_id != '0')
        {
            $product_query = "INSERT INTO products (category_id,name,description,image,price,qty)
            VALUES ('$category_id','$name','$description','$filename','$price','$qty')";
            $product_query_run = mysqli_query($con, $product_query);

            if ($product_query_run)
            {
                move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
                $_SESSION['message'] = "Produsul a fost adaugat";
                header('Location: addProduct.php');
            }
            else
            {
                $_SESSION['message'] = "A intervenit o eroare";
                header('Location: addProduct.php');
            }
        }
        else
        {
            $_SESSION['message'] = "Toate campurile sunt obligatorii";
            header('Location: addProduct.php');
        }
    }
    else if (isset($_POST['update_product_btn']))
    {
        $product_id = $_POST['prod_id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];

        $new_image = $_FILES['image']['name'];
        $old_image = $_POST['old_image'];

        if ($new_image != "")
        {
            $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
            $update_filename = time().'.'.$image_ext;
        }
        else
        {
            $update_filename = $old_image;
        }

        $path = "D:/LETITIA/scoala/UVT/discipline/anul 2/sem 1/PI/XAMPP/htdocs/uploads";
        $update_query = "UPDATE products SET name = '$name', description = '$description', image = '$update_filename', price = '$price', qty = '$qty' WHERE id = '$product_id'";
        $update_query_run = mysqli_query($con, $update_query);

        if ($update_query_run)
        {
            if ($_FILES['image']['name'] != "")
            {
                move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$new_image);
                if (file_exists("D:/LETITIA/scoala/UVT/discipline/anul 2/sem 1/PI/XAMPP/htdocs/uploads".$old_image))
                {
                    unlink("D:/LETITIA/scoala/UVT/discipline/anul 2/sem 1/PI/XAMPP/htdocs/uploads".$old_image);
                }
            }
            $_SESSION['message'] = "Produsul a fost modificat";
            header('Location: products.php');
        }
        else
        {
            $_SESSION['message'] = "A intervenit o eroare";
            header('Location: editProduct.php?id='.$product_id);
        }
    }
    else if (isset($_POST['delete_product_btn']))
    {
        $prod_id = mysqli_real_escape_string($con, $_POST['prod_id']);
        $delete_query = "DELETE FROM products WHERE id = '$prod_id'";
        $delete_query_run = mysqli_query($con, $delete_query);

        if ($delete_query_run)
        {
            $_SESSION['message'] = "Produsul a fost sters";
            header('Location: products.php');
        }
        else
        {
            $_SESSION['message'] = "A intervenit o eroare";
            header('Location: products.php');
        }
    }
?>