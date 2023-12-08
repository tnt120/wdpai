<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <p>Hello it's home page of this app</p>
    <h2><?= $book->getTitle() ?></h2>
    <img src="/public/covers/<?= $book->getCover() ?>" alt="cover">
    <p>Author: <?= $book->getAuthor() ?></p>
    <p>Genre: <?= $book->getGenre() ?></p>
    <p>Description: <?= $book->getDescription() ?></p>
    <p>Rating: <?= $book->getRating() ?></p>
</body>

</html>