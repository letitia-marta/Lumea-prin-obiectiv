<?php
    include('adminHeader.php');
    include('adminMiddleware.php');
    include('myFunctions.php');
?>

<div class = "container">
    <div class = "row">
        <div class = "col-md-12">
            <div class = "card">
                <div class = "card-header">
                    <h4>Adauga un produs</h4>
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
                                <label class = "mb-0">Nume</label>
                                <input type = "text" required name = "name" placeholder = "Numele produsului" class = "form-control mb-2">
                            </div>
                            <div class = "col-md-6">
                                <label class = "mb-0">Incarca o imagine</label>
                                <input type = "file" required name = "image" class = "form-control mb-2">
                            </div>
                            <div class = "col-md-12">
                                <label class = "mb-0">Descriere</label>
                                <textarea rows = "3" required name = "description" placeholder = "Descriere" class = "form-control mb-2"></textarea>
                            </div>
                            <div class = "col-md-6">
                                <label class = "mb-0">Pret</label>
                                <input type = "text" required name = "price" placeholder = "Pret" class = "form-control mb-2">
                            </div>
                            <div class = "col-md-6">
                                <label class = "mb-0">Cantitate</label>
                                <input type = "number" required name = "qty" placeholder = "Cantitate" class = "form-control mb-2">
                            </div>
                            <div class = "col-md-12">
                                <button type = "submit" class = "btn btn-primary" name="add_product_btn">Salveaza</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include('adminFooter.php');
?>