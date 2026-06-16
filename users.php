<?php
require_once("./scripts/include/database.inc.php");
require_once("./scripts/include/Settings.inc.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>

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
	<?php require_once("scripts/include/view/header_side.inc.php") ?>
	<div class="app-wrapper">

		<div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-xl">

				<div class="row g-3 mb-4 align-items-center justify-content-between">
					<div class="col-auto">
						<h1 class="app-page-title mb-0">Users</h1>
					</div>
					<?php
					// 	<div class="col-auto">
					// 	<div class="page-utilities">
					// 		<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
					// 			<div class="col-auto">
					// 				<form class="table-search-form row gx-1 align-items-center">
					// 					<div class="col-auto">
					// 						<input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
					// 					</div>
					// 					<div class="col-auto">
					// 						<button type="submit" class="btn app-btn-secondary">Search</button>
					// 					</div>
					// 				</form>

					// 			</div><!--//col-->
					// 		</div><!--//row-->
					// 	</div><!--//table-utilities-->
					// </div><!--//col-auto-->
					?>
				</div><!--//row-->


				<div class="app-card app-card-orders-table shadow-sm mb-5">
					<div class="app-card-body">
						<div class="table-responsive">
							<table class="table app-table-hover mb-0 text-left">
								<thead>
									<tr>
										<th class="cell">Id</th>
										<th class="cell">First Name</th>
										<th class="cell">Last Name</th>
										<th class="cell">Email</th>
										<th class="cell">Status</th>
										<th class="cell">Created Date</th>
										<th class="cell"></th>
									</tr>
								</thead>
								<tbody>
									<?php
									$users = $setting->users();
									if ($users != false) {
										foreach ($users as $key => $user) { ?>
											<tr>
												<td class="cell"><?= $user["id"] ?></td>
												<td class="cell"><span class="truncate"><?= $user["fname"] ?></span></td>
												<td class="cell"><?= $user["lname"] ?></td>
												<td class="cell"><?= $user["email"] ?></td>
												<td class="cell"><span class="badge bg-success"><?= $user["status"] ?></span></td>
												<td class="cell"><?= $user["created_date"] ?></td>
												<td class="cell">
													<a href="./assets/images/core/<?= $user["avatar"] ?>">
														<img src="./assets/images/core/<?= $user["avatar"] ?>" alt="user profile" style="width: 32px;height: 32px;border-radius: 50%">
													</a>
												</td>
											</tr>
									<?php }
									}
									?>
								</tbody>
							</table>
						</div><!--//table-responsive-->

					</div><!--//app-card-body-->
				</div><!--//app-card-->



			</div><!--//container-fluid-->
		</div><!--//app-content-->

	</div><!--//app-wrapper-->


	<!-- Javascript -->
	<script src="assets/plugins/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>


	<!-- Page Specific JS -->
	<script src="assets/js/app.js"></script>

</body>

</html>