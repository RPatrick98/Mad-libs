<?php 


$validation = false;


$content = array("Wat zou je graag willen kunnen?", "Met welke persoon kun je goed opschieten?", "Wat is je favoriete getal?", "Wat heb je altijd bij je als je op vakantie gaat?", "Wat is je beste persoonlijke eigenschap?", "Wat is je slechtste persoonlijke eigenschap?", "Wat is het ergste dat je kan overkomen?");



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
	<title>onkunde</title>
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
		<p><span class="error">*required field</span></p>
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

			<br><br>

			<input type="submit" name="submit" value="Verzenden">

		</form>

		<?php 
		if($validation == true) {
			echo "Er zijn veel mensen die niet kunnen " .$one.
				". Neem nou ".$two. " Zelfs met de hulp van een " .$four." of zelfs ".$three." kan " .$two. " niet " .$one. ". Dat heeft niet te maken met een gebrek aan " .$five." maar met een teveel aan ".$six.". Te veel ".$six. " leidt tot " .$eight. " en dat is niet goed voor als je wilt " .$one.". Helaas voor ".$two."";
		}



		?>
	</div>

	<footer class="center">
		<p>© Deze website is gemaakt door Patryk Rachanczyk 2021</p>
	</footer>

</body>
</html>