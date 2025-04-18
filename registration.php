<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <!--Montserrat--> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Document</title>

    <script>
        // Проверка наличия сообщения об ошибке в сессии
        <?php if (isset($_SESSION['registration_error'])): ?>
            alert("<?php echo $_SESSION['registration_error']; ?>");
            <?php unset($_SESSION['registration_error']); ?> // Удаление сообщения из сессии
        <?php endif; ?>
    </script>

</head>
<body>
    <!--HEADER-->
    <header>
        <div id="head-bar">
        <div class="container">
            <img src="/image/numhead.svg">
            <img src="/image/social.svg">
        </div>
        </div>

        <div class="header-contentmargin">
        <div class="container">
        
        <div class="header-content">
        <img class="header-content_logo" src="/image/logo.svg">

        <nav>
            <a href="#">Главная</a>
            <a href="#">Каталог</a>
            <a href="#">О нас</a>
            <a href="#">Оплата и доставка</a>
            <a href="#">Калькулятор</a>
        </nav>

        <div class="header-content_last">
            <a href="#">
                <img id="poisk" src="/image/search.svg">
            </a>

            <a>
                <img id="korz" src="/image/cart.svg">
            </a>

            <a href="#">
                Регистрация 
                &nbsp | &nbsp
            </a>

            <a href="#">
                Авторизация 
            </a>
        </div>
        </div>
    </div>
    </div>
</header>

<main class="registration">
    <div class="container">
        <form class="forma-reg" action="registration-form.php" method="post">
            <h1 class="form-h1"><br>
                <span style="color: #33B0AA;">Регистрация</span></h1>
                <div class="input-group">
                <label for="email-reg">Email:</label>
                <input type="email" id="email-reg" name="email-reg" required placeholder="Ваш Email">
                </div>

                <div class="input-group">
                <label for="tel">Имя:</label>
                <input type="tel" id="name-reg" name="name-reg" placeholder="Ваше имя">
                </div>

                <div class="input-group">
                <label for="name">Пароль</label>
                <input type="text" id="password-reg" name="password-reg" placeholder="Ваш пароль">
                </div>
              
                <button type="submit">Зарегистрироваться</button>
        </form>
    </div>
</main>

<footer class="footer">
    <div class="background-footer">
    <div class="container">
        <div class="foot_cont">
            <div><img id="footer-logo" src="/image/footer-logo.svg"></div>
        <div class="time-footer">
            <span>
                Время работы:
            </span>
            
            <div id="times"><span>
                Пн-Вс: 9:00 - 21:00
            </span>
        </div>
        </div>

        <div class="footer-catalog">
            <ul>
            <li><h3>Категории</h3></li>
            <li>Креатин</li>
            <li>Протеин</li>
            <li>Аминокислоты (BCAA, EAA)</li>
            <li>Жиросжигатели</li>
            <li>Витамины и минералы</li>
            </ul>
        </div>

        <div class="contact-footer">
            <ul>
            <li><h3>Контакты</h3></li>
            <li>7 (905) 366-75-26</li>
            <li>boodyboost@mail.ru</li>
            <li>Telegram: @boodyboost</li>
            <li>Новости в телеграм</li>
            </ul>
        </div>
    </div>
    </div>
    </div>
</footer>
</body>
</html>