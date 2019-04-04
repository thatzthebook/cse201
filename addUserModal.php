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