

// Функция скрытия картинки превью при открытии аккардиона
const accordionItems = document.querySelectorAll('.accordion-item');
const mMenuToggle = document.querySelector('.mobile-menu-toggle');
const menu = document.querySelector('.mobile-menu');

//Мобильное меню
mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.toggle("is-open");
});


// Раскрывашка
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







// START Slider Production BIG Dislay

    const swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".panel",
        clickable: true,
        renderBullet: (index, className) => {
          return `<div class="${className}">
            <div class="push push-${index + 1}">${index + 1}</div>     
          </div>`;
        },

      },
    });




// START Slider Mobail DISPLAY
    var swiperMobailDisplay = new Swiper(".mySwiper-litle-display", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });






    

// Modal START
let currentModal;   // текущие модальное окно
let modalDialog;    // белое модальное окно
let alertModal = document.querySelector('#alert-modal'); // Окно с предупреждением

const modalButtons = document.querySelectorAll('[data-toggle=modal]');  // переключатели модальных окон
modalButtons.forEach((button) => {
  button.addEventListener('click', (event) => { /* клик по переключателю */
    event.preventDefault();
    currentModal = document.querySelector(button.dataset.target); // Определяем текущие модальное окно
    currentModal.classList.toggle('is-open');  // открываем текущие окно
    modalDialog = currentModal.querySelector('.modal-dialog');  // назначаем диалоговое окно
    currentModal.addEventListener('click', event => {   // отследиваем клик по окну и пустым областям
      if (!event.composedPath().includes(modalDialog)) {  // если клик в пустую область (не диалог)
        currentModal.classList.remove('is-open');  // Закрываем окно
      }
    })
  });
});
document.addEventListener('keyup', (event) => {
    if (event.key == 'Escape' && currentModal.classList.contains('is-open')) {
      currentModal.classList.toggle('is-open');
    }
  });

//Validation Form
const forms = document.querySelectorAll('form');  //Собираем все формы с тегом form
forms.forEach(form => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: 'is-invalid',
});
validation
  .addField('[name = username]', [
    {
      rule: 'required',
      errorMessage: 'Укажите Имя',
    },
    {
      rule: 'maxLength',
      value: 10,
      errorMessage: 'Максимально 30 символов',
    },
  ])
  .addField('[name = userphone]', [
    {
      rule: 'required',
      errorMessage: 'Укажите телефон',
    },
  ])
  .onSuccess((event) => {
    const thisForm = event.target; //Наша форма
    const formData = new FormData(thisForm); //Даные из нашей формы
    const ajaxSend = (formData) => {
      fetch(thisForm.getAttribute('action'), {
        method: thisForm.getAttribute('method'),
        body: formData,
      }).then((response) => {
        if (response.ok) {
          thisForm.reset();
          // currentModal.classList.remove('is-open');
          if (currentModal) {
            currentModal.classList.remove('is-open');
          }
          alertModal.classList.add('is-open');
          currentModal = alertModal;
          modalDialog = currentModal.querySelector('.modal-dialog');  // назначаем диалоговое окно
          currentModal.addEventListener('click', event => {   // отследиваем клик по окну и пустым областям
      if (!event.composedPath().includes(modalDialog)) {  // если клик в пустую область (не диалог)
        currentModal.classList.remove('is-open');  // Закрываем окно
      }
    })
        } else {
          alert('Ошибка! Текст ошибки: ' . response.statusText);
        }
      });      
    };
    ajaxSend(formData);
  });
});
  

//  Маска номера телефона
/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7 (";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7 (";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7 (9";
  }
  /* в других случаях просто 7 (  */
  return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ") ";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис  */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});



