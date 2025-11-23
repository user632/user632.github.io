<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
body{justify-content: center;
 background-color: #4263bfff;}
.dane{
          display: flex;
      gap: 20px;
      margin: 10px;
      
      background-color: #c6e3bdff;
          border-radius: 10px;
    width: 60%;
    height: 50px;
    justify-content: center;
    font-size: 24px;
}

</style>
</head>
<body>  
<div class="dane">imie podane w formularzu: <?php echo htmlspecialchars($_POST['imie']); ?></div>
<div class="dane">nazwisko: <?php echo htmlspecialchars($_POST['nazw']); ?></div>
<div class="dane">rok urodzenia: <?php echo htmlspecialchars($_POST['ur']); ?></div>
<div class="dane"> hasło hihi: <?php echo htmlspecialchars($_POST['pass']); ?></div>
<div class="dane"> adres:  <?php echo htmlspecialchars($_POST['pass']); ?></div>
<div class="dane"> miasto: <?php echo htmlspecialchars($_POST['pass']); ?></div>
<div class="dane"> podany email: <?php echo htmlspecialchars($_POST['pass']); ?></div>
<div class="dane"> dokument prawa jazdy: <?php echo htmlspecialchars($_POST['pass']); ?></div>
<div class="dane"> płec: <?php echo htmlspecialchars($_POST['pass']); ?></div>
<div class="dane"> uwagi: <?php echo htmlspecialchars($_POST['pass']); ?></div>
<div class="dane"> numer telefonu: <?php echo htmlspecialchars($_POST['pass']); ?></div>
<div class="dane"> wojewodztwo: <?php echo htmlspecialchars($_POST['pass']); ?></div>


</body>
</html>