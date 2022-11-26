<?php 
session_start();

include("pdo.php");

print_r($_REQUEST);

$complete_name = $_REQUEST['complete_name'];
$professional_title = $_REQUEST['professional_title'];
$national_register = $_REQUEST['national_register'];
$br_cpf = $_REQUEST['br_cpf'];
$email = $_REQUEST['email'];

$id = $_SESSION['user_id'];

$sql = "UPDATE users SET complete_name=?, professional_title=?, national_register=?, br_cpf=?, email=? WHERE id=?";
$stmt= $pdo->prepare($sql);
$stmt->execute([$complete_name, $professional_title, $national_register, $br_cpf, $email, $id]);

header('Location: ../profile');

?>