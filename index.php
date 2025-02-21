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


    <!-- START MOBILE MENU -->
    <div class="mobile-menu">
        <ul class="mobile-menu-nav">
            <li class="mobile-menu-nav-item">
                <a class="mobile-menu-link" href="./about.html">О компании</a>
            </li>
            <li class="mobile-menu-nav-item">
                <a class="mobile-menu-link" href="./contracts.php">наша продукция</a>
                <ul class="mobile-submenu">
                    <li class="mobile-submenu-item">
                        <a class="mobile-submenu-link" href="./product-avtohim.php">Швеллеры стальные</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a class="mobile-submenu-link" href="#">Шары стальные</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a class="mobile-submenu-link" href="#">Уголки стальные</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a class="mobile-submenu-link" href="#">Профиль</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a class="mobile-submenu-link" href="#">Прокат</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a class="mobile-submenu-link" href="#">Полособульб</a>
                    </li>
                </ul>
            </li>
            <li class="mobile-menu-nav-item">
                <a class="mobile-menu-link" href="./trademarks.php">подбор персонала</a>
            </li>
            <li class="mobile-menu-nav-item">
                <a class="mobile-menu-link" href="./blog.php">Новости</a>
            </li>
            <li class="mobile-menu-nav-item">
                <a class="mobile-menu-link" href="">Контакты</a>
            </li>
            <li class="mobile-menu-nav-item">
                <a class="mobile-menu-link" href="" data-toggle="modal" data-target="#feedback-modal">получить консультацию</a>
            </li>
            <li class="mobile-menu-nav-item">
                <a class="mobile-menu-link" href="">вход</a>
            </li>
        </ul>

        <a href="tel:+74996861014" class="mobile-phone">8-800-380-00-60</a>
        <div class="mobile-info">
            <!-- <svg class="address-svg">
                <use href="./img/sprite.svg#address"></use>
            </svg> -->
            <img src="./img/svg/address.svg" alt="address">
            <address class="mobile-info-address">
                г. Гурьевск, ул. Университетская, д. 2
            </address>
        </div>
        <div class="mobile-info">
            <!-- <svg class="mail-svg">
                <use href="./img/sprite.svg#mail"></use>
            </svg> -->
            <img src="./img/svg/mail.svg" alt="mail">
            <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
                a.dragunov@tdaliance.ru
            </a>
        </div>
        <div class="mobile-social-link">
            <a href="#">
                <!-- <svg class="vk-svg">
                    <use href="./img/sprite.svg#vk"></use>
                </svg> -->
                <img src="./img/svg/vk.svg" alt="vk">
            </a>
            <a href="#">
                <!-- <svg class="inst-svg">
                    <use href="./img/sprite.svg#inst"></use>
                </svg> -->
                <img src="./img/svg/inst.svg" alt="insta">
            </a>
        </div>
    </div>


    <div class="top-info">
        <!-- BURGER MENU -->
        <div class="mobile-header-menu">
            <div class="mobaile-header-toggle">
                <a href="#" class="mobile-menu-toggle">
                    <div class="mobile-menu-line"></div>
                    <div class="mobile-menu-line"></div>
                    <div class="mobile-menu-line"></div>
                </a>
            </div>
        </div>

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
                            О компании
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
                        <a href="" class="header-nav-link" data-toggle="modal" data-target="#feedback-modal">
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
        <div class="header-box-wrapper-mobail">
            <img src="./img/logo.png" alt="логотип металпром" width="94" height="79">
            <h1 class="header-title">МЕТАЛПРОМ
            </h1>
        </div>
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

        <!-- SLIDER BIG DISPLAY -->
        <div class="main-block-product">
            <?php include_once('./slider-big-display.php'); ?>
        </div>

        <!-- PRODUCT mobile display -->




    </section>

    <!-- START Section Biznes -->
    <section class="section section-biznes">
        <div class="container">
            <h2 class="title-section-biznes">Примеры проектов с нашей <br> продукцией</h2>
            <div class="biznes-wrapper">
                <div class="biznes-ok-jobs">
                    <img src="./img/blog/content-blog.jpg" alt="" class="biznes-blog-image">
                </div>
                <div class="biznes-ok-jobs">
                    <img src="./img/blog/content-blog1.jpg" alt="" class="biznes-blog-image">
                </div>
                <div class="biznes-ok-jobs">
                    <img src="./img/blog/content-blog2.jpg" alt="" class="biznes-blog-image">
                </div>
                <div class="biznes-ok-jobs">
                    <img src="./img/blog/content-blog3.jpg" alt="" class="biznes-blog-image">
                </div>
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

    <?php
    include_once('./footer.php');
    ?>