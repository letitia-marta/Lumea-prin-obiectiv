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
                    <h4>Colectii</h4>
                </div>
                <div class = "card-body">
                    <table class = "table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nume</th>
                                <th>Imagine</th>
                                <th>Modifica</th>
                                <th>Sterge</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $category = getAll("categories");
                                if (mysqli_num_rows($category) > 0)
                                {
                                    foreach($category as $item)
                                    {
                                        ?>
                                        <tr>
                                            <td><?= $item['id'];?></td>
                                            <td><?= $item['name'];?></td>
                                            <td>
                                                <img src = "uploads/<?= $item['image']; ?>" height = "50px" alt = "<?= $item['name'];?>">
                                            </td>
                                            <td>
                                                <a href = "editCategory.php?id=<?= $item['id']; ?>" class = "btn btn-sm btn-primary">Modifica</a>
                                            </td>
                                            <td>
                                                <form action = "code.php" method = "POST">
                                                    <input type = "hidden" name = "category_id" value = "<?= $item['id']; ?>">
                                                    <button type = "submit" class = "btn btn-danger" name = "delete_category_btn">Sterge</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "Nu s-au gasit colectii";
                                }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include('adminFooter.php');
?>