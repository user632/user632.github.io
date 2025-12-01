<!DOCTYPE html>
<html>
<head>
f1 standings
</head>
<body>
<?php


$link = mysqli_connect('127.0.0.1:3306', 'stronamazuro1', 'STRona1234','stronamazuro1');
if(isset($_POST["dodaj"]))
{
    $imie=$_POST["imie"];
    $nazwisko=$_POST["nazwisko"];
    $wiek=$_POST["wiek"];
    $punkty=$_POST["punkty2025"];
    $sql="INSERT INTO `f1drivers` (`id`, `imie`, `nazwisko`, `punkty2025`, `wiek`) VALUES (NULL, '".$imie."', '".$nazwisko."', '".$wiek."', '".$punkty."')";
    $wynik2=mysqli_query($link,$sql);
}

if(isset($_POST["kasuj"]))
{
    $id=$_POST["id"];
    $sql="DELETE FROM `f1drivers` WHERE `f1drivers`.`id` = ".$id;
    $wynik2=mysqli_query($link,$sql);
}
if(isset($_POST["zapisz"]))
{
    $id=$_POST["id"];
    $imie=$_POST["imie"];
    $nazwisko=$_POST["nazwisko"];
    $punkty=$_POST["punkty"];
    $wiek=$_POST["wiek"];
    $sql="UPDATE `f1drivers` SET `imie` = '".$imie."', `nazwisko` = '".$nazwisko."',`punkty2025` = '".$punkty."', `wiek` = '".$wiek."' WHERE `f1drivers`.`id` = ".$id;
    $wynik2=mysqli_query($link,$sql);
}
$sql="SELECT * FROM `f1drivers`";
$wynik=mysqli_query($link,$sql);
echo "<p>id: imie:       nazwisko:        punkty:      wiek:</p>";
echo"<table>";
while($linia=mysqli_fetch_array($wynik))
{
    echo "<hr>";
    echo "<form action='db.php' method='post'>";
if(isset($_POST["edytuj"])&&$linia['id']==$_POST["id"]){

echo "<table><tr><td><form>";
echo "<td><input type='text' name='imie' value='".$linia['imie']."'>";
echo "<input type='text' name='nazwisko' value='".$linia['nazwisko']."'>";
echo "<input type='text' name='punkty' value='".$linia['punkty2025']."'>";
echo "<input type='text' name='wiek' value='".$linia['wiek']."'>";
    
    echo "<input type='hidden' name='id' value='".$linia['id']."'>";
echo "<input type='submit' name='zapisz' value='zapisz'>";
echo "</form></td></tr></table>";
}else{echo"<tr>";
    echo $linia['id']." ".$linia['imie']." ".$linia['nazwisko']." ".$linia['wiek']." ".$linia['punkty2025'];
    echo "<input type='submit' name='kasuj' value='Kasuj'>";
    echo "<input type='hidden' name='id' value='".$linia['id']."'>";
    echo "<input type='submit' name='edytuj' value='edytuj'>";
 
    echo "</form>";
echo"</tr>";
}

}
echo"</table>";

if (!$link) {
    die('Could not connect: ' . mysql_error());
}

?>
<form action="db.php" method="post">
<input type="text" name="imie">
<input type="text" name="nazwisko">
<input type="text" name="punkty2025">
<input type="text" name="wiek">

<input type="submit" name="dodaj" value="Dodaj">
</form>

</body>
</html>					