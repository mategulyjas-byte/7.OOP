<?php defined('ENTRY') || (http_response_code(404) && exit); ?>

<!DOCTYPE html>
<?php

include __DIR__ . "/../includes/head.php" ?>

<body>


    <?php include __DIR__ . "/../includes/menu.php" ?>


    <div class="hp_egeszoldal ">


        <div class="hp_oldalkiscim">Szavazás</div>

        <h2 class="hp_nagycim">Szavazatok leadása az alábiak közül egy tetszőlegesen választott településre</h2>

        <div class="vote_kereso">


            <div class="container mx-auto   text-center mt-1 px-1 " style="max-width: 1000px,  ">


                <div class="container text-start mt-4 " style="max-width: 500px; ">
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



                <form action="/vote" method="post">

                    <?php foreach ($data["data"] as $sarkozitelepules) {; ?>

                        <label for="telepules"> <?php print $sarkozitelepules["sarkozitelepules"]  ?> </label>

                        <input type="hidden" name="id" value=" <?php print $sarkozitelepules["id"] ?>">

                        <input type="hidden" name="userid" value="<?php print $_SESSION["user"]["id"] ?>">

                        <input type="radio" name="szavazas" value="<?php print $sarkozitelepules["id"]   ?>">


                    <?php ;
                    } ?>
                    <br>
                    <button class="btn btn-primary" name="szavaz"> Szavazok</button>

                </form>




                <?php  ?>

                <br>
                <form action="/vote" method="post">

                    <input type="hidden" name="torlendoid" value=" <?php print $sarkozitelepules["id"] ?>">




                    <input class="btn btn-primary mb-2"  type="submit" name="torles" value="Törlöm a szavazatomat">

                </form>

            </div>
        </div>

        <div class="vote w-100">

            <table class="table table-bordered mx-auto mt-4 text-center " style="max-width: 1000px;">


                <thead>
                    <tr>
                    <th>
                        id
                    </th>
                    <th>
                        Név
                    </th>
                    <th>
                        Szavazatok száma
                    </th>

                    <th>
                        Infromáció a településről
                    </th>
                    </tr>
                </thead>

                <tbody>


                    <tr>

                        <?php
                        foreach ($data["data"] as $sarkozitelepules) {
                        ?>
                        
                            <td>
                                <?php print $sarkozitelepules["id"] ?>
                            </td>

                            <td>
                                <?php print $sarkozitelepules["sarkozitelepules"] ?>

                            </td>

                            <td>





                                <?php if (($_SESSION["user"]["email"] === "admin@admin.hu")) {


                                    print $sarkozitelepules["szavazas"] ?>

                                    <form action="/vote" method="post">
                                        <input type="hidden" name="id" value="<?php print $sarkozitelepules["id"] ?>">
                                        <input type="text" name="szavazas">
                                        <button name="szavazatmod">Módosítás</button>
                                    </form>
                                <?php ;
                                } else {
                                    print $sarkozitelepules["szavazas"];
                                } ?>










                            </td>


                            <td>
                                <a href="<?php print $sarkozitelepules["link"]; ?>" target="_blank"> Településről</a>
                            </td>



                    </tr>
                <?php ;
                        } ?>

                </tbody>



            </table>



        </div>





    </div>

    <?php include __DIR__ . "/../includes/scripts.php" ?>
</body>

</html>