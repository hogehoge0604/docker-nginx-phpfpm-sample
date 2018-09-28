<?php 

$dsn = 'mysql:host=sampledb;dbname=sample_db';
$username = 'sample';
$password = 'sample_password';

$pdo  = new PDO($dsn, $username, $password);
$stmt = $pdo->query('SHOW VARIABLES LIKE "version"');
$stmt->execute();
echo 'version: ' . $stmt->fetch(PDO::FETCH_ASSOC)['Value'];
