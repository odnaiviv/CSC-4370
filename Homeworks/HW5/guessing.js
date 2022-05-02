//js code for part b

//random number variable
var random = 0;
//guessing limit variable
var guesslimit = 10;
//counter for guessing limit
var counter = 10;

//function that sets the random number & counts the number of guesses left
function rng() {
	//setting up for program to pick a random number from 1-100
	random = Math.floor(Math.random() * 101);
	//counting number of guesses left
	document.getElementById("attempts").innerHTML = "Number of guesses left: " + counter;
}

//function to check number of guesses
function checknum() {
	var usernum = new Number(document.getElementById("num").value);
	//comparing the user's number with the randomly selected number
	//when user guesses correctly
	if (usernum == random) {
		alert("The correct number was " + random + ". Good job!\nGame will now reset...");
		//resets the counter to the guess limit
		counter = guesslimit;
		//calling function to reset the game
		rng();
	}
	//when user guesses incorrectly
	else {
		if (usernum > random && counter > 1) {
			//when user guess is higher than random number
			alert("Your guess is too high, try again!");
			//decrements counter by 1
			counter -= 1;
			//notifies the user number of guesses left
			document.getElementById("attempts").innerHTML = "Number of guesses left: " + counter;
		}
		else if (usernum < random && counter > 1) {
			//when user guess is lower than random number
			alert("Your guess is too low, try again!");
			//decrements counter by 1
			counter -= 1;
			//notifies the user number of guesses left
			document.getElementById("attempts").innerHTML = "Number of guesses left: " + counter;
		}
		else if (counter == 1) {
			alert("Sorry, you ran out of guesses! The correct number was " + random + ".\nGame will now reset...");
			//resets the counter to the guess limit
			counter = guesslimit;
			//calling function to reset the game
			rng();
		}
	}
}
