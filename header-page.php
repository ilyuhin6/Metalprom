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