<!DOCTYPE html>
<html>
<body>

<?php
$product_id_besteld = 23;
if($product_id_besteld < 20){
    echo "uw prijs is €1,25";
}
if($product_id_besteld <= 25){
    echo "uw prijs is €1,75";
}
if($product_id_besteld > 25){
    echo "uw prijs is €2,-";
}
?>
</body>
</html> 