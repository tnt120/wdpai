<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/home.css">
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <script type="text/javascript" src="./public/js/redirect.js"></script>
    <title>Home</title>
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
                <a href="" class="nav-option selected">Search</a>
            </li>
            <li>
                <a href="myBookFinished" class="nav-option">My books</a>
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
        <h1>Find your book</h1>
        <div class="search-bar">
            <input type="text" name="title" placeholder="Title" />
            <div class="search-bar-select-section">
                <select name="author">
                    <option value="">Author</option>
                    <?php foreach ($authors as $author): ?>
                        <option value="<?php echo $author->getAuthorId() ?>">
                            <?php echo $author->getName() . ' ' . $author->getSurname() ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <select name="genre">
                    <option value="">Genre</option>
                    <?php foreach ($genres as $genre): ?>
                        <option value="<?php echo $genre->getGenreId() ?>">
                            <?php echo $genre->getName() ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="button" class="primary-button"><img src="/public/img/search.svg" alt="search"></button>
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
                    <p class="content-item-rating">
                        Rating:
                        <?php echo $book->getRating(); ?>
                    </p>
                    <button type="button" class="secondary-button"
                        onclick="redirectDetails(<?= $book->getBookId() ?>)">Details</button>
                </div>
            <?php endforeach; ?>
        </section>
    </main>
    <footer>
        <p>Bookify 2023 All right reserved&copy;</p>
    </footer>
</body>
<template id="book-template">
    <div class="content-item">
        <div class="content-item-image">
            <img src="" alt="cover" />
        </div>
        <h3 class="content-item-title">
            title
        </h3>
        <p class="content-item-author">
            author
        </p>
        <p class="content-item-rating">
            Rating: rating
        </p>
        <button type="button" class="secondary-button"
            onclick="redirectDetails(<?= $book->getBookId() ?>)">Details</button>
    </div>
</template>

</html>