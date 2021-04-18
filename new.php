<!-- Step 1: (2 points) Include your header here -->
      <?php include_once('_header.php'); ?>
<!-- Step 2: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
      <a class="btn" href="\comp-1006\project\">Home</a>
      <br>
<!-- Step 3: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->
<!-- Step 4: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->
      <br>  
      <form action="insert.php" method="post" novalidate>
        <div class="form-group">
          <label>First Name:</label><br>
          <input class="form-control" type="text" name="first_name">
        </div>

        <div class="form-group">
          <label>Last Name:</label><br>
          <input class="form-control" type="text" name="last_name">
        </div>
        
        <div class="form-group">
          <label>Date of birth:</label><br>
          <input class="form-control" type="date" name="date_of_birth">
        </div>
        
        <div class="form-group">
          <label>Alias:</label><br>
          <input class="form-control" type="text" name="alias">
        </div>

        <div class="form-group">
          <label for="active">Active:</label><br>
            <select name="active" id="active">
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
        </div>

        <button class="btn btn-primary" type="submit">Create</button>
      </form><br>

<!-- Step 5: (2 points) Include your footer here -->
      <?php include_once('_footer.php'); ?>


<!-- TOTAL POINTS POSSIBLE: 24 -->