<!--Chapter 2 Exercise-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Roll Game</title>
</head>
<body style="background-color: lightgreen;">
    <h1 style="color: orangered;">Let's Roll Some Dice!</h1>   

    <?php
        // Global Variables
        $FaceNamesSingular = array("one", "two", "three", "four", "five", "six");
        $FaceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");

        // Definition of the CheckForDoubles() function
        function CheckForDoubles($Die1, $Die2) {
            global $FaceNamesSingular;
            global $FaceNamesPlural;

            if($Die1 == $Die2) {
                // We're here because we have doubles!
                echo "<p>The roll was double ", $FaceNamesPlural[$Die1-1], "</p>";
                return true;
            }
            else {
                echo "<p>The roll was a ", $FaceNamesSingular[$Die1-1], " and a ", $FaceNamesSingular[$Die2-1], "</p>";
                return false;
            } 
        } // end of function

        // Definition of the DisplayScoreText() function
        function DisplayScoreText($Score) {
            switch($Score) {
                case 2:
                    echo "<p>You rolled snake eyes!</p>";
                    break;
                case 3:
                    echo "<p>You rolled a loose deuce!</p>";
                    break;
                case 5:
                    echo "<p>You rolled a fever five!</p>";
                    break;
                case 7:
                    echo "<p>You rolled a natural!</p>";
                    break;
                case 9:
                    echo "<p>You rolled a nina!</p>";
                    break;
                case 11:
                    echo "<p>You rolled a yo!</p>";
                    break;
                case 12:
                    echo "<p>You rolled boxcars!</p>";
                    break;
            }
        } // end of function

        // We're back to global code again
        $Dice = array();
        $DoublesCount = 0;
        $RollCount = 1;

        while($RollCount <= 3) {
            $Dice[0] = rand(1, 6);
            $Dice[1] = rand(1, 6);

            $Total = $Dice[0] + $Dice[1];

            echo "<p>The total score for the roll $RollCount was $Total.</p>";
            $Doubles = CheckForDoubles($Dice[0], $Dice[1]);
            DisplayScoreText($Total);
            if($Doubles == true) {
                ++$DoublesCount;
            }

            ++$RollCount;
            echo "<hr/>";
        } // end of while loop

        echo "<p><strong>Doubles occurred on $DoublesCount of your rolls.</strong></p>";
    ?> 

</body>
</html>