/* Global Variables */
var numA = "";
var numB = "";
var Answer = "";
var MathOp = "";


/* Function Keys */
function myAddFunction(){
    MathOp = "A";
	numB = parseInt(numA)
	numA = "";
	document.getElementById('reply').innerHTML += " + " ;
}

function myTimesFunction(){
	MathOp = "T";
	numB = parseInt(numA);
	numA = "";
	document .getElementById('reply').innerHTML += " x ";
}

function myDivideFunction(){
	MathOp = "D";
	numB = parseInt(numA);
	numA = "";
	document .getElementById('reply').innerHTML += " &divide ";
}

function mySubFunction(){
    MathOp = "S";
    numB = parseInt(numA);
    numA = "";
    document.getElementById('reply').innerHTML += " - ";
}


function myEqFunction(){
	document.getElementById('reply').innerHTML += " = ";
	var x = parseInt(numA);
	var y = parseInt(numB);
	switch (MathOp){
		case "A":
		    Answer = x + numB;
		    document.getElementById('reply').innerHTML += Answer;
		    break;
		case "S":
		    Answer = y - x;
		    document.getElementById('reply').innerHTML += Answer;
		    break;
		case "T":
	        Answer = x * numB;
	        document.getElementById('reply').innerHTML += Answer;
	       break;
	    case "D":
	        Answer = y / x;
	        document.getElementById('reply').innerHTML += Answer;
	        break;
	}
}/* End of Equals Function */
x = 0;
function myClearFunction(){
    numA = "";
    numB = "";
    Answer = "";
    MathOp = "";
    document.getElementById('reply').innerHTML = "&nbsp;"; 


}

/* number Keys */
function my0Function(){
	numA += 0;
	document.getElementById('reply').innerHTML += "0"
}

function my1Function(){
	numA += 1;
	document.getElementById('reply').innerHTML += "1";
}

function my2Function(){
	numA += 2;
	document.getElementById('reply').innerHTML += "2";
}
function my3Function(){
    numA += 3;
    document.getElementById('reply').innerHTML += "3"
}

function my4Function(){
    numA += 4;
    document.getElementById('reply').innerHTML += "4"
}

function my5Function(){
    numA += 5;
    document.getElementById('reply').innerHTML += "5"
}

function my6Function(){
    numA += 6;
    document.getElementById('reply').innerHTML += "6"
}

function my7Function(){
    numA += 7;
    document.getElementById('reply').innerHTML += "7"
}

function my8Function(){
    numA += 8;
    document.getElementById('reply').innerHTML += "8"
}

function my9Function(){
    numA += 9;
    document.getElementById('reply').innerHTML += "9"
}
