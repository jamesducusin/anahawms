<!DOCTYPE html>
<html lang="en">

<head>


    <?php echo view('admin/inc/head-css', array('title' => 'Rooms')); ?>
    <link rel="stylesheet" href="<?= site_url('assets/admin') ?>/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="<?= site_url('assets/admin/') ?>css/style.css">
    <link rel="stylesheet" href="<?= site_url('assets/admin') ?>/plugins/toastr/toatr.css">

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
                        <h4>Rooms</h4>
                        <h6>Manage rooms</h6>
                    </div>
                   
                </div>
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
                <div class="row"> 
                <div class="page-header">
                    <div class="page-title"></div>
                    <div class="page-btn">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add-room" class="btn btn-added"><img src="<?= site_url('assets/admin') ?>/img/icons/plus.svg" alt="img" class="me-1">Add New Room</a>
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
                                        <th>Room #</th>
                                        <th>Room type </th>
                                        <th>Floor #</th>
                                        <th>Availability</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($rooms as $room):?>
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
                                            <a href="javascript:void(0);"><?= $room['roomNumber']?></a>
                                        </td>

                                        <td><?= $room['name']?></td>
                                        <td><?= $room['floor']?></td>
                                        <?php if($room['rooms_status'] == '0'):?>
                                            <td><span class="badges bg-lightyellow ">Occupied</span> </td>
                                        <?php else:?>
                                            <td><span class="badges bg-green">sad</span></td>
                                        <?php endif;?>
                                        <td>
                                            <span data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Housekeeping">
                                                <a class="me-3 button-housekeeping" href="#" data-bs-toggle="modal" data-bs-target="#add-housekeeping"
                                                data-housekeeping_room_number="<?= $room['roomNumber']?>"
                                                data-housekeeping_room_id="<?= $room['id']?>"
                                                data-housekeeping_id="<?= $room['housekeeping_id']?>"
                                                data-housekeeping_status="<?= ($room['housekeeping_status'] === '0')?'Dirty':'Cleaned'?>"
                                                data-housekeeping_remarks="<?= $room['remarks']?>"
                                                data-housekeeping_user_id="<?= $room['user_id']?>"
                                                data-housekeeping_date_limit="<?= $room['date_limit']?>"
                                                >
                                                    <img src="<?= site_url('assets/admin') ?>/img/icons/housekeeping.svg" alt="img">
                                                </a>
                                            </span>
                                            <span data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit">
                                                <a class="me-3 button-update" href="#" data-bs-toggle="modal" data-bs-target="#edit-room"
                                                data-room_id="<?= $room['id']?>"
                                                data-room_type_id="<?= $room['type_id']?>"
                                                data-floor="<?= $room['floor']?>"
                                                data-room_number="<?= $room['roomNumber']?>">
                                                    <img src="<?= site_url('assets/admin') ?>/img/icons/edit.svg" alt="img">
                                                </a></span>
                                            <span data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete">
                                                <a class="me-3 button-delete" href="javascript:void(0);" 
                                                data-delete_room_id="<?= $room['id']?>"
                                                data-delete_room_value="delete_room_value"
                                                >
                                                    <img src="<?= site_url('assets/admin') ?>/img/icons/delete.svg" alt="img">
                                                </a></span>
                                        </td>
                              
                                    </tr>
                                    <?php endforeach;?>
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
    <div class="modal fade" data-bs-backdrop="static" id="add-housekeeping" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Housekeeping</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= site_url('admin/room');?>" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Room #</label>
                        <input type="text" class="housekeeping_room_number" disabled>
                        <input type="hidden" name="housekeeping_room_id" class="housekeeping_room_id">
                        <input type="hidden" name="housekeeping_id" class="housekeeping_id">
                        
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label>Housekeeping Status</label>
                                    <input type="hidden" name="room_value" value="housekeeping_status">
                                    
                                    <select class="select housekeeping_status" name="status">
                                        <option>Choose Status</option>
                                        <option> Dirty</option>
                                        <option> Cleaned</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Remarks<span class="manitory">*</span></label>
                                    <textarea name="remarks" class="housekeeping_remarks"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label>Assigned to<span class="manitory">*</span></label>
                                    <select class="select housekeeping_user_id" name="user_id">
                                        <option>Choose </option>
                                        <?php foreach($users as $user):?>
                                        <option value="<?= $user['id']?>" ><?= $user['firstname'] . ' ' . $user['lastname']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label>Date<span class="manitory">*</span></label>
                                    <div class="input-groupicon">
                                        <input type="text" name="date_limit" placeholder="<?= Date('d M Y') ?>" class="datetimepicker" required>
                                        <div class="addonset">
                                            <img src="<?= site_url('assets/admin') ?>/img/icons/calendars.svg" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-submit">Update</button>
                        <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
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
                <form action="<?= site_url('admin/room');?>" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label>Room Number<span class="manitory">*</span></label>
                                    <input type="hidden" name="room_value" value="update_room">
                                    <input type="hidden" name="id" class="id">
                                    <input type="text" name="room_number" class="room_number">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label>Room Type</label>
                                    <select class="select room_type_id" name="room_type_id">
                                        <option >Choose Type</option>
                                        <?php foreach($room_type_datas as $room_type_data):?>
                                            <option value="<?= $room_type_data['id']?>"><?= $room_type_data['name']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label>Floor</label>
                                    <select class="select floor" name="floor">
                                        <option>Choose Type</option>
                                        <option selected> 1st floor</option>
                                        <option> 2nd floor</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-submit">Update</button>
                        <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
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
                <form action="<?= site_url('admin/room');?>" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label>Floor</label>
                                    <input type="hidden" name="room_value" value="insert_room">
                                    <select class="select" name="floor" required>
                                        <option value="">Choose Floor</option>
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
                                        <input type="text" placeholder="Room number" name="room_number[]" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Room Type</label>
                                        <select class="select" name="room_type_id[]" required>
                                            <option value="">Choose Type</option>
                                            <?php foreach($room_type_datas as $room_type_data):?>
                                            <option value="<?= $room_type_data['id']?>"><?= $room_type_data['name']?></option>
                                            <?php endforeach;?>
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
                    <button type="submit" class="btn btn-submit">Confirm</button>
                    <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                </div>
                </form>
                
            </div>
        </div>
    </div>


    <?= $this->include('Admin/inc/end-script.php'); ?>
    <script src="<?= site_url('assets/admin') ?>/js/moment.min.js"></script>
    <script src="<?= site_url('assets/admin') ?>/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?= site_url('assets/admin') ?>/plugins/apexchart/apexcharts.min.js"></script>
    <script src="<?= site_url('assets/admin') ?>/plugins/apexchart/chart-data.js"></script>
    <script src="<?= site_url('assets/admin') ?>/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="<?= site_url('assets/admin') ?>/plugins/sweetalert/sweetalerts.min.js"></script>
    <?= $this->include('Guest/inc/toastr.php') ?>

    <script src="<?= site_url('assets/admin') ?>/js/script.js"></script>

    <script>
        $(document).ready(function() {
            $(".add-more-btn").click(function(e) {
                e.preventDefault();
                var options = '';

                <?php foreach($room_type_datas as $room_type_data): ?>
                    options += '<option value="<?= $room_type_data['id'] ?>"><?= $room_type_data['name'] ?></option>';
                <?php endforeach; ?>

                $(".input_fields_wrap").append('<div class="row copy-row"><div class="col-md-5"><div class="form-group"><input type="text" placeholder="Room number" name="room_number[]" class="form-control" required></div></div><div class="col-md-5"><div class="form-group"><select class="select" name="room_type_id[]">' + options + '</select></div></div><div class="col-md-2"><div><a class="btn btn-danger bt-sm delete-btn" href="#">Delete</a></div></div></div>');
                $(".select").select2();
            });

            $(".input_fields_wrap").on("click", ".delete-btn", function(e) {
                e.preventDefault();
                $(this).closest('.copy-row').remove();
            });
        });

    </script>
<script>
        $(document).ready(function() {
   
            $('.button-update').on('click', function() {
    
            const id = $(this).data('room_id');
            const floor = $(this).data('floor');
            const room_type_id = $(this).data('room_type_id');
            const room_number = $(this).data('room_number');

            $('.id').val(id);
            $('.floor').val(floor);
            $('.room_type_id').val(room_type_id);
            $('.room_number').val(room_number).trigger('change');
  
            $('#edit-room').modal('show');
        });
    });
</script>

<script>
        $(document).ready(function() {
    // sa button
            $('.button-housekeeping').on('click', function() {
    
            const housekeeping_room_number = $(this).data('housekeeping_room_number');
            const housekeeping_room_id = $(this).data('housekeeping_room_id');
            const housekeeping_id = $(this).data('housekeeping_id');

            const housekeeping_status = $(this).data('housekeeping_status');
            const housekeeping_remarks = $(this).data('housekeeping_remarks');
            const housekeeping_user_id = $(this).data('housekeeping_user_id');
            const housekeeping_date_limit = $(this).data('housekeeping_date_limit');
      
            $('.housekeeping_id').val(housekeeping_id);
            $('.housekeeping_room_id').val(housekeeping_room_id);
            $('.housekeeping_room_number').val(housekeeping_room_number);
            $('.housekeeping_status').val(housekeeping_status);
            $('.housekeeping_remarks').val(housekeeping_remarks);
            $('.housekeeping_user_id').val(housekeeping_user_id);
            $('.housekeeping_date_limit').val(housekeeping_date_limit).trigger('change');
         
            $('#add-housekeeping').modal('show');
        });
    });
</script>

<script>
$(document).ready(function() {
    $(".button-delete").click(function(e) {
        e.preventDefault();

        var roomId = $(this).data('delete_room_id');
        var delete_room_value = $(this).data('delete_room_value');

        $.ajax({
            method: "post",
            url: "<?= site_url('admin/room');?>",
            data: {
                room_id: roomId,
                room_value: delete_room_value
            },
            success: function(response) {
                setTimeout(function() 
                {
                window.location.reload();
                }, 1000);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("AJAX Error:", errorThrown);
            }
        });
    });
});

</script>

</body>

</html>