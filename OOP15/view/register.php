<?php if (!defined("BELEP")) {
    http_response_code(413) && exit;
} ?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="<?php print WS_THEME; ?>">

<?php include __DIR__ . "/includes/head.php" ?>

<body>
    <?php include __DIR__ . "/includes/navbar.php"; ?>

    <div class="container" style="max-width: 450px;">


<?php if (isset($_SESSION["flash"]["errors"])){ ?> 



<div class="alert alert-danger">
<?php 

if (isset($_SESSION["flash"]["errors"])){

print "<ul>";
foreach ($_SESSION["flash"] ["errors"] as $error){print "<li> $error</li>";}
print "</ul>";
}


?>
</div>
<?php }?>





        <h3 class="text-center mt-5">Regisztráció</h3>

        <form class="row gy-3" action="/register" method="post">
            <div class="col-md-12">
                <label for="name" class="form-label">Név</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>

            <div class="col-md-12">
                <label for="email" class="form-label">e-mail</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>

            <div class="col-md-12">
                <label for="password" class="form-label">Jelszó</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <div class="col-md-12">
                <label for="password_confirmation" class="form-label">Jelszó megerősítése</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
            </div>

            <div class="col-12 text-center">
                <button class="btn btn-primary mt-3">Regisztráció</button>

            </div>
        </form>
    </div>
    <?php include __DIR__ . "/includes/scripts.php" ?>
</body>

</html>