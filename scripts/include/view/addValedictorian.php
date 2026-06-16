<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Valedictorian || Valpak</title>
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
                <h1 class="app-page-title">Add A Valedictorian</h1>

                <div class="app-card alert custome-alert-warning alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
                    <div class="inner">
                        <div class="app-card-body p-3 p-lg-4">
                            <h3 class="mb-3">Warning When Adding A Valedictorian</h3>
                            <div class="row gx-5 gy-3">
                                <div class="col-12 col-lg-9">
                                    <div>In order for your 2022 Valedictorian to receive their donated funds, the Valedictorian Information must be completed. Please ensure the accuracy of the information as well. All 2022 valedictorians will be verified through the high school’s administration before releasing their funds.</div>
                                </div>
                                <!--//col-->
                                <div class="col-12 col-lg-3">
                                    <a class="btn app-btn-primary" href="index.php"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-arrow-down me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"></path>
                                            <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"></path>
                                            <path fill-rule="evenodd" d="M8 6a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 10.293V6.5A.5.5 0 0 1 8 6z"></path>
                                        </svg>Go To Home</a>
                                </div>
                                <!--//col-->
                            </div>
                            <!--//row-->
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <!--//app-card-body-->

                    </div>
                    <!--//inner-->
                </div>

                <form enctype="multipart/form-data" action="../scripts/core/action.php?pageName=addValedictorian" method="POST">
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
                                            <h4 class="app-card-title">Valedictorian Information</h4>
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
                                                <div class="item-label"><strong>Photo</strong></div>
                                                <input type="file" name="image" class="mt-2" required> <br>
                                                <small>All profiles must include a valid image</small>
                                            </div>
                                        </div>
                                    </div>
                                    <!--//item-->

                                    <div class="item py-2">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-md-12">
                                                <div class="item-label"><strong>High School Name</strong></div>
                                                <input type="text" name="high_school_name" class="form-control mt-1" placeholder="Enter High School Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--//item-->

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
                                                <div class="item-label"><strong>County</strong></div>
                                                <input type="text" name="county" class="form-control mt-1" placeholder="Enter County" required>
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
                                            <h4 class="app-card-title">Valedictorian Information</h4>
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

                                    <div class="item py-2">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-md-12">
                                                <div class="item-label"><strong>Email</strong></div>
                                                <input type="email" name="email" class="form-control mt-1" placeholder="Enter Email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--//item-->

                                    <div style="display: none;" class="item py-2">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-md-12">
                                                <div class="item-label"><strong>Has the valedictorian been announced?: </strong></div>
                                                <div class="form-check mt-1">
                                                    <input disabled checked class="form-check-input" value="yes" type="radio" name="has_announced" id="has_announced1">
                                                    <label class="form-check-label" for="has_announced1">
                                                        Yes
                                                    </label>
                                                </div>
                                                <!-- <div class="form-check">
                                                    <input value="no" class="form-check-input" type="radio" name="has_announced" id="has_announced2" checked>
                                                    <label class="form-check-label" for="has_announced2">
                                                        No
                                                    </label>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!--//item-->

                                    <div style="display: none;" class="item py-2" id="valedictorian_declaration_date">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-md-12">
                                                <div class="item-label"><strong>Date of Valedictorian Declaration: </strong></div>
                                                <input type="date" name="announce_date" class="form-control mt-1" placeholder="Enter Date of Valedictorian Declaration">
                                            </div>
                                        </div>
                                    </div>
                                    <!--//item-->
                                </div>
                                <!--//app-card-body-->
                            </div>
                            <!--//app-card-->
                        </div>
                        <!--//col-->

                        <div class="col-12">
                            <button class="btn btn-primary w-100 text-white btn-block">Add Valedictorian</button>
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
    <script src="../assets/plugins/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Page Specific JS -->
    <script src="../assets/js/app.js"></script>

    <!-- Jquery Cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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

    <!-- Custome Js -->
    <script>
        $('input[name="has_announced"]').change(function(e) {
            (this.value == "yes") ? $("#valedictorian_declaration_date").show(): $("#valedictorian_declaration_date").hide();
        });
    </script>
</body>

</html>