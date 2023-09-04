<?php

declare(strict_types=1);

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$table = 'WU22';
$dbName = 'wu22';
$db = new PDO('sqlite:' . $dbName . '.sqlite3');

$stmt = $db->query("SELECT * FROM '$table'");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);
