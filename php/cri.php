<!DOCTYPE html>
<html>
<head>
    <title>Indian Cricket Players</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            font-family: Arial;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        .form-container {
            text-align: center;
            margin-top: 30px;
            border: black;
        }
        textarea {
            width: 300px;
            height: 100px;
        }
    </style>
</head>
<body>

<!-- 🧾 Form to collect player names -->
<div class="form-container">
    <h2>Enter Indian Cricket Players:</h2>
    <form method="post">
        <textarea name="players_input" placeholder="Enter names here"></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</div>

<?php
//  Process the form after submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["players_input"]; // Read the input text

    // Convert multiline string into array
    $players = explode("\n", trim($input));

    // Clean up whitespace and empty lines
    $players = array_map('trim', array_filter($players));

    // Display if there is at least one name
    if (!empty($players)) {
        echo "<h2 style='text-align:center;'>Indian Cricket Team Players</h2>";
        echo "<table>
                <tr>
                    <th>Sl. No.</th>
                    <th>Player Name</th>
                </tr>";
        
        $i = 1;
        foreach ($players as $player) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$player</td>";
            echo "</tr>";
            $i++;
        }

        echo "</table>";
    }
}
?>

</body>
</html>
