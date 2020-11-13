<?php


function getInput()
{
    $input = $_GET['input'] ?? ' ';
    echo $input;
}


//index
function output()
{
    $id1 = array("id=" . 1 . " ", "naam= appels ", "prijs= €" . 0.25);
    $id2 = array("id=" . 2 . " ", "naam= peren ", "prijs= €" . 0.30);
    $id3 = array("id=" . 3 . " ", "naam= limoen ", "prijs= €" . 0.90);
    $id4 = array("id=" . 4 . " ", "naam= olijf ", "prijs= €" . 0.80);
    $id5 = array("id=" . 5 . " ", "naam= perzik ", "prijs= €" . 0.40);
    $id6 = array("id=" . 6 . " ", "naam= pruim ", "prijs= €" . 0.39);
    $id7 = array("id=" . 7 . " ", "naam= rode bes ", "prijs= €" . 1.05);
    $id8 = array("id=" . 8 . " ", "naam= tomaat ", "prijs= €" . 1.20);
    $id9 = array("id=" . 9 . " ", "naam= kiwi ", "prijs= €" . 0.47);
    $id10 = array("id=" . 10 . " ", "naam= druif ", "prijs= €" . 1.10);
    $id11 = array("id=" . 11 . " ", "naam= citroen ", "prijs= €" . 1.15);

    $prijzen = array("id=" . 1 . "price= €" .  0.25,
        "id=" . 2 . "price= €" . 0.30,
        "id=" . 3 . "price= €" . 0.90,
        "id=" . 4 .  "price= €" . 0.80,
        "id=" . 5 . "price= €" . 0.40,
        "id=" . 6 . "price= €" . 0.39,
        "id=" . 7 . "prijs= €" . 1.05,
        "id=" . 8 . "price= €" . 1.20,
        "id=" . 9 . "price= €" . 0.47,
        "id=" . 10 . "price= €" . 1.10,
        "id=" . 11 . "price= €" . 1.15);
    $namen = array("id=" . 1 . "naam= appels ",
        "id=" . 2 . "naam= peren ",
        "id=" . 3 . "naam= limoen ",
        "id=" . 4 .  "naam= olijf ",
        "id=" . 5 . "naam= perzik ",
        "id=" . 6 . "naam= pruim ",
        "id=" . 7 . "naam= rode bes ",
        "id=" . 8 . "naam= tomaat ",
        "id=" . 9 . "naam= kiwi ",
        "id=" . 10 . "naam= druif ",
        "id=" . 11 . "naam= citroen ");

        $input = $_GET['input'] ?? ' ';
        switch(true) {
            case ($input == 1 || $input == "appels" || $input == 0.25):
            var_dump ($prijzen[0] . $namen[0]);
            break;
            case ($input == 2 || $input == "peren" || $input == 0.30):
            var_dump ($prijzen[1] . $namen[1]);
            break;
            case ($input == 3 || $input == "limoen" || $input == 0.90):
            var_dump ($prijzen[2] . $namen[2]);
            break;
            case ($input == 4 || $input == "olijf" || $input == 0.80):
            var_dump($prijzen[3] . $namen[3]);
            break;
            case ($input == 5 || $input == "perzik" || $input == 0.40):
            var_dump ($prijzen[4] . $namen[4]);
            break;
            case ($input == 6 || $input == "pruim" || $input == 0.39):
            var_dump ($prijzen[5] . $namen[5]);
            break;
            case ($input == 7 || $input == "rode bes" || $input == 1.05):
            var_dump ($prijzen[6] . $namen[6]);
            break;
            case ($input == 8 || $input == "tomaat" || $input == 1.20):
            var_dump($prijzen[7] . $namen[7]);
            break;
            case ($input == 9 || $input == "kiwi" || $input == 0.47):
            var_dump ($prijzen[8] . $namen[8]);
            break;
            case ($input == 10 || $input == "druif" || $input == 1.10):
            var_dump ($prijzen[9] . $namen[9]);
            break;
            case ($input == 11 || $input == "citroen" || $input == 1.15):
            var_dump($prijzen[10] . $namen[10]);
        
    }
}

function getProductNr()
{
    $productnummer = $_GET['productnummer'] ?? 'niet ingevuld';
    echo $productnummer;
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? ' ';
    echo $aantalProd;
}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    echo $leeftijd;
}

function getPrice()
{
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    if ($productnummer == 1){
        $productprijs = 0.25;
        $totalPrice = $aantalProd * $productprijs;
        echo $totalPrice;
    }
    if ($productnummer == 2){
        $productprijs = 0.30;
        $totalPrice = $aantalProd * $productprijs;
        echo $totalPrice;
    }
    if ($productnummer == 3){
        $productprijs = 0.90;
        $totalPrice = $aantalProd * $productprijs;
        echo $totalPrice;
    }
    if ($productnummer == 4){
        $productprijs = 0.80;
        $totalPrice = $aantalProd * $productprijs;
        echo $totalPrice;
    }
    if ($productnummer == 5){
        $productprijs = 0.40;
        $totalPrice = $aantalProd * $productprijs;
        echo $totalPrice;
    }
    if ($productnummer == 6){
        $productprijs = 0.39;
        $totalPrice = $aantalProd * $productprijs;
        echo $totalPrice;
    }
    if ($productnummer == 7){
        $productprijs = 1.05;
        $totalPrice = $aantalProd * $productprijs;
        echo $totalPrice;
    }
    if ($productnummer == 8){
        $productprijs = 1.20;
        $totalPrice = $aantalProd * $productprijs;
        echo $totalPrice;
    }
    if ($productnummer == 9){
        $productprijs = 0.47;
        $totalPrice = $aantalProd * $productprijs;
        echo $totalPrice;
    }
    if ($productnummer == 10){
        $productprijs = 1.10;
        $totalPrice = $aantalProd * $productprijs;
        echo $totalPrice;
    }
    if ($productnummer == 11){
        $productprijs = 1.15;
        $totalPrice = $aantalProd * $productprijs;
        echo $totalPrice;
    }
}

function korting()
{
    //korting//
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    if($leeftijd <= 16){
        $korting = 1;
    }
    if($leeftijd == 16){
        $korting = 0.16;
    }
    if($leeftijd == 17){
        $korting = 0.17;
    }
    if($leeftijd == 18){
        $korting = 0.18;
    }
    if($leeftijd == 19){
        $korting = 0.19;
    }
    echo $korting;
}

function totalPrice()
{
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';

    if ($productnummer == 1){
        $productprijs = 0.25;
        if($leeftijd <= 16){
            $korting = 1;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 16){
            $korting = 0.16;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 17){
            $korting = 0.17;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 18){
            $korting = 0.18;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 19){
            $korting = 0.19;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
    }
    if ($productnummer == 2){
        $productprijs = 0.30;
        if($leeftijd <= 16){
            $korting = 1;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 16){
            $korting = 0.16;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 17){
            $korting = 0.17;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 18){
            $korting = 0.18;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 19){
            $korting = 0.19;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
    }
    if ($productnummer == 3){
        $productprijs = 0.90;
        if($leeftijd <= 16){
            $korting = 1;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 16){
            $korting = 0.16;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 17){
            $korting = 0.17;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 18){
            $korting = 0.18;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 19){
            $korting = 0.19;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
    }
    if ($productnummer == 4){
        $productprijs = 0.80;
        if($leeftijd <= 16){
            $korting = 1;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 16){
            $korting = 0.16;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 17){
            $korting = 0.17;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 18){
            $korting = 0.18;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 19){
            $korting = 0.19;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
    }
    if ($productnummer == 5){
        $productprijs = 0.40;
        if($leeftijd <= 16){
            $korting = 1;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 16){
            $korting = 0.16;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 17){
            $korting = 0.17;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 18){
            $korting = 0.18;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 19){
            $korting = 0.19;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
    }
    if ($productnummer == 6){
        $productprijs = 0.39;
        if($leeftijd <= 16){
            $korting = 1;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 16){
            $korting = 0.16;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 17){
            $korting = 0.17;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 18){
            $korting = 0.18;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 19){
            $korting = 0.19;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
    }
    if ($productnummer == 7){
        $productprijs = 1.05;
        if($leeftijd <= 16){
            $korting = 1;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 16){
            $korting = 0.16;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 17){
            $korting = 0.17;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 18){
            $korting = 0.18;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 19){
            $korting = 0.19;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
    }
    if ($productnummer == 8){
        $productprijs = 1.20;
        if($leeftijd <= 16){
            $korting = 1;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 16){
            $korting = 0.16;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 17){
            $korting = 0.17;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 18){
            $korting = 0.18;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 19){
            $korting = 0.19;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
    }
    if ($productnummer == 9){
        $productprijs = 0.47;
        if($leeftijd <= 16){
            $korting = 1;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 16){
            $korting = 0.16;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 17){
            $korting = 0.17;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 18){
            $korting = 0.18;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 19){
            $korting = 0.19;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
    }
    if ($productnummer == 10){
        $productprijs = 1.10;
        if($leeftijd <= 16){
            $korting = 1;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 16){
            $korting = 0.16;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 17){
            $korting = 0.17;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 18){
            $korting = 0.18;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 19){
            $korting = 0.19;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
    }
    if ($productnummer == 11){
        $productprijs = 1.15;
        if($leeftijd <= 16){
            $korting = 1;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 16){
            $korting = 0.16;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 17){
            $korting = 0.17;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 18){
            $korting = 0.18;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
        if($leeftijd == 19){
            $korting = 0.19;
            $totalPrice = $aantalProd * $productprijs - $korting;
            echo $totalPrice;
        }
    }
}
?>