<?php
// Include the database connection file
include('koneksi.php');

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the form data
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Check if the email and password are not empty
  if (!empty($email) && !empty($password)) {
    // Query the database to check if the email and password match an existing user
    $query = "SELECT * FROM admin_user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($koneksi, $query);

    // Check if a user was found
    if (mysqli_num_rows($result) == 1) {
      // Login successful
      // Start a session and store the user's ID
      session_start();
      $row = mysqli_fetch_assoc($result);
      $_SESSION['user_id'] = $row['id'];

      // Redirect to the home page
      header('Location: index.php');
    } else {
      // Login failed
      echo "Invalid email or password";
    }
  } else {
    // Email or password is empty
    echo "Please enter your email and password";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
  <!-- style -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="login.css" />
  <!-- tittle -->
  <link rel="icon" href="../img/logo.png" />
  <title>Login Website Bimbel API</title>
</head>

<body class="lLog">
  <div class="login">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="log text-center mx-auto">
            <div class="imgLog">
              <img src="../img/logo.png" alt="logo" />
              <h2 class="fw-bold mt-3">Login</h2>
            </div>
            <form method="post" action="login.php">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                <div id="emailHelp" class="form-text">
                  We'll never share your email with anyone else.
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" />
              </div>
              <div class="link m-2 text-center">
                <a href="#">Lupa password</a>
              </div>
              <button type="submit" name="submit" class="btn btn-success">Login</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>