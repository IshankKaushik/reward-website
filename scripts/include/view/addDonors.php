<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add New Donors || Valpak</title>
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
                <h1 class="app-page-title">Add A New Donor</h1>
                <form enctype="multipart/form-data" action="../scripts/core/action.php?pageName=addDonors" method="POST">
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
                                            <h4 class="app-card-title">Donors Information</h4>
                                        </div>
                                        <!--//col-->
                                    </div>
                                    <!--//row-->
                                </div>
                                <!--//app-card-header-->
                                <div class="app-card-body px-4 w-100">
                                    <input type="hidden" name="high_school_name">
                                    <div class="item py-2">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-md-12">
                                                <div class="item-label"><strong>First Name</strong></div>
                                                <input type="text" name="fname" class="form-control mt-1" placeholder="Enter First Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--//item-->

                                    <div class="item py-2">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-md-12">
                                                <div class="item-label"><strong>Last Name</strong></div>
                                                <input type="text" name="lname" class="form-control mt-1" placeholder="Enter Last Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--//item-->


                                    <div class="item py-2">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-md-12">
                                                <div class="item-label"><strong>City</strong></div>
                                                <input type="text" name="city" class="form-control mt-1" placeholder="Enter City" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--//item-->

                                    <div class="item py-2">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-md-12">
                                                <div class="item-label"><strong>State</strong></div>
                                                <select name="state" class="form-select mt-1" required>
                                                    <option disabled="" selected="" value="">State</option>
                                                    <option value="AL">AL</option>
                                                    <option value="AK">AK</option>
                                                    <option value="AZ">AZ</option>
                                                    <option value="AR">AR</option>
                                                    <option value="CA">CA</option>
                                                    <option value="CO">CO</option>
                                                    <option value="CT">CT</option>
                                                    <option value="DE">DE</option>
                                                    <option value="FL">FL</option>
                                                    <option value="GA">GA</option>
                                                    <option value="HI">HI</option>
                                                    <option value="ID">ID</option>
                                                    <option value="IL">IL</option>
                                                    <option value="IN">IN</option>
                                                    <option value="IA">IA</option>
                                                    <option value="KS">KS</option>
                                                    <option value="KY">KY</option>
                                                    <option value="LA">LA</option>
                                                    <option value="ME">ME</option>
                                                    <option value="MD">MD</option>
                                                    <option value="MA">MA</option>
                                                    <option value="MI">MI</option>
                                                    <option value="MN">MN</option>
                                                    <option value="MS">MS</option>
                                                    <option value="MO">MO</option>
                                                    <option value="MT">MT</option>
                                                    <option value="NE">NE</option>
                                                    <option value="NV">NV</option>
                                                    <option value="NH">NH</option>
                                                    <option value="NJ">NJ</option>
                                                    <option value="NM">NM</option>
                                                    <option value="NY">NY</option>
                                                    <option value="NC">NC</option>
                                                    <option value="ND">ND</option>
                                                    <option value="OH">OH</option>
                                                    <option value="OK">OK</option>
                                                    <option value="OR">OR</option>
                                                    <option value="PA">PA</option>
                                                    <option value="RI">RI</option>
                                                    <option value="SC">SC</option>
                                                    <option value="SD">SD</option>
                                                    <option value="TN">TN</option>
                                                    <option value="TX">TX</option>
                                                    <option value="UT">UT</option>
                                                    <option value="VT">VT</option>
                                                    <option value="VA">VA</option>
                                                    <option value="WA">WA</option>
                                                    <option value="WV">WV</option>
                                                    <option value="WI">WI</option>
                                                    <option value="WY">WY</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--//item-->

                                    <div class="item py-2">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-md-12">
                                                <div class="item-label"><strong>Zip Code</strong></div>
                                                <input type="text" name="zip_code" class="form-control mt-1" placeholder="Enter Zip Code" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--//item-->

                                    <div class="item py-2">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-md-12">
                                                <div class="item-label"><strong>Telephone</strong></div>
                                                <input type="text" name="telephone" class="form-control mt-1" placeholder="Enter Telephone" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--//item-->


                                </div>
                                <!--//app-card-body-->



                                <!-- <div class="app-card-footer mt-0 p-4">
                                    <button class="btn app-btn-secondary" href="#">Submit</button>
                                </div> -->
                                <!--//app-card-footer-->



                            </div>
                            <!--//app-card-->
                        </div>
                        <!--//col-->

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
                                            <h4 class="app-card-title">Payment Information</h4>
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
                                                <div class="item-label"><strong>Email</strong></div>
                                                <input type="email" name="email" class="form-control mt-1" placeholder="Enter Email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--//item-->

                                    <div class="item py-2">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-md-12">
                                                <div class="item-label"><strong>Donation Amount</strong></div>
                                                <div class="input-group mt-1">
                                                    <div class="input-group-prepend d-flex">
                                                        <span class="input-group-text" id="basic-addon1">$</span>
                                                    </div>
                                                    <input type="number" class="form-control donation_mount" placeholder="Enter Donation Amount" aria-label="Donation Amount" name="donation_amount" aria-describedby="basic-addon1" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--//item-->

                                    <div class="item py-2">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-md-12">
                                                <div class="alert alert-info" role="alert">
                                                    Send donation <b>valpak@hsvgroup.org</b> to this Zelle account and insert the transaction number below.
                                                </div>
                                                <div class="item-label"><strong>Zelle Transaction: </strong></div>
                                                <input type="text" name="zelle_transaction" class="form-control mt-1" placeholder="Enter Zelle Transaction" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--//item-->



                                    <div class="HideThemNow d-none">
                                        <h4 class="app-card-title mb-3 mt-4">T-Shirt Delivery Address​</h4>
                                        <!--//app-card-header-->

                                        <div class="item py-2">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-md-12">
                                                    <div class="item-label"><strong>Address</strong></div>
                                                    <input type="text" name="tshirt_address" class="form-control mt-1" placeholder="Enter Address">
                                                </div>
                                            </div>
                                        </div>
                                        <!--//item-->


                                        <div class="item py-2">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-md-12">
                                                    <div class="item-label"><strong>City</strong></div>
                                                    <input type="text" name="tshirt_city" class="form-control mt-1" placeholder="Enter City">
                                                </div>
                                            </div>
                                        </div>
                                        <!--//item-->


                                        <div class="item py-2">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-md-12">
                                                    <div class="item-label"><strong>State</strong></div>
                                                    <select name="tshirt_state" class="form-select mt-1">
                                                        <option disabled="" selected="" value="">State</option>
                                                        <option value="AL">AL</option>
                                                        <option value="AK">AK</option>
                                                        <option value="AZ">AZ</option>
                                                        <option value="AR">AR</option>
                                                        <option value="CA">CA</option>
                                                        <option value="CO">CO</option>
                                                        <option value="CT">CT</option>
                                                        <option value="DE">DE</option>
                                                        <option value="FL">FL</option>
                                                        <option value="GA">GA</option>
                                                        <option value="HI">HI</option>
                                                        <option value="ID">ID</option>
                                                        <option value="IL">IL</option>
                                                        <option value="IN">IN</option>
                                                        <option value="IA">IA</option>
                                                        <option value="KS">KS</option>
                                                        <option value="KY">KY</option>
                                                        <option value="LA">LA</option>
                                                        <option value="ME">ME</option>
                                                        <option value="MD">MD</option>
                                                        <option value="MA">MA</option>
                                                        <option value="MI">MI</option>
                                                        <option value="MN">MN</option>
                                                        <option value="MS">MS</option>
                                                        <option value="MO">MO</option>
                                                        <option value="MT">MT</option>
                                                        <option value="NE">NE</option>
                                                        <option value="NV">NV</option>
                                                        <option value="NH">NH</option>
                                                        <option value="NJ">NJ</option>
                                                        <option value="NM">NM</option>
                                                        <option value="NY">NY</option>
                                                        <option value="NC">NC</option>
                                                        <option value="ND">ND</option>
                                                        <option value="OH">OH</option>
                                                        <option value="OK">OK</option>
                                                        <option value="OR">OR</option>
                                                        <option value="PA">PA</option>
                                                        <option value="RI">RI</option>
                                                        <option value="SC">SC</option>
                                                        <option value="SD">SD</option>
                                                        <option value="TN">TN</option>
                                                        <option value="TX">TX</option>
                                                        <option value="UT">UT</option>
                                                        <option value="VT">VT</option>
                                                        <option value="VA">VA</option>
                                                        <option value="WA">WA</option>
                                                        <option value="WV">WV</option>
                                                        <option value="WI">WI</option>
                                                        <option value="WY">WY</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--//item-->


                                        <div class="item py-2">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-md-12">
                                                    <div class="item-label"><strong>Zip Code</strong></div>
                                                    <input type="text" name="tshirt_zip_code" class="form-control mt-1" placeholder="Enter Zip Code">
                                                </div>
                                            </div>
                                        </div>
                                        <!--//item-->
                                    </div>

                                </div>
                                <!--//app-card-body-->
                            </div>
                            <!--//app-card-->
                        </div>
                        <!--//col-->

                        <div class="col-12">
                            <button class="btn btn-primary w-100 text-white btn-block">Add Donors</button>
                        </div>
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
    <script src="../assets/js/jquery.js"></script>
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

    <script>
        $(document).ready(function() {
            $(".donation_mount").keyup(function() {
                console.log(this.value);
                if (this.value >= 75) {
                    $(".HideThemNow").removeClass("d-none");
                } else {
                    $(".HideThemNow").addClass("d-none");
                }
            });
        });
    </script>

</body>

</html>