// We will need to add a
// feature that will dynamically
// update the page content as
// the values of the inputs change.

//Like if the user picks a d6 die type
let numberOfDice = 0;
let diceType = 0;
let rolls = [];

function RollTheDice() {
    //Roll
    //Variable initializations
    var diceInputBox = document.getElementById("numberOfDice");
    var diceTypeSelection = document.getElementById("diceType");
    var outputBox = document.getElementById("output");

    diceType = diceTypeSelection.value
    numberOfDice = diceInputBox.value;

    for (let i = 0; i <= numberOfDice; i++){
        //Logic of making new random numbers then outputting them.
    }
}