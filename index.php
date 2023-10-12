<!-- 
        MarciLustra 2023. A panel that has an input box that will only accept numbers.
        A dropdown selector or maybe even a radio selection panel that
        will pick the type of the dice to roll. This will affect the 
        range of values that can be output by the dice roll. Might want
        to cap the value of of the input box to a manageable number. 
        The output will thus be displayed on cute little squares? or better yet,
        polygons of the associated shape of the dice type.
    -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rollin'</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <script src="script.js"></script>
</head>

<body>
    <h3>MultiDimensional Dice Roll</h3>
    <form method="POST" class="whole">
        <div class="input-section">
            <label>How many dice?</label>
            <input type="number" name="quantity" id="numberOfDice"
                onkeyup="if(!this.checkValidity() || this.value > 100){this.value='';alert('Whole numbers from 0 to 100 please')};">
            <label for="diceTYpe">Select the type of dice</label>
            <select name="diceType" id="diceType">
                <option value="4">D4</option>
                <option value="6">D6</option>
                <option value="8">D8</option>
                <option value="12">D12</option>
                <option value="20">D20</option>
            </select>
            <button type="submit" name="roll">Roll them Dice!</button>
        </div>
        <div class="output-section">
            <?php
                $numberOfDice = 0;
                $diceType = "";
                if (array_key_exists('roll', $_POST)) {
                    roll();
                }
                function roll() {
                    $numberOfDice = $_POST['quantity'];
                    $diceType = $_POST['diceType'];
                    $currentDieValue = 0;
                    $sum = 0;
                    if ($numberOfDice > 0) {
                        echo ("<p>A roll for: $numberOfDice dice of type d$diceType.</p><br>");
                    } else {
                        echo ("<p>At least tell us how many dice.</p>");
                    }
                    echo ("<p> Values: ");
                    for ($counter = 1; $counter <= $numberOfDice; $counter++)
                    {
                        $currentDieValue = rand(1, $diceType);
                        if ($counter != $numberOfDice)
                        {
                            echo($currentDieValue . ", ");
                        } else {
                            echo($currentDieValue);
                        }
                        $sum += $currentDieValue;
                    }
                    echo ("</p>");
                    if ($sum % 6 == 0)
                    {
                        if (($sum/6)%6 == 0) {
                            echo ("<p>A perfect square factor of 6 in this one!</p>");
                        }
                    echo ("<p>Amazing! ". ($sum/6). " hexagons! For a value of " . $sum . "</p>");
                    } else {
                        echo ("<p> Total value of the dice roll = $sum</p>");
                    }
                    
                }
            ?>
        </div>
    </form>

</body>

</html>