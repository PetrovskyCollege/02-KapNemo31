<?php
session_start();

if (isset($_SESSION['newUsername'])) {
    $username = $_SESSION['newUsername'];
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
    $phone = isset($_SESSION['phone']) ? $_SESSION['phone'] : '';
    $firstName = isset($_SESSION['firstName']) ? $_SESSION['firstName'] : '';
    $lastName = isset($_SESSION['lastName']) ? $_SESSION['lastName'] : '';
    $petName = isset($_SESSION['petName']) ? $_SESSION['petName'] : '';

    echo "Welcome, $username!<br>";
    echo "Email: $email<br>";
    echo "Phone: $phone<br>";
    echo "First Name: $firstName<br>";
    echo "Last Name: $lastName<br>";
    echo "Pet Name: $petName<br>";

    echo '<a href="logout.php">Logout</a>';
} else {
    header('Location: index.php');
}
?>
