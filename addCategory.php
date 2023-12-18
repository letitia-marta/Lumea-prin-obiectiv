<?php
    include('adminHeader.php');
    include('adminMiddleware.php');
?>

<div class = "container">
    <div class = "row">
        <div class = "col-md-12">
            <div class = "card">
                <div class = "card-header">
                    <h4>Adauga o colectie</h4>
                </div>
                <div class = "card-body">
                    <form action = "code.php" method = "POST" enctype = "multipart/form-data">
                        <div class = "row">
                            <div class = "col-md-6">
                                <label class = "mb-0">Nume</label>
                                <input type = "text" name = "name" placeholder = "Numele colectiei" class = "form-control mb-2>
                            </div>
                            <div class = "col-md-6">
                                <label class = "mb-0">Incarca o imagine</label>
                                <input type = "file" name = "image" class = "form-control mb-2">
                            </div>
                            <div class = "col-md-12">
                                <label class = "mb-0">Descriere</label>
                                <textarea rows = "3" name = "description" placeholder = "Descriere" class = "form-control mb-2"></textarea>
                            </div>
                            <div class = "col-md-12">
                                <button type = "submit" class = "btn btn-primary" name="add_category_btn">Salveaza</button>
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