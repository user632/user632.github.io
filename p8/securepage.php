<?php
session_start();
if(isset($_POST["logout"]))
{
session_unset();

}
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=1){
    header('Location: lp.php');
    exit();

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
<img src="pradziadek.jpg" alt="pradziadek malowany przez prapradziadka" width="500" height="600">