<?php defined('ENTRY') || (http_response_code(404) && exit); ?>

<!DOCTYPE html>

<?php

include __DIR__ . "/../includes/head.php" ?>

<body>
    <?php include __DIR__ . "/../includes/menu.php" ?>

    <div class="hp_egeszoldal">


<div class="hp_oldalkiscim">Regisztráció</div>

        <div class="container mx-auto text-center gap-3 mt-2 !important" style="max-width: 900px;">
            <form action="/register" method="post" novalidate>

                <h2  class="hp_nagycim"  >Regiszrációs űrlap</h2>

                <div class="container text-start mt-4" style="max-width: 500px; ">
                    <?php
                    if (isset($_SESSION["flash"]["errors"])) {
                        print "<div class='alert alert-danger'>";
                        print "<ul>";
                        foreach ($_SESSION["flash"]["errors"] as $error) {
                            print "<li> $error </li>";
                        }
                        print "</ul>";
                        print "</div>";
                    } else {
                        if (isset($_SESSION["flash"]["success"])) {
                            print "<div class='alert alert-success text-center'>";
                            print $_SESSION["flash"]["success"];
                            print "</div>";
                        }
                    }

                    ?>
                </div>

                <div class="container mx-auto row col-6 mt-4">
                    <label for="name">Név</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Add meg a neved"
                        value="<?php print $_SESSION["flash"]["inputs"]["name"] ?? "" ?>">
                </div>

                <div class="container mx-auto row col-6  mt-4">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Add meg az email-címed"
                        value="<?php print $_SESSION["flash"]["inputs"]["email"] ?? "" ?>">
                </div>

                <div class="container mx-auto row col-6  mt-4">
                    <label for="password">Jelszó</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Add meg a jelszót">
                </div>

                <div class="container mx-auto row col-6  mt-4 ">
                    <label for="passwordconf"> Jelszó megerősítése</label>
                    <input type="password" name="passwordconf" id="passwordconf" class="form-control" placeholder="Jelszó megadása újra">
                </div>

                <div class="container mx-auto row col-2  mt-4">
                    <button type="submit" class="btn btn-primary  ">Regisztráció</button>
                </div>
            </form>
        </div>
    </div>

    <?php include __DIR__ . "/../includes/scripts.php" ?>
</body>

</html>