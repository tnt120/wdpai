<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/register.css">
    <title>Registration</title>
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
                <a href="login" class="nav-option">Login</a>
            </li>
            <li>
                <a href="" class="nav-option selected">Registration</a>
            </li>
        </ul>
        <div class="collapse-menu">
            <img src="/public/img/expand.svg" alt="expand">
        </div>
    </nav>
    <main>
        <h1>Join us</h1>
        <div class='form-container'>
            <div class="logo">
                <img src="/public/img/logo-mainpage.svg" alt="logo" class="main-logo">
                <div class="second-logo">
                    <img src="/public/img/logo-black.svg" alt="logo">
                    <h2>Join us</h2>
                </div>
            </div>
            <form action="register" method="POST" class='register'>
                <div class="message">
                    <?php
                    if (isset($messages)) {
                        foreach ($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input type="text" name="firstName" placeholder="First name">
                <input type="text" name="lastName" placeholder="Last name">
                <input type="text" name="email" placeholder="E-mail">
                <input type="text" name="login" placeholder="Login">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="passwordConfirmation" placeholder="Confirm password">

                <button type="submit" class="priority-button">Create account</button>
            </form>
        </div>
    </main>
    <footer>
        <p>Bookify 2023 All right reserved&copy;</p>
    </footer>
</body>

</html>