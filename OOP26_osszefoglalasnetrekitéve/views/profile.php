<?php defined('ENTRY') || (http_response_code(404) && exit); ?>

<!DOCTYPE html>
<?php 

include __DIR__."/../includes/head.php"?>

<body>


<?php include __DIR__."/../includes/menu.php" ?> 

<?php print $_SESSION["user"]["name"] ."<br>". $_SESSION["user"]["email"]  ?>







<?php include __DIR__."/../includes/scripts.php" ?>
</body>
</html>