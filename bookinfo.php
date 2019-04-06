
<div id="bookinfo" class="modal">

        <form class="modal-content animate">
            <span onclick="document.getElementById('bookinfo').style.display = 'none'" class="close" title="Close Modal">&times;</span>

            <?php

               if($_SERVER['REQUEST_METHOD'] === 'POST') {
                $da = $bookinfo->getBoookInfo($dat['bookID']);
                foreach ($da as $book) {
                    //image file path
                    $filepath = $book['filePath'];
                    echo "<div class='stuff'>";
                    echo "<div class='jack'>$book</div>";
                    echo "<div class='jack'>'><img src=$filepath></div>";
                    echo "</div>";
                }
            }
            ?>

            <div class="modalContainer" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('bookinfo').style.display = 'none'" class="cancelbtn">Cancel</button>
            </div>
        </form>
    </div>
