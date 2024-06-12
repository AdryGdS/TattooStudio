<?php
$host = 'dpg-cpkt9ovsc6pc73f4blbg-a';
$dbname = 'TattooStudioBD';
$user = 'tattoostudiobd_user';
$password = '8qfTsXmQh2wKvx5DEJMREg68ZpLMM2Av';
$port = '5432';

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    echo "Connected to the database successfully!";
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

