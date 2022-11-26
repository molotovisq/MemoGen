<?php
session_start();
include 'pdo.php';

function select_by_id($db, $table, $id, $col = '*'){
    
    $sth = $db->prepare("SELECT $col FROM $table WHERE id = $id order by id");
    $sth->execute();
    
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return($result[0]);
    
    
    }

    $user_data = select_by_id($pdo, 'users', $_SESSION['user_id']);
    echo (json_encode($user_data));
    
/*   
if(!isset($_SESSION['user_id'])){
    $_SESSION['user_id'] = 1;
}
$user_data =select_by_id($pdo,'users',$id=$_SESSION['user_id']);
print_r($user_data);
*/
?>