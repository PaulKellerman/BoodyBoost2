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
            <a href="index-reg.php">Калькулятор</a>
        </nav>

        <div class="header-content_last">
            <a href="#">
                <img id="poisk" src="/image/search.svg">
            </a>

            <a>
                <img id="korz" src="/image/cart.svg">
            </a>

            <a href="/registration.php">
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

    <!--MAIN-->

    <main>
        <div class="background-main">
            <div class="container">
                <div class="main-content">
                    <div>
                        <h1>Boody Boost - <br>
                            <h1 style="color: white;">Энергия для ваших побед!</h1>
                    </div>
                    <div>
                        <p>
                            BoodyBoost – магазин спортивного питания для тех, кто стремится к лучшим результатам. Протеины, аминокислоты, витамины и другие добавки от ведущих брендов. Улучшайте форму, повышайте выносливость и добивайтесь новых высот вместе с нами!
                        </p>
                        <div class="main-content__buttons">
                            <a href="#">
                                Узнать подробнее
                            </a>

                            <a href="#">
                                Калькулятор калорий
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--Product-info-->

    <section class="product-info">
        <div class="container">
            <h1>В нашем магазине вы можете <span style="color: #33B0AA;">купить</span></h1>
            <div class="product-grid">
                <div class="product-card">
                    <img src="/image/creatine.svg" alt="Product 1">
                    <h3>Креатин</h3>
                </div>
                <div class="product-card">
                    <img src="/image/creatine.svg" alt="Product 2">
                    <h3>Протеин</h3>
                </div>
                <div class="product-card">
                    <img src="/image/creatine.svg" alt="Product 3">
                    <h3>Гейнеры</h3>
                </div>
                <div class="product-card">
                    <img src="/image/creatine.svg" alt="Product 4">
                    <h3>Аминокислоты (BCAA, EAA)</h3>
                </div>
                <div class="product-card">
                    <img src="/image/creatine.svg" alt="Product 5">
                    <h3>Жиросжигатели</h3>
                </div>
            </div>
        </div>
    </section>
    
    <!--Form-->

    <section class="form-news">
        <div class="container">
            <form class="forma" action="submit_form.php" method="post">
                <h1 class="form-h1">Будь в курсе всех  новостей и акций.<br>
                    <span style="color: #33B0AA;">Подпишись на рассылку</span></h1>
                    <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required placeholder="Ваш Email">
                    </div>

                    <div class="input-group">
                    <label for="tel">Телефон:</label>
                    <input type="tel" id="tel" name="number" placeholder="Ваш телефон">
                    </div>

                    <div class="input-group">
                    <label for="name">Имя:</label>
                    <input type="text" id="name" name="name" placeholder="Вашe имя">
                    </div>
                  
                    <button type="submit">Подписаться</button>
            </form>
        </div>
    </section>

    <!--Mini-contacts-->

    <section class="mini-contacts">
        <div class="container">
            <div class="m-contacts">
                <h1>Контакты</h1>
                <p>Адрес:</p>
                <span>г. пенза, ул. ладожская, д. 144А</span>
                <p>Телефон:</p>
                <span>+7 (905) 366-75-26</span>
                <p>E-mail:</p>
                <span>boodyboost@mail.ru</span>
                <div><img src="/image/maps.svg"></div>
            </div>
        </div>
    </section>

    <!--Footer-->

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

    <script src="form-submit.js" type="text/javascript"></script>
</body>
</html>