<!doctype html>
<html lang="en" dir="ltr">

<head>

    <?php echo view('partials/title-meta', array('title' => 'Two Step Verification')); ?>

    <?= $this->include('auth/inc/head-css') ?>

</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="/" class="d-inline-block auth-logo">
                                    <img src="/assets/auth/images/logo.png" alt="" height="100">
                                </a>
                            </div>
                            <p class="mt-3 fs-15 fw-medium">Hotel and Restaurant Management System</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="mb-4">
                                    <div class="avatar-lg mx-auto">
                                        <div class="avatar-title bg-light text-primary display-5 rounded-circle">
                                            <i class="ri-mail-line"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-2 mt-4">
                                    <div class="text-muted text-center mb-4 mx-lg-3">
                                        <h4 class="">Verify Your Email</h4>
                                        <p>Please enter the 6 digit code sent to <span class="fw-semibold"><?=session()->get('email');?></span></p>
                                    </div>
                                    <?php session()->has('error') ? alert_message('success') :  alert_message('error');?>

                                    <form autocomplete="off" method="post" action="verification">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="mb-3">
                                                    <label for="digit1-input" class="visually-hidden">Digit 1</label>
                                                    <input type="text" class="form-control fs-3  bg-light border-dark text-center" name="otp[]" onkeyup="moveToNext(1, event)" maxLength="1" id="digit1-input" required>
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col-2">
                                                <div class="mb-3">
                                                    <label for="digit2-input" class="visually-hidden">Digit 2</label>
                                                    <input type="text" class="form-control fs-3 bg-light border-dark text-center" name="otp[]" onkeyup="moveToNext(2, event)" maxLength="1" id="digit2-input" required>
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col-2">
                                                <div class="mb-3">
                                                    <label for="digit3-input" class="visually-hidden">Digit 3</label>
                                                    <input type="text" class="form-control  fs-3 bg-light border-dark text-center" name="otp[]" onkeyup="moveToNext(3, event)" maxLength="1" id="digit3-input" required>
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col-2">
                                                <div class="mb-3">
                                                    <label for="digit4-input" class="visually-hidden">Digit 4</label>
                                                    <input type="text" class="form-control fs-3 bg-light border-dark text-center" name="otp[]" onkeyup="moveToNext(4, event)" maxLength="1" id="digit4-input" required>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-2">
                                                <div class="mb-3">
                                                    <label for="digit4-input" class="visually-hidden">Digit 5</label>
                                                    <input type="text" class="form-control fs-3 bg-light border-dark text-center" name="otp[]" onkeyup="moveToNext(5, event)" maxLength="1" id="digit5-input" required>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-2">
                                                <div class="mb-3">
                                                    <label for="digit4-input" class="visually-hidden">Digit 6</label>
                                                    <input type="text" class="form-control fs-3 bg-light border-dark text-center" name="otp[]" onkeyup="moveToNext(6, event)" maxLength="1" id="digit6-input" required>
                                                </div>
                                            </div><!-- end col -->
                                        </div>


                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-success w-100">Confirm</button>
                                        </div>
                                    </form><!-- end form -->
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <p class="mb-0">Didn't receive a code ? <button class="btn btn-link text-decoration-underline" id="resend">Resend </button><span class="text-muted" id="countdown"></span></p>

                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <?= $this->include('auth/inc/footer') ?>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- particles js -->
    <?= $this->include('auth/inc/end-scripts') ?>
    <!-- two-step-verification js -->
    <script src="/assets/auth/js/pages/two-step-verification.init.js"></script>

    <script>
        $(document).ready(function(event) {
            $('#resend').click(function() {
                $.ajax({
                    url: 'resend',
                    type: 'GET',
                    success: function(response) {
                        var countdown = 60; // seconds
                        var interval = setInterval(function() {
                            countdown--;
                            $('#countdown').text(countdown);
                            if (countdown == 0) {
                                clearInterval(interval);
                                $('#resend').prop('disabled', false);
                            }
                        }, 1000);
                        $('#resend').prop('disabled', true);

                    }
                });

            });
        });
    </script>
</body>

</html>