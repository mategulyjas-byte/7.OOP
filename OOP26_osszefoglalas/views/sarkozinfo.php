<?php defined('ENTRY') || (http_response_code(404) && exit); ?>

<!DOCTYPE html>
<?php

include __DIR__ . "/../includes/head.php" ?>

<body>


    <?php include __DIR__ . "/../includes/menu.php" ?>


    <div class="hp_egeszoldal">


        <div class="hp_oldalkiscim">Ti írtátok</div>

        <h2 class="hp_nagycim">Az alábbi véleményeket, élménybeszálókat írtátok a településekkel kapcsolatban</h2>



    <div class="container-fluid mx-auto  text-center mt-4 px-5 " style="max-width: 1000px,  ">


    <div class="tablecity_kereso">

        <form action="/sarkozinfo" method="post">
            <div style="display: flex ; justify-content:center">
                <div class=" col-auto">
                    <label class="form-label" for="id">Azonosító</label>
                    <input class="form-control" type="text" name="id" id="id" value="<?php  ?>"><br>
                </div>

                <div class=" col-auto">
                    <label class="form-label" for="sarkozitelepules">Településnév</label>
                    <input class="form-control" type="text" name="sarkozitelepules" id="sarkozitelepules" value="<?php  ?>"><br>
                </div>

                <div class=" col-auto">
                    <label class="form-label" for="info">Információ</label>
                    <input class="form-control" type="text" name="info" id="info" value="<?php  ?>"><br>
                </div>

                <div class=" col-auto">
                    <label class="form-label" for="name">Szerző</label>
                    <input class="form-control" type="text" name="name" id="name" value="<?php  ?>"><br>
                </div>


            </div>

            <div>
                <button class="btn btn-primary w-auto">Keresés/keresés törlése</button>
            </div>
        </form>

</div>

        <div class="citytable mx-auto" style="max-width: 2000px;">



            <table class=" table table-bordered mx-auto mt-4 text-center" , style="max-width: 2000px">
                <thead>


                    <th>
                        id
                    </th>
                    <th>
                        Település
                    </th>
                    <th>
                        Információ
                    </th>
                    <th>
                        Szerző
                    </th>


                </thead>
                <tbody>
                    <?php foreach ($data as $sarkozitelepules) {  ?>
                        <tr>

                            <td>
                                <?php print $sarkozitelepules["id"] ?>

                            </td>

                            <td>
                                <?php {
                                    print $sarkozitelepules["sarkozitelepules"];
                                } ?>


                            </td>

                            <td>
                            <?php


                           print $sarkozitelepules["info"];


                           
                         ?>
                        <?php if($_SESSION["user"]["name"] === $sarkozitelepules["name"]){
                        
                        
                        ?>
                         <form action="/sarkozinfo" method="post">
                                    <input type="hidden" name="tid" value="<?php print $sarkozitelepules["id"] ?>">
                                    <input type="text" name="ujinfo" value ="<?php print $sarkozitelepules["info"] ?? "" ?>">
                                    <button name="infomod">Módosítás</button>
                                </form>
 

                            
<?php ;} ?>






                            </td>
                            <td>
                                <?php

                                print $sarkozitelepules["name"];
                                ?>

                            </td>
 </td>

                            <?php 
                            if (($_SESSION["user"]["email"] === "admin@admin.hu") || $_SESSION["user"]["name"]=== $sarkozitelepules["name"]) { ?>
                                <td>
                                    <form action="/sarkozinfo" method="post">
                                        <input type="hidden" name="idkeres" value="<?php print $sarkozitelepules["id"] ?>">
                                        <button name=torles> Törlés</button>
                                    </form>
                                </td>
                            <?php ;} ?>

                        </tr>
                        <?php ;} ?>
                </tbody>





            </table>



        </div>


    </div>



    </div>

    <?php include __DIR__ . "/../includes/scripts.php" ?>
</body>

</html>