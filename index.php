<?php

require('dbconnection.php');

$dbcon = createDbConnection();

$sql = "CREATE TABLE Persons (
    PersonID int,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255)
)";

$dbcon->exec($command);