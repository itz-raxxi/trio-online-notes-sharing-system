<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<?php
session_start();
$error_message = '';
if (isset($_POST['login'])) {
  $username  = $_POST['user'];
  $password = $_POST['pass'];
  mysqli_real_escape_string($conn, $username);
  mysqli_real_escape_string($conn, $password);
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn , $query) or die (mysqli_error($conn));
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $user = $row['username'];
    $pass = $row['password'];
    $name = $row['name'];
    $email = $row['email'];
    $role= $row['role'];
    $course = $row['course'];
    if (password_verify($password, $pass )) {
      $_SESSION['id'] = $id;
      $_SESSION['username'] = $username;
      $_SESSION['name'] = $name;
      $_SESSION['email']  = $email;
      $_SESSION['role'] = $role;
      $_SESSION['course'] = $course;
      header('location: dashboard/');
      exit();
    }
    else {
      $error_message = 'Invalid password.';
    }
  }
}
else {
      $error_message = "Username doesn't exist.";
    }
}
?>


  <div class="login-card">
    <h1>Log-in</h1><br>
    <?php if (!empty($error_message)): ?>
      <div style="color: red; margin-bottom: 10px; text-align: center;">
        <?php echo $error_message; ?>
      </div>
    <?php endif; ?>
  <form method="POST" autocomplete="off">
    <input type="text" name="user" placeholder="Username" required="" autocomplete="off">
    <input type="password" name="pass" placeholder="Password" required="" autocomplete="off">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>
    
  <div class="login-help">
    <a href="signup.php">Register</a>
  </div>
</div>

  <script src='css/jquery.min.js'></script>
<script src='css/jquery-ui.min.js'></script>

  
</body>
</html>
