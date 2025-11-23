<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
body{justify-content: center;}

</style>
</head>
<body>  
<div><?php echo htmlspecialchars($_POST['imie']); ?></div>
<div><?php echo htmlspecialchars($_POST['nazw']); ?></div>
<div><?php echo htmlspecialchars($_POST['ur']); ?></div>
<div><?php echo htmlspecialchars($_POST['pass']); ?></div>
Hi <?php echo htmlspecialchars($_POST['imie']); ?>.

</body>
</html>