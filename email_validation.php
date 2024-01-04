<?php
    include 'dbcon.php';
    include ('header.php');

    if (isset($_POST['verify_code']) && isset($_POST['email']))
    {
        $entered_code = mysqli_real_escape_string($con, $_POST['verification_code']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_code = mysqli_query($con, "SELECT * FROM utilizatori WHERE email = '$email' AND cod = '$entered_code'") or die('query failed');

        var_dump($email, $entered_code);
        if (mysqli_num_rows($check_code) == 0)
        {
            mysqli_query($con, "UPDATE utilizatori SET cod = NULL WHERE email = '$email'");
            $_SESSION['message'] = "Contul tau a fost creat";
            header('location: login.php');
        }
        else
        {
            $message[] = 'Cod de verificare incorect!';
        }
    }

?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>!</strong> Ai primit pe email codul de verificare
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="" method="POST">
                        <h3>Validare email</h3>
                        <input type="hidden" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                        <input type="text" name="verification_code" placeholder="Introdu codul" required class="box">
                        <input style="font-size: 14px;font-weight: 600;padding: 15px 30px;color: #ffffff;background-color: #088178;border-radius: 4px;cursor: pointer;border: none;outline: none;transition: 0.2s;" type="submit" name="verify_code" value="Verificare cod" class="btn">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
