<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/edit.css">
    <title>Edit book</title>
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
                <a href="/dashboard" class="nav-option">Dashboard</a>
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
        <h1>Edit book:</br>
            <?= $book->getTitle(); ?>
        </h1>
        <p>Complete only the fields you want to change for this book</p>
        <form action="editBook" method="POST" enctype="multipart/form-data">
            <input type="text" name="book_id" value="<?= $book->getBookId(); ?>" style="display:none">
            <div class="message">
                <?php
                if (isset($messages)) {
                    foreach ($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
            <select name="author">
                <option value="none">New Author</option>
                <?php foreach ($authors as $author): ?>
                    <option value="<?php echo $author->getAuthorId() ?>">
                        <?php echo $author->getName() . ' ' . $author->getSurname() ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <select name="genre">
                <option value="none">New genre</option>
                <?php foreach ($genres as $genre): ?>
                    <option value="<?php echo $genre->getGenreId() ?>">
                        <?php echo $genre->getName() ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="New description"></textarea>
            <input type="file" name="file" id="file" class="file-input" placeholder="Add cover">
            <button type="submit" class="priority-button">EDIT</button>
        </form>
    </main>
    <footer>
        <p>Bookify 2023 All right reserved&copy;</p>
    </footer>
</body>

</html>