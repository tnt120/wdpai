<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/myBooks.css">
    <script type="text/javascript" src="./public/js/booksHandler.js"></script>
    <title>My books - finished</title>
</head>

<body>
    <nav>
        <div class="nav-logo">
            <img src="/public/img/logo-white.svg" alt="logo">
            <p>Bookify</p>
        </div>
        <input type="checkbox" class="nav-button" />
        <ul class="menu">
            <li>
                <a href="home" class="nav-option">Search</a>
            </li>
            <li>
                <a href="" class="nav-option selected">My books</a>
            </li>
            <li>
                <a href="/logout" class="nav-option">Logout</a>
            </li>
        </ul>
        <div class="collapse-menu">
            <img src="/public/img/expand.svg" alt="expand">
        </div>
    </nav>
    <main>
        <div class="main-my-books-title-wrapper">
            <h1>My books</h1>
            <ul class="main-my-books-title-wrapper-nav">
                <li>
                    <a href="" class="main-my-books-title-warpper-main-option selected">Finished</a>
                </li>
                <li>
                    <a href="myBookCurrentlyReading" class="main-my-books-title-warpper-main-option">Currently
                        reading</a>
                </li>
                <li>
                    <a href="myBookToRead" class="main-my-books-title-warpper-main-option">To read</a>
                </li>
            </ul>
        </div>
        <section class="content">
            <?php foreach ($books as $book): ?>
                <div class="content-item">
                    <div class="content-item-image">
                        <img src="/public/covers/<?php echo $book->getCoverImg(); ?>" alt="cover" />
                    </div>
                    <h3 class="content-item-title">
                        <?php echo $book->getTitle(); ?>
                    </h3>
                    <p class="content-item-author">
                        <?php echo $book->getAuthor(); ?>
                    </p>
                    <p class="content-item-rating">Your rating:
                        <? echo $book->getUserRating() ?>
                    </p>
                    <div class="buttons">
                        <button class="button reading" onclick="updateUserBook(2, <?= $book->getBookId() ?>)"><img
                                src="/public/img/reading.svg" alt="reading"></button>
                        <button class="button to-read" onclick="updateUserBook(3, <?= $book->getBookId() ?>)"><img
                                src="/public/img/to-read.svg" alt="to-read"></button>
                        <button class="button remove" onclick="removeUserBook(<?= $book->getBookId() ?>)"><img
                                src="/public/img/delete.svg" alt="delete"></button>
                    </div>
                </div>
            <?php endforeach; ?>

        </section>
    </main>
    <footer>
        <p>Bookify 2023 All right reserved&copy;</p>
    </footer>
</body>

</html>