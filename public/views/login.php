<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/login.css">
    <title>Bookify</title>
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
                <a href="" class="nav-option selected">Login</a>
            </li>
            <li>
                <a href="registration" class="nav-option">Registration</a>
            </li>
        </ul>
        <div class="collapse-menu">
            <img src="/public/img/expand.svg" alt="expand">
        </div>
    </nav>
    <main>
        <div class="logo">
            <img src="/public/img/logo-mainpage.svg" alt="logo">
        </div>
        <form action="login" method="POST" class='login'>
            <div class="message">
                <?php
                if (isset($messages)) {
                    foreach ($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
            <input type="text" name="login" placeholder="Login">
            <input type="password" name="password" placeholder="Password">

            <button type="submit" class="priority-button">Login</button>
            <button type="button" class="secondary-button">No account? Click to register</button>
        </form>
    </main>
    <footer>
        <p>Bookify 2023 All right reserved&copy;</p>
    </footer>
</body>

</html>