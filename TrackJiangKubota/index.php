<?php 

include_once('functions.php');
$userdata = new DB_con();

if (isset($_POST['submit'])) {
    $fname = $_POST['fullname'];
    $uname = $_POST['username'];
    $uemail = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = $userdata->registration($fname, $uname, $uemail, $password);

    if ($sql) {
        echo "<script>alert('Registor Successful!');</script>";
        echo "<script>window.location.href='signin.php'</script>";
    } else {
        echo "<script>alert('Something went wrong! Please try again.');</script>";
        echo "<script>window.location.href='signin.php'</script>";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminTrackJiangKubota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  </head>
  <body>

<div class="container">
<h1>Register</h1>
<hr>
  <form method="post">
  <div class="mb-3">
    <label for="fullname" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="fullname" name="fullname">
  </div>
  <div class="mb-3">
  <label for="username" class="form-label">User Name</label>
    <input type="text" class="form-control" id="username" name="username" onblur="checkusername
    (this.value)">
  <span id="usernameavailable"></span>
  </div>
  <div class="mb-3 ">
  <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3 ">
  <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" name="submit" id="sunmit" class="btn btn-primary">Resiter</button>
</form>
<div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
function checkusername(val) {
    $.ajax({
        type: 'POST',
        url: 'checkuser_available.php',
        data: 'username='+val,
        success: function(data) {
            $('#usernameavailable').html(data);        
            }
    });
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>