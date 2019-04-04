<?php
session_start();
error_log(E_ALL);
ini_set('display_errors', 1);
include 'database.php';
include 'classes/User.php';
include 'classes/Book.php';
include_once 'header.php';
include_once 'loginModal.php';
include_once 'addUserModal.php';
?>



           

            

            <script>
                // Get the modal
                var modal = document.getElementById('addUserID');
                var loginmodal = document.getElementById('loginID');
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function (event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }else if (event.target == loginmodal) {
                        loginmodal.style.display = "none";
                    }
                }
            </script>
                <div class="content">
                    <?php   
                    $book = new Book($pdo);
                    $data = $book->defaultBooks();
                    foreach ($data as $dat) {
                        //image file path
                        $filepath = $dat['filePath'];
                        echo "<div class='row'>";
                        echo "<div class='box'><h3>{$dat['author']}</h3></div>";
                        echo "<div class='box'><h3>{$dat['bookName']}</h3></div>";
                        echo "<div class='box'><h3>{$dat['libraryName']}</h3></div>";
                        echo "<div class='box1'><img src=$filepath ></div>";
                        echo "</div>";
                    }
                    ?>
                </div>
        </div>
    </body>
</html>

