<?php defined('ENTRY') || (http_response_code(404) && exit); ?>

<!DOCTYPE html>
<?php

include __DIR__ . "/../includes/head.php" ?>

<body>


    <?php include __DIR__ . "/../includes/menu.php" ?>



    <form action="">

        <label for="Kalocsa"> Kalocsa</label>
        <input type="checkbox" name="városok" id="Kalocsa" value="">


        <label for="Foktő"> Foktő</label>
        <input type="checkbox" name="városok" id="Foktő" value="">



        <button> Szavazok</button>
    </form>












    <?php include __DIR__ . "/../includes/scripts.php" ?>
</body>

</html>