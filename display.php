<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Display !</title>
  </head>
  <body>
      <div class="container">
        <div class="card-header bg-light">
                        <h1 class="text-center">Insert Operation</h1>
                    </div>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">username</th>
      <th scope="col">Password</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <?php
  include'conn.php';
  $query = "SELECT * FROM user";
  $result=mysqli_query($conn,$query);
  while ($res=mysqli_fetch_array($result)) {
    
  
  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $res['id'] ?></th>
      <td><?php echo $res['username'] ?></td>
      <td><?php echo $res['password'] ?></td>
      <td><a href="delete.php?id=<?php echo $res['id'] ?>"><input type="button" class="btn btn-danger" value="Delete"></a></td>
      <td><a href="update.php?id=<?php echo $res['id'] ?>"><input type="button" class="btn btn-primary" value="Update"></a></td>
    </tr>
  </tbody>
  <?php } ?>
</table>
      </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>