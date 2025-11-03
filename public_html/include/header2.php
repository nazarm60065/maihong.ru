<?
/** @var array $pageConfig */

include $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';

$mustache = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/local/assets/mustache/'),
));

?>


<!doctype html>
<html lang="ru">
<head>
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="format-detection" content="telephone=no" />
  <title>Лазерное фрезерное листогибочное токарное оборудование | Майхонг</title>


  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords"
        content="лазерный станок, лазерный труборез, лазерная очистка, листогибочный прессы, трубогиб, гильотина, токарный, токарно-карусельный, токарно-фрезерный, токарный автомат продольного точения, трубонарезной, фрезерный, вертикально-фрезерный, горизонтально-фрезерный, горизонтально-расточной,  портально-фрезерный, зубофрезерный, круглошлифовальный, плоскошлифовальный" />
  <meta name="description"
        content="ООО Майхонг Трейдинг предлагает широкий выбор лазерных, токарных, фрезерных и листогибочных станков с ЧПУ по выгодной цене. Более 300 единиц оборудования всегда в наличии. Доставка и настройка по всей России. Выгодные условия по лизингу. Гарантированное качество, собственная сервисная служба." />
  <script data-skip-moving="true">(function(w, d, n) {
      var cl = 'bx-core'
      var ht = d.documentElement
      var htc = ht ? ht.className : undefined
      if (htc === undefined || htc.indexOf(cl) !== -1) {
        return
      }
      var ua = n.userAgent
      if (/(iPad;)|(iPhone;)/i.test(ua)) {
        cl += ' bx-ios'
      } else if (/Windows/i.test(ua)) {
        cl += ' bx-win'
      } else if (/Macintosh/i.test(ua)) {
        cl += ' bx-mac'
      } else if (/Linux/i.test(ua) && !/Android/i.test(ua)) {
        cl += ' bx-linux'
      } else if (/Android/i.test(ua)) {
        cl += ' bx-android'
      }
      cl += (/(ipad|iphone|android|mobile|touch)/i.test(ua) ? ' bx-touch' : ' bx-no-touch')
      cl += w.devicePixelRatio && w.devicePixelRatio >= 2 ? ' bx-retina' : ' bx-no-retina'
      if (/AppleWebKit/.test(ua)) {
        cl += ' bx-chrome'
      } else if (/Opera/.test(ua)) {
        cl += ' bx-opera'
      } else if (/Firefox/.test(ua)) {
        cl += ' bx-firefox'
      }
      ht.className = htc ? htc + ' ' + cl : cl
    })(window, document, navigator)</script>


  <link
    href="https://maihong.ru/bitrix/cache/css/s1/maihong/template_caea8b43e2542f07e33d83e889922061/template_caea8b43e2542f07e33d83e889922061_v1.css?1761892437232236"
    type="text/css" data-template-style="true" rel="stylesheet" />


    <? if ($pageConfig['metaTitle']): ?><title><?= $pageConfig['metaTitle'] ?></title><? endif; ?>
    <? if (!empty($pageConfig['inlineCss'])): ?>
        <? foreach ($pageConfig['inlineCss'] as $path) {
            if (file_exists($_SERVER['DOCUMENT_ROOT'] . $path)) {
                echo '<style>' . file_get_contents($_SERVER['DOCUMENT_ROOT'] . $path) . '</style>';
            }
        } ?>
    <? endif; ?>
</head>
<body>
<div itemscope itemtype="http://schema.org/Organization" style="display: none">
  <span itemprop="name">Майхонг</span>
  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    <span itemprop="streetAddress">Железнодорожная, 5к1</span>
    <span itemprop="postalCode">142281</span>
    <span itemprop="addressLocality">Московская область, городской округ Серпухов, Протвино</span>
  </div>
  <span itemprop="telephone">8 (800) 700-27-53</span>
  <span itemprop="email">sales5@maihong.ru</span>
</div>
<div class="wrapper">
  <header class="header">
    <div class="header__top">
      <div class="container header__container">
        <div class="header__block header-logo header-logo_desktop">
          <div class="header__logo logo">
            <a href="https://maihong.ru/" class="logo__link">
              <picture class="block_flex">
                <source srcset="/upload/frontend/logo_mob.svg" media="(max-width: 767px)">
                <img class="img_contain" src="/upload/frontend/logo.svg" alt="Майхонг">
              </picture>
            </a>
          </div>
        </div>
        <div class="header__block header-address">
          <a href="https://yandex.ru/maps/-/CLasQP9u" target="_blank" class="header-address__link">
            <span class="header-address-top">
              <span class="header-address__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="13" fill="none" viewBox="0 0 11 13"><path fill="#da291c" fill-rule="evenodd" d="M5.25 12.833s5.25-3.5 5.25-7.583a5.25 5.25 0 1 0-10.5 0c0 4.083 5.25 7.583 5.25 7.583M7 5.25a1.75 1.75 0 1 1-3.5 0 1.75 1.75 0 0 1 3.5 0" clip-rule="evenodd"/></svg>
              </span>
              <span class="header-address__text">Адрес склада</span>
            </span>
            <span class="header-address__value">Домодедово, ул. Каширское Шоссе, 10, корп. 1</span>
          </a>
        </div>
        <div class="header__block header-contacts header-contacts_desktop">
          <div class="header-contact header-phone">
            <a href="tel:+78007002985" class="header-contact__link">
              <span class="header-contact__link-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 18 18"><path
                      fill="#da291c" fill-rule="evenodd"
                      d="M2.121.574a1.963 1.963 0 0 1 2.936.183l2.02 2.595c.37.476.5 1.096.354 1.68l-.615 2.464a.77.77 0 0 0 .2.724l2.764 2.764a.77.77 0 0 0 .724.2l2.463-.615a1.97 1.97 0 0 1 1.68.354l2.595 2.019a1.963 1.963 0 0 1 .183 2.937l-1.163 1.164c-.833.832-2.077 1.198-3.237.79A20.9 20.9 0 0 1 5.14 12.86 20.9 20.9 0 0 1 .167 4.974C-.24 3.815.125 2.57.957 1.737z"
                      clip-rule="evenodd" /></svg>
              </span>
              <span class="header-contact__link-text">8 (800) 700-29-85</span>
            </a>
          </div>
          <div class="header-contact header-mail">
            <a href="mailto:sales@maihong.ru" target="_blank" class="header-contact__link">
              <span class="header-contact__link-icon">
                 <svg xmlns="http://www.w3.org/2000/svg" width="17" height="14" fill="none" viewBox="0 0 17 14"><path
                     fill="#da291c" fill-rule="evenodd"
                     d="M15 0H1.667C.999 0 .419.398.154.969q.136.03.256.112l7.923 5.547 7.924-5.546a.7.7 0 0 1 .256-.113A1.67 1.67 0 0 0 15 0m1.667 2.539L8.743 8.085a.71.71 0 0 1-.82 0L0 2.54v9.128c0 .916.75 1.666 1.667 1.666H15c.917 0 1.667-.75 1.667-1.666z"
                     clip-rule="evenodd" /></svg>
              </span>
              <span class="header-contact__link-text">sales@maihong.ru</span>
            </a>
          </div>
          <div class="header-contact-social">
            <div class="header-contact-social-item">
              <a href="tel:+78007002985" class="header-contact-social-item__link" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20"><path fill="#101820" fill-rule="evenodd" d="M2.357.638a2.18 2.18 0 0 1 3.262.204l2.244 2.882a2.18 2.18 0 0 1 .394 1.868l-.684 2.737a.85.85 0 0 0 .222.804l3.072 3.072a.85.85 0 0 0 .804.222l2.737-.684a2.19 2.19 0 0 1 1.867.394l2.883 2.243a2.18 2.18 0 0 1 .203 3.263l-1.292 1.293c-.925.925-2.308 1.331-3.596.878a23.25 23.25 0 0 1-8.763-5.526A23.25 23.25 0 0 1 .186 5.527c-.453-1.288-.047-2.672.878-3.597z" clip-rule="evenodd"/></svg>
              </a>
            </div>
            <div class="header-contact-social-item">
              <a href="https://t.me/Maih0ng" class="header-contact-social-item__link" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" fill="none" viewBox="0 0 20 17"><path fill="#23a0dc" d="m19.941 1.527-3.018 14.232c-.227 1.004-.821 1.255-1.665.781l-4.598-3.388-2.219 2.134c-.245.245-.45.45-.924.45l.33-4.682 8.523-7.701c.37-.33-.08-.514-.576-.183L5.258 9.804.722 8.384c-.986-.308-1.004-.987.206-1.46L18.669.09c.821-.308 1.54.183 1.272 1.438"/></svg>
              </a>
            </div>
            <div class="header-contact-social-item">
              <a
                href="https://api.whatsapp.com/send/?phone=79647731808&amp;text=Здравствуйте! Номер моей заявки: 205451"
                class="header-contact-social-item__link" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="29" fill="none" viewBox="0 0 28 29"><path fill="#2d8b03" d="M14.022 25.473h-.004a11.54 11.54 0 0 1-5.883-1.611l-.422-.25-4.374 1.147 1.168-4.265-.275-.437a11.53 11.53 0 0 1-1.767-6.151C2.467 7.534 7.652 2.35 14.027 2.35a11.48 11.48 0 0 1 8.17 3.389 11.49 11.49 0 0 1 3.383 8.176c-.003 6.373-5.188 11.558-11.558 11.558"/><path fill="#f7f7f8" fill-rule="evenodd" d="M20.36 16.816c-.347-.174-2.055-1.014-2.374-1.13s-.55-.174-.782.174-.897 1.13-1.1 1.362c-.202.232-.405.261-.752.087-.348-.174-1.468-.54-2.795-1.724-1.033-.922-1.73-2.06-1.933-2.407-.202-.348-.02-.536.153-.71.156-.155.347-.405.521-.608s.232-.348.348-.58.058-.434-.03-.608c-.086-.174-.781-1.884-1.07-2.58-.283-.677-.57-.586-.782-.596-.203-.01-.435-.013-.666-.013s-.608.087-.927.435c-.318.348-1.216 1.189-1.216 2.898S8.2 14.18 8.374 14.412s2.45 3.741 5.935 5.246a20 20 0 0 0 1.98.732c.833.264 1.59.227 2.19.137.667-.1 2.055-.84 2.344-1.652.29-.811.29-1.507.203-1.652s-.318-.232-.666-.406" clip-rule="evenodd"/></svg>
              </a>
            </div>
          </div>
          <button class="header__button button j-open-consult">Консультация</button>
        </div>
      </div>
    </div>
    <div class="header__main">
      <div class="container header__container">
        <div class="header__block header-logo header-logo_mobile">
          <div class="header__logo logo">
            <a href="https://maihong.ru/" class="logo__link">
              <picture class="block_flex">
                <source srcset="/upload/frontend/logo_mob.svg" media="(max-width: 767px)">
                <img class="img_contain" src="/upload/frontend/logo.svg" alt="Майхонг">
              </picture>
            </a>
          </div>
        </div>
        <div class="header__block">
          <div class="header__menu menu">
            <nav class="menu__nav">
              <ul class="menu__list">

                <li class="menu__item menu__item--inner">
                  <a href="https://maihong.ru/catalog/" class="menu__link menu__link_catalog">
                    <span class="menu__icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="4" fill="none" viewBox="0 0 20 4"><rect width="4" height="4" fill="#fff" rx="2"/><rect width="4" height="4" x="8" fill="#fff" rx="2"/><rect width="4" height="4" x="16" fill="#fff" rx="2"/></svg>
                    </span>
                    <span class="menu__title">Каталог</span>
                  </a>


                  <div class="menu_inner menu_inner--v2">
                    <div class="menu_inner__shadow"></div>
                    <div class="menu_inner__popup">
                      <div class="menu_inner__popup_inner">

                        <div class="menu_inner__aside">
                          <ul class="menu_inner__list">
                            <li class="menu_inner__section" data-section="1">
                              <a href="https://maihong.ru/catalog/lasernoe-oborudovanie/" class="menu_inner__link">
                                <span class="menu_inner__icon">
                                    <img src="/upload/uf/438/eij6292kuf90zj0mscog1qr246xodzdi.svg" alt="">
                                </span>
                                <span class="menu_inner__text">Лазерное оборудование</span>
                              </a>
                            </li>
                            <li class="menu_inner__section" data-section="15">
                              <a href="https://maihong.ru/catalog/gibochnye-stanki/" class="menu_inner__link">
                                <span class="menu_inner__icon">
                                    <img src="/upload/uf/a31/108k0vweb61eg9207q0gxotp8j5r68z8.svg" alt="">
                                </span>
                                <span class="menu_inner__text">Гибочные станки</span>
                              </a>
                            </li>
                            <li class="menu_inner__section" data-section="19">
                              <a href="https://maihong.ru/catalog/gilotinnye-nozhnitsy/" class="menu_inner__link">
                                <span class="menu_inner__icon">
                                    <img src="/upload/uf/ffb/j7g3swg20m6vzc219usznwa4of6ivkcd.svg" alt="">
                                </span>
                                <span class="menu_inner__text">Гильотинные ножницы</span>
                              </a>
                            </li>
                            <li class="menu_inner__section" data-section="6">
                              <a href="https://maihong.ru/catalog/tokarnoe-oborudovanie/" class="menu_inner__link">
                                <span class="menu_inner__icon">
                                    <img src="/upload/uf/349/jlat3lzdcgbpabzzjy9u7xmxf0bojnko.svg" alt="">
                                </span>
                                <span class="menu_inner__text">Токарноe оборудование</span>
                              </a>
                            </li>
                            <li class="menu_inner__section" data-section="126">
                              <a href="https://maihong.ru/catalog/frezernye-stanki-po-metallu/"
                                 class="menu_inner__link">
                                <span class="menu_inner__icon">
                                    <img src="/upload/uf/520/hgqif1i316fmm9l20gufrwlmzkde7efs.svg" alt="">
                                </span>
                                <span class="menu_inner__text">Фрезерные станки по металлу</span>
                              </a>
                            </li>
                            <li class="menu_inner__section" data-section="132">
                              <a href="https://maihong.ru/catalog/rastochnye-stanki/" class="menu_inner__link">
                                <span class="menu_inner__icon">
                                    <img src="/upload/uf/d28/pg6dg8f9w2vfdtu4w96g7tov951xhr4g.svg" alt="">
                                </span>
                                <span class="menu_inner__text">Расточные станки</span>
                              </a>
                            </li>
                            <li class="menu_inner__section" data-section="141">
                              <a href="https://maihong.ru/catalog/zubofrezernoe-oborudovanie/"
                                 class="menu_inner__link">
                                <span class="menu_inner__icon">
                                    <img src="/upload/uf/4c0/e6nqr8zz3rxgttrrm4epfm1j0zoy0d68.svg" alt="">
                                </span>
                                <span class="menu_inner__text">Зубофрезерное оборудование</span>
                              </a>
                            </li>
                            <li class="menu_inner__section" data-section="135">
                              <a href="https://maihong.ru/catalog/shlifovalnye-stanki/" class="menu_inner__link">
                                <span class="menu_inner__icon">
                                    <img src="/upload/uf/48c/u6d416knmgqco6ryyohvvpfqo6rlvkv7.svg" alt="">
                                </span>
                                <span class="menu_inner__text">Шлифовальные станки</span>
                              </a>
                            </li>
                            <li class="menu_inner__section" data-section="145">
                              <a href="https://maihong.ru/catalog/elektroerozionnye-stanki/" class="menu_inner__link">
                                <span class="menu_inner__icon">
                                    <img src="/upload/uf/d7f/4oir9msdfwq0ntf02uapa4q0yokh3rjp.svg" alt="">
                                </span>
                                <span class="menu_inner__text">Электроэрозионные станки</span>
                              </a>
                            </li>
                            <li class="menu_inner__section" data-section="150">
                              <a href="https://maihong.ru/catalog/vspomogatelnoe-oborudovanie/"
                                 class="menu_inner__link">
                                <span class="menu_inner__icon">
                                    <img src="/upload/uf/fd7/yn1taj6f3v16n9ujeu2k0w2j85enc9wa.svg" alt="">
                                </span>
                                <span class="menu_inner__text">Вспомогательное оборудование</span>
                              </a>
                            </li>
                            <li class="menu_inner__section" data-section="153">
                              <a href="https://maihong.ru/catalog/zapchasti-dlya-metalloobrabatyvayushchikh-stankov/"
                                 class="menu_inner__link">
                                <span class="menu_inner__icon">
                                    <img src="/upload/uf/ae9/i51mr93ly6dsy13fw9ywur257sii2jns.svg" alt="">
                                </span>
                                <span class="menu_inner__text">Запчасти для металлообрабатывающих станков</span>
                              </a>
                            </li>
                            <li class="menu_inner__section" data-section="20">
                              <a href="https://maihong.ru/catalog/other/" class="menu_inner__link">
                                <span class="menu_inner__icon">
                                    <img src="/upload/uf/423/1ingycrwkxjszch92ns14wl1bom7mwdp.svg" alt="">
                                </span>
                                <span class="menu_inner__text">Другое</span>
                              </a>
                            </li>
                            <li class="menu_inner__section" data-section="154">
                              <a
                                href="https://maihong.ru/catalog/raskhodnye-materialy-dlya-metalloobrabatyvayushchikh-stankov/"
                                class="menu_inner__link">
                                <span class="menu_inner__icon">
                                    <img src="/upload/uf/cd9/7c4ko3gmh2ayqfcvt7zmypgmucob131e.svg" alt="">
                                </span>
                                <span
                                  class="menu_inner__text">Расходные материалы для металлообрабатывающих станков</span>
                              </a>
                            </li>
                          </ul>
                        </div>

                        <div class="menu_inner__body">
                          <div class="menu_inner__banner">
                            <div class="menu_inner__banner_bg">
                              <img src="/upload/frontend/menu_inner_banner_bg.jpg" alt="Помощь в подборе станка">
                            </div>
                            <div class="menu_inner__banner_text">
                              <p>Поможем выбрать станок, который подойдет именно вам!</p>
                              <button
                                class="button button--white button--white-grey menu_inner__banner_button j-open-help">
                                Подобрать станок
                              </button>
                            </div>
                          </div>
                          <div class="menu_inner__subsections">
                            <div class="menu_inner__subsection" data-section="1">
                              <ul class="menu_inner__list">

                                <li class="menu_inner__item">
                                  <a href="https://maihong.ru/catalog/lasernoe-oborudovanie/"
                                     class="menu_inner__link">
                                    <span class="menu_inner__text">Лазерное оборудование</span>
                                  </a>

                                  <ul class="menu_inner__list">
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/lasernoe-oborudovanie/apparaty-3v1-ochistka/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Аппараты 3в1 (очистка)</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/lasernoe-oborudovanie/apparaty-lazernoy-svarki/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Аппараты лазерной сварки</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/lasernoe-oborudovanie/apparaty-lazernoy-chistki/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Аппараты лазерной чистки</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/lasernoe-oborudovanie/dlya-rezki-lista-s-odnim-stolom/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Для резки листа с одним столом</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/lasernoe-oborudovanie/dlya-rezki-lista-so-smennym-stolom/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Для резки листа со сменным столом</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/lasernoe-oborudovanie/dlya-rezki-lista-so-smennym-stolom-i-zashchitnoy-kabinoy/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Для резки листа со сменным столом и защитной кабиной</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/lasernoe-oborudovanie/lazernye-stanki-kombinirovannye/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Лазерные станки комбинированные</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/lasernoe-oborudovanie/dlya-rezki-trub-i-profilya/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Лазерные труборезы</span>
                                      </a>
                                    </li>
                                  </ul>
                                </li>

                              </ul>
                            </div>
                            <div class="menu_inner__subsection" data-section="15">
                              <ul class="menu_inner__list">

                                <li class="menu_inner__item">
                                  <a href="https://maihong.ru/catalog/gibochnye-stanki/" class="menu_inner__link">
                                    <span class="menu_inner__text">Гибочные станки</span>
                                  </a>

                                  <ul class="menu_inner__list">
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/gibochnye-stanki/listogibochnye-pressy/"
                                         class="menu_inner__link">
                                        <span class="menu_inner__text">Листогибочные прессы</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/gibochnye-stanki/trubogiby/"
                                         class="menu_inner__link">
                                        <span class="menu_inner__text">Трубогибы</span>
                                      </a>
                                    </li>
                                  </ul>
                                </li>

                              </ul>
                            </div>
                            <div class="menu_inner__subsection" data-section="19">
                              <ul class="menu_inner__list">

                                <li class="menu_inner__item">
                                  <a href="https://maihong.ru/catalog/gilotinnye-nozhnitsy/" class="menu_inner__link">
                                    <span class="menu_inner__text">Гильотинные ножницы</span>
                                  </a>

                                </li>

                              </ul>
                            </div>
                            <div class="menu_inner__subsection" data-section="6">
                              <ul class="menu_inner__list">

                                <li class="menu_inner__item">
                                  <a href="https://maihong.ru/catalog/tokarnoe-oborudovanie/"
                                     class="menu_inner__link">
                                    <span class="menu_inner__text">Токарноe оборудование</span>
                                  </a>

                                  <ul class="menu_inner__list">
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/tokarnoe-oborudovanie/vertikalnye-tokarnye-stanki/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Вертикальные токарные станки</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/tokarnoe-oborudovanie/tokarno-vintoreznye-stanki/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Токарно-винторезные станки</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/tokarnoe-oborudovanie/tokarno-karuselnye-stanki/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Токарно-карусельные станки</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/tokarnoe-oborudovanie/tokarno-frezernye-stanki-s-chpu-obrabatyvayushchie-tsentry/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Токарно-фрезерные станки с ЧПУ / обрабатывающие центры</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/tokarnoe-oborudovanie/tokarnye-avtomaty/"
                                         class="menu_inner__link">
                                        <span class="menu_inner__text">Токарные автоматы</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/tokarnoe-oborudovanie/tokarnyye-stanki/"
                                         class="menu_inner__link">
                                        <span class="menu_inner__text">Токарные станки</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/tokarnoe-oborudovanie/tokarnye-stanki-s-chpu-i-gorizontalnoy-staninoy/"
                                        class="menu_inner__link">
                                          <span
                                            class="menu_inner__text">Токарные станки с ЧПУ и горизонтальной станиной</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/tokarnoe-oborudovanie/tokarnye-stanki-s-chpu-i-naklonnoy-staninoy/"
                                        class="menu_inner__link">
                                          <span
                                            class="menu_inner__text">Токарные станки с ЧПУ и наклонной станиной</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/tokarnoe-oborudovanie/trubonareznye-stanki/"
                                         class="menu_inner__link">
                                        <span class="menu_inner__text">Трубонарезные станки</span>
                                      </a>
                                    </li>
                                  </ul>
                                </li>

                              </ul>
                            </div>
                            <div class="menu_inner__subsection" data-section="126">
                              <ul class="menu_inner__list">

                                <li class="menu_inner__item">
                                  <a href="https://maihong.ru/catalog/frezernye-stanki-po-metallu/"
                                     class="menu_inner__link">
                                    <span class="menu_inner__text">Фрезерные станки по металлу</span>
                                  </a>

                                  <ul class="menu_inner__list">
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/frezernye-stanki-po-metallu/5-osevye-obrabatyvayushchie-tsentry/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">5-осевые обрабатывающие центры</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/frezernye-stanki-po-metallu/vertikalno-obrabatyvayushchie-tsentry-s-chpu/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Вертикально-обрабатывающие центры с ЧПУ</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/frezernye-stanki-po-metallu/gorizontalno-obrabatyvayushchie-tsentry-s-chpu/"
                                        class="menu_inner__link">
                                          <span
                                            class="menu_inner__text">Горизонтально-обрабатывающие центры с ЧПУ</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/frezernye-stanki-po-metallu/portalnye-frezernye-stanki/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Портальные фрезерные станки</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/frezernye-stanki-po-metallu/frezernyye-stanki/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Фрезерные станки</span>
                                      </a>
                                    </li>
                                  </ul>
                                </li>

                              </ul>
                            </div>
                            <div class="menu_inner__subsection" data-section="132">
                              <ul class="menu_inner__list">

                                <li class="menu_inner__item">
                                  <a href="https://maihong.ru/catalog/rastochnye-stanki/" class="menu_inner__link">
                                    <span class="menu_inner__text">Расточные станки</span>
                                  </a>

                                  <ul class="menu_inner__list">
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/rastochnye-stanki/gorizontalno-rastochnye-stanki-s-chpu/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Горизонтально-расточные станки с ЧПУ</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/rastochnye-stanki/universalnye-gorizontalno-rastochnye-stanki/"
                                        class="menu_inner__link">
                                          <span
                                            class="menu_inner__text">Универсальные горизонтально-расточные станки</span>
                                      </a>
                                    </li>
                                  </ul>
                                </li>

                              </ul>
                            </div>
                            <div class="menu_inner__subsection" data-section="141">
                              <ul class="menu_inner__list">

                                <li class="menu_inner__item">
                                  <a href="https://maihong.ru/catalog/zubofrezernoe-oborudovanie/"
                                     class="menu_inner__link">
                                    <span class="menu_inner__text">Зубофрезерное оборудование</span>
                                  </a>

                                  <ul class="menu_inner__list">
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/zubofrezernoe-oborudovanie/zubodolbezhnye-stanki/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Зубодолбежные станки</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/zubofrezernoe-oborudovanie/zubofrezernye-stanki/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Зубофрезерные станки</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/zubofrezernoe-oborudovanie/zuboshlifovalnye-stanki/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Зубошлифовальные станки</span>
                                      </a>
                                    </li>
                                  </ul>
                                </li>

                              </ul>
                            </div>
                            <div class="menu_inner__subsection" data-section="135">
                              <ul class="menu_inner__list">

                                <li class="menu_inner__item">
                                  <a href="https://maihong.ru/catalog/shlifovalnye-stanki/" class="menu_inner__link">
                                    <span class="menu_inner__text">Шлифовальные станки</span>
                                  </a>

                                  <ul class="menu_inner__list">
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/shlifovalnye-stanki/krugloshlifovalnye-stanki-s-chpu/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Круглошлифовальные станки с ЧПУ</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/shlifovalnye-stanki/ploskoshlifovalnye-stanki-s-chpu/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Плоскошлифовальные станки с ЧПУ</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/shlifovalnye-stanki/vnutrishlifovalnye-stanki-s-chpu/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Внутришлифовальные станки с ЧПУ</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/shlifovalnye-stanki/profileshlifovalnye-stanki-s-chpu/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Профилешлифовальные станки с ЧПУ</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/shlifovalnye-stanki/koordinatno-shlifovalnye-stanki-s-chpu/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Координатно-шлифовальные станки с ЧПУ</span>
                                      </a>
                                    </li>
                                  </ul>
                                </li>

                              </ul>
                            </div>
                            <div class="menu_inner__subsection" data-section="145">
                              <ul class="menu_inner__list">

                                <li class="menu_inner__item">
                                  <a href="https://maihong.ru/catalog/elektroerozionnye-stanki/"
                                     class="menu_inner__link">
                                    <span class="menu_inner__text">Электроэрозионные станки</span>
                                  </a>

                                  <ul class="menu_inner__list">
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/elektroerozionnye-stanki/kopirovalno-proshivnye-stanki/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Копировально-прошивные станки</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/elektroerozionnye-stanki/provolochno-vyreznye-stanki/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Проволочно-вырезные станки</span>
                                      </a>
                                    </li>
                                  </ul>
                                </li>

                              </ul>
                            </div>
                            <div class="menu_inner__subsection" data-section="150">
                              <ul class="menu_inner__list">

                                <li class="menu_inner__item">
                                  <a href="https://maihong.ru/catalog/vspomogatelnoe-oborudovanie/"
                                     class="menu_inner__link">
                                    <span class="menu_inner__text">Вспомогательное оборудование</span>
                                  </a>

                                  <ul class="menu_inner__list">
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/vspomogatelnoe-oborudovanie/vintovye-kompressory/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Винтовые компрессоры</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a
                                        href="https://maihong.ru/catalog/vspomogatelnoe-oborudovanie/filtratsionnaya-ustanovka-fvu/"
                                        class="menu_inner__link">
                                        <span class="menu_inner__text">Фильтрационная установка ФВУ</span>
                                      </a>
                                    </li>
                                  </ul>
                                </li>

                              </ul>
                            </div>
                            <div class="menu_inner__subsection" data-section="153">
                              <ul class="menu_inner__list">

                                <li class="menu_inner__item">
                                  <a
                                    href="https://maihong.ru/catalog/zapchasti-dlya-metalloobrabatyvayushchikh-stankov/"
                                    class="menu_inner__link">
                                    <span class="menu_inner__text">Запчасти для металлообрабатывающих станков</span>
                                  </a>

                                </li>

                              </ul>
                            </div>
                            <div class="menu_inner__subsection" data-section="20">
                              <ul class="menu_inner__list">

                                <li class="menu_inner__item">
                                  <a href="https://maihong.ru/catalog/other/" class="menu_inner__link">
                                    <span class="menu_inner__text">Другое</span>
                                  </a>

                                  <ul class="menu_inner__list">
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/other/zapchasti/" class="menu_inner__link">
                                        <span class="menu_inner__text">Запчасти</span>
                                      </a>
                                    </li>
                                  </ul>
                                </li>

                              </ul>
                            </div>
                            <div class="menu_inner__subsection" data-section="154">
                              <ul class="menu_inner__list">

                                <li class="menu_inner__item">
                                  <a
                                    href="https://maihong.ru/catalog/raskhodnye-materialy-dlya-metalloobrabatyvayushchikh-stankov/"
                                    class="menu_inner__link">
                                    <span class="menu_inner__text">Расходные материалы для металлообрабатывающих станков</span>
                                  </a>

                                </li>

                              </ul>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </li>


                <li class="menu__item">
                  <a href="https://maihong.ru/about/" class="menu__link">
                    <span class="menu__title">О нас</span>
                  </a>
                </li>
                <li class="menu__item">
                  <a href="https://maihong.ru/services/" class="menu__link">
                    <span class="menu__title">Сервисы и гарантии</span>
                  </a>
                </li>
                <li class="menu__item">
                  <a href="https://maihong.ru/news/" class="menu__link">
                    <span class="menu__title">Новости</span>
                  </a>
                </li>
                <li class="menu__item">
                  <a href="https://maihong.ru/blog/" class="menu__link">
                    <span class="menu__title">Статьи</span>
                  </a>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <div class="header-search">
          <button class="header-search__trigger" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none" viewBox="0 0 15 15">
              <path fill="#101820"
                    d="M11.007 9.696a6.093 6.093 0 1 0-1.31 1.31 1 1 0 0 0 .091.108l3.61 3.61a.938.938 0 0 0 1.326-1.326l-3.61-3.61a1 1 0 0 0-.107-.092m.242-3.604a5.157 5.157 0 1 1-10.314 0 5.157 5.157 0 0 1 10.314 0" />
            </svg>
          </button>
          <div class="header-search-modal">
            <div class="header-search-modal__overlay"></div>
            <form class="header-search-form">
              <div class="header-search-form-group">
                <input type="text" class="header-search-form__control" name="q" placeholder="Введите запрос">
              </div>
              <button class="header-search-form__submit" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16">
                  <path fill="#fff"
                        d="M11.743 10.342a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 1 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.099M12 6.498a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                </svg>
              </button>
            </form>
          </div>
        </div>
        <div class="header__block header-contacts header-contacts_mobile">
          <div class="header__phone phone">
            <a href="tel:+78007002985" class="phone__link"> <span class="phone__text">8 (800) 700-29-85</span> </a>
          </div>
          <div class="header__social social">
            <div class="social__item">
              <a href="https://t.me/Maih0ng" class="social__link" target="_blank">
    <span class="social__icon block_flex">
        <img src="/upload/frontend/tg_icon_maihong.svg" alt="Telegram" class="img_contain social__img--black">
    </span>
              </a></div>
            <div class="social__item">
              <a
                href="https://api.whatsapp.com/send/?phone=79647731808&amp;text=Здравствуйте! Номер моей заявки: 205451"
                class="social__link" target="_blank">
    <span class="social__icon block_flex">
        <img src="/upload/frontend/whatsapp_icon_maihong.svg" alt="WhatsApp" class="img_contain social__img--black">
    </span>
              </a></div>
          </div>
          <button class="header__button button j-open-consult">Консультация</button>
          <div class="header__burger burger j-open-menu">
            <div class="burger__line"></div>
            <div class="burger__line"></div>
            <div class="burger__line"></div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main>
    <div class="page page--main">

