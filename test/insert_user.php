<?php 
include '../utils/pdo.php';

/* Username. */
$username = 'username';
/* Password. */
$password = 'password';
/* Secure password hash. */
$hash = password_hash($password, PASSWORD_DEFAULT);
/* Insert query template. */
$query = 'INSERT INTO users (username, password) VALUES (:name, :password)';
/* Values array for PDO. */
$values = [':name' => $username, ':password' => $hash];
/* Execute the query. */
try
{
  $res = $pdo->prepare($query);
  $res->execute($values);
}
catch (PDOException $e)
{
  /* Query error. */
  print_r($e);
  echo 'Query error.';
  die();
}

?>
