<?php
    include('adminHeader.php');
    include('adminMiddleware.php');
    include('myFunctions.php');
?>

<div class = "container">
    <div class = "row">
        <div class = "col-md-12">
            <?php
                if (isset($_GET['id']))
                {
                    $id = $_GET['id'];
                    $product = getByID("products",$id);
                    if (mysqli_num_rows($product) > 0)
                    {
                        $data = mysqli_fetch_array($product);
                        ?>
                        <div class = "card">
                            <div class = "card-header">
                                <h4>Editeaza produsul</h4>
                            </div>
                            <div class = "card-body">
                                <form action = "code.php" method = "POST" enctype = "multipart/form-data">
                                    <div class = "row">
                                        <div class = "col-md-12">
                                            <label class = "mb-0">Alege colectia</label>
                                            <select required name = "category_id" class="form-select mb-2">
                                                <option selected>Alege colectia</option>-->
                                                <?php
                                                    $categories = getAll("categories");
                                                    if (mysqli_num_rows($categories) > 0)
                                                    {
                                                        foreach($categories as $item)
                                                        {
                                                            ?>
                                                            <option value="<?= $item['id']; ?>"><?= $item['name']; ?></option>
                                                            <?php
                                                        }
                                                    }
                                                    else
                                                    {
                                                        echo "Nicio colectie disponibila";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class = "col-md-6">
                                            <input type = "hidden" name = "prod_id" value = "<?= $data['id'] ?>">
                                            <label for = "">Nume</label>
                                            <input type = "text" name = "name" value = "<?= $data['name'] ?>" placeholder = "Numele colectiei" class = "form-control">
                                        </div>
                                        <div class = "col-md-6">
                                            <label for = "">Incarca o imagine</label>
                                            <input type = "file" name = "image" class = "form-control">
                                            <label for = "">Imaginea curenta</label>
                                            <input type = "hidden" name = "old_image" value="<?= $data['image'] ?>">
                                            <img src = "uploads/<?= $data['image'] ?>" height = "50px" width = "50px" alt = "">
                                        </div>
                                        <div class = "col-md-12">
                                            <label for = "">Descriere</label>
                                            <textarea rows = "3" name = "description" placeholder = "Descriere" class = "form-control"><?= $data['description'] ?></textarea>
                                        </div>
                                        <div class = "col-md-6">
                                            <label class = "mb-0">Pret</label>
                                            <input type = "text" required name = "price" value = "<?= $data['price'] ?>" placeholder = "Pret" class = "form-control mb-2">
                                        </div>
                                        <div class = "col-md-6">
                                            <label class = "mb-0">Cantitate</label>
                                            <input type = "number" required name = "qty" value = "<?= $data['qty'] ?>" placeholder = "Cantitate" class = "form-control mb-2">
                                        </div>
                                        <div class = "col-md-12">
                                            <button type = "submit" class = "btn btn-primary" name="update_product_btn">Salveaza</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php
                    }
                    else
                    {
                        echo "Produsul nu a fost gasit";
                    }
                }
                else
                {
                    echo "ID-ul lipseste din URL";
                }
            ?>
        </div>
    </div>
</div>

<?php
    include('adminFooter.php');
?>