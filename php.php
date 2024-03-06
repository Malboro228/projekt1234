<?php
// Подключение к базе данных MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_db";

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Подготовка и выполнение запроса к базе данных для вставки данных
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "rejestracja zakończyła się pomyślnie!";
    echo "<br><a href='host.html'>Wróć do strony głównej</a>";
} else {
    echo "Błąd podczas rejestracji: " . $conn->error;
}

// Закрытие подключения к базе данных
$conn->close();
?>
