<?php
// process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $dob = htmlspecialchars($_POST["dob"]);

    echo "<p><strong>Name:</strong> <span>" . $name . "</span></p>";
    echo "<p><strong>Email:</strong> <span>" . $email . "</span></p>";
    echo "<p><strong>Phone:</strong> <span>" . $phone . "</span></p>";
    echo "<p><strong>Date of Birth:</strong> <span>" . $dob . "</span></p>";

    // You could also store this data in a database here.
}
?>