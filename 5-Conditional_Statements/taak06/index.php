<!doctype html>
<html>
    <head>

    </head>
    <body>

        <?php
            $var1 = 3;
            $var2 = 11;

            if($var2 < 20 && $var2 > 1) {
                echo "Getal 2 ligt tussen 1 en 20! WOW DAT IS ENORM GAAF";
                echo "<br>";
            } else{
                echo "Geen van de getallen ligt tussen 1 en 20";
                echo "<br>";
            }
            if($var1 == 3 || $var2 == 3){
                echo "Getal 1 of/en 2 is gelijk aan 3";
                echo "<br>";
            } else{
                echo "geen van de getallen is gelijk aan 3";
                echo "<br>";
            }
            if($var1 == 11 xor $var2 == 11){
                echo "Getal 1 of 2 is gelijk aan 11";
                echo "<br>";
            } else{
                echo "Geen van de getallen is gelijk aan 11";
                echo "<br>";
            }
            if($var1 !== 11){
                echo "Getal 1 is niet gelijk aaan 11";
                echo "<br>";
            } else{
                echo "Getal 1 is gelijk aan 11";
                echo "<br>";
            }
        ?>
    </body>
</html>