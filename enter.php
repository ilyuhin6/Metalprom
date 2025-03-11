<?php
$page_title = 'Вход для партнеров';
include_once('./header-page.php');
include_once('./header-page-title.php');
?>

<section class="section-enter-partners">
  <div class="container-about">
    <h2 class="title-enter-partners">Страница авторизации и регистрации для партнеров</h2>
    <div class="form-partners-content">
      <form action="" class="form-partners-reg">
        <h3 class="title-form-partners">Регистрация</h3>
        <input type="text" class="form-partners-input" name="user" placeholder="Имя" required>
        <input type="text" class="form-partners-input" name="user-email" placeholder="Почта" required>
        <input type="password" class="form-partners-input" name="user-password" placeholder="Пароль" required>
        <button type="submit" class="cta-form-button">Отправить</button>
      </form>



      <form action="" class="form-partners-reg">
        <h3 class="title-form-partners">Авторизация</h3>
        <input type="text" class="form-partners-input" name="user-email" placeholder="Почта" required>
        <input type="password" class="form-partners-input" name="user-password" placeholder="Пароль" required>
        <button type="submit" class="cta-form-button">Отправить</button>
      </form>

    </div>
  </div>
</section>

<?php
include_once('./footer.php');
?>