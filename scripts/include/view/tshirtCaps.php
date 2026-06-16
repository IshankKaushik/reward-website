<!DOCTYPE html>
<html lang="en">

<head>
    <title>Donors List || Valpak</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We are building this tshirt website to give some money to valedictorian">
    <meta name="author" content="HSVGROUP">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="../assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="../assets/css/portal.css">

</head>

<body class="app">
    <?php require_once($setting->correctHeaderSidbar()); ?>

    <!--//app-header-->
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <?php if ($_COOKIE["account_type"] == "superadmin") { ?>
                    <div class="row g-3 mb-3 align-items-center justify-content-between">
                        <div style="column-gap: 18px" class="col-auto d-flex justify-content-center align-items-center">
                            <h1 class="app-page-title mb-0">Filter Tshirt And Caps By</h1>
                        </div>
                    </div>
                    <!--//row-->
                    <form action="../scripts/core/action.php?pageName=donorsFilter&redirect=admin/tshirtCaps.php" method="POST" class="mb-3">
                        <div class="row">
                            <div class="col">
                                <select class="form-select" name="status" aria-label="Status">
                                    <option disabled="" selected="" value="">Status</option>
                                    <option value="pending">Pending</option>
                                    <option value="done">Done</option>
                                </select>
                            </div>
                            <div class="col">
                                <select class="form-select" name="state" aria-label="State">
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
                            <div class="col">
                                <input type="text" class="form-control" name="fname" placeholder="Enter First Name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="email" placeholder="Enter Email">
                            </div>
                            <div class="col">
                                <button class="btn btn-primary text-white w-100">Filter</button>
                            </div>
                        </div>
                    </form>
                <?php
                }

                if (sizeof($donorList) == 0) {
                ?>
                    <div class="app-card app-card-notification shadow-sm mb-4">
                        <div class="app-card-header px-4 py-3 text-center">
                            <h3 class="text-center">No t-shirt and caps data found</h3>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    <div class="row g-3 mb-4 align-items-center justify-content-between">
                        <div style="column-gap: 18px" class="col-auto d-flex justify-content-center align-items-start flex-column">
                            <h1 class="app-page-title mb-0">Tshirt And Caps List</h1>
                            <p>All donors who donate more than $75 will receive a T-shirt and caps. It's now showing the status of those donors who suppose to get T-shirts and caps</p>
                        </div>
                    </div>
                    <!--//row-->


                    <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
                        <?php if (isset($_COOKIE["account_type"]) && (($_COOKIE["account_type"] == "team_leaders") or ($_COOKIE["account_type"] == "superadmin"))) { ?>
                            <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Added By <?php echo ($_COOKIE["account_type"] == "superadmin") ? "Team Leader" : "You"; ?></a>
                        <?php } ?>

                        <?php if (isset($_COOKIE["account_type"]) && (($_COOKIE["account_type"] == "team_leaders") or ($_COOKIE["account_type"] == "associate_leaders") or ($_COOKIE["account_type"] == "superadmin"))) { ?>
                            <a class="flex-sm-fill text-sm-center nav-link <?php echo ($_COOKIE["account_type"] == "associate_leaders") ? "active" : ""; ?>" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Added By <?php echo ($_COOKIE["account_type"] == "associate_leaders") ? "You" : "Associate Leader"; ?></a>
                        <?php } ?>

                        <a class="flex-sm-fill text-sm-center nav-link <?php echo ($_COOKIE["account_type"] == "associate") ? "active" : ""; ?>" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Added By <?php echo ($_COOKIE["account_type"] == "associate") ? "You" : "Associate"; ?></a>
                    </nav>


                    <div class="tab-content" id="orders-table-tab-content">

                        <?php if (isset($_COOKIE["account_type"]) && (($_COOKIE["account_type"] == "team_leaders") or ($_COOKIE["account_type"] == "superadmin"))) { ?>
                            <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                                <div class="app-card app-card-orders-table shadow-sm mb-5">
                                    <div class="app-card-body">
                                        <div class="table-responsive">
                                            <table class="table app-table-hover mb-0 text-left">
                                                <thead>
                                                    <tr>
                                                        <th class="cell">Id</th>
                                                        <th class="cell">State</th>
                                                        <th class="cell">Name</th>
                                                        <th class="cell">Email</th>
                                                        <th class="cell">Phone</th>
                                                        <th class="cell">Donation Amount</th>
                                                        <th class="cell">Payment Type</th>
                                                        <th class="cell">Transaction Number</th>
                                                        <th class="cell">Tshirt Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($donorList as $key => $value) {
                                                        if ($value["account_type"] == "team_leaders") {
                                                            require("_tshirtCaps.php");
                                                        }
                                                    } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--//table-responsive-->

                                    </div>
                                    <!--//app-card-body-->
                                </div>
                                <!--//app-card-->


                            </div>
                            <!--//tab-pane-->
                        <?php } ?>


                        <?php if (isset($_COOKIE["account_type"]) && (($_COOKIE["account_type"] == "team_leaders") or ($_COOKIE["account_type"] == "superadmin") or ($_COOKIE["account_type"] == "associate_leaders"))) { ?>
                            <div class="tab-pane fade <?php echo ($_COOKIE["account_type"] == "associate_leaders") ? "show active" : ""; ?>" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
                                <div class="app-card app-card-orders-table mb-5">
                                    <div class="app-card-body">
                                        <div class="table-responsive">
                                            <table class="table mb-0 text-left">
                                                <thead>
                                                    <tr>
                                                        <th class="cell">Id</th>
                                                        <th class="cell">Name</th>
                                                        <th class="cell">Email</th>
                                                        <th class="cell">Phone</th>
                                                        <th class="cell">Donation Amount</th>
                                                        <th class="cell">Zelle Transaction</th>
                                                        <th class="cell">Tshirt Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if (isset($_COOKIE["account_type"]) && ($_COOKIE["account_type"] == "associate_leaders")) {
                                                        foreach ($donorList as $key => $value) {
                                                            if (($value["account_type"] == "associate_leaders") && ($value["auth"] == $_COOKIE["login_status"])) {
                                                                require("_tshirtCaps.php");
                                                            }
                                                        }
                                                    } else {
                                                        foreach ($donorList as $key => $value) {
                                                            if ($value["account_type"] == "associate_leaders") {
                                                                require("_tshirtCaps.php");
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--//table-responsive-->
                                    </div>
                                    <!--//app-card-body-->
                                </div>
                                <!--//app-card-->
                            </div>
                            <!--//tab-pane-->
                        <?php
                        }
                        ?>


                        <div class="tab-pane fade <?php echo ($_COOKIE["account_type"] == "associate") ? "show active" : ""; ?>" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
                            <div class="app-card app-card-orders-table mb-5">
                                <div class="app-card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0 text-left">
                                            <thead>
                                                <tr>
                                                    <th class="cell">Id</th>
                                                    <th class="cell">Name</th>
                                                    <th class="cell">Email</th>
                                                    <th class="cell">Phone</th>
                                                    <th class="cell">Donation Amount</th>
                                                    <th class="cell">Zelle Transaction</th>
                                                    <th class="cell">Tshirt Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if (isset($_COOKIE["account_type"]) && ($_COOKIE["account_type"] == "associate")) {
                                                    foreach ($donorList as $key => $value) {
                                                        if (($value["account_type"] == "associate") && ($value["auth"] == $_COOKIE["login_status"])) {
                                                            require("_tshirtCaps.php");
                                                        }
                                                    }
                                                } else if (isset($_COOKIE["account_type"]) && ($_COOKIE["account_type"] == "associate_leaders")) {
                                                    foreach ($donorList as $key => $value) {
                                                        if (($value["account_type"] == "associate") && $associate_leader->IsthisAssociateExist($value["auth"], $_COOKIE["login_status"])) {
                                                            require("_tshirtCaps.php");
                                                        }
                                                    }
                                                } else {
                                                    foreach ($donorList as $key => $value) {
                                                        if ($value["account_type"] == "associate") {
                                                            require("_tshirtCaps.php");
                                                        }
                                                    }
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!--//table-responsive-->
                                </div>
                                <!--//app-card-body-->
                            </div>
                            <!--//app-card-->
                        </div>
                        <!--//tab-pane-->
                    </div>
                    <!--//tab-content-->
                <?php
                }
                ?>
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