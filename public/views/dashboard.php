<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/dashboard.css">
    <script type="text/javascript" src="./public/js/searchDashboard.js" defer></script>
    <script type="text/javascript" src="./public/js/dashboardHandler.js"></script>
    <script type="text/javascript" src="./public/js/redirect.js"></script>
    <title>Dashboard</title>
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
                <a href="" class="nav-option selected">Dashboard</a>
            </li>
            <li>
                <a href="/add" class="nav-option">Add book</a>
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
        <h1>Dashboard</h1>
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
        <div class="buttons">
            <button type="button" class="secondary-button" onclick="redirectAuthorsGenres()">Manage Authors &
                Genres</button>
        </div>
        <table class="content">
            <tr>
                <th class="text">Title</th>
                <th class="text">Author</th>
                <th></th>
            </tr>
            <tbody class='table-container'>
                <?php foreach ($books as $book): ?>
                    <tr>
                        <td class="content-item-title">
                            <?php echo $book->getTitle(); ?>
                        </td>
                        <td class="content-item-author">
                            <?php echo $book->getAuthor(); ?>
                        </td>
                        <td class="td-button">
                            <button type="button" class="edit-button" onclick="redirectEdit(<?= $book->getBookId(); ?>)">
                                <img src="/public/img/edit.svg" alt="edit">
                            </button>
                        </td class="td-button">
                        <td>
                            <button type="button" class="remove-button"
                                onclick="removeBook(<?= $book->getBookId(); ?>, '<?= $book->getTitle(); ?>', '<?= $book->getCoverImg(); ?>')">
                                <img src="/public/img/delete-book.svg" alt="delete">
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
    <footer>
        <p>Bookify 2023 All right reserved&copy;</p>
    </footer>
</body>
<template id="table-template">
    <tr>
        <td class="content-item-title">
            title
        </td>
        <td class="content-item-author">
            author
        </td>
        <td class="td-button">
            <button type="button" class="edit-button" onclick="redirectEdit(<?= $book->getBookId(); ?>)">
                <img src="/public/img/edit.svg" alt="edit">
            </button>
        </td class="td-button">
        <td>
            <button type="button" class="remove-button"
                onclick="removeBook(<?= $book->getBookId(); ?>, '<?= $book->getTitle(); ?>', '<?= $book->getCoverImg(); ?>')">
                <img src="/public/img/delete-book.svg" alt="delete">
            </button>
        </td>
    </tr>
</template>

</html>