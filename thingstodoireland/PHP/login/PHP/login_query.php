<?php
require '../../db_conn.php';



	if(isset($_POST['login'])){

		if(isset($_POST['user']) && isset($_POST['password'])){
			$u = $_POST['user'];
			$p = $_POST['password'];

			if(empty_validation($u) || empty_validation($p)){

			    header("location: ../login.php?err=empty");
			    exit();
			}else{
				$result = log_check('user',$p,$u);

				 if (mysqli_num_rows($result) === 1) {
					$row = mysqli_fetch_assoc($result);

					if(password_verify($p, $row['password'])){
						session_start();
						$_SESSION['userName'] = $row['username'];
						$_SESSION['userId'] = $row['id'];
						$_SESSION['admin'] = $row['role'];
						header('location: ../../website_manager/wm_index.php');
					}else{
						header('location: ../login.php?err=wrongpass');
					} 
					
				}else{
					header('location: ../login.php?err=nouserfound');
				}
			    
			}
		}
	}

	
if(isset($_POST['btn_logout'])){
	session_start();
	unset($_SESSION['userName']);
	unset($_SESSION['userId']);
	unset($_SESSION['admin']);
	session_destroy();
	header('location: ../login.php');

}

function log_check($t,$p,$u){
 require '../../db_conn.php';
	$p=password_hash($p, PASSWORD_DEFAULT);

	$q ="SELECT * FROM $t WHERE username ='$u'";

	return mysqli_query( $conn , $q);
}

function select_data($t){


	$q ="SELECT * FROM $t";

	if (mysqli_query($conn,$q)) {
		return mysqli_query($conn,$q);
	}else{
		return	die($mysqli->error);
	}

}

function empty_validation($data){

    if(empty($data)){
       return true;
    }
    return false;
 }

?>