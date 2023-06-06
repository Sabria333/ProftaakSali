<?php
session_start();

// gegevens
$username = "";
$email    = "";
$loggedIn = "";
$errors = array(); 

// verbinding met de database
$db = mysqli_connect('localhost', 'root', '', 'pt2');

// REGISTRATIE
if (isset($_POST['reg_user'])) 
{
  // haalt alle gegevens op als variabelen
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);


  // validatie van de form door de gegevens na te kijken, als er een fout in zit wordt dit toegevoegd
  // aan de errors array, dit wordt gebruikt om te kijken of het mogelijk is te registreren
  if (empty($username))
  {
      array_push($errors, "Gebruikersnaam is nog niet ingevuld"); 
  }
  if (empty($email))
  {
      array_push($errors, "Email is nog niet ingevuld"); 
  }
  if (empty($password))
  { 
      array_push($errors, "Wachtwoord is nog niet ingevuld"); 
  }

  if(isset($username[20]))
  {
    array_push($errors, "Gebruikersnaam kan niet langer dan 20 letters zijn");
  }

  // kijkt na of de email of naam nog niet in gebruik is
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) 
  { // als de gebruiker bestaat wordt de errors array gevuld
    if ($user['username'] === $username)
    {
      array_push($errors, "Gebruikersnaam is al in gebruik");
    }

    if ($user['email'] === $email) 
    {
      array_push($errors, "Deze email is al geregistreerd");
    }
  }

  // registreer de gebruiker als er geen errors zijn
  if (count($errors) == 0) 
  {
  	$password = md5($password); // slaat het wachtwoord op in de database met MD5 versleuteling

  	$query = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')"; // slaat de gegevens in de database op
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username; // zet de gebruikersnaam
    echo("Registratie is gelukt, aub inloggen");
  }
} 

// LOGIN
if (isset($_POST['login_user'])) // als de login niet leeg is
{   // naam is de ingevulde gebruikersnaam zonder speciale tekens zodat dit in de database gestopt kan worden
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) 
    {   // kijkt de form na en zorgt dat alles klopt
        array_push($errors, "Gebruikersnaam is nog niet ingevuld");
    }
    if (empty($password)) 
    {
        array_push($errors, "Wachtwoord is nog niet ingevuld");
    }


    if (count($errors) == 0) 
    {   // slaat het wachtwoord in de database op met MD5 versleuteling
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

        //die($query);
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1)
        { // als de resultaten terug komen wordt de gebruiker doorgestuurd naar de homepage
          // fetch all users info and store in $user
          $user = $results->fetch_assoc();
          $_SESSION['username'] = $username;
          // add all user info in SESSION key user
          $_SESSION['user'] = $user;
          //
          $_SESSION['loggedin'] = true;
          //
          $_SESSION['success'] = "Succesful login";
          header('location: index.php');
        } else 
        {
            array_push($errors, "Verkeerde gebruikersnaam/wachtwoord");
        }
    }
}
   

function db()
{ // connects to the mysql database
  $mysqli = new mysqli("localhost", "root", "", "pt2");

  // Checks the connection
  if($mysqli -> connect_errno)
  {
      echo "Connection failed " . $mysqli -> connect_error;
      exit();
  }

  // Return the database
  return $mysqli;
}

function changeUsername()
{ // connects to the mysql database
  $db = new mysqli("localhost", "root", "", "pt2");
  // gets a username from the database and puts it into the variable
  $username = "SELECT username from users";
  // update username where the user and userId is equal to the session user credentials
  $sql = "update users set `username` = '$username' where userId = " . $_SESSION['user']['userId'];
  // execute the sql
  $result = $db->query($sql) or die($db->error . "<br />" . $sql);
}

?>