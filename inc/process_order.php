
<?php

function db()
{
    $servername = "localhost";
    $database = "pt2";
    $username = "root";
    $password = "";
    
    // create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    // check connection
    if(mysqli_connect_error()) 
    {
        die("database connection failed: " . mysqli_connect_error());
    }
    return $conn;
}
