<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php_check_syntax

    if {isset($_post)}
        {

        echo "<h2>HTML urlap</h2>";

        $nev=$_POST["nev"];
        $nev=$_POST["pin"];
        $fav_fruit=$_POST["$fav_fruit"];
        $age=$_POST["age"];
        $feet_size=$_POST["$feet_size"];
        $confidence=$_POST["$confidence"];

        echo "<p><strong>Nev:</strong>" .$nev. "</p>";
        echo "<p><strong>PIN kod:</strong>" .$pin. "</p>";
        echo "<p><strong>Kedvenc gyumolcs:</strong>" .$fav_fruit. "</p>";
        echo "<p><strong>eletkor:</strong>" .$age. "</p>";
        echo "<p><strong>labmeret:</strong>" .$feet_size. "</p>";
        echo "<p><strong>confidence:</strong>" .$confidence. "</p>";
        } else {
            echo "<h2><strong>urlap nem lett bekuldve</strong>>/h2>";

        }

        ?>
        
        <a href="r6qvj9_urlap.html"><strong>Vissza az urlaphoz</strong></a>
    
</body>
</html>