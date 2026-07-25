<?php defined('ENTRY') || (http_response_code(404) && exit); ?>

<!DOCTYPE html>
<?php

include __DIR__ . "/../includes/head.php" ?>

<body>


    <?php include __DIR__ . "/../includes/menu.php" ?>

    <div class="container-fluid mx-auto  text-center mt-4 px-5 " style="max-width: 1000px,  ">

    <div class=" container mx-auto" style="max-width: 2000px;">



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








        <form action="/vote" method="post">

            <?php foreach ($data as $sarkozitelepules) {; ?>

                <label for="telepules"> <?php print $sarkozitelepules["sarkozitelepules"]  ?> </label>

                <input type="hidden" name="id" value=" <?php print $sarkozitelepules["id"]?>"> 

                <input type="hidden" name="userid" value="<?php print $_SESSION["user"]["id"]?>">

                <input type="radio" name="szavazas" value="<?php print $sarkozitelepules["id"]   ?>">

            <?php ;
            } ?>
            <button name="szavaz"> Szavazok</button>

        </form>

        <?php  ?>

<br>
<form action="/vote" method="post">



<input type="submit"  name="torles" value="Törlöm a szavazatomat">

</form>






        <table class="table table-bordered mx-auto mt-4 text-center" style="max-width: 600px;">


            <thead>

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
                    Infromáció  a településről
                </th>

            </thead>

            <tbody>


                <tr>

                    <?php
                    foreach ($data as $sarkozitelepules) {
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
                                <?php ;} else{print $sarkozitelepules["szavazas"]; } ?>










                        </td>


                         <td>
                                <a href="<?php print $sarkozitelepules["link"];?>">  Településről</a>
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