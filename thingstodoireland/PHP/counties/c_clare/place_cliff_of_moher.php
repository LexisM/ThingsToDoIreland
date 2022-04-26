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
    <link rel="stylesheet" type="text/css" href="../CSS/style_co_index.css">



</head>
<body>

  <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark py-0">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand d-flex align-items-center ms-4 text-dark text-decoration-none " href="../../../index.php">
      <img id="logo" src="../../../IMG/logo.png" width="auto" height="65" class="d-inline-block align-top" alt="">
    </a>

    <div class="collapse navbar-collapse" id="toggleMobileMenu" >

      <ul class="navbar-nav  mx-auto  justify-content-center">
        <li class="nav-item"><a href="../c_dublin/co_dublin_index.php" class="nav-link mx-2 text-white">What to do Dublin</a></li>
        <li class="nav-item"><a href="../c_galway/co_galway_index.php" class="nav-link mx-2 text-white">What to do Galway</a></li>
        <li class="nav-item"><a href="../c_cork/co_cork_index.php" class="nav-link mx-2 text-white">What to do Cork</a></li>
       
       


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mx-2" href="#" id="submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Things to do Ireland
          </a>

            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="submenu">
              <li><a class="dropdown-item active" href="co_clare_index.php">Co. Clare</a></li>
              <li><a class="dropdown-item" href="../c_donegal/co_donegal_index.php">Co. Donegal</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </li>
         <li class="nav-item"><a href="../../blog/blog.php" class="nav-link  text-white px-3 ">Blog</a></li>
      </ul>



        <div class="align-items-center me-4 text-end">
          <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Subscribe
        </button>
        </div>
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
              <form action="../../functionality/actions/subscribe_newsletter_action.php" method="post">
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

<div class="px-4 pt-5 my-5 text-center">

  <h1 class="fw-bold text-uppercase text-style-cormorant">Cliff of moher</h1>
  <div class="col-lg-6 mx-auto">
    <p class="fs-5 text mb-4">Easily the most well-known natural wonder in Ireland is the beautiful Cliffs of Moher on the West Coast of Ireland. The 214m-high cliffs line the North Atlantic Ocean is one of the most visited places in Ireland. 
    </p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
     
    </div>
  </div>
  <div class="overflow-hidden" style="max-height: 30vh;">
    <div class="container px-5">
      <img src="img/cliff.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="100%" height="500" loading="lazy">
    </div>
  </div>
</div>

<div class="container-lg mt-5">
  <div class="row row-cols-1 row-cols-md-3 g-3 my-4">
    <div class="col-lg-6 col-md-6 col-sm-1 mb-4">
      <p class="fs-5 text">It is widely agreed that the cliffs formed some 315 million years ago. When visiting keep an eye out to look at the numerous layers that are quite visible in the cliffs, these layers include sandstone, siltstone and shale. </p>

      <h2> Best time to visit </h2>
      <p class="fs-5 text"> We think that the best time to visit the Cliffs of Moher is between April and June in the morning. Why? Generally speaking, the weather is much better in early spring than Autumn and Winter. Although it may not be as warm as Summer, it offers sunshine about the same amount as Summertime. Tourist season in Ireland starts in Mid-May and picks up by Mid-June. Visiting in early April will offer odds for good weather and smaller crowds. 
      </p>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-1 mb-4">
      <img class="img-fluid border rounded-1" src="img/cliff-2.jpg" width="100%" height="500" loading="lazy">
    </div>

  </div>  
  <div class="row row-cols-1 row-cols-md-3 g-3 my-4">
    
    <div class="col-lg-8 col-md-6 col-sm-1 mb-2 p-3">
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ZUpE51IoAHQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-1 mb-2">
      <h2 class="text-center">Facts</h2>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><i class="fa fa-solid fa-check fa-2x" style="color:#16a085;"></i> The Cliffs of Moher date back about 300 million years. </li>
        <li  class="list-group-item"><i class="fa fa-solid fa-check fa-2x" style="color:#16a085;"></i>According to Irish legend, the witch of the sea, Mal of Malbay chased her love across the country before dying at the cliffs. </li>
        <li  class="list-group-item"><i class="fa fa-solid fa-check fa-2x" style="color:#16a085;"></i>O’Brien’s Tower, offers the highest vantage point of the cliffs. </li>
        <li  class="list-group-item"><i class="fa fa-solid fa-check fa-2x" style="color:#16a085;"></i>The Cliffs of Moher make an appearance in Harry Potter and the Half Blood Prince </li>
        <li  class="list-group-item"><i class="fa fa-solid fa-check fa-2x" style="color:#16a085;"></i>There are around 30,000 birds living on the cliffs during peak season at the cliffs, including over 20 species. </li>
      </ul>
    </div>
  </div>  

  <div class="row row-cols-1 row-cols-md-3 g-4 my-4">
    
    <div class="col-lg-2 col-md-6 col-sm-1 ml-4 align-middle  ">
      <h1 class="text-center lh-lg text-uppercase fw-light  ">Important things to remember:</h1>
    </div>
    <div class="col-lg-10 col-md-6 col-sm-1  px-5  ">
     <ul class="list-group list-group-flush">
        <li class="list-group-item">
          
          <p ><i class="fa fa-solid fa-info fa-2x px-2" style="color:#c0392b;"></i>The closest bigger-city to the Cliffs of Moher is Galway City, about 1.5 hours by car. If you’re traveling without a car, the cliffs are accessible by public bus, however the journey there includes 2 transfers and takes around 2.5 hours by public transportation. A more favourable option would be to use a local tour company that will take you to the cliffs for a half or full day visit for around 60 euros. Companies that offer tours include <a href="https://www.lallytours.com/en/galway/galway-cliffs-of-moher-tours%5D%20and%20Galway%20Tour%20Company%20%5Bhttps://galwaytourcompany.com/tours/cliffs-of-moher-the-burren/">Lally Tours</a> </p>
          
        </li>

        <li  class="list-group-item">
          <i class="fa fa-solid fa-info fa-2x px-2" style="color:#c0392b;"></i>
          If you can, plan to stay at the Cliffs for at least 3 hours. Upon arrival, you will enter through the tourist entrance, here there is entrance to a small museum, gift shop and toilets. You can choose to go right or left on the cliffs, both ways are beautiful but span a long ways. The “full hike” of the cliffs is actually around 25 kilometres, but any length walk alone the top allows visitors to see its beauty. If you’re not on a time crunch and are open to staying a bit longer, check <a href="https://www.alltrails.com/trail/ireland/county-clare/cliffs-of-moher-and-doolin"> AllTrails  </a> for its description and map of the specific hike. 

        </li>

        <li  class="list-group-item">
          <i class="fa fa-solid fa-info fa-2x px-2" style="color:#c0392b;"></i>
          It’s Ireland, it will probably rain. Unfortunately, most of the time, Ireland is quite rainy, especially on the west coast. Don’t trust the sky when you wake up in the morning or even when you get in the car to head over to the cliffs. Make sure to layer clothes to stay warm, bring a raincoat to stay dry and appropriate shoes. There is a small tourist area that can offer shelter from the elements, but can get quite crowded. Ensure to take a look at the weather forecast before leaving, if there is any wind warning it is best not to go as it can be quite dangerous. 
 
        </li>
        <li  class="list-group-item">
          <i class="fa fa-solid fa-info fa-2x px-2" style="color:#c0392b;"></i>
         Consider spending the night in Doolin, a nearby, charming coastal town. The small town offers restaurants and shops geared toward tourists. About 10 minutes away by car from the cliffs themselves. Spend the night in Doolin and arrive early to the cliffs to beat the rush of tourists. 

        </li>

        
      </ul>
    </div>
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
      <form action="../../functionality/actions/subscribe_newsletter_action.php" method="post">
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
