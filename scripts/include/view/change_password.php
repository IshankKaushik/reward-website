<!DOCTYPE html>
<html lang="en">

<head>
    <title>Change Your Password || Valpak</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="../assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="../assets/css/portal.css">

</head>

<body class="app">
    <?php require_once($setting->correctHeaderSidbar()) ?>
    <!--//app-header-->

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <form enctype="multipart/form-data" action="../scripts/core/action.php?pageName=change_password" method="POST">
                    <div class="row gy-4">
                        <div class="col-12 col-lg-6">
                            <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                                <div class="app-card-header p-3 border-bottom-0">
                                    <div class="row align-items-center gx-3">
                                        <div class="col-auto">
                                            <div class="app-icon-holder">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                                </svg>
                                            </div>
                                            <!--//icon-holder-->

                                        </div>
                                        <!--//col-->
                                        <div class="col-auto">
                                            <h4 class="app-card-title">Change Your Password</h4>
                                        </div>
                                        <!--//col-->
                                    </div>
                                    <!--//row-->
                                </div>
                                <!--//app-card-header-->
                                <div class="app-card-body px-4 w-100">
                                    <div class="item py-2">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-md-12">
                                                <div class="item-label"><strong>Current Password</strong></div>
                                                <input type="password" name="current_password" class="form-control mt-1" placeholder="Enter Your Current Password">
                                            </div>
                                        </div>
                                    </div>
                                    <!--//item-->

                                    <div class="item py-2">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-md-12">
                                                <div class="item-label"><strong>New Password</strong></div>
                                                <input type="password" name="new_password" class="form-control mt-1" placeholder="Enter Your New Password">
                                            </div>
                                        </div>
                                    </div>
                                    <!--//item-->
                                </div>
                                <!--//app-card-body-->
                                <div class="app-card-footer mt-0 p-4">
                                    <button class="btn app-btn-secondary">Change Password</button>
                                </div>
                                <!--//app-card-footer-->
                            </div>
                            <!--//app-card-->
                        </div>
                        <!--//col-->
                    </div>
                </form>
                <!--//row-->

            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->


    </div>
    <!--//app-wrapper-->


    <!-- Javascript -->
    <script src="../assets/plugins/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Page Specific JS -->
    <script src="../assets/js/app.js"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/62585bd07b967b11798ac8d8/1g0kidbqf';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

</body>

</html>