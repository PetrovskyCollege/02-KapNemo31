<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Обработка данных регистрации
    $newUsername = $_POST['newUsername'];
    $newPassword = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $petName = $_POST['petName'];

    // Сохранение данных в сессии
    $_SESSION['newUsername'] = $newUsername;
    $_SESSION['newPassword'] = $newPassword;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
    $_SESSION['firstName'] = $firstName;
    $_SESSION['lastName'] = $lastName;
    $_SESSION['petName'] = $petName;

    header('Location: index.php');
} else {
    header('Location: registration.php');
}
?>
