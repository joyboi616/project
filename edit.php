<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  $conn = mysqli_connect("localhost", "root", null, "project01");
  // Step 2: (8 points) Retrieve the 'supers' row from your database
  // Ensure you use the condition to get only the one specific row
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $sql = "SELECT * FROM supers WHERE id = {$_GET["id"]}";
  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($result);
?>

<!-- Step 3: (2 points) Include your header here -->
<?php include_once('_header.php'); ?>
<!-- Step 4: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->

<nav class="main-nav">
  <a class="btn" href="\comp-1006\project\">Home</a>
</nav>
<br>
<!-- Step 5: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 6: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->

<!-- Step 7: (10 points) Prepopulate the form with the values from the retrieved row -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->
<form action="update.php" method="post" novalidate>
  <input type="hidden" name="id" value="<?= $row["id"] ?>">
  <div class="form-group">
    <label>First Name:</label><br>
    <input class="form-control" type="text" name="first_name" value="<?= $row["first_name"] ?>">
  </div>

  <div class="form-group">
    <label>Last Name:</label><br>
    <input class="form-control" type="text" name="last_name" value="<?= $row["last_name"] ?>">
  </div>
  
  <div class="form-group">
    <label>Date of birth:</label><br>
    <input class="form-control" type="date" name="date_of_birth" value="<?= $row["date_of_birth"] ?>">
  </div>
  
  <div class="form-group">
    <label>Alias:</label><br>
    <input class="form-control" type="text" name="alias" value="<?= $row["alias"] ?>">
  </div>

  <div class="form-group">
    <label for="active">Active:</label><br>
      <select name="active" value="<?= $row["active"] ?>">
        <option value="Yes">Yes</option>
        <option value="No">No</option>
      </select>
  </div>

  <button class="btn btn-primary" type="submit">Save</button>
</form>
<br>
<!-- Step 8: (2 points) Include your footer here -->
<?php include_once('_footer.php'); ?>


<!-- TOTAL POINTS POSSIBLE: 44 -->