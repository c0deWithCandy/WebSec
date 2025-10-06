<?php
// prepared_statement.php - Example of secure DB query using PDO prepared statements
$dsn = 'mysql:host=localhost;dbname=dvwa;charset=utf8mb4';
$user = 'dvwauser';
$pass = 'dvwapass';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];
$pdo = new PDO($dsn, $user, $pass, $options);

// Insecure (do NOT use):
// $id = $_GET['id'];
// $row = $pdo->query("SELECT first_name FROM users WHERE user_id = $id")->fetch();

// Secure - parameterized:
$id = $_GET['id'] ?? 0;
$stmt = $pdo->prepare('SELECT first_name, last_name FROM users WHERE user_id = :id');
$stmt->execute(['id' => $id]);
$row = $stmt->fetch();
echo htmlspecialchars($row['first_name'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
?>
