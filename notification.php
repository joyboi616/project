<!DOCTYPE html>
<html lang="en" class="notification">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src='https://www.google.com/recaptcha/api.js' async defer ></script>
    <link rel="stylesheet" href="styles.css">

    <title>Thank You</title>
  </head>

  <body>
    <header>
      <h1 class="display-4">Superhuman Registration Act
</h1>
      <p class="lead"><strong>Become the hero American citizens need and deserve</strong></p>
      <hr class="my-4">
      <?php
// Step 1: (1 point) Start your session
// CREATE YOUR SESSION START BELOW THIS LINE
        session_start();
// Step 2: (4) Redirect the user if they don't have a notification
// CREATE YOUR REDIRECT LOGIC BELOW THIS LINE
        if (isset($_SESSION["message"])) {
          echo $_SESSION["message"];
          session_unset();
        }
// Step 3: (5) Output the notification and clear it from the session (once it's outputted)
// CREATE YOUR NOTIFICATION OUTPUT AND CLEAR BELOW THIS LINE
  
// TOTAL POINTS POSSIBLE: 10

      ?>
      <br>
      <nav class="main-nav">
        <a class="btn" href="\comp-1006\project\">Home</a>
      </nav>