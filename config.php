<?php
$host = 'game-api.c4oue7g4ijee.us-east-1.rds.amazonaws.com'; 
$port = 3306; // porta padrão MySQL
$db   = 'jogos'; // nome 
$user = 'admin'; // usuário 
$pass = 'Anima#SD2025'; // senha 
$charset = 'utf8';

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
    exit;
}
?>

