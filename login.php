<?php

include 'config.php';
session_start();

if (isset($_POST['submit'])) {

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

  $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

  if (mysqli_num_rows($select_users) > 0) {

    $row = mysqli_fetch_assoc($select_users);

    if ($row['user_type'] == 'admin') {

      $_SESSION['admin_name'] = $row['name'];
      $_SESSION['admin_email'] = $row['email'];
      $_SESSION['admin_id'] = $row['id'];
      header('location:admin_page.php');
    } elseif ($row['user_type'] == 'user') {

      $_SESSION['user_name'] = $row['name'];
      $_SESSION['user_email'] = $row['email'];
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
    }
  } else {
    $message[] = 'Incorrect Email or password!';
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="book home page">
   <meta name="keywords" content="bookstore">
   <meta name="keywords" content="home of free books">
   <meta name="keywords" content="free books available">
   <meta name="keywords" content="fictional bookstore">
   <meta name="authors" content="Ade Oyefeso, Dayo Akerele, simran simran, Suraj Kanwar, Alex Biru">
  <title>Login Form</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link id= "themeStylesheet" rel="stylesheet" href="css/style.css">
</head>

<body>

  <?php
  if (isset($message)) {
    foreach ($message as $message) {
      echo '
      <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
    }
  }
  ?>

  <div class="form-container">

    <form action="" method="post">
      <h3>Login</h3>
      <!-- <h2>to Winbooks</h2> -->
      <input type="email" name="email" placeholder="Enter your email" required class="box">
      <input type="password" name="password" placeholder="Enter your password" required class="box">
      <input type="submit" name="submit" value="Login" class="btn">
      <p>Don't have an account? <a href="register.php"> Sign up!</a></p>
    </form>

  </div>
</body>

</html>