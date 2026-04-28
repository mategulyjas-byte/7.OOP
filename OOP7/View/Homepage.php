<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>
        <?php foreach ($this->ViewData as $vd) { ?>
            <li> 
                <?php print "$vd.<br>";} ?>
            </li>

    </ul>

    <h2>Főoldal</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Tempora illum nesciunt quis veritatis veniam earum blanditiis
        provident perspiciatis odit
        doloribus nulla eos sint tempore
        in aliquam debitis, quod labore dicta.</p>
</body>

</html>