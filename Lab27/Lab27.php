<!DOCTYPE html>
<html>
<head>
	<!--
		Lab 27
		Charles Levos
	-->
	<link rel="stylesheet" type="text/css" href="Lab27Styles.css">
	<title>Charles Levos Lab 27</title>
</head>
<body><center><h2>Lab 27</h2>
	<p>This is a formatted form for submitting data.</p></center>
	<form id="myform" name="theform" action="processLab27.php" method="POST">
		<legend>Log in Data:</legend>
		<ul>
			<li><p id="hints"></p></li>
			<li>&nbsp;</li>
			    <li><label for="fName">Enter your first name:</label>
				    <input type="text" name="fName" id="fName" class="tb" placeholder="Enter your first name" required pattern="[A-Za-z]{2}+"/></li>
				<li><label for="lName">Enter your last name:</label>
					<input type="text" name="lName" id="lName" class="tb" placeholder="Enter your last name" required pattern="[A-Za-z]{2}+"/></li>
				<li><label for="myEmail">Enter your email address:</label>
				     <input type="email" name="myEmail" id="myEmail" class="tb" placeholder="Please enter your email address:"/></li>
				<li><label for="myCity">Which city do you live in?:</label>
				    <input type="text" id="myCity" name="myCity" class="tb" placeholder="Enter your city." pattern="[A-Za-z]{5}+" required/></li>
				<li><label for="myState">Which state you live in?:</label>
				    <input type="text" name="myState" id="myState" class="tb" placeholder="Enter the state you live in:" required pattern="[A-Z]{2}"/></li>	
				<li><label for="myZip">Enter your Zip Code</label>
					<input type="text" name="myZip" id="myZip" class="tb" placeholder="Enter your Zip Code" required pattern="(\d{5}([\-]\d{4})?)"/>
				</li>
				<li><label for="myPhone">Enter your phone number:</label>
				    <input type="text" name="myPhone" id= "myPhone" class="tb" placeholder="###-###-####" pattern="\d{3}[\-]\d{3}[\-]\d{4}"/></li>
				<li><input type="submit" value="Submit"></li>	
				</ul>

	</form>
</body>
<script>
	document.theform.fName.onfocus=function(){
		document.getElementById('hints').innerHTML ="Please enter your first name it must be at least 2 letters.";
	}
	document.theform.fName.onblur=function(){
		document.getElementById('hints').innerHTML = "";
	}
	document.theform.lName.onfocus=function(){
		document.getElementById('hints').innerHTML = "Please enter your last name and it must be at least 2 letters.";
	}
	document.theform.lName.onblur=function(){
		document.getElementById('hints').innerHTML = "";
	}
	document.theform.myEmail.onfocus=function(){
		document.getElementById('hints').innerHTML = "Please enter a valid email address.";
	}
	document.theform.myEmail.onblur=function(){
		document.getElementById('hints').innerHTML = "";
	}
	document.theform.myCity.onfocus=function(){
		document.getElementById('hints').innerHTML = "Please enter a valid city.";
	}
	document.theform.myCity.onblur=function(){
		document.getElementById('hints').innerHTML = "";
	}
	document.theform.myState.onfocus=function(){
		document.getElementById('hints').innerHTML = "Please enter at least 2 letters.";
	}
	document.theform.myState.onblur=function(){
		document.getElementById('hints').innerHTML = "";
	}
	document.theform.myZip.onfocus=function(){
		document.getElementById('hints').innerHTML = "Please enter 5 numbers #####.";
	}
	document.theform.myZip.onblur=function(){
		document.getElementById('hints').innerHTML = "";
	}	
	document.theform.myPhone.onfocus=function(){
		document.getElementById('hints').innerHTML = "Please enter phone number ###-###-####.";
	}
	document.theform.myPhone.onblur=function(){
		document.getElementById('hints').innerHTML = "";
	}

</script>

</html>