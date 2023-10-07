<?php
function toastr()
{
    // Get flash messages from session
    $infoMsg = session()->getFlashdata('info');
    $successMsg = session()->getFlashdata('success');
    $warningMsg = session()->getFlashdata('warning');
    $dangerMsg = session()->getFlashdata('danger');
    ?>

    <script>
        $(document).ready(function() {
            "use strict";
            var infoMsg = "<?= $infoMsg ?>";
            var successMsg = "<?= $successMsg ?>";
            var warningMsg = "<?= $warningMsg ?>";
            var dangerMsg = "<?= $dangerMsg ?>";

            if (infoMsg !== "") {
                toastr.info(infoMsg, {
                    closeButton: true,
                    tapToDismiss: false,
                    progressBar: true,
                    rtl: false
                });
            } else if (successMsg !== "") {
                toastr.success(successMsg, {
                    closeButton: true,
                    tapToDismiss: false,
                    progressBar: true,
                    rtl: false
                });
            } else if (warningMsg !== "") {
                toastr.warning(warningMsg, {
                    closeButton: true,
                    tapToDismiss: false,
                    progressBar: true,
                    rtl: false
                });
            } else if (dangerMsg !== "") {
                toastr.error(dangerMsg, {
                    closeButton: true,
                    tapToDismiss: false,
                    progressBar: true,
                    rtl: false
                });
            }
        });
    </script>

    <?php
}
?>