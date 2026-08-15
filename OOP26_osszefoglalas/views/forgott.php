<?php defined('ENTRY') || (http_response_code(404) && exit);  ?>

<!DOCTYPE html>

<?php                                                                   // a fentebbi define - arra jó hogyha csakakkro engedi megnnyitni a honlapot ha a kérés az index.php n keresztül érkezik ellenkező esetben (define- includes miatt hiabüzenetet ír)

include __DIR__ . "/../includes/head.php" ?>

<body>
    <?php include __DIR__ . "/../includes/menu.php" ?>

    <div class="hp_egeszoldal">


        <div class="hp_oldalkiscim">Elfelejtett jelszó</div>

        <div class="container mx-auto text-center gap-3 mt-2 !important" style="max-width: 900px;">
            <form action="/forgott" method="post" novalidate>

                <h2 class="hp_nagycim">Elfelejtett jelszó esetén </h2>

                <div class="container text-start mt-4" style="max-width: 500px; ">
                    <?php                                                                                       // alerteket elkészítem
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

               

                <div class="container mx-auto row col-2  mt-4">
                    <button type="submit" class="btn btn-primary  ">Új jelszó igénylése</button>
                </div>
            </form>
        </div>
    </div>

    <?php include __DIR__ . "/../includes/scripts.php" ?>
</body>

</html>