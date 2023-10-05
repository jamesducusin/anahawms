<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('hotel/inc/head-css', array('title' => 'Home')); ?>

</head>

<body>

    <?= $this->include('hotel/inc/hotel-loader.php') ?>

    <!-- header start -->
    <header class="overlay-black">

        <?= $this->include('hotel/inc/header-nav.php') ?>

    </header>
    <!--  header end -->


    <!-- home section start -->
    <section class="home_section slide-1 p-0    ">
        <div style="width: 100%; display: inline-block;">
            <div class="home home-mobile" id="block" style="width: 100%;" data-vide-bg="<?= site_url('assets/hotelresto/video') ?>/City2.mp4" data-vide-options="position: 0% 50%, loop: true">
                <div class="container custom-container mix-layout-section">
                    <div class="row">
                        <div class="col-xl-10 m-auto">
                            <div class="home-content mix-layout smaller-content">
                                <div class="bg-transparent">
                                    <h3>Come visit us!</h3>
                                    <h1>Looking for a</h1>
                                    <h2 class="txt-rotate  fw-bold text-light" data-period="1000" data-rotate='[ "Place to Stay?", "Delicious Food?", "Perfect Venue?"]'></h2>

                                    <ul class="nav mix-pills nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-hotel-tab" data-bs-toggle="pill" href="#pills-hotel" role="tab" aria-controls="pills-hotel" aria-selected="true">Room</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-food-tab" data-bs-toggle="pill" href="#pills-food" role="tab" aria-controls="pills-food" aria-selected="false">Food</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-event-tab" data-bs-toggle="pill" href="#pills-event" role="tab" aria-controls="pills-event" aria-selected="false">Event</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-service-tab" data-bs-toggle="pill" href="#pills-service" role="tab" aria-controls="pills-service" aria-selected="false">Services</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-hotel" role="tabpanel" aria-labelledby="pills-hotel-tab">
                                            <div class="search-panel">
                                                <div class="search-section">
                                                    <div class="search-box">
                                                        <div class="left-part">
                                                            <div class="search-body">
                                                                <h6>check in</h6>
                                                                <input placeholder="<?= date('d M Y') ?>" id="datepicker" readonly />
                                                            </div>
                                                            <div class="search-body">
                                                                <h6>check out</h6>
                                                                <input placeholder="<?= date('d M Y', strtotime('+1 day')); ?>" id="datepicker1" readonly disabled />
                                                            </div>

                                                            <div class="rooms-section"  >
                                                                <div class="search-body">
                                                                    <label>Rooms & Guests</label>
                                                                    <input type="text" class="form-control open-select" id="guest" placeholder=" 1adults • 0kids • 1rooms" readonly>
                                                                </div>

                                                                <input type="text" id="guestHide" class="form-control open-select d-none">
                                                                <div class="selector-box selector_box top-0 start-0" id="divGuest">
                                                                    <form action="<?=site_url('hotel/details')?>" method="post">
                                                                    <div class="room-cls">
                                                                        <div class="qty-box">
                                                                            <label>rooms</label>
                                                                            <div class="input-group">
                                                                                <button type="button" class="btn btn-number " data-type="minus" data-field="quant[1]"> - </button>
                                                                                <input type="text" id="room" name="quant[1]" class="form-control input-number" value="1" min="1" max="20" readonly>
                                                                                <button type="button" class="btn btn-number " data-type="plus" data-field="quant[1]">+</button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="qty-box">
                                                                            <label>adult</label>
                                                                            <div class="input-group">
                                                                                <button type="button" class="btn btn-number" data-type="minus" data-field="quant[2]"> - </button>
                                                                                <input type="text" id="adult" name="quant[2]" class="form-control input-number" value="2" min="1" max="40" readonly>
                                                                                <button type="button" class="btn btn-number " data-type="plus" data-field="quant[2]">+</button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="qty-box">
                                                                            <label>Kids</label>
                                                                            <div class="input-group">
                                                                                <button type="button" class="btn btn-number " data-type="minus"  data-field="quant[3]">-</button>
                                                                                <input type="text" name="quant[3]" id="child" class="form-control qty-input input-number" value="0" min="0" max="30" readonly>
                                                                                <button type="button" class="btn btn-number  " data-type="plus" data-field="quant[3]">+</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="bottom-part">
                                                                        <a href="#" id="add-btn" type="submit" class="btn">apply</a>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>

                                                            <div class="search-body btn-search">
                                                                <div class="right-part">
                                                                    <a href="#" class="btn btn-solid color1">Check availability</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="tab-pane fade" id="pills-food" role="tabpanel" aria-labelledby="pills-food-tab">
                                            <div class="search-panel">
                                                <div class="search-section">
                                                    <div class="search-box">
                                                        <div class="left-part">

                                                            <div class="search-body">
                                                                <h6>your location</h6>
                                                                <input type="text" placeholder="enter your location" class="form-control">
                                                            </div>
                                                            <div class="search-body">
                                                                <h6>search food..</h6>
                                                                <input type="text" placeholder="what are you craving?" class="form-control">
                                                            </div>
                                                            <div class="search-body btn-search">
                                                                <div class="right-part">
                                                                    <a href="#" class="btn btn-solid color1">find
                                                                        food</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-event" role="tabpanel" aria-labelledby="pills-event-tab">
                                            <div class="search-panel">
                                                <div class="search-section">
                                                    <div class="search-box">
                                                        <div class="left-part">
                                                            <div class="search-body text-center">
                                                                <h6>Event date</h6>
                                                                <input name="event_date" placeholder="<?= date('d M Y', strtotime('+1 day'));  ?>" id="event_picker" readonly />
                                                            </div>
                                                            <div class="search-body">
                                                                <h6>Occation</h6>
                                                                <input type="text" name="occasion" placeholder="What special occation?" class="form-control">
                                                            </div>
                                                            <div class="search-body btn-search">
                                                                <div class="right-part">
                                                                    <a href="#" class="btn btn-solid color1">Check availability</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="pills-event" role="tabpanel" aria-labelledby="pills-event-tab">
                                            <div class="search-panel">
                                                <div class="search-section">
                                                    <div class="search-box">
                                                        <div class="left-part">
                                                            <div class="search-body text-center">
                                                                <h6>Event date</h6>
                                                                <input name="event_date" placeholder="<?= date('d M Y', strtotime('+1 day'));  ?>" id="event_picker" />
                                                            </div>
                                                            <div class="search-body">
                                                                <h6>Occation</h6>
                                                                <input type="text" name="occasion" placeholder="What special occation?" class="form-control">
                                                            </div>



                                                            <div class="search-body btn-search">
                                                                <div class="right-part">
                                                                    <a href="#" class="btn btn-solid color1">Check availability</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-service" role="tabpanel" aria-labelledby="pills-service-tab">
                                            <div class="search-panel">
                                                <div class="search-section">
                                                    <div class="search-box">
                                                        <div class="left-part">
                                                            <div class="search-body">
                                                                <h6>service appointment date</h6>
                                                                <input placeholder="appointment date & time" value="<?= date('d M Y') ?>" id="service_picker" />
                                                            </div>
                                                            <div class="search-body">
                                                                <h6>Services offered</h6>
                                                                <select class="form-control border-0 " id="net-b" data-placeholder="Choose services">
                                                                    <option selected>Choose service</option>
                                                                    <option> Event Catering with servers</option>
                                                                    <option>Clowns and live band</option>
                                                                    <option>Event hosting</option>
                                                                    <option>Photobooth</option>
                                                                    <option>Photo and Video Coverage</option>
                                                                    <option>Light and sound system</option>
                                                                    <option>Table and chair skirting</option>
                                                                    <option>Custom Cake </option>
                                                                    <option>Venue decoration</option>
                                                                </select>
                                                            </div>
                                                            <div class="search-body btn-search">
                                                                <div class="right-part">
                                                                    <a href="#" class="btn btn-solid color1">Check availability</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home section end -->


    <!-- category start -->
    <section class="top-category margin-cls animated-section">

        <?= $this->include('hotel/inc/animated-section.php') ?>

        <div class="category-4 no-arrow">
            <?php $i = 1;
            $maxRate = 0;
            $maxId = array();
            foreach ($services as $service) : ?>
                <div>
                    <div class="top_box">
                        <div class="col-6">
                            <!-- Define the dimensions of the div -->
                            <div class="w-100 h-200 border border-secondary overflow-hidden">
                                <!-- Style the image to stretch -->
                                <img src="<?= site_url('assets/hotelresto/images/services/') . $service['image'] ?>" alt="Your Image" class="w-100 h-100 object-fit-cover">
                            </div>
                        </div>
                        <div class="right-content">

                            <div>
                                <h5><?= $service['name'] ?> <i class="fas fa-heart"></i></h5>

                                <div class="rating">

                                    <?= generateStar($service['rate']) ?>

                                </div>
                                <small class="text-muted "><?= $service['rateCount'] ?> reviews</small>

                                <p><?= $service['description'] ?></p>

                            </div>
                        </div>

                        <?php if ($service['rate'] == $services[0]['rate']) :
                            if ($service['rateCount'] == $services[0]['rateCount']) : ?>
                                <div class="new-label">
                                    <span>best</span>
                                </div>
                        <?php endif;
                        endif; ?>

                    </div>
                </div>
            <?php $i++;
            endforeach; ?>
        </div>
    </section>




    <!-- about section start -->
    <section class="about-section three-image section-b-space animated-section">

        <?= $this->include('hotel/inc/animated-section.php') ?>

        <div class="container">
            <div class="title-3">
                <span class="title-label">about</span>
                <h2>our hotel<span>hotel</span></h2>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <div class="image-section">
                        <?php for ($i = 0; $i < 3; $i++) : ?>
                            <div class="img-box-container">
                                <div class="img-box ">
                                    <img src="<?= site_url('assets/hotelresto/images/services/') . $services[$i]['image'] ?>" data-tilt data-tilt-perspective="110" data-tilt-speed="400" data-tilt-max="1.2" class="img-adjust blur-up lazyload" alt="">
                                    <div class="no-class">
                                        <h3>01</h3>
                                    </div>
                                </div>
                            </div>
                        <?php endfor ?>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="about-text">
                        <div>
                            <h5>get <span>exlusive</span> early discount</h5>
                            <h2>Unveil Native Comfort <span>hospitality experience</span></h2>
                            <p>
                                Discover the perfect blend of indigenous charm and contemporary sophistication at our Native Design Hotel. Immerse yourself in Filipino-style cuisine that tantalizes the taste buds while enjoying modern event hosting facilities that redefine your celebration experience..</p>
                            <img src="<?= site_url('assets/hotelresto/images') ?>/mix/signature.png" class="img-fluid blur-up lazyload" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- about section end -->


    <!-- video section start -->
    <section class="video_section parallax-img animated-section">

        <?= $this->include('hotel/inc/animated-section.php') ?>

        <img src="<?= site_url('assets/hotelresto/images/parallax') ?>/parallax-01.png" alt="" class="img-fluid blur-up lazyload bg-img">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="video-content">
                        <div>
                            <h5>It's <?= $featured[0]['season'] ?> season! <span>Hurry up!!</span></h5>
                            <h2><?= $featured[0]['pname'] ?> <span>&#8369 <?= $featured[0]['price'] - ($featured[0]['price'] *  ($featured[0]['discount'] / 100)) ?></span> </h2>
                            <p><?= $featured[0]['pdescription'] ?></p>
                            <div class="timer" data-expiration="<?= $featured[0]['expiration'] ?>">
                                <ul>
                                    <li><span id="days"></span>days</li>
                                    <li><span id="hours"></span>Hour</li>
                                    <li><span id="minutes"></span>min</li>
                                    <li><span id="seconds"></span>sec</li>
                                </ul>
                            </div>
                            <div class="bottom-section">
                                <a href="#" class="btn btn-rounded btn-sm color1">buy now !!</a>
                                <div class="info-btn">
                                    <h6><?= $featured[0]['capacity'] ?> pax&nbsp; | &nbsp; 1 night</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6 order-cls">
                    <div class="video-image">
                        <div class="side-effect"></div>
                        <img src="<?= site_url('assets/hotelresto/images/hotel/room/') . $featured[0]['thumbnail'] ?>" class="img-fluid blur-up lazyload" alt="">
                        <div data-bs-toggle="modal" data-bs-target="#video" class="video-icon">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offer-text">
            <h6>
                <span>l</span>
                <span>i</span>
                <span>m</span>
                <span>i</span>
                <span>t</span>
                <span>e</span>
                <span>d</span>
                <span></span>
                <span>t</span>
                <span>i</span>
                <span>m</span>
                <span>e</span>
            </h6>
        </div>
    </section>
    <div class="modal fade video-modal" id="video" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <iframe width="560" height="315" src="<?= $featured[0]['videoLink'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade video-modal" id="videoresto" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FAnahawIslandViewResort%2Fvideos%2F870629237051314%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- video section end -->

    <section class="process-steps section-b-space bg-white animated-section">

        <?= $this->include('hotel/inc/animated-section.php') ?>

        <div class="container">
            <div class="title-3">
                <span class="title-label">deals</span>
                <h2>Room packages<span>rooms</span></h2>
            </div>
            <div class="step-bg ratio_square">
                <div class="row popular-section special-section grid-box">
                    <?php
                    foreach ($rooms as $room) :
                        $amenities = explode(";", $room['amenities']); ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="special-box " style="<?= $room['status'] == 3 ? "color: #6c757d; 
        opacity: 0.6;   
        pointer-events: none;" : "" ?>">



                                <div class="step-box">
                                    <div class="popular-box">
                                        <div class="popular_img">
                                            <img src="<?= site_url('assets/hotelresto/images/') ?>/hotel/room/<?= $room['image'] ?>" alt="" class="img-fluid blur-up lazyload bg-img">
                                        </div>
                                        <div class="special-content">
                                            <a href="<?= site_url('hotel/details/') . $room['id'] ?>">
                                                <h5><?= $room['name'] ?> <span><i class="fas fa-map-marker-alt"></i> Calapan</span></h5>
                                            </a>
                                            <p>
                                                <?= $room['description'] ?>
                                            </p>
                                            <div class="bottom-section">

                                                <div class="price">
                                                    <del>&#8369;<?= $room['highestPrice'] ?></del>
                                                    <span>&#8369;<?= $room['price'] ?></span>
                                                    <div class="facility-detail">
                                                        <?php for ($i = 0; $i < 2; $i++) :
                                                            echo "<span>" . $amenities[$i] . "</span>";
                                                        endfor; ?>
                                                        <span>..</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($room['status'] == 0) : ?>
                                    <div class="label-offer" style="background-color: dodgerblue">Unavailable</div>
                                <?php elseif ($room['status'] == 1) : ?>
                                    <div class="label-offer" ">Recommended</div>
                                <?php else : ?>
                                <div class=" label-offer" style="background-color: #FF4500">Out of order</div>
                                <?php endif; ?>
                            </div>

                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>



    <!-- full banner section start -->
    <section class="food-banner animated-section">

        <?= $this->include('hotel/inc/animated-section.php') ?>

        <div class="container">
            <div class="row">
                <div class="offset-lg-5 col-lg-7 offset-md-2 col-md-8">
                    <div class="food-content">
                        <h3><?= date("Y") ?> Special</h3>
                        <h2>food hub<span></span></h2>
                        <div class="strip-cls">
                            <img src="<?= site_url('assets/hotelresto') ?>/images/restaurant/strip.png" alt="" class="img-fluid blur-up lazyload">
                            <div class="timer">
                                <li><span>Anahaw Island View Resort</span></li>
                            </div>
                        </div>
                        <div class="buttons">
                            <a href="#" class="btn btn-rounded btn-sm color1">order now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- full banner section end -->


    <!-- about section start -->
    <section class="section-b-space category-section ratio3_2 animated-section">

        <?= $this->include('hotel/inc/animated-section.php') ?>

        <div class="container">
            <div class="title-3">
                <span class="title-label">best</span>
                <h2>our special dishes<span>special</span></h2>
            </div>
            <div class="slide-3 no-arrow">
                <div>
                    <div class="category-box">
                        <div class="side-effect"></div>
                        <div>
                            <img src="<?= site_url('assets/hotelresto/images') ?>/restaurant/dishes/afritada.jpg" alt="" class="img-fluid blur-up lazyload bg-img">
                            <div class="overlay"></div>
                        </div>
                        <div class="top-bar">
                            <span class="offer">offer</span>
                            <h5><del>$22</del> $20</h5>
                        </div>
                        <div class="like-cls">
                            <i class="fas fa-heart"><span class="effect"></span></i>
                        </div>
                        <div class="bottom-bar">
                            <div class="top">
                                <h5>bread with chicken</h5>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <h6>30 minutes</h6>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur elit.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="category-box">
                        <div class="side-effect"></div>
                        <div>
                            <img src="<?= site_url('assets/hotelresto/images') ?>/restaurant/dishes/nuggets.jpg" alt="" class="img-fluid blur-up lazyload bg-img">
                            <div class="overlay"></div>
                        </div>
                        <div class="top-bar">
                            <span class="offer">offer</span>
                            <h5><del>$22</del> $20</h5>
                        </div>
                        <div class="like-cls">
                            <i class="fas fa-heart"><span class="effect"></span></i>
                        </div>
                        <div class="bottom-bar">
                            <div class="top">
                                <h5>bread with chicken</h5>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <h6>30 minutes</h6>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur elit.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="category-box">
                        <div class="side-effect"></div>
                        <div>
                            <img src="<?= site_url('assets/hotelresto/images') ?>/restaurant/dishes/chopseuy.jpg" alt="" class="img-fluid blur-up lazyload bg-img">
                            <div class="overlay"></div>
                        </div>
                        <div class="top-bar">
                            <span class="offer">offer</span>
                            <h5><del>$22</del> $20</h5>
                        </div>
                        <div class="like-cls">
                            <i class="fas fa-heart"><span class="effect"></span></i>
                        </div>
                        <div class="bottom-bar">
                            <div class="top">
                                <h5>paneer vegetable</h5>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <h6>30 minutes</h6>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur elit.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="category-box">
                        <div>
                            <img src="<?= site_url('assets/hotelresto/images') ?>/restaurant/dishes/afritada.jpg" alt="" class="img-fluid blur-up lazyload bg-img">
                            <div class="overlay"></div>
                        </div>
                        <div class="top-bar">
                            <span class="offer">offer</span>
                            <h5><del>$22</del> $20</h5>
                        </div>
                        <div class="like-cls">
                            <i class="fas fa-heart"><span class="effect"></span></i>
                        </div>
                        <div class="bottom-bar">
                            <div class="top">
                                <h5>lasagna noodles</h5>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <h6>30 minutes</h6>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->


    <!-- video section start -->
    <section class="video-section parallax-img animated-section">

        <?= $this->include('hotel/inc/animated-section.php') ?>

        <img src="<?= site_url('assets/hotelresto/images') ?>/parallax/parallax-resto.jpg" alt="" class="img-fluid blur-up lazyload bg-img">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="basic-section">
                        <h2>relax and enjoy</h2>
                        <h4>Experience Live Music Magic</h4>
                        <div data-bs-toggle="modal" data-bs-target="#videoresto" class="video-icon">
                            <span></span>
                            <div class="animation-circle-inverse"><i></i><i></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog_section section-b-space ratio_55 animated-section">

        <?= $this->include('hotel/inc/animated-section.php') ?>

        <div class="container">
            <div class="title-3">
                <span class="title-label">recent</span>
                <h2>special event<span>event</span></h2>
            </div>
            <div class="slide-3 no-arrow">
                <div>
                    <div class="blog-wrap">
                        <div class="blog-image">
                            <div>
                                <img src="../assets/images/flights/blog/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <div class="blog-label">
                                <div>
                                    <h3>05</h3>
                                    <h6>nov</h6>
                                </div>
                            </div>
                        </div>
                        <div class="blog-details">
                            <h6><i class="fas fa-map-marker-alt"></i>phonics, newyork</h6>
                            <a href="#">
                                <h5>Twice profit than before you. </h5>

                            </a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text.
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="blog-wrap">
                        <div class="blog-image">
                            <div>
                                <img src="../assets/images/flights/blog/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <div class="blog-label">
                                <div>
                                    <h3>05</h3>
                                    <h6>nov</h6>
                                </div>
                            </div>
                        </div>
                        <div class="blog-details">
                            <h6><i class="fas fa-map-marker-alt"></i>phonics, newyork</h6>
                            <a href="#">
                                <h5>Twice profit than before you. </h5>

                            </a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text.
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="blog-wrap">
                        <div class="blog-image">
                            <div>
                                <img src="../assets/images/flights/blog/3.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <div class="blog-label">
                                <div>
                                    <h3>05</h3>
                                    <h6>nov</h6>
                                </div>
                            </div>
                        </div>
                        <div class="blog-details">
                            <h6><i class="fas fa-map-marker-alt"></i>phonics, newyork</h6>
                            <a href="#">
                                <h5>Twice profit than before you. </h5>

                            </a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text.
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="blog-wrap">
                        <div class="blog-image">
                            <div>
                                <img src="../assets/images/flights/blog/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <div class="blog-label">
                                <div>
                                    <h3>05</h3>
                                    <h6>nov</h6>
                                </div>
                            </div>
                        </div>
                        <div class="blog-details">
                            <h6><i class="fas fa-map-marker-alt"></i>phonics, newyork</h6>
                            <a href="#">
                                <h5>Twice profit than before you. </h5>

                            </a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video section end -->

    <!-- subscribe section start -->
    <section class="subscribe_section medium-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="subscribe-detail">
                        <div>
                            <h2>subscribe our news <span>our news</span></h2>
                            <p>Subscribe and receive our newsletters to follow the news about our fresh and fantastic
                                products</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="input-section">
                        <input type="text" class="form-control" placeholder="Enter Your Email" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <a href="#" class="btn btn-rounded btn-sm color1">subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video section end -->

    <?= $this->include('hotel/inc/footer.php') ?>



    <?= $this->include('hotel/inc/end-script.php') ?>
    <?= $this->include('hotel/inc/hotel-search.php') ?>
    <script>
        $("#guest").on("click", function() {
            $("#divGuest").show();
           
        });
    </script>




</body>

</html>