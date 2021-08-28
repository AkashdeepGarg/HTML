var x = Math.random() * 6;
x = Math.floor(x);
x=x+1;

var randomDiceImage1 = "dice" + x + ".png";
var randomDiceSource1 = randomDiceImage1;

document.querySelectorAll("img")[0].setAttribute("src", randomDiceSource1);

var y = Math.random() * 6;
y = Math.floor(y);
y=y+1;

var randomDiceImage2 = "dice" + y + ".png";
var randomDiceSource2 = randomDiceImage2;

document.querySelectorAll("img")[1].setAttribute("src", randomDiceSource2);

if(x>y){
	document.querySelector("h1").innerHTML = "&star; Player 1 WINS!!! &star;";
}
else if(x<y){
	document.querySelector("h1").innerHTML = "&star; Player 2 WINS!!! &star;";
}
else{
	document.querySelector("h1").innerHTML = "&star; NO WINNER!!!  DRAW &star;";
}