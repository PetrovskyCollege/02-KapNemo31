<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Проверка логина и пароля (здесь у вас должна быть проверка ваших данных)
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Пример проверки (замените этот блок вашей логикой)
    if (isset($_SESSION['newUsername']) && $username === $_SESSION['newUsername']) {
        // В реальном приложении нужно проверять пароль из базы данных
        // Например, можно использовать функцию password_verify()
        // if (password_verify($password, $hashFromDatabase)) {
        //     $_SESSION['username'] = $username;
        //     header('Location: welcome.php');
        // } else {
        //     echo 'Invalid username or password. <a href="index.php">Try again</a>';
        // }
        
        // Временное решение (для целей примера)
        $_SESSION['username'] = $username;
        header('Location: welcome.php');
    } else {
        echo 'Invalid username or password. <a href="index.php">Try again</a>';
    }
} else {
    header('Location: index.php');
}
?>
