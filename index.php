<?php
session_start();
error_log(E_ALL);
ini_set('display_errors', 1);
include 'database.php';
include 'classes/Book.php';
/*include_once 'header.php';
include_once 'loginModal.php';
include_once 'addUserModal.php';
include_once 'bookinfo.php';
*/

if($_SERVER['REQUEST_METHOD'] === 'GET') {

    $book = new Book($pdo);
    $data = $book->defaultBooks();
    echo json_encode($data);
    /*
    foreach ($data as $dat) {
        //image file path
        $filepath = $dat['filePath'];
        echo "<div class=\"content\"> <div class='row'>
         <div class='box'><h3>{$dat['author']}</h3></div>
         <div class='box'><h3>{$dat['bookName']}</h3></div>
         <div class='box'><h3>{$dat['libraryName']}</h3></div>
         <div class='box'><img onclick=\"showElement('bookinfo')\" src=$filepath ></div>
         </div>  </div>";
    }*/
}

?>
              


