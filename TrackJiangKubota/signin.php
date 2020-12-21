<?php 
session_start();
include_once('functions.php');
$userdata = new DB_con();

if (isset($_POST['login'])) {
    $uname = $_POST['username'];
    $password = md5($_POST['password']);
 
    $result = $userdata->signin($uname, $password);
    $num = mysqli_fetch_array($result);

    if ($num > 0) {
        $_SESSION['id'] = $num['id'];
        $_SESSION['fname'] = $num['fullname'];
        echo "<script>alert('Login Successful!');</script>";
        echo "<script>window.location.href='welcome.php'</script>";
    } else {
        echo "<script>alert('Something went wrong! Please try again.');</script>";
        echo "<script>window.location.href='welcome.php'</script>";
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  </head>
  <body>

<div class="container">
<h1>Login Page</h1>
<hr>
  <form method="post">
 <div class="mb-3">
  <label for="username" class="form-label">User Name</label>
    <input type="text" class="form-control" id="username" name="username">
  <span id="usernameavailable"></span>
  </div>
  <div class="mb-3 ">
  <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" name="login" class="btn btn-danger">Login</button>
</form>
<div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>