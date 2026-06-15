<?php


 session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="Gyak4.php" method="post">

<input type="text"  name="name" placeholder="name">
<input type="text"  name="email" placeholder="email">
<input type="text"  name="password" placeholder="password">
<input type="text"  name="passwordconfirm" placeholder="passwordconfirm">




<button>gomb</button>
</form>

</body>
</html>




<?php




// $_POST["name"]="Robi";
// $_POST["email"]="saddghs.hu";
// $_POST["password"]="12345";
// $_POST["passwordconfirm"]="adbc";

if($_SERVER["REQUEST_METHOD"]=="POST"){
 $_SESSION["flash"]["errors"]=[];

class Validation{

function ValidLength($key, $min, $max, $message){
if(strlen($_POST[$key]) <$min || strlen($_POST[$key]) >$max  ) { $_SESSION["flash"]["errors"][]=  sprintf( $message, $min, $max) ;}}

function ValidEmail($key, $message){
    if(!filter_var($_POST[$key],FILTER_VALIDATE_EMAIL)){$_SESSION["flash"]["errors"][]=$message;}}

function Validcomaper($key1, $key2, $message){
    if($_POST[$key1]!= $_POST[$key2]){$_SESSION["flash"]["errors"][]=$message;}
}

}

$validation =new Validation;

$validation->ValidLength("name", "10", "20" , "A névnek %d és %d karakter között kell lennie");

$validation->ValidEmail("email", "Invalid e-mail cím");

$validation->Validcomaper("password","passwordconfirm", "A jelszavak  nem egyeznek");


header("location:Gyak4.php");exit;}

if(!empty($_SESSION["flash"]["errors"])){foreach($_SESSION["flash"]["errors"] as $error){print $error ;}} unset ($_SESSION["flash"]);

  
?>



