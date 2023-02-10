<?php

$host = "localhost";
$user = "stlab";
$pass = "acoer1cstadb";
$db_name = "stlab";
$mysqli = new mysqli($host, $user, $pass, $db_name);

/*

CREATE TABLE users(
    email VARCHAR(50) UNIQUE,
    name VARCHAR(50) UNIQUE,
    password VARCHAR(50)
);

CREATE TABLE posts(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
image VARCHAR(100),
user VARCHAR(50),
title VARCHAR(500),
content LONGTEXT,
date DATETIME DEFAULT NOW(),
category VARCHAR(50),
views INT DEFAULT 0
);

CREATE TABLE categories(
name VARCHAR(50) UNIQUE
);

*/
?>