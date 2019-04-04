 <div id="loginID" class="modal">

                <form class="modal-content animate" onSubmit="return checkPassword(this)" action="/cse201/login.php" method="POST">
                    <span onclick="document.getElementById('loginID').style.display = 'none'" class="close" title="Close Modal">&times;</span>

                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>

                    <button type="submit">Login</button>

                    <div class="modalContainer" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('loginID').style.display = 'none'" class="cancelbtn">Cancel</button>
                    </div>
                </form>
            </div>