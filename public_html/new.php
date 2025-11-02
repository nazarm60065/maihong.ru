<?php
$pageConfig = [
    'metaTitle' => 'Главная',
    'title' => 'Главная',
    'inlineCss' => [
        //'/local/assets/local/bundle-common/bundle-common.css',
        //'/local/assets/local/bundle-form/bundle-form.css',
        '/local/assets/local/bundle-index/bundle-index.css',
    ],
    'deferJs' => [
        //'/local/assets/local/bundle-common/bundle-common.js',
        '/local/assets/local/bundle-index/bundle-index.js',
        //'/local/assets/local/bundle-form/bundle-form.js',
    ],
    'main_class' => 'index',
    'isMainPage' => true,
]; ?>
<? include 'include/header.php';
/** @var Mustache_Engine $mustache */
?>

  <div class="container page__container">
    <div class="template_banner template_banner--v3">
      <div class="template_banner__video">
        <video autoplay="" muted="" loop="" playsinline="" poster="/upload/frontend/video_banner_poster_1.jpg">
          <source src="/upload/frontend/video_for_new_banner_h264.mp4">
        </video>
      </div>
      <div class="template_banner__text">
        <h1 class="template_banner__title">Поставка оборудования <span class="highlighted">для металлообработки</span>
        </h1>
        <ul class="template_banner__list">
          <li class="template_banner__item">Больше 300 станков в наличии</li>
          <li class="template_banner__item">Собственная сервисная служба</li>
          <li class="template_banner__item">Подбор оборудования под любые задачи</li>
        </ul>
        <div class="template_banner__button-container">
          <button class="template_banner__button button j-open-consult">
            Получить каталог
          </button>
          <img src="/local/assets/images/button.png"
               srcset="/local/assets/images/button@2x.png 2x, /local/assets/images/button.png" loading="lazy"
               alt="Получить каталог"
               class="template_banner__button-img">
        </div>
      </div>
    </div>

    <section class="why-us-wrapper">
      <div class="why-us__title">Почему именно мы?</div>
      <div class="why-us-main">
        <div class="why-us-main-card">
          <div class="why-us-main-card-bg">
            <picture>
              <source media="(max-width: 1199px)"
                      srcset="/local/assets/images/why/main1-mobile@2x.png 2x, /local/assets/images/why/main1-mobile.png">
              <img src="/local/assets/images/why/main1-desktop.png"
                   srcset="/local/assets/images/why/main1-desktop@2x.png 2x, /local/assets/images/why/main1-desktop.png"
                   alt="10 000 м²" class="why-us-main-card-bg__img" loading="lazy">
            </picture>
          </div>
          <div class="why-us-main-card__value">10 000 м²</div>
          <div class="why-us-main-card__desc">Суммарная площадь<br> склада</div>
        </div>
        <div class="why-us-main-card">
          <div class="why-us-main-card-bg">
            <picture>
              <source media="(max-width: 1199px)"
                      srcset="/local/assets/images/why/main2-mobile@2x.png 2x, /local/assets/images/why/main2-mobile.png">
              <img src="/local/assets/images/why/main2-desktop.png"
                   srcset="/local/assets/images/why/main2-desktop@2x.png 2x, /local/assets/images/why/main2-desktop.png"
                   alt="10 000 м²" class="why-us-main-card-bg__img" loading="lazy">
            </picture>
          </div>
          <div class="why-us-main-card__title">Лизинг</div>
          <div class="why-us-main-card__desc">Гибкие условия,<br> первоначальный взнос от 0%</div>
        </div>
      </div>
      <div class="why-us-list">
        <div class="why-us-card">
          <div class="why-us-card-image">
            <img src="/local/assets/images/why/image1.png"
                 srcset="/local/assets/images/why/image1@2x.png 2x, /local/assets/images/why/image1.png"
                 alt="Доступные цены"
                 class="why-us-card-image__img" loading="lazy">
          </div>
          <div class="why-us-card__title">Доступные цены</div>
          <div class="why-us-card__text">Предлагаем очень выгодную стоимость оборудования нашим партнерам</div>
        </div>
        <div class="why-us-card">
          <div class="why-us-card-image">
            <img src="/local/assets/images/why/image2.png"
                 srcset="/local/assets/images/why/image2@2x.png 2x, /local/assets/images/why/image2.png" alt="Качество"
                 class="why-us-card-image__img" loading="lazy">
          </div>
          <div class="why-us-card__title">Качество</div>
          <div class="why-us-card__text">Гарантируем качественный и&nbsp;профессиональный сервис</div>
        </div>
        <div class="why-us-card">
          <div class="why-us-card-image">
            <img src="/local/assets/images/why/image3.png"
                 srcset="/local/assets/images/why/image3@2x.png 2x, /local/assets/images/why/image3.png" alt="Качество"
                 class="why-us-card-image__img" loading="lazy">
          </div>
          <div class="why-us-card__title">Скорость</div>
          <div class="why-us-card__text">Быстро и&nbsp;качественно решаем трудности без ущерба для партнеров</div>
        </div>
        <div class="why-us-card">
          <div class="why-us-card-image">
            <img src="/local/assets/images/why/image4.png"
                 srcset="/local/assets/images/why/image4@2x.png 2x, /local/assets/images/why/image4.png" alt="Качество"
                 class="why-us-card-image__img" loading="lazy">
          </div>
          <div class="why-us-card__title">Техническая поддержка</div>
          <div class="why-us-card__text">Профессиональная установка, настройка и&nbsp;обучение в&nbsp;подарок</div>
        </div>
        <div class="why-us-card">
          <div class="why-us-card-image">
            <img src="/local/assets/images/why/image5.png"
                 srcset="/local/assets/images/why/image5@2x.png 2x, /local/assets/images/why/image5.png" alt="Качество"
                 class="why-us-card-image__img" loading="lazy">
          </div>
          <div class="why-us-card__title">Собственный сервис</div>
          <div class="why-us-card__text">Обслуживание без сторонних подрядчиков</div>
        </div>
        <div class="why-us-card">
          <div class="why-us-card-image">
            <img src="/local/assets/images/why/image6.png"
                 srcset="/local/assets/images/why/image6@2x.png 2x, /local/assets/images/why/image6.png" alt="Качество"
                 class="why-us-card-image__img" loading="lazy">
          </div>
          <div class="why-us-card__title">Персональный менеджер</div>
          <div class="why-us-card__text">Сопровождение от&nbsp;подбора до&nbsp;запуска</div>
        </div>
      </div>
    </section>
    <section class="catalog-sections-wrapper">
      <div class="catalog-sections__title">Каталог</div>
      <div class="catalog-sections-list">
        <div class="catalog-sections-card">
          <div class="catalog-sections-card-bg">
            <picture>
              <source media="(max-width: 1199px)"
                      srcset="/local/assets/images/catalog-section/image1-mobile@2x.png 2x, /local/assets/images/catalog-section/image1-mobile.png">
              <img src="/local/assets/images/catalog-section/image1-desktop.png"
                   srcset="/local/assets/images/catalog-section/image1-desktop@2x.png 2x, /local/assets/images/catalog-section/image1-desktop.png"
                   loading="lazy"
                   alt="Фрезерные станки" class="catalog-sections-card-bg__img">
            </picture>
          </div>
          <div class="catalog-sections-card__title">Фрезерные станки</div>
          <a href="#" class="link-as-card"></a>
        </div>
        <div class="catalog-sections-card">
          <div class="catalog-sections-card-bg">
            <picture>
              <source media="(max-width: 1199px)"
                      srcset="/local/assets/images/catalog-section/image2-mobile@2x.png 2x, /local/assets/images/catalog-section/image2-mobile.png">
              <img src="/local/assets/images/catalog-section/image2-desktop.png"
                   srcset="/local/assets/images/catalog-section/image2-desktop@2x.png 2x, /local/assets/images/catalog-section/image2-desktop.png"
                   loading="lazy"
                   alt="Токарные станки" class="catalog-sections-card-bg__img">
            </picture>
          </div>
          <div class="catalog-sections-card__title">Токарные станки</div>
          <a href="#" class="link-as-card"></a>
        </div>
        <div class="catalog-sections-card">
          <div class="catalog-sections-card-bg">
            <picture>
              <source media="(max-width: 1199px)"
                      srcset="/local/assets/images/catalog-section/image3-mobile@2x.png 2x, /local/assets/images/catalog-section/image3-mobile.png">
              <img src="/local/assets/images/catalog-section/image3-desktop.png"
                   srcset="/local/assets/images/catalog-section/image3-desktop@2x.png 2x, /local/assets/images/catalog-section/image3-desktop.png"
                   loading="lazy"
                   alt="5-ти осевые обрабатывающие центры" class="catalog-sections-card-bg__img">
            </picture>
          </div>
          <div class="catalog-sections-card__title">5-ти осевые обрабатывающие центры</div>
          <a href="#" class="link-as-card"></a>
        </div>
        <div class="catalog-sections-card">
          <div class="catalog-sections-card-bg">
            <picture>
              <source media="(max-width: 1199px)"
                      srcset="/local/assets/images/catalog-section/image4-mobile@2x.png 2x, /local/assets/images/catalog-section/image4-mobile.png">
              <img src="/local/assets/images/catalog-section/image4-desktop.png"
                   srcset="/local/assets/images/catalog-section/image4-desktop@2x.png 2x, /local/assets/images/catalog-section/image4-desktop.png"
                   loading="lazy"
                   alt="Лазерные станки" class="catalog-sections-card-bg__img">
            </picture>
          </div>
          <div class="catalog-sections-card__title">Лазерные станки</div>
          <a href="#" class="link-as-card"></a>
        </div>
        <div class="catalog-sections-card">
          <div class="catalog-sections-card-bg">
            <picture>
              <source media="(max-width: 1199px)"
                      srcset="/local/assets/images/catalog-section/image5-mobile@2x.png 2x, /local/assets/images/catalog-section/image5-mobile.png">
              <img src="/local/assets/images/catalog-section/image5-desktop.png"
                   srcset="/local/assets/images/catalog-section/image5-desktop@2x.png 2x, /local/assets/images/catalog-section/image5-desktop.png"
                   loading="lazy"
                   alt="Гибочные станки" class="catalog-sections-card-bg__img">
            </picture>
          </div>
          <div class="catalog-sections-card__title">Гибочные станки</div>
          <a href="#" class="link-as-card"></a>
        </div>
        <div class="catalog-sections-card">
          <div class="catalog-sections-card-bg">
            <picture>
              <source media="(max-width: 1199px)"
                      srcset="/local/assets/images/catalog-section/image6-mobile@2x.png 2x, /local/assets/images/catalog-section/image6-mobile.png">
              <img src="/local/assets/images/catalog-section/image6-desktop.png"
                   srcset="/local/assets/images/catalog-section/image6-desktop@2x.png 2x, /local/assets/images/catalog-section/image6-desktop.png"
                   loading="lazy"
                   alt="Шлифовальные станки" class="catalog-sections-card-bg__img">
            </picture>
          </div>
          <div class="catalog-sections-card__title">Шлифовальные станки</div>
          <a href="#" class="link-as-card"></a>
        </div>
        <div class="catalog-sections-card">
          <div class="catalog-sections-card-bg">
            <picture>
              <source media="(max-width: 1199px)"
                      srcset="/local/assets/images/catalog-section/image7-mobile@2x.png 2x, /local/assets/images/catalog-section/image7-mobile.png">
              <img src="/local/assets/images/catalog-section/image7-desktop.png"
                   srcset="/local/assets/images/catalog-section/image7-desktop@2x.png 2x, /local/assets/images/catalog-section/image7-desktop.png"
                   loading="lazy"
                   alt="Зубофрезерное оборудование" class="catalog-sections-card-bg__img">
            </picture>
          </div>
          <div class="catalog-sections-card__title">Зубофрезерное оборудование</div>
          <a href="#" class="link-as-card"></a>
        </div>
        <div class="catalog-sections-card">
          <div class="catalog-sections-card-bg">
            <picture>
              <source media="(max-width: 1199px)"
                      srcset="/local/assets/images/catalog-section/image8-mobile@2x.png 2x, /local/assets/images/catalog-section/image8-mobile.png">
              <img src="/local/assets/images/catalog-section/image8-desktop.png"
                   srcset="/local/assets/images/catalog-section/image8-desktop@2x.png 2x, /local/assets/images/catalog-section/image8-desktop.png"
                   loading="lazy"
                   alt="Портальные станки" class="catalog-sections-card-bg__img">
            </picture>
          </div>
          <div class="catalog-sections-card__title">Портальные станки</div>
          <a href="#" class="link-as-card"></a>
        </div>
        <div class="catalog-sections-button-container">
          <a href="#" class="catalog-sections__button">Перейти в каталог</a>
        </div>
      </div>
    </section>
    <section class="videos-wrapper">
      <div class="videos__title">Видеообзоры</div>
      <div class="videos-slider-wrapper">
        <button class="videos-slider__arrow videos-slider__arrow_prev" type="button">
          <svg style="transform: scale(-1)" xmlns="http://www.w3.org/2000/svg" width="12" height="21" fill="none"
               viewBox="0 0 12 21">
            <path fill="#da291c"
                  d="M11.25 10.312a.94.94 0 0 1-.275.663L1.6 20.35a.937.937 0 1 1-1.325-1.325l8.712-8.713L.275 1.6A.937.937 0 1 1 1.6.275l9.375 9.375a.93.93 0 0 1 .275.662" />
          </svg>
        </button>
        <div class="swiper videos-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide videos-slide">
              <div class="videos-slide-bg">
                <img src="/local/assets/images/videos/image1.png"
                     srcset="/local/assets/images/videos/image1@2x.png 2x, /local/assets/images/videos/image1.png"
                     alt="person"
                     loading="lazy"
                     class="videos-slider-bg__img">
              </div>
              <a href="#" class="link-as-card"></a>
            </div>
            <div class="swiper-slide videos-slide">
              <div class="videos-slide-bg">
                <img src="/local/assets/images/videos/image2.png"
                     srcset="/local/assets/images/videos/image2@2x.png 2x, /local/assets/images/videos/image2.png"
                     alt="person"
                     loading="lazy"
                     class="videos-slider-bg__img">
              </div>
              <a href="#" class="link-as-card"></a>
            </div>
            <div class="swiper-slide videos-slide">
              <div class="videos-slide-bg">
                <img src="/local/assets/images/videos/image3.png"
                     srcset="/local/assets/images/videos/image3@2x.png 2x, /local/assets/images/videos/image3.png"
                     alt="person"
                     loading="lazy"
                     class="videos-slider-bg__img">
              </div>
              <a href="#" class="link-as-card"></a>
            </div>
            <div class="swiper-slide videos-slide">
              <div class="videos-slide-bg">
                <img src="/local/assets/images/videos/image4.png"
                     srcset="/local/assets/images/videos/image4@2x.png 2x, /local/assets/images/videos/image4.png"
                     alt="person"
                     loading="lazy"
                     class="videos-slider-bg__img">
              </div>
              <a href="#" class="link-as-card"></a>
            </div>
            <div class="swiper-slide videos-slide">
              <div class="videos-slide-bg">
                <img src="/local/assets/images/videos/image5.png"
                     srcset="/local/assets/images/videos/image5@2x.png 2x, /local/assets/images/videos/image5.png"
                     alt="person"
                     loading="lazy"
                     class="videos-slider-bg__img">
              </div>
              <a href="#" class="link-as-card"></a>
            </div>
            <div class="swiper-slide videos-slide">
              <div class="videos-slide-bg">
                <img src="/local/assets/images/videos/image6.png"
                     srcset="/local/assets/images/videos/image6@2x.png 2x, /local/assets/images/videos/image6.png"
                     alt="person"
                     loading="lazy"
                     class="videos-slider-bg__img">
              </div>
              <a href="#" class="link-as-card"></a>
            </div>

            <div class="swiper-slide videos-slide">
              <div class="videos-slide-bg">
                <img src="/local/assets/images/videos/image1.png"
                     srcset="/local/assets/images/videos/image1@2x.png 2x, /local/assets/images/videos/image1.png"
                     alt="person"
                     loading="lazy"
                     class="videos-slider-bg__img">
              </div>
              <a href="#" class="link-as-card"></a>
            </div>
            <div class="swiper-slide videos-slide">
              <div class="videos-slide-bg">
                <img src="/local/assets/images/videos/image2.png"
                     srcset="/local/assets/images/videos/image2@2x.png 2x, /local/assets/images/videos/image2.png"
                     alt="person"
                     loading="lazy"
                     class="videos-slider-bg__img">
              </div>
              <a href="#" class="link-as-card"></a>
            </div>
          </div>
        </div>
        <button class="videos-slider__arrow videos-slider__arrow_next" type="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="21" fill="none" viewBox="0 0 12 21">
            <path fill="#da291c"
                  d="M11.25 10.312a.94.94 0 0 1-.275.663L1.6 20.35a.937.937 0 1 1-1.325-1.325l8.712-8.713L.275 1.6A.937.937 0 1 1 1.6.275l9.375 9.375a.93.93 0 0 1 .275.662" />
          </svg>
        </button>
      </div>
    </section>
    <section class="steps-wrapper">
      <div class="steps-top">
        <div class="steps__title">10 шагов к вашему оборудованию</div>
        <div class="steps__subtitle">Стабильная работа и сотни успешных поставок на протяжении 10 лет</div>
      </div>
      <div class="steps">
        <div class="steps-main">
          <div class="steps-main__text">
            Стабильная работа и сотни успешных поставок на протяжении 10 лет
          </div>
          <div class="steps-button-container">
            <a href="#" class="steps__button">Подробнее</a>
          </div>
          <div class="steps-main-image">
            <picture>
              <source media="(max-wisth: 1199px)"
                      srcset="/local/assets/images/steps/bg-mobile@2x.png 2x, /local/assets/images/steps/bg-mobile.png">
              <img src="/local/assets/images/steps/bg-desktop.png"
                   srcset="/local/assets/images/steps/bg-desktop@2x.png 2x, /local/assets/images/steps/bg-desktop.png"
                   loading="lazy"
                   alt="10 шагов к вашему оборудованию" class="steps-main-image__img">
            </picture>
          </div>
        </div>
        <div class="steps-list">
          <div class="steps-card">
            <div class="steps-card__index">1</div>
            <div class="steps-card__text">Более 300 станков в наличии на складе в Домодедово</div>
          </div>
          <div class="steps-card">
            <div class="steps-card__index">2</div>
            <div class="steps-card__text">Демонстрация перед покупкой</div>
          </div>
          <div class="steps-card">
            <div class="steps-card__index">3</div>
            <div class="steps-card__text">Быстрое оформление договора</div>
          </div>
          <div class="steps-card">
            <div class="steps-card__index">4</div>
            <div class="steps-card__text">Помощь с лизингом и субсидиями для Москвы и МО</div>
          </div>
          <div class="steps-card">
            <div class="steps-card__index">5</div>
            <div class="steps-card__text">Предпродажная подготовка</div>
          </div>
          <div class="steps-card">
            <div class="steps-card__index">6</div>
            <div class="steps-card__text">Отгрузка до 10 дней в зависимости от региона</div>
          </div>
          <div class="steps-card">
            <div class="steps-card__index">7</div>
            <div class="steps-card__text">ПНР на территории заказчика</div>
          </div>
          <div class="steps-card">
            <div class="steps-card__index">8</div>
            <div class="steps-card__text">Собственный сервис</div>
          </div>
          <div class="steps-card">
            <div class="steps-card__index">9</div>
            <div class="steps-card__text">Гарантия и постгарантийное обслуживание</div>
          </div>
          <div class="steps-card">
            <div class="steps-card__index">10</div>
            <div class="steps-card__text">Запчасти всегда в наличии</div>
          </div>
        </div>
      </div>
    </section>
  </div>


<? include 'include/footer.php';

