<!DOCTYPE html>
<html>
    <head>
        <title>Главная</title>
        <meta charset="utf-8"/>
        <link href="/css/style.css" rel="stylesheet">
        <link href="/svg/logo.svg" rel="icon">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body>
    <?php include('layout/header.php') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 menu">
                <div>
                    <img src="/svg/isehead.svg"/>
                    <a href="" class="menu__logo">
                        <img src="/svg/logo.svg">
                    </a>
                    <div class="menu__div">
                        <div style="margin-top: 184px;">
                            <a href="#">
                                <i class="fas fa-user"></i>
                                <span>
                                    Мои курсы
                                </span>
                            </a>
                            <a href="#" style="margin-top: 30px;" class="button_THICC">
                                <i class="fas fa-info-circle" style="color: #fff"></i>
                                <span style="color: #C4C4C4;">
                                    Создать курс
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 main">
                <div class="main__categories">
                    <div class="main__categories__stay">
                        <img src="/svg/stayathome.svg" width="100%">
                        <p>
                            #Stay at home
                        </p>
                    </div>
                    <div class="main__categories__exp">
                        <img src="/svg/shareexp.svg" width="100%">
                        <p>
                            #Делимся опытом
                        </p>
                    </div>
                    <div class="main__categories__new">
                        <img src="/svg/new.svg" width="100%">
                        <p>
                            #Изучаем новое
                        </p>
                    </div>
                    <div class="main__categories__freelance">
                        <img src="/svg/freelance.svg" width="100%">
                        <p>
                            #Фриланс
                        </p>
                    </div>
                    <div class='clear' style="box-shadow: none"></div>
                </div>
                <div class="courses">
                    <div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="right_menu">
                    <a href="#">Популярные курсы</a>
                    <a href="#">Последнее</a>
                    <a href="#">Мастер-классы</a>
                </div>
                <div class="tags">
                    <h1>Популярные теги</h1>
                    <a href="#">#сидимдома </a><a href="#">#коронавирус </a><a href="#">#якаменщик </a>
                    <a href="#">#работаюбезвыходных </a> <a href="#">#мойтелефонмегафон </a> <a href="#">#вебдизайн </a>
                    <a href="#">#пение </a> <a href="#">#бассгитара </a> <a href="#">#треугольник </a>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/app.js"></script>
    </body>
</html>