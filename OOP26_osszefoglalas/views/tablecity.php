<?php defined('ENTRY') || (http_response_code(404) && exit); ?>

<!DOCTYPE html>
<?php

include __DIR__ . "/../includes/head.php" ?>

<body>


    <?php include __DIR__ . "/../includes/menu.php" ?>




<div class="container mx-auto  text-center mt-4 " style="max-width: 500px,  "  >
    <form action="/tablecity"    method="post"  >
<div style="display: flex ; justify-content:center" >
<div class=" col-auto">
<label class="form-label" for="tid">Azonosító</label>
<input class="form-control" type="text" name="tid" id="tid" value="<?php  ?>"   ><br>
</div>

<div class=" col-auto">
<label class="form-label" for="telepules">Településnév</label>
<input class="form-control" type="text" name="telepules" id="telepules" value="<?php  ?>"   ><br>
</div>

<div class=" col-auto">
<label class="form-label" for="telepulesresz">Településrész</label>
<input  class="form-control" type="text" name="telepulesresz" id="telepulesresz" value="<?php  ?>"   ><br>
</div>

<div class=" col-auto">
<label class="form-label" for="tkod">Településkód</label>
<input  class="form-control" type="text" name="tkod" id="tkod" value="<?php  ?>"   ><br>
</div>

<div class=" col-auto">
<label class="form-label" for="mkod">Megyekód</label>
<input  class="form-control" type="text" name="mkod" id="mkod" value="<?php  ?>"   ><br>
</div>

<div class=" col-auto">
<label class="form-label" for="irszam">Irányítószám</label>
<input  class="form-control" type="text" name="irszam" id="irszam" value="<?php  ?>"   ><br>
</div>

<div class=" col-auto">
<label class="form-label" for="nepesseg">Népesség tól</label>
<input placeholder="tól" class="form-control" type="number" min="0" max="300000" step="50"   name="nepessegtol" id="nepesseg" value="<?php  ?>"   ><br>

</div>

<div class=" col-auto">

<label class="form-label" for="nepesseg">-ig</label>

<input placeholder="ig" class="form-control" type="number" min="0" max="300000" step="50"   name="nepessegig" id="nepesseg" value="<?php  ?>"   ><br>

</div>



</div>

<div>
<button class="btn btn-primary w-auto">Keresés/keresés törlése</button>
</div>
</form>

    <div class="citytable mx-auto" style="max-width: 900px;">



        <table class=" table table-bordered mx-auto mt-4 text-center" , style="max-width: 500px">
            <thead>


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

            </thead>
            <tbody>
                <?php foreach ($data as $települes) {  ?>
                    <tr>

                        <td>
                            <?php print $települes["tid"] ?>
                        </td>

                         <td>
                            <?php print $települes["telepules"] ?>
                        </td>
                         <td>
                            <?php print $települes["telepulesresz"] ?>
                        </td>
                         <td>
                            <?php print $települes["tkod"] ?>
                        </td>
                         <td>
                            <?php print $települes["mkod"] ?>
                        </td>
                         <td>
                            <?php print $települes["irszam"] ?>
                        </td>

                         <td>
                            <?php print $települes["nepesseg"] ?>
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