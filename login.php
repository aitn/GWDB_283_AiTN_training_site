<?php

echo "hullo \r\n \r\n ";

printr($_GET);

function printr($string) {

  echo '<pre>';
  print_r($string);
  echo '</pre>';

}

 ?>
