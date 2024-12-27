<!DOCTYPE html>
<html>
<head>
    <title>Football Team Points Calculator</title>
</head>
<body>
    <h2>Calculate Total Football Team Points</h2>

    <!-- Form for user input -->
    <form method="POST" action="">
        <label for="wins">Number of Wins:</label>
        <input type="number" id="wins" name="wins" required><br><br>

        <label for="draws">Number of Draws:</label>
        <input type="number" id="draws" name="draws" required><br><br>

        <label for="losses">Number of Losses:</label>
        <input type="number" id="losses" name="losses" required><br><br>

        <button type="submit">Calculate Points</button>
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve input values from the form
        $wins = intval($_POST['wins']);
        $draws = intval($_POST['draws']);
        $losses = intval($_POST['losses']);

        // Function to calculate total points
        function calculatePoints($wins, $draws, $losses) {
            $pointsFromWins = $wins * 3;  // Wins get 3 points each
            $pointsFromDraws = $draws * 1; // Draws get 1 point each
            $pointsFromLosses = $losses * 0; // Losses get 0 points

            // Total points
            return $pointsFromWins + $pointsFromDraws + $pointsFromLosses;
        }

        // Calculate total points
        $totalPoints = calculatePoints($wins, $draws, $losses);

        // Display the result
        echo "<h3>Total Points:</h3>";
        echo "Wins: $wins, Points: " . ($wins * 3) . "<br>";
        echo "Draws: $draws, Points: " . ($draws * 1) . "<br>";
        echo "Losses: $losses, Points: " . ($losses * 0) . "<br>";
        echo "<strong>Total Points: $totalPoints</strong>";
    }
    ?>
</body>
</html>
