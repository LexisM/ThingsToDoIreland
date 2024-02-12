<?php 
require_once('../db_conn.php');
function check_empty($data){
	if (! empty($data)){
		return true;
	}else{
		return false;
	}

}

if (isset($_POST['news_sub'])){

	if(isset($_POST['newsletter_email'])){

		$email=$_POST['newsletter_email'];

		if (check_empty($email)){

			$email_exist = "SELECT * FROM  newsletter WHERE email ='$email'"; 
			$res =  $conn->query($email_exist );

			if($res->num_rows > 0){

				header('location: ../../../index.php?msg=email_subscribed#newsletter_box');

				mysqli_close($conn);

			}else{
				$sub_newsletter = "INSERT INTO newsletter(email) 
				VALUES ('$email')";  


				if ($conn->query($sub_newsletter) === TRUE) {

					header('location: ../../../index.php?msg=success#newsletter_box');

					mysqli_close($conn);

					} else {
					  echo "Error: " . $sub_newsletter. "<br>" . $conn->error;
					  mysqli_close($conn);	
					}
				}
		}else{
			header('location: ../../../index.php?msg=news_email_empty#newsletter_box');
		}	
	}
}

if (isset($_POST['news_sub_modal'])){

	if(isset($_POST['newsletter_email'])){

		$email=$_POST['newsletter_email'];

		if (check_empty($email)){

			$email_exist = "SELECT * FROM  newsletter WHERE email ='$email'"; 
			$res =  $conn->query($email_exist );

			if($res->num_rows > 0){

				header('location: ../../../index.php?msg_2=email_subscribed');

				mysqli_close($conn);

			}else{
				$sub_newsletter = "INSERT INTO newsletter(email) 
				VALUES ('$email')";  


				if ($conn->query($sub_newsletter) === TRUE) {

					header('location: ../../../index.php?msg_2=successx');

					mysqli_close($conn);

					} else {
					  echo "Error: " . $sub_newsletter. "<br>" . $conn->error;
					  mysqli_close($conn);	
					}
				}
		}else{
			header('location: ../../../index.php?msg_2=news_email_empty');
		}	
	}
}
?>