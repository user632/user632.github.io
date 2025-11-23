<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
body{justify-content: center;}
.dane{
          display: flex;
      gap: 20px;
      margin-top: 5px;
      background-color: #30c902;
}

</style>
</head>
<body>  
<div class="dane"><?php echo htmlspecialchars($_POST['imie']); ?></div>
<div><?php echo htmlspecialchars($_POST['nazw']); ?></div>
<div><?php echo htmlspecialchars($_POST['ur']); ?></div>
<div><?php echo htmlspecialchars($_POST['pass']); ?></div>
Hi <?php echo htmlspecialchars($_POST['imie']); ?>.

</body>
</html>