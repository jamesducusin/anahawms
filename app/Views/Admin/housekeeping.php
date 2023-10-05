<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('admin/inc/head-css', array('title' => 'Booking')); ?>

    <link rel="stylesheet" href="<?= site_url('assets/admin') ?>/css/bootstrap-datetimepicker.min.css">
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
                        <h4>Housekeeping</h4>
                        <h6>Manage Housekeeping</h6>
                    </div>
                    <div class="page-btn">
                        <a href="addproduct.html" class="btn btn-added"><img src="<?= site_url('assets/admin') ?>/img/icons/plus.svg" alt="img" class="me-1">Add</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-top">
                            <div class="search-set">
                                <div class="search-path">
                                    <a class="btn btn-filter" id="filter_search">
                                        <img src="<?= site_url('assets/admin') ?>/img/icons/filter.svg" alt="img">
                                        <span><img src="<?= site_url('assets/admin') ?>/img/icons/closes.svg" alt="img"></span>
                                    </a>
                                </div>
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

                        <div class="card mb-0" id="filter_inputs">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="select">
                                                        <option>Choose Product</option>
                                                        <option>Macbook pro</option>
                                                        <option>Orange</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="select">
                                                        <option>Choose Category</option>
                                                        <option>Computers</option>
                                                        <option>Fruits</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="select">
                                                        <option>Choose Sub Category</option>
                                                        <option>Computer</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="select">
                                                        <option>Brand</option>
                                                        <option>N/D</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12 ">
                                                <div class="form-group">
                                                    <select class="select">
                                                        <option>Price</option>
                                                        <option>150.00</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <a class="btn btn-filters ms-auto"><img src="<?= site_url('assets/admin') ?>/img/icons/search-whites.svg" alt="img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table  datanew">
                                <thead>
                                    <tr>
                                        <th>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </th>
                                        <th>Room #</th>
                                        <th>Room Type </th>
                                        <th>Floor </th>
                                        <th>Assigned to</th>
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

                                        <td>Rm-101</td>
                                        <td>Deluxe Room </td>
                                        <td>1st Floor </td>
                                        <td>James Ducusin</td>
                                        <td><span class="badges bg-danger">Dirty</span> </td>
                                       
                                        <td>
                                            <a class="me-3" href="#" data-bs-target="#view-type" data-bs-toggle="modal">
                                                <img src="<?= site_url('assets/admin') ?>/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="#" data-bs-target="#edit-housekeeping" data-bs-toggle="modal">
                                                <img src="<?= site_url('assets/admin') ?>/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
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
    <div class="modal fade" id="edit-housekeeping" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Housekeeping</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-12">
                            <div class="form-group mb-3">
                                <label>Housekeeping Status</label>
                                <select class="select">
                                    <option>Choose Status</option>
                                    <option selected> Dirty</option>
                                    <option> Cleaned</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Remarks<span class="manitory">*</span></label>
                                <input type="text" value="Fixed it">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-3">
                                <label>Assigned to<span class="manitory">*</span></label>
                                <select class="select">
                                    <option>Choose </option>
                                    <option selected> James Ducusin</option>
                                    <option> Joshua Mercene</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-3">
                            <label>Date<span class="manitory">*</span></label>
                                <div class="input-groupicon">
                                    <input type="text" placeholder="<?=Date('d M Y')?>" class="datetimepicker">
                                    <div class="addonset">
                                        <img src="<?= site_url('assets/admin') ?>/img/icons/calendars.svg" alt="img">
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
    <script src="<?= site_url('assets/admin') ?>/js/moment.min.js"></script>
    <script src="<?= site_url('assets/admin') ?>/js/bootstrap-datetimepicker.min.js"></script>


    <script src="<?= site_url('assets/admin') ?>/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="<?= site_url('assets/admin') ?>/plugins/sweetalert/sweetalerts.min.js"></script>

    <script src="<?= site_url('assets/admin') ?>/js/script.js"></script>
</body>

</html>