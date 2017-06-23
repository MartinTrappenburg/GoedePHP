<?php
		//echo date('G-i-s');
	date_default_timezone_set("Europe/amsterdam");
	$uur = date('H');
	$time = date('H:i:s');
	//$bg = "test";
	if ($uur <= 6) {
		$img = 'image/night.png';
		$bg = "nacht";
	}elseif ($uur <= 12) {
		$img = 'image/morning.png';
		$bg = "Morgen";
	}elseif ($uur < 18) {
		$img = 'image/afternoon.png';
		$bg = "middag";
	}elseif ($uur >= 18) {
		$img = 'image/evening.png';
		$bg = "avond";
	}
?>
<html>
	<head>
		<title>Goede PHP</title>
		<link rel="stylesheet" type="text/css" href="imagestyle.css">
	</head>
	
	<body>
		

		<div class="header">
			<div class="test" style="background:url(<?php echo $img; ?>);">
				<?php
					echo "<h1> Goede $bg </h1>";
					echo "De tijd is $time";
				?>
			</div>
		</div>
	</body>	
</html>