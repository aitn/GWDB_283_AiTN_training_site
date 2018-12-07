<?php

/**
 * register.php
 */

// DataBase connection info
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";

// receive incoming data from $_POST


// create a hash of their password with their email as a salt
$hashedPassword = crypt($_POST['email'], $_POST['password']);

// create a connection to the DB,
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully ";
}
catch(PDOException $e)
{
  echo "Connection failed: " . $e->getMessage();
}

// pass in a SQL query to store the relevant user data
try {
  $sql = "INSERT INTO users (email, password)
    VALUES ('{$_POST['email']}', '{$hashedPassword}')";

  // use exec() because no results are returned
  $conn->exec($sql);

  echo "New User created successfully ";

  // add logic to send confirmation email to user.

}
catch(PDOException $e)
{
  echo $sql . "<br>" . $e->getMessage();
}


 ?>
