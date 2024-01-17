<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/addAuthorsGenres.css">
    <script type="text/javascript" src="./public/js/authorsAndGenreHandler.js"></script>
    <title>Add Author & Genre</title>
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
        <section>
            <div class="manage-container">
                <h1>Add author</h1>
                <form action="addAuthor" method="POST">
                    <div class="message">
                        <?php
                        if (isset($messagesAuthor)) {
                            foreach ($messagesAuthor as $message) {
                                echo $message;
                            }
                        }
                        ?>
                    </div>
                    <input name="authorName" type="text" placeholder="Name" required>
                    <input name="authorSurame" type="text" placeholder="Surname" required>
                    <button type="submit" class="priority-button">ADD</button>
                </form>
            </div>
            <div class="manage-container">
                <h1>Add genre</h1>
                <form action="addGenre" method="POST">
                    <div class="message">
                        <?php
                        if (isset($messagesGenre)) {
                            foreach ($messagesGenre as $message) {
                                echo $message;
                            }
                        }
                        ?>
                    </div>
                    <input name="genre" type="text" placeholder="Genre" required>
                    <button type="submit" class="secondary-button">ADD</button>
                </form>
            </div>
        </section>
        <section>
            <div class="manage-container">
                <h1>Delete author</h1>
                <form>
                    <select name="author" class='author-select'>
                        <option value="null">Choose author to delete</option>
                        <?php foreach ($authors as $author): ?>
                            <option value="<?php echo $author->getAuthorId() ?>">
                                <?php echo $author->getName() . ' ' . $author->getSurname() ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <button type="button" class="primary-button" onclick="removeAuthor()">Delete
                        author</button>
                </form>
            </div>
            <div class="manage-container">
                <h1>Delete Genre</h1>
                <form>
                    <select name="genre" class='genre-select'>
                        <option value="null">Choose author to delete</option>
                        <?php foreach ($genres as $genre): ?>
                            <option value="<?php echo $genre->getGenreId() ?>">
                                <?php echo $genre->getName() ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <button type="button" class="secondary-button" onclick="removeGenre()">Delete genre</button>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <p>Bookify 2023 All right reserved&copy;</p>
    </footer>
</body>

</html>