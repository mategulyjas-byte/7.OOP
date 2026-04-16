<?php

// class Elolenyek
// {
//     var $reprodukció = true, $legzes = true, $anyagcsere = true;
// }


// class Allatok
// {
//     var $reprodukcio = true, $legzes = true, $helyvaltoztatas = true;
// }


// class Novenyek
// {
//     var $reprodukcio = true, $legzes = true, $anyagcsere = true, $helyvaltoztats = false;
// }


class Elolenyek
{
    var $reprodukció = true, $legzes = true, $anyagcsere = true;
}

class Allatok extends Elolenyek
{
    var $helyvaltoztatas = true;
}

class Novenyek extends Elolenyek
{
    var $helyvaltoztatas = false;
}


class kutya extends Allatok
{
    var $haziallat = true;
}



class DBconnection{ }
class Listusers extends DBconnection{};