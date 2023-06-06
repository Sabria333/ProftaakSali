<?php
function dd($s)
{
    echo '<pre>' . var_dump($s) . '</pre>';
}

dd($_POST);


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

function registerUser()
{
    $conn = db();
    extract($_POST);

    $sql = "INSERT INTO `user` (`userEmail`, `userPassword`, `userRegisterDate`) VALUES ('" . $email . "','" . $password . "', NOW())";


    if(!empty($email) && !empty($password))
    {
        if($conn->query($sql)) 
        {
            echo "new record created successfully";
        } 
        else 
        {
            echo "error: " . $sql . "<br>" . $conn->error;
        }    
    }
    $conn->close();
}
?>