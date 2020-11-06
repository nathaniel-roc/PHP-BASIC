<!DOCTYPE html>
<html>
<body>

<?php
$myCatNames =  ['tijger', 'mickey', 'tijger'];
echo "<ul>" . "<li>" . $myCatNames[0] . "</li><li>" . $myCatNames[1] . "</li><li>" . $myCatNames[2] . "</li>" . "</ul>";
$myCatNames[0] = 'panter';
$myCatNames[1] = 'kater';
$myCatNames[2] = 'papagaai';
echo "<br>" . "<ul>" . "<li>" . $myCatNames[0] . "</li><li>" . $myCatNames[1] . "</li><li>" . $myCatNames[2] . "</li>" . "</ul>";
?>

</body>
</html> 