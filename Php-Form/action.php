<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FORM</title>
      <link rel="stylesheet" type="text/css"href="style.css">
  </head>
  <body>

<div class="container">
  <div class="php-content">
<form>
<?php
   print("Welcome to our website"). '<br/>' ;
  print $_GET['gender']. ' ';
   echo $_GET['prenom'] . ' ' . $_GET['nom']. '<br/>' . '<br/>';
   print("Your logins are:"). '<br/>'. '<br/>';

   print("Login:"). ' ';
   echo $_GET['nickname']. '<br/>';
   print("Password:"). ' ';
   echo $_GET['password']. '<br/>'. '<br/>';
   echo date('l j F Y, H:i');
   ?>
</form>
</div>
  </div>

  </body>
</html>
