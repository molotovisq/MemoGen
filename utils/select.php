<?php
include 'pdo.php';
//session_start();

function select_table($db, $table, $col = '*'){
    
$sth = $db->prepare("SELECT $col FROM $table order by id");
$sth->execute();

//$result = $sth->fetch(PDO::FETCH_OBJ);

$result = $sth->fetchAll(PDO::FETCH_ASSOC);

//Insere um array zerado no inicio, para id(tabela)=index do array
array_unshift($result , '0');
return($result);

}
function select_by_id($db, $table, $id, $col = '*'){
    
    $sth = $db->prepare("SELECT $col FROM $table WHERE id = $id order by id");
    $sth->execute();
    
    //$result = $sth->fetch(PDO::FETCH_OBJ);
    
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    return($result[0]);
    
    }

/*   
if(!isset($_SESSION['user_id'])){
    $_SESSION['user_id'] = 1;
}
$user_data =select_by_id($pdo,'users',$id=$_SESSION['user_id']);
print_r($user_data);
*/
?>