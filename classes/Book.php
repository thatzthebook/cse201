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

            $query = "SELECT b.bookName, b.author,b.filePath, b.bookAddition, lib.libraryName, lib.libraryAddress, usr.username  FROM books b 
            JOIN libraries lib ON b.libraryID = lib.libraryID
            JOIN users usr ON b.userID = usr.userID
            WHERE bookID=:bookID";
            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":bookID", $id, PDO::PARAM_INT);
            $stmt->execute();
            return json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
        }

        public function addBook($bookName){

        }

        public function searchBook($search){
            $query = "SELECT * FROM books WHERE bookName LIKE :search LIMIT 10";
            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":search", $search, PDO::PARAM_STR);
            $stmt->execute();
            return json_encode($stmt->fetchAll(pdo::FETCH_ASSOC));
        }

    }

?>