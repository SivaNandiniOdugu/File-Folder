<?php
require __DIR__ . '/vendor/autoload.php';
session_start();
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$client = new Google_Client();
$client->setClientId($_ENV['GOOGLE_CLIENT_ID']);
$client->setClientSecret($_ENV['GOOGLE_CLIENT_SECRET']);
$client->setRedirectUri($_ENV['GOOGLE_REDIRECT_URI']);


$client->addScope("email");
$client->addScope("profile");
$login_url = $client->createAuthUrl();
?>




<!DOCTYPE html>
<html>
<head>
    <title>Google Login</title>
</head>

<style>
body{
    margin: 0;
    background-color: hsl(0, 0%, 12%);
    height:150vh;
  font-family: 'BebasNeue';
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
@font-face {
    font-family: 'BebasNeue';
    src: url('./Fonts/Montserrat-VariableFont_wght.ttf') format('truetype');
    font-weight:100-900;
    font-style: normal;
}git 
.title{
    text-align: center;
    font-size: 35px;
    padding: 10px;
    font-weight: 600;
    color:white;
 font-family: Georgia, 'Times New Roman', Times, serif;
}
.login-button{
border:none;
background-color: black;
color: white;
font-weight: 500;
font-size: 19px;
border-radius:25px;
cursor: pointer;
width:350px;
border: 1px solid white;
height:35px;
display: flex;
align-items: center;
justify-content: center;
gap:20px;

}
.login-container{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 400px;
    height: 500px;
    padding: 50px;
    border: 1px solid white;
    border-radius: 10px;
    background-color: hsl(19, 100%, 50%);
}
a{
    text-decoration: none;
}
</style>

  



<body>
<div class="login-container">
<h2 class="title">Login</h2>

<?php if (!isset($_SESSION['user'])): ?>
    <a href="<?= $login_url ?>">
        <div class="login-button">Continue with Google
             <img src=".\Icons\google-color-svgrepo-com.svg" alt=goole-icon width="20px">
           
        </div>
    </a>


<?php else: ?>
    <h3>Welcome <?= $_SESSION['user']['name'] ?></h3>
    <img src="<?= $_SESSION['user']['picture'] ?>" width="100"><br><br>
    <a href="logout.php"><button>Logout</button></a>

<?php endif; ?>


</div>

</body>
</html>