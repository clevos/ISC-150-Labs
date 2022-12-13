<!DOCTYPE html>
<html lang="en-US">

<head>
	<!-- Lab 27 Charles Levos -->
	<link rel="stylesheet" type="text/css" href="Lab27Styles.css">
	<title>Charles Levos Lab 27</title>
</head>

<body>
	<center>
		<h2>Lab 27</h2>
		<p>This is a formatted form for submitting data.</p>
	</center>

	<form id="myform" name="theform" action="processLab27.php" method="POST">
		<legend>Log in Data:</legend>
		<ul>
			<li>
				<p id="hints"></p>
			</li>

			<li>
				<!-- https://www.kalzumeus.com/2010/06/17/falsehoods-programmers-believe-about-names/ -->
				<label for="fName">Enter your full name:</label>
				<input type="text" name="fName" id="fName" class="tb" placeholder="Please enter your full name" required pattern="[A-Za-z]{2}+">
			</li>

			<li>
				<label for="myEmail">Enter your email address:</label>
				<input type="email" name="myEmail" id="myEmail" class="tb" placeholder="Enter your email address:">
			</li>

			<li>
				<label for="myCity">Which city do you live in?:</label>
				<input type="text" id="myCity" name="myCity" class="tb" placeholder="Enter your city." pattern="[A-Za-z]{5}+" required />
			</li>

			<li>
				<label for="myState">Which state you live in?:</label>
				<input type="text" name="myState" id="myState" class="tb" placeholder="Enter the abbreviation of state you live in:" required pattern="[A-Z]{2}" />
			</li>

			<li>
				<label for="myZip">Enter your Zip Code</label>
				<input type="text" name="myZip" id="myZip" class="tb" placeholder="Enter your 5 or 9 digit ZIP Code" required pattern="(\d{5}([\-]\d{4})?)" />
			</li>

			<li>
				<label for="myPhone">Enter your phone number:</label>
				<input type="text" name="myPhone" id="myPhone" class="tb" placeholder="nnn-nnn-nnn" pattern="\d{3}[\-]\d{3}[\-]\d{4}" />
			</li>

			<li><input type="submit" value="Submit"></li>
		</ul>

	</form>
</body>
<script>
	document.theForm.fName.onfocus = function () {
		document.getElementById('hints').innerHTML = "Please enter your first name it must be at least 2 letters.";
	}
	document.theForm.fName.onblur = function () {
		document.getElementById('hints').innerHTML = "";
	}
	document.theForm.myEmail.onfocus = function () {
		document.getElementById('hints').innerHTML = "Please enter a valid email address.";
	}
	document.theForm.myEmail.onblur = function () {
			document.getElementById('hints').innerHTML = "";
	}
	document.theForm.myEmail.onfocus = function () {
		document.getElementById('hints').innerHTML = "Please enter a valid email address.";
</script>

</html>