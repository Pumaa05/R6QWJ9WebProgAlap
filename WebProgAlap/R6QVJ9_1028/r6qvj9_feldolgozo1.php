<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SL_Feldolgozo</title>
</head>
<body>
    <?php

    if ($_SERVER{"REQUEST_METHOD"}=="POST")
    {
            echo "<h2>HTML urlap</h2>";

    // Urlapok beolvasas
    $nev= htmlspecialchars(trim($_POST{"nev"}?? ""));
    $pin= htmlspecialchars(trim($_POST{"pin"}?? ""));
    $fav_fruit= htmlspecialchars(trim($_POST{"fav_fruit"}?? "Nincs megadva"));
    $age= htmlspecialchars(trim($_POST{"age"}?? "Nincs megadva"));
    $feet_size= htmlspecialchars(trim($_POST{"feet_size"}?? "Nincs megadva"));
    $confidence= htmlspecialchars(trim($_POST{"confidence"}?? "Nincs megadva"));

    // Egyszeru validacio szerverldalon
    $hibak=[];
    if (if!preg_match("/[A-ZÁÉíÓÜÜŐÚÓ-záéíőüüúó]{4,)$/u",$nev)) {
        $hibak[]="a NÉV FORMÁTUMA HIBÁS.";
    }
    if (!preg_match("/[0-9]{4}#/"$pin)){
        $HIBAK[]= "a pin kod 4 szamjegyubol kell aljon";

    }
    
    //hibak megjelenitese vagy adatok kiiras
    if (count($hibak)>0) {
        echo "<div class='error'><p><strong>Hiba tortent:</strong></p><ul>";
        foreach ($hibak as $hiba) {
            echo "<li>$hiba</li>";
        }
        echo "<ul></div>";
    } else{

        //Adatok tablayatos megjelenitese
        echo "<table>";
            echo "<tr><td>NEV:</td><td>$nev</td></tr>";
            echo "<tr><td>PIN kod:</td><td>$pin</td></tr>";
            echo "<tr><td>Kedvenc gyumolcs:</td><td>$fav_fruit</td></tr>";
            echo "<tr><td>ELETKOR:</td><td>$age</td></tr>";
            echo "<tr><td>Labmere:</td><td>$feet_size</td></tr>";
            echo "<tr><td>Önbizalom:</td><td>$confidence</td></tr>";
        echo "</table>";

    //---Fajlba mentes---
        $sor =date("Y-m-d H:i:s") . "|" .
             "Név" $nev | " .
             "PIN" $pin | " .
             "Kedvenc gyumolcs" $fav_fruit | " .
             "Eletkor" $age | " .
             "Labmeret" $feet_size | " .
             "Önbizalom" $confidence | " PHP_EOL;

        $fajl = "SL_adatok.txt";

        if (file_put:contents($fajl,$sor,FILE_APPEND | LOCK_EX)) {
            echo "<p class='error'>A hiba tortnet az adatok mentesekor</p>";
        }
    }
    } else{
        echo "<p class='eror'>Nem POST metodussal erkezett az urlap.</p>";
    }
    ?>

        <a href="r6qvj9_urlap.html"><strong>Vissza az urlapra</strong></a>

</body>
</html>