<!DOCTYPE html>
<html>
    <head>
        <title>Создать курс</title>
        <meta charset="utf-8"/>
        <link href="/css/shared.css" rel="stylesheet">
        <link href="/css/courses_create.css" rel="stylesheet">
        <link href="/svg/logo.svg" rel="icon">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body>
    <?php include('layout/header.php') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 menu">
                <div>
                    <img src="/svg/isehead.svg" style="margin: 0 !important"/>
                    <a href="/" class="menu__logo">
                        <img src="/svg/logo.svg">
                    </a>
                    <div class="menu__div">
                        <div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 main">
                <form class="course_form">
                    <div class="d-flex name_input_cont">
                        <input type="text" class="name_input" name="course_name" placeholder="Введите название курса/урока">
                    </div>
                    <div class="input_field">
                        <div class="group">      
                          <input type="text" required>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Заголовок</label>
                        </div>
                        <div class="group">      
                          <input type="text" required>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Краткое описание (необязательно)</label>
                        </div>
                    </div>
                    <div class="input_field d-flex input_field__img">
                        Перетащите фото или видео
                    </div>
                    <button type="submit" href="#" role="button"><svg width="36" height="36" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13 0.188019C5.92399 0.188019 0.187988 5.92402 0.187988 13C0.187988 20.076 5.92399 25.813 13 25.813C20.076 25.813 25.813 20.076 25.813 13C25.813 5.92402 20.076 0.188019 13 0.188019ZM19.736 9.03502L12.865 19.167C12.659 19.47 12.337 19.671 12.017 19.671C11.697 19.671 11.342 19.496 11.117 19.272L7.08499 15.239C6.81099 14.964 6.81099 14.517 7.08499 14.243L8.08099 13.245C8.35499 12.973 8.80299 12.973 9.07599 13.245L11.699 15.868L17.404 7.45402C17.621 7.13402 18.061 7.05102 18.383 7.26702L19.549 8.05802C19.869 8.27502 19.953 8.71502 19.736 9.03502Z" fill="#24285B"/></svg></button>
                </form>
            </div>
            <div class="col-sm-3 d-flex flex-column">
                <a href="#" class="support_cont">
                    <img src="/svg/astronaut.svg">
                    <p>Поддержи разработчиков</p>
                </a>
            </div>
        </div>
    </div>
    <div>

    </div>
    <script src="/js/app.js"></script>
    </body>
</html>