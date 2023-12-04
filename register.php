<?php 

session_start();
include("header2.php"); ?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                    if(isset($_SESSION['message']))
                    { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Atentie!</strong> <?= $_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                    unset($_SESSION['message']);
                    }
                ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Inregistrare</h4>
                    </div>
                    <div class="card-body">
                        <form action="authcode.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Nume</label>
                                <input type="text" name="nume" class="form-control" placeholder="Nume Prenume">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="numeledvs@exemplu.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Parola</label>
                                <input type="password" name="parola" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirmare parola</label>
                                <input type="password" name="confirmare" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" nume="buton_inregistrare" class="btn btn-primary">Inregistreaza-te</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer2.php"); ?>