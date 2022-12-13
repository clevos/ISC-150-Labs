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
				<li><label for="1Name">Enter your last name:</label>
					<input type="text" name="1Name" id="1Name" class="tb" placeholder="Enter your last name" required pattern="[A-Za-z]{2}+"/></li>
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
				    <input type="text" name="myPhone" id= "myPhone" class="tb" placeholder="Enter your phone number" pattern="\d{3}[\-]\d{3}[\-]\d{4}"/></li>
				<li><input type="submit" value="Submit"></li>	
				</ul>

	</form>
</body>
<script>
	document.theForm.fName.onfocus=function(){
		document.getElementById('hints').innerHTML ="Please enter your first name it must be at least 2 letters.";
	}
	document.theForm.fName.onblur=function(){
		document.getElementById('hints').innerHTML = "";
	}
	document.theForm.myEmail.onfocus=function(){
		document.getElementById('hints').innerHTML = "Please enter a valid email address.";
	}
	document.theForm.myEmail.onblur=function(){
		document.getElementById('hints').innerHTML = "";
body{
	background-color: #7A40FF;
}

#myForm{
	position: absolute;
	background-color: #40D1FF;
	border-style: solid;
	left: 25%;
	top: 30%;
	width: 45%;
	box-shadow: 10px 10px 5px #4C76FF;
	padding: 10px;
}

#formData{
	position: absolute;
	background-color: #40D1FF;
	border-style: solid;
	left: 25%;
	top: 30%;
	width: 45%;
	box-shadow: 10px 10px 5px #4C76FF;
	padding: 10px;
}

#hints{
	color: black;
	height: 15px;
	font-weight: bolder;
}
.tb{
	position: absolute;
	Left: 40%; 
}

ul{
	list-style-type: none;
}

li{
	margin: 5px;
}
	}
</script>

</html>