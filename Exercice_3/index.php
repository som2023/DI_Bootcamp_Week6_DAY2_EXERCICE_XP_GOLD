<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE_1</title>
</head>
<body>
<form action="" method="post">
  <div class="nombre">
    <p>Nous sommes à quel siècle ?</p>
    <label for="">Number</label><input type="text" name="nombre" placeholder="entrer un nombre svp"/>
   <input type="submit" value="OK" name="btnok">
  </div>
  <br>
  <br>
  </form>
  
<?php
if ( isset ($_POST['btnok'])) {
  
  function siecle()
  {

    return ceil( ($_POST['nombre'] / 100));

    
  }
   echo siecle();
}
?>

</body>
</html>
