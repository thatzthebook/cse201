<!DOCTYPE html>
<html lang="en">
        <head>
        <title> ThatzTheBook</title>
        <meta charset="utf-8">
        <link href="styling/style.css" rel="stylesheet">
        <script src="scripts/index.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <div class="barContainer" onclick="toggleMenu(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <div class="headerContainer">
                    <h1>ThatzTheBook</h1>
                </div>
            </div>
            <ul id="menu-box" class="sidenav">
                <span class="login"><li><a onclick="showElement('loginID')">Login</a></li></span>
                <span class="logout" ><li><a href="/cse201/destroy.php">Log Out</a></li></span>
                <li><a onclick="showElement('addUserID')">Register</a></li>
            </ul>

            <div id="addUserID" class="modal">

<form class="modal-content animate" onSubmit="return checkPassword(this)" action="/cse201/addUser.php" method="POST">
    <span onclick="document.getElementById('addUserID').style.display = 'none'" class="close" title="Close Modal">&times;</span>

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Name" name="name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="psw"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="repassword" required>

    <button type="submit">AddUser</button>

    <div class="modalContainer" style="background-color:#f1f1f1">
    <button type="button" onclick="document.getElementById('addUserID').style.display = 'none'" class="cancelbtn">Cancel</button>
    </div>
</form>
</div>