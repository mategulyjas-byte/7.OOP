<?php defined('ENTRY') || (http_response_code(404) && exit); ?>

<!DOCTYPE html>
<?php

include __DIR__ . "/../includes/head.php" ?>

<body>


    <?php include __DIR__ . "/../includes/menu.php"; ?>

    <div class="hp_egeszoldal">

        <div class="hp_oldalkiscim">Táblázat</div>

        <h2 class="hp_nagycim">Felhasználók adatai</h2>



        <div class="table_kereso">

            <div class="container mx-auto   text-center mt-1 px-1 " style="max-width: 10000px,  ">




                <form action="/table"  method="POST" class="mt-4">
                    <label class="form-label" for="keres">Névre keresés:</label>
                    <input class="form-control" type="text" name="keres" id="keres">
                    <button class="btn btn-primary w-auto" s type="submit">Keres/keresés törlése</button>
                </form>

                <form action="/table" method="POST" class="mt-4">
                    <label class="form-label" for="torles">Felhasználó adatainak törlése</label>
                    <input class="form-control" type="text" name="torles" id="torles">
                    <button class="btn btn-primary w-auto" type="submit">Felhasználó adatainak törlése</button>
                </form>



                <form action="/table" method="POST" class="mt-4">
                    <label class="form-label" for="új">Új felhasználó név:</label>
                    <input class="form-control" type="text" name="uj" id="új">

                    <label class="form-label" for="új">Régi felhasználó név:</label>
                    <input class="form-control" type="text" name="regi" id="csere">
                    <button class="btn btn-primary w-auto" type="submit">Felhasználó nevének módosítása módosítása</button>
                </form>
            </div>
        </div>


        <div class="table">





            <table class="table table-bordered mx-auto mt-4 text-center" style="max-width: 600px;">


                <thead>

                    <th>
                        id
                    </th>
                    <th>
                        Név
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Jelszó
                    </th>
                </thead>


                <tbody>


                    <tr>

                        <?php
                        foreach ($data as $user) {
                        ?>
                            <td>
                                <?php print $user["id"] ?>
                            </td>

                            <td>
                                <?php print $user["name"] ?>

                            </td>

                            <td>
                                <?php print $user["email"] ?>

                            </td>

                            <td>
                                <?php print $user["password"] ?>

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