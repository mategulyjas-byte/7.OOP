<?php defined('ENTRY') || (http_response_code(404) && exit); ?>

<!DOCTYPE html>
<?php

include __DIR__ . "/../includes/head.php" ?>

<body>


    <?php include __DIR__ . "/../includes/menu.php" ?>


    <div class="container-fluid mx-auto  text-center mt-4 px-5 " style="max-width: 1000px,  ">

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
                } 

                else{if(isset($_SESSION["flash"]["success"])){ print "<div class='alert alert-success text-center'>";
                print $_SESSION["flash"]["success"];
                print "</div>";
                }}

                ?>


            </div>





<div class="citytable mx-auto" style="max-width: 120px;">


            <?php if ($_SERVER["REQUEST_METHOD"]== "GET"){ ?>

            <table class=" table table-bordered mx-auto mt-4 text-center" , style="max-width: 2000px">
               
            
            <thead>


                    <th>
                        Válaszson az alábbi települések közül
                    </th>
               
                </thead>
                <tbody>
                    <?php foreach ($data as $sarkozitelepules2) {  ?>
                        <tr>

                            <td>
                                <?php print $sarkozitelepules2["sarkozitelepules"] ?>

                            </td>

                        </tr>
                    <?php ;
                    } ?>
                </tbody>





            </table>

            <?php ;} ?>

        </div>


























        <form action="/sarkoz" method="post">
            <div style="display: flex ; justify-content:center">

<?php if(!isset($_POST["telepulesvalaszt"]) )  {  ?>
                <div class=" col-auto">

                    <label class="form-label" for="sarkozitelepules">Írja ide, mely településről írna véleményt</label>
                    <input class="form-control" type="search" name="sarkozitelepules" id="sarkozitelepules" value="<?php print $_POST["sarkozitelepules"] ?? "" ?>">
                    








                   



                    
                    <button name="telepulesvalaszt" class="btn btn-primary w-auto">Település kereséses</button>
                </div>
            </form>
<?php ;} else{?>

         <?php  if( !empty($_SESSION["sarkozitelepules"]) ) { ?> 

         
                    <form action="/sarkoz" method="post">

            <div>
             
                <label class="form-label" for="info">Irja ide véleményét a településről </label>
                <input type="hidden" name="sarkozitelepules" id="" value="<?php print $_SESSION["sarkozitelepules"] ?? "" ?>">
                <input type="hidden" name=name  value="<?php print $_SESSION["user"]["name"] ?? "" ?>">
                <input class="form-control" type="text" name="info" id="info">


 <!-- FIGYELEM ezt tettem bel új sorként -->
                    <input type="hidden" name=nameid value="<?php print $_SESSION["user"]["id"] ?>">
                 
                    <!-- ezt tettem gele új sorként -->




                <button name="infoad" class="btn btn-primary w-auto">Infromáció hozáadása</button>

            </div>

    </form>
 <?php ;}} ?>

    </div>






    <?php include __DIR__ . "/../includes/scripts.php" ?>
</body>

</html>