<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/home.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <title>Home</title>
</head>

<body>
    <nav>
        <div class="nav-logo">
            <img src="/public/img/logo-white.svg" alt="logo">
            <p>Bookify</p>
        </div>
        <input type="checkbox" class="nav-button" />

        <div class="collapse-menu">
            <img src="/public/img/expand.svg" alt="expand">
        </div>
    </nav>
    <main>
        <h1>UnexpectedErrorOccurs</h1>
        <p>
            <?php echo $error ?>
        </p>
        <a href="/home">Click here to back to home</a>
    </main>
    <footer>
        <p>Bookify 2023 All right reserved&copy;</p>
    </footer>
</body>

</html>