<?php 
session_start();

if (isset($_SESSION['auth']))
{
    $_SESSION['message'] = "Esti deja conectat";
    header('Location: home.php');
    exit();
}

include("header.php"); ?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                    if(isset($_SESSION['message']))
                    { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>!</strong> <?= $_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                    unset($_SESSION['message']);
                    }
                ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Conectare</h4>
                    </div>
                    <div class="card-body">
                        <form action="authcode.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="numeledvs@exemplu.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Parola</label>
                                <input type="password" name="parola" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button style="font-size: 14px;font-weight: 600;padding: 15px 30px;color: #ffffff;background-color: #088178;border-radius: 4px;cursor: pointer;border: none;outline: none;transition: 0.2s;" type="submit" name="buton_login">Intra in cont</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>