<?php
    class Book {

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
            return $this->con->query($query)->fetchAll();
        }

        public function getBookInfo($id) {
            $query = "SELECT * FROM books WHERE bookID = {$id}";
            return $this->con->query($query)->fetchAll();

        }

    }

?>