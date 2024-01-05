<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/addBookPage.css">
    <title>Add book</title>
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
                <a href="" class="nav-option selected">Add book</a>
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
        <h1>Add book</h1>
        <form action="addBook" method="POST" enctype="multipart/form-data">
            <div class="message">
                <?php
                if (isset($messages)) {
                    foreach ($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
            <input name="title" type="text" placeholder="Title">
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
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Description"></textarea>
            <input type="file" name="file" id="file" class="file-input" placeholder="Add cover">
            <button type="submit" class="priority-button">ADD</button>
        </form>
    </main>
    <footer>
        <p>Bookify 2023 All right reserved&copy;</p>
    </footer>
</body>

</html>