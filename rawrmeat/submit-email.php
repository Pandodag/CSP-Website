<?php

// Connect to the MySQL database
$conn = mysqli_connect('localhost', 'username', 'password', 'database_name');

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the email address from the form data
  $email = mysqli_real_escape_string($conn, $_POST['email']);

  // Insert the email address into the database
  $sql = "INSERT INTO email_list (email) VALUES ('$email')";
  mysqli_query($conn, $sql);
}


// Display the form
echo '
<form action="/submit-email" method="post">
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br>
  <input type="submit" value="Sign up">
</form> 
';

?>