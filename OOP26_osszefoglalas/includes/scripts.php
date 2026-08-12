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
        var ertekek = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, "c", "*", "/", "+", "-", "="];

        var buttonsholder = document.getElementsByClassName("buttonsholder")[0]
        var kijelzo = document.getElementsByClassName("kijelzo")[0]


        ertekek.forEach(function(ertek) {
            buttonsholder.innerHTML += "<button>" + ertek + "</button>"
        });

        var gombok = document.querySelectorAll(".buttonsholder button")

        gombok.forEach(function(egygomb) {
            egygomb.onclick = function() {



                if (egygomb.innerHTML == "c") {
                    //kijelzo.value = ""
                    // törlés()

                    hozzaad("", false)
                } else if (egygomb.innerHTML == "=") {
                    calculate()

                    // try {
                    //     eredmeny = eval(kijelzo.value), kijelzo.value = eredmeny
                    // } catch {
                    //     alert("Hibás adatokat írt be \n" + kijelzo.value + "Kérem próbálja meg ismét"), kijelzo.value = ""
                    // }
                } else {


                    //kijelzo.value += egygomb.innerHTML
                    hozzaad(egygomb.innerHTML)

                }

            }
        })

        //function törlés()
        //{ kijelzo.value =""}

        function hozzaad(value, feluliras = true) {
            if (feluliras) {
                kijelzo.value += value
            } else {
                kijelzo.value = value
            }
        }


        function calculate(){

   try {
                        eredmeny = eval(kijelzo.value), hozzaad(eredmeny, false)
                    } catch {
                        alert("Hibás adatokat írt be \n" + kijelzo.value + "Kérem próbálja meg ismét");  hozzaad(" ", false)
                    }

        }
    </script>