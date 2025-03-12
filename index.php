<?php
include_once('./header-page.php');
?>
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

<?php
include_once('./tempalate-page/section-portfolio.php');
?>

<!-- START section biznes-work -->
<?php
include_once('./tempalate-page/block-jobs.php');
?>

<!-- START Section consalting -->
<?php
include_once('./tempalate-page/consating.php');
?>

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
            <form action="./handler.php" method="POST" class="cta-form" id="form">
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