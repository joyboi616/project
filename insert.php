<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include('_connect.php');
  $conn = connect();

  // Step 2: (17 points) Insert the new 'supers' row into the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $sql = "INSERT INTO supers (
    first_name,
    last_name,
    date_of_birth,
    alias,
    active
  ) VALUES (
    :first_name,
    :last_name,
    :date_of_birth,
    :alias,
    :active
  )";

  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':first_name', $_POST['first_name'], PDO::PARAM_STR);
  $stmt->bindParam(':last_name', $_POST['last_name'], PDO::PARAM_STR);
  $stmt->bindParam(':date_of_birth', $_POST['date_of_birth'], PDO::PARAM_STR);
  $stmt->bindParam(':alias', $_POST['alias'], PDO::PARAM_STR);
  $stmt->bindParam(':active', $_POST['active'], PDO::PARAM_STR);

  $stmt->execute();
  
  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE
  session_start();
    if ($stmt) {
      $_SESSION["message"] = "You have chosen correctly, thank you for your service";

      header("Location: notification.php");
      exit();

    } else {
      $error = mysqli_error($mysqli);
      $_SESSION["message"] = "There was an error registering: " . $error;

      header("Location: notification.php");
      exit();
    }

    
  // TOTAL POINTS POSSIBLE: 35
?>