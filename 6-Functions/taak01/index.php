<!doctype html>
<html>
    <head>

    </head>
    <body>

        <?php
            function  zetTweeWoordenAanElkaar(){
                $woordje = 'Hallo ';
                $zinnetje = "mooie blauwe planeet!";
                $helezin = $woordje . $zinnetje;
                echo $helezin;
            }
            zetTweeWoordenAanElkaar();
        ?>
    </body>
</html>