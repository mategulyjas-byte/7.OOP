<?php defined('ENTRY') || (http_response_code(404) && exit); ?>

<!DOCTYPE html>
<?php

include __DIR__ . "/../includes/head.php" ?>

<body>


    <?php include __DIR__ . "/../includes/menu.php" ?>


    <div class="hp_egeszoldal">

        <div class="hp_oldalkiscim">Települések</div>

        <h2 class="hp_nagycim">Települések adatai</h2>

        <div    class="container mx-auto  text-center mt-4 px-1"> 


            <div class="tablecity_kereso">

                <form action="/tablecity" method="post">
                    
                    <div style="display:flex ; justify-content:center; ">

                        <div class="col-auto">
                            <label class="form-label" for="tid">Azonosító</label>
                            <input class="form-control" type="text" name="tid" id="tid" value="<?php  ?>"><br>
                        </div>

                        <div class="col-auto ">
                            <label class="form-label" for="telepules">Településnév</label>
                            <input class="form-control" type="text" name="telepules" id="telepules" value="<?php  ?>"><br>
                        </div>

                        <div class="col-auto">
                            <label class="form-label" for="telepulesresz">Településrész</label>
                            <input class="form-control" type="text" name="telepulesresz" id="telepulesresz" value="<?php  ?>"><br>
                        </div>

                        <div class="col-auto">
                            <label class="form-label" for="tkod">Településkód</label>
                            <input class="form-control" type="text" name="tkod" id="tkod" value="<?php  ?>"><br>
                        </div>

                        <div class="col-auto">
                            <label class="form-label" for="mkod">Megyekód</label>
                            <input class="form-control" type="text" name="mkod" id="mkod" value="<?php  ?>"><br>
                        </div>

                        <div class="col-auto">
                            <label class="form-label" for="irszam">Irányítószám</label>
                            <input class="form-control" type="text" name="irszam" id="irszam" value="<?php  ?>"><br>
                        </div>

                        <div class="col-auto">
                            <label class="form-label" for="nepesseg">Népesség tól</label>
                            <input placeholder="tól" class="form-control" type="number" min="0" max="300000" step="50" name="nepessegtol" id="nepesseg" value="<?php  ?>"><br>

                        </div>

                        <div class="col-auto">

                            <label class="form-label" for="nepesseg">-ig</label>

                            <input placeholder="ig" class="form-control" type="number" min="0" max="300000" step="50" name="nepessegig" id="nepesseg" value="<?php  ?>"><br>

                        </div>



                    </div>

                    <div>
                        <button class="btn btn-primary w-auto ">Keresés/keresés törlése</button>
                    </div>
                </form>

            </div>

            <div class="tablecity_table">
                <div class="citytable mx-auto" style="max-width: 2000px;">

                    <table class=" table table-bordered mx-auto mt-4 text-center" , style="max-width: 2000px">

                            <thead>
                                <tr>
                                    <th>
                                        id
                                    </th>
                                    <th>
                                        település
                                    </th>
                                    <th>
                                        településrész
                                    </th>
                                    <th>
                                        településkód
                                    </th>
                                    <th>
                                        megyekód
                                    </th>
                                    <th>
                                        irányítószám
                                    </th>
                                    <th>
                                        népesség
                                    </th>
                                </tr>

                            </thead>
                </div>
                <tbody>
                    <?php foreach ($data["data"] as $települes) {  ?>
                        <tr>

                            <td>
                                <?php print $települes["tid"] ?>

                            </td>

                            <td>
                                <?php
                                if (($_SESSION["user"]["email"] === "admin@admin.hu")) {

                                    print $települes["telepules"] ?>

                                    <form action="/tablecity" method="post">
                                        <input type="hidden" name="id" value="<?php print $települes["tid"] ?>">
                                        <input type="text" name="ujtelepules">
                                        <button name="telepulesmod">Módosítás</button>
                                    </form>
                                <?php ;
                                } else {
                                    print $települes["telepules"];
                                } ?>

                            </td>

                            <td>
                                <?php
                                if (($_SESSION["user"]["email"] === "admin@admin.hu")) {

                                    $takarítotttelepulesresz = trim($települes["telepulesresz"]);

                                    if (empty($takarítotttelepulesresz)) {
                                        print "Nincs megadva";
                                    } else {
                                        print $települes["telepulesresz"];
                                    } ?>

                                    <form action="/tablecity" method="post">
                                        <input type="hidden" name="id" value="<?php print $települes["tid"] ?>">
                                        <input type="text" name="ujtelepulesresz">
                                        <button name="telepulesreszmod">Módosítás</button>
                                    </form>

                                <?php ;
                                } else {
                                    print $települes["telepulesresz"];
                                } ?>


                            </td>
                            <td>
                                <?php
                                if (($_SESSION["user"]["email"] === "admin@admin.hu")) {

                                    $takaritotttkod = trim($települes["tkod"]);

                                    if (empty($takaritotttkod)) {
                                        print "Nincs megadva";
                                    } else {
                                        print $települes["tkod"];
                                    } ?>

                                    <form action="/tablecity" method="post">
                                        <input type="hidden" name="id" value="<?php print $települes["tid"] ?>">
                                        <input type="text" name="ujtekod">
                                        <button name="tkodmod">Módosítás</button>
                                    </form>


                                <?php ;
                                } else {
                                    print $települes["tkod"];
                                } ?>


                            </td>

                            <td>
                                <?php if (($_SESSION["user"]["email"] === "admin@admin.hu")) {


                                    $takaritottmkod = trim($települes["mkod"]);

                                    if (empty($takaritottmkod)) {
                                        print "Nincs megadva";
                                    } else {
                                        print $települes["mkod"];
                                    } ?>

                                    <form action="/tablecity" method="post">
                                        <input type="hidden" name="id" value="<?php print $települes["tid"] ?>">
                                        <input type="text" name="ujmkod">
                                        <button name="mkodmod">Módosítás</button>
                                    </form>
                                <?php ;
                                } else {
                                    print $települes["mkod"];
                                } ?>
                            </td>
                            <td>


                                <?php if (($_SESSION["user"]["email"] === "admin@admin.hu")) {



                                    $takaritottirszam = trim($települes["irszam"]);

                                    if (empty($takaritottirszam)) {
                                        print "Nincs megadva";
                                    } else {
                                        print $települes["irszam"];
                                    } ?>

                                    <form action="/tablecity" method="post">
                                        <input type="hidden" name="id" value="<?php print $települes["tid"] ?>">
                                        <input type="text" name="ujirszam">
                                        <button name="irszammod">Módosítás</button>
                                    </form>

                                <?php ;
                                } else {
                                    print $települes["irszam"];
                                } ?>

                            </td>


                            <td>

                                <?php

                                if (($_SESSION["user"]["email"] === "admin@admin.hu")) {

                                    $takaritottnepesseg = trim($települes["nepesseg"]);

                                    if (empty($takaritottnepesseg)) {

                                        print "Nincs megadva";
                                    } else {
                                        print $települes["nepesseg"];
                                    } ?>

                                    <form action="/tablecity" method="post">
                                        <input type="hidden" name="id" value="<?php print $települes["tid"] ?>">
                                        <input type="text" name="ujnepesseg">
                                        <button name="nepessegmod">Módosítás</button>
                                    </form>

                                <?php ;
                                } else  print $települes["nepesseg"]; ?>

                            </td>

                            <?php if (($_SESSION["user"]["email"] === "admin@admin.hu")) { ?>
                                <td>
                                    <form action="/tablecity" method="post">
                                        <input type="hidden" name="id" value="<?php print $települes["tid"] ?>">
                                        <button name=torles> Törlés</button>
                                    </form>
                                </td>
                            <?php ;
                            } ?>

                        </tr>
                    <?php ;
                    } ?>
                </tbody>

                </table>

            </div>

        </div>

    </div>

    </div>

    <?php include __DIR__ . "/../includes/scripts.php" ?>
</body>

</html>