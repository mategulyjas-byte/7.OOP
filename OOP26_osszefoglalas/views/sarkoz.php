<?php defined('ENTRY') || (http_response_code(404) && exit); ?>

<!DOCTYPE html>
<?php

include __DIR__ . "/../includes/head.php" ?>

<body>


    <?php include __DIR__ . "/../includes/menu.php" ?>


    <div class="hp_egeszoldal">

        <div class="hp_oldalkiscim">Élmények megosztása</div>



        <h2 class="hp_nagycim">Élmények megosztása egy kiválasztott településsel kapcsolatban</h2>


        <div class="mx-auto  text-center mt-4 px-5 d-flex flex-column alig-item-center w-100" style="max-width: 1000px;  ">

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

            <div class="citytable mx-auto" style="max-width: 500px;">

<div class="sarkoz_table">
                <?php if ($_SERVER["REQUEST_METHOD"] == "GET") { ?>

                    <table >
                        <thead>
                            <th>
                                Az alábbi településekről írhat véleményt:
                            </th>
                        </thead>

                        <tbody>
                            <?php foreach ($data["data"] as $sarkozitelepules2) {  ?>
                                <tr>
                                    <td>
                                        <?php print $sarkozitelepules2["sarkozitelepules"] ?>

                                    </td>
                                </tr>
                            <?php ;
                            } ?>
                        </tbody>
                    </table>
                <?php ;
                } ?>
</div>
            </div>

            <form action="/sarkoz" method="post">
                <div style="display: flex ; justify-content:center">

                    <?php if (!isset($_POST["telepulesvalaszt"])) {  ?>
                        <div>

                            <label class="form-label mt-4" for="sarkozitelepules">Írja ide, mely településről írna véleményt:</label>
                            <input class="form-control" type="search" name="sarkozitelepules" id="sarkozitelepules" placeholder=" pl.: Kalocsa"  value="<?php print $_POST["sarkozitelepules"] ?? "" ?>">
                            <button name="telepulesvalaszt" class="btn btn-primary mt-4">Település kereséses</button>
                        </div>
            </form>
        <?php ;
                    } 
                    
                    else { ?>

            <?php if (!empty($_SESSION["sarkozitelepules"])) { ?>


                <form action="/sarkoz" method="post"  >

            <div class="sarkoz_velemenybevitel mb-5">

                        <label class="form-label" for="info">Irja ide véleményét a településről: </label>
                        <input type="hidden" name="sarkozitelepules" id="" value="<?php print $_SESSION["sarkozitelepules"] ?? "" ?>">
                        <input type="hidden" name=name value="<?php print $_SESSION["user"]["name"] ?? "" ?>">
                        <textarea class="form-control w-100 "rows="6" name="info" id="info"> </textarea>
                        <input type="hidden" name=nameid value="<?php print $_SESSION["user"]["id"] ?>">
                        <button name="infoad" class="btn btn-primary mt-4">Információ hozáadása</button>

                    </div>

                </form>
        <?php ;
                        }
                    } ?>

        </div>

    </div>

    <?php include __DIR__ . "/../includes/scripts.php" ?>
</body>

</html>