<?php defined('ENTRY') || (http_response_code(404) && exit);

?>

<!DOCTYPE html>
<?php

include __DIR__ . "/../includes/head.php" ?>

<body>


    <?php include __DIR__ . "/../includes/menu.php" ?>

    <div class="hp_egeszoldal">
        <div class="hp_oldalkiscim">Számológép</div>

        <h2 class="hp_nagycim">Online számológép</h2>

        <div class="szgkeret">

            <input type="text"  class="kijelzo">

            <div class=" gombtarto"></div>

        </div>



    </div>

    <?php include __DIR__ . "/../includes/scripts.php" ?>


</body>

</html>