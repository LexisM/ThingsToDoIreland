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
    <link rel="stylesheet" type="text/css" href="CSS/style.css"> 
    <link rel="stylesheet" type="text/css" href="CSS/homepage_style">


</head>
<body>
    <nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark py-0">
      

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand d-flex align-items-center ms-4 text-dark text-decoration-none " href="#">
          <img id="logo" src="IMG/logo.png" width="auto" height="65" class="d-inline-block align-top" alt="">
        </a>

        <div class="collapse navbar-collapse" id="toggleMobileMenu" >

          <ul class="navbar-nav  mx-auto  justify-content-center">
            <li class="nav-item"><a href="PHP/counties/c_dublin/co_dublin_index.php" class="nav-link mx-2 text-white">What to do Dublin</a></li>
            <li class="nav-item"><a href="PHP/counties/c_galway/co_galway_index.php" class="nav-link mx-2 text-white">What to do Galway</a></li>
            <li class="nav-item"><a href="PHP/counties/c_cork/co_cork_index.php" class="nav-link mx-2 text-white">What to do Cork</a></li>
           
           


            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle mx-2" href="#" id="submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               What to do Ireland
              </a>

                <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="submenu">
                  <li><a class="dropdown-item" href="PHP/counties/c_clare/co_clare_index.php">Co. Clare</a></li>
                  <li><a class="dropdown-item" href="PHP/counties/c_donegal/co_donegal_index.php">Co. Donegal</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
             <li class="nav-item"><a href="PHP/blog/blog.php" class="nav-link  text-white px-3 ">Blog</a></li>
          </ul>



      <div class="align-items-center me-4 text-end">
        <!-- <button type="button" class="btn btn-outline-light me-2">Login</button> -->

        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Subscribe
        </button>
      </div>


    </nav>
<!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-scrollable " >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <?php
  
                if(isset($_GET['msg_2'])){
                  $message = $_GET['msg_2'];

                  if(!empty($message)){
                    if($message == 'success'){
                      echo '
                      <div class=" alert alert-success alert-dismissible fade show" role="alert">
                         You have subscribed to our newsletter!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      ';
                    }else  if ($message == 'news_email_empty'){
                      echo '
                      <div class="  alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>ERROR</strong> Please input a email.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      ';
                    }else if($message == 'email_subscribed'){
                      echo '
                       <div class="  alert alert-warning alert-dismissible fade show" role="alert">
                         This email it has been subscribed already.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      ';
                    }
                }
              }
            ?> 
              <form action="PHP/functionality/actions/subscribe_newsletter_action.php" method="post">
                <!--Grid row-->
                <div class="row form-group">
                  <!--Grid column-->
                  <div class="col-md-12">
                    <p class="pt-2">
                      <strong>Sign up for our newsletter</strong>
                    </p>
                
                    <!-- Email input -->
                    <div class="form-outline form-white mb-4">
                      <input type="email" name="newsletter_email"  class="form-control" />
                      <label class="form-label" >Email address</label>
                    </div>
                  </div>
                    <button type="submit" name="news_sub_modal" class=" col-md-4 ms-auto btn btn-primary">Submit</button>
                  <!--Grid column-->
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-dark mb-4" data-bs-dismiss="modal">Close</button>
              
            </div>
          </div>
        </div>
      </div>

    <header class="mb-5">
   
      <video autoplay muted loop id="homepage_video">
        <source src="VIDEOS/beach.mp4" type="video/mp4">
      </video>
      

      <!-- Optional: some overlay text to describe the video -->
      <div class="content text-center">
        <div class="container ">
          <h1 class="mt-5 pb-5 header-text ">Things To Do: <span id="ie">Ireland</span></h1>
          <h3 class="fs-3 display-6">Ireland is a country full of hidden gems. While there are definitely many popular tourist attractions, each county and town has its own wonders to see. </h3>
          <hr>
          
      </div>
    </header>


    <div class="container-xl mb-5 " >
      <div class="row row-cols-1 row-cols-md-3 g-3">
        <div class="col">
          <div class="card">
            <img src="IMG/limerick.jpg" class="card-img-top" alt="Limerick Photo">
            <div class="card-body">
              <h3 class="card-title text-style-cormorant">Co. Limerick </h3>
              <p class="card-text text-style-inter">A limerick is a five-line verse, either smart or silly, popularised by Edward Lear in the 19th century – but there’s nothing silly about County Limerick. It contains variety, humour and history all in the same place.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="IMG/waterford.jpg" class="card-img-top" alt="Waterford photo">
            <div class="card-body">
              <h3 class="card-title text-style-cormorant">Co. Waterford</h3>
              <p class="card-text">Discover the perfect base for your trip to Waterford from city townhouses, to riverside hotels, country farms, heritage homes, camping pods, brilliant B&Bs and more.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card"> 
            <img src="IMG/wicklow.jpg" class="card-img-top" alt="Wicklow photo">
            <div class="card-body">
              <h3 class="card-title text-style-cormorant">Co. Wicklow</h3>
              <p class="card-text">Enjoy a quality of life unlike any other in beautiful County Wicklow. Experience our rich heritage, friendly communities, great schools and a wide range of cultural and sporting activities for all the family.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="IMG/sligo.jpg" class="card-img-top" alt="sligo photo">
            <div class="card-body">
              <h3 class="card-title text-style-cormorant">Co. Sligo </h3>
              <p class="card-text">Sligo, capital of the Northwest region, is one of Ireland’s largest towns. Sligo offers a unique destination with the dramatic backdrop of Benbulben, glimmering beaches, rolling green hills, and magical woodlands, with unsurpassed leisure activities and state-of-the-art business facilities, few places can compete as a destination for leisure or business.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="IMG/kerry.jpg" class="card-img-top" alt="kerry photo">
            <div class="card-body">
              <h3 class="card-title text-style-cormorant">Co. Kerry</h3>
              <p class="card-text">Once among Ireland's rural poor counties, Kerry has successfully marketed the natural beauty and magical atmosphere that the county has in abundance and is the most popular destinations outside of Dublin.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="IMG/wexford.jpg" class="card-img-top" alt="Wexford photo">
            <div class="card-body">
              <h3 class="card-title text-style-cormorant">Co. Wexford</h3>
              <p class="card-text">Endless beaches, a wide range of outdoor activities for the whole family, gorgeous walking trails and gardens, Wexford’s rich Norman and Viking heritage. All that makes Wexford the ideal staycation destination. Whether it’s a family, couple’s getaway, girly trip, or a solo escape, Wexford offers the best experiences during every season.</p>
            </div>
          </div>
        </div>
        
      </div>

      <div class="row mt-5">
        <iframe  height="499" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=1080&amp;height=499&amp;hl=en&amp;q=%20Galway+(Visit%20Ireland)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='https://embed-map.org/'>how to embed a google map into a website</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=775b51945b5818ff77d6de7c934423bfc0afbe3a'></script>


        <p class=" mt-5 fs-4 text-style-inter"> The goal of Things To Do is to provide explorers with a list of the endless landmarks and attractions that are scattered all over Ireland. For the locals, the road trippers, the hitchhikers and the backpackers, Things To Do Ireland helps you to find little-to-well-known places to visit. Passing through County Meath? Why not stop at Trim Castle - the biggest Norman castle in Ireland. Looking for a relaxing thing to do on a sunny day? Try heading over to Victor’s Way Sculpture Park in County Wicklow. </p>

        <p class="fs-4 text-style-inter">No matter where you’re headed there will always be something to see, do or eat, so select the county you’re visiting and take a look at what it has to offer.
        </p>

      </div>
      
    </div>

      
<footer class="bg-dark text-white">
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

  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Form -->
    <section class="my-5" id="newsletter_box">
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
  
    <!-- Section: Social media -->
  

  <!-- Copyright -->
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
    <script src="https://use.fontawesome.com/15c2f479c9.js"></script>

    
</body>

</html>

