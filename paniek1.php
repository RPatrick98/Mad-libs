<?php 


$validation = false;



$content = array("Welk dier zou je nooit als huisdier willen hebben?", "Wie is de belangrijste persoon in je leven?", "Inwelk land zou je graag willen wonen?", "Wat doe je als je je verveelt?", "Met welk speelgoed speelde je als kind het meest?", "Bij welke docent spijbel je het liefst?", "Als je 100.000,-had, wat zou je dan kopen?", "Wat is je favoriete bezigheid?");


$oneErr = $twoErr = $threeErr = $fourErr = $fiveErr = $sixErr = $sevenErr = $eightErr = "";
$one = $two = $three = $four = $five = $six = $seven = $eight = "";


if($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST['one'])) {
		$oneErr = "is required";
		$validation = false;
		
	} else {
		$one = test_input($_POST["one"]);
		$validation = true;

	}

	if (empty($_POST['two'])) {
		$twoErr = "is required";
		$validation = false;
	} else {
		$two = test_input($_POST["two"]);
		$validation = true;
	}

	if (empty($_POST['three'])) {
		$threeErr = "is required";
		$validation = false;
	} else {
		$three = test_input($_POST["three"]);
		$validation = true;
	}

	if (empty($_POST['four'])) {
		$fourErr = "is required";
		$validation = false;
	} else {
		$four = test_input($_POST["four"]);
		$validation = true;
	}

	if (empty($_POST['five'])) {
		$fiveErr = "is required";
		$validation = false;
	} else {
		$five = test_input($_POST["five"]);
		$validation = true;
	}

	if (empty($_POST['six'])) {
		$sixErr = "is required";
		$validation = false;
	} else {
		$six = test_input($_POST["six"]);
		$validation = true;
	}

	if (empty($_POST['seven'])) {
		$sevenErr = "is required";
		$validation = false;
	} else {
		$seven = test_input($_POST["seven"]);
		$validation = true;
	}

	if (empty($_POST['eight'])) {
		$eightErr = "is required";
		$validation = false;
	} else {
		$eight = test_input($_POST["eight"]);
		$validation = true;
	}
	
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>



<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>Paniek1</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header class="center">
		<nav>
			<ul class="navbar">
				<li><a href="paniek1.php">Er heerst paniek...</a></li>
				<li><a href="onkunde1.php">Onkunde</a></li>
			</ul>
		</nav>
		
	</header>

	<div class="center white">

		<h1>Er heerst paniek...</h1>
		<p><span class="error">* required field</span></p>

		

		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<p><?php echo $content[0]; ?></p>
			<input type="text" name="one">
			<span class="error">* <?php echo $oneErr; ?></span>

			<p><?php echo $content[1]; ?></p>
			<input type="text" name="two">
			<span class="error">* <?php echo $twoErr; ?></span>

			<p><?php echo $content[2]; ?></p>
			<input type="text" name="three">
			<span class="error">* <?php echo $threeErr; ?></span>

			<p><?php echo $content[3]; ?></p>
			<input type="text" name="four">
			<span class="error">* <?php echo $fourErr; ?></span>

			<p><?php echo $content[4]; ?></p>
			<input type="text" name="five">
			<span class="error">* <?php echo $fiveErr; ?></span>

			<p><?php echo $content[5]; ?></p>
			<input type="text" name="six">
			<span class="error">* <?php echo $sixErr; ?></span>

			<p><?php echo $content[6]; ?></p>
			<input type="text" name="seven">
			<span class="error">* <?php echo $sevenErr; ?></span>

			<p><?php echo $content[7]; ?></p>
			<input type="text" name="eight">
			<span class="error">* <?php echo $eightErr; ?></span>
			<br><br> 
			<input type="submit" name="submit" value="Verzenden">

		
		</form>

		<?php 
		if($validation == true) {
			echo "Er heerst paniek in het koninkrijk ".$three." . Koning " .$six. " is ten einde raad en als koning " .$six."zijn ten-einde-raadsheer ".$two.". ".$two."! Het is een ramp het is een schande
				Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?
				 Mijn ".$one." is verdwenen! Zomaar zonder waarschuwing. En ik had net ".$five." voor hem gekocht!
				 Majesteit uw " .$one." komt vast vanzelf weer terug?
				 Ja, da's leuk en aardig maar hoe moet ik in de tussentijd ".$eight." leren?
				 Maar Sire daar kunt u toch uw".$seven." voor gebruiken? "
				 .$two." je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had?"
				 .$four." Sire."
		;}
			


		?>

		
	</div>

	<footer class="center">
		<p>© Deze website is gemaakt door Patryk Rachanczyk 2021</p>
	</footer>

	

</body>
</html>