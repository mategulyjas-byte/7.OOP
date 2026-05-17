<!DOCTYPE html>
<html lang="en">



<?php include __DIR__."/includes/head.php"; ?>
<body>

<?php include __DIR__."/includes/navbar.php"; ?>



<div class="container mx-auto" style="max-width: 500px;">


<?php


if(isset($_SESSION["flash"]["errors"]) && !empty ($_SESSION["flash"]["errors"])         ){?>

<div class="alert alert-danger">

<ul>
<?php

if(isset($_SESSION["flash"]["errors"])){ foreach ($_SESSION["flash"]["errors"] as $error){ ?>

<?php
print "<li> $error</li>";
?>


<?php
};} ?>
</ul>
</div>
<?php } ?>

<?php

if(isset($_SESSION["flash"]["success"])){ 

print "<div class='alert alert-success'>";
   print $_SESSION["flash"]["success"];

print "</div>";






} 



?>










<h2 class="text-center mt-3">Regisztrációs űrlap</h2>

      <form action="/register" method="post" class="row gy-3" style="max-width: 900px;">

         <div class="col-md-12">

            <label for="name" class="form-label">Név</label>
            <input type="text" name="name" id="name" placeholder="Add meg a neved" class="form-control">
         </div>

         <div class="col-md-12">

            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email"    id="email" placeholder="Add meg az email címed" class="form-control">

         </div>

         <div class="col-md-12">

            <label for="password" class="form-label">Jelszó</label>
            <input type="password" name="password"   id="password" class="form-control">

         </div>


         <div class="col-md-12">
            <label for="password_confirmation" class="form-label">Jelszó megerősítése</label>
            <input type="password"  name="password_confirmation"      id="password_confirmation" class="form-control">
         </div>

         <div class="col-md-12 text-center">
            <button type="submit"  class="btn btn-warning mt-3">Regisztráció</button>
         </div>
      </form>

</div>

<?php include __DIR__."/includes/script.php"; ?>
</body>
</html>