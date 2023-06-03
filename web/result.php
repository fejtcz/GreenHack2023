<?php
$input_data = filter_input_array(INPUT_POST);
if (!$input_data) {
	header("Location: index.php");
	exit();
}
?>
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
		<header>
			<h2>Result</h2>
		</header>
		<?php
		$towel_count = intval(@$input_data['visits_per_day']) * intval(@$input_data['open_days']) * 2;
		?>
		<section>
			<header>
				<h3>Paper towel</h3>
			</header>
			<p>
				If you opt for paper towels, expect the following:
			</p>
			<ul class="default">
				<li>The monthly purchase costs will be approximately <?php print intval(@$input_data['paper_price']) * $towel_count; ?> CZK</li>
				<li> The generated waste per month is approximately
					<strong><?php print (0.25 * 0.12 * $towel_count * 30) / 1000; ?> t</strong>
				</li>
				<li style="color:#FDB2A1">From the economic point of view it is necessary to include the costs of waste removal, logistic costs with the purchase of towels and the salary of the waste collector...</li>
				<li style="color:#65D48B">From an ecological point of view it is necessary to think about the transport of the product to you and the transport of the waste from you</li>
			</ul>
		</section>
		<section>
			<?php
			$daily_towels = @$input_data['visits_per_day'] / 50;
			$monthly_machine_wash = ceil(($daily_towels * intval(@$input_data['open_days'])) / intval(@$input_data['cloth_washmachine_capacity']));
			$washing_price = intval(@$input_data['cloth_wash_price']) * $monthly_machine_wash;
			?>
			<header>
				<h3>Cloth towel</h3>
			</header>
			<p>
				If you opt for cloth towels, expect the following:
			</p>
			<ul class="default">
				<li>The daily consumption of towels will be approx <?php print $daily_towels; ?> pcs.</li>
				<li>That means that in a month's time you'll need to <?php print $monthly_machine_wash ?> turn on the washing machine</li>
				<li>The washing price per month will then be approximately <?php print $washing_price; ?> CZK</li>
				<li style="color:#FDB2A1">From the economic point of view it is necessary to include the cost of purchasing the gowns, their likely wastage rate, and the salary of the staff who will procure the washing...</li>
				<li style="color:#65D48B">From an ecological point of view it is necessary to think about the ecological footprint when generating electricity to power the buckle and discharging waste water into the sewer</li>
			</ul>
		</section>
	</div>
	<br><br>
	<div style="clear: both; width: 100%;"></div>
	</div>

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