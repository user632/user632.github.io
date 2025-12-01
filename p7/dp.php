<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php


$link = mysqli_connect('127.0.0.1:3306', 'stronamazuro1', 'STRona1234','stronamazuro1');
$sql="SELECT * FROM `f1drivers`";
$wynik=mysqli_query($link,$sql);
while($linia=mysqli_fetch_array($wynik))
{
    echo "<hr>";
    echo "<form action='index.php' method='post'>";
    echo $linia['id']." ".$linia['imie']." ".$linia['nazwisko']." ".$linia['wiek'];
    echo "<input type='submit' name='kasuj' value='Kasuj'>";
    echo "<input type='hidden' name='id' value='".$linia['id']."'>";
    echo "</form>";
}


if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
?>

</body>
</html>