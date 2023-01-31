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
    <p>Calcul factoriel</p>
    <label for="">Number</label><input type="text" name="nombre" placeholder="entrer un nombre svp"/>
   <input type="submit" value="OK" name="btnok">
  </div>
  <br>
  <br>
  </form>
<?php
if (isset($_POST['btnok'])) {
  $nombre = $_POST['nombre'];
  if ($nombre == null) {
    echo 'Veillez renseigner une note svp';
    
  }else
  {
    
    $fact = 1;
for ($i = 1; $i <= $nombre; $i++) {
    $fact = $fact * $i;
}
echo 'Le factoriel de ' . $nombre . ' est ' . $fact;
  }
}
  
?>

</body>
</html>