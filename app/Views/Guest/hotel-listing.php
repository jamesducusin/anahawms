<!DOCTYPE html>
<html lang="en">

<head>

    <?php echo view('hotel/inc/head-css', array('title' => 'Listing')); ?>

</head>

<body>


    <!-- pre-loader start -->
    <!-- <div class="skeleton_loader">

        <?= "hello" //$this->include('hotel/inc/skeleton-loader.php') 
        ?>

    </div> -->
    <!-- pre-loader end -->


    <!-- header start -->
    <header class="overlay-black">

        <?= $this->include('hotel/inc/header-nav.php') ?>

    </header>
    <!--  header end -->


    <!-- breadcrumb start -->
    <section class="breadcrumb-section pt-0">
        <img src="<?= site_url('assets/hotelresto') ?>/images/inner-pages/bg-bread.jpg" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content">
            <div>
                <h2>Anahaw Island View Resort</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= site_url('/') ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">room package</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="title-breadcrumb">AIVR</div>
    </section>
    <!-- breadcrumb end -->


    <section class="bg-white pt-0 search-panel section-b-space" id="searchBar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <div class="search-section">
                                                    <div class="search-box">
                                                        <div class="left-part">
                                                            <div class="search-body">
                                                                <h6>check in</h6>
                                                                <input placeholder="<?= date('d M Y') ?>" id="datepicker" readonly />
                                                            </div>
                                                            <div class="search-body">
                                                                <h6>check out</h6>
                                                                <input placeholder="<?= date('d M Y', strtotime('+1 day')); ?>"  id="datepicker1" readonly disabled />
                                                            </div>
                                                            <div class="search-body">
                                                                <h6>Guest</h6>
                                                                <input type="text" class="form-control" id="guest" placeholder="1adults • 0kids • 1rooms" readonly>
                                                                <div class="selector-box-flight guest" style="top: -90%;">
                                                                    <div class="room-cls form">

                                                                        <div class="" style=" display: flex;align-items: center; ">

                                                                            <div class="input-group">

                                                                                <label class="my-3 mx-3">Adults</label>
                                                                                <button type="button" class="btn btn-number" data-type="minus" disabled="disabled" data-field="quant[1]">
                                                                                    <i class="fas fa-minus form-control"></i>
                                                                                </button>

                                                                                <input type="text" name="quant[1]" id="adult" class="form-control qty-input input-number mt-2" value="1" min="1" max="30" readonly>

                                                                                <button type="button" class="btn btn-number" data-type="plus" data-field="quant[1]">
                                                                                    <i class="fas fa-plus form-control"></i>
                                                                                </button>

                                                                            </div>

                                                                        </div>
                                                                        <div style=" display: flex;align-items: center; ">
                                                                            <label class="my-4 mx-4">Kids</label>
                                                                            <div class="input-group">
                                                                                <button type="button" class="btn btn-number" data-type="minus" disabled="disabled" data-field="quant[2]">
                                                                                    <i class="fas fa-minus form-control"></i>
                                                                                </button>

                                                                                <input type="text" name="quant[2]" id="child" class="form-control qty-input input-number" value="0" min="0" max="30" readonly>

                                                                                <button type="button" class="btn btn-number" data-type="plus" data-field="quant[2]">
                                                                                    <i class="fas fa-plus form-control"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div style=" display: flex;align-items: center; ">
                                                                            <label class="my-3 mx-3">Rooms</label>
                                                                            <div class="input-group">
                                                                                <button type="button" class="btn btn-number" data-type="minus" disabled="disabled" data-field="quant[3]">
                                                                                    <i class="fas fa-minus form-control"></i>
                                                                                </button>

                                                                                <input type="text" name="quant[3]" id="room" class="form-control qty-input input-number" value="1" min="1" max="30" readonly>

                                                                                <button type="button" class="btn btn-number" data-type="plus" data-field="quant[3]">
                                                                                    <i class="fas fa-plus form-control"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="bottom-part">
                                                                        <a href="#" id="addButton" class="btn">apply</a>
                                                                    </div>
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
        </div>
    </section>



    <!-- search section end -->
    <div class="modal fade map-modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-3 col-lg-5">
                                <div class="left-sidebar mt-0">
                                    <div class="search-bar">
                                        <input type="text" placeholder="Search here..">
                                        <i class="fas fa-search"></i>
                                    </div>
                                    <div class="middle-part collection-collapse-block open">
                                        <div class="collection-collapse-block-content ">
                                           

                                            <div class="filter-block section-b-space">
                                                <div class="collection-collapse-block border-bottom-0 open">
                                                    <h6 class="collapse-block-title">services</h6>
                                                    <div class="collection-collapse-block-content pb-0">
                                                        <div class="sidebar-hotels">
                                                            <div class="hotel-box">
                                                                <div class="img-left">
                                                                    <img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/1.jpg" class="img-fluid blur-up lazyload" alt="">
                                                                </div>
                                                                <div class="content-right">
                                                                    <a href="hotel-single-7.html">
                                                                        <h5>the venetian</h5>
                                                                    </a>
                                                                    <div class="rating">
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="far fa-star"></i>
                                                                    </div>
                                                                    <div class="price">
                                                                        $1245 <span>/ per night</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="hotel-box">
                                                                <div class="img-left">
                                                                    <img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/2.jpg" class="img-fluid blur-up lazyload" alt="">
                                                                </div>
                                                                <div class="content-right">
                                                                    <a href="hotel-single-7.html">
                                                                        <h5>park royal</h5>
                                                                    </a>
                                                                    <div class="rating">
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="far fa-star"></i>
                                                                    </div>
                                                                    <div class="price">
                                                                        $1245 <span>/ per night</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="hotel-box">
                                                                <div class="img-left">
                                                                    <img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/3.jpg" class="img-fluid blur-up lazyload" alt="">
                                                                </div>
                                                                <div class="content-right">
                                                                    <a href="hotel-single-7.html">
                                                                        <h5>grand park</h5>
                                                                    </a>
                                                                    <div class="rating">
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="far fa-star"></i>
                                                                    </div>
                                                                    <div class="price">
                                                                        $1245 <span>/ per night</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="hotel-box">
                                                                <div class="img-left">
                                                                    <img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/4.jpg" class="img-fluid blur-up lazyload" alt="">
                                                                </div>
                                                                <div class="content-right">
                                                                    <a href="hotel-single-7.html">
                                                                        <h5>courtyard</h5>
                                                                    </a>
                                                                    <div class="rating">
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="far fa-star"></i>
                                                                    </div>
                                                                    <div class="price">
                                                                        $1245 <span>/ per night</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="hotel-box">
                                                                <div class="img-left">
                                                                    <img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/5.jpg" class="img-fluid blur-up lazyload" alt="">
                                                                </div>
                                                                <div class="content-right">
                                                                    <a href="hotel-single-7.html">
                                                                        <h5>resorts world</h5>
                                                                    </a>
                                                                    <div class="rating">
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="far fa-star"></i>
                                                                    </div>
                                                                    <div class="price">
                                                                        $1245 <span>/ per night</span>
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
                            <div class="col-xl-9 col-lg-7 map-section">
                                <div class="map" id="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- section start -->
    <section class="xs-section pt-0 bg-inner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="filter-panel filter-map">
                        <div class="left-filter">
                            <div class="respon-filter-btn">
                                <h6> filter <i class="fas fa-sort-down"></i></h6>
                                <span class="according-menu"></span>
                            </div>
                            <div class="filters respon-filter-content filter-button-group">
                                <ul>
                                    <li class="active" data-filter="*">All</li>
                                    <li data-filter=".deluxe">deluxe</li>
                                    <li data-filter=".poolside">poolside</li>
                                   
                                    <li data-filter=".traveller">traveller</li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="right-panel">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" class="view-map">view on map <span class="arrow">click to view</span></a>
                          
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 ratio3_2">
                    <a href="javascript:void(0)" class="mobile-filter mt-3">
                        <h5>latest filter</h5>
                        <img src="<?= site_url('assets/hotelresto') ?>/images/icon/adjust.png" class="img-fluid blur-up lazyload" alt="">
                    </a>
                    <div class="container">
                        <div class="list-view row content grid">
                            <div class="list-box col-12  poolside grid-item wow fadeInUp">
                                <div class="list-img">
                                    <div class="slider-for">
                                        <div>
                                            <div id="block" style="width: 100%; height: 280px;" data-vide-bg="<?= site_url('assets/hotelresto') ?>/video/hotel.mp4" data-vide-options="position: left, loop: true"></div>
                                        </div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/2.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/3.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/4.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                    </div>
                                    <div class="slider-nav">
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/video/hotel.jpg" class="img-fluid blur-up lazyload" alt=""></div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/2.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/3.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/4.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="list-content">
                                    <div>
                                        <a href="hotel-single-7.html">
                                            <h5>sea view hotel</h5>
                                        </a>
                                        <p>dubai, 2km from center</p>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <span>26412 review</span>
                                        </div>
                                        <p class="hotel-info">relax and unwind with a special stay offer at a
                                            superlative value. conveniently located, offers spacious rooms. great
                                            dinning options. gym & pool. innovative dinning and bar options. relaxing
                                            spa open till 2 A.M.</p>
                                        <div class="facility-icon">
                                            <div class="facility-box">
                                                <img src="<?= site_url('assets/hotelresto') ?>/images/icon/hotel/beer.png" class="img-fluid blur-up lazyload" alt="">
                                                <span>bar</span>
                                            </div>
                                            <div class="facility-box">
                                                <img src="<?= site_url('assets/hotelresto') ?>/images/icon/hotel/wifi.png" class="img-fluid blur-up lazyload" alt="">
                                                <span>wifi</span>
                                            </div>
                                            <div class="facility-box">
                                                <img src="<?= site_url('assets/hotelresto') ?>/images/icon/hotel/sunset.png" class="img-fluid blur-up lazyload" alt="">
                                                <span>beach</span>
                                            </div>
                                            <div class="facility-box">
                                                <img src="<?= site_url('assets/hotelresto') ?>/images/icon/hotel/pool.png" class="img-fluid blur-up lazyload" alt="">
                                                <span>swimming</span>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <del>$1300</del>
                                            $1254 <span>/ per night</span>
                                            <p class="mb-0">login & unlock a secret deal</p>
                                        </div>
                                        <div class="offer-box">
                                            <i class="fas fa-fire"></i> 8 people booked this hotel today
                                        </div>
                                        <a href="hotel-booking.html" class="btn btn-solid color1 book-now">book now</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="list-box col-12  traveller grid-item wow fadeInUp" >
                                <div class="list-img">
                                    <div class="slider-for">
                                        <div>
                                            <div id="block" style="width: 100%; height: 280px;" data-vide-bg="<?= site_url('assets/hotelresto') ?>/video/hotel.mp4" data-vide-options="position: left, loop: true"></div>
                                        </div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/2.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/3.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/4.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                    </div>
                                    <div class="slider-nav">
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/video/hotel.jpg" class="img-fluid blur-up lazyload" alt=""></div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/2.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/3.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/4.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="list-content">
                                    <div>
                                        <a href="hotel-single-7.html">
                                            <h5>sea view hotel</h5>
                                        </a>
                                        <p>dubai, 2km from center</p>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <span>26412 review</span>
                                        </div>
                                        <p class="hotel-info">relax and unwind with a special stay offer at a
                                            superlative value. conveniently located, offers spacious rooms. great
                                            dinning options. gym & pool. innovative dinning and bar options. relaxing
                                            spa open till 2 A.M.</p>
                                        <div class="facility-icon">
                                            <div class="facility-box">
                                                <img src="<?= site_url('assets/hotelresto') ?>/images/icon/hotel/beer.png" class="img-fluid blur-up lazyload" alt="">
                                                <span>bar</span>
                                            </div>
                                            <div class="facility-box">
                                                <img src="<?= site_url('assets/hotelresto') ?>/images/icon/hotel/wifi.png" class="img-fluid blur-up lazyload" alt="">
                                                <span>wifi</span>
                                            </div>
                                            <div class="facility-box">
                                                <img src="<?= site_url('assets/hotelresto') ?>/images/icon/hotel/sunset.png" class="img-fluid blur-up lazyload" alt="">
                                                <span>beach</span>
                                            </div>
                                            <div class="facility-box">
                                                <img src="<?= site_url('assets/hotelresto') ?>/images/icon/hotel/pool.png" class="img-fluid blur-up lazyload" alt="">
                                                <span>swimming</span>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <del>$1300</del>
                                            $1254 <span>/ per night</span>
                                            <p class="mb-0">login & unlock a secret deal</p>
                                        </div>
                                        <div class="offer-box">
                                            <i class="fas fa-fire"></i> 8 people booked this hotel today
                                        </div>
                                        <a href="hotel-booking.html" class="btn btn-solid color1 book-now">book now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-box col-12  dormitory grid-item wow fadeInUp" >
                                <div class="list-img">
                                    <div class="slider-for">
                                        <div>
                                            <div id="block" style="width: 100%; height: 280px;" data-vide-bg="<?= site_url('assets/hotelresto') ?>/video/hotel.mp4" data-vide-options="position: left, loop: true"></div>
                                        </div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/2.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/3.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/4.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                    </div>
                                    <div class="slider-nav">
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/video/hotel.jpg" class="img-fluid blur-up lazyload" alt=""></div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/2.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/3.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/4.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="list-content">
                                    <div>
                                        <a href="hotel-single-7.html">
                                            <h5>sea view hotel</h5>
                                        </a>
                                        <p>dubai, 2km from center</p>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <span>26412 review</span>
                                        </div>
                                        <p class="hotel-info">relax and unwind with a special stay offer at a
                                            superlative value. conveniently located, offers spacious rooms. great
                                            dinning options. gym & pool. innovative dinning and bar options. relaxing
                                            spa open till 2 A.M.</p>
                                        <div class="facility-icon">
                                            <div class="facility-box">
                                                <img src="<?= site_url('assets/hotelresto') ?>/images/icon/hotel/beer.png" class="img-fluid blur-up lazyload" alt="">
                                                <span>bar</span>
                                            </div>
                                            <div class="facility-box">
                                                <img src="<?= site_url('assets/hotelresto') ?>/images/icon/hotel/wifi.png" class="img-fluid blur-up lazyload" alt="">
                                                <span>wifi</span>
                                            </div>
                                            <div class="facility-box">
                                                <img src="<?= site_url('assets/hotelresto') ?>/images/icon/hotel/sunset.png" class="img-fluid blur-up lazyload" alt="">
                                                <span>beach</span>
                                            </div>
                                            <div class="facility-box">
                                                <img src="<?= site_url('assets/hotelresto') ?>/images/icon/hotel/pool.png" class="img-fluid blur-up lazyload" alt="">
                                                <span>swimming</span>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <del>$1300</del>
                                            $1254 <span>/ per night</span>
                                            <p class="mb-0">login & unlock a secret deal</p>
                                        </div>
                                        <div class="offer-box">
                                            <i class="fas fa-fire"></i> 8 people booked this hotel today
                                        </div>
                                        <a href="hotel-booking.html" class="btn btn-solid color1 book-now">book now</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="list-box col-12  deluxe grid-item wow fadeInUp" >
                                <div class="list-img">
                                    <div class="slider-for">
                                        <div>
                                            <div id="block" style="width: 100%; height: 280px;" data-vide-bg="<?= site_url('assets/hotelresto') ?>/video/hotel.mp4" data-vide-options="position: left, loop: true"></div>
                                        </div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/2.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/3.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/4.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                    </div>
                                    <div class="slider-nav">
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/video/hotel.jpg" class="img-fluid blur-up lazyload" alt=""></div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/2.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/3.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                        <div><img src="<?= site_url('assets/hotelresto') ?>/images/hotel/gallery/4.jpg" class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="list-content">
                                    <div>
                                        <a href="hotel-single-7.html">
                                            <h5>sea view hotel</h5>
                                        </a>
                                        <p>dubai, 2km from center</p>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <span>26412 review</span>
                                        </div>
                                        <p class="hotel-info">relax and unwind with a special stay offer at a
                                            superlative value. conveniently located, offers spacious rooms. great
                                            dinning options. gym & pool. innovative dinning and bar options. relaxing
                                            spa open till 2 A.M.</p>
                                        <div class="facility-icon">
                                            <div class="facility-box">
                                                <img src="<?= site_url('assets/hotelresto') ?>/images/icon/hotel/beer.png" class="img-fluid blur-up lazyload" alt="">
                                                <span>bar</span>
                                            </div>
                                            <div class="facility-box">
                                                <img src="<?= site_url('assets/hotelresto') ?>/images/icon/hotel/wifi.png" class="img-fluid blur-up lazyload" alt="">
                                                <span>wifi</span>
                                            </div>
                                            <div class="facility-box">
                                                <img src="<?= site_url('assets/hotelresto') ?>/images/icon/hotel/sunset.png" class="img-fluid blur-up lazyload" alt="">
                                                <span>beach</span>
                                            </div>
                                            <div class="facility-box">
                                                <img src="<?= site_url('assets/hotelresto') ?>/images/icon/hotel/pool.png" class="img-fluid blur-up lazyload" alt="">
                                                <span>swimming</span>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <del>$1300</del>
                                            $1254 <span>/ per night</span>
                                            <p class="mb-0">login & unlock a secret deal</p>
                                        </div>
                                        <div class="offer-box">
                                            <i class="fas fa-fire"></i> 8 people booked this hotel today
                                        </div>
                                        <a href="hotel-booking.html" class="btn btn-solid color1 book-now">book now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3">
                    <div class="left-sidebar">
                        <div class="back-btn">
                            back
                        </div>
                        <div class="search-bar">
                            <input type="text" placeholder="Search here..">
                            <i class="fas fa-search"></i>
                        </div>
                        
                        <div class="bottom-info">
                            <h5><span>i</span> need help</h5>
                            <h4>856 - 215 - 211</h4>
                            <h6>Monday to Friday 9.00am - 7.30pm</h6>
                        </div>
                    </div>
                </div> -->
            </div>

        </div>
    </section>
    <!-- section End -->


    <?= $this->include('hotel/inc/footer.php') ?>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
    <script type="text/javascript" src="<?= site_url('assets/hotelresto/js') ?>/here-map-info.js"></script>


    <?= $this->include('hotel/inc/end-script.php') ?>

    <?= $this->include('hotel/inc/hotel-search.php') ?>
    <script>
        $('#exampleModalCenter').on('shown.bs.modal', function() {
            map.getViewPort().resize();
        });
    </script>



</body>

</html>