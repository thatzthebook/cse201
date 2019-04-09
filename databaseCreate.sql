CREATE TABLE users (
    userID INT(1) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    position VARCHAR(100) NOT NULL,
    passhash VARCHAR(255) NOT NULL,
);

CREATE TABLE libraries (
    libraryID INT(1) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    libraryName VARCHAR(100) NOT NULL,
    libraryAddress VARCHAR(100) NOT NULL
);

CREATE TABLE books (
    bookID INT(1) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    bookName VARCHAR(255) NOT NULL,
    bookAddition VARCHAR(50),
    author VARCHAR(100),
    filePath VARCHAR(255),
    libraryID INT NOT NULL,
    FOREIGN KEY FK_libraryID(libraryID) 
    REFERENCES libraries(libraryID)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    userID INT NOT NULL DEFAULT 0,
    FOREIGN KEY FK_userID(userID) 
    REFERENCES users(userID)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);

CREATE TABLE reviews (
    reviewID INT(1) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    review  INT NOT NULL,
    bookID INT NOT NULL,
    FOREIGN KEY FK_bookID(bookID) 
    REFERENCES books(bookID)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE comments (
    commentID INT(1) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    commentContents TEXT,
    fkbookID INT NOT NULL,
    fkuserID INT NOT NULL,
    commentTitle VARCHAR(255),
    FOREIGN KEY FKuserID(fkuserID) 
    REFERENCES users(userID)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY FKbookID(fkbookID) 
    REFERENCES books(bookID)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);
/*DEFAULT USER PASSWORD IS password*/
INSERT INTO users (username, name, passhash)
VALUES ('tester', 'test', '$2y$12$XtDuiZMI/0dv250n8CI8RePz1V/3MFO5UPiDb447YHF0vHnMvFHZy');
INSERT INTO libraries(libraryName, libraryAddress)
VALUES('Smith Library','441 S Locust St, Oxford, OH 45056');
INSERT INTO books (bookName, bookAddition, author, filePath, libraryID, userID)
VALUES('Head First Software Development: A Learners Companion to Software Development','10th','Pilone, Dan','https://images-na.ssl-images-amazon.com/images/I/51zZxBQCVbL._SX430_BO1,204,203,200_.jpg',1, 1);
INSERT INTO books (bookName, bookAddition, author, filePath, libraryID, userID)
VALUES('The Hobbit','5th',' J. R. R. Tolkien','https://images-na.ssl-images-amazon.com/images/I/51uLvJlKpNL._SX321_BO1,204,203,200_.jpg',1, 1);
INSERT INTO books (bookName, bookAddition, author, filePath, libraryID, userID)
VALUES('1984','8th','George Orwell','https://prodimage.images-bn.com/pimages/9780451524935_p0_v3_s550x406.jpg',1, 1);