<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/addAuthorsGenres.css">
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
        </section>
        <section>
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
        </section>
    </main>
    <footer>
        <p>Bookify 2023 All right reserved&copy;</p>
    </footer>
</body>

</html>