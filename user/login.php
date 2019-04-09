<?php
include '../database.php';
include '../classes/User.php';
session_start();
error_log(E_ALL);
ini_set('display_errors', 1);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    try {
        if(!isset($_POST['username'], $_POST['password'])){
            die('Username and/or password does not exist!');
            header('location: /cse201/index.php');
        }else {
            $database = new Database();
            $db = $database->connect();
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);
            $user = new User($db);
            if($user->validateUser($username, $password)){
                echo "<script>document.getElementById('login').style.display='none'</script>";
                echo "<script>document.getElementById('logout').style.display='block'</script>";
                header('location: /cse201/index.php');
                $_SESSION['user'] = $_POST['username'];
            }else{
                echo "fail";
            }
        }
    }catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
$connection = null;
}else {
    header('location: /cse201/index.php');
}
?>