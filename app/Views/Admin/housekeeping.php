<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('admin/inc/head-css', array('title' => 'Booking')); ?>

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
                        <h4>Housekeeping</h4>
                        <h6>Manage Housekeeping</h6>
                    </div>
                    <div class="page-btn">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add-housekeeping" class="btn btn-added"><img src="<?= site_url('assets/admin') ?>/img/icons/plus.svg" alt="img" class="me-1">Add</a>
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
                                <?php foreach($datas as $data):?>
                                    <tr>
                                      
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>

                                        <td><?= $data['roomNumber']?></td>
                                        <td><?= $data['name']?></td>
                                        <td><?= $data['floor']?></td>
                                        <td><?= $data['firstname'] . ' ' , $data['lastname']?></td>
                                        <td><span class="badges bg-danger"><?= ($data['housekeeping_status'] === '0')?'Dirty':'Cleaned';?></span> </td>

                                        <td>
                                           
                                            <a class="me-3 button-update-housekeeping" href="#"
                                                data-idd="<?= $data['id']?>"
                                                data-roomnumber="<?= $data['roomNumber']?>"
                                                data-floor="<?= $data['floor']?>"
                                                data-name="<?= $data['name']?>"
                                                data-housekeeping_status="<?= ($data['housekeeping_status'] === '0')?'Dirty':'Cleaned'?>"
                                                data-remarks="<?= $data['remarks']?>"
                                                data-user_id="<?= $data['user_id']?>"
                                                data-date_limit="<?= $data['date_limit']?>" >
                                                <img src="<?= site_url('assets/admin') ?>/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0); <?= base_url('/admin/housekeeping/' . $data['housekeeping_id'])?>">
                                                <img src="<?= site_url('assets/admin') ?>/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                 
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
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
                <form action="<?= base_url('/admin/housekeeping');?>" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Room #</label>
                                    <input type="hidden" value="add_housekeeping" name="update_housekeeping">
                                    <select class="select" name="roomNumber">
                                        <option selected>Choose Room</option>
                                        <?php foreach($room_data as $data):?>
                                        <option value="<?= $data['id']?>"><?= $data['roomNumber']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label>Housekeeping Status</label>
                                    <select class="select" name="housekeeping_status">
                                        <option>Choose Status</option>
                                        <option selected value="0" selected> Dirty</option>
                                        <option value="1"> Cleaned</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Remarks<span class="manitory">*</span></label>
                                    <textarea name="remarks">Fixed it</textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label>Assigned to<span class="manitory">*</span></label>
                                    <select required class="select" name="user_id">
                                        <option>Choose</option>
                                        <?php foreach($users as $user):?>
                                        <option selected value="<?= $user['user_id']?>"><?= $user['firstname'] . ' ' . $user['lastname']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label>Date<span class="manitory">*</span></label>
                                    <div class="input-groupicon">
                                        <input required type="text" placeholder="<?= Date('d M Y') ?>" class="datetimepicker" name="date_limit">
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
    <div class="modal fade" data-bs-backdrop="static" id="edit-housekeeping" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Housekeeping</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('/admin/housekeeping');?>" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Room #</label>
                                <input type="hidden" name="update_housekeeping" value="update_housekeeping">
                                <input type="hidden" name="idd" class="idd">
                                <input type="hidden" name="user_id" class="user_id">
                                <input type="text" disabled class="roomnumber">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Room Type</label>
                                <input type="text" disabled class="name">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Floor</label>
                                <input type="text" disabled class="floor">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12">
                            <div class="form-group mb-3">
                                <label>Housekeeping Status</label>
                                <select class="select housekeeping_status" name="housekeeping_status">
                                        <option>Choose Status</option>
                                        <option>Dirty</option>
                                        <option>Cleaned</option>
                                    </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                            <label>Remarks<span class="manitory">*</span></label>
                                <textarea class="remarks" name="remarks"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-3">
                                <label>Assigned to<span class="manitory">*</span></label>
                                <select required class="select user_id">
                                    <option value="">Choose </option>
                                    <?php foreach($users as $user):?>
                                    <option value="<?= $user['user_id']?>"><?= $user['firstname'] . ' ' . $user['lastname']?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-3">
                                <label>Date<span class="manitory">*</span></label>
                                <div class="input-groupicon">
                                    <input required type="text" placeholder="<?= Date('d M Y') ?>" class="datetimepicker date_limit">
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


    <?= $this->include('Admin/inc/end-script.php'); ?>
    <script src="<?= site_url('assets/admin') ?>/js/moment.min.js"></script>
    <script src="<?= site_url('assets/admin') ?>/js/bootstrap-datetimepicker.min.js"></script>


    <script src="<?= site_url('assets/admin') ?>/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="<?= site_url('assets/admin') ?>/plugins/sweetalert/sweetalerts.min.js"></script>
    <?= $this->include('Guest/inc/toastr.php') ?>
    <script src="<?= site_url('assets/admin') ?>/js/script.js"></script>
</body>

</html>

<script>
        $(document).ready(function() {
    // sa button
            $('.button-update-housekeeping').on('click', function() {
    
            const idd = $(this).data('idd');
            const roomnumber = $(this).data('roomnumber');
            const floor = $(this).data('floor');
            const housekeeping_status = $(this).data('housekeeping_status');
            const name = $(this).data('name');
            const remarks = $(this).data('remarks');
            const user_id = $(this).data('user_id');
            const date_limit = $(this).data('date_limit');

            console.log(housekeeping_status);
      
            $('.idd').val(idd);
            $('.roomnumber').val(roomnumber);
            $('.floor').val(floor);
            $('.housekeeping_status').val(housekeeping_status);
            $('.name').val(name);
            $('.remarks').val(remarks);
            $('.user_id').val(user_id);
            $('.date_limit').val(date_limit).trigger('change');
         
            $('#edit-housekeeping').modal('show');
        });
    });
</script>