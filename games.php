<?php
// header('Content-Type: application/json; charset=UTF-8');

require_once 'test-db.php';

$sql = "SELECT * FROM games";

$cmd = $conn -> prepare($sql);
$cmd -> execute();
$games = $cmd -> fetchAll();

// echo json_encode($games);

echo "<table>";
foreach ($games as $game) {
    echo "<tr><td style='border: 1px solid #ccc; padding: 4px'>" . $game['title'] . "</td></tr>";
}

echo "</table>";

$conn = null;

?>