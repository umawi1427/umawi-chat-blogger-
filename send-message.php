<?php
session_start();
if (!isset($_SESSION['valid'])) {
    header("Location: login.php");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["message"]) && !empty($_POST["message"])) {
        $host = 'localhost';
        $db   = 'tutorial';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $pdo = new PDO($dsn, $user, $pass, $opt);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
        $username = $_SESSION['username'];
        $message = $_POST['message'];
        $sql = "INSERT INTO chat (username, message) VALUES (?, ?)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$username, $message]);
        header("Location: chat.php");
        exit();
    }
}
header("Location: chat.php");
exit();
?>