<?php

//// because proccess.php place in root of project
//// index.php place in root of project
include "proccess.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
    body {
      background-color: whitesmoke;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="row mt-5">
      <form action="" method="post">

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" class="form-control" id="title" aria-describedby="title">
        </div>

        <div class="mb-3">
          <label for="content" class="form-label">Content</label>
          <textarea rows="5" name="content" cols="10" class="form-control" id="content"></textarea>
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Select Type</label>
          <select class="form-select" name="type" aria-label="Default select example" id="type">
            <option selected></option>
            <option value="text">Text</option>
            <option value="pdf">Pdf</option>
            <option value="json">Json</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Export</button>
      </form>
    </div>

  </div>



  <script type="text/javascript" src="js/jquery-3.7.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>

</html>