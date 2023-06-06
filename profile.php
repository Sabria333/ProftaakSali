<?php
include('inc/server.php');
// include('inc/errors.php');
include('inc/nav.php');
if($_SESSION['loggedin'] == false)
{
  header('location:login.php');
}
$diffUsername = "SELECT username FROM users WHERE userId=" . $_GET['userId'];
$diffPicture = "SELECT userPicture FROM users WHERE userId=" . $_GET['userId'];
// $query = mysqli_query($db, $diffUsername);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesheet.css" />
    <title>Profiel</title>
</head>
<body>
<!-- EIGEN PROFIEL -->

<?php if($_SESSION['user']['userId'] == $_GET['userId'])
{ ?>
  <div id="containerProfile">
  <div class="profile-pic-div"><!-- displays the user profile picture -->
  <input type="image" src="<?php echo $_SESSION['user']['userPicture'] ?>" name="submit" style="height: 100%; width: 100%;">
  </div>
  
  <div id="profileText"><!-- if the user is logged into the session, their activity will be displayed 
  either online or offline, green = online, red = offline -->
  <?php if($_SESSION['loggedin'] == true)
  {
    echo "<h3 style='color: green;'>Online</h3>";
  }
  else
  {
    echo "<h3 style='color: red;'>Offline</h3>";
  }
  ?><!-- displays the user's username in bold -->
  <?= '<strong>' . $_SESSION['username'] . '</strong>'; ?><br>
  </div>
  <div id="formProfile"><!-- form inputs to upload a profile picture -->
  <form action="inc/upload.php" method="post" enctype="multipart/form-data">
    Selecteer een afbeelding:
    <br><!-- file upload and submit button -->
    <input type="file" name="fileToUpload" id="fileToUpload"><br>
    <input type="submit" name="submit" id="submit">
  </form>
  </div>
  </div>
<?php } 
else
{ ?>
  <!-- ANDERE GEBRUIKERS -->

  <div id="containerProfile">
  <div class="profile-pic-div"><!-- displays the user profile picture -->


  <!-- Voor de profielfoto een variabel checken waar de userId == userPicture is? -->


  <?php if ($diffPicture == '')
  {
    $diffPicture = "<img src='images/user_oranje.png'";
  } ?>

  <input type="image" src="<?= $diffPicture ?>" name="submit" style="height: 100%; width: 100%;">
  </div>
  
  <div id="profileText"><!-- if the user is logged into the session, their activity will be displayed 
  either online or offline, green = online, red = offline -->


  <!-- Voor de online/offline status een database ping function maken en gebruiken -->


  <?php if($_SESSION['loggedin'] == true)
  {
    echo "<h3 style='color: green;'>Online</h3>";
  }
  else
  {
    echo "<h3 style='color: red;'>Offline</h3>";
  }
  ?>
  <!-- displays the user's username in bold -->

  <!-- Voor de gebruikersnaam een gebruikersnaam met userId uit de database halen -->

  <?= '<strong>' . $diffUsername . '</strong>'; ?><br>
<?php } ?>
</body>
</html>
