<?php


function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo $input;
}

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

        $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
        switch(true) {
            case ($input == 1 || $input == "appels" || $input == 0.25):
            var_dump ($id1);
            break;
            case ($input == 2 || $input == "peren" || $input == 0.30):
            var_dump ($id2);
            break;
            case ($input == 3 || $input == "limoen" || $input == 0.90):
            var_dump ($id3);
            break;
            case ($input == 4 || $input == "olijf" || $input == 0.80):
            var_dump($id4);
            break;
            case ($input == 5 || $input == "perzik" || $input == 0.40):
            var_dump ($id5);
            break;
            case ($input == 6 || $input == "pruim" || $input == 0.39):
            var_dump ($id6);
            break;
            case ($input == 7 || $input == "rode bes" || $input == 1.05):
            var_dump ($id7);
            break;
            case ($input == 8 || $input == "tomaat" || $input == 1.20):
            var_dump($id8);
            break;
            case ($input == 9 || $input == "kiwi" || $input == 0.47):
            var_dump ($id9);
            break;
            case ($input == 10 || $input == "druif" || $input == 1.10):
            var_dump ($id10);
            break;
            case ($input == 11 || $input == "citroen" || $input == 1.15):
            var_dump($id11);
            default:
            echo "niet gevonden";
            break;
        
    }
}

function getProductNr()
{
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    echo $productnummer;
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
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
    }
    if ($productnummer == 2){
        $productprijs = 0.30;
    }
    if ($productnummer == 3){
        $productprijs = 0.90;
    }
    if ($productnummer == 4){
        $productprijs = 0.80;
    }
    if ($productnummer == 5){
        $productprijs = 0.40;
    }
    if ($productnummer == 6){
        $productprijs = 0.39;
    }
    if ($productnummer == 7){
        $productprijs = 1.05;
    }
    if ($productnummer == 8){
        $productprijs = 1.20;
    }
    if ($productnummer == 9){
        $productprijs = 0.47;
    }
    if ($productnummer == 10){
        $productprijs = 1.10;
    }
    if ($productnummer == 11){
        $productprijs = 1.15;
    }
    $totalPrice = $aantalProd * $productprijs;

    echo $totalPrice;
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
    }
    if ($productnummer == 2){
        $productprijs = 0.30;
    }
    if ($productnummer == 3){
        $productprijs = 0.90;
    }
    if ($productnummer == 4){
        $productprijs = 0.80;
    }
    if ($productnummer == 5){
        $productprijs = 0.40;
    }
    if ($productnummer == 6){
        $productprijs = 0.39;
    }
    if ($productnummer == 7){
        $productprijs = 1.05;
    }
    if ($productnummer == 8){
        $productprijs = 1.20;
    }
    if ($productnummer == 9){
        $productprijs = 0.47;
    }
    if ($productnummer == 10){
        $productprijs = 1.10;
    }
    if ($productnummer == 11){
        $productprijs = 1.15;
    }
    //korting//
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

    $totalPrice = $aantalProd * $productprijs - $korting;

    echo $totalPrice;
}
?>