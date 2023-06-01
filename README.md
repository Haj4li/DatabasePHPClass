# DatabasePHPClass
A simple but useful class to manage mysql database in php


How to use ? 

Just include the dbapi.php file in your project, then create an object from DataBase class and connect to database 

Just like this :

\<?php

$db = new Database();

$db->Connect(DB_NAME, "localhost", DB_USERNAME, DB_PASSWORD);

// easy

?\>

