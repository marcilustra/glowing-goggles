// We will need to add a
// feature that will dynamically
// update the page content as
// the values of the inputs change.

//Like if the user picks a d6 die type
let numberOfDice = 0;
let diceType = 0;

function RollTheDice() {
    //Roll
    //Variable initializations
    var diceInputBox = document.getElementById("numberOfDice");
    var diceTypeSelection = document.getElementById("diceType");
    var outputBox = document.getElementById("output");

    diceType = diceTypeSelection.value
    numberOfDice = diceInputBox.value;

    if (numberOfDice > 10) {
        outputBox.innerHTML = (numberOfDice - 10) + " too many dice today for type D" + diceType;
    }
}