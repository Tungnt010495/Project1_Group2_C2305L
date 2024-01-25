<?php
   session_start();
   unset($_SESSION["user"]);
   header('Location:../index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Logout</title>
</head>
<body>

   <h2>You're logged out - See you soon</h2>
   
</body>
</html>