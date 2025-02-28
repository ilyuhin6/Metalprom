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