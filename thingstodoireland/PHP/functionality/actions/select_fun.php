<?php
require '../db_conn.php';



function select($t){
 global $conn;

  $sql = "SELECT * FROM $t";
  $stmt =  $conn->prepare($sql);
  $stmt->execute();

  $result = $stmt->get_result()->fetch_assoc();

  return $result; 
}

     
?>