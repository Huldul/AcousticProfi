const iconMenu = document.querySelector('.header-menu-icon');
const headerNavigation = document.querySelector('.header__nav');
if(iconMenu) {
  iconMenu.addEventListener("click", function(e) {
    document.body.classList.toggle('_lock');
    iconMenu.classList.toggle('_active');
    headerNavigation.classList.toggle('_active');
  })
}


const mainSlider = new Swiper('.main-slider', {

    loop: true,
    slidesPerView: 1,
    pagination: {
      el: '.swiper-pagination',
    },
      effect: 'fade',
      fadeEffect: {
        crossFade: true,
      },
      autoplay: {
        delay: 2000,
        stopOnLastSlide: true,
        disableOnIteraction: false,
      },
  });


  let currentPage = window.location.pathname;

// Получаем ссылки из навбара
const links = document.querySelectorAll('nav ul li a');

// Проходимся по всем ссылкам и добавляем класс 'active' той, которая соответствует текущему URL
links.forEach(function(link) {
    if (link.getAttribute('href') === currentPage) {
        link.classList.add('page-active');
    }
});



const audioPlayers = document.querySelectorAll(".audio-player");
const playButtons = document.querySelectorAll(".play-audio");
const stopButtons = document.querySelectorAll(".stop-audio");

// Добавляем обработчики событий для каждого набора аудио и кнопок
for (let i = 0; i < audioPlayers.length; i++) {
    playButtons[i].addEventListener("click", function() {
        audioPlayers[i].play();
        playButtons[i].style.display = "none";
        stopButtons[i].style.display = "inline";
    });

    stopButtons[i].addEventListener("click", function() {
        audioPlayers[i].pause();
        audioPlayers[i].currentTime = 0; // Возвращаемся в начало аудио
        playButtons[i].style.display = "inline";
        stopButtons[i].style.display = "none";
    });

    // Добавляем обработчик события окончания воспроизведения для кнопки "Stop"
    audioPlayers[i].addEventListener("ended", function() {
        playButtons[i].style.display = "inline";
        stopButtons[i].style.display = "none";
    });
}

document.addEventListener("DOMContentLoaded", function() {
  // Получаем ссылки на все табы
  const tabs = document.querySelectorAll('.tabs a');

  // Добавляем обработчики событий для каждого таба
  tabs.forEach(function(tab) {
      tab.addEventListener('click', function(e) {
          e.preventDefault();

          // Проверяем, не является ли выбранный таб уже активным
          if (!tab.classList.contains('active')) {
              // Удаляем активный класс у всех табов
              tabs.forEach(function(tab) {
                  tab.classList.remove('active');
              });

              // Добавляем активный класс выбранному табу
              tab.classList.add('active');

              // Получаем id соответствующего контейнера с содержимым таба
              const targetId = tab.getAttribute('href').substr(1);
              // Удаляем активный класс у всех контейнеров с содержимым табов
              document.querySelectorAll('.main-tab').forEach(function(tabContent) {
                  tabContent.classList.remove('active');
              });

              // Добавляем активный класс соответствующему контейнеру с содержимым выбранного таба
              document.getElementById(targetId).classList.add('active');
          }
      });
  });

  // Устанавливаем активный класс для первого таба при загрузке страницы
  if(tabs > 0) {
    tabs[0].classList.add('active');
  }
});

document.addEventListener("DOMContentLoaded", function() {
  // Получаем все ссылки на табы
  const tabs = document.querySelectorAll('.tabs__list a');

  // Добавляем обработчики событий для каждого таба
  tabs.forEach(function(tab) {
      tab.addEventListener('click', function(e) {
          e.preventDefault();

          // Удаляем активный класс у всех табов
          tabs.forEach(function(tab) {
              tab.classList.remove('active');
          });

          // Добавляем активный класс выбранному табу
          tab.classList.add('active');

          // Получаем id соответствующего контейнера с содержимым таба
          const targetId = tab.getAttribute('href').substr(1);

          // Удаляем активный класс у всех контейнеров с содержимым табов
          document.querySelectorAll('.voice__container').forEach(function(container) {
              container.classList.remove('active');
          });

          // Добавляем активный класс соответствующему контейнеру с содержимым выбранного таба
          document.getElementById(targetId).classList.add('active');
      });
  });

  // Устанавливаем активный класс для первого таба при загрузке страницы
  if(tabs > 0) {
    document.querySelector('.tabs__list a').classList.add('active');
  }
});


const phoneInp = document.getElementById('phone');
if(phoneInp) {
  const mask = new IMask(phoneInp, {
    mask: '+{7}(000)000-00-00'
  });
}

