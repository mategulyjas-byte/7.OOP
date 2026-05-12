<!DOCTYPE html>
<html lang="en">

<?php  include __DIR__."/includes/head.php"  ?>
<body>
<?php  include __DIR__ ."/includes/navbar.php" ?>    

<h2>Registráció</h2>


<div class="container " style="max-width: 400px;">








<form action="/register" method="post" class="row gy-3">

<div class=" col-md-12">
<label for="name" class="form-label">Add mega neved</label>
<input type="text"  name="name"  id="name" class="form-control">
<div>

<div class="col-md-12">
<label for="email" class="form-label">Add mega neved</label>
<input type="email"  name="email"  id="email" class="form-control">
</div>


<div class="col-md-12">
<label for="password" class="form-label">Add mega neved</label>
<input type="password"  name="password"  id="password" class="form-control">
</div>

<div class="col-md-12">
<label for="password_confirm" class="form-label">Add mega neved</label>
<input type="password"  name="password_confirm"  id="password_confirm" class="form-control">
</div>

<div class="col-md-12">
<button class="btn btn-primary mt-3">Regisztráció</button>
</div>

</form>
</div>










<?php include __DIR__."/includes/script.php" ?>
</body>
</html>