<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="./css/swiper-bundle.css">

  <link rel="stylesheet" href="./css/normalize.css">
  <link rel="stylesheet" href="./css/style.css" />
  <title>Металпром</title>
</head>

<body> -->

<style>
  :root {
    --img-1: url("./img/pagination/icon-polosobulb.svg");
    --img-2: url("./img/pagination/icon-profil.svg");
    --img-3: url("./img/pagination/icon-prokat.svg");
    --img-4: url("./img/pagination/icon-shari.svg");
    --img-5: url("./img/pagination/icon-ugolki.svg");
  }

  /* html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    } */

  .wrapper {
    display: flex;
    flex-direction: row;
    width: 100%;
    height: 100%;
  }

  .panel {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    padding: 20px 25px !important;
    row-gap: 10px;
    width: 120px !important;
    background-color: #0072ab;
  }

  .swiper {
    height: 100%;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .swiper-pagination-bullet {
    position: relative;
    width: 100px;
    height: 80px;
    border-radius: 0 !important;
    background-color: #0072ab;
    opacity: 1;
  }

  .swiper-pagination-bullet-active {
    color: #fff;
    background: rgba(0, 122, 255, 1);
  }

  .swiper-pagination-bullet-active:before {
    content: "";
    height: 0;
    width: 0;
    left: unset;
    right: -34px;
    position: absolute;
    border-top: 35px solid transparent;
    border-left: 35px solid rgba(0, 122, 255, 1);
    border-bottom: 46px solid transparent;
    z-index: 100;
  }

  .push {
    content: " ";
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    background-size: 100% 100%;
  }

  .push-1 {
    background: var(--img-1);
    background-size: 100% 100%;
  }

  .push-2 {
    background: var(--img-2);
    background-size: 100% 100%;
  }

  .push-3 {
    background: var(--img-3);
    background-size: 100% 100%;
  }

  .push-4 {
    background: var(--img-4);
    background-size: 100% 100%;
  }

  .push-5 {
    background: var(--img-5);
    background-size: 100% 100%;
  }
</style>







<div class="wrapper">
  <div class="panel"></div>
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="container">
          <div class="product-wrapper">
            <div class="skils-product-wrapper">
              <span class="skill-up">На</span>
              <span class="skill-procent">10<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

              <span class="skill-up">На</span>
              <span class="skill-procent">80<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

              <span class="skill-up">На</span>
              <span class="skill-procent">1.5<sub>раз</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

            </div>
            <div class="about-product">
              <h3 class="title-about-product">листовая сталь</h3>
              <img src="./img/product/stal.jpg" alt="ствль" width="618" height="567" class="image-about-product">
              <a href="#" class="link-more-product">подробнее</a>
            </div>
            <div class="skils-product-wrapper">
              <span class="skill-up">На</span>
              <span class="skill-procent">30<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

              <span class="skill-up">На</span>
              <span class="skill-procent">10<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

              <span class="skill-up">На</span>
              <span class="skill-procent">10<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="container">
          <div class="product-wrapper">
            <div class="skils-product-wrapper">
              <span class="skill-up">На</span>
              <span class="skill-procent">10<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

              <span class="skill-up">На</span>
              <span class="skill-procent">80<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

              <span class="skill-up">На</span>
              <span class="skill-procent">1.5<sub>раз</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

            </div>
            <div class="about-product">
              <h3 class="title-about-product">листовая сталь</h3>
              <img src="./img/product/stal.jpg" alt="ствль" width="618" height="567" class="image-about-product">
              <a href="#" class="link-more-product">подробнее</a>
            </div>
            <div class="skils-product-wrapper">
              <span class="skill-up">На</span>
              <span class="skill-procent">30<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

              <span class="skill-up">На</span>
              <span class="skill-procent">10<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

              <span class="skill-up">На</span>
              <span class="skill-procent">10<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="container">
          <div class="product-wrapper">
            <div class="skils-product-wrapper">
              <span class="skill-up">На</span>
              <span class="skill-procent">10<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

              <span class="skill-up">На</span>
              <span class="skill-procent">80<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

              <span class="skill-up">На</span>
              <span class="skill-procent">1.5<sub>раз</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

            </div>
            <div class="about-product">
              <h3 class="title-about-product">листовая сталь</h3>
              <img src="./img/product/stal.jpg" alt="ствль" width="618" height="567" class="image-about-product">
              <a href="#" class="link-more-product">подробнее</a>
            </div>
            <div class="skils-product-wrapper">
              <span class="skill-up">На</span>
              <span class="skill-procent">30<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

              <span class="skill-up">На</span>
              <span class="skill-procent">10<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

              <span class="skill-up">На</span>
              <span class="skill-procent">10<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="container">
          <div class="product-wrapper">
            <div class="skils-product-wrapper">
              <span class="skill-up">На</span>
              <span class="skill-procent">10<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

              <span class="skill-up">На</span>
              <span class="skill-procent">80<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

              <span class="skill-up">На</span>
              <span class="skill-procent">1.5<sub>раз</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

            </div>
            <div class="about-product">
              <h3 class="title-about-product">листовая сталь</h3>
              <img src="./img/product/stal.jpg" alt="ствль" width="618" height="567" class="image-about-product">
              <a href="#" class="link-more-product">подробнее</a>
            </div>
            <div class="skils-product-wrapper">
              <span class="skill-up">На</span>
              <span class="skill-procent">30<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

              <span class="skill-up">На</span>
              <span class="skill-procent">10<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

              <span class="skill-up">На</span>
              <span class="skill-procent">10<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="container">
          <div class="product-wrapper">
            <div class="skils-product-wrapper">
              <span class="skill-up">На</span>
              <span class="skill-procent">10<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

              <span class="skill-up">На</span>
              <span class="skill-procent">80<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

              <span class="skill-up">На</span>
              <span class="skill-procent">1.5<sub>раз</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

            </div>
            <div class="about-product">
              <h3 class="title-about-product">листовая сталь</h3>
              <img src="./img/product/stal.jpg" alt="ствль" width="618" height="567" class="image-about-product">
              <a href="#" class="link-more-product">подробнее</a>
            </div>
            <div class="skils-product-wrapper">
              <span class="skill-up">На</span>
              <span class="skill-procent">30<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

              <span class="skill-up">На</span>
              <span class="skill-procent">10<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>

              <span class="skill-up">На</span>
              <span class="skill-procent">10<sub>%</sub></span>
              <span class="text-skill">уменьшение массогабаритных показателей</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




</script>
<script src="./js/just-validate.production.min.js"></script>
<script src="./js/swiper-bundle.min.js"></script>
<script src="./js/main.js"></script>
<!-- </body>

</html> -->