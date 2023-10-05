<script>
    $(document).ready(function() {

new WOW().init();

const currentDate = new Date();
var checkin = $('#datepicker').datepicker({
    uiLibrary: 'bootstrap4',
    format: "dd mmm yyyy",
    minDate: currentDate,


    close: function(e) {
        checkout.datepicker("destroy");
        $('#datepicker1').attr('disabled', false)
        $('#datepicker1').datepicker({
            
            uiLibrary: 'bootstrap4',
            format: "dd mmm yyyy",
            minDate: checkin.value(),
            close: function(e) {
        $("#divGuest").show(); 
    }
        });
        checkout.datepicker().open();
       
    }
});
var checkout = $('#datepicker1').datepicker({
    uiLibrary: 'bootstrap4',
    format: "dd mmm yyyy",
    minDate: currentDate,

});
$('#event_picker').datepicker({
    uiLibrary: 'bootstrap4',
    format: "dd mmm yyyy",
    minDate: currentDate,
});
$('#service_picker').datepicker({
    uiLibrary: 'bootstrap4',
    format: "dd mmm yyyy",
    minDate: currentDate,
});




});
//handles guest increase and decrease count
$(document).ready(function() {
$('.btn-number').click(function(e) {
    e.preventDefault();

    fieldName = $(this).attr('data-field');
    type = $(this).attr('data-type');
    var input = $("input[name='" + fieldName + "']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if (type == 'minus') {

            if (currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            }
            if (parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if (type == 'plus') {

            if (currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if (parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function() {
    $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {

    minValue = parseInt($(this).attr('min'));
    maxValue = parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());

    name = $(this).attr('name');
    if (valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if (valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }


});

$(".input-number").keydown(function(e) {

    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||

        (e.keyCode == 65 && e.ctrlKey === true) ||
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});

 $("#room").change(function() {
        var roomCount = parseInt($(this).val());
        var adultCount = parseInt($("#adult").val());

        // Ensure at least 1 adult per room
        if (adultCount < roomCount) {
            $("#adult").val(roomCount);
        }
    });

    $("#add-btn").on("click", function() {
        const input1 = parseFloat($("#adult").val());
        const input2 = parseFloat($("#child").val());
        const input3 = parseFloat($("#room").val());

        if (!isNaN(input1) && !isNaN(input2) && !isNaN(input3)) {
            // Ensure at least 1 adult per room
            if (input1 < input3) {
                $("#adult").val(input3);
            }

            const guest = input1 + " adults • " + input2 + " kids • " + input3 + " rooms";
            $("#guest").val(guest);
            $("#divGuest").hide();
        } else {
            $("#guest").val("Invalid Input");
        }
    });

});
</script>