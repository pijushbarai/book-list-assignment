<?php 
    $booksJson = file_get_contents('books.json');
    $books = json_decode($booksJson, true);

    $books[] = [
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'isbn' => $_POST['isbn'],
        'pages' => $_POST['pages'],
        'available' => $_POST['available']
    ];

    $booksJson = json_encode($books, JSON_PRETTY_PRINT);
    file_put_contents('books.json', $booksJson);
    header('Location: index.php');
?>