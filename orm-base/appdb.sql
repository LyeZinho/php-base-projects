CREATE DATABASE appdb;

USE appdb;

CREATE TABLE genres (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(150) NOT NULL
);

INSERT INTO genres (name) VALUES ('Fiction'), ('Romance');

CREATE TABLE books (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  isbn VARCHAR(80) NOT NULL,
  genre_id INT,
  FOREIGN KEY (genre_id) REFERENCES genres(id)
);

INSERT INTO books (name, isbn, genre_id) VALUES ('Lords of the Rings', '3453452-3454', 1);

CREATE TABLE chapters (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(200) NOT NULL,
  book_id INT NOT NULL,
  FOREIGN KEY (book_id) REFERENCES books(id)
);

INSERT INTO chapters (name, book_id) VALUES ('Chapter 1', 1), ('Chapter 2', 1);
