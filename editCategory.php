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
                    $category = getByID("categories",$id);
                    if (mysqli_num_rows($category) > 0)
                    {
                        $data = mysqli_fetch_array($category);
                        ?>
                        <div class = "card">
                            <div class = "card-header">
                                <h4>Editeaza colectia</h4>
                            </div>
                            <div class = "card-body">
                                <form action = "code.php" method = "POST" enctype = "multipart/form-data">
                                    <div class = "row">
                                        <div class = "col-md-6">
                                            <input type = "hidden" name = "category_id" value = "<?= $data['id'] ?>">
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
                                        <div class = "col-md-12">
                                            <button type = "submit" class = "btn btn-primary" name="update_category_btn">Salveaza</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php
                    }
                    else
                    {
                        echo "Colectia nu a fost gasita";
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