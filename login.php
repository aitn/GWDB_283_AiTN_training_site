<?php

include_once("helpers.php");

echo returnJSON($_POST);

function formatReturnData($data) {

}

function returnJSON($returnData) {

  return json_encode($returnData);

}

// first we need to validate the incomming data a little more betterer

// then if it's valid, we need to query the DB and make sure the passwords match

 ?>
