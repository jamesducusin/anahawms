<!DOCTYPE html>
<html lang="en">

<head>


    <?php echo view('admin/inc/head-css', array('title' => 'Guest')); ?>

    <link rel="stylesheet" href="<?= site_url('assets/admin') ?>/plugins/twitter-bootstrap-wizard/form-wizard.css">
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
                        <h4>Guest</h4>
                        <h6>Manage Guest</h6>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count">
                            <div class="dash-counts">
                                <h4>18</h4>
                                <h5>Guest</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das1">
                            <div class="dash-counts">
                                <h4>2</h4>
                                <h5>VIP</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="user-check"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das2">
                            <div class="dash-counts">
                                <h4>4</h4>
                                <h5>BOOKINGS</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="book"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das3">
                            <div class="dash-counts">
                                <h4>5</h4>
                                <h5>INCOME</h5>
                            </div>
                            <div class="dash-imgs">
                                <img src="<?= site_url('assets/admin/img/icons/peso.svg') ?>" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="page-header">
                        <div class="page-title"></div>
                        <div class="page-btn">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#add-guest" class="btn btn-added"><img src="<?= site_url('assets/admin') ?>/img/icons/plus.svg" alt="img" class="me-1">Add Guest</a>
                        </div>

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
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </th>
                                        <th>Name</th>
                                        <th>Address </th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>VIP</th>
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
                                                <img src="<?= site_url('assets/admin') ?>/img/customer/customer1.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">James Ducusin</a>
                                        </td>

                                        <td>Ilaya, Calapan City,<br> Oriental Mindoro, Philippines </td>
                                        <td>james@gmail.com</td>
                                        <td>0909123456</td>
                                        <td>
                                            <div class="status-toggle d-flex justify-content-between align-items-center">
                                                <input type="checkbox" id="user1" class="check" checked="true">
                                                <label for="user2" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <span data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="View">
                                                <a class="me-3 " href="#" data-bs-target="#view-guest" data-bs-toggle="modal">
                                                    <img src="<?= site_url('assets/admin') ?>/img/icons/eye.svg" alt="img">
                                                </a>
                                            </span>

                                            <span data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit">
                                                <a class="me-3" href="#" data-bs-toggle="modal" data-bs-target="#edit-guest">
                                                    <img src="<?= site_url('assets/admin') ?>/img/icons/edit.svg" alt="img">
                                                </a></span>
                                            <span data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete">
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="<?= site_url('assets/admin') ?>/img/icons/delete.svg" alt="img">
                                                </a></span>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- </div>
            </div> -->
            <!-- </div> -->
        </div>
    </div>

    <div class="modal fade" id="edit-guest" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Account</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-4">

                    </div>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email <span class="manitory">*</span> </label>
                                    <input type="email" name="fname" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Role <span class="manitory">*</span> </label>
                                    <input type="text" name="" id="" value="Guest" disabled>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="pass-group">
                                        <input type="password" class=" pass-input">
                                        <span class="fas toggle-password fa-eye-slash"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <div class="pass-group">
                                        <input type="password" class=" confirm-input">
                                        <span class="fas fa-eye-slash toggle-confirm"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-submit">Update</button>
                    <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="view-guest" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">View Account</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="profile-set">
                            <div class="profile-head">
                            </div>
                            <div class="profile-top">
                                <div class="profile-content">
                                    <div class="profile-contentimg">
                                        <img src="<?=site_url('assets/admin')?>/img/customer/customer5.jpg" alt="img" id="blah">
                                        
                                    </div>
                                    <div class="profile-contentname">
                                        <h2>William Castillo</h2>
                                        <h4>Updates Your Photo and Personal Details.</h4>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" disabled value="James">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" disabled value="Ducusin">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" disabled value="james@gmail.com">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" disabled value="0909123456">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Birthday</label>
                                    <input type="text" disabled value="09 Sep 2000">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <input type="text" disabled value="Male">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Citizenship</label>
                                    <input type="text" disabled value="Filipino">
                                </div>
                            </div>
                            <div class="col-lg-6  col-sm-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" disabled value="Ilaya, Calapan City, Oriental Mindoro">
                                </div>
                            </div>
                            
                           
                            
                        </div>
                    
                </div>
                
            </div>
        </div>
    </div>

    <div class="modal fade" id="add-guest" tabindex="-1" data-bs-backdrop="static" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Guest</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="progrss-wizard" class="twitter-bs-wizard">
                        <ul class="twitter-bs-wizard-nav nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a href="#progress-user-detail" class="nav-link" data-toggle="tab">
                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="User Details">
                                        <i class="far fa-user"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#progress-address" class="nav-link" data-toggle="tab">
                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Address Detail">
                                        <i class="fas fa-map-pin"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#progress-account" class="nav-link" data-toggle="tab">
                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Account Details">
                                        <i class="fas fa-user-plus"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <div id="bar" class="progress mt-4">
                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated">
                            </div>
                        </div>
                        <div class="tab-content twitter-bs-wizard-tab-content">
                            <div class="tab-pane" id="progress-account">
                                <div>
                                    <div class="mb-4">
                                        <h5>Account Details</h5>
                                    </div>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email <span class="manitory">*</span> </label>
                                                    <input type="email" name="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Role </label>
                                                    <input type="text" value="Guest" disabled>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <div class="pass-group">
                                                        <input type="password" class=" pass-input">
                                                        <span class="fas toggle-password fa-eye-slash"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <div class="pass-group">
                                                        <input type="password" class=" confirm-input">
                                                        <span class="fas fa-eye-slash toggle-confirm"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                        <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                        <li class="float-end"><a href="javascript: void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".confirmModal">Save Changes</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane" id="progress-user-detail">
                                <div class="mb-4">
                                    <h5>User Details</h5>
                                </div>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name <span class="manitory">*</span> </label>
                                                <input type="text" name="fname" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name <span class="manitory">*</span> </label>
                                                <input type="text" name="lname" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gender <span class="manitory">*</span> </label>
                                                <select class="select" name="gender">
                                                    <option>Choose Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of Birth <span class="manitory">*</span> </label>
                                                <div class="input-groupicon">

                                                    <input type="text" class="dob">
                                                    <div class="addonset">
                                                        <img src="<?= site_url('assets/admin') ?>/img/icons/calendars.svg" alt="img">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Mobile<span class="manitory">*</span> </label>
                                                    <input type="text" name="lname" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="custom-file-container" data-upload-id="myFirstImage">
                                                        <label>Upload <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                                        <label class="custom-file-container__custom-file">
                                                            <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                                        </label>
                                                        <div class="custom-file-container__image-preview"></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                </form>
                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                    <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="progress-address">
                            <div>
                                <div class="mb-4">
                                    <h5>Location Details</h5>
                                </div>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Region</label>
                                                <select class="custom-select select" id="region" required></select>
                                                <input class="form-control" type="hidden" id="vregion" name="region" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Province</label>
                                                <select class="custom-select select" id="province" required></select>
                                                <input class="form-control" type="hidden" id="vprovince" name="province" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>City/Municipality</label>
                                                <select class="custom-select select" id="city" required></select>
                                                <input class="form-control" type="hidden" id="vcity" name="city" required>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Barangay</label>
                                                <select class="custom-select select" id="barangay" required></select>
                                                <input class="form-control" type="hidden" id="vbarangay" name="barangay" required>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Zip code</label>
                                                <input class="form-control" type="text" maxlength="5" name="postalcode" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Street</label>
                                                <input class="form-control" type="text" name="street" required>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label>Land mark</label>
                                            <input class="form-control" type="text" name="Landmark" required>
                                        </div>
                                    </div>

                                </form>
                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                    <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                    <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>






    <?= $this->include('Admin/inc/end-script.php'); ?>


    <script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>
    <script src="<?= site_url('assets/admin') ?>/js/address.js"></script>
    <script src="<?= site_url('assets/admin') ?>/js/moment.min.js"></script>
    <script src="<?= site_url('assets/admin') ?>/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?= site_url('assets/admin') ?>/plugins/fileupload/fileupload.min.js"></script>
    <script src="<?= site_url('assets/admin') ?>/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="<?= site_url('assets/admin') ?>/plugins/sweetalert/sweetalerts.min.js"></script>
    <script src="<?= site_url('assets/admin') ?>/plugins/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="<?= site_url('assets/admin') ?>/plugins/twitter-bootstrap-wizard/prettify.js"></script>
    <script src="<?= site_url('assets/admin') ?>/plugins/twitter-bootstrap-wizard/form-wizard.js"></script>



    <script src="<?= site_url('assets/admin') ?>/js/script.js"></script>


</body>

</html>