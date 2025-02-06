// Функция скрытия картинки превью при открытии аккардиона
const accordionItems = document.querySelectorAll('.accordion-item');

  accordionItems.forEach(item => {
    item.addEventListener('toggle', function() {
      const image = this.querySelector('.accordion-image-prev');
      if (this.open) {
        image.style.display = 'none'; // Скрыть изображение при открытии
      } else {
        image.style.display = 'block'; // Показать изображение при закрытии
      }
    });
  });