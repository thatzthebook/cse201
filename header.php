<!DOCTYPE html>
<html lang="en">
        <head>
        <title> ThatzTheBook</title>
        <meta charset="utf-8">
        <link href="/cse201/styling/style.css" rel="stylesheet">
        <script src="/cse201/scripts/index.js"></script>
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
                <span class="login"><li><a onclick="document.getElementById('loginID').style.display='block'">Login</a></li></span>
                <span class="logout" ><li><a href="/cse201/destroy.php">Log Out</a></li></span>
                <li><a onclick="document.getElementById('addUserID').style.display='block'">Register</a></li>
            </ul>

