<?php

require ('../../functionality/db_conn.php');
include '../../functionality/actions/delete_fun.php';
include '../../functionality/actions/validation_fun.php';
include '../../functionality/actions/one_select_fun.php';

$id = "";
$username = "";
$pass = "";
$check_pass = "";
$email = "";
$role = "";
$btn_update = false;


if(isset($_POST['add_user'])){

   if (  isset($_POST['username']) && 
         isset($_POST['pass']) && 
         isset($_POST['check_pass']) &&
         isset($_POST['email']) &&
         isset($_POST['role'])) 
      {

      $username = $_POST['username'];
      $pass = $_POST['pass'];
      $check_pass = $_POST['check_pass'];
      $email = $_POST['email'];
      $role = $_POST['role'];
   
}


if(   empty_validation($username) || 
      empty_validation($pass) || 
      empty_validation($check_pass) ||
      empty_validation($email)   ||
      empty_validation($role)    ){

      header("location: user_manager_page.php?err=empty");
      exit();
   }else if ($pass !== $check_pass){
      header("location: user_manager_page.php?err=passcheck");
       exit();
  }else{
      $pass=password_hash($pass, PASSWORD_DEFAULT);

      $insert = "INSERT INTO user(username,email,role,password) 
      VALUES ('$username','$email','$role','$pass')";  

   if ($conn->query($insert) === TRUE) {

      header('location: user_manager_page.php');

      mysqli_close($conn);   

      } else {
        echo "Error: " . $insert . "<br>" . $conn->error;
        mysqli_close($conn); 
      }
   }
     
 }




if(isset($_POST['update_user'])){

      $id = $_POST['id'];
      $username = $_POST['username'];
      $pass = $_POST['pass'];
      $check_pass = $_POST['check_pass'];
      $email = $_POST['email'];
      $role = $_POST['role'];
   


if(   empty_validation($username) || 
      empty_validation($pass) || 
      empty_validation($check_pass) ||
      empty_validation($email)   ||
      empty_validation($role)    ){

      header("location: user_manager_page.php?err=empty?update_user=".$id);
      exit();
   }else if ($pass !== $check_pass){
      header("location: user_manager_page.php?err=passch?update_user=".$id);
       exit();
  }else{
   $pass=password_hash($pass, PASSWORD_DEFAULT);

   $update = "UPDATE user SET username='$username', password='$pass',
   email='$email', role='$role' WHERE id='$id'"; 
   
   if ($conn->query($update) === TRUE) {
      
      header('location: user_manager_page.php');
               
      } else {
        echo "Error: " . $update . "<br>" . $conn->error;
        die(mysqli_error($conn));
      }
   } 
}






if(isset($_GET['update_user'])){
   $btn_update=true;

   $id = $_GET['update_user'];

   if(!empty($id)){
      
      $result = single_select('user',$id);
      
         if(count(array($result))>0){
            $row = $result->fetch_array();

            $id = $row['id'];
            $username = $row['username'];
            $email = $row['email'];
            $role = $row['role'];
      }
   }
}


 if (isset($_GET['delete_user'])) {

   delete_data('user' , $_GET['delete_user']);
    
 }




?>