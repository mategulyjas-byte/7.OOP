<?php defined('ENTRY') || (http_response_code(404) && exit); ?>

<!DOCTYPE html>
<?php 

include __DIR__."/../includes/head.php"?>

<body>


<?php include __DIR__."/../includes/menu.php" ?> 

<?php print $_SESSION["user"]["name"] ."<br>". $_SESSION["user"]["email"]  ?>



  <div class="container text-start mt-4" style="max-width: 500px; ">
                <?php
             
                    if (isset($_SESSION["flash"]["success"])) {
                        print "<div class='alert alert-success text-center'>";
                        print $_SESSION["flash"]["success"];
                        print "</div>";
                    }
                ?>






<?php include __DIR__."/../includes/scripts.php" ?>
</body>
</html>