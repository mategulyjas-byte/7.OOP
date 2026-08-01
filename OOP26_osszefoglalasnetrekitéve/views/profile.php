<?php defined('ENTRY') || (http_response_code(404) && exit); ?>

<!DOCTYPE html>
<?php 

include __DIR__."/../includes/head.php"?>

<body>


<?php include __DIR__."/../includes/menu.php" ?> 


<div class="hp_egeszoldal">

        <div class="hp_oldalkiscim">Profilom</div>

                <h2 class="hp_nagycim">Adataim</h2>


<div class="hp_szoveg">
<?php print  "Nevem: ". $_SESSION["user"]["name"] ?>
</div>

<div class="hp_szoveg">
<?php print "E-mail címem: ". $_SESSION["user"]["email"]  ?>

</div>


  <div class="container text-start mt-4" style="max-width: 500px; ">
                <?php
             
                    if (isset($_SESSION["flash"]["success"])) {
                        print "<div class='alert alert-success text-center'>";
                        print $_SESSION["flash"]["success"];
                        print "</div>";
                    }
                ?>



</div>


<?php include __DIR__."/../includes/scripts.php" ?>
</body>
</html>