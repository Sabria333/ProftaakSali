<?php


// function dd($s)
// {
//     echo '<pre>' . var_dump($s) . '</pre>';
// }

// dd($_POST);

function usernameExists($conn, $username, $email) {
    $sql = "SELECT * FROM users Where usersUsername = ? OR usersEmail = ?;";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $email);

    $stmt->execute();

    $result = $stmt->get_result(); // get the mysqli result
    $result = $result->fetch_assoc();
    
    //die(var_dump($result));
    return !!$result;
}

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

    if (!empty($email) && !empty($password)) {
        if ($conn->query($sql)) {
            echo "new record created successfully";
        } else {
            echo "error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
}


function loginUser()
{
    $conn = db();
    extract($_POST);

    $sql = "SELECT * FROM `user` WHERE `userEmail` = ? AND `userPassword` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $_SESSION['user'] = $user; // Store user ID in session
        $_SESSION['logged_in'] = true;
        echo "Login successful";
        // Redirect the user to the appropriate page based on userAuthID
        if ($user['userAuthID'] == 1) {
            header("Location: admin.php");
        } else {
            header("Location: customer.php");
        }
        exit();
    } else {
        echo "Invalid email or password";
    }
    $conn->close();
}



if ($_SERVER["REQUEST_METHOD"] === "POST") {
    loginUser();
}
?>
