CREATE DATABASE IF NOT EXISTS BCproject;

USE BCproject;

CREATE TABLE tests (
    test_id INT(6) PRIMARY KEY AUTO_INCREMENT,
    test_name varchar(50)
); 

CREATE TABLE solutions (
    question_id INt(8) PRIMARY KEY AUTO_INCREMENT,
    test_id INT(6) REFERENCES tests.test_id,
    question varchar(600),
    solution varchar(400)
);

INSERT INTO tests(test_name) VALUES
    ("test1");

INSERT INTO solutions(question, solution, test_id) VALUES
    ("q1t1", "q1", 1),
    ("q1t2", "a1", 2);
