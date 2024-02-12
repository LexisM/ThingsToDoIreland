
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
    <link rel="stylesheet" type="text/css" href="../../CSS/style.css"> 
    <link rel="stylesheet" type="text/css" href="../../CSS/homepage_style">


</head>


<body>
    <nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark py-0">
      

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      
        <div class="collapse navbar-collapse" id="toggleMobileMenu" >

          <ul class="navbar-nav  mx-auto  justify-content-center">
            <li class="nav-item "><a href="newsletter/newsletter_manager_page.php" class="nav-link mx-2 text-white">NEWSLETTER</a></li>
            <li class="nav-item"><a href="blog_manager/blog_manager_page.php" class="nav-link mx-2 text-white">BLOG CONTENT</a></li>
            <li class="nav-item"><a href="user_manager/user_manager_page.php" <?php echo $admin; ?> class="nav-link mx-2 text-white">USERS MANAGER</a></li>
          </ul>


        <div class="align-items-center me-4 text-end">
          <form action="../login/PHP/login_query" method="post">
            <?php echo $logbtn; ?>

            <button type="button" class="btn btn-warning text-uppercase" > <?php echo $name; ?> </button>
          </form>

        </div>
      </div>
  </nav>
 <div class="row my-4">

  <div class="d-flex col-lg-9 mx-auto">

    <div class="text-center col-lg col-md col-sm-12 my-4">
        
        <a href="#" class="link-success"><h1 class="my-3">
          <i class="fas fa-envelope-open-text fa-4x"></i></h1>
          <p class="fs-1">Newsletter</p>
        </a>
      <div class="col">
        
      </div>
      
    </div>

    <div class="text-center  col-lg col-md col-sm-12 my-4">
       <a href="blog_manager/blog_manager_page.php" class="link-success"><h1 class="my-3">
         <h1 class="my-3">  <i class="fas fa-file-alt fa-4x"></i></h1>
          <p class="fs-1">Blog</p>
        </a>
     
    
    </div>

    <div class="<?php echo $admin; ?> text-center  col-lg col-md col-sm-12 my-4 ">
   
           <a href="user_manager/user_manager_page.php" class="link-success"><h1 class="my-3">
            <h1 class="my-3"><i class="fa fa-solid fa-users fa-4x"></i></h1>
          <p class="fs-1">Users</p>
        </a>

    </div>
  </div>
 </div>
  
    

  

  <!-- Copyright -->
<footer class="fixed-bottom"> 
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
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