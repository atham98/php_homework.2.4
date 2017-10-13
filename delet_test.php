<?php
error_reporting(E_ALL);
require_once 'core/core.php';

$allFiles = scandir(__DIR__ . '/json');
$id = $_GET['id'];
unlink(__DIR__ . '/json/' . $allFiles[$id]);
redirect('list');
