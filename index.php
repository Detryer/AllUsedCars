<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <title>All Used Cars</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="login/login.js"></script>
    <script type="text/javascript" src="registration/reg.js"></script>
</head>
<body>
<div class="wrapper">
    <?php require_once "header/header.php" ?>
</div>
<nav class="nav_main">
    <div class="wrapper">
        <ul>
            <li><a href="/cars/">Все объявления</a></li>
            <li><a href="#">Легковые</a>
                <ul>
                    <li><a href="#">Седан</a></li>
                    <li><a href="#">Купе</a></li>
                    <li><a href="#">Хетчбэк</a></li>
                    <li><a href="#">Универсал</a></li>
                    <li><a href="#">Микроавтобус</a></li>
                    <li><a href="#">Кроссовер</a></li>
                    <li><a href="#">Внедорожник</a></li>
                    <li><a href="#">Другие</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Грузовые</a>
                <ul>
                    <li><a href="#">Фургон</a></li>
                    <li><a href="#">Пикап</a></li>
                    <li><a href="#">Фура</a></li>
                    <li><a href="#">Цистерна</a></li>
                    <li><a href="#">Прицеп</a></li>
                    <li><a href="#">Другие</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Пассажирские</a>
                <ul>
                    <li><a href="#">Автобус</a></li>
                    <li><a href="#">Микроавтобус</a></li>
                    <li><a href="#">Троллейбус</a></li>
                    <li><a href="#">Трамвай</a></li>
                    <li><a href="#">Спецтранспорт</a></li>
                    <li><a href="#">Другие</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Правила</a>
            </li>
        </ul>
    </div>
</nav>
<div class="wrapper">
    <div class="fast_search">
        <div class="nav_brands" id="nav_big">
            <ul>
                <?php require_once "handlers/brands_output.php";
                Brands::popular(0, 11) ?>
            </ul>
        </div>
        <div class="nav_brands" id="nav_middle">
            <ul>
                <?php require_once "handlers/brands_output.php";
                Brands::popular(30, 10) ?>
            </ul>
        </div>
        <div id="fast">
            <?php require_once "search/fast_search.php" ?>
        </div>
    </div>
    <div class="last_ads">
        <div class="last_ads_block" id="ad1"></div>
    </div>
    <?php require_once "footer/footer.php" ?>
</div>
</body>
</html>