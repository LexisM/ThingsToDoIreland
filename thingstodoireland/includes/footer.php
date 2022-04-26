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
    
</body>

</html>
