<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $gender = htmlspecialchars($_POST['gender']);
    $age = htmlspecialchars($_POST['age']);
    $source = htmlspecialchars($_POST['source']);
    $destination = htmlspecialchars($_POST['destination']);
    $date = htmlspecialchars($_POST['date']);
    $class = htmlspecialchars($_POST['class']);
    $preferences = htmlspecialchars($_POST['preferences']);

    echo "<h1>Reservation Details</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Source:</strong> $source</p>";
    echo "<p><strong>Destination:</strong> $destination</p>";
    echo "<p><strong>Travel Date:</strong> $date</p>";
    echo "<p><strong>Class:</strong> $class</p>";
    echo "<p><strong>Preferences:</strong> $preferences</p>";
}
?>
