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
                        <h4>Booking List</h4>
                        <h6>Manage your booking</h6>
                    </div>
                    <div class="page-btn">
                        <a href="<?= site_url('admin/') ?>" data-bs-toggle="modal" data-bs-target="#add" class="btn btn-added"><img src="<?= site_url('assets/admin') ?>/img/icons/plus.svg" alt="img" class="me-1">Add Walkthrough Booking</a>
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
                                                        <option selected>Choose Roomtype</option>
                                                        <option>Macbook pro</option>
                                                        <option>Orange</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <div class="input-groupicon">
                                                        <input type="text" placeholder="Checkin" class="datetimepicker">
                                                        <div class="addonset">
                                                            <img src="<?= site_url('assets/admin') ?>/img/icons/calendars.svg" alt="img">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <div class="input-groupicon">
                                                        <input type="text" placeholder="Checkout" class="datetimepicker">
                                                        <div class="addonset">
                                                            <img src="<?= site_url('assets/admin') ?>/img/icons/calendars.svg" alt="img">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="select">
                                                        <option selected>Payment type</option>
                                                        <option>N/D</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="select">
                                                        <option selected>Booking status</option>
                                                        <option>N/D</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <div class="input-groupicon">
                                                        <input type="text" placeholder="Booking Date" class="datetimepicker">
                                                        <div class="addonset">
                                                            <img src="<?= site_url('assets/admin') ?>/img/icons/calendars.svg" alt="img">
                                                        </div>
                                                    </div>
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
                            <table class="table datanew">
                                <thead>
                                    <tr>
                                    <th>
                                            <label class="checkboxs">
                                                <input type="checkbox" id="select-all">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </th>
                                        <th>Booking #</th>
                                        <th>Room</th>
                                        <th>Guest</th>
                                        <th>Booking Period</th>
                                
                                        <th>Amount</th>
                      
                                        <th>Payment (&#x20B1;)</th>
                                        <th>    Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>
                                            <label class="checkboxs">
                                                <input type="checkbox" id="select-all">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td>#110121123</td>
                                        <td>Deluxe<br>Rm-101</td>
                                        <td>james<br>09123456789</td>
                                        <td>In: 21 Sep 2023<br>Out: 23 Sep 2023</td>
                                      
                                        <td>Paid:1000<br>Due:650</td>
                                  
                                        <td class="mx-3"><span class=" badges bg-info ">Partial</span></td>
                                        <td class="mx-3"><span class="  badges bg-lightyellow">Pending</span></td>
                                        <td>
                                            <a class="me-3 confirm-text" href="<?= site_url('admin/') ?>">
                                                <img src="<?= site_url('assets/admin') ?>/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="<?= site_url('admin/') ?>">
                                                <img src="<?= site_url('assets/admin') ?>/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
                                                <img src="<?= site_url('assets/admin') ?>/img/icons/accept.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
                                                <img src="<?= site_url('assets/admin') ?>/img/icons/reject.svg" alt="img">
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
  

    <?= $this->include('Admin/inc/end-script.php'); ?>
    <script src="<?= site_url('assets/admin') ?>/js/moment.min.js"></script>
    <script src="<?= site_url('assets/admin') ?>/js/bootstrap-datetimepicker.min.js"></script>


    <script src="<?= site_url('assets/admin') ?>/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="<?= site_url('assets/admin') ?>/plugins/sweetalert/sweetalerts.min.js"></script>

    <script src="<?= site_url('assets/admin') ?>/js/script.js"></script>
</body>

</html>