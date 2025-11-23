<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
body{justify-content: center;}
.dane{
          display: flex;
      gap: 20px;
      margin: 10px;
      
      background-color: #30c902;
          border-radius: 10px;
    width: 60%;
    height: 50px;
    justify-content: center;
    font-size: 16px;
}

</style>
</head>
<body>  
<div class="dane">imie podane w formularzu:<?php echo htmlspecialchars($_POST['imie']); ?></div>
<div><?php echo htmlspecialchars($_POST['nazw']); ?></div>
<div><?php echo htmlspecialchars($_POST['ur']); ?></div>
<div><?php echo htmlspecialchars($_POST['pass']); ?></div>
Hi <?php echo htmlspecialchars($_POST['imie']); ?>.

</body>
</html>