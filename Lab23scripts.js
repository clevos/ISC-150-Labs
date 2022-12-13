var secretNumber = Math.round(Math.random() * 500) + 1;
var guessCount = 0;
var t = "";
function inputYes(){
	document.getElementById('gameBoard').style.display = "block";
	document.getElementById('yesORno').style.display = "none";
	//document.getElementById('reply').innerHTML = secretNumber;
}

 
function inputNo(){
	document.getElementById('yesORno') .style.display = "none";
	document.getElementById('Q2').innerHTML = "Good then go away!";
	
}

function inputGuess(){
	var theGuess = document.getElementById('theGuess').value;
	guessCount = guessCount + 1;
	if(theGuess == secretNumber){
		document.getElementById('reply').innerHTML = "You Win! " + guessCount + " guesses.";
		document.getElementById('theGuess').value = "";
		document.getElementById('theGuess').focus();
	}else if (theGuess < secretNumber){
		t = wordsOfEncouragment();
		document.getElementById('reply').innerHTML = "Incorrect guess to low " + t + " you have guessed " + guessCount + " times.";
		document.getElementById('theGuess').value = "";
		document.getElementById('theGuess').focus();
		document.getElementById('numberGuessed').innerHTML += " " + theGuess +",";
	}else if (theGuess > secretNumber){
		t = wordsOfEncouragment();
		document.getElementById('reply').innerHTML = " Your to high " + t + " you have guessed " + guessCount + " times.";
		document.getElementById('theGuess').value = "";
		document.getElementById('theGuess').value = "";
		document.getElementById('theGuess').focus();
		document.getElementById('numberGuessed').innerHTML += " " + theGuess +",";

	}

}// End of inputGuess

function wordsOfEncouragment(){
    var e = "";
    var x = Math.round(Math.random() * 5) + 1;
    switch (x){
    	case 1:
    	   e = "Keep moving forward!";
    	   break;
    	case 2:
    	    e = "Your doing good keep trying";
    	    break;
    	case 3:
    	    e = "That's amazing!";
    	    break;
    	case 4:
    	    e = "Your a geniues";
    	    break;
    	case 5:
    	   e = "You are a good guesser";
    	   break;


    }//End of Switch
    return e;
}//end of wordsOfEncouragment
