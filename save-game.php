<?php

$title = $_POST['title'];
$year = $_POST['year'];
$genre = $_POST['genre'];
$url = $_POST['url'];

require 'test-db.php';

$sql = "INSERT INTO games (title, year, genre, url) VALUES (:title, :year, :genre, :url)";

$cmd = $conn -> prepare($sql);
$cmd -> bindParam(':title', $title, PDO::PARAM_STR, 50);
$cmd -> bindParam(':year', $year, PDO::PARAM_INT);
$cmd -> bindParam(':genre', $genre, PDO::PARAM_STR, 32);
$cmd -> bindParam(':url', $url, PDO::PARAM_STR, 100);

$cmd -> execute();

$conn = null;

echo "Game Saved?";
?>