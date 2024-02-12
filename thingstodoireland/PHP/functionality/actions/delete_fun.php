<?php

function delete_data($t, $id){
 require ('../../functionality/db_conn.php');

  $del_data = "DELETE FROM  ". $t . "  WHERE id = '$id' "; 

  $result = $conn->query($del_data);

  if ($result) {
     return true;
     mysqli_close($conn);   
     } else {
      echo "Error: " . $del_data . "<br>" . $conn->error;
      return false;
      mysqli_close($conn); 
     }

}
     
?>