<?php

include 'conn.php';

if(count($_POST)!=0){
    extract($_POST);
    $query = "INSERT INTO USER(username,password) VALUES ('$username','$password')";
    $result=mysqli_query($conn,$query);
    if ($result==false) {
    
        echo"Failed";
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Create</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <form action="" method="post">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h1 class="text-center text-light">Insert Operation</h1>
                    </div>
                    <div class="form-group">
                        <label for="username">username</label>
                        <input type="text"class="form-control" name="username">
                    </div>
                    
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="text"class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-submit"> Submit</button>
                </div>
                </form>
                <h5><a href="display.php"><input type="button" class="btn btn-primary" value="Display Data"> </a></h5>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    
  </body>
</html>