    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>


    <script>
        <?php if (isset($_SESSION["user"]["id"])) { ?>

            var idozito;



            function inditas() {

                clearInterval(idozito);
                hatralevoido = 200;
                document.getElementById("szamlalo").innerText = "Kilépés " + hatralevoido + " másodperc múlva";

                idozito = setInterval(function() {
                    hatralevoido = hatralevoido - 1;
                    document.getElementById("szamlalo").innerText = "Kilépés " + hatralevoido + " másodperc múlva";

                    if (hatralevoido <= 0) {
                        clearInterval(idozito);
                        location.href = "/";
                    }

                }, 1000);
            }

            onclick = inditas;
            onload = inditas;
            onmousemove = inditas;
            onkeydown = inditas;

        <?php ;
        } ?>
    </script>

    <script>
        setInterval(function() {
            fetch('/includes/time.php')
                .then(function(idő) {
                    return idő.text();
                })
                .then(function(jelenít) {
                    document.getElementById("ora").innerHTML = "Dátum és idö " + jelenít
                });
        }, 1000);
    </script>




    <script>
        var gombokertekek = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, "c", "*", "/", "+", "-", "="];

        var gombtarto = document.getElementsByClassName("gombtarto")[0]

        gombokertekek.forEach(function(egygomb) {
            gombtarto.innerHTML += "<button>" + egygomb + "</button>"
        });



        var gombok = document.querySelectorAll(".gombtarto button")

        var kijelzo = document.querySelector(".kijelzo")


        gombok.forEach(function(egygomb) {
            egygomb.onmousedown = function() {
                egygomb.style.color = "black"
            };
            egygomb.onmouseup = function() {
                egygomb.style.color = "white"
            };

         egygomb.onclick=function(){kijelzo.value += egygomb.innerHTML}
        })


    
    </script>