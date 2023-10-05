<!DOCTYPE html>
<html lang="en">

<head>


    <?php echo view('admin/inc/head-css', array('title' => 'Rooms')); ?>

    <link rel="stylesheet" href="<?= site_url('assets/admin/') ?>css/style.css">



</head>

<body>
    <?= $this->include('Admin/inc/loader.php'); ?>

    <div class="main-wrapper">

        <?= $this->include('Admin/inc/header-nav.php'); ?>
        <?= $this->include('Admin/inc/sidebar-nav.php'); ?>

        <div class="page-wrapper">
            <div class="content">
                <div class="row">


                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count">
                            <div class="dash-counts">
                                <h4>18</h4>
                                <h5>ROOMS</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="home"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das1">
                            <div class="dash-counts">
                                <h4>2</h4>
                                <h5>FLOORS</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="layers"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das2">
                            <div class="dash-counts">
                                <h4>4</h4>
                                <h5>ROOM TYPES</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="grid"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das3">
                            <div class="dash-counts">
                                <h4>5</h4>
                                <h5>BOOKED ROOM TODAY</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="book"></i>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card mb-0">
                    <div class="card-body">
                        
                        <div class="page-header">
                            
                            <div class="page-title">
                                
                                <h4>Rooms</h4>
                                <h6>Manage rooms</h6>
                                
                            </div>
                            <div class="row " style="width:320px">
                           
                            <div class="col-sm-6 wordset" >
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
                                <div class="col-sm-6     page-btn">
                                    <a href="#" data-bs-target="#add-room" data-bs-toggle="modal" class=" btn-sm btn-added"><img src="<?= site_url('assets/admin') ?>/img/icons/plus.svg" alt="img">Add Rooms</a>
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
                                        <th>Room type </th>
                                        <th>Floor #</th>
                                        <th>Availability</th>
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
                                            <a href="javascript:void(0);">Rm-101</a>
                                        </td>

                                        <td>Deluxe </td>
                                        <td>1st floor</td>
                                        <td><span class="badges bg-lightyellow ">Occupied</span> </td>
                                        <td>
                                            <span data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Housekeeping">
                                                <a class="me-3" href="#" data-bs-toggle="modal" data-bs-target="#housekeeping">
                                                    <img src="<?= site_url('assets/admin') ?>/img/icons/housekeeping.svg" alt="img">
                                                </a>
                                            </span>

                                            <span data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit">
                                                <a class="me-3" href="#" data-bs-toggle="modal" data-bs-target="#edit-room">
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
        </div>
    </div>

    <div class="modal fade" id="edit-room" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit room</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group mb-3">
                                <label>Room Number<span class="manitory">*</span></label>
                                <input type="text" value="Rm-101">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-3">
                                <label>Room Type</label>
                                <select class="select">
                                    <option>Choose Type</option>
                                    <option selected> Deluxe</option>
                                    <option> Poolside</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-3">
                                <label>Floor</label>
                                <select class="select">
                                    <option>Choose Type</option>
                                    <option selected> 1st floor</option>
                                    <option> 2nd floor</option>
                                </select>
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
    <div class="modal fade" id="clean-room" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit room</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Room Number<span class="manitory">*</span></label>
                                <input type="text" value="Rm-101">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-0">
                                <label>Room Type</label>
                                <select class="select">
                                    <option>Choose Type</option>
                                    <option selected> Deluxe</option>
                                    <option> Poolside</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-0">
                                <label>Floor</label>
                                <select class="select">
                                    <option>Choose Type</option>
                                    <option selected> 1st floor</option>
                                    <option> 2nd floor</option>
                                </select>
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
    <div class="modal fade" id="add-room" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add room</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group mb-3">
                                <label>Floor</label>
                                <select class="select">
                                    <option>Choose Floor</option>
                                    <option>1st floor</option>
                                    <option>2nd floor</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="input_fields_wrap">
                        <div class="row copy-row"> <!-- copy this row -->
                            <div class="col-md-5">
                                <label class="mb-2">Room Number</label>
                                <div class="form-group">
                                    <input type="text" placeholder="Room number" name="room_number[]" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Room Type</label>
                                    <select class="select" name="room_type_id[]">
                                        <option>Choose Type</option>
                                        <option value="traveller">traveller</option>
                                        <option value="dormitory">dormitory</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 mt-1">
                                <div class="mt-4">
                                    <a class="btn btn-primary bt-sm add-more-btn" href="#">Add More</a>
                                </div>
                            </div>
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

    <script src="<?= site_url('assets/admin') ?>/plugins/apexchart/apexcharts.min.js"></script>
    <script src="<?= site_url('assets/admin') ?>/plugins/apexchart/chart-data.js"></script>
    <script src="<?= site_url('assets/admin') ?>/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="<?= site_url('assets/admin') ?>/plugins/sweetalert/sweetalerts.min.js"></script>

    <script src="<?= site_url('assets/admin') ?>/js/script.js"></script>

    <script>
        $(document).ready(function() {
            $(".add-more-btn").click(function(e) {
                e.preventDefault(); // Prevent the default anchor link behavior
                $(".input_fields_wrap").append('<div class="row copy-row"><div class="col-md-5"><div class="form-group"><input type="text" placeholder="Room number" name="room_number[]" class="form-control"></div></div><div class="col-md-5"><div class="form-group"><select class="select" name="room_type_id[]"><option>Choose Type</option><option value="deluxe">deluxe</option><option value="poolside">poolside</option></select></div></div><div class="col-md-2"><div><a class="btn btn-danger bt-sm delete-btn" href="#">Delete</a></div></div></div>');
                $(".select").select2();
            });
            $(".input_fields_wrap").on("click", ".delete-btn", function(e) {
                e.preventDefault();
                $(this).closest('.copy-row').remove(); // Remove the closest parent with class 'copy-row'
            });
        });
    </script>
</body>

</html>