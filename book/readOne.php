<?php
session_start();
ini_set('display_errors', 1);
include '../database.php';
include '../classes/Book.php';

$database = new Database();
$db = $database->connect();

if($_SERVER['REQUEST_METHOD'] === 'GET') {


}

?>
              


