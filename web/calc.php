<!DOCTYPE HTML>
<html>

<head>
	<title>Sustainable Calculator</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">

	<div class="box container">
		<section>
			<form method="post" action="./result.php">
				<header>
					<h3>Information about your business</h3>
				</header>
				<div class="row">
					<ul>
						<li><label for="visits_per_day">Number of visitors per day</label></li>
						<li><input class="number" type="number" name="visits_per_day" id="visits_per_day" value="" placeholder="550" required /></li><br>
						<li><label for="open_days">Open days per month</label></li>
						<li><input class="number" type="number" name="open_days" id="open_days" value="" placeholder="25"  required />
						</li>
					</ul>
				</div>
				<div style="clear: both; width: 100%;"></div>
				<header>
					<h3>Inputs for paper towel</h3>
				</header>
				<div class="row">
					<ul>
						<li><label for="paper_price">Price for one towel (CZK)</label></li>
						<li><input class="number" type="number" name="paper_price" id="paper_price" value="" placeholder="0.3"  required /></li>
					</ul>
				</div>
				<div style="clear: both; width: 100%;"></div>
				<header>
					<h3>Inputs for cloth towel</h3>
				</header>
				<div class="row">
					<ul>
						<li><label for="cloth_washmachine_capacity">Washing machine capacity (number of pieces)</label>
						</li>
						<li><input class="number" type="number" name="cloth_washmachine_capacity" id="cloth_washmachine_capacity" value="" placeholder="40"  required/></li>
						<li><label for="cloth_wash_price">Price for one wash (CZK)</label></li>
						<li><input class="number" type="number" name="cloth_wash_price" id="cloth_wash_price" value="" placeholder="23"  required/></li>
					</ul>
				</div>
				<div style="clear: both; width: 100%;"></div>
				<header>
					<h3>Inputs for drayer</h3>
				</header>
				<div class="row">
					<ul>
						<li><label for="dryer_input_power">Input power (W)</label></li>
						<li><input class="number" type="number" name="dryer_input_power" id="dryer_input_power" value="" placeholder="1200"  required /></li>
						<li><label for="dryer_electric_price">Price for kWh (CZK)</label></li>
						<li><input class="number" type="number" name="dryer_electric_price" id="dryer_electric_price" value="" placeholder="1200"  required /></li>
					</ul>
				</div><br><br>
				<ul>
					<li><input type="submit" value="Calculate" id="send_button" /></li>
				</ul>
				<br><br>
				<div style="clear: both; width: 100%;"></div>
			</form>
		</section>
	</div>
	</form>

	<!-- Footer -->
	<div id="footer">
		<div class="container medium">

			<ul class="copyright">
				<li>&copy; 2013 The GluMCo Team. All rights reserved.</li>
				<li>Design by <a href="http://html5up.net">HTML5 UP</a></li>
			</ul>

		</div>
	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>