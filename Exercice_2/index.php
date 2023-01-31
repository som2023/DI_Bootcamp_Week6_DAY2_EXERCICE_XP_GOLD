 
<?php
for ($i = 0; $i <= 8; $i++) {

  if ($i == 0) {
    echo '* <br>';

  } elseif ($i == 1) {
    echo '** <br>';
  }
  elseif ($i == 2) {
    echo '*** <br>';
  } elseif ($i == 3) {
    echo '**** <br>';
  } elseif ($i == 4) {
    echo '***** <br>';
  } elseif ($i == 5) {
    echo '****** <br>';
  } elseif ($i ==6) {
    echo '******* <br>';
  } elseif ($i == 7) {
    echo '******** <br>';
  }else
  {
    echo '';
  }
}
?>
