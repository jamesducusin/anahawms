<script src="<?= site_url('assets/admin') ?>/js/jquery-3.6.0.min.js"></script>

<script src="<?= site_url('assets/admin') ?>/js/feather.min.js"></script>

<script src="<?= site_url('assets/admin') ?>/js/jquery.slimscroll.min.js"></script>

<script src="<?= site_url('assets/admin') ?>/js/jquery.dataTables.min.js"></script>
<script src="<?= site_url('assets/admin') ?>/js/dataTables.bootstrap4.min.js"></script>

<script src="<?= site_url('assets/admin') ?>/js/bootstrap.bundle.min.js"></script>

<script src="<?= site_url('assets/admin') ?>/plugins/select2/js/select2.min.js"></script>


<script>
    $(document).ready(function() {
  // Retrieve the stored active ID from localStorage
  var activeID = localStorage.getItem('activeID');

  // Function to set the active class on a specific li element
  function setActive(id) {
    // Remove active class from all li elements
    $(".sideNav").removeClass('active');
    
    // Add active class to the li element with the matching data-id
    $(".sideNav[data-id='" + id + "']").addClass('active');
    
    // Store the active ID in localStorage
    localStorage.setItem('activeID', id);
  }

  // Initially set the active class
  if (activeID) {
    setActive(activeID);
  }

  // Handle click events on li elements with the class 'sideNav'
  $(".sideNav").on("click", function() {
    var clickedID = $(this).data('id');
    setActive(clickedID);
  });
});

</script>