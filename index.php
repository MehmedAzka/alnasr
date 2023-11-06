<?php
require 'function.php';

$user_id = $_SESSION['user_id'];
$showTotPri = $conn->query("SELECT COUNT(*) AS amount FROM cart WHERE user_id = $user_id && status = 'ordered'");
$result = $showTotPri->fetch_assoc();

$random_number = rand(100000, 999999);
// echo $random_number;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Al-Nasr | Umrah and Hajj Travel</title>

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-0">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img src="img/Logo (1).png" height="50" alt="MDB Logo" loading="lazy" />
      </a>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <!-- Left links -->
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item me-3">
            <a class="nav-link active text-warning" href="#">Home</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="product.php">Packages</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="cart.php">Cart
              <?php if ($showTotPri->num_rows <= 0) { ?>

              <?php } else { ?>
                <span class="badge badge-pill bg-danger ms-3">
                  <?= $result['amount'] ?>
                </span>
              <?php } ?>
            </a>
          </li>
        </ul>

        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- button -->
        <a href="logout.php" type="button" class="btn btn-warning shadow-0 text-capitalize"
          onclick="redirectToContactPage()">Login
          Out</a>


        <!-- Right elements -->
      </div>
      <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->

  <!-- jumbotron -->
  <div class="container pt-5 mb-9">
    <div class="row">
      <div class="col-md-6 mb-5">
        <span class="badge rounded-pill badge-info p-2 px-4 mb-4">No. 1 in Indonesia</span>
        <h1 class="display-5 fw-bold nasr">Make it easy for your <br> Umrah worship with <br> Al Nasr Travel</h1>
        <p class="fs-5 mt-2">Facilitate your Umrah pilgrimage with us, we already have hundreds of thousands of
          customers, you can go for <br> Umrah to Mecca and Medina</p>
        <button id="contact" type="button" class="btn btn-warning btn-lg mt-2 text-capitalize">Contact Us</button>
      </div>
      <div class="col-md-6">
        <img class="mt-0" src="img/Image Hero.png" alt="">
      </div>
    </div>
  </div>
  <!-- end jumbotron -->

  <!-- kelebihan -->
  <div class="container-fluid kelebihan w-100 px-5 mt-5">
    <div class="row">
      <div class="col-md-5 mb-5 d-flex justify-content-end">
        <img class="img-fluid" src="img/Group 1.png" alt="">
      </div>
      <div class="col-md-7 fs-5 px-5 d-flex flex-column">
        <h1 class="fw-bold">A Wonderful Agency To <br> Fulfill your Dreams</h1>
        <p class="mt-3">The Hajj and Umrah pilgrimages are smooth, the heart is <br> clean. we have been trusted since
          2006 and have obtained <br> a license from SAUDI ARABIA to become this travel agency.</p>
        <p class="mb-3 mt-3">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="36" height="36" rx="10" fill="#C1FFFA" />
            <path
              d="M8.5 25.0001H27.5V27.0001H8.5V25.0001ZM28.07 15.6401C27.86 14.8401 27.03 14.3601 26.23 14.5801L20.92 16.0001L14 9.57007L12.09 10.0801L16.23 17.2501L11.26 18.5801L9.29 17.0401L7.84 17.4301L9.66 20.5901L10.43 21.9201L12.03 21.5001L17.34 20.0701L21.69 18.9101L27 17.5001C27.81 17.2601 28.28 16.4401 28.07 15.6401Z"
              fill="#1DA599" />
          </svg> &nbsp; Flight Jakarta Saudi - Saudi Jakarta
        </p>
        <p class="mb-3">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="36" height="36" rx="10" fill="#C1FFFA" />
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M20.008 25.003L20.014 23C20.014 22.7341 20.1196 22.4791 20.3076 22.2911C20.4956 22.1031 20.7506 21.9975 21.0165 21.9975C21.2824 21.9975 21.5374 22.1031 21.7254 22.2911C21.9134 22.4791 22.019 22.7341 22.019 23V24.977C22.019 25.458 22.019 25.699 22.173 25.847C22.328 25.994 22.563 25.984 23.036 25.964C24.899 25.885 26.044 25.634 26.85 24.828C27.66 24.022 27.911 22.877 27.99 21.011C28.005 20.641 28.013 20.455 27.944 20.332C27.874 20.209 27.599 20.055 27.047 19.746C26.7361 19.5727 26.4771 19.3194 26.2968 19.0125C26.1165 18.7055 26.0214 18.356 26.0214 18C26.0214 17.644 26.1165 17.2945 26.2968 16.9875C26.4771 16.6806 26.7361 16.4273 27.047 16.254C27.599 15.946 27.875 15.791 27.944 15.668C28.013 15.545 28.005 15.36 27.989 14.989C27.911 13.123 27.659 11.979 26.85 11.172C25.973 10.296 24.695 10.075 22.528 10.019C22.4616 10.0173 22.3956 10.0288 22.3338 10.053C22.272 10.0772 22.2157 10.1136 22.1681 10.1599C22.1206 10.2062 22.0828 10.2616 22.057 10.3228C22.0312 10.3839 22.018 10.4496 22.018 10.516V13C22.018 13.2659 21.9124 13.5209 21.7244 13.7089C21.5364 13.8969 21.2814 14.0025 21.0155 14.0025C20.7496 14.0025 20.4946 13.8969 20.3066 13.7089C20.1186 13.5209 20.013 13.2659 20.013 13L20.006 10.499C20.0057 10.3666 19.9529 10.2396 19.8592 10.1461C19.7655 10.0525 19.6384 10 19.506 10H15.994C12.214 10 10.324 10 9.149 11.172C8.339 11.978 8.088 13.123 8.009 14.989C7.994 15.359 7.986 15.545 8.055 15.668C8.125 15.791 8.4 15.946 8.952 16.254C9.26293 16.4273 9.52194 16.6806 9.70224 16.9875C9.88255 17.2945 9.97761 17.644 9.97761 18C9.97761 18.356 9.88255 18.7055 9.70224 19.0125C9.52194 19.3194 9.26293 19.5727 8.952 19.746C8.4 20.055 8.124 20.209 8.055 20.332C7.986 20.455 7.994 20.64 8.01 21.01C8.088 22.877 8.34 24.022 9.149 24.828C10.324 26 12.214 26 15.995 26H19.005C19.477 26 19.712 26 19.859 25.854C20.006 25.708 20.007 25.474 20.008 25.003ZM22.018 19V17C22.018 16.7341 21.9124 16.4791 21.7244 16.2911C21.5364 16.1031 21.2814 15.9975 21.0155 15.9975C20.7496 15.9975 20.4946 16.1031 20.3066 16.2911C20.1186 16.4791 20.013 16.7341 20.013 17V19C20.013 19.266 20.1187 19.5211 20.3068 19.7092C20.4949 19.8973 20.75 20.003 21.016 20.003C21.282 20.003 21.5371 19.8973 21.7252 19.7092C21.9133 19.5211 22.018 19.266 22.018 19Z"
              fill="#1DA599" />
          </svg> &nbsp; Tickets are included in the cost
        </p>
        <p class="mb-3">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="36" height="36" rx="10" fill="#C1FFFA" />
            <path
              d="M23 25H25V17H19V25H21V19H23V25ZM9 25V10C9 9.73478 9.10536 9.48043 9.29289 9.29289C9.48043 9.10536 9.73478 9 10 9H24C24.2652 9 24.5196 9.10536 24.7071 9.29289C24.8946 9.48043 25 9.73478 25 10V15H27V25H28V27H8V25H9ZM13 17V19H15V17H13ZM13 21V23H15V21H13ZM13 13V15H15V13H13Z"
              fill="#1DA599" />
          </svg> &nbsp; Comfortable hotel with a rating of 4
        </p>
        <p class="mb-3">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="36" height="36" rx="10" fill="#C1FFFA" />
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M11.756 12.342C10.344 11.56 8.733 10.93 6.931 10.494L6.99 10.144H14.397C15.394 10.18 16.201 10.499 16.479 11.566L18.089 19.309V19.31L18.569 21.645L23.066 10.154H27.931L20.7 26.974L15.84 26.979L11.756 12.342Z"
              fill="#1DA599" />
          </svg> &nbsp; We cover the Visa Fee and it's Included
        </p>
        <div class="mt-4">
          <button type="button" class="btn btn-warning btn-lg text-capitalize me-2 me-md-3">Learn More</button>
          <button type="button" class="btn btn-outline-warning btn-lg text-capitalize"
            data-mdb-ripple-color="dark">Contact Us</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end kelebihan -->

  <!-- airways -->
  <div class="container airways mt-5 py-5">
    <div class="row">
      <div class="col-md-3">
        <h3 class="fw-bold">Airways <br> Accomadation</h3>
        <p class="mb-2">We cooperate with several <br> airlines for Umrah and Hajj</p>
        <span
          class="badge badge-star badge-card rounded-pill badge-primary d-flex justify-content-center align-items-center py-2 px-3 mt-0">
          <img class="star" src="img/star.png" alt=""> &nbsp;
          5.0 Rating
        </span>
      </div>
      <div class="col-md-9 mt-5">
        <div class="marquee">
          <ul class="marquee-content">
            <img class="me-5 garuda" src="img/air1.png" alt="">
            <img class="me-5 lion" src="img/air2.png" alt="">
            <img class="me-5 saudi" src="img/air3.png" alt="">
            <img class="me-5 emirates" src="img/air4.png" alt="">
            <img class="me-5 qatar" src="img/air5.png" alt="">
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- end airways -->

  <!-- fasilitas -->
  <div class="container-fluid py-5 fasilitas mt-5">
    <div class="row mb-4">
      <div class="col-md-12 text-center">
        <h1 class="fw-bold">Facilities We Provide For You</h1>
        <p class="fs-5">We provide comfort for our customers, with the various <br> facilities we provide that we
          provide</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="row row-cols-1 row-cols-md-4 g-4 px-5">

          <div class="col">
            <div class="card">
              <div class="card-body d-flex flex-row px-3">
                <img class="me-3" src="img/security.png" alt="">
                <div class="main">
                  <h5 class="card-title">Safety & Security</h5>
                  <p class="card-text">We take care of your security in 24 hours</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="card-body d-flex flex-row px-3">
                <img class="me-3" src="img/conselling.png" alt="">
                <div class="main">
                  <h5 class="card-title">Conseling</h5>
                  <p class="card-text">Provide counseling to stay fit spiritually and religius</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="card-body d-flex flex-row px-3">
                <img class="me-3" src="img/vehicle.png" alt="">
                <div class="main">
                  <h5 class="card-title">Vehicle In Saudi</h5>
                  <p class="card-text">Bus and Car Vehicles While in Saudi</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="card-body d-flex flex-row px-3">
                <img class="me-3" src="img/health.png" alt="">
                <div class="main">
                  <h5 class="card-title">Health In Saudi</h5>
                  <p class="card-text">Free Health Facilities for every customer</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="card-body d-flex flex-row px-3">
                <img class="me-3" src="img/hotel.png" alt="">
                <div class="main">
                  <h5 class="card-title">Hostel Rate 5</h5>
                  <p class="card-text">5 star hotel accommodation every customer</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="card-body d-flex flex-row px-3">
                <img class="me-3" src="img/food.png" alt="">
                <div class="main">
                  <h5 class="card-title">Food & Drink</h5>
                  <p class="card-text">Provide food and drinks while in Saudi</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="card-body d-flex flex-row px-3">
                <img class="me-3" src="img/member.png" alt="">
                <div class="main">
                  <h5 class="card-title">Membership</h5>
                  <p class="card-text">Obtain a membership card for each customer</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <div class="card-body d-flex flex-row px-3">
                <img class="me-3" src="img/vaccine.png" alt="">
                <div class="main">
                  <h5 class="card-title">Vaccine</h5>
                  <p class="card-text">Free meningitis vaccine for all customers</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- end fasilitas -->

  <!-- testimoni -->
  <div class="container py-5 my-4 px-5 px-md-0 testi">
    <div class="row">
      <div class="col-md-12 text-center mb-4">
        <div class="main">
          <h1 class="fw-bolder">Testimonials from our <br> customers</h1>
          <p class="fs-5">We have 100.000+ customers, here are our customer <br> testimonials</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <section>
          <div class="row text-center">
            <div class="col-md-12">
              <!-- Carousel wrapper -->
              <div id="carouselBasicExample" class="carousel slide carousel-dark" data-mdb-ride="carousel">
                <!-- Inner -->
                <div class="carousel-inner">
                  <!-- Single item -->
                  <div class="carousel-item active">
                    <p class="lead font-italic mx-4 mx-md-5">
                      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
                      numquam iure provident voluptate esse quasi, voluptas nostrum quisquam!"
                    </p>
                    <div class="mt-5 mb-4">
                      <img src="img/leo.jpg" class="rounded-circle img-fluid shadow-1-strong" alt="smaple image"
                        width="100" height="100" />
                    </div>
                    <p class="text-muted mb-0">- Leonardo DiCaprio</p>
                  </div>

                  <!-- Single item -->
                  <div class="carousel-item">
                    <p class="lead font-italic mx-4 mx-md-5">
                      "Neque cupiditate assumenda in maiores repudiandae mollitia adipisci maiores
                      repudiandae mollitia consectetur adipisicing architecto elit sed adipiscing
                      elit."
                    </p>
                    <div class="mt-5 mb-4">
                      <img src="img/thor.jpeg" class="rounded-circle img-fluid shadow-1-strong" alt="smaple image"
                        width="100" height="100" />
                    </div>
                    <p class="text-muted mb-0">- Chris Hemsworth</p>
                  </div>

                  <!-- Single item -->
                  <div class="carousel-item">
                    <p class="lead font-italic mx-4 mx-md-5">
                      "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                      dolore eu fugiat nulla pariatur est laborum neque cupiditate assumenda in
                      maiores."
                    </p>
                    <div class="mt-5 mb-4">
                      <img src="img/superman.jpg" class="rounded-circle img-fluid shadow-1-strong" alt="smaple image"
                        width="100" height="100" />
                    </div>
                    <p class="text-muted mb-0">- Henry Cavill</p>
                  </div>
                </div>
                <!-- Inner -->

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample"
                  data-mdb-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample"
                  data-mdb-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <!-- Carousel wrapper -->
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- end testimoni -->

  <!-- Gallery -->
  <div class="container-fluid fasilitas gallery pt-5" style="padding-bottom: 10%;">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="fw-bold">Gallery Footage In Saudi Arabia</h1>
        <p class="fs-5">We provide comfort for our customers, with the various <br> facilities we provide that we
          provide</p>
      </div>
    </div>
    <div class="row ms-0 ms-md-5 px-5 d-flex justify-content-center mt-5">
      <div class="col-md-5">
        <img class="img-fluid rounded" style="height: 100%;" src="img/gal5.jpg" alt="">
      </div>
      <div class="col-md-7 pe-0 mt-4 mt-md-0">
        <img class="img-fluid rounded me-4" style="height: 48%; width: 40%; object-fit: cover;" src="img/gal1.jpg"
          alt="">
        <img class="img-fluid rounded" style="height: 48%; width: 40%; object-fit: cover;" src="img/gal2.jpg" alt="">
        <img class="img-fluid rounded mt-4 me-4" style="height: 48%; width: 40%; object-fit: cover;" src="img/gal3.jpg"
          alt="">
        <img class="img-fluid rounded mt-4" style="height: 48%; width: 40%; object-fit: cover;" src="img/gal4.jpg"
          alt="">
      </div>
    </div>
    <div class="row px-5 pt-4 d-flex justify-content-center">
      <div class="col-md-10 d-flex justify-content-end">
        <!-- Button trigger modal -->
        <button type="button" class="btn modal-btn text-capitalize px-3 py-3" data-mdb-toggle="modal"
          data-mdb-target="#exampleModal"> <img class="me-2" src="img/package.png" height="18" alt="">
          Show all photos
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">...</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end Gallery -->

  <!-- Footer -->
  <footer class="text-center text-lg-start text-muted" style="background-color: #1DA599 ;">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <img src="img/Logo Text.png" alt="">
            </h6>
            <p class="p">
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4  p">
              Package Hajj
            </h6>
            <p>
              <a href="#!" class="text-reset">Al Nasr Hajj Silver</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Al Nasr Hajj Glod</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Al Nasr Hajj Priority</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4 p">
              Package Umrah
            </h6>
            <p>
              <a href="#!" class="text-reset">Al Nasr Umrah Bronze</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Al Nasr Umrah Silver</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Al Nasr Umrah Glod</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Al Nasr Umrah Priority</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4 p">Contact</h6>
            <p class="p"><i class="fas fa-home me-3 text-secondary"></i> Pesantren Al-Nasr, Jalan Pahlawan No. 123,
              Kecamatan Sukabumi, Kota Sukabumi, Jawa Barat 43121, Indonesia</p>
            <p class="p"><i class="fas fa-envelope me-3 text-secondary"></i> info@pesantrenalnasr.com</p>
            <p class="p"><i class="fas fa-phone me-3 text-secondary"></i> +62 123 456 7890</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
      © 2023 Copyright:
      <a class="text-reset fw-bold" href="">al-nasr.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->


  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>

  <!-- JS -->
  <script>
    // MARQUEE
    const root = document.documentElement;
    const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
    const marqueeContent = document.querySelector("ul.marquee-content");

    root.style.setProperty("--marquee-elements", marqueeContent.children.length);

    for (let i = 0; i < marqueeElementsDisplayed; i++) {
      marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
    }
  </script>



  <script>
    // Temukan elemen ikon keranjang dengan ID "cart-icon"
    var cartIcon = document.getElementById("cart-icon");

    // Tambahkan event listener untuk mengarahkan ke "cart.php" saat ikon diklik
    cartIcon.addEventListener("click", function () {
      window.location.href = "cart.php";
    });

    // Temukan elemen ikon keranjang dengan ID "cart-icon"
    var cartIcon = document.getElementById("contact");

    // Tambahkan event listener untuk mengarahkan ke "cart.php" saat ikon diklik
    cartIcon.addEventListener("click", function () {
      window.location.href = "contact.php";
    });
  </script>


  <script>
    $(document).ready(function () {
      $('.carousell').slick({
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        centerMode: true,
        responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            // centerMode: true,

          }

        }, {
          breakpoint: 800,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            dots: true,
            infinite: true,

          }
        }, {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
          }
        }]
      });
    });
  </script>
</body>

</html>