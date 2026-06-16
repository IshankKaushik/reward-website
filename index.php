<?php
require_once("scripts/include/database.inc.php");
require_once("scripts/include/Settings.inc.php");
// $setting->checkLogin(true);
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
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">

			<h1 class="app-page-title">Overview</h1>

			<div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
				<div class="inner">
					<div class="app-card-body p-3 p-lg-4">
						<h3 class="mb-3">Welcome, Superadmin!</h3>
						<div class="row gx-5 gy-3">
							<div class="col-12 col-lg-9">

								<div>Portal is a free Bootstrap 5 admin dashboard template. The design is simple, clean and modular so it's a great base for building any modern web app.</div>
							</div><!--//col-->
						</div><!--//row-->
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div><!--//app-card-body-->

				</div><!--//inner-->
			</div><!--//app-card-->

			<div class="app-card app-card-orders-table shadow-sm mb-5">
				<div class="app-card-body">
					<div class="table-responsive">
						<table class="table app-table-hover mb-0 text-left">
							<thead>
								<tr>
									<th class="cell">Id</th>
									<th class="cell">Is Show Welcome</th>
									<th class="cell">Created Date</th>
									<th class="cell">Front</th>
									<th class="cell"></th>
								</tr>
							</thead>
							<tbody>
								<?php
								$users = $setting->Pages();
								if ($users != false) {
									foreach ($users as $key => $user) { ?>
										<tr>
											<td class="cell"><?= $user["id"] ?></td>
											<td class="cell"><span class="truncate"><?= $user["show_welcome"] ?></span></td>
											<td class="cell"><?= $user["created_date"] ?></td>
											<td class="cell">
												<a href="./assets/images/core/<?= $user["front"] ?>">
													<img src="./assets/images/core/<?= $user["front"] ?>" alt="user profile" style="width: 32px;height: 32px;border-radius: 50%">
												</a>
											</td>
											<td class="cell">
												<a href="page.php?id=<?= $user["id"] ?>" class="btn app-btn-secondary">View</a>
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


			<div class="row g-4 mb-4">
				<div class="col-12">
					<div class="app-card app-card-settings shadow-sm p-4">

						<div class="app-card-body">
							<form enctype="multipart/form-data" action="scripts/core/action.php" method="post" class="settings-form">
								<input type="hidden" name="pageName" value="InsertPage">
								<div class="mb-3">
									<label for="setting-input-front" class="form-label">Image</label>
									<input type="file" class="form-control" id="setting-input-front" name="front">
								</div>
								<div class="mb-3">
									<label for="setting-input-show_welcome" class="form-label">Show Welcome</label>
									<select class="form-control" id="setting-input-show_welcome" name="show_welcome" required>
										<option value="yes">Yes</option>
										<option value="no">No</option>
									</select>
								</div>
								<div class="mb-3">
									<label for="setting-input-title" class="form-label">Title</label>
									<input value="Welcome, Superadmin!" type="text" class="form-control" id="setting-input-title" name="title" required>
								</div>
								<div class="mb-3">
									<label for="setting-input-description" class="form-label">Description</label>
									<textarea class="form-control" id="setting-input-description" name="description" required>Portal is a free Bootstrap 5 admin dashboard. The design is simple, clean and modular so it's a great base for building any modern web app.</textarea>
								</div>
								<div class="mb-3">
									<label for="setting-input-card1" class="form-label">Card 1</label>
									<input type="text" class="form-control" id="setting-input-card1" name="card1" required>
								</div>
								<div class="mb-3">
									<label for="setting-input-card2" class="form-label">Card 2</label>
									<input type="text" class="form-control" id="setting-input-card2" name="card2" required>
								</div>
								<div class="mb-3">
									<label for="setting-input-card3" class="form-label">Card 3</label>
									<input type="text" class="form-control" id="setting-input-card3" name="card3" required>
								</div>
								<div class="mb-3">
									<label for="setting-input-card4" class="form-label">Card 4</label>
									<input type="text" class="form-control" id="setting-input-card4" name="card4" required>
								</div>
								<button type="submit" class="btn app-btn-primary">Save Changes</button>
							</form>


						</div><!--//app-card-body-->

					</div><!--//app-card-->
				</div>
			</div><!--//row-->
		</div><!--//container-fluid-->
	</div><!--//app-content-->

	<!-- Javascript -->
	<script src="assets/plugins/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Charts JS -->
	<script src="assets/plugins/chart.js/chart.min.js"></script>
	<script src="assets/js/index-charts.js"></script>

	<!-- Page Specific JS -->
	<script src="assets/js/app.js"></script>

</body>

</html>