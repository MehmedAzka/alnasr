<?php
require 'function.php';

$user_id = $_SESSION['user_id'];

$showTotPri = $conn->query("SELECT cart_id, user_id, product_name, price, quantity, status FROM cart JOIN catalog ON cart.product_id = catalog.product_id WHERE cart_id && user_id = $user_id && status = 'ordered'");
$total = $conn->query("SELECT SUM(price * quantity) AS total_price
FROM cart
JOIN catalog ON cart.product_id = catalog.product_id WHERE status = 'ordered';");

$bard = $conn->query("SELECT COUNT(*) AS amount FROM cart WHERE user_id = $user_id && status = 'ordered'");
$result = $bard->fetch_assoc();

$amount = $conn->query("SELECT * FROM cart WHERE quantity");
$result_a = $amount->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al-Nasr | Payment</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

</html>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-0">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                        <a class="nav-link" href="product.php">Packages</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active text-warning" href="cart.php">Cart
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
                <button type="button" class="btn btn-warning shadow-0 text-capitalize">Contact Us</button>

                <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <!-- payment -->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-5 border border-1 rounded py-4 px-4">
                <div class="d-flex flex-row justify-content-between">
                    <img class="h-25" src="img/trash1.png" alt="">
                    <p>Umrah Package Details</p>
                </div>
                <hr class="m-0">
                <div class="scroll">
                    <div class="mt-3">
                        <?php while ($row = $showTotPri->fetch_assoc()) { ?>
                            <div style="height: 100%;"
                                class="scroll d-flex flex-row justify-content-between bg-light pt-3 px-3 rounded-4">
                                <div class="col-md-4 mt-2" style="width: 50%;">
                                    <form method="post">
                                        <input type="hidden" name="id_to_delete" value="<?= $row['cart_id'] ?>">
                                        <button class="bg-transparent border-0" name="delete_order"><i
                                                class="far fa-trash-can text-success"
                                                onclick="return confirm('DELETE?')"></i></button>
                                    </form>
                                    <form method="post">
                                        <input type="hidden" name="id_cart" value="<?= $row['cart_id'] ?>">
                                        <input class="border-0 bg-light text-center" style="width: 20%;" type="number"
                                            id="quantity-input" name="input_amount" value="<?= $row['quantity'] ?>">

                                        <button style="width: 24px; height: 24px;"
                                            class="btn-floating bg-transparent border border-1 me-1" name="min" <?php if ($row['quantity'] <= 1) {
                                                echo 'disabled';
                                            } ?>>-</button>

                                        <button style="width: 24px; height: 24px;"
                                            class="btn-floating bg-transparent border border-1" name="plus">+</button>
                                    </form>
                                </div>
                                <div class="main">
                                    <p class="mb-0">
                                        <?= $row['product_name'] ?>
                                    </p>
                                    <p style="font-size: 13px;" class="mt-0 text-end text-muted">$
                                        <?= $row['price'] ?>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <hr class="m-0 mb-4">
                <?php while ($row = $total->fetch_assoc()) { ?>
                    <div class="d-flex flex-row justify-content-between">
                        <p class="text-muted" style="font-size: 13px;">$
                            <?= $row['total_price'] ?>
                        </p>
                        <p>Total</p>
                    </div>
                <?php } ?>

                <form method="post">
                    <input type="hidden" name="id_cart" value="<?= $_SESSION['user_id'] ?>">
                    <button class="btn btn-warning w-100" type="submit" name="pay" onclick="return confirm('PAY?');">Buy
                        <img src="img/card.png" alt=""></button>
                </form>
            </div>
            <div class="col-md-7">
                <div class="discount d-flex flex-row border border-1 align-items-center rounded py-1 px-5">
                    <button type="button" class="btn btn-info w-25 h-50 me-3 shadow-0 text-capitalize">Use
                        Discount</button>
                    <div class="form-outline mb-4 w-50 me-5 mt-4">
                        <input type="text" id="form2Example1" class="form-control" />
                        <label class="form-label" for="form2Example1">Discount</label>
                    </div>
                    <div class="discount-p d-flex flex-row mt-3">
                        <p class="me-2">Discount</p> <img height="20" src="img/discount-shape.png" alt="">
                    </div>
                </div>

                <a href="">
                    <div
                        class="debit d-flex flex-row border border-1 text-dark justify-content-center align-items-center rounded pt-4 pb-2 px-5 mt-4">
                        <img class="me-3 mb-3" src="img/card-pos.png" alt="">
                        <div class="debit-p lh-1 text-center">
                            <p style="font-size: 14px;">Debit/Kredit</p>
                            <p class="mt-0" style="font-size: 10px;">PAYMENT METHOD</p>
                        </div>
                    </div>
                </a>

                <div class="bank border border-1 d-flex flex-row justify-content-center rounded py-4 mt-4">
                    <div class="bank-img">
                        <div class="d-flex flex-row justify-content-center">
                            <p class="m-0">Payment</p> <img height="20" src="img/card.png" alt="">
                        </div>
                        <div class="wadah">
                            <form action="#">
                                <input type="radio" name="payment" id="visa">
                                <input type="radio" name="payment" id="mastercard">
                                <input type="radio" name="payment" id="paypal">
                                <input type="radio" name="payment" id="AMEX">


                                <div class="category">
                                    <label id="kotak" for="visa" class="visaMethod">
                                        <div class="imgName">
                                            <div class="imgContainer visa">
                                                <img class="gambar" src="https://i.ibb.co/vjQCN4y/Visa-Card.png" alt="">
                                            </div>
                                            <span class="name">VISA</span>
                                        </div>
                                        <span class="check"><i class="fa-solid fa-circle-check"
                                                style="color: #6064b6;"></i></span>
                                    </label>

                                    <label id="kotak" for="mastercard" class="mastercardMethod">
                                        <div class="imgName">
                                            <div class="imgContainer mastercard">
                                                <img class="gambar" src="https://i.ibb.co/vdbBkgT/mastercard.jpg"
                                                    alt="">
                                            </div>
                                            <span class="name">Mastercard</span>
                                        </div>
                                        <span class="check"><i class="fa-solid fa-circle-check"
                                                style="color: #6064b6;"></i></span>
                                    </label>

                                    <label id="kotak" for="paypal" class="paypalMethod">
                                        <div class="imgName">
                                            <div class="imgContainer paypal">
                                                <img class="gambar" src="https://i.ibb.co/KVF3mr1/paypal.png" alt="">
                                            </div>
                                            <span class="name">Paypal</span>
                                        </div>
                                        <span class="check"><i class="fa-solid fa-circle-check"
                                                style="color: #6064b6;"></i></span>
                                    </label>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end payment -->

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
                        <p class="p"><i class="fas fa-home me-3 text-secondary"></i> Pesantren Al-Nasr, Jalan Pahlawan
                            No. 123, Kecamatan Sukabumi, Kota Sukabumi, Jawa Barat 43121, Indonesia</p>
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
</body>

</html>