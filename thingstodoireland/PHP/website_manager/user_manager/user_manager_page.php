<?php

session_start();
  $name='';
  $logbtn = ' <button type="submit" name="btn_login" class="btn btn-outline-primary me-2">Log in</button>';
  if(isset($_SESSION['userName'])){
    
    
    
    $name=$_SESSION['userName'];
    $logbtn='  <button type="submit" name="btn_logout" class=" text-uppercase btn btn-light me-2">Log out</button>' ;

      if($_SESSION['admin'] == "Admin" ){
        $admin="";
      }else{
        $admin="hidden";
      }



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9fee83fe28.js" crossorigin="anonymous"></script>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../../../CSS/style.css"> 
    <link rel="stylesheet" type="text/css" href="../../../CSS/homepage_style">


</head>


<body>
    <nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark py-0">
      

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      
        <div class="collapse navbar-collapse" id="toggleMobileMenu" >

          <ul class="navbar-nav  mx-auto  justify-content-center">
            <li class="nav-item "><a href="../newsletter_manager/newsletter_manager_page.php" class="nav-link mx-2 text-white">NEWSLETTER</a></li>
            <li class="nav-item"><a href="../blog_manager/blog_manager_page.php" class="nav-link mx-2 text-white">BLOG CONTENT</a></li>
            <li class="nav-item"><a href="#" <?php echo $admin; ?> class="nav-link mx-2 active">USERS MANAGER</a></li>
          </ul>


        <div class="align-items-center me-4 text-end">
          <form action="../../login/PHP/login_query" method="post">
            <?php echo $logbtn; ?>

            <button type="button" class="btn btn-warning text-uppercase" > <?php echo $name; ?> </button>
          </form>

        </div>
      </div>
    </nav>


    <div class="container mt-5">
    <div class="row d-flex">
    <div class="col-lg-4 col-md-6">
     <form class="" method="POST" action="register_user_fun.php">
        <div class="col-6">
          <?php
          include 'register_user_fun.php';
          if (isset($_GET['err'])){
            $error=$_GET['err'];
              if ($error == "empty"){
            echo ' <div class="alert alert-success" role="alert">
            Empty fields
          </div>';
            }elseif ($error="passcheck") {
            echo ' <div class="alert alert-danger" role="alert">
            No matching password.
          </div>';
            }
          }
         
          ?>
        </div>

        <div class="mb-4">


          <input type="hidden" name="id"  value="<?php echo $id;?>"/>
          <label class="form-label" >Username: </label>
          <input autocomplete="off"  value="<?php echo $username;?>" type="text" name="username" class="form-control"  placeholder="user">
        </div>

        <div class="mb-4">
          <label  class="form-label">Password: </label>
          <input autocomplete="off"  value="<?php echo $pass;?>" type="password" placeholder="password" name="pass" class="form-control" >
        </div>

        <div class="mb-4">
          <label class="form-label">Confirm Password:</label>
          <input autocomplete="off"  value="<?php echo $check_pass;?>" placeholder="confirm password" type="password" name="check_pass" class="form-control" >
        </div>

        <div class="mb-4">
          <label  class="form-label">Email: </label>
          <input autocomplete="off"  value="<?php echo $email;?>" type="email" placeholder="password" name="email" class="form-control" >
        </div>

        <div class="mb-4">
          <label class="form-label">Choose a role for this user: </label>
          <select name="role" value="<?php echo $role;?>" class="form-select" aria-label="Default select example">
            <option selected value = "" disabled>Role</option>
            <option value="1">Author</option>
            <option value="2">Admin</option>
          </select>
        </div>
        
        <div class="mb-4">
          <?php 
            
            if($btn_update==true){

              echo "<button type='submit' class='btn btn-warning' name='update_user'>UPDATE</button>";
            }else{
              echo "<button type='submit' class='btn btn-primary' name='add_user'>CREATE USER</button>";
            }
         
           ?>
        
         
        </div>

        
      </form>
    </div >

    <div class="col-lg-8 col-md-6 col-sm-1">
      <?php
          if (isset($_GET['d_u'])){
            $error=$_GET['d_u'];
              if ($error == "success"){
            echo ' <div class="alert alert-success" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            User deleted successfully.
            
          </div>';
            }elseif ($error="failed") {
            echo ' <div class="alert alert-danger" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            User not deleted.
            
          </div>';
            }
          }
         
          ?>
      <div class="show_data">
        <table class="table ">
          <thead class="table-dark">
            <tr>
              <th>User ID</th>
              <th>Username</th>
              <th>Email</th>
              <th>Role</th>
              <th colspan="2" class="text-center">Action</th>
            </tr>
          </thead>
          
            <?php
      
            $user_select = mysqli_query($conn,"SELECT * FROM user") or die($mysqli->error);
              while ($row = $user_select->fetch_assoc()){
                echo "<tbody>";
                echo "<tr>";
                echo "<td> " . $row['id'] . "</td>";
                echo "<td> " . $row['username'] . "</td>";
                echo "<td> " . $row['email'] . "</td>";
                echo "<td> " . $row['role'] . "</td>";
               
                
                echo "<td class=' text-center  p-1'>
                    <a href='user_manager_page.php?delete_user=" . $row['id'] . " '>
                    <button class='btn btn-danger ' ><i class='mx-1 fas fa-trash'></i>DELETE </button>
                    </a>
                  </td>";
                echo "<td class=' text-center p-1'>
                    <a   href='user_manager_page.php?update_user=" . $row['id'] . " '>
                    <button class='btn btn-warning '><i class='mx-1 fas fa-edit'></i>EDIT</button>
                    </a>
                  </td>";
                echo "</tr>";
                echo "</tbody>";
              }
                
          ?>
          
        </table> 
      </div>
    </div >

  </div>
  </div>
    
 
         
    

  

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <footer class="footer fixed-bottom ">
  <!-- Copyright -->
  <div class=" text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="#">Things to do Ireland.</a>
  </div>
  <!-- Copyright -->
</footer>
</body>

</html>


<?php 
}else{
  header('location: ../login/login.php');
} 
?>