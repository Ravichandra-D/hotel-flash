<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $checkin = mysqli_real_escape_string($conn, $_POST["checkin"]);
    $checkout = mysqli_real_escape_string($conn, $_POST["checkout"]);
    $sql = "INSERT INTO bookings (name, email, checkin, checkout) VALUES ('$name', '$email', '$checkin', '$checkout')";
    if (mysqli_query($conn, $sql)) {
        header("Location: book.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
