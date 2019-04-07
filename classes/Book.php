<?php
    class Book {

        private $id;
        private $bookName;
        private $author;
        private $userID;

        private $libraryID;
        private $con;

        public function __construct($pdo)
        {
            $this->con = $pdo;
        }

        public function defaultBooks(){
            $query = "
                    SELECT * 
                    FROM 
                        books
                            JOIN 
                        libraries ON books.libraryID = libraries.libraryID
                        ORDER BY books.bookName ;
                    ";
            $results = $this->con->query($query)->fetchAll();
            return json_encode($results);
        }

        public function readOne($id) {
            $stmt = $this->con->prepare("SELECT * FROM books WHERE bookID=:bookID");
            $stmt->bindParam(":bookID", $id, PDO::PARAM_STR);
            return json_encode($stmt->fetchAll());

        }

    }

?>