<?php defined('ENTRY') || (http_response_code(404) && exit); 

?>

<!DOCTYPE html>
<?php

include __DIR__ . "/../includes/head.php" ?>

<body>


    <?php include __DIR__ . "/../includes/menu.php" ?>

<div class="hp_egeszoldal">
        <div class="hp_oldalkiscim">Kezdőoldal</div>

        <h2 class="hp_nagycim">Mottónk</h2>

        <div class="hp_szoveg">
        Ezt a weboldalt azzal a céllal hoztuk létre, hogy egy olyan közösségi, interaktív tudásbázist építsünk fel,
        amely a Kalocsai Sárköz és környékének településeit mutatja be.<p>A honlap egyfajta helyi enciklopédiaként
        működik, ahol a regisztrált tagok aktív részeseivé válhatnak az értékőrzésnek.A projekt elsődleges célja,
        hogy lehetőséget biztosítson a regisztrált felhasználók számára, hogy saját ismereteiket, történeteiket,
        helyi érdekességeiket vagy kutatásaikat írhassák le az egyes településekről. Legyen szó egy eldugott
        kalocsai látnivalóról, a dusnoki Vajas-part titkairól vagy egy régi hajósi családi présház történetéről –
        a bejelentkezett tagok szabadon bővíthetik az adatlapokat. A honlap így nem csupán egy száraz statisztikai
        mutatókat tartalmazó oldal, hanem egy folyamatosan fejlődő, élő, közösség által írt digitális krónika. </p>
        </div>
        <br>

        <img  class="hp_img" style="max-width: 400px;" src="https://upload.wikimedia.org/wikipedia/commons/b/b8/HU_microregion_1.1.23._Kalocsai-S%C3%A1rk%C3%B6z.png" alt="">

        <div>

            <?php include __DIR__ . "/../includes/scripts.php" ?>
</body>

</html>