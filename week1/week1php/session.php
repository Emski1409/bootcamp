<?php
  session_start();

  $username = $_POST['username'];

  if (!isset($_SESSION['users'])) {
    $users = [$username];
    $_SESSION['users'] = $users;

  }
  else {
      $users =$_SESSION['users'];
      $users[] = $username;
      $_SESSION['users'] = $users;
  }

?>

<html>
    <body>
      <h1>hello <?= $username ?></h1>

    
      <h2> other existing user in array </h2>

      <?php
          for ($counter = 0; $counter < count($users); $counter ++) {
              echo "<p>" . $users[$counter] . "</p>";

          }
      ?>


