<?php
/** @var array $pageConfig */

$mustache = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/local/assets/mustache/'),
));
?>

</div>
</main>
<footer class="footer footer--v2">
  <div class="container footer__container">
    <div class="footer__top">
      <div class="footer__top_left">
        <div class="footer__logo logo">
          <a href="/" class="logo__link">
            <picture class="block_flex">
              <source srcset="/upload/frontend/logo_white_mob.svg" media="(max-width: 767px)">
              <img class="img_contain" src="https://maihong.ru/upload/frontend/logo_white.svg" alt="Майхонг">
            </picture>
          </a>
        </div>
      </div>
      <div class="footer__top_right">
        <button class="footer__button button button--white j-open-call">Заказать обратный звонок</button>
      </div>
    </div>
    <div class="footer__main">
      <div class="footer_section">
        <div class="footer_section__title">
          <a href="/catalog/" class="footer_section__link">Каталог</a>
        </div>

        <ul class="footer_section__list">
          <li class="footer_section__item">
            <a href="/catalog/lasernoe-oborudovanie/" class="footer_section__link">Лазерное оборудование</a>
          </li>
          <li class="footer_section__item">
            <a href="/catalog/lasernoe-oborudovanie/apparaty-lazernoy-svarki/" class="footer_section__link">Аппараты лазерной сварки</a>
          </li>
          <li class="footer_section__item">
            <a href="/catalog/lasernoe-oborudovanie/apparaty-lazernoy-chistki/" class="footer_section__link">Аппараты лазерной чистки</a>
          </li>
          <li class="footer_section__item">
            <a href="/catalog/lasernoe-oborudovanie/apparaty-3v1-ochistka/" class="footer_section__link">Аппараты 3в1 (очистка)</a>
          </li>
          <li class="footer_section__item">
            <a href="/catalog/frezernye-stanki-po-metallu/" class="footer_section__link">Фрезерные станки</a>
          </li>
          <li class="footer_section__item">
            <a href="/catalog/tokarnoe-oborudovanie/" class="footer_section__link">Токарные станки</a>
          </li>
          <li class="footer_section__item">
            <a href="/catalog/other/zapchasti/" class="footer_section__link">Запчасти</a>
          </li>
          <li class="footer_section__item">
            <a href="/catalog/gibochnye-stanki/" class="footer_section__link">Гибочное оборудование</a>
          </li>
        </ul>
      </div>
      <div class="footer_section">
        <div class="footer_section__title">
          <span class="footer_section__link">Клиентам</span>
        </div>

        <ul class="footer_section__list">
          <li class="footer_section__item">
            <a href="/about/" class="footer_section__link">О компании</a>
          </li>
          <li class="footer_section__item">
            <a href="/services/" class="footer_section__link">Сервис и&nbsp;услуги</a>
          </li>
          <li class="footer_section__item">
            <a href="/delivery/" class="footer_section__link">Доставка</a>
          </li>
          <li class="footer_section__item">
            <a href="/news/" class="footer_section__link">Новости</a>
          </li>
          <li class="footer_section__item">
            <a href="/blog/" class="footer_section__link">Статьи</a>
          </li>
          <li class="footer_section__item">
            <a href="/contacts/" class="footer_section__link">Контакты</a>
          </li>
          <li class="footer_section__item">
            <a href="/reviews/" class="footer_section__link">Отзывы</a>
          </li>
          <li class="footer_section__item">
            <a href="/vacancies/" class="footer_section__link">Вакансии</a>
          </li>
        </ul>
      </div>
      <div class="footer__contacts">
        <div class="footer__contacts_block">
          <div class="footer_section__title">
            <span class="footer_section__link">Контакты</span>
          </div>
          <div class="footer__phone phone">
            <a href="tel:+78007002985" class="phone__link"> <span class="phone__text">8 (800) 700-29-85</span> </a>                    </div>
          <div class="footer__social social">
            <div class="social__item">
              <a href="https://t.me/maihong_tg" class="social__link" target="_blank">
    <span class="social__icon block_flex">
        <img src="https://maihong.ru/upload/frontend/tg_icon_maihong.svg" alt="Telegram" class="img_contain social__img--black">
    </span>
              </a>                        </div>
            <div class="social__item">
              <a href="https://api.whatsapp.com/send/?phone=79647731808&amp;text=Здравствуйте! Номер моей заявки: 205451" class="social__link" target="_blank">
    <span class="social__icon block_flex">
        <img src="https://maihong.ru/upload/frontend/whatsapp_icon_maihong.svg" alt="WhatsApp" class="img_contain social__img--black">
    </span>
              </a>                        </div>
          </div>
          <div class="footer__buttons">
            <button class="footer__button button button--white j-open-call">Обратный звонок</button>
            <button class="footer__button button button--black j-open-help">Помощь в подборе станка</button>
          </div>
        </div>
        <div class="footer__contacts_block footer__contacts_block--social">
          <div class="footer_section__title">
            <span class="footer_section__link">Мы в соцсетях</span>
          </div>
          <div class="footer__social social">
            <div class="social__item">
              <a href="https://t.me/maihong_tg" class="social__link" target="_blank">
    <span class="social__icon block_flex">
        <img src="https://maihong.ru/upload/frontend/tg_icon_maihong.svg" alt="Telegram" class="img_contain social__img--black">
    </span>
              </a>                        </div>
            <div class="social__item">
              <a href="https://vk.com/club223327665" class="social__link" target="_blank">
    <span class="social__icon block_flex">
        <img src="https://maihong.ru/upload/frontend/vk_icon_maihong.svg" alt="Вконтакте" class="img_contain social__img--black">
    </span>
              </a>                        </div>
            <div class="social__item">
              <a href="https://vkvideo.ru/@maihong/" class="social__link" target="_blank">
    <span class="social__icon block_flex">
        <img src="https://maihong.ru/upload/frontend/vkvideo_icon_maihong.svg" alt="VK Видео" class="img_contain social__img--black">
    </span>
              </a>                        </div>
            <div class="social__item">
              <a href="https://www.youtube.com/@maihongofficial" class="social__link" target="_blank">
    <span class="social__icon block_flex">
        <img src="https://maihong.ru/upload/frontend/youtube_icon_maihong.svg" alt="YouTube" class="img_contain social__img--black">
    </span>
              </a>                        </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <p class="footer__copyright copyright">2025, MaihongTrading</p>
      <div class="footer__links">
        <a href="/upload/docs/Майхонг Трейдинг Политика.pdf" class="footer__link" target="_blank">Политика обработки данных</a>
        <a href="/upload/docs/Cookies  согласие Форма.pdf" class="footer__link" target="_blank">Cookies Форма - Согласие</a>
        <a href="/upload/docs/Майхонг_Трейдинг_Согласие_на_обработку_персоальных_данных_на_сайте.pdf" class="footer__link" target="_blank">Согласие на обработку персоальных данных на сайте</a>
        <a href="/upload/docs/Пользовательское Соглашение.pdf" class="footer__link" target="_blank">Пользовательское Соглашение</a>
      </div>
    </div>
  </div>
</footer>

<div class="menu_shadow"></div>
<div class="menu_popup">
  <div class="menu_popup__inner">
    <div class="menu_popup__sections">


      <div class="menu_popup__section">
        <div class="menu_popup__title">
          <a href="/catalog/" class="menu_popup__link">Каталог</a>
        </div>
        <div class="menu_popup__back j-menu-back">
          Назад
        </div>
        <ul class="menu_popup__list">
          <li class="menu_popup__item">
            <span class="menu_popup__item_inner">Лазерное оборудование</span>
            <ul>
              <li>
                <a href="/catalog/lasernoe-oborudovanie/" class="menu_popup__title">Лазерное оборудование</a>
              </li>
              <li>
                <a href="/catalog/lasernoe-oborudovanie/apparaty-3v1-ochistka/" class="menu_popup__link">Аппараты 3в1 (очистка)</a>
              </li>
              <li>
                <a href="/catalog/lasernoe-oborudovanie/apparaty-lazernoy-svarki/" class="menu_popup__link">Аппараты лазерной сварки</a>
              </li>
              <li>
                <a href="/catalog/lasernoe-oborudovanie/apparaty-lazernoy-chistki/" class="menu_popup__link">Аппараты лазерной чистки</a>
              </li>
              <li>
                <a href="/catalog/lasernoe-oborudovanie/dlya-rezki-lista-s-odnim-stolom/" class="menu_popup__link">Для резки листа с одним столом</a>
              </li>
              <li>
                <a href="/catalog/lasernoe-oborudovanie/dlya-rezki-lista-so-smennym-stolom/" class="menu_popup__link">Для резки листа со сменным столом</a>
              </li>
              <li>
                <a href="/catalog/lasernoe-oborudovanie/dlya-rezki-lista-so-smennym-stolom-i-zashchitnoy-kabinoy/" class="menu_popup__link">Для резки листа со сменным столом и защитной кабиной</a>
              </li>
              <li>
                <a href="/catalog/lasernoe-oborudovanie/lazernye-stanki-kombinirovannye/" class="menu_popup__link">Лазерные станки комбинированные</a>
              </li>
              <li>
                <a href="/catalog/lasernoe-oborudovanie/dlya-rezki-trub-i-profilya/" class="menu_popup__link">Лазерные труборезы</a>
              </li>
            </ul>
          </li>
          <li class="menu_popup__item">
            <span class="menu_popup__item_inner">Гибочные станки</span>
            <ul>
              <li>
                <a href="/catalog/gibochnye-stanki/" class="menu_popup__title">Гибочные станки</a>
              </li>
              <li>
                <a href="/catalog/gibochnye-stanki/listogibochnye-pressy/" class="menu_popup__link">Листогибочные прессы</a>
              </li>
              <li>
                <a href="/catalog/gibochnye-stanki/trubogiby/" class="menu_popup__link">Трубогибы</a>
              </li>
            </ul>
          </li>
          <li class="menu_popup__item">
            <a href="/catalog/gilotinnye-nozhnitsy/" class="menu_popup__link">Гильотинные ножницы</a>
          </li>
          <li class="menu_popup__item">
            <span class="menu_popup__item_inner">Токарноe оборудование</span>
            <ul>
              <li>
                <a href="/catalog/tokarnoe-oborudovanie/" class="menu_popup__title">Токарноe оборудование</a>
              </li>
              <li>
                <a href="/catalog/tokarnoe-oborudovanie/vertikalnye-tokarnye-stanki/" class="menu_popup__link">Вертикальные токарные станки</a>
              </li>
              <li>
                <a href="/catalog/tokarnoe-oborudovanie/tokarno-vintoreznye-stanki/" class="menu_popup__link">Токарно-винторезные станки</a>
              </li>
              <li>
                <a href="/catalog/tokarnoe-oborudovanie/tokarno-karuselnye-stanki/" class="menu_popup__link">Токарно-карусельные станки</a>
              </li>
              <li>
                <a href="/catalog/tokarnoe-oborudovanie/tokarno-frezernye-stanki-s-chpu-obrabatyvayushchie-tsentry/" class="menu_popup__link">Токарно-фрезерные станки с ЧПУ / обрабатывающие центры</a>
              </li>
              <li>
                <a href="/catalog/tokarnoe-oborudovanie/tokarnye-avtomaty/" class="menu_popup__link">Токарные автоматы</a>
              </li>
              <li>
                <a href="/catalog/tokarnoe-oborudovanie/tokarnyye-stanki/" class="menu_popup__link">Токарные станки</a>
              </li>
              <li>
                <a href="/catalog/tokarnoe-oborudovanie/tokarnye-stanki-s-chpu-i-gorizontalnoy-staninoy/" class="menu_popup__link">Токарные станки с ЧПУ и горизонтальной станиной</a>
              </li>
              <li>
                <a href="/catalog/tokarnoe-oborudovanie/tokarnye-stanki-s-chpu-i-naklonnoy-staninoy/" class="menu_popup__link">Токарные станки с ЧПУ и наклонной станиной</a>
              </li>
              <li>
                <a href="/catalog/tokarnoe-oborudovanie/trubonareznye-stanki/" class="menu_popup__link">Трубонарезные станки</a>
              </li>
            </ul>
          </li>
          <li class="menu_popup__item">
            <span class="menu_popup__item_inner">Фрезерные станки по металлу</span>
            <ul>
              <li>
                <a href="/catalog/frezernye-stanki-po-metallu/" class="menu_popup__title">Фрезерные станки по металлу</a>
              </li>
              <li>
                <a href="/catalog/frezernye-stanki-po-metallu/5-osevye-obrabatyvayushchie-tsentry/" class="menu_popup__link">5-осевые обрабатывающие центры</a>
              </li>
              <li>
                <a href="/catalog/frezernye-stanki-po-metallu/vertikalno-obrabatyvayushchie-tsentry-s-chpu/" class="menu_popup__link">Вертикально-обрабатывающие центры с ЧПУ</a>
              </li>
              <li>
                <a href="/catalog/frezernye-stanki-po-metallu/gorizontalno-obrabatyvayushchie-tsentry-s-chpu/" class="menu_popup__link">Горизонтально-обрабатывающие центры с ЧПУ</a>
              </li>
              <li>
                <a href="/catalog/frezernye-stanki-po-metallu/portalnye-frezernye-stanki/" class="menu_popup__link">Портальные фрезерные станки</a>
              </li>
              <li>
                <a href="/catalog/frezernye-stanki-po-metallu/frezernyye-stanki/" class="menu_popup__link">Фрезерные станки</a>
              </li>
            </ul>
          </li>
          <li class="menu_popup__item">
            <span class="menu_popup__item_inner">Расточные станки</span>
            <ul>
              <li>
                <a href="/catalog/rastochnye-stanki/" class="menu_popup__title">Расточные станки</a>
              </li>
              <li>
                <a href="/catalog/rastochnye-stanki/gorizontalno-rastochnye-stanki-s-chpu/" class="menu_popup__link">Горизонтально-расточные станки с ЧПУ</a>
              </li>
              <li>
                <a href="/catalog/rastochnye-stanki/universalnye-gorizontalno-rastochnye-stanki/" class="menu_popup__link">Универсальные горизонтально-расточные станки</a>
              </li>
            </ul>
          </li>
          <li class="menu_popup__item">
            <span class="menu_popup__item_inner">Зубофрезерное оборудование</span>
            <ul>
              <li>
                <a href="/catalog/zubofrezernoe-oborudovanie/" class="menu_popup__title">Зубофрезерное оборудование</a>
              </li>
              <li>
                <a href="/catalog/zubofrezernoe-oborudovanie/zubodolbezhnye-stanki/" class="menu_popup__link">Зубодолбежные станки</a>
              </li>
              <li>
                <a href="/catalog/zubofrezernoe-oborudovanie/zubofrezernye-stanki/" class="menu_popup__link">Зубофрезерные станки</a>
              </li>
              <li>
                <a href="/catalog/zubofrezernoe-oborudovanie/zuboshlifovalnye-stanki/" class="menu_popup__link">Зубошлифовальные станки</a>
              </li>
            </ul>
          </li>
          <li class="menu_popup__item">
            <span class="menu_popup__item_inner">Шлифовальные станки</span>
            <ul>
              <li>
                <a href="/catalog/shlifovalnye-stanki/" class="menu_popup__title">Шлифовальные станки</a>
              </li>
              <li>
                <a href="/catalog/shlifovalnye-stanki/krugloshlifovalnye-stanki-s-chpu/" class="menu_popup__link">Круглошлифовальные станки с ЧПУ</a>
              </li>
              <li>
                <a href="/catalog/shlifovalnye-stanki/ploskoshlifovalnye-stanki-s-chpu/" class="menu_popup__link">Плоскошлифовальные станки с ЧПУ</a>
              </li>
              <li>
                <a href="/catalog/shlifovalnye-stanki/vnutrishlifovalnye-stanki-s-chpu/" class="menu_popup__link">Внутришлифовальные станки с ЧПУ</a>
              </li>
              <li>
                <a href="/catalog/shlifovalnye-stanki/profileshlifovalnye-stanki-s-chpu/" class="menu_popup__link">Профилешлифовальные станки с ЧПУ</a>
              </li>
              <li>
                <a href="/catalog/shlifovalnye-stanki/koordinatno-shlifovalnye-stanki-s-chpu/" class="menu_popup__link">Координатно-шлифовальные станки с ЧПУ</a>
              </li>
            </ul>
          </li>
          <li class="menu_popup__item">
            <span class="menu_popup__item_inner">Электроэрозионные станки</span>
            <ul>
              <li>
                <a href="/catalog/elektroerozionnye-stanki/" class="menu_popup__title">Электроэрозионные станки</a>
              </li>
              <li>
                <a href="/catalog/elektroerozionnye-stanki/kopirovalno-proshivnye-stanki/" class="menu_popup__link">Копировально-прошивные станки</a>
              </li>
              <li>
                <a href="/catalog/elektroerozionnye-stanki/provolochno-vyreznye-stanki/" class="menu_popup__link">Проволочно-вырезные станки</a>
              </li>
            </ul>
          </li>
          <li class="menu_popup__item">
            <span class="menu_popup__item_inner">Вспомогательное оборудование</span>
            <ul>
              <li>
                <a href="/catalog/vspomogatelnoe-oborudovanie/" class="menu_popup__title">Вспомогательное оборудование</a>
              </li>
              <li>
                <a href="/catalog/vspomogatelnoe-oborudovanie/vintovye-kompressory/" class="menu_popup__link">Винтовые компрессоры</a>
              </li>
              <li>
                <a href="/catalog/vspomogatelnoe-oborudovanie/filtratsionnaya-ustanovka-fvu/" class="menu_popup__link">Фильтрационная установка ФВУ</a>
              </li>
            </ul>
          </li>
          <li class="menu_popup__item">
            <a href="/catalog/zapchasti-dlya-metalloobrabatyvayushchikh-stankov/" class="menu_popup__link">Запчасти для металлообрабатывающих станков</a>
          </li>
          <li class="menu_popup__item">
            <span class="menu_popup__item_inner">Другое</span>
            <ul>
              <li>
                <a href="/catalog/other/" class="menu_popup__title">Другое</a>
              </li>
              <li>
                <a href="/catalog/other/zapchasti/" class="menu_popup__link">Запчасти</a>
              </li>
            </ul>
          </li>
          <li class="menu_popup__item">
            <a href="/catalog/raskhodnye-materialy-dlya-metalloobrabatyvayushchikh-stankov/" class="menu_popup__link">Расходные материалы для металлообрабатывающих станков</a>
          </li>

        </ul>
      </div>

      <div class="menu_popup__section">
        <div class="menu_popup__title">
          <span class="menu_popup__link">Клиентам</span>
        </div>
        <ul class="menu_popup__list">
          <li class="menu_popup__item">
            <a href="/catalog/" class="menu_popup__link">Каталог</a>
          </li>
          <li class="menu_popup__item">
            <a href="/about/" class="menu_popup__link">О компании</a>
          </li>
          <li class="menu_popup__item">
            <a href="/contacts/" class="menu_popup__link">Контакты</a>
          </li>
          <li class="menu_popup__item">
            <a href="/services/" class="menu_popup__link">Сервис и услуги</a>
          </li>
          <li class="menu_popup__item">
            <a href="/reviews/" class="menu_popup__link">Отзывы</a>
          </li>
          <li class="menu_popup__item">
            <a href="/news/" class="menu_popup__link">Новости</a>
          </li>
          <li class="menu_popup__item">
            <a href="/blog/" class="menu_popup__link">Статьи</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="menu_popup__contacts">
      <div class="menu_popup__phone phone">
        <a href="tel:+78007002985" class="phone__link"> <span class="phone__text">8 (800) 700-29-85</span> </a>            </div>
      <div class="menu_popup__mail mail">
        <a href="mailto:sales@maihong.ru" target="_blank" class="mail__link">
                        <span class="address__icon block_flex">
                            <img src="https://maihong.ru/upload/frontend/email_icon.svg" alt="Адрес электронной почты" class="img_contain">
                        </span>
          <span class="address__title">sales@maihong.ru</span>
        </a>
      </div>
      <div class="menu_popup__social social">
        <div class="social__item">
          <a href="https://t.me/Maih0ng" class="social__link" target="_blank">
    <span class="social__icon block_flex">
        <img src="https://maihong.ru/upload/frontend/tg_icon_maihong.svg" alt="Telegram" class="img_contain social__img--black">
    </span>
          </a>                </div>
        <div class="social__item">
          <a href="https://api.whatsapp.com/send/?phone=79647731808&amp;text=Здравствуйте! Номер моей заявки: 205451" class="social__link" target="_blank">
    <span class="social__icon block_flex">
        <img src="https://maihong.ru/upload/frontend/whatsapp_icon_maihong.svg" alt="WhatsApp" class="img_contain social__img--black">
    </span>
          </a>                </div>
      </div>
      <button class="menu_popup__button button j-open-consult">Консультация</button>
    </div>
  </div>
</div>

<div class="review_shadow"></div>
<div class="review_popup">
  <div class="review_popup__close j-close-review">
    <img src="https://maihong.ru/upload/frontend/close_icon.svg" alt="Закрыть окно">
  </div>
  <div class="review_popup__inner">
    <div class="review_popup__header">
      <p class="review_popup__title">Лазерный станок ML3015H</p>
      <p class="review_popup__subtitle">Город Богданович</p>
    </div>
    <div class="review_popup__media">
      <div class="review_popup__video_wrap">
        <p class="review_popup__text">Видео-отзыв от клиента</p>
        <div class="review_popup__video video">
          <a class="video__link" data-fancybox="review" href="/upload/frontend/video.mp4">
                        <span class="video__inner">
                            <img class="img_cover" src="https://maihong.ru/upload/frontend/video_poster1.jpg" alt="Видео-отзыв от клиента">
                        </span>
          </a>
        </div>
      </div>
      <div class="review_popup__photo">
        <p class="review_popup__text">Галерея фото</p>
        <div class="template_media__gallery">
          <div class="template_media__gallery_inner">
            <div class="template_media__item">
              <a class="template_media__link block_flex" data-fancybox="review" href="/upload/frontend/media4.jpg">
                <img class="img_cover" src="https://maihong.ru/upload/frontend/media4.jpg" alt="Галерея фото">
              </a>
            </div>
            <div class="template_media__item">
              <a class="template_media__link block_flex" data-fancybox="review" href="/upload/frontend/media2.jpg">
                <img class="img_cover" src="https://maihong.ru/upload/frontend/media2.jpg" alt="Галерея фото">
              </a>
            </div>
            <div class="template_media__item">
              <a class="template_media__link block_flex" data-fancybox="review" href="/upload/frontend/media3.jpg">
                <img class="img_cover" src="https://maihong.ru/upload/frontend/media3.jpg" alt="Галерея фото">
              </a>
            </div>
          </div>
          <div class="template_arrow template_arrow--prev"></div>
          <div class="template_arrow template_arrow--next"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="form_shadow"></div>
<div class="form_popup">
  <div class="form_popup__close j-form-popup-close">
    <img src="https://maihong.ru/upload/frontend/close_icon.svg" alt="Закрыть окно">
  </div>
  <div class="form_popup__inner">
    <div class="form_popup__info" data-info="call">
      <p class="form_popup__title">Заявка на обратный звонок</p>
      <div class="template_text_wrap">
        <p class="template_text">Отправьте форму, и наш менеджер перезвонит вам</p>
      </div>
    </div>
    <div class="form_popup__info" data-info="help">
      <p class="form_popup__title">Отправьте заявку<br class="no-xs"> на персональный подбор</p>
      <div class="template_text_wrap">
        <p class="template_text">Наш менеджер свяжется с вами и поможет подобрать станок под ваши нужды</p>
      </div>
    </div>
    <div class="form_popup__info" data-info="consult">
      <p class="form_popup__title">Отправьте заявку<br class="no-xs"> на консультацию</p>
      <div class="template_text_wrap">
        <p class="template_text">Наш менеджер свяжется с вами и ответит на все вопросы</p>
      </div>
    </div>
    <form class="form_popup__form">
      <input type="hidden" class="form__input" name="FORM_NAME" value="">
      <div class="form__blocks">
        <div class="form__block">
          <label class="form__label">
            <input type="text" class="form__input" name="NAME" placeholder="Ваше имя" required="">
            <span class="form__warning">Заполните это поле</span>
          </label>
        </div>
        <div class="form__block">
          <label class="form__label">
            <input type="tel" class="form__input" name="PHONE" placeholder="Номер телефона" required="">
            <span class="form__warning">Заполните это поле</span>
          </label>
        </div>
        <div class="form__block form__block--consult form__block--help">
          <label class="form__label form__label--select">
            <select name="CONTACT" class="form__select form__select--default">
              <option value="Как нам с вами связаться?">Как нам с вами связаться?</option>
              <option value="Telegram">Telegram</option>
              <option value="WhatsApp">WhatsApp</option>
              <option value="Viber">Viber</option>
              <option value="Позвоните мне">Позвоните мне</option>
            </select>
          </label>
        </div>
        <div class="form__block form__block--consult">
          <label class="form__label form__label--textarea">
            <textarea name="QUESTION" class="form__textarea textarea--flexible" placeholder="Ваш вопрос"></textarea>
          </label>
        </div>
      </div>
      <div class="form__agreement agreement">
        <label class="agreement__label form__label">
          <input type="checkbox" name="POLICY" class="agreement__input" required="" checked="" value="">
          <span class="agreement__text">Согласен с <a href="/policy/" class="agreement__link" target="_blank">политикой конфиденциальности</a></span>
        </label>
      </div>
      <div class="form_popup__button button j-send-form">Отправить заявку</div>
    </form>
  </div>
</div>
<div class="form_popup--sent">
  <div class="form_popup__close j-form-popup-close">
    <img src="https://maihong.ru/upload/frontend/close_icon.svg" alt="Закрыть окно">
  </div>
  <div class="form_popup__inner">
    <p class="form_popup__title">Спасибо за заявку!</p>
    <div class="template_text_wrap">
      <p class="template_text">Наш менеджер уже занимается вашим вопросом, и совсем скоро свяжется с вами!</p>
    </div>
    <div class="form_popup__button button j-form-popup-close">Вернуться на сайт</div>
  </div>
  <div class="form_popup__inner form_popup__inner--review">
    <p class="form_popup__title">Спасибо за отзыв!</p>
    <div class="template_text_wrap">
      <p class="template_text">Отзыв будет опубликован на сайте после проверки модератором</p>
    </div>
    <div class="form_popup__button button j-form-popup-close">Вернуться на сайт</div>
  </div>
</div>

<div class="client_shadow"></div>
<div class="client_popup">
  <div class="client_popup__close j-close-client">
    <img src="https://maihong.ru/upload/frontend/close_icon.svg" alt="Закрыть окно">
  </div>
  <div class="client_popup__header">
    <div class="client_popup__icon block_flex">
      <img class="img_contain" src="https://maihong.ru/upload/frontend/avatar.svg" alt="">
    </div>
    <div class="client_popup__text">
      <p class="client_popup__title"></p>
      <p class="client_popup__date"></p>
    </div>
  </div>
  <div class="client_popup__body">
    <div class="client_popup__review"></div>
    <div class="client_popup__media"></div>
  </div>
</div>

</div>
<!-- Roistat Counter Start -->
<!-- Roistat Counter End -->
<script src="https://maihong.ru/bitrix/js/pull/protobuf/model.min.js?172284143814190"></script>
<script src="https://maihong.ru/bitrix/js/main/core/core_promise.min.js?17228414332490"></script>
<script src="https://maihong.ru/bitrix/js/rest/client/rest.client.min.js?17228414389240"></script>
<script src="https://maihong.ru/bitrix/js/pull/client/pull.client.min.js?174946830849849"></script>
<script src="https://maihong.ru/bitrix/js/main/jquery/jquery-1.12.4.min.js?172284143397163"></script>

<script  src="https://maihong.ru/bitrix/cache/js/s1/maihong/template_3940d9437e113eff01d9683b2ae4dfee/template_3940d9437e113eff01d9683b2ae4dfee_v1.js?1761892437463599"></script>
<?
$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'] . '/../');
$dotenv->load();

if (!empty($_ENV['MODE']) && $_ENV['MODE'] === 'dev') {
    echo "<script src='/local/assets/local/bundle-runtime/bundle-runtime.js'></script>";
}
?>
<? if (!empty($pageConfig['deferJs'])): ?>
    <? foreach ($pageConfig['deferJs'] as $path): ?>
    <script src="<?= $path ?>" defer data-skip-moving="true"></script>
    <? endforeach; ?>
<? endif; ?>
<? if (!empty($pageConfig['asyncJs'])): ?>
    <? foreach ($pageConfig['asyncJs'] as $path): ?>
    <script src="<?= $path ?>" async data-skip-moving="true"></script>
    <? endforeach; ?>
<? endif; ?>
</body>
</html>