<?php
$page_title = 'Регистрация для партнеров';
include_once('./header-page.php');
include_once('./header-page-title.php');
?>


<section class="section-enter-partners">
  <div class="container-about">
    <h2 class="title-seo-page-product">Информация для партнеров</h2>
    <hr>
    <p class="page-seo-text">
      Также как дальнейшее развитие различных форм деятельности предполагает независимые способы реализации существующих финансовых и административных условий. Каждый из нас понимает очевидную вещь: курс на социально-ориентированный национальный проект играет важную роль в формировании как самодостаточных, так и внешне зависимых концептуальных решений. Внезапно, интерактивные прототипы набирают популярность среди определенных слоев населения, а значит, должны быть...
    </p>
    <hr>
    <div class="form-partners-content">
      <form id="form-registr" action="./func-php/registr.php" method="POST" class="form-partners-reg">
        <h3 class="title-form-registr">Регистрация</h3>
        <div class="form-input-group-box">
          <input id="user_name" type="text" name="user-name" class="form-partners-input" placeholder="Enter your name" />
        </div>

        <div class="form-input-group-box">
          <input id="user_email" type="text" name="user-email" class="form-partners-input" placeholder="Enter your email" />
        </div>

        <div class="form-input-group-box">
          <input id="user_password" type="password" name="user-password" class="form-partners-input" placeholder="Enter your password" />
        </div>
        <button type="submit" class="button cta-form-button">Submit</button>
      </form>

      <form action="./func-php/avtorize.php" method="POST" class="form-partners-auth">
        <h3 class="title-form-partners">Авторизация</h3>
        <input type="text" class="form-partners-input" name="user-email" placeholder="Почта" required>
        <input type="password" class="form-partners-input" name="user-password" placeholder="Пароль" required>
        <button type="submit" class="button cta-form-button">Отправить</button>
      </form>

    </div>
  </div>
</section>

<?php
include_once('./footer.php');
?>