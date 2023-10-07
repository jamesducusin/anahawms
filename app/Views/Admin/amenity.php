<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('admin/inc/head-css', array('title' => 'Amenities')); ?>

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
                        <h4>Amenities</h4>
                        <h6>Manage Amenities</h6>
                    </div>
                    <div class="page-btn">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add-amenity" class="btn btn-added"><img src="<?= site_url('assets/admin') ?>/img/icons/plus.svg" alt="img" class="me-1">Add New amenity</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-top">
                            <div class="search-set">

                                <div class="search-input">
                                    <a class="btn btn-searchset"><img src="<?= site_url('assets/admin') ?>/img/icons/search-white.svg" alt="img"></a>
                                </div>
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
                                        <th>Name</th>

                                        <th>Price</th>
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
                                            <a href="javascript:void(0);">Laundry</a>
                                        </td>

                                        <td>&#x20B1; 180.00</td>
                                        <td>
                                            <div class="status-toggle d-flex justify-content-between  align-items-center">
                                                <input type="checkbox" id="user1" class="check" checked>
                                                <label for="user1" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>

                                            <a class="me-3" href="#" data-bs-target="#edit-amenity" data-bs-toggle="modal">
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

    <div class="modal fade" id="edit-amenity" tabindex="-1" data-bs-backdrop="static" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Amenity</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group">
                            <label>Name<span class="manitory">*</span></label>
                            <input type="text" value="">
                        </div>
                        <div class="form-group">
                            <label>Short Description<span class="manitory">*</span></label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8 col-sm-6   ">
                                    <label>Icon<span class="manitory">*</span></label>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <a href="https://muffingroup.com/betheme/elements/icons/" target="_blank"><i class="fa fa-tags mx-2"></i><small>Icon reference</small></a>
                                </div>


                            </div>

                            <input type="text" value="">
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-submit">Confirm</button>
                    <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="add-amenity" tabindex="-1" data-bs-backdrop="static" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Amenity</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group">
                            <label>Name<span class="manitory">*</span></label>
                            <input type="text" value="">
                        </div>
                        <div class="form-group">
                            <label>Short Description<span class="manitory">*</span></label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8 col-sm-6   ">
                                    <label>Icon<span class="manitory">*</span></label>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <a href="https://muffingroup.com/betheme/elements/icons/" target="_blank"><i class="fa fa-tags mx-2"></i><small>Icon reference</small></a>
                                </div>


                            </div>

                            <input type="text" value="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-submit">Confirm</button>
                    <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                </div>

            </div>
        </div>
    </div>





    <?= $this->include('Admin/inc/end-script.php'); ?>


    <script src="<?= site_url('assets/admin') ?>/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="<?= site_url('assets/admin') ?>/plugins/sweetalert/sweetalerts.min.js"></script>



    <script src="<?= site_url('assets/admin') ?>/js/script.js"></script>

</body>

</html>