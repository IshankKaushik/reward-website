<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add User || Valpak</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head>

<body class="app">
    <?php require_once("./scripts/include/view/header_side.inc.php") ?>
    <!--//app-header-->

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title">Add An User</h1>

                <div class="app-card alert custome-alert-warning alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
                    <div class="inner">
                        <div class="app-card-body p-3 p-lg-4">
                            <h3 class="mb-3">Warning When Adding An User</h3>
                            <div class="row gx-5 gy-3">
                                <div class="col-12 col-lg-9">
                                    <div>To add a user, access the system's user management, provide username, password, and email, assign roles if needed, verify the details, and click "Save." Comply with security policies, avoid sharing sensitive data, and periodically review and update user access for enhanced system security</div>
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

                <form id="add-user-form">
                    <div class="row gy-4">
                        <div class="col-12">
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
                                            <h4 class="app-card-title">User Information</h4>
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
                                                <input type="file" name="image" class="mt-2"> <br>
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
                                                <div class="item-label"><strong>Email</strong></div>
                                                <input type="text" name="email" class="form-control mt-1" placeholder="Enter Email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--//item-->

                                    <div class="item py-2">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-md-12">
                                                <div class="item-label"><strong>Password</strong></div>
                                                <input type="password" name="password" placeholder="Enter Your Password" class="form-control mt-1" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--//item-->

                                    <div class="item py-2 mb-3">
                                        <div class="row justify-content-between align-items-center">
                                            <button class="btn btn-primary w-100 text-white btn-block">Add User</button>
                                        </div>
                                    </div>

                                </div>
                                <!--//app-card-body-->

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
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script>

    <!-- Jquery Cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.all.min.js"></script>

    <!-- Custome Js -->
    <script>
        window.onload = () => {
            main();
        }

        function main() {
            document.querySelector("#add-user-form").addEventListener("submit", function(e) {
                e.preventDefault();

                // Show a loading modal using SweetAlert2
                Swal.fire({
                    title: 'Sending Request',
                    text: 'Please wait...',
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    onBeforeOpen: () => {
                        Swal.showLoading();
                    }
                });

                // Get the form element
                const form = document.querySelector('#add-user-form');

                // Send AJAX request
                fetch('scripts/core/action.php?pageName=signUp', {
                        method: 'POST',
                        body: new FormData(form)
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Hide loading modal
                        Swal.hideLoading();

                        // Show appropriate message based on the response status
                        if (data.status === 'success') {
                            Swal.fire({
                                title: 'Success',
                                text: data.msg,
                                icon: 'success'
                            });
                        } else {
                            Swal.fire({
                                title: 'Error',
                                text: data.msg,
                                icon: 'error'
                            });
                        }
                    })
                    .catch(error => {
                        // Hide loading modal
                        Swal.hideLoading();

                        // Show error message
                        Swal.fire({
                            title: 'Error',
                            text: 'An error occurred while sending the request.',
                            icon: 'error'
                        });
                    });
            })
        }
    </script>
</body>

</html>