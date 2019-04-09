<?php
session_start();
ini_set('display_errors', 1);
include '../database.php';
include '../classes/Book.php';

$database = new Database();
$db = $database->connect();

if($_SERVER['REQUEST_METHOD'] === 'GET') {
    if(isset($_GET['bookID'])){
        $id=htmlspecialchars($_GET['bookID']);
        header('Content-Type: application/json');
        $book = new Book($db);
        $data = $book->readOne($id);
        echo $data;
    }else if(isset($_GET['search'])) {
        $search=htmlspecialchars($_GET['search']);
        header('Content-Type: application/json');
        $book = new boOK($db);
        $data = $book->searchBook($search);
        echo $data;
    }else {
        header('Content-Type: application/json');
        $book = new Book($db);
        $data = $book->defaultBooks();
        echo $data;
    }
}

?>
              


