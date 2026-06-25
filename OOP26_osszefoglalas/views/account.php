<?php defined('ENTRY') || (http_response_code(404) && exit); ?>

<!DOCTYPE html>

<?php

include __DIR__ . "/../includes/head.php" ?>

<body>
    <?php include __DIR__ . "/../includes/menu.php" ?>

    <div class="container mx-auto text-center gap-3 mt-2" style="max-width: 900px;">
        <form action="/account" method="post">

            <div>Belépés</div>

            <div class="container mx-auto row col-6  mt-4">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Add meg az email-címed">
            </div>

            <div class="container mx-auto row col-6  mt-4">
                <label for="password">Jelszó</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Add meg a jelszót">
            </div>

        
            <div class="container mx-auto row col-2  mt-4">
                <button type="submit" class="btn btn-primary  ">Regisztráció</button>
            </div>
        </form>
    </div>








    <?php include __DIR__ . "/../includes/scripts.php" ?>
</body>

</html>