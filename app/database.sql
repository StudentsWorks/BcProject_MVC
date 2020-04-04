CREATE DATABASE IF NOT EXISTS BCproject;

USE BCproject;

CREATE TABLE tests (
    test_id INT(6) PRIMARY KEY AUTO_INCREMENT,
    test_type VARCHAR(15),
    test_name varchar(50)
); 

CREATE TABLE solutions (
    question_id INt(8) PRIMARY KEY AUTO_INCREMENT,
    test_id INT(6) REFERENCES tests.test_id,
    question varchar(600),
    solution varchar(400)
);

CREATE TABLE options_bank (
    option_id INT(6) PRIMARY KEY AUTO_INCREMENT,
    test_id INT(6) REFERENCES tests.test_id,
    options VARCHAR(1000)
);

INSERT INTO tests(test_name, test_type) VALUES
    ("test1", "open"),
    ("test2", "multiple");

INSERT INTO solutions(question, solution, test_id) VALUES
    ("This is question", "answer1", 1),
    ("This is question", "answer2", 2);

INSERT INTO options_bank (options, test_id) VALUES
    ('["Dummy 1","Dummy 2","Dummy 3"]', 2);
