<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('admin/inc/head-css', array('title' => 'Room type')); ?>

    <link rel="stylesheet" href="<?= site_url('assets/admin') ?>/plugins/summernote/summernote-bs4.min.css">
    
    <link rel="stylesheet" href="<?= site_url('assets/admin') ?>/plugins/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= site_url('assets/admin/') ?>css/style.css">
</head>

<body>
    <?= $this->include('Admin/inc/loader.php'); ?>

    <div class="main-wrapper">

        <?= $this->include('Admin/inc/header-nav.php'); ?>
        <?= $this->include('Admin/inc/sidebar-nav.php'); ?>



        <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Room types</h4>
                        <h6>Manage room types</h6>
                    </div>
                    <div class="page-btn">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add-type" class="btn btn-added"><img src="<?= site_url('assets/admin') ?>/img/icons/plus.svg" alt="img" class="me-1">Add New Type</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-top">
                            <div class="search-set">
                               
                            </div>
                            <div class="wordset">
                                <ul>
                                    <li>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="<?= site_url('assets/admin') ?>/img/icons/pdf.svg" alt="img"></a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="<?= site_url('assets/admin') ?>/img/icons/excel.svg" alt="img"></a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="<?= site_url('assets/admin') ?>/img/icons/printer.svg" alt="img"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        
                        <div class="table-responsive">
                            
                            <table class="table  datanew">
                                <thead>
                                    <tr>
                                        <th>
                                            <label class="checkboxs">
                                                <input type="checkbox" id="select-all">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </th>
                                        <th>Room Name</th>

                                        <th>Base price(&#x20B1;) </th>
                                        <th>Occupansy </th>
                                        <th>Extras </th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="<?= site_url('assets/admin') ?>/img/icons/deluxe.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Deluxe Room</a>
                                        </td>


                                        <td>&#x20B1; 1250.00</td>
                                        <td>Base: 2<br>Max: 5</td>
                                        <td>No. bed: 2<br>Price per bed: &#x20B1; 300.00</td>
                                        <td><span class="badges bg-info">Active </span></td>
                                        <td>
                                            <a class="me-3" href="product-details.html" data-bs-target="#view-type" data-bs-toggle="modal">
                                                <img src="<?= site_url('assets/admin') ?>/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="#" data-bs-target="#edit-type" data-bs-toggle="modal">
                                                <img src="<?= site_url('assets/admin') ?>/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="<?= site_url('assets/admin') ?>/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="edit-type" tabindex="-1" data-bs-backdrop="static" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Room Type</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Title<span class="manitory">*</span></label>
                                    <input type="text" value="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Base <small class="smaller">Occupansy</small><span class="manitory">*</span></label>
                                    <input type="number" value="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Base <small class="smaller">Price</small><span class="manitory">*</span></label>
                                    <input type="number" value="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Max <small class="smaller">Occupansy</small><span class="manitory">*</span></label>
                                    <input type="number" value="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Extra <small class="smaller">Charge</small><span class="manitory">*</span></label>
                                    <input type="number" value="">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                          
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Bed <small class="smaller">Extra</small><span class="manitory">*</span></label>
                                    <input type="number" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Bed <small class="smaller">Price</small><span class="manitory">*</span></label>
                                    <input type="number" value="">
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <div class="form-group" >
                                    <label>Drag and Drop Image <small class="smaller">Featured</small><span class="manitory">*</span></label>
                                    <div class="image-upload" >
                                        <input type="file" >
                                        <div class="image-uploads" >
                                            <img src="<?=site_url('assets/admin')?>/img/icons/upload.svg" alt="img">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>Description<span class="manitory">*</span></label>
                                <textarea class="summernote"><?="<h1>Hello world</h1>"?></textarea>
                            </div>
                        </div>
                        
                       
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-submit">Update</button>
                    <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add-type" tabindex="-1" data-bs-backdrop="static" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Room Type</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Title<span class="manitory">*</span></label>
                                    <input type="text" value="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Base <small class="smaller">Occupansy</small><span class="manitory">*</span></label>
                                    <input type="number" value="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Base <small class="smaller">Price</small><span class="manitory">*</span></label>
                                    <input type="number" value="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Max <small class="smaller">Occupansy</small><span class="manitory">*</span></label>
                                    <input type="number" value="">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Extra <small class="smaller">Charge</small><span class="manitory">*</span></label>
                                    <input type="number" value="">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                          
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Bed <small class="smaller">Extra</small><span class="manitory">*</span></label>
                                    <input type="number" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Bed <small class="smaller">Price</small><span class="manitory">*</span></label>
                                    <input type="number" value="">
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <div class="form-group" >
                                    <label>Drag and Drop Image <small class="smaller">Featured</small><span class="manitory">*</span></label>
                                    <div class="image-upload" >
                                        <input type="file" >
                                        <div class="image-uploads" >
                                            <img src="<?=site_url('assets/admin')?>/img/icons/upload.svg" alt="img">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>Description<span class="manitory">*</span></label>
                                <textarea class="summernote"><?="<h1>Hello world</h1>"?></textarea>
                            </div>
                        </div>
                        
                       
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-submit">Update</button>
                    <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="view-type" tabindex="-1" data-bs-backdrop="static" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Room Type Details</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="row">
                    <div class="col-lg-8 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                               
                                <div class="productdetails">
                                    <ul class="product-bar">
                                        <li>
                                            <h4>Title</h4>
                                            <h6>Deluxe Room </h6>
                                        </li>
                                        <li>
                                            <h4>Description</h4>
                                            <h6>1 single bed & 1 double bed  •   Sleeps up to 3 person</h6>
                                        </li>
                                        <li>
                                            <h4>Base Occupancy</h4>
                                            <h6>2 person</h6>
                                        </li>
                                        <li>
                                            <h4>Max Occupancy</h4>
                                            <h6>5 person</h6>
                                        </li>
                                        <li>
                                            <h4>Extra Bed Available</h4>
                                            <h6>1</h6>
                                        </li>
                                        <li>
                                            <h4>Extra Bed Price</h4>
                                            <h6>300</h6>
                                        </li>
                                        <li>
                                            <h4>Amenities</h4>
                                            <h6>Wifi  - Free Breakast - Private Balcony - Free Pool Access</h6>
                                        </li>
                                        <li>
                                            <h4>Base price</h4>
                                            <h6>1250</h6>
                                        </li>
                                        <li>
                                            <h4>Additional Person Price</h4>
                                            <h6>300</h6>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="slider-product-details">
                                    <div class="owl-carousel owl-theme product-slide">
                                        <div class="slider-product">
                                            <img src="<?=site_url('assets/hotelresto')?>/images/hotel/room/deluxe3.jpg" alt="img">
                                            <h4>Deluxe3.jpg</h4>
                                            <h6>Php 1259</h6>
                                        </div>
                                        <div class="slider-product">
                                            <img src="<?=site_url('assets/hotelresto')?>/images/hotel/room/deluxe4.jpg" alt="img">
                                            <h4>Deluxe3.jpg</h4>
                                            <h6>Php 1259</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-submit">Update</button>
                    <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>


    <?= $this->include('Admin/inc/end-script.php'); ?>


    <script src="<?= site_url('assets/admin') ?>/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="<?= site_url('assets/admin') ?>/plugins/sweetalert/sweetalerts.min.js"></script>
    
    <script src="<?= site_url('assets/admin') ?>/plugins/owlcarousel/owl.carousel.min.js"></script>

    <script src="<?= site_url('assets/admin') ?>/plugins/summernote/summernote-bs4.min.js"></script>

    <script src="<?= site_url('assets/admin') ?>/js/script.js"></script>
    
</body>

</html>