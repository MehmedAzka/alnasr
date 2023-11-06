<?php
require 'function.php';

$sql = "SELECT * FROM catalog LIMIT 6";
$all_product = $conn->query($sql);

$user_id = $_SESSION['user_id'];
$showTotPri = $conn->query("SELECT COUNT(*) AS amount FROM cart WHERE user_id = $user_id && status = 'ordered'");
$result = $showTotPri->fetch_assoc();

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Al-Nasr | Umrah and Hajj Travel</title>

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">

  <style>
    .link-secondary,
    .text-secondary,
    .text-reset,
    .p-4,
    .p,
    .h6 {
      color: white !important;
    }
  </style>

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
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link active text-warning" href="product.php">Packages</a>
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
        <button type="button" class="btn btn-warning shadow-0 text-capitalize" onclick="redirectToContactPage()">Contact
          Us</button>

        <!-- Right elements -->
      </div>
      <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->

  <!-- paket -->

  <div class="container paket">
    <div class="row d-flex justify-content-center mb-3">
      <div class="col-md-6 text-center">
        <h1 class="fw-bold">Al Nasr Special Umrah and Hajj Packages</h1>
        <p class="fs-5">Choose your package according to your needs, guaranteed cheap and complete</p>
      </div>
    </div>


    <div class="row">
      <div class="col-md-12"></div>
      <div class="row row-cols-1 row-cols-md-3 g-5 mb-12">

        <?php
        while ($row = mysqli_fetch_assoc($all_product)) {
          if ($row !== null && isset($row["image_url"], $row["product_name"], $row["price"], $row["description"], $row["class"])) {

            ?>
            <div class="col">
              <div class="card shadow">
                <div class="pt-3 pe-3 ps-3">
                  <img src="<?php echo $row["image_url"]; ?>" class="card-img-top" alt="Hollywood Sign on The Hill" />
                </div>
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <p class="pangkat text-warning fw-bold mt-2">
                      <?php echo $row["class"]; ?>
                    </p>
                    <span class="badge rounded-pill h-50 px-3 py-2 badge-info badge-card badge-card">Best Seller</span>
                  </div>
                  <p class="card-title fw-bold">
                    <?php echo $row["product_name"]; ?>
                  </p>
                  <p class="card-text fw-bold">$
                    <?php echo $row["price"]; ?> / <strong style="color: #1DA599;">person</strong>
                  </p>
                  <div class="d-flex">
                    <p class="me-3">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="36" height="36" rx="10" fill="#C1FFFA" />
                        <path
                          d="M8.5 25.0001H27.5V27.0001H8.5V25.0001ZM28.07 15.6401C27.86 14.8401 27.03 14.3601 26.23 14.5801L20.92 16.0001L14 9.57007L12.09 10.0801L16.23 17.2501L11.26 18.5801L9.29 17.0401L7.84 17.4301L9.66 20.5901L10.43 21.9201L12.03 21.5001L17.34 20.0701L21.69 18.9101L27 17.5001C27.81 17.2601 28.28 16.4401 28.07 15.6401Z"
                          fill="#1DA599" />
                      </svg>
                    </p>
                    <p class="me-3">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="36" height="36" rx="10" fill="#C1FFFA" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M20.008 25.003L20.014 23C20.014 22.7341 20.1196 22.4791 20.3076 22.2911C20.4956 22.1031 20.7506 21.9975 21.0165 21.9975C21.2824 21.9975 21.5374 22.1031 21.7254 22.2911C21.9134 22.4791 22.019 22.7341 22.019 23V24.977C22.019 25.458 22.019 25.699 22.173 25.847C22.328 25.994 22.563 25.984 23.036 25.964C24.899 25.885 26.044 25.634 26.85 24.828C27.66 24.022 27.911 22.877 27.99 21.011C28.005 20.641 28.013 20.455 27.944 20.332C27.874 20.209 27.599 20.055 27.047 19.746C26.7361 19.5727 26.4771 19.3194 26.2968 19.0125C26.1165 18.7055 26.0214 18.356 26.0214 18C26.0214 17.644 26.1165 17.2945 26.2968 16.9875C26.4771 16.6806 26.7361 16.4273 27.047 16.254C27.599 15.946 27.875 15.791 27.944 15.668C28.013 15.545 28.005 15.36 27.989 14.989C27.911 13.123 27.659 11.979 26.85 11.172C25.973 10.296 24.695 10.075 22.528 10.019C22.4616 10.0173 22.3956 10.0288 22.3338 10.053C22.272 10.0772 22.2157 10.1136 22.1681 10.1599C22.1206 10.2062 22.0828 10.2616 22.057 10.3228C22.0312 10.3839 22.018 10.4496 22.018 10.516V13C22.018 13.2659 21.9124 13.5209 21.7244 13.7089C21.5364 13.8969 21.2814 14.0025 21.0155 14.0025C20.7496 14.0025 20.4946 13.8969 20.3066 13.7089C20.1186 13.5209 20.013 13.2659 20.013 13L20.006 10.499C20.0057 10.3666 19.9529 10.2396 19.8592 10.1461C19.7655 10.0525 19.6384 10 19.506 10H15.994C12.214 10 10.324 10 9.149 11.172C8.339 11.978 8.088 13.123 8.009 14.989C7.994 15.359 7.986 15.545 8.055 15.668C8.125 15.791 8.4 15.946 8.952 16.254C9.26293 16.4273 9.52194 16.6806 9.70224 16.9875C9.88255 17.2945 9.97761 17.644 9.97761 18C9.97761 18.356 9.88255 18.7055 9.70224 19.0125C9.52194 19.3194 9.26293 19.5727 8.952 19.746C8.4 20.055 8.124 20.209 8.055 20.332C7.986 20.455 7.994 20.64 8.01 21.01C8.088 22.877 8.34 24.022 9.149 24.828C10.324 26 12.214 26 15.995 26H19.005C19.477 26 19.712 26 19.859 25.854C20.006 25.708 20.007 25.474 20.008 25.003ZM22.018 19V17C22.018 16.7341 21.9124 16.4791 21.7244 16.2911C21.5364 16.1031 21.2814 15.9975 21.0155 15.9975C20.7496 15.9975 20.4946 16.1031 20.3066 16.2911C20.1186 16.4791 20.013 16.7341 20.013 17V19C20.013 19.266 20.1187 19.5211 20.3068 19.7092C20.4949 19.8973 20.75 20.003 21.016 20.003C21.282 20.003 21.5371 19.8973 21.7252 19.7092C21.9133 19.5211 22.018 19.266 22.018 19Z"
                          fill="#1DA599" />
                      </svg>
                    </p>
                    <p class="me-3">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="36" height="36" rx="10" fill="#C1FFFA" />
                        <path
                          d="M23 25H25V17H19V25H21V19H23V25ZM9 25V10C9 9.73478 9.10536 9.48043 9.29289 9.29289C9.48043 9.10536 9.73478 9 10 9H24C24.2652 9 24.5196 9.10536 24.7071 9.29289C24.8946 9.48043 25 9.73478 25 10V15H27V25H28V27H8V25H9ZM13 17V19H15V17H13ZM13 21V23H15V21H13ZM13 13V15H15V13H13Z"
                          fill="#1DA599" />
                      </svg>
                    </p>
                    <p class="me-3">
                      <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="36" height="36" rx="10" fill="#C1FFFA" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M11.756 12.342C10.344 11.56 8.733 10.93 6.931 10.494L6.99 10.144H14.397C15.394 10.18 16.201 10.499 16.479 11.566L18.089 19.309V19.31L18.569 21.645L23.066 10.154H27.931L20.7 26.974L15.84 26.979L11.756 12.342Z"
                          fill="#1DA599" />
                      </svg>
                    </p>
                  </div>
                  <div class="d-flex flex-row align-items-center">
                    <button type="button" class="btn btn-outline-warning mt-1 text-capitalize" data-mdb-toggle="modal"
                      data-mdb-target="#exampleModal-<?php echo nl2br($row["product_id"]); ?>"
                      data-mdb-ripple-color="dark">View
                      detail</button>
                    <div class="form-outline ms-2" style="width: 35%; height: 15%;">
                      <form method="post">

                        <input type="number" name="quantity" class="form-control">
                        <label class="form-label text-muted mt-1 text-center" style="font-size: 10px;"
                          for="typeNumber">Amount</label>
                    </div>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal-<?php echo nl2br($row["product_id"]); ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <?php echo nl2br($row["description"]); ?>
                        </div>
                        <div class="modal-footer">

                          <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                          <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                          <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
                          <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                          <button type="submit" class="btn btn-outline-warning mt-1 text-capitalize"
                            data-mdb-ripple-color="dark" name="addCart">Add to Cart</button>
                          </form>

                          <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
          }
        }
        ?>
      </div>
    </div>

  </div>
  </div>

  <!-- end paket -->


  <!-- Footer -->
  <footer class="text-center text-lg-start text-muted" style="background-color: #1DA599 ;">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">

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




  <script>
    function redirectToContactPage() {
      window.location.href = "contact.php";
    }
  </script>
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>

</body>

</html>