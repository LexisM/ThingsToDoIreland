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
            <li class="nav-item"><a href="#" class="nav-link mx-2 active">BLOG CONTENT</a></li>
            <li class="nav-item"><a href="../user_manager/user_manager_page.php" <?php echo $admin; ?> class="nav-link mx-2 text-white">USERS MANAGER</a></li>
          </ul>


        <div class="align-items-center me-4 text-end">
          <form action="../../login/PHP/login_query" method="post" enctype="multipart/form-data">
            <?php echo $logbtn; ?>

            <button type="button" class="btn btn-warning text-uppercase" > <?php echo $name; ?> </button>
          </form>

        </div>
      </div>
    </nav>


    <div class="container mt-5 ">
    <div class="row d-flex">
    <div class="col-lg-10 col-md-12 col-sm-12 border shadow-sm mx-auto my-4">
      <h2 class="lead fs-2"> Create Post <i class="fa fa-solid fa-plus"></i></h2>
      <hr>
     <form class="" method="POST" action="create_post_function.php" enctype="multipart/form-data">
        <div class="col">
          <?php
          include 'create_post_function.php';

          if (isset($_GET['err'])){
            $error=$_GET['err'];
              if ($error == "empty"){
            echo ' <div class="alert alert-danger" role="alert">
            Empty fields
          </div>';
            }elseif ($error=="img_big") {
            echo ' <div class="alert alert-danger" role="alert">
            Image too big. Maximun image uploading  size is 5 MB.
          </div>';
            }elseif ($error=="no_img") {
            echo ' <div class="alert alert-danger" role="alert">
            Please insert an image.
          </div>';
            }elseif ($error=="img_format_invalid") {
            echo ' <div class="alert alert-danger" role="alert">
            Please upload a valid image format.
          </div>';
            }elseif ($error=="post_success") {
            echo ' <div class="alert alert-success" role="alert">
           Post added successfully!.
          </div>';
            }
          }
         
          ?>
        </div>

        <div class="mb-4">


          <input type="hidden" name="id"  value="<?php echo $id;?>" />
          <label class="form-label fs-3" >Title: </label>
          <input autocomplete="off"   value="<?php echo $title;?>" type="text" name="title" class="form-control form-control-lg" required placeholder="Post title">
        </div>

        <div class="mb-4">
          <label  class="form-label fs-4">Content: </label>
          <textarea class="form-control"  name="content" rows="15" required placeholder="Leave a comment here" id="floatingTextarea"><?php echo $content;?></textarea>
          
        </div>

        <div class="mb-4">
          <label class="form-label">Image</label>
           <input class="form-control form-control-lg" required name="img_post" type="file">
        </div>

        <div class="mb-4">
          <label required class="form-label">Publish </label>
          <select name="publish"  class="form-select" >
            <option <?php if ( $publish == '') {echo 'selected';}?> value = "" disabled>Publish</option>
            <option value="No" <?php if ( $publish == 'No') {echo 'selected';}?> >No</option>
            <option value="Yes"  <?php if ( $publish == 'yes') {echo 'selected';}?> >Yes</option>
          </select>
        </div>
        
        <div class="mb-4">
          <?php 
            
            if($btn_update==true){

              echo "<button type='submit' class='btn btn-warning' name='update_post'>UPDATE</button>";
            }else{
              echo "<button type='submit' class='btn btn-primary' name='add_post'>CREATE POST</button>";
            }
         
           ?>
        
         
        </div>

        
      </form>
    </div >

    <div class="col-lg-10 col-md-6 col-sm-1 mx-auto">
      <?php
          if (isset($_GET['del_post'])){
            $error=$_GET['del_post'];
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
              <th>Post ID</th>
              <th>Title</th>
              <th>Publish</th>
              <th>Username</th>
              <th>Role</th>
              <th colspan="2" class="text-center">Action</th>
            </tr>
          </thead>
          
            <?php
           
      
            $user_select = mysqli_query($conn,"SELECT p.id, p.user_id, p.title, p.publish, u.username, u.role from post p, user u WHERE u.id = p.user_id") or die($mysqli->error);
              while ($row = $user_select->fetch_assoc()){


                echo "<tbody>";
                echo "<tr>";
                echo "<td> " . $row['id'] . "</td>";
                echo "<td> " . $row['title'] . "</td>";
                echo "<td> " . $row['publish'] . "</td>";
                echo "<td> " . $row['username'] . "</td>";
                echo "<td > " . $row['role'] . "</td>";
               
                
                echo "<td class='text-center p-1'>
                    <a href='blog_manager_page.php?delete_post=" . $row['id'] . " '>
                    <button class='btn btn-danger ' ><i class='mx-1 fas fa-trash'></i>DELETE </button>
                    </a>
                  </td>";
                echo "<td class='text-center p-1'>
                    <a   href='blog_manager_page.php?update_post=" . $row['id'] . " '>
                    <button class='btn btn-warning '><i class='mx-1 fas fa-edit'></i> EDIT</button>
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
    
 
         
    

  
<footer class="footer ">
  <!-- Copyright -->
  <div class=" text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="#">Things to do Ireland.</a>
  </div>
  <!-- Copyright -->
</footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</body>

</html>


<?php 
}else{
  header('location: ../login/login.php');
} 
?>