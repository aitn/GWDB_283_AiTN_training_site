<?php

include_once("helpers.php");

// DataBase connection info
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";


function formatReturnData($data) {

}

function returnJSON($returnData) {

  return json_encode($returnData);

}

// first we need to validate the incomming data a little more betterer
// we'll do this later. much, much, later.

// then if it's valid, we need to query the DB and make sure the passwords match

// get the hashed pwd of the user with the matching email,

// create a connection to the DB,
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully ";
}
catch(PDOException $e)
{
  echo "Connection failed: " . $e->getMessage();
}

try {
  $sql = "SELECT * FROM users WHERE email = '{$_POST['email']}'";

  // use exec() because no results are returned
  $query = $conn->query($sql);

  //echo "New User retrieved successfully ";

  // add logic to send confirmation email to user.

  //printr($query);
  $result;

  // how to loop through a returned query object
  while($rows = $query->fetch(PDO::FETCH_ASSOC)){
    //printr($rows);
    $result = $rows;
  }

  $rows = $query->fetch(PDO::FETCH_ASSOC);

  // then hash the incoming password and compare it to the one in the DB,
  // create a hash of their password with their email as a salt
  $hashedPassword = crypt($_POST['email'], $_POST['password']);

  //printr("hashedPassword");
  //printr($hashedPassword);

  //printr("query pwd");
  //printr($result['password']);

  // if they match, you're g2g!
  if ( $hashedPassword == $result['password']) {

    echo 'ACCESS GRANTED';

  } else {

    // if not, get outta heer 1337 haxorz.
    echo '<img src="https://media1.giphy.com/media/5ftsmLIqktHQA/giphy.gif?cid=3640f6095c09dc0472616f517301a2be" />';

  }

}
catch(PDOException $e)
{
  echo $sql . "<br>" . $e->getMessage();
}


 ?>
