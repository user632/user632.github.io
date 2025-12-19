<?php
session_start();
if(isset($_POST["logout"]))
{
session_unset();

}
$link = mysqli_connect('127.0.0.1:3306', 'stronamazuro3', 'STRona1234','stronamazuro2');
if(isset($_POST["dodaj"]))
{
    $log=$_POST["username"];
    $pas=$_POST["password"];
    $sql="SELECT * FROM `saltedpass` WHERE `login` = '".$log."'";
    $wynik2=mysqli_query($link,$sql);
    $linia=mysqli_fetch_array($wynik2);
if($linia['login']==$log){


   $a=$linia['salt'].$pas;
  $b=hash('sha256',$a );
    if($b==$linia['hashedpass']){
      echo "zalogowano pomyslnie";
      $_SESSION["loggedin"] = 1;
    //header('Location: securepage.php');
    //exit();
    echo '<a href="securepage.php">strona na ktorą chciales sie dostac</a>';

}else{echo "niepoprawne haslo";}
}else{echo "uzytkownik nie istnieje. zarejestruj sie";}

}


?>
<style>
.aa{allign="right";
background-color: #ff0101;
width:100px;
  position: relative;
  float: right;
 text-align: center;
}
</style>
<div class="aa">
<form method="post">
    <input type="submit" name="logout" value="logout">
</form>	
</div>	

<form method="post">
    <h2>Login</h2>
    <input type="text" name="username" ><br>
    <input type="password" name="password" value="Alama!1kotow"><br>
    <input type="submit" name="dodaj" value="zaloguj">
</form>		
<form action="p.php" method="post">
  

    <input type="submit" name="dodaj" value="register">
</form>					
