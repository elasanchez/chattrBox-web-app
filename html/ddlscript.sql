DROP DATABASE IF EXISTS university;
CREATE DATABASE university;

USE university;

CREATE TABLE student(cwid INT NOT NULL PRIMARY KEY, fname VARCHAR(15) NOT NULL, 
	lname VARCHAR(15) NOT NULL, address VARCHAR(20), city VARCHAR(15), zip INT );

