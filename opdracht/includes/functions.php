<?php

function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo $input;
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
    if ($productnummer == 0){
        $productprijs = 0.25;
    }
    if ($productnummer == 1){
        $productprijs = 0.30;
    }
    if ($productnummer == 2){
        $productprijs = 0.90;
    }
    if ($productnummer == 3){
        $productprijs = 0.80;
    }
    if ($productnummer == 4){
        $productprijs = 0.40;
    }
    if ($productnummer == 5){
        $productprijs = 0.39;
    }
    if ($productnummer == 6){
        $productprijs = 1.05;
    }
    if ($productnummer == 7){
        $productprijs = 1.20;
    }
    if ($productnummer == 8){
        $productprijs = 0.47;
    }
    if ($productnummer == 9){
        $productprijs = 1.10;
    }
    if ($productnummer == 10){
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

    if ($productnummer == 0){
        $productprijs = 0.25;
    }
    if ($productnummer == 1){
        $productprijs = 0.30;
    }
    if ($productnummer == 2){
        $productprijs = 0.90;
    }
    if ($productnummer == 3){
        $productprijs = 0.80;
    }
    if ($productnummer == 4){
        $productprijs = 0.40;
    }
    if ($productnummer == 5){
        $productprijs = 0.39;
    }
    if ($productnummer == 6){
        $productprijs = 1.05;
    }
    if ($productnummer == 7){
        $productprijs = 1.20;
    }
    if ($productnummer == 8){
        $productprijs = 0.47;
    }
    if ($productnummer == 9){
        $productprijs = 1.10;
    }
    if ($productnummer == 10){
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