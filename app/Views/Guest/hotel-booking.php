<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('hotel/inc/head-css', array('title' => 'Booking')); ?>

</head>

<body>

    <?= $this->include('hotel/inc/hotel-loader.php') ?>

    <!-- header start -->
    <header class="overlay-black">

        <?= $this->include('hotel/inc/header-nav.php') ?>

    </header>
    <!--  header end -->
    <section class="breadcrumb-section pt-0">
        <img src="../assets/images/inner-pages/bg-bread.jpg" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content">
            <div>
                <h2>checkout</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="hotel-booking.html">review</a></li>
                        <li class="breadcrumb-item active">checkout</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="title-breadcrumb">Rica</div>
    </section>
    <!-- breadcrumb end -->


    <!-- booking section start -->
    <div class="modal fade" id="gcashModal" tabindex="-1" aria-labelledby="gcashModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <img src="<?= site_url('assets/hotelresto/images/gcash-qr.jpg') ?>" style="width: 100%; height: 100px;" alt="">
            </div>
        </div>
    </div>
    <section class="section-b-space bg-inner animated-section">
        <div class="animation-section">
            <div class="cross po-2"></div>
            <div class="round po-5"></div>
            <div class="round r-2 po-6"></div>
            <div class="round r-2 po-7"></div>
            <div class="round r-y po-8"></div>
            <div class="square po-10"></div>
            <div class="square s-2 po-12"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="summery-box">
                        <h2>payment option</h2>
                        <div class="review-section">
                            <div class="review_box shadow-none">
                                <div class="flight_detail payment-gateway p-0">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="h_one">
                                                <div class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#one" aria-expanded="true" aria-controls="one">
                                                    <label for='r_one'>
                                                        <input type='radio' class="radio_animated ms-0" checked id='r_one' name='occupation' value='Working' required />
                                                        Booking
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="one" class="collapse show" aria-labelledby="h_one" data-bs-parent="#accordionExample">
                                                <div class="card-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col first-name">
                                                                    <label>first name</label>
                                                                    <input type="text" id="firstName" class="form-control" placeholder="First name">
                                                                </div>
                                                                <div class="col">
                                                                    <label>last name</label>
                                                                    <input type="text" id="lastName" class="form-control" placeholder="Last name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email address</label>
                                                            <input type="email" class="form-control" placeholder="Enter email">
                                                            <small id="emailHelp" class="form-text text-muted">Booking confirmation will be sent to
                                                                this email ID.</small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>contact info</label>
                                                            <input id="mobile-no" type="tel" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">special request</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="e.g.. early check-in, airport transfer"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">have a coupon code?</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Promo Code">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">apply</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="submit-btn" style="float: right;">
                                                            <button class="btn btn-solid" onclick="window.location.href='hotel-checkout.html';" type="button">pay now</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="h_two">
                                                <div class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#two" aria-expanded="true" aria-controls="two">
                                                    <label for='r_two'>
                                                        <input type='radio' class="radio_animated ms-0" id='r_two' name='occupation' value='Working' required /> Gcash
                                                    </label>
                                                </div>
                                            </div>
                                         
                                            <div id="two" class="collapse" aria-labelledby="h_two" data-bs-parent="#accordionExample">
                                            <div style="float: right;">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#gcashModal">
                                                            Click me to pay
                                                        </a><i class="fas fa-qrcode"></i>
                                                    </div>
                                                <div class="card-body">
                                                   
                                                    <form>

                                                        <div class="form-group">
                                                            <label for="c-name">Account name</label>
                                                            <input type="text" class="form-control" id="c-name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="acc-number">Gcash number</label>
                                                            <input type="text" class="form-control" id="c-number">
                                                            <img src="<?= site_url('assets/hotelresto') ?>/images/gcash.png" alt="" class="img-fluid blur-up lazyload">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="ref-num">Reference number</label>
                                                            <input type="text" class="form-control" id="c-number">
                                                            <img src="../assets/images/creditcards.png" alt="" class="img-fluid blur-up lazyload">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formFile" class="form-label">Proof of payment</label>
                                                            <input class="form-control" placeholder="receipt" type="file" id="formFile" name="proof">
                                                        </div>
                                                        <div class="payment-btn">
                                                            <button type="button" onclick="window.location.href='hotel-booking-success.html';" class="btn btn-solid color1">make payment</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 booking-order">
                    <div class="summery-box">
                        <h2>booking summery</h2>
                        <div class="hotel-section">
                            <div class="hotel-img">
                                <img src="../assets/images/hotel/room/1.jpg" class="img-fluid blur-up lazyload" alt="">
                            </div>
                            <div class="hotel-detail">
                                <h6>sea view hotel</h6>
                                <p>Mina Road, Bur Dubai, Dubai</p>
                            </div>
                        </div>
                        <div class="summery-section">
                            <div class="box">
                                <div class="left">
                                    <div class="up">
                                        <h6>check in</h6>
                                        <h5>tue, 18 sep 2019</h5>
                                    </div>
                                    <div class="down">
                                        <h6>check in time</h6>
                                        <h5>2.00 pm</h5>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="up">
                                        <h6>check out</h6>
                                        <h5>fri, 21 sep 2019</h5>
                                    </div>
                                    <div class="down">
                                        <h6>check out time</h6>
                                        <h5>12.00 pm</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="summery-section">
                            <h5 class="mb-0">2 guest, 1 deluxe room, 3 night</h5>
                            <a href="hotel-single-1.html" class="edit-cls">edit</a>
                        </div>
                        <div class="summery-section">
                            <div class="payment-details">
                                <h5>payment details</h5>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>base price</td>
                                            <td>$2510</td>
                                        </tr>
                                        <tr>
                                            <td>promo discount</td>
                                            <td>- $250</td>
                                        </tr>
                                        <tr>
                                            <td>tax & service fees</td>
                                            <td>+ $150</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="summery-section">
                            <div class="payment-details">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>payable amount</td>
                                            <td class="amount">$2410</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- booking section end -->




    <?= $this->include('hotel/inc/footer.php') ?>



    <?= $this->include('hotel/inc/end-script.php') ?>
    <?= $this->include('hotel/inc/hotel-search.php') ?>



</body>

</html>