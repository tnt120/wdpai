<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/home.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
            <form action="" method="POST">
                <input type="text" name="title" placeholder="Title" />
                <div class="search-bar-select-section">
                    <select name="genre">
                        <option value="Genre1">Genre</option>
                        <option value="Genre2">Genre2</option>
                        <option value="Genre3">Genre3</option>
                        <option value="Genre4">Genre4</option>
                    </select>
                    <select name="author">
                        <option value="Author1">Author</option>
                        <option value="Author2">Author2</option>
                        <option value="Author3">Author3</option>
                        <option value="Author4">Author4</option>
                    </select>
                </div>
                <button type="submit" class="primary-button"><span
                        class="material-symbols-outlined">search</span></button>
            </form>
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
                        <?php echo $book->getRating(); ?>
                    </p>
                    <button type="button" class="secondary-button">Details</button>
                </div>
            <?php endforeach; ?>

            <!-- <div class="content-item">
                <div class="content-item-image">
                    <img src="/public/covers/cover2.jpg" alt="cover" />
                </div>
                <h3 class="content-item-title">A song of Ice and Fire</h3>
                <p class="content-item-author">George R.R. Martin</p>
                <p class="content-item-rating">Rating: 4.98</p>
                <button type="button" class="secondary-button">Details</button>
            </div>

            <div class="content-item">
                <div class="content-item-image">
                    <img src="/public/covers/cover3.jpg" alt="cover" />
                </div>
                <h3 class="content-item-title">IT</h3>
                <p class="content-item-author">Stephen King</p>
                <p class="content-item-rating">Rating: 4.5</p>
                <button type="button" class="secondary-button">Details</button>
            </div>

            <div class="content-item">
                <div class="content-item-image">
                    <img src="/public/covers/cover4.jpg" alt="cover" />
                </div>
                <h3 class="content-item-title">The Outsider</h3>
                <p class="content-item-author">Stephen King</p>
                <p class="content-item-rating">Rating: 5.0</p>
                <button type="button" class="secondary-button">Details</button>
            </div>

            <div class="content-item">
                <div class="content-item-image">
                    <img src="/public/covers/HP-deathly-hallows-cover.jpg" alt="cover" />
                </div>
                <h3 class="content-item-title">Harry Potter and The Deathly Hallows</h3>
                <p class="content-item-author">J.K. Rowling</p>
                <p class="content-item-rating">Rating: 5.0</p>
                <button type="button" class="secondary-button">Details</button>
            </div>

            <div class="content-item">
                <div class="content-item-image">
                    <img src="/public/covers/HP-deathly-hallows-cover.jpg" alt="cover" />
                </div>
                <h3 class="content-item-title">Harry Potter and The Deathly Hallows</h3>
                <p class="content-item-author">J.K. Rowling</p>
                <p class="content-item-rating">Rating: 5.0</p>
                <button type="button" class="secondary-button">Details</button>
            </div>

            <div class="content-item">
                <div class="content-item-image">
                    <img src="/public/covers/HP-deathly-hallows-cover.jpg" alt="cover" />
                </div>
                <h3 class="content-item-title">Harry Potter and The Deathly Hallows</h3>
                <p class="content-item-author">J.K. Rowling</p>
                <p class="content-item-rating">Rating: 5.0</p>
                <button type="button" class="secondary-button">Details</button>
            </div> -->
        </section>
    </main>
    <footer>
        <p>Bookify 2023 All right reserved&copy;</p>
    </footer>
</body>

</html>