<!DOCTYPE html>
<html>
<head>
    <title>Animal Leg Calculator</title>
</head>
<body>
    <h2>Calculate Total Number of Animal Legs</h2>

    <!-- Form for user input -->
    <form method="POST" action="">
        <label for="chickens">Number of Chickens:</label>
        <input type="number" id="chickens" name="chickens" required><br><br>

        <label for="cows">Number of Cows:</label>
        <input type="number" id="cows" name="cows" required><br><br>

        <label for="pigs">Number of Pigs:</label>
        <input type="number" id="pigs" name="pigs" required><br><br>

        <button type="submit">Calculate</button>
    </form>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
        // Retrieve input values
        $chickens = intval($_POST['chickens']);
        $cows = intval($_POST['cows']);
        $pigs = intval($_POST['pigs']);

        // Leg counts
        $chickenLegs = $chickens * 2; // Each chicken has 2 legs
        $cowLegs = $cows * 4;         // Each cow has 4 legs
        $pigLegs = $pigs * 4;       

        // Calculate total legs
        $totalLegs = $chickenLegs + $cowLegs + $pigLegs;

        // Display the result
        echo "<h3>Total Legs:</h3>";
        echo "Chickens: $chickens, Legs: $chickenLegs<br>";
        echo "Cows: $cows, Legs: $cowLegs<br>";
        echo "Pigs: $pigs, Legs: $pigLegs<br>";
        echo "<strong>Total Number of Legs: $totalLegs</strong>";
    }
    ?>
</body>
</html>
