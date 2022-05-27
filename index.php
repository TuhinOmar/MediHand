

<?php
//$conn = mysqli_connect('sql104.epizy.com', 'epiz_31819405', 'GjFLNzPTk1cs', 'epiz_31819405_medihand');

if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $reqtype = $_POST['reqtype'];

    if(!empty($name) && !empty($contact) && !empty($city) && !empty($reqtype)){
        $query = "INSERT INTO request(fname, contact, city, reqtype) VALUES('$name', '$contact', '$city', '$reqtype')";
        $createquery = mysqli_query($conn, $query);
    }else{
        echo "field should not be empty";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediHand-a medical volunteering platform</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<!--Header section is started here that contains navigation bar and slider / carousal -->






    <header class="container" id="home">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 border-bottom fixed-top">
            <div class="container-fluid">
            <a class="navbar-brand fs-2" href="index.php">Medi<span class="text-primary">Hand</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5 text-center">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="login.php">login/register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="about.html">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="gallery.html">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="team.html">Our Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="contact.html">Contact</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/banner55.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                  <h5>Let's serve the huminity...</h5>
                  <p>Helping underpriviledged people is the greatest patriotism.</p>
                </div>
              </div>
              
              
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

    </header>






<!--request zone-->

<section class="request py-5 btn-light" id="request">
  <div class="container">
    <div class="text-center my-5">
      <h1>Need <span class="text-primary">help?</span></h1>
      <hr class="w-25 m-auto">
    </div>

    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 col-12" data-aos="zoom-in-left" data-aos-offse="200">
        <p class="p-2">
          If you need emergency medical service(s), please feel free to request us. Our
          volunteers are ready to serve you to your doorstep.
        </p>
        <img src="img/banner77.jpg">
      </div>


    

      <div class="py-5 col-sm-12 col-md-6 col-lg-6 col-12" data-aos="zoom-in-left" data-aos-offse="200">
        <p><span class="fw-bold">Feel free to seek our assistance</span></p>


        
        <form action="" method="POST">

        <input type="text" class="form-control mb-2" placeholder="Name" aria-label="First name" name="name">
        <input type="text" class="form-control mb-2" placeholder="Contact" aria-label="First name" name="contact">
        <select id="inputState" class="form-select mb-2" name="city">
          <option selected>Choose your city</option>
          <option value="City">City</option>
          <option value="Uttara">Uttara</option>
          <option value="Rampura">Rampura</option>
          <option value="Badda">Badda</option>
          <option value="Dhanmondi">Dhanmondi</option>
          <option value="Chandpur">Chandpur</option>
          <option value="Cumilla">Cumilla</option>
          <option value="Ambarkhana">Ambarkhana</option>
        </select>

        <select class="form-select" aria-label="Default select example" name="reqtype">
          <option selected>Select an assistence</option>
          <option value="Ambulance">Ambulance</option>
          <option value="Oxygen cylinder">Oxygen cylinder</option>
          <option value="Fast aid">Fast aid</option>
          <option value="Nutritional support">Nutritional support</option>
          <option value="Emergency medicine">Emergency medicine</option>
          <option value="Primary treatment">Primary treatment</option>
        </select>
        <button type="submit" class="btn btn-success my-4" name="btn">Request</button>

        </form>

      </div>


    

    </div>


  </div>
</section>






<!--footer section-->






<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #3f51b5">
    <!-- Grid container -->
    <div class="container">
      <!-- Section: Links -->
      <section class="mt-5">
        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5">
          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">About us</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">Services</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">Awards</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">Help</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">Contact</a>
            </h6>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-5" />

      <!-- Section: Text -->
      <section class="mb-5">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
              distinctio earum repellat quaerat voluptatibus placeat nam,
              commodi optio pariatur est quia magnam eum harum corrupti
              dicta, aliquam sequi voluptate quas.
            </p>
          </div>
        </div>
      </section>
      <!-- Section: Text -->

      <!-- Section: Social -->
      <section class="text-center mb-5">
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </section>
      <!-- Section: Social -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/"
         >sst, BOU</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->










<!--Javascript library tagging-->







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>