<!DOCTYPE html>
<html lang="en">

<?php  include __DIR__."/includes/head.php"  ?>
<body>
<?php  include __DIR__ ."/includes/navbar.php" ?>    





<div class="container mt-3" style="max-width: 400px;">
<?php

if(isset($_SESSION["flash"]["errors"]) && !empty ( $_SESSION["flash"]["errors"])  ){ ?>

<div class="alert alert-danger">

<ul>
    <?php
    foreach ($_SESSION["flash"]["errors"] as $err) {
        print "<li>$err</li>";}
        ?>

        </ul>
</div>  

<?php }


if (isset ($_SESSION["flash"]["success"])){

print "<div class='alert alert-success'>";

print "{$_SESSION["flash"]["success"]}";

print "</div>";

}






?>








<h2 class="text-center">Regisztráció</h2>



<form action="/register" method="post" class="row gy-3">

<div class=" col-md-12">
<label for="name" class="form-label">Add meg a neved</label>
<input type="text"  name="name"  id="name" class="form-control">
</div>

<div class="col-md-12">
<label for="email" class="form-label">Add meg az email címed</label>
<input type="email"  name="email"  id="email" class="form-control">
</div>


<div class="col-md-12">
<label for="password" class="form-label">Add meg a jelszavad</label>
<input type="password"  name="password"  id="password" class="form-control">
</div>

<div class="col-md-12">
<label for="password_confirm" class="form-label">Jelszó megerősítése</label>
<input type="password"  name="password_confirm"  id="password_confirm" class="form-control">
</div>

<div class="col-md-12 text-center">
<button class="btn btn-primary mt-3">Regisztráció</button>
</div>

</form>
</div>










<?php include __DIR__."/includes/script.php" ?>
</body>
</html>