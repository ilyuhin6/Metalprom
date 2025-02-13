<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/swiper-bundle.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css" />
    <title>Металпром</title>
</head>


<body>
    <div class="top-info">
        <div class="container-info">
            <div class="wrapper-info">
                <ul class="info-list">
                    <li class="info-item">
                        <img src="./img/icon/Location.svg" alt="локация" width="30" height="30">
                        <address>г. Гурьевск, ул. Университетская, д. 2</address>
                    </li>
                    <li class="info-item">
                        <img src="./img/icon/mail.svg" alt="mail" width="25" height="28">
                        <a href="mailto:a.dragunov@tdaliance.ru">a.dragunov@tdaliance.ru</a>
                    </li>
                    <li class="info-item">
                        <img src="./img/icon/Vector.svg" alt="phone" width="27" height="25">
                        <a href="tel:88003800060">8-800-380-00-60</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <header class="header">
        <nav class="header-nav">
            <div class="container-info">
                <ul class="header-nav-list info-list">
                    <li class="header-nav-item">
                        <a href="" class="header-nav-link">
                            компания
                        </a>
                    </li>
                    <li class="header-nav-item">
                        <a href="" class="header-nav-link">
                            наша продукция
                        </a>
                    </li>
                    <li class="header-nav-item">
                        <a href="" class="header-nav-link">
                            подбор персонала
                        </a>
                    </li>
                    <li class="header-nav-item">
                        <a href="" class="header-nav-link">
                            нововсти
                        </a>
                    </li>
                    <li class="header-nav-item">
                        <a href="" class="header-nav-link">
                            контакты
                        </a>
                    </li>
                    <li class="header-nav-item">
                        <a href="" class="header-nav-link">
                            получить консультацию
                        </a>
                    </li>
                    <li class="header-nav-item">
                        <a href="" class="header-nav-link">
                            вход
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.header-nav -->
        <div class="header-content">
            <div class="header-image"></div>
            <div class="container-info">
                <div class="header-box-logo">
                    <div class="header-box-wrapper">
                        <img src="./img/logo.png" alt="логотип металпром" width="94" height="79">
                        <h1 class="header-title">МЕТАЛПРОМ
                        </h1>
                    </div>
                    <p class="header-box-text">
                        традиции и технологи старейшего завода
                        Сибири ОАО «ГМЗ» основанного в 1816 году
                    </p>
                </div>
            </div>
            <!-- /.header-box-logo -->
        </div>
        <!-- /.header-content -->
    </header>


    <section class="section section-about">
        <div class="container-about">
            <h2 class="title-about">О нас</h2>
            <div class="wrapper-about">
                <p class="about-text">
                    Благодаря инновационным технологиям и высококвалифицированному персоналу, продукция "МеталПром"
                    отвечает международным стандартам качества и экспортируется в более чем 20 стран мира.
                </p>
                <p class="about-text">
                    Металлургический завод "МеталПром" основан в 1975 году и на протяжении нескольких десятилетий
                    остаётся ведущим предприятием в отрасли по всей стране стран СНГ.
                </p>
            </div>
            <div class="about-more">
                <a href="#" class="about-link">Узнать больше</a>
                <img src="./img/icon/more.svg" alt="more" width="52" height="44">
            </div>
        </div>
    </section>

    <!-- START SECTION PRODUCT SLIDER -->
    <section class="section section-product product-slider">
        <h2 class="title-product">
            Выпускаемая продукция
        </h2>
        <div class="main-block-product">

            <?php include_once('./slider-big-display.php'); ?>

        </div>
    </section>

    <!-- START Section Biznes -->
    <section class="section section-biznes">
        <div class="container">
            <h2 class="title-section-biznes">Примеры проектов с нашей <br> продукцией</h2>
            <div class="biznes-wrapper">
                <img src="./img/blog/content-blog.jpg" alt="" width="610" height="452" class="biznes-blog-image">
                <img src="./img/blog/content-blog1.jpg" alt="" width="610" height="452" class="biznes-blog-image">
                <img src="./img/blog/content-blog2.jpg" alt="" width="610" height="452" class="biznes-blog-image">
                <img src="./img/blog/content-blog3.jpg" alt="" width="610" height="452" class="biznes-blog-image">
            </div>
        </div>
    </section>

    <!-- START section biznes-work -->
    <section class="section section-biznes-work">
        <h2 class="title-section-biznes">Технический рекрутинг</h2>
        <div class="biznes-work">
            <div class="container">
                <div class="biznes-work-wrapper">
                    <div class="biznes-work-left">
                        <h3 class="title-biznes-work">
                            Подбор технического персонала с гарантиями
                        </h3>
                        <p class="biznes-work-left-text">
                            Узкоспециализированный экспертный подход к поиску лучших сотрудников в нашу компанию.
                        </p>
                        <a href="#" class="link-work-product">открыттые вакансии</a>
                    </div>
                    <div class="biznes-work-wrapper-right">
                        <div class="biznes-work-content">
                            <p class="biznes-work-right-text">
                                Информационные <br> технологии
                            </p>
                            <img src="./img/icon/work.svg" alt="">
                        </div>
                        <div class="biznes-work-content">
                            <p class="biznes-work-right-text">
                                производство
                            </p>
                            <img src="./img/icon/work.svg" alt="">
                        </div>
                        <div class="biznes-work-content">
                            <p class="biznes-work-right-text">
                                Энергетика
                            </p>
                            <img src="./img/icon/work.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- START Section consalting -->
    <section class="section section-consalting">
        <div class="container">
            <h2 class="title-section-biznes">Консалтинг (R&D)</h2>
            <div class="consalting-main-content">
                <div class="accordion">
                    <details class="accordion-item">
                        <summary class="accordion-header">
                            Реализация научно-исследовательских работ
                            <img src="./img/accordion/01.jpg" class="accordion-image-prev" id="image-prev">
                        </summary>
                        <div class="accordion-content">
                            <p class="accordion-content-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam, quis nostrud exercitation
                            </p>
                            <div class="about-more link-accordion-content">
                                <a href="#" class="about-link">Узнать больше</a>
                                <img src="./img/icon/more.svg" alt="more" width="52" height="44">
                            </div>
                            <img src="./img/accordion/02.jpg" alt="" class="accordion-image-content">
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">
                            Реализация опытно-конструкторских работ
                            <img src="./img/accordion/03.jpg" class="accordion-image-prev" id="image-prev">
                        </summary>
                        <div class="accordion-content">
                            <p class="accordion-content-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam, quis nostrud exercitation
                            </p>
                            <div class="about-more link-accordion-content">
                                <a href="#" class="about-link">Узнать больше</a>
                                <img src="./img/icon/more.svg" alt="more" width="52" height="44">
                            </div>
                            <img src="./img/accordion/02.jpg" alt="" class="accordion-image-content">
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">
                            Оценка состояния рынка сталилитейно продукции
                            <img src="./img/accordion/04.jpg" class="accordion-image-prev" id="image-prev">
                        </summary>
                        <div class="accordion-content">
                            <p class="accordion-content-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam, quis nostrud exercitation
                            </p>
                            <div class="about-more link-accordion-content">
                                <a href="#" class="about-link">Узнать больше</a>
                                <img src="./img/icon/more.svg" alt="more" width="52" height="44">
                            </div>
                            <img src="./img/accordion/02.jpg" alt="" class="accordion-image-content">
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">
                            Научно-техническая экспертиза отчетной документациит
                            <img src="./img/accordion/01.jpg" class="accordion-image-prev" id="image-prev">
                        </summary>
                        <div class="accordion-content">
                            <p class="accordion-content-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam, quis nostrud exercitation
                            </p>
                            <div class="about-more link-accordion-content">
                                <a href="#" class="about-link">Узнать больше</a>
                                <img src="./img/icon/more.svg" alt="more" width="52" height="44">
                            </div>
                            <img src="./img/accordion/02.jpg" alt="" class="accordion-image-content">
                        </div>
                    </details>

                </div>
            </div>
        </div>
    </section>

    <!-- START Section-news -->
    <section class="section section-news">
        <div class="container">
            <h2 class="title-section-biznes title-news">Новости и публикации</h2>
            <div class="news-wrapper">
                <div class="news-post">
                    <img src="./img/news/01.jpg" alt="новость" class="news-post-image">
                    <p class="news-post-text">
                        Donec mi augue, consectetur in lorem non, fringilla fringilla justo. Cras pulvinar, nunc vitae
                        dapibus porttitor, leo sem feugiat
                    </p>
                    <div class="date-and-tag">
                        <time datetime="2024-08-31">31.08.2024</time>
                        <a href="#" class="news-post-link">#шинопроводы</a>
                    </div>
                </div>

                <div class="news-post">
                    <img src="./img/news/02.jpg" alt="новость" class="news-post-image">
                    <p class="news-post-text">
                        Donec mi augue, consectetur in lorem non, fringilla fringilla justo. Cras pulvinar, nunc vitae
                        dapibus porttitor, leo sem feugiat
                    </p>
                    <div class="date-and-tag">
                        <time datetime="2024-08-31">31.08.2024</time>
                        <a href="#" class="news-post-link">#шинопроводы</a>
                    </div>
                </div>

                <div class="news-post">
                    <img src="./img/news/03.jpg" alt="новость" class="news-post-image">
                    <p class="news-post-text">
                        Donec mi augue, consectetur in lorem non, fringilla fringilla justo. Cras pulvinar, nunc vitae
                        dapibus porttitor, leo sem feugiat
                    </p>
                    <div class="date-and-tag">
                        <time datetime="2024-08-31">31.08.2024</time>
                        <a href="#" class="news-post-link">#шинопроводы</a>
                    </div>
                </div>
            </div>
            <div class="news-button-more">
                <a href="#" class="news-link-more">открыттые вакансии</a>
            </div>
        </div>
    </section>

    <!-- START section CTA -->

    <section class="cta">
        <div class="bg-grey section-cta">

            <img src="./img/cta.png" alt="call to action" class="cta-image">

            <div class="cta-form-wrapper container">
                <form action="./handler.php" method="POST" class="cta-form">
                    <h2 class="section-title cta-form-title">
                        Хотите сотрудничать?
                    </h2>
                    <p class="cta-form-text">
                        Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие
                        вопросы и поможем даже в самых сложных случаях!
                    </p>
                    <div class="input-group-wrapper">
                        <div class="input-group">
                            <input id="user-name" name="username" type="text" class="input" placeholder=" " required />
                            <label class="input-group-label" for="user-name">Имя</label>
                        </div>
                        <!-- /.input-group -->
                        <div class="input-group">
                            <input id="user-phone" name="userphone" type="tel" class="input phone-mask" placeholder=" " required />
                            <label class="input-group-label" for="user-phone">Номер телефона</label>
                        </div>
                        <!-- /.input-group -->
                    </div>
                    <!-- /.input-group-wrapper -->
                    <div class="cta-form-footer">
                        <button type="submit" class="button cta-form-button">Отправить заявку</button>
                        <div class="notify">
                            <img src="./img//icon/shield.svg" alt="shield" width="14" height="14" class="notify-icon">
                            <p class="notify-text">
                                Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную
                                конфиденциальность информации!
                            </p>
                        </div>
                    </div>
                    <!-- /.cta-form-footer -->
                </form>
            </div>
            <!-- /.cta-form-wrapper -->
        </div>
    </section>

    <!-- START Modal CTA -->
    <div class="modal" id="feedback-modal">
        <div class="modal-dialog">
            <h2 class="modal-title">Есть вопросы?</h2>
            <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
                <img src="./img/svg/close.svg" alt="" class="close-icon" width="24" height="24">
            </a>
            <p class="modal-text">
                Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и
                поможем даже в самых сложных случаях!
            </p>
            <form action="./handler.php" method="POST" class="modal-form">
                <div class="input-group-wrapper input-group-vertical">
                    <div class="input-group modal-input-group">
                        <input id="modal-user-name" type="text" name="username" class="input modal-input" placeholder=" " required />
                        <label class="input-group-label modal-input-label" for="modal-user-name">Имя</label>
                    </div>
                    <!-- /.input-group -->
                    <div class="input-group modal-input-group">
                        <input id="modal-user-phone" type="tel" name="userphone" class="input modal-input phone-mask" placeholder=" " required />
                        <label class="input-group-label modal-input-label" for="modal-user-phone">Номер телефона</label>
                    </div>
                    <!-- /.input-group -->
                </div>
                <!-- /.input-group-wrapper -->
                <div class="modal-form-footer">
                    <button type="submit" class="button modal-form-button">Отправить заявку</button>
                    <div class="notify">
                        <img src="./img/svg/shield.svg" alt="shield" width="14" height="14" class="notify-icon">
                        <p class="notify-text">
                            Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную
                            конфиденциальность информации!
                        </p>
                    </div>
                </div>
                <!-- /.modal-form-footer -->
            </form>
            <!-- /.modal-form -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <footer class="footer">
        <section class="section section-footer-top">
            <div class="container container-footer-top">
                <div class="footer-top-wrapper">
                    <div class="footer-nav-list">
                        <h3 class="ttile-footer">Компания</h3>
                        <ul class="footer-top-list">
                            <li class="footer-top-item">
                                <a href="#" class="footer-top-item-link">
                                    О нас
                                </a>
                            </li>
                            <li class="footer-top-item">
                                <a href="#" class="footer-top-item-link">
                                    Публикации
                                </a>
                            </li>
                            <li class="footer-top-item">
                                <a href="#" class="footer-top-item-link">
                                    Наши партнеры
                                </a>
                            </li>
                            <li class="footer-top-item">
                                <a href="#" class="footer-top-item-link">
                                    Сотрудничество
                                </a>
                            </li>
                            <li class="footer-top-item">
                                <a href="#" class="footer-top-item-link">
                                    Инвесторам
                                </a>
                            </li>
                            <li class="footer-top-item">
                                <a href="#" class="footer-top-item-link">
                                    Сертификаты
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-nav-list">
                        <h3 class="ttile-footer">Продукция</h3>
                        <ul class="footer-top-list">
                            <li class="footer-top-item">
                                <a href="" class="footer-top-item-link">
                                    Листовая сталь
                                </a>
                            </li>
                            <li class="footer-top-item">
                                <a href="" class="footer-top-item-link">
                                    Рельсы
                                </a>
                            </li>
                            <li class="footer-top-item">
                                <a href="" class="footer-top-item-link">
                                    Чугун
                                </a>
                            </li>
                            <li class="footer-top-item">
                                <a href="" class="footer-top-item-link">
                                    Металопрокат
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-nav-list">
                        <h3 class="ttile-footer">Подбор персонала</h3>
                        <ul class="footer-top-list">
                            <li class="footer-top-item">
                                <a href="" class="footer-top-item-link">
                                    Информационные технологии (IT)
                                </a>
                            </li>
                            <li class="footer-top-item">
                                <a href="" class="footer-top-item-link">
                                    Энергетика
                                </a>
                            </li>
                            <li class="footer-top-item">
                                <a href="" class="footer-top-item-link">
                                    Производство
                                </a>
                            </li>
                            <li class="footer-top-item">
                                <a href="" class="footer-top-item-link">
                                    Продажи
                                </a>
                            </li>
                            <li class="footer-top-item">
                                <a href="" class="footer-top-item-link">
                                    Сетевики
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-nav-list">
                        <h3 class="ttile-footer">Консалтинг (R&D)</h3>
                        <ul class="footer-top-list">
                            <li class="footer-top-item">
                                <a href="" class="footer-top-item-link">
                                    Реализация научно-исследовательских работ
                                </a>
                            </li>
                            <li class="footer-top-item">
                                <a href="" class="footer-top-item-link">
                                    Реализация научно-исследовательских работ
                                </a>
                            </li>
                            <li class="footer-top-item">
                                <a href="" class="footer-top-item-link">
                                    Научно-техническая экспертиза

                                </a>
                            </li>
                            <li class="footer-top-item">
                                <a href="" class="footer-top-item-link">
                                    Реализация научно-исследовательских работ
                                </a>
                            </li>
                            <li class="footer-top-item">
                                <a href="" class="footer-top-item-link">
                                    Научно-техническая экспертиза
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer-medium">
            <div class="container container-footer">
                <div class="footer-medium-wrapper">
                    <div class="footer-medium-logo">
                        <div class="footer-medium-logo-logo">
                            <a href="/">
                                <img src="./img/logo.png" alt="логотип">
                            </a>
                            <a href="/">
                                <h2 class="header-title">металпром</h2>
                            </a>
                        </div>
                    </div>
                    <div class="footer-medium-info">
                        652025, Кемеровская область, г. Гурьевск, <br>
                        ул. Университетская, д. 2, оф. 444, 446 Технопарк «Гурьевск»
                    </div>
                    <div class="footer-medium-contackt">
                        <a href="tel:8484588678" class="footer-medium-contack-link">+7 (484) 58 38 678</a>
                        <a href="mailto:info@str-techno.ru" class="footer-medium-contack-link">info@str-techno.ru</a>
                    </div>
                </div>
            </div>
            <div class="footer-medium-border"></div>
        </section>

        <section class="footer-down">
            <div class="container container-footer">
                <div class="footer-wrapper-down">
                    <div class="copiraght">© 2025 Компания МЕТАЛПРОМ<br>
                        Политика конфиденциальности
                    </div>
                    <div class="footer-down-partners">
                        <img src="./img/01.png" alt="партнер">
                        <img src="./img/02.png" alt="партнер">
                        <img src="./img/03.png" alt="партнер">
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <div class="modal" id="alert-modal">
        <div class="modal-dialog alerrt-modal-dialog">
            <img src="./img/feedback.png" alt="спасибо" class="alert-modal-image" width="285" height="245">
            <h2 class="modal-title alert-modal-title">Спасибо за заявку!</h2>
            <a href="#" class="modal-close alert-modal-close" data-toggle="modal" data-target="#alert-modal">
                <img src="./img/icon/close.svg" alt="" class="close-icon" width="24" height="24">
            </a>
            <p class="modal-text alert-modal-text">
                Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в
                самых сложных случаях!
            </p>
            <a href="./index.php" class="button modal-form-button alert-modal-link">Вернуться на главную</a>
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <script src="./js/just-validate.production.min.js"></script>
    <script src="./js/swiper-bundle.min.js"></script>
    <script src="./js/main.js"></script>

</body>

</html>