<?php defined('ENTRY') || (http_response_code(404) && exit); ?>

<!DOCTYPE html>
<?php

include __DIR__ . "/../includes/head.php" ?>

<body>


    <?php include __DIR__ . "/../includes/menu.php"; ?>

    <div class=" container mx-auto text-center ">Regiszrációs űrlap

        <form action="/table" method="POST" class="mt-4">
            <label for="keres">Névre keresés:</label>
            <input type="text" name="keres" id="keres">
            <button type="submit">Keres/keresés törlése</button>
        </form>

        <form action="/table" method="POST" class="mt-4">
            <label for="torles">Felhasználó adatainak törlése</label>
            <input type="text" name="torles" id="torles">
            <button type="submit">Felhasználó  adatainak törlése</button>
        </form>



         <form action="/table" method="POST" class="mt-4">
            <label for="csere">Felhasználó nevének cseréleés</label>
            <input type="text" name="uj" id="csere">
            <input type="text" name="regi" id="csere">
            <button type="submit">Felhasználó adatainak módosítása</button>
        </form>

    </div>
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









    <?php include __DIR__ . "/../includes/scripts.php" ?>
</body>

</html>