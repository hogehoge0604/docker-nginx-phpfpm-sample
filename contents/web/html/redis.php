<?php 

$redis = new Redis();
$redis->connect('samplecache', 6379);
echo $redis->ping() . '<br>';

ini_set('session.save_handler', 'redis');
ini_set('session.save_path', 'tcp://samplecache:6379,tcp://samplecache:6379');
session_start();

isset($_SESSION['seq']) ? $_SESSION['seq']++ : $_SESSION['seq'] = 1;
echo 'count: ' . $_SESSION['seq'];
