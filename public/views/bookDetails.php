<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/bookDetails.css">
    <script type="text/javascript" src="./public/js/booksDetailsHandler.js" defer></script>
    <script type="text/javascript" src="./public/js/details.js" defer></script>
    <script type="text/javascript" src="./public/js/redirect.js"></script>
    <title>Details</title>
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
                <a href="/home" class="nav-option">Search</a>
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
        <button class="back-button" onclick="redirectHome()"><img src="/public/img/back-arrow.svg"
                alt="reading"></button>
        <h1>Details</h1>
        <section>
            <div class="main-cover"></div>
            <div class="main-details">
                <p><span class="bolded">Title: </span>
                    <?= $book->getTitle(); ?>
                </p>
                <p><span class="bolded">Author:</span>
                    <?= $book->getAuthor(); ?>
                </p>
                <p><span class="bolded">Genre:</span>
                    <?= $book->getGenre(); ?>
                    </>
                <p><span class="bolded">Rating:</span>
                    <?= $book->getRating(); ?>
                </p>
                <p><span class="bolded">Description:</span></p>
                <p class="main-details-description">
                    <?= $book->getDescription(); ?>
                </p>
            </div>
        </section>
        <aside class="aside-buttons-container">
            <button type="button" class="secondary-button to-read">To read</button>
            <button type="button" class="secondary-button reading">Reading</button>
            <button type="button" class="primary-button finished">Finished</button>
            <button style="display: none;" class="primary-button remove">Remove</button>
        </aside>
    </main>
    <footer>
        <p>Bookify 2023 All right reserved&copy;</p>
    </footer>
</body>

</html>