-- Create database
CREATE DATABASE IF NOT EXISTS testdb;

-- Use the database
USE testdb;

-- Create customers table
CREATE TABLE IF NOT EXISTS customers (
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    datetime DATETIME NOT NULL,
    people INT NOT NULL,
    message TEXT
 );
 insert into customers(name,email,datetime,people,message)
 values("Aditi","aditi@gmail.com",9-8-2025,2,"nothing");