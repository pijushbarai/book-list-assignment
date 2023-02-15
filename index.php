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

    <!-- internal css for input box -->
    <style>
        .input-box-design {
            border-color: #FE9905;
        }

        .table-icon {
            color: black;
        }
    </style>
</head>
<nav class="navbar bg-body">
    <div class="container-fluid">
        <img class="navbar-brand" src="./images/books.svg" alt="LIBRARY" style="width : 3rem;">
        <form class="d-flex" role="search">
            <input class="form-control me-2 text-warning input-box-design" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-warning" type="submit">Search</button>
        </form>
    </div>
</nav>

<body>
    <div class="container">

        <div class="row">
            <div class="d-grid gap-2 p-0 col-lg-3 col-md-12 my-2">
                <a href="newBook.php" class="btn btn-outline-warning " tabindex="-1" role="button" aria-disabled="true"><i class="bi bi-plus-circle"></i> Add new book</a>
                <!-- <button class="btn btn-outline-warning" type="button"><i class="bi bi-plus-circle"></i> Add new book</button> -->
            </div>
        </div>


        <div class="row">

            <?php
            $booksJson = file_get_contents('books.json');
            $books = json_decode($booksJson, true);
            // print_r($books);
            ?>



            <table class="table  table-responsive table-hover table-bordered ">
                <thead style="background-color: #FE9905;">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Isbn</th>
                        <th scope="col">Pages</th>
                        <th scope="col">Availavaility</th>
                        <th scope="col" colspan="2">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($books as $book) : ?>
                        <tr>
                            <td><?php echo $book['title']; ?></td>
                            <td><?php echo $book['author']; ?></td>
                            <td><?php echo $book['isbn']; ?></td>
                            <td><?php echo $book['pages']; ?></td>


                            <td>
                                <?php

                                if ($book['availability'] == true) {
                                    echo 'yes';
                                } else {
                                    echo 'no';
                                }
                                ?>
                            </td>
                            <td>
                                <a href="#" class="table-icon">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                            <td>
                                <a href="#" class="table-icon">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>