<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('admin/inc/head-css', array('title' => 'Price Manager')); ?>
    
    <link rel="stylesheet" href="<?=site_url('assets/admin')?>/css/bootstrap-datetimepicker.min.css">
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
                                        <th>Room Type</th>
                                        <th>Mon</th>
                                        <th>Tue</th>
                                        <th>Wed </th>
                                        <th>Thu</th>
                                        <th>Fri</th>
                                        <th>Sat</th>
                                        <th>Sun</th>
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
                                        <td>Deluxe Room</td>
                                        <td>&#x20B1; 1250.00</td>
                                        <td>&#x20B1; 1250.00</td>
                                        <td>&#x20B1; 1250.00</td>
                                        <td>&#x20B1; 1250.00</td>
                                        <td>&#x20B1; 1250.00</td>
                                        <td>&#x20B1; 1300.00</td>
                                        <td>&#x20B1; 1300.00</td>

                                      
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


    <?= $this->include('Admin/inc/end-script.php'); ?>
    <script src="<?=site_url('assets/admin')?>/js/bootstrap-datetimepicker.min.js"></script>    

    <script src="<?=site_url('assets/admin')?>/js/moment.min.js"></script>
    <script src="<?= site_url('assets/admin') ?>/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="<?= site_url('assets/admin') ?>/plugins/sweetalert/sweetalerts.min.js"></script>

    <script src="<?= site_url('assets/admin') ?>/js/script.js"></script>
</body>

</html>