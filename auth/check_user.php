<?php

session_start();
include '../utils/pdo.php';


if (isset($_POST['login'])) {
    /* Username from the login form. */
    $username = $_POST['username'];
    /* Password from the login form. */
    $password = $_POST['password'];

    /* Remember to validate $username and $password. */
    /* Look for the username in the database. */
    $query = 'SELECT * FROM users WHERE (username = :name)';
    /* Values array for PDO. */
    $values = [':name' => $username];
    /* Execute the query */
    try {
        $res = $pdo->prepare($query);
        $res->execute($values);
    } catch (PDOException $e) {
        /* Query error. */
        print_r($e);
        echo 'Query error.';
        die();
    }
    $row = $res->fetch(PDO::FETCH_ASSOC);
    /* If there is a result, check if the password matches using password_verify(). */
    if (!is_array($row)) {
        $_SESSION['login_error'] = "Invalid user";
        header("location: ../login");
        exit;
    }
    if (!password_verify($password, $row['password'])) {
        $_SESSION['login_error'] = "Invalid password";
        header("location: ../login");
        exit;
    } else {
        $_SESSION['user_id'] = $row['id'];
        header("location: ../index");
    }
}
