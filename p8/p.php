<?php
session_start();


echo'<form method="post">';
echo'    <h2>Register</h2>';
echo'    <input type="text" name="username" ><br>';

 echo'   <input type="password" name="password" value="Alama!1kotow"> haslo musi zawierac duzą litere, małą litere, cyfre, znak spejalny i co namniej 8 znakow<br>';
 echo'   <input type="submit" name="register" value="register">';
echo'</form>';
$link = mysqli_connect('127.0.0.1:3306', 'stronamazuro3', 'STRona1234','stronamazuro2');
if(isset($_POST["register"]))
{

$reg='/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[^A-Za-z0-9]).{8,}$/';
$pas=$_POST["password"];
    $log=$_POST["username"];
        $sql="SELECT * FROM `saltedpass` WHERE `login` = '".$log."'";
    $wynik2=mysqli_query($link,$sql);
    $linia=mysqli_fetch_array($wynik2);
if($linia['login']==$log){
echo '<script language="javascript">';
echo 'alert("uzytkownik juz istnieje")';
echo '</script>';


}else{
if( preg_match($reg, $pas)==1){echo "zarejestrowano uzytkownika<br>";
echo '<a href="lp.php">powrot do strony logowania</a>';
$salt=rand();
$aa=$salt.$pas;
$hp=hash('sha256',$aa);
    $sql="INSERT INTO `saltedpass` (`login`, `salt`, `hashedpass`) VALUES ('".$log."', '".$salt."', '".$hp."')";
mysqli_query($link,$sql);


}
else{
echo '<script language="javascript">';
echo 'alert("hasło nie spełnia wymogow formalnych. spróbuj jeszcze raz")';
echo '</script>';
}



   $a=$linia['salt'].$pas;
  $b=hash('sha256',$a );
    if($b==$linia['hashedpass']){
      echo "success";
      $_SESSION["loggedin"] = 1;
    header('Location: securepage.php');
    exit();

}}}
?>


