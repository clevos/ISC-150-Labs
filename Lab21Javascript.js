
function flipIt (){
    var coinFlip = Math.round(Math.random() * 2) + 1;
    if(coinFlip==1){
        document.getElementById('quarter').src = 'heads.gif';
        setTimeout(resetCoin,5000);
    }else if(coinFlip==2){
        document.getElementById('quarter').src = 'tails.gif';
        setTimeout(resetCoin,5000);
    }
}
function resetCoin(){
	document.getElementById('quarter').src = 'spinning.gif';
}
