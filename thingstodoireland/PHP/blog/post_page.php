
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

  <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark py-0">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand d-flex align-items-center ms-4 text-dark text-decoration-none " href="../../index.php">
      <img id="logo" src="../../IMG/logo.png" width="auto" height="65" class="d-inline-block align-top" alt="">
    </a>

    <div class="collapse navbar-collapse" id="toggleMobileMenu" >

      <ul class="navbar-nav  mx-auto  justify-content-center">
        <li class="nav-item"><a href="../counties/c_dublin/co_dublin_index.php" class="nav-link mx-2 text-white">What to do Dublin</a></li>
        <li class="nav-item"><a href="../counties/c_galway/co_galway_index.php" class="nav-link mx-2 text-white">What to do Galway</a></li>
        <li class="nav-item"><a href="../counties/c_cork/co_cork_index.php" class="nav-link mx-2 text-white">What to do Cork</a></li>
       
       


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mx-2 text-white" href="#" id="submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Things to do Ireland
          </a>

            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="submenu">
              <li><a class="dropdown-item active" href="../counties/c_clare/co_clare_index.php">Co. Clare</a></li>
              <li><a class="dropdown-item" href="../counties/c_donegal/co_donegal_index.php">Co. Donegal</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </li>
         <li class="nav-item"><a href="blog.php" class="nav-link  active px-3 ">Blog</a></li>
      </ul>



        <div class="align-items-center me-4 text-end">
        <a type="button" class="btn btn-outline-light me-2" href="../login/login.php">Login</a>
        <button type="button" class="btn btn-warning">Sign-up</button>
        </div>
    </div>
   
  </nav>



<?php
  include 'one_select_fun.php';

 

  $post_a = p_select('post',$_GET['post_id'],'yes')->fetch_assoc();


  $date = strtotime($post_a['created_at']);
  $user_id=$post_a['user_id'];
  $user = single_select('user', $user_id)->fetch_assoc();

  $post_title=single_select_d('post','yes');
?>
  

  

<main class="container mt-3 mb-5">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">WHAT TO DO IRELAND</h1>
      <p class="lead my-3">Subscribe to our newsletter to  get the newest post about new experiences and place to go. </p>
      
    </div>
  </div>


 <div class="row g-5">
  <div class="col-md-8">

      <h3 class="pb-4 mb-4 fst-italic border-bottom">
       <?php if ($post_a['title']) { echo $post_a['title']; }else{ echo "help"; } ?> 
     
      </h3>
      <p class="blog-post-meta"> <?php if ($post_a['created_at']) { echo date('l d / F / Y',$date); }else{ echo "help"; } ?>
      Written by:   <span href="#"> 
       <?php if ($user['username']) { echo $user['username']; }else{ echo "help"; } ?> </span></p>
      <article class="blog-post">
      
        <?php if ($post_a['content_html']) {echo htmlspecialchars_decode ($post_a['content_html']); }else{ echo "help";} ?>
        
        <div >
        <?php echo '<img class="img-thumbnail" src="assets/'.$post_a['image_name']. ' ">'; ?>
        </div>
     

      </article>

  </div>


  <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">

        <div class="p-4">
          <h4 class="fst-italic">Post</h4>
          <ol class="list-group list-group-flush">
            <?php  
           while ($titles= $post_title->fetch_assoc()) {
              echo "<li class='list-group-item'><a href='post_page.php?post_id=".$titles['id']."'>". $titles['title'] . "</a></li>";
            }
            ?>
         
          </ol>
        </div>

    </div>
  </div>


</main>

<footer class="bg-dark text-white">
  <div class="container">
   <?php
        
        if(isset($_GET['msg'])){
          $message = $_GET['msg'];

          if(!empty($message)){
            if($message == 'success'){
              echo '
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                 You have subscribed to our newsletter!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              ';
            }else  if ($message == 'news_email_empty'){
              echo '
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>ERROR</strong> Please input a email.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              ';
            }else if($message == 'email_subscribed'){
              echo '
               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                 This email it has been subscribed already.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              ';
            }
        }
      }
    ?>
<footer class="bg-dark text-white">
  <!-- Grid container -->
  <div class="container-fluid p-4 pb-0 ">
    <!-- Section: Form -->
    <section class="mt-5" id="newsletter_box">
      <div class="row ">
      <form action="PHP/functionality/actions/subscribe_newsletter_action.php" method="post">
        <!--Grid row-->
        <div class="d-flex ">
          <!--Grid column-->
          <div class="col-lg-6">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
        
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" name="newsletter_email"  class="form-control" />
              <label class="form-label" >Email address</label>
            </div>
          
          
            <!-- Submit button -->
            <button type="submit" href="#newsletter_box" name="news_sub" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>

          <!--Grid column-->
      </form>
      <div class="col-lg-6 text-center align-content-center">
      <!-- Facebook -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>
      </div>

    </section>
  </div>  
  </div>
    <!-- Section: Social media -->
  

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="#">Things to do Ireland.</a>
  </div>
  <!-- Copyright -->
</div>
</footer>
    
  


</body>
   

      

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>

