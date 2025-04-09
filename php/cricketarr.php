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
    </style>
</head>
<body>

<?php
// array of players
$players = array("Rohit Sharma", "Virat Kohli", "Jasprit Bumrah", "KL Rahul", "Ravindra Jadeja", "Shubman Gill");
?>

<!--Display in HTML table -->
<h2 style="text-align:center;">Indian Cricket Team Players</h2>

<table>
    <tr>
        <th>Sl. No.</th>
        <th>Player Name</th>
    </tr>
    <?php
    $i = 1;
    foreach ($players as $player) {
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>$player</td>";
        echo "</tr>";
        $i++;
    }
    ?>
</table>

</body>
</html>
