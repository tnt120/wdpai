<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/myBookFinished.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
                <a href="#" class="nav-option">Search</a>
            </li>
            <li>
                <a href="#" class="nav-option selected">My books</a>
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
                    <a href="#" class="main-my-books-title-warpper-main-option selected">Finished</a>
                </li>
                <li>
                    <a href="#" class="main-my-books-title-warpper-main-option">Currently reading</a>
                </li>
                <li>
                    <a href="#" class="main-my-books-title-warpper-main-option">To read</a>
                </li>
            </ul>
        </div>
        <section class="content">
            <div class="content-item">
                <div class="content-item-image">
                    <img src="/public/covers/HP-deathly-hallows-cover.jpg" alt="cover" />
                </div>
                <h3 class="content-item-title">Harry Potter and The Deathly Hallows</h3>
                <p class="content-item-author">J.K. Rowling</p>
                <p class="content-item-rating hide-element">Your rating: 5.0</p>
                <button type="button" class="secondary-button">Rate book</button>
            </div>

            <div class="content-item">
                <div class="content-item-image">
                    <img src="/public/covers/cover2.jpg" alt="cover" />
                </div>
                <h3 class="content-item-title">A song of Ice and Fire</h3>
                <p class="content-item-author">George R.R. Martin</p>
                <p class="content-item-rating">Your rating: 4.5</p>
                <button type="button" class="secondary-button hide-element">Rate book</button>
            </div>

            <div class="content-item">
                <div class="content-item-image">
                    <img src="/public/covers/cover3.jpg" alt="cover" />
                </div>
                <h3 class="content-item-title">IT</h3>
                <p class="content-item-author">Stephen King</p>
                <p class="content-item-rating hide-element">Your rating: 5.0</p>
                <button type="button" class="secondary-button">Rate book</button>
            </div>

        </section>
    </main>
    <footer>
        <p>Bookify 2023 All right reserved&copy;</p>
    </footer>
</body>

</html>