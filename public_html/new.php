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
<? include 'include/header2.php';
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
          <a href="#" class="link-as-card"></a>
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
          <a href="#" class="link-as-card"></a>
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

    <div class="template_geography template_geography--v2 template_geography--v3">
      <div class="template_geography__header">
        <h2>Мы на карте</h2>

        <p>Компания «Майхонг Трейдинг» успешно поставляет металлообрабатывающее оборудование по всей России и СНГ.</p>
        <p>Мы реализуем широкий ассортимент станков — лазерные, токарные, фрезерные, гибочные, обрабатывающие центры и
          другое профессиональное оборудование.</p>
        <p>Благодаря высокому качеству техники и надёжной работе каждого станка, наши клиенты добиваются стабильных
          результатов в производстве и рекомендуют «Майхонг» своим партнёрам и коллегам.</p>
      </div>
      <div class="template_geography__bg">
        <div class="template_geography__points" data-type="representatives">
          <div class="template_geography__point j-show-review" data-citi-id="2214" data-city="Москва">
            <div class="template_geography__hint">Москва</div>
          </div>
          <div class="template_geography__point j-show-review" data-citi-id="2213" data-city="Санкт-Петербург">
            <div class="template_geography__hint">Санкт-Петербург</div>
          </div>
          <div class="template_geography__point j-show-review" data-citi-id="2212" data-city="Краснодар">
            <div class="template_geography__hint">Краснодар</div>
          </div>
          <div class="template_geography__point j-show-review" data-citi-id="2211" data-city="Екатеринбург">
            <div class="template_geography__hint">Екатеринбург</div>
          </div>
          <div class="template_geography__point j-show-review" data-citi-id="2210" data-city="Новосибирск">
            <div class="template_geography__hint">Новосибирск</div>
          </div>
          <div class="template_geography__point j-show-review" data-citi-id="2209" data-city="Владивосток">
            <div class="template_geography__hint">Владивосток</div>
          </div>
        </div>
        <div class="template_geography__points template_geography__points--active" data-type="engineers">
          <div class="template_geography__point" data-place="main">
            <div class="template_geography__hint">Москва</div>
          </div>
          <div class="template_geography__point j-show-review" data-citi-id="2178" data-city="Екатеринбург">
            <div class="template_geography__hint">Екатеринбург</div>
          </div>
          <div class="template_geography__point j-show-review" data-citi-id="2175" data-city="Казань">
            <div class="template_geography__hint">Казань</div>
          </div>
          <div class="template_geography__point j-show-review" data-citi-id="2173" data-city="Краснодар">
            <div class="template_geography__hint">Краснодар</div>
          </div>
          <div class="template_geography__point j-show-review" data-citi-id="2172" data-city="Саратов">
            <div class="template_geography__hint">Саратов</div>
          </div>
          <div class="template_geography__point j-show-review" data-citi-id="18" data-city="Волгоград">
            <div class="template_geography__hint">Волгоград</div>
          </div>
        </div>
      </div>
      <div class="template_geography__symbols">
        <h3>Обозначения маркеров</h3>
        <div class="symbols">
          <div class="symbols__item j-show-symbols" data-type="representatives">
            <div class="symbols__icon">
              <img src="/local/assets/images/geo_map_symbol5.svg" alt="Метка на карте">
              <img src="/local/assets/images/geo_map_symbol4.svg" alt="Метка на карте">
            </div>
            <div class="symbols__text">Офисы и склады оборудования</div>
          </div>
          <div class="symbols__item j-show-symbols symbols__item--active" data-type="engineers">
            <div class="symbols__icon">
              <img src="/local/assets/images/geo_map_symbol5.svg" alt="Метка на карте">
              <img src="/local/assets/images/geo_map_symbol4.svg" alt="Метка на карте">
            </div>
            <div class="symbols__text">Инженеры</div>
          </div>
        </div>
      </div>
    </div>

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
    <section class="work-wrapper">
      <div class="work__title">Наше оборудование в работе</div>
      <div class="work-tabs">
        <div class="swiper work-tabs-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide work-tabs-slide">
              <button class="work-tabs-slide__button" type="button" data-tab="Лазерное оборудование" data-index="0">
                Лазерное оборудование
              </button>
            </div>
            <div class="swiper-slide work-tabs-slide">
              <button class="work-tabs-slide__button" type="button" data-tab="Токарное оборудование" data-index="1">
                Токарное оборудование
              </button>
            </div>
            <div class="swiper-slide work-tabs-slide">
              <button class="work-tabs-slide__button" type="button" data-tab="Фрезерное оборудование" data-index="2">
                Фрезерное оборудование
              </button>
            </div>
            <div class="swiper-slide work-tabs-slide">
              <button class="work-tabs-slide__button" type="button" data-tab="Гибочное оборудование1" data-index="3">
                Гибочное оборудование
              </button>
            </div>
            <div class="swiper-slide work-tabs-slide">
              <button class="work-tabs-slide__button" type="button" data-tab="Гибочное оборудование2" data-index="4">
                Гибочное оборудование
              </button>
            </div>
            <div class="swiper-slide work-tabs-slide">
              <button class="work-tabs-slide__button" type="button" data-tab="Гибочное оборудование3" data-index="5">
                Гибочное оборудование
              </button>
            </div>
          </div>
        </div>
        <div class="work-panels">
          <div class="work-panel" data-tab="Лазерное оборудование">
            <div class="work-inner-tabs">
              <div class="work-expander">
                <div class="work-expander-hidden">
                  <div class="dropdown work-dropdown">
                    <button class="dropdown-current work-dropdown-current" type="button">
                      <span class="dropdown-current__text work-dropdown-current__text">Краснодар</span>
                      <span class="dropdown-current__icon work-dropdown-current__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" fill="none" viewBox="0 0 11 20"><path
                      fill="#909090"
                      d="M10.5 9.625a.87.87 0 0 0-.256-.619L1.494.256A.874.874 0 1 0 .256 1.494l8.132 8.131-8.132 8.131a.874.874 0 1 0 1.238 1.238l8.75-8.75a.87.87 0 0 0 .256-.619" /></svg>
                </span>
                    </button>
                    <div class="dropdown-hidden work-dropdown-hidden">
                      <div class="dropdown-list work-dropdown-list">
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Краснодар" data-tab="Краснодар">Краснодар
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Новгород" data-tab="Новгород">Новгород
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Богданович" data-tab="Богданович">Богданович
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Москва" data-tab="Москва">Москва</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Калуга" data-tab="Калуга">Калуга</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Санкт-Петербург" data-tab="Санкт-Петербург">
                            Санкт-Петербург
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Саратов" data-tab="Саратов">Саратов</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Тюмень" data-tab="Тюмень">Тюмень</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Благовещенск" data-tab="Благовещенск">
                            Благовещенск
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Хабаровск" data-tab="Хабаровск">Хабаровск
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-expander-toggle-container">
                  <button class="work-expander__toggle" type="button">Показать все</button>
                </div>
              </div>
              <div class="work-inner-tabs-panels">
                <div class="work-inner-tabs-panel" data-tab="Краснодар">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>
                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Новгород">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Богданович">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Москва">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Калуга">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Санкт-Петербург">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Саратов">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Тюмень">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Благовещенск">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Хабаровск">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="work-panel" data-tab="Токарное оборудование">
            <div class="work-inner-tabs">
              <div class="work-expander">
                <div class="work-expander-hidden">
                  <div class="dropdown work-dropdown">
                    <button class="dropdown-current work-dropdown-current" type="button">
                      <span class="dropdown-current__text work-dropdown-current__text">Краснодар</span>
                      <span class="dropdown-current__icon work-dropdown-current__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" fill="none" viewBox="0 0 11 20"><path
                      fill="#909090"
                      d="M10.5 9.625a.87.87 0 0 0-.256-.619L1.494.256A.874.874 0 1 0 .256 1.494l8.132 8.131-8.132 8.131a.874.874 0 1 0 1.238 1.238l8.75-8.75a.87.87 0 0 0 .256-.619" /></svg>
                </span>
                    </button>
                    <div class="dropdown-hidden work-dropdown-hidden">
                      <div class="dropdown-list work-dropdown-list">
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Краснодар" data-tab="Краснодар">Краснодар
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Новгород" data-tab="Новгород">Новгород
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Богданович" data-tab="Богданович">Богданович
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Москва" data-tab="Москва">Москва</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Калуга" data-tab="Калуга">Калуга</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Санкт-Петербург" data-tab="Санкт-Петербург">
                            Санкт-Петербург
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Саратов" data-tab="Саратов">Саратов</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Тюмень" data-tab="Тюмень">Тюмень</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Благовещенск" data-tab="Благовещенск">
                            Благовещенск
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Хабаровск" data-tab="Хабаровск">Хабаровск
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-expander-toggle-container">
                  <button class="work-expander__toggle" type="button">Показать все</button>
                </div>
              </div>
              <div class="work-inner-tabs-panels">
                <div class="work-inner-tabs-panel" data-tab="Краснодар">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Новгород">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Богданович">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Москва">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Калуга">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Санкт-Петербург">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Саратов">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Тюмень">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Благовещенск">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Хабаровск">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="work-panel" data-tab="Фрезерное оборудование">
            <div class="work-inner-tabs">
              <div class="work-expander">
                <div class="work-expander-hidden">
                  <div class="dropdown work-dropdown">
                    <button class="dropdown-current work-dropdown-current" type="button">
                      <span class="dropdown-current__text work-dropdown-current__text">Краснодар</span>
                      <span class="dropdown-current__icon work-dropdown-current__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" fill="none" viewBox="0 0 11 20"><path
                      fill="#909090"
                      d="M10.5 9.625a.87.87 0 0 0-.256-.619L1.494.256A.874.874 0 1 0 .256 1.494l8.132 8.131-8.132 8.131a.874.874 0 1 0 1.238 1.238l8.75-8.75a.87.87 0 0 0 .256-.619" /></svg>
                </span>
                    </button>
                    <div class="dropdown-hidden work-dropdown-hidden">
                      <div class="dropdown-list work-dropdown-list">
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Краснодар" data-tab="Краснодар">Краснодар
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Новгород" data-tab="Новгород">Новгород
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Богданович" data-tab="Богданович">Богданович
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Москва" data-tab="Москва">Москва</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Калуга" data-tab="Калуга">Калуга</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Санкт-Петербург" data-tab="Санкт-Петербург">
                            Санкт-Петербург
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Саратов" data-tab="Саратов">Саратов</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Тюмень" data-tab="Тюмень">Тюмень</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Благовещенск" data-tab="Благовещенск">
                            Благовещенск
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Хабаровск" data-tab="Хабаровск">Хабаровск
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-expander-toggle-container">
                  <button class="work-expander__toggle" type="button">Показать все</button>
                </div>
              </div>
              <div class="work-inner-tabs-panels">
                <div class="work-inner-tabs-panel" data-tab="Краснодар">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Новгород">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Богданович">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Москва">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Калуга">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Санкт-Петербург">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Саратов">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Тюмень">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Благовещенск">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Хабаровск">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="work-panel" data-tab="Гибочное оборудование1">
            <div class="work-inner-tabs">
              <div class="work-expander">
                <div class="work-expander-hidden">
                  <div class="dropdown work-dropdown">
                    <button class="dropdown-current work-dropdown-current" type="button">
                      <span class="dropdown-current__text work-dropdown-current__text">Краснодар</span>
                      <span class="dropdown-current__icon work-dropdown-current__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" fill="none" viewBox="0 0 11 20"><path
                      fill="#909090"
                      d="M10.5 9.625a.87.87 0 0 0-.256-.619L1.494.256A.874.874 0 1 0 .256 1.494l8.132 8.131-8.132 8.131a.874.874 0 1 0 1.238 1.238l8.75-8.75a.87.87 0 0 0 .256-.619" /></svg>
                </span>
                    </button>
                    <div class="dropdown-hidden work-dropdown-hidden">
                      <div class="dropdown-list work-dropdown-list">
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Краснодар" data-tab="Краснодар">Краснодар
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Новгород" data-tab="Новгород">Новгород
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Богданович" data-tab="Богданович">Богданович
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Москва" data-tab="Москва">Москва</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Калуга" data-tab="Калуга">Калуга</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Санкт-Петербург" data-tab="Санкт-Петербург">
                            Санкт-Петербург
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Саратов" data-tab="Саратов">Саратов</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Тюмень" data-tab="Тюмень">Тюмень</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Благовещенск" data-tab="Благовещенск">
                            Благовещенск
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Хабаровск" data-tab="Хабаровск">Хабаровск
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-expander-toggle-container">
                  <button class="work-expander__toggle" type="button">Показать все</button>
                </div>
              </div>
              <div class="work-inner-tabs-panels">
                <div class="work-inner-tabs-panel" data-tab="Краснодар">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Новгород">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Богданович">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Москва">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Калуга">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Санкт-Петербург">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Саратов">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Тюмень">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Благовещенск">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Хабаровск">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="work-panel" data-tab="Гибочное оборудование2">
            <div class="work-inner-tabs">
              <div class="work-expander">
                <div class="work-expander-hidden">
                  <div class="dropdown work-dropdown">
                    <button class="dropdown-current work-dropdown-current" type="button">
                      <span class="dropdown-current__text work-dropdown-current__text">Краснодар</span>
                      <span class="dropdown-current__icon work-dropdown-current__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" fill="none" viewBox="0 0 11 20"><path
                      fill="#909090"
                      d="M10.5 9.625a.87.87 0 0 0-.256-.619L1.494.256A.874.874 0 1 0 .256 1.494l8.132 8.131-8.132 8.131a.874.874 0 1 0 1.238 1.238l8.75-8.75a.87.87 0 0 0 .256-.619" /></svg>
                </span>
                    </button>
                    <div class="dropdown-hidden work-dropdown-hidden">
                      <div class="dropdown-list work-dropdown-list">
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Краснодар" data-tab="Краснодар">Краснодар
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Новгород" data-tab="Новгород">Новгород
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Богданович" data-tab="Богданович">Богданович
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Москва" data-tab="Москва">Москва</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Калуга" data-tab="Калуга">Калуга</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Санкт-Петербург" data-tab="Санкт-Петербург">
                            Санкт-Петербург
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Саратов" data-tab="Саратов">Саратов</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Тюмень" data-tab="Тюмень">Тюмень</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Благовещенск" data-tab="Благовещенск">
                            Благовещенск
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Хабаровск" data-tab="Хабаровск">Хабаровск
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-expander-toggle-container">
                  <button class="work-expander__toggle" type="button">Показать все</button>
                </div>
              </div>
              <div class="work-inner-tabs-panels">
                <div class="work-inner-tabs-panel" data-tab="Краснодар">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Новгород">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Богданович">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Москва">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Калуга">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Санкт-Петербург">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Саратов">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Тюмень">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Благовещенск">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Хабаровск">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="work-panel" data-tab="Гибочное оборудование3">
            <div class="work-inner-tabs">
              <div class="work-expander">
                <div class="work-expander-hidden">
                  <div class="dropdown work-dropdown">
                    <button class="dropdown-current work-dropdown-current" type="button">
                      <span class="dropdown-current__text work-dropdown-current__text">Краснодар</span>
                      <span class="dropdown-current__icon work-dropdown-current__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" fill="none" viewBox="0 0 11 20"><path
                      fill="#909090"
                      d="M10.5 9.625a.87.87 0 0 0-.256-.619L1.494.256A.874.874 0 1 0 .256 1.494l8.132 8.131-8.132 8.131a.874.874 0 1 0 1.238 1.238l8.75-8.75a.87.87 0 0 0 .256-.619" /></svg>
                </span>
                    </button>
                    <div class="dropdown-hidden work-dropdown-hidden">
                      <div class="dropdown-list work-dropdown-list">
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Краснодар" data-tab="Краснодар">Краснодар
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Новгород" data-tab="Новгород">Новгород
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Богданович" data-tab="Богданович">Богданович
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Москва" data-tab="Москва">Москва</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Калуга" data-tab="Калуга">Калуга</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Санкт-Петербург" data-tab="Санкт-Петербург">
                            Санкт-Петербург
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Саратов" data-tab="Саратов">Саратов</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Тюмень" data-tab="Тюмень">Тюмень</button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Благовещенск" data-tab="Благовещенск">
                            Благовещенск
                          </button>
                        </div>
                        <div class="work-dropdown-item">
                          <button class="work-dropdown__button" data-value="Хабаровск" data-tab="Хабаровск">Хабаровск
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-expander-toggle-container">
                  <button class="work-expander__toggle" type="button">Показать все</button>
                </div>
              </div>
              <div class="work-inner-tabs-panels">
                <div class="work-inner-tabs-panel" data-tab="Краснодар">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Новгород">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Богданович">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Москва">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Калуга">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Санкт-Петербург">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Саратов">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Тюмень">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Благовещенск">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="work-inner-tabs-panel" data-tab="Хабаровск">
                  <div class="work-item">
                    <div class="work-item-top">
                      <div class="work-item__title">Лазерный станок для резки листового металла ML3015GP</div>
                      <div class="work-item__city">город Краснодар</div>
                    </div>
                    <div class="work-item-content">
                      <div class="swiper work-item-slider">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                          <div class="swiper-slide work-item-slide">
                            <img src="/local/assets/images/work/item.png"
                                 srcset="/local/assets/images/work/item@2x.png 2x, /local/assets/images/work/item.png"
                                 loading="lazy"
                                 alt="Лазерный станок для резки листового металла ML3015GP"
                                 class="work-item-slide__img">
                          </div>
                        </div>
                        <div class="work-item-slider-arrows">
                          <button class="work-item-slider__arrow work-item-slider__arrow_prev" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M0 11a1 1 0 0 0 .293.707l10 10a1 1 0 1 0 1.414-1.414L2.414 11l9.293-9.293A1 1 0 1 0 10.293.293l-10 10A1 1 0 0 0 0 11" />
                            </svg>
                          </button>
                          <button class="work-item-slider__arrow work-item-slider__arrow_next" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" fill="none"
                                 viewBox="0 0 12 22">
                              <path fill="#da291c"
                                    d="M12 11a1 1 0 0 0-.293-.707l-10-10A1 1 0 1 0 .293 1.707L9.586 11 .293 20.293a1 1 0 1 0 1.414 1.414l10-10A1 1 0 0 0 12 11" />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="work-item-info">
                        <div class="work-item-video">
                          <div class="work-item-video-preview">
                            <img src="/local/assets/images/work/preview.png"
                                 srcset="/local/assets/images/work/preview@2x.png 2x, /local/assets/images/work/preview.png"
                                 loading="lazy"
                                 alt="Видео от клиента" class="work-item-video-preview__img">
                            <div class="work-item-video-preview__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none"
                                   viewBox="0 0 60 60">
                                <path fill="#fff"
                                      d="M30 0C13.432 0 0 13.431 0 30s13.432 30 30 30 30-13.431 30-30S46.568 0 30 0m10.369 31.59-15 9.375a1.874 1.874 0 0 1-2.869-1.59v-18.75a1.874 1.874 0 0 1 2.869-1.59l15 9.375a1.877 1.877 0 0 1 0 3.18" />
                              </svg>
                            </div>
                            <a href="#" class="link-as-card"></a>
                          </div>
                          <div class="work-item-video__caption">Видео от клиента</div>
                          <div class="work-item-video-button-container">
                            <a href="#" class="work-item-video__button">Посмотреть видео от клиента</a>
                          </div>
                        </div>

                        <div class="work-item-button-container">
                          <a href="#" class="work-item__button">Перейти к товару</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
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

  <div class="float-contacts">
    <div class="float-contacts-menu">
      <div class="float-contacts-menu-item">
        <a href="#" class="float-contacts-menu-item__link">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="23" fill="none" viewBox="0 0 20 23">
            <path fill="#23a0dc"
                  d="m19.942 4.402-3.018 14.232c-.227 1.004-.821 1.255-1.665.781l-4.598-3.388-2.219 2.134c-.245.245-.45.45-.924.45l.33-4.682 8.523-7.701c.37-.33-.08-.514-.576-.183L5.259 12.679l-4.536-1.42c-.986-.308-1.004-.987.206-1.46l17.74-6.835c.822-.308 1.541.183 1.273 1.438" />
          </svg>
        </a>
      </div>
      <div class="float-contacts-menu-item">
        <a href="#" class="float-contacts-menu-item__link">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="29" fill="none" viewBox="0 0 28 29">
            <path fill="#2d8b03"
                  d="M14.023 25.473h-.005a11.54 11.54 0 0 1-5.882-1.611l-.422-.25-4.374 1.147 1.168-4.265-.275-.437a11.53 11.53 0 0 1-1.767-6.151C2.468 7.534 7.653 2.35 14.028 2.35a11.48 11.48 0 0 1 8.17 3.389 11.49 11.49 0 0 1 3.383 8.176c-.003 6.373-5.188 11.558-11.558 11.558" />
            <path fill="#f7f7f8" fill-rule="evenodd"
                  d="M20.36 16.816c-.348-.174-2.056-1.014-2.375-1.13s-.55-.174-.782.174-.897 1.13-1.1 1.362c-.202.232-.405.261-.752.087-.348-.174-1.468-.54-2.795-1.724-1.032-.922-1.73-2.06-1.932-2.407-.203-.348-.022-.536.152-.71.156-.155.347-.405.521-.608s.232-.348.348-.58.058-.434-.03-.608c-.086-.174-.781-1.884-1.07-2.58-.283-.677-.57-.586-.782-.596-.203-.01-.435-.013-.666-.013s-.608.087-.927.435c-.318.348-1.216 1.189-1.216 2.898S8.2 14.18 8.373 14.412s2.45 3.741 5.935 5.246a20 20 0 0 0 1.98.732c.833.264 1.59.227 2.19.137.667-.1 2.055-.84 2.344-1.652.29-.811.29-1.507.203-1.652s-.318-.232-.666-.406"
                  clip-rule="evenodd" />
          </svg>
        </a>
      </div>
      <div class="float-contacts-menu-item">
        <a href="#" class="float-contacts-menu-item__link">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20">
            <path fill="#101820" fill-rule="evenodd"
                  d="M2.357.638a2.18 2.18 0 0 1 3.262.204l2.244 2.882a2.18 2.18 0 0 1 .394 1.868l-.684 2.737a.85.85 0 0 0 .222.804l3.072 3.072a.85.85 0 0 0 .804.222l2.737-.684a2.19 2.19 0 0 1 1.867.394l2.883 2.243a2.18 2.18 0 0 1 .203 3.263l-1.292 1.293c-.925.925-2.308 1.331-3.596.878a23.25 23.25 0 0 1-8.763-5.526A23.25 23.25 0 0 1 .186 5.527c-.453-1.288-.047-2.672.878-3.597z"
                  clip-rule="evenodd" />
          </svg>
        </a>
      </div>
      <div class="float-contacts-menu-item">
        <a href="#" class="float-contacts-menu-item__link">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="20" fill="none" viewBox="0 0 26 20">
            <path fill="#da291c" fill-rule="evenodd"
                  d="M23.4 0H2.6A2.62 2.62 0 0 0 .24 1.453q.212.044.399.17L13 9.942l12.361-8.32c.124-.084.26-.14.399-.17A2.62 2.62 0 0 0 23.4 0M26 3.808l-12.361 8.32a1.15 1.15 0 0 1-1.278 0L0 3.808V17.5C0 18.875 1.17 20 2.6 20h20.8c1.43 0 2.6-1.125 2.6-2.5z"
                  clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
    <button class="float-contacts__button">
    <span class="float-contacts__icon float-contacts__icon_close">
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 32 32"><path fill="#fff"
                                                                                                           d="M5.356 23.788a2 2 0 0 1 .574 1.602 22 22 0 0 1-.796 4c2.79-.646 4.494-1.394 5.268-1.786a2 2 0 0 1 1.42-.148c1.363.365 2.767.548 4.178.544 7.992 0 14-5.614 14-12S23.992 4 16 4 2 9.616 2 16c0 2.936 1.234 5.66 3.356 7.788m-.986 7.81q-.712.141-1.426.258c-.4.064-.704-.352-.546-.724q.266-.629.488-1.274l.006-.02c.496-1.44.9-3.096 1.048-4.638C1.486 22.74 0 19.52 0 16 0 8.268 7.164 2 16 2s16 6.268 16 14-7.164 14-16 14a18 18 0 0 1-4.694-.612c-1.04.526-3.278 1.484-6.936 2.21" /><path
          fill="#fff"
          d="M8 11a1 1 0 0 1 1-1h14a1 1 0 0 1 0 2H9a1 1 0 0 1-1-1m0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 0 2H9a1 1 0 0 1-1-1m0 5a1 1 0 0 1 1-1h8a1 1 0 0 1 0 2H9a1 1 0 0 1-1-1" /></svg>
    </span>
      <span class="float-contacts__icon float-contacts__icon_open">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="23" fill="none" viewBox="0 0 24 23"><rect width="30"
                                                                                                           height="2"
                                                                                                           x=".726"
                                                                                                           y="21.214"
                                                                                                           fill="#fff"
                                                                                                           rx="1"
                                                                                                           transform="rotate(-45 .726 21.214)" /><rect
          width="30" height="2" x=".824" y="21.346" fill="#fff" rx="1" transform="rotate(-45 .824 21.346)" /><rect
          width="30" height="2" x="1.415" y=".028" fill="#fff" rx="1" transform="rotate(45 1.415 .028)" /></svg>
    </span>
    </button>
  </div>

<? include 'include/footer.php';

