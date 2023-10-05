<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="sideNav" data-id="dashboard">
                    <a href="<?=site_url('admin/dashboard')?>"><img src="<?=site_url('assets/admin')?>/img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
                </li>
                <li class="sideNav" data-id="booking">
                    <a href="<?=site_url('admin/booking')?>"><img src="<?=site_url('assets/admin')?>/img/icons/calendars.svg" alt="img"><span> Booking</span> </a>
                </li>
                <li class="sideNav" data-id="guest">
                    <a href="<?=site_url('admin/guest')?>"><img src="<?=site_url('assets/admin')?>/img/icons/users1.svg" alt="img"><span> Guest</span> </a>
                </li>
                <li class="submenu">
                    <a href="#"><img src="<?=site_url('assets/admin')?>/img/icons/settings.svg" alt="img"><span> Hotel Configuration</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="sideNav" data-id="type" href="<?=site_url('admin/room/type')?>">Room Type</a></li>
                        <li><a class="sideNav" data-id="room" href="<?=site_url('admin/room')?>">Rooms</a></li>
                        <li><a class="sideNav" data-id="manager" href="<?=site_url('admin/price/manager')?>">Price manager</a></li>
                        <li><a class="sideNav" data-id="service" href="<?=site_url('admin/service')?>">Paid services</a></li>
                        <li><a class="sideNav" data-id="amenity" href="<?=site_url('admin/amenity')?>">Amenities</a></li>
                        <li><a class="sideNav" data-id="housekeeping" href="<?=site_url('admin/housekeeping')?>">Housekeeping</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
