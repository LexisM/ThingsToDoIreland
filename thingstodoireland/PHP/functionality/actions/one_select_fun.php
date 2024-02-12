<?php

function single_select($t, $id){

	require ('../../functionality/db_conn.php');

	$result = mysqli_query($conn,"SELECT * FROM $t WHERE id = $id ") or die($mysqli->error);

	if ($result) {
	    return $result;
	    mysqli_close($conn);   
     } else {
      	echo "Error: <br>" . $conn->error;
      	return $conn->error;
      	mysqli_close($conn); 
     }

}

	

?>