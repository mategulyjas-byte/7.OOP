<?php defined('ENTRY') || (http_response_code(404) && exit); ?>

<!DOCTYPE html>
<?php

include __DIR__ . "/../includes/head.php" ?>

<body>


    <?php include __DIR__ . "/../includes/menu.php" ?>


    <div class="container-fluid mx-auto  text-center mt-4 px-5 " style="max-width: 1000px,  ">
        <form action="/sarkoz" method="post">
            <div style="display: flex ; justify-content:center">


                <div class=" col-auto">

                    <label class="form-label" for="sarkozitelepules">Település keresése</label>
                    <input class="form-control" type="search" name="sarkozitelepules" id="sarkozitelepules" value="<?php print $_POST["sarkozitelepules"] ?? "" ?>">
                     <button name="telepulesvalaszt" class="btn btn-primary w-auto">Település kereséses</button>
                </div>
            </form>
                    <form action="/sarkoz" method="post">

            <div>
             
                <label class="form-label" for="info">Infomeáció hozzáadása </label>
                <input type="hidden" name="sarkozitelepules" id="" value="<?php print $_SESSION["sarkozitelepules"] ?? "" ?>">
                <input class="form-control" type="text" name="info" id="info">
                <button name="infoad" class="btn btn-primary w-auto">Infromáció hozáadása</button>

            </div>

    </form>


    </div>






    <?php include __DIR__ . "/../includes/scripts.php" ?>
</body>

</html>