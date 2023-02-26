<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>book library</title>
  <link rel="shortcut icon" type="image" href="./images/books.svg">
  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <!-- bootstrap icon cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


  <!-- personal css -->
  <link rel="stylesheet" href="styles.css">

</head>

<!-- nav design start here -->
<nav class="navbar bg-body">
  <div class="container-fluid">
    <img class="navbar-brand" src="./images/books.svg" alt="LIBRARY" style="width : 3rem;">

  </div>
</nav>
<!-- nav design end here -->


<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-3"></div>
      <!-- book infomation input form start here -->
      <div class="col-lg-6 mt-3">
        <div class="row text-warning">
          <u>
            <h3>Enter book infomation</h3>
          </u>
        </div>
        <form action="addingBookHandler.php" method="POST">
          <div class="mb-3">
            <input type="text" class="form-control text-warning input-box-design p-2" name="title" placeholder="book title" required>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control text-warning input-box-design p-2" name="author" placeholder="author" required>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control text-warning input-box-design p-2" name="isbn" placeholder="isbn">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control text-warning input-box-design p-2" name="pages" placeholder="pages">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control text-warning input-box-design p-2" name="avaiability" placeholder="avaiability" required>
          </div>

          <div class="d-grid gap-2 p-0 col-lg-3 col-md-12 my-2">
            <button type="submit" class="btn btn-outline-warning">Submit</button>
          </div>
        </form>
      </div>
      <!-- book infomation input form end here -->
      <div class="col-lg-3"></div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>