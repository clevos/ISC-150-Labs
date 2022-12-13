<!DOCTYPE html>
<html>

<head>
	<title>Submitted Data Lab 27</title>
	<style>
		#NikoData {
			position: absolute;
			background-color: #40D1FF;
			border-style: solid;
			left: 25%;
			top: 30%;
			width: 45%;
			box-shadow: 10px 10px 5px #4C76FF;
			padding: 10px;w
		}
	</style>
</head>

<body>
	<p>Submitted Data Lab 27</p>
	<div id="NikoData">
		<pre>
			<?php //var_dump( $_POST ); ?>
		</pre>
<?php
		$fName = $_POST["fName"];
		$lName = $_POST["lName"];
		$myEmail = $_POST["myEmail"];
		$myCity = $_POST["myCity"];
		$myState = $_POST["myState"];
		$myZip = $_POST["myZip"];
		$myPhone = $_POST["myPhone"];
		echo "Hello, " . $fName . " " . $lName . "<br>";
		echo "Your email is :".$myEmail."<br>";
		echo "You live in " .$myCity;
		echo " ".$myState;
		echo " ".$myZip."<br>";
		echo "Your phone number is: ".$myPhone;
	?>
	</div>
</body>

</html>