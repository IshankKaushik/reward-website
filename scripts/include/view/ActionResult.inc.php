<!DOCTYPE html>
<html lang="en">

<head>
    <title>Valpak</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="<?php echo $setting->base_url(); ?>assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="<?php echo $setting->base_url(); ?>assets/css/portal.css">

</head>

<body class="app app-404-page">

    <div class="container mb-5">
        <div class="row">
            <div class="col-12 col-md-11 col-lg-7 col-xl-6 mx-auto">
                <!-- <div class="text-center mb-5">
                    <a href="<?php echo $setting->base_url(); ?>"><img src="<?php echo $setting->base_url(); ?>assets/img/valpakLogo.png" alt="logo"></a>
                </div> -->
                <!--//app-branding-->
                <div class="app-card p-5 text-center shadow-sm">
                    <h1 class="page-title mb-4"><?php echo $info["title"] ?><br><span class="font-weight-light"><?php echo $info["subtitle"] ?></span></h1>
                    <?php if ($status == "signupdone") { ?>
                        <form action="action.php?pageName=verifyEmailTeamLeader" method="POST">
                            <input type="number" name="otp" style="border: 3px solid #3a6ab9;border-radius: 5px;padding: 6px 13px;" placeholder="Enter Otp Code"> <br> <br>
                            <button class="btn app-btn-primary">Verify Email</button>
                        </form>
                    <?php } else if ($status == "openPlugin") { ?>
                        <a class="btn app-btn-primary" href="#" id="openPlugin"><?php echo $info["ButtonName"]; ?></a>
                    <?php } else { ?>
                        <a class="btn app-btn-primary" href="<?php echo (isset($buttonPath)) ? $buttonPath : "../../" ?><?php echo $info["btnUrl"]; ?>"><?php echo $info["ButtonName"]; ?></a>
                    <?php } ?>

                </div>
            </div>
            <!--//col-->
        </div>
        <!--//row-->
    </div>
    <!--//container-->


    <!-- Javascript -->
    <script src="<?php echo $setting->base_url(); ?>assets/plugins/popper.min.js"></script>
    <script src="<?php echo $setting->base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>