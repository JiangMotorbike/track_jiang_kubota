<?php

session_start();

if ($_SESSION['id']== ""){
    header("location: signin.php");
} else {
    ?>

<!doctype html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Wellcome</title>
  </head>
  <body>
  <div class="comtainer">

    <h1 class="mt-5">welcom, <?php echo $_SESSION['fname']; ?></h1>
    <hr>
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, nostrum laboriosam? Deserunt quae quis et eveniet explicabo iste cupiditate numquam ullam voluptatibus voluptatum. Laborum, culpa ullam aperiam nesciunt labore dolores numquam corrupti quod qui itaque modi, optio magni porro placeat ratione quisquam nam libero magnam, est deserunt quibusdam! Officia molestias aliquam tenetur, accusamus quia tempore excepturi iste est quod doloremque autem rem necessitatibus voluptas. Officiis cumque placeat maxime exercitationem est quod quis, voluptates optio molestias officia, quo vitae omnis sapiente voluptatibus adipisci earum dolor sequi totam soluta quos quasi saepe laborum veritatis? Molestiae ducimus explicabo quia quisquam ea, provident itaque cum eos quo reprehenderit odit, non inventore aliquid ipsam eveniet officiis vel blanditiis nobis veniam. Neque dignissimos eligendi tempora id cupiditate atque molestias tenetur ad asperiores, assumenda sed sequi deleniti minima eum ratione corporis eveniet debitis et quod aut! Nesciunt odit perferendis error consectetur illo deleniti tempore hic provident reprehenderit deserunt eaque dicta saepe expedita fugit, blanditiis molestiae laborum ad quam ut. Expedita pariatur neque repellat vero dolorem! Quo placeat quod laborum error qui delectus rerum illo veritatis doloremque iste vitae cupiditate in accusamus architecto libero asperiores nobis repellendus natus esse nam tempora, provident aliquam voluptas quos? Architecto, eligendi debitis.</p>
    <hr>
    <a href="logout.php" >Logout</a>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>  
  </body>
</html>

    <?php
}

?>