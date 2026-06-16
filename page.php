<?php
require_once("scripts/include/database.inc.php");
require_once("scripts/include/Settings.inc.php");

if (isset($_REQUEST["id"]) && $_REQUEST["id"] != "") {
	$page = $setting->Pages($conn->real_escape_string($_REQUEST["id"]));
	if ($page == false) {
		$setting->_errorView("Page Not Found", "", "scritps/include/");
	}
} else {
	$setting->_errorView("Page Not Found", "", "scripts/include");
	exit;
}

if ($setting->isUserVisited($page["id"])) {
	$setting->_errorView("You have scratch it already!", "", "scripts/include", "");
	exit;
}

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

	<style>
		.cardBox {
			width: 100%;
			height: 259px;
			position: relative;
		}

		.cardBox img {
			display: none !important;
		}

		.cardBox::before {
			content: attr(data-content);
			position: absolute;
			top: 0px;
			left: 0px;
			width: 100%;
			height: 100%;
			text-align: center;
			display: flex;
			justify-content: center;
			align-items: center;
			font-family: arial;
			font-size: 33px;
			color: white;
		}

		.loader {
			position: fixed;
			top: 0px;
			left: 0px;
			width: 100%;
			height: 100%;
			background: white;
			z-index: 999999999999;
		}

		.loader::before {
			content: "Loading...";
			width: 100%;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			font-size: 45px;
			text-transform: uppercase;
		}
	</style>

	<style>
		@keyframes confetti-slow {
			0% {
				transform: translate3d(0, 0, 0) rotateX(0) rotateY(0);
			}

			100% {
				transform: translate3d(25px, 105vh, 0) rotateX(360deg) rotateY(180deg);
			}
		}

		@keyframes confetti-medium {
			0% {
				transform: translate3d(0, 0, 0) rotateX(0) rotateY(0);
			}

			100% {
				transform: translate3d(100px, 105vh, 0) rotateX(100deg) rotateY(360deg);
			}
		}

		@keyframes confetti-fast {
			0% {
				transform: translate3d(0, 0, 0) rotateX(0) rotateY(0);
			}

			100% {
				transform: translate3d(-50px, 105vh, 0) rotateX(10deg) rotateY(250deg);
			}
		}

		.confetti-container {
			perspective: 700px;
			position: absolute;
			overflow: hidden;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
		}

		.confetti {
			position: absolute;
			z-index: 1;
			top: -10px;
			border-radius: 0%;
		}

		.confetti--animation-slow {
			animation: confetti-slow 2.25s linear 1 forwards;
		}

		.confetti--animation-medium {
			animation: confetti-medium 1.75s linear 1 forwards;
		}

		.confetti--animation-fast {
			animation: confetti-fast 1.25s linear 1 forwards;
		}

		/* Checkmark */
		.checkmark-circle {
			width: 150px;
			height: 150px;
			position: relative;
			display: inline-block;
			vertical-align: top;
			margin-left: auto;
			margin-right: auto;
		}

		.checkmark-circle .background {
			width: 150px;
			height: 150px;
			border-radius: 50%;
			background: #00c09d;
			position: absolute;
		}

		.checkmark-circle .checkmark {
			border-radius: 5px;
		}

		.checkmark-circle .checkmark.draw:after {
			-webkit-animation-delay: 100ms;
			-moz-animation-delay: 100ms;
			animation-delay: 100ms;
			-webkit-animation-duration: 3s;
			-moz-animation-duration: 3s;
			animation-duration: 3s;
			-webkit-animation-timing-function: ease;
			-moz-animation-timing-function: ease;
			animation-timing-function: ease;
			-webkit-animation-name: checkmark;
			-moz-animation-name: checkmark;
			animation-name: checkmark;
			-webkit-transform: scaleX(-1) rotate(135deg);
			-moz-transform: scaleX(-1) rotate(135deg);
			-ms-transform: scaleX(-1) rotate(135deg);
			-o-transform: scaleX(-1) rotate(135deg);
			transform: scaleX(-1) rotate(135deg);
			-webkit-animation-fill-mode: forwards;
			-moz-animation-fill-mode: forwards;
			animation-fill-mode: forwards;
		}

		.checkmark-circle .checkmark:after {
			opacity: 1;
			height: 75px;
			width: 37.5px;
			-webkit-transform-origin: left top;
			-moz-transform-origin: left top;
			-ms-transform-origin: left top;
			-o-transform-origin: left top;
			transform-origin: left top;
			border-right: 15px solid white;
			border-top: 15px solid white;
			border-radius: 2.5px !important;
			content: '';
			left: 25px;
			top: 75px;
			position: absolute;
		}

		@-webkit-keyframes checkmark {
			0% {
				height: 0;
				width: 0;
				opacity: 1;
			}

			20% {
				height: 0;
				width: 37.5px;
				opacity: 1;
			}

			40% {
				height: 75px;
				width: 37.5px;
				opacity: 1;
			}

			100% {
				height: 75px;
				width: 37.5px;
				opacity: 1;
			}
		}

		@-moz-keyframes checkmark {
			0% {
				height: 0;
				width: 0;
				opacity: 1;
			}

			20% {
				height: 0;
				width: 37.5px;
				opacity: 1;
			}

			40% {
				height: 75px;
				width: 37.5px;
				opacity: 1;
			}

			100% {
				height: 75px;
				width: 37.5px;
				opacity: 1;
			}
		}

		@keyframes checkmark {
			0% {
				height: 0;
				width: 0;
				opacity: 1;
			}

			20% {
				height: 0;
				width: 37.5px;
				opacity: 1;
			}

			40% {
				height: 75px;
				width: 37.5px;
				opacity: 1;
			}

			100% {
				height: 75px;
				width: 37.5px;
				opacity: 1;
			}
		}

		.submit-btn {
			height: 45px;
			width: 200px;
			font-size: 15px;
			background-color: #00c09d;
			border: 1px solid #00ab8c;
			color: #fff;
			border-radius: 5px;
			box-shadow: 0 2px 4px 0 rgba(87, 71, 81, .2);
			cursor: pointer;
			transition: all 2s ease-out;
			transition: all 0.2s ease-out;
		}

		.submit-btn:hover {
			background-color: #2ca893;
			transition: all 0.2s ease-out;
		}

		.js-container {
			width: 100vw;
			height: 100vh;
			position: fixed !important;
			top: 0px !important;
			left: 0px;
			z-index: -1;
		}
	</style>


	<!-- Dark Css -->
	<style>
		body.app-dark.app {
			background: #252021;
		}

		.app-dark .app-card {
			background: black;
		}

		.app-dark .app-card h3,
		.app-card h2 {
			color: white !important;
		}

		.app-dark .app-card p {
			color: #e5e4e4 !important;
		}

		.app-dark .app-card.border-left-decoration {
			border-left: 3px solid #ffffff;
		}

		.app-dark .app-btn-primary {
			background: #ffffff;
			color: #000;
			border-color: #2f3130;
		}
	</style>

</head>

<body class="app app-dark">
	<div class="loader"></div>
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">
			<?php if ($page["show_welcome"] == "yes") { ?>
				<div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
					<div class="inner">
						<div class="app-card-body p-3 p-lg-4">
							<h3 class="mb-3"><?= $page["title"] ?></h3>
							<div class="row gx-5 gy-3">
								<div class="col-12 col-lg-9">
									<p><?= $page["description"] ?></p>
								</div>
								<!--//col-->

								<div class="col-12 col-lg-3">
									<a id="toggleButton" class="btn app-btn-primary" href="javascript:void()">Turn Black</a>
								</div><!--//col-->
							</div>
							<!--//row-->
						</div>
						<!--//app-card-body-->

					</div>
					<!--//inner-->
				</div>
				<!--//app-card-->

			<?php } ?>

			<div class="app-card app-card-orders-table shadow-sm p-3 mb-4">
				<div class="app-card-body">
					<h3 class="mb-3">Scratch Cards</h3>
					<div class="row">
						<div class="col-md-3">
							<div data-content="<?= $page["card1"] ?>" class="cardBox" id="card1"></div>
						</div>
						<div class="col-md-3">
							<div data-content="<?= $page["card2"] ?>" class="cardBox" id="card2"></div>
						</div>
						<div class="col-md-3">
							<div data-content="<?= $page["card3"] ?>" class="cardBox" id="card3"></div>
						</div>
						<div class="col-md-3">
							<div data-content="<?= $page["card4"] ?>" class="cardBox" id="card4"></div>
						</div>
					</div>
				</div>
				<!--//app-card-body-->
			</div>
			<!--//app-card-->


			<div class="app-card app-card-orders-table shadow-sm p-3 mb-4">
				<div class="app-card-body">
					<h3 class="mb-2">Welcome to Fourway247 - Your Ultimate Gaming Destination!</h3>
					<p>IshankWorks is your one-stop destination for immersive gaming experiences that will leave you hooked for hours on end. Step into a world of excitement, adventure, and friendly competition as you explore our wide range of games. With a commitment to providing top-quality entertainment,</p>
					<p>Play Scratch And Win with us and won prizes</p>
				</div>
			</div>

		</div>
		<!--//container-fluid-->
	</div>
	<!--//app-content-->

	<div class="js-container" style="display: none;"></div>

	<!-- Javascript -->
	<script src="assets/js/jquery.1.11.0.min.js"></script>
	<script src="assets/js/wScratchPad.min.js"></script>

	<script>
		const Confettiful = function(el) {
			this.el = el;
			this.containerEl = null;

			this.confettiFrequency = 3;
			this.confettiColors = ['#EF2964', '#00C09D', '#2D87B0', '#48485E', '#EFFF1D'];
			this.confettiAnimations = ['slow', 'medium', 'fast'];

			this._setupElements();
			this._renderConfetti();
		};

		Confettiful.prototype._setupElements = function() {
			const containerEl = document.createElement('div');
			const elPosition = this.el.style.position;

			if (elPosition !== 'relative' || elPosition !== 'absolute') {
				this.el.style.position = 'relative';
			}

			containerEl.classList.add('confetti-container');

			this.el.appendChild(containerEl);

			this.containerEl = containerEl;
		};

		Confettiful.prototype._renderConfetti = function() {
			this.confettiInterval = setInterval(() => {
				const confettiEl = document.createElement('div');
				const confettiSize = (Math.floor(Math.random() * 3) + 7) + 'px';
				const confettiBackground = this.confettiColors[Math.floor(Math.random() * this.confettiColors.length)];
				const confettiLeft = (Math.floor(Math.random() * this.el.offsetWidth)) + 'px';
				const confettiAnimation = this.confettiAnimations[Math.floor(Math.random() * this.confettiAnimations.length)];

				confettiEl.classList.add('confetti', 'confetti--animation-' + confettiAnimation);
				confettiEl.style.left = confettiLeft;
				confettiEl.style.width = confettiSize;
				confettiEl.style.height = confettiSize;
				confettiEl.style.backgroundColor = confettiBackground;

				confettiEl.removeTimeout = setTimeout(function() {
					confettiEl.parentNode.removeChild(confettiEl);
				}, 3000);

				this.containerEl.appendChild(confettiEl);
			}, 25);
		};

		window.confettiful = new Confettiful(document.querySelector('.js-container'));
	</script>

	<script>
		$(document).ready(function() {
			let cards = ['card1', 'card2', 'card3', 'card4'];
			let isMoved = 0;
			cards.forEach((cardId, index) => {
				$(`#${cardId}`).wScratchPad({
					size: 70,
					bg: "#ff0000",
					fg: "assets/images/core/<?= ($page["front"] != "") ? $page["front"] : "default.jpg" ?>",
					cursor: 'pointer',
					realtime: true,
					scratchDown: function(e, percent) {
						if (isMoved == 0) {
							$(e.target.parentElement).css({
								backgroundColor: "green"
							});

							$(".js-container").show();

							$.ajax({
								url: "scripts/core/action.php",
								data: {
									pageName: "insertVisitor",
									pageId: "<?= $page["id"] ?>"
								}
							})

							// $("#card1").wScratchPad('clear');

							// Scratch all other boxes and disable them
							for (let i = 0; i < cards.length; i++) {
								if (i !== index) {
									$(`#${cards[i]}`).wScratchPad('clear');
									$(`#${cards[i]}`).html("");
									$(`#${cards[i]}`).css({
										cursor: "not-allowed"
									});
								}
							}
						}
						isMoved++;
					}
				});
			});
			$(".loader").hide();


			//Turn It to the background
			const body = $("body");
			const toggleButton = $("#toggleButton");
			const darkModeStorageKey = "darkMode";

			// Check if the "app-dark" class is already applied to the body (black mode)
			const isDarkMode = body.hasClass("app-dark");
			if (isDarkMode) {
				toggleButton.text("Turn White");
			}

			// Function to set the dark mode preference in localStorage
			function setDarkModePreference(isDark) {
				localStorage.setItem(darkModeStorageKey, isDark.toString());
			}

			// Function to get the dark mode preference from localStorage
			function getDarkModePreference() {
				const darkModeValue = localStorage.getItem(darkModeStorageKey);
				return darkModeValue === "true";
			}

			toggleButton.on("click", function() {
				if (body.hasClass("app-dark")) {
					// If the class "app-dark" is present, remove it (switch to white mode)
					body.removeClass("app-dark");
					toggleButton.text("Turn Black");
					setDarkModePreference(false);
				} else {
					// If the class "app-dark" is not present, add it (switch to black mode)
					body.addClass("app-dark");
					toggleButton.text("Turn White");
					setDarkModePreference(true);
				}
			});

			// Check localStorage for previous preference and set the mode accordingly
			const previousMode = getDarkModePreference();
			if (previousMode) {
				body.addClass("app-dark");
				toggleButton.text("Turn White");
			}
		})
	</script>

</body>

</html>