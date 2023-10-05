<?php

function alert_message($message)
{
    if (session()->has('success')) : ?>
        <div class="alert alert-success alert-dismissible alert-label-icon rounded-label" role="alert">
            <i class="ri-notification-off-line label-icon"></i><strong>Success</strong> - <?= session()->getFlashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php elseif (session()->has('error')) : ?>
        <div class="alert alert-danger alert-dismissible alert-label-icon rounded-label" role="alert">
            <i class="ri-error-warning-line label-icon"></i><strong>Failed</strong> - <?= session()->getFlashdata('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>


<?php } ?>