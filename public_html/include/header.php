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
  <meta name="keywords" content="лазерный станок, лазерный труборез, лазерная очистка, листогибочный прессы, трубогиб, гильотина, токарный, токарно-карусельный, токарно-фрезерный, токарный автомат продольного точения, трубонарезной, фрезерный, вертикально-фрезерный, горизонтально-фрезерный, горизонтально-расточной,  портально-фрезерный, зубофрезерный, круглошлифовальный, плоскошлифовальный" />
  <meta name="description" content="ООО Майхонг Трейдинг предлагает широкий выбор лазерных, токарных, фрезерных и листогибочных станков с ЧПУ по выгодной цене. Более 300 единиц оборудования всегда в наличии. Доставка и настройка по всей России. Выгодные условия по лизингу. Гарантированное качество, собственная сервисная служба." />
  <script data-skip-moving="true">(function(w, d, n) {var cl = "bx-core";var ht = d.documentElement;var htc = ht ? ht.className : undefined;if (htc === undefined || htc.indexOf(cl) !== -1){return;}var ua = n.userAgent;if (/(iPad;)|(iPhone;)/i.test(ua)){cl += " bx-ios";}else if (/Windows/i.test(ua)){cl += ' bx-win';}else if (/Macintosh/i.test(ua)){cl += " bx-mac";}else if (/Linux/i.test(ua) && !/Android/i.test(ua)){cl += " bx-linux";}else if (/Android/i.test(ua)){cl += " bx-android";}cl += (/(ipad|iphone|android|mobile|touch)/i.test(ua) ? " bx-touch" : " bx-no-touch");cl += w.devicePixelRatio && w.devicePixelRatio >= 2? " bx-retina": " bx-no-retina";if (/AppleWebKit/.test(ua)){cl += " bx-chrome";}else if (/Opera/.test(ua)){cl += " bx-opera";}else if (/Firefox/.test(ua)){cl += " bx-firefox";}ht.className = htc ? htc + " " + cl : cl;})(window, document, navigator);</script>


  <link href="https://maihong.ru/bitrix/cache/css/s1/maihong/template_caea8b43e2542f07e33d83e889922061/template_caea8b43e2542f07e33d83e889922061_v1.css?1761892437232236" type="text/css"  data-template-style="true" rel="stylesheet" />






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
        <div class="header__block">
          <div class="header__address address">
            <a href="https://yandex.ru/maps/-/CLasQP9u" target="_blank" class="address__link"> <span class="address__icon block_flex"> <img alt="Адрес склада Maihong" src="/upload/frontend/address_icon.svg" class="img_contain"> </span> <span class="address__title">Адрес склада Майхонг</span><br>
              <span class="address__value">
ул. Каширское Шоссе, 10, корп. 1, микрорайон Северный, Домодедово</span>
            </a>                        </div>
        </div>
        <div class="header__block">
          <div class="header__mail mail">
            <a href="mailto:sales@maihong.ru" target="_blank" class="mail__link">
                                <span class="address__icon block_flex">
                                    <img src="/upload/frontend/email_icon.svg" alt="Адрес электронной почты" class="img_contain">
                                </span>
              <span class="address__title">
                                    sales@maihong.ru                                </span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="header__main">
      <div class="container header__container">
        <div class="header__block">
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
                  <a href="https://maihong.ru/catalog/" class="menu__link">
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
                              <a href="https://maihong.ru/catalog/frezernye-stanki-po-metallu/" class="menu_inner__link">
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
                              <a href="https://maihong.ru/catalog/zubofrezernoe-oborudovanie/" class="menu_inner__link">
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
                              <a href="https://maihong.ru/catalog/vspomogatelnoe-oborudovanie/" class="menu_inner__link">
                                <span class="menu_inner__icon">
                                    <img src="/upload/uf/fd7/yn1taj6f3v16n9ujeu2k0w2j85enc9wa.svg" alt="">
                                </span>
                                <span class="menu_inner__text">Вспомогательное оборудование</span>
                              </a>
                            </li>
                            <li class="menu_inner__section" data-section="153">
                              <a href="https://maihong.ru/catalog/zapchasti-dlya-metalloobrabatyvayushchikh-stankov/" class="menu_inner__link">
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
                              <a href="https://maihong.ru/catalog/raskhodnye-materialy-dlya-metalloobrabatyvayushchikh-stankov/" class="menu_inner__link">
                                <span class="menu_inner__icon">
                                    <img src="/upload/uf/cd9/7c4ko3gmh2ayqfcvt7zmypgmucob131e.svg" alt="">
                                </span>
                                <span class="menu_inner__text">Расходные материалы для металлообрабатывающих станков</span>
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
                              <button class="button button--white button--white-grey menu_inner__banner_button j-open-help">Подобрать станок</button>
                            </div>
                          </div>
                          <div class="menu_inner__subsections">
                            <div class="menu_inner__subsection" data-section="1">
                              <ul class="menu_inner__list">

                                <li class="menu_inner__item">
                                  <a href="https://maihong.ru/catalog/lasernoe-oborudovanie/" class="menu_inner__link">
                                    <span class="menu_inner__text">Лазерное оборудование</span>
                                  </a>

                                  <ul class="menu_inner__list">
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/lasernoe-oborudovanie/apparaty-3v1-ochistka/" class="menu_inner__link">
                                        <span class="menu_inner__text">Аппараты 3в1 (очистка)</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/lasernoe-oborudovanie/apparaty-lazernoy-svarki/" class="menu_inner__link">
                                        <span class="menu_inner__text">Аппараты лазерной сварки</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/lasernoe-oborudovanie/apparaty-lazernoy-chistki/" class="menu_inner__link">
                                        <span class="menu_inner__text">Аппараты лазерной чистки</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/lasernoe-oborudovanie/dlya-rezki-lista-s-odnim-stolom/" class="menu_inner__link">
                                        <span class="menu_inner__text">Для резки листа с одним столом</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/lasernoe-oborudovanie/dlya-rezki-lista-so-smennym-stolom/" class="menu_inner__link">
                                        <span class="menu_inner__text">Для резки листа со сменным столом</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/lasernoe-oborudovanie/dlya-rezki-lista-so-smennym-stolom-i-zashchitnoy-kabinoy/" class="menu_inner__link">
                                        <span class="menu_inner__text">Для резки листа со сменным столом и защитной кабиной</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/lasernoe-oborudovanie/lazernye-stanki-kombinirovannye/" class="menu_inner__link">
                                        <span class="menu_inner__text">Лазерные станки комбинированные</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/lasernoe-oborudovanie/dlya-rezki-trub-i-profilya/" class="menu_inner__link">
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
                                      <a href="https://maihong.ru/catalog/gibochnye-stanki/listogibochnye-pressy/" class="menu_inner__link">
                                        <span class="menu_inner__text">Листогибочные прессы</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/gibochnye-stanki/trubogiby/" class="menu_inner__link">
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
                                  <a href="https://maihong.ru/catalog/tokarnoe-oborudovanie/" class="menu_inner__link">
                                    <span class="menu_inner__text">Токарноe оборудование</span>
                                  </a>

                                  <ul class="menu_inner__list">
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/tokarnoe-oborudovanie/vertikalnye-tokarnye-stanki/" class="menu_inner__link">
                                        <span class="menu_inner__text">Вертикальные токарные станки</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/tokarnoe-oborudovanie/tokarno-vintoreznye-stanki/" class="menu_inner__link">
                                        <span class="menu_inner__text">Токарно-винторезные станки</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/tokarnoe-oborudovanie/tokarno-karuselnye-stanki/" class="menu_inner__link">
                                        <span class="menu_inner__text">Токарно-карусельные станки</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/tokarnoe-oborudovanie/tokarno-frezernye-stanki-s-chpu-obrabatyvayushchie-tsentry/" class="menu_inner__link">
                                        <span class="menu_inner__text">Токарно-фрезерные станки с ЧПУ / обрабатывающие центры</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/tokarnoe-oborudovanie/tokarnye-avtomaty/" class="menu_inner__link">
                                        <span class="menu_inner__text">Токарные автоматы</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/tokarnoe-oborudovanie/tokarnyye-stanki/" class="menu_inner__link">
                                        <span class="menu_inner__text">Токарные станки</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/tokarnoe-oborudovanie/tokarnye-stanki-s-chpu-i-gorizontalnoy-staninoy/" class="menu_inner__link">
                                        <span class="menu_inner__text">Токарные станки с ЧПУ и горизонтальной станиной</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/tokarnoe-oborudovanie/tokarnye-stanki-s-chpu-i-naklonnoy-staninoy/" class="menu_inner__link">
                                        <span class="menu_inner__text">Токарные станки с ЧПУ и наклонной станиной</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/tokarnoe-oborudovanie/trubonareznye-stanki/" class="menu_inner__link">
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
                                  <a href="https://maihong.ru/catalog/frezernye-stanki-po-metallu/" class="menu_inner__link">
                                    <span class="menu_inner__text">Фрезерные станки по металлу</span>
                                  </a>

                                  <ul class="menu_inner__list">
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/frezernye-stanki-po-metallu/5-osevye-obrabatyvayushchie-tsentry/" class="menu_inner__link">
                                        <span class="menu_inner__text">5-осевые обрабатывающие центры</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/frezernye-stanki-po-metallu/vertikalno-obrabatyvayushchie-tsentry-s-chpu/" class="menu_inner__link">
                                        <span class="menu_inner__text">Вертикально-обрабатывающие центры с ЧПУ</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/frezernye-stanki-po-metallu/gorizontalno-obrabatyvayushchie-tsentry-s-chpu/" class="menu_inner__link">
                                        <span class="menu_inner__text">Горизонтально-обрабатывающие центры с ЧПУ</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/frezernye-stanki-po-metallu/portalnye-frezernye-stanki/" class="menu_inner__link">
                                        <span class="menu_inner__text">Портальные фрезерные станки</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/frezernye-stanki-po-metallu/frezernyye-stanki/" class="menu_inner__link">
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
                                      <a href="https://maihong.ru/catalog/rastochnye-stanki/gorizontalno-rastochnye-stanki-s-chpu/" class="menu_inner__link">
                                        <span class="menu_inner__text">Горизонтально-расточные станки с ЧПУ</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/rastochnye-stanki/universalnye-gorizontalno-rastochnye-stanki/" class="menu_inner__link">
                                        <span class="menu_inner__text">Универсальные горизонтально-расточные станки</span>
                                      </a>
                                    </li>
                                  </ul>
                                </li>

                              </ul>
                            </div>
                            <div class="menu_inner__subsection" data-section="141">
                              <ul class="menu_inner__list">

                                <li class="menu_inner__item">
                                  <a href="https://maihong.ru/catalog/zubofrezernoe-oborudovanie/" class="menu_inner__link">
                                    <span class="menu_inner__text">Зубофрезерное оборудование</span>
                                  </a>

                                  <ul class="menu_inner__list">
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/zubofrezernoe-oborudovanie/zubodolbezhnye-stanki/" class="menu_inner__link">
                                        <span class="menu_inner__text">Зубодолбежные станки</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/zubofrezernoe-oborudovanie/zubofrezernye-stanki/" class="menu_inner__link">
                                        <span class="menu_inner__text">Зубофрезерные станки</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/zubofrezernoe-oborudovanie/zuboshlifovalnye-stanki/" class="menu_inner__link">
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
                                      <a href="https://maihong.ru/catalog/shlifovalnye-stanki/krugloshlifovalnye-stanki-s-chpu/" class="menu_inner__link">
                                        <span class="menu_inner__text">Круглошлифовальные станки с ЧПУ</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/shlifovalnye-stanki/ploskoshlifovalnye-stanki-s-chpu/" class="menu_inner__link">
                                        <span class="menu_inner__text">Плоскошлифовальные станки с ЧПУ</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/shlifovalnye-stanki/vnutrishlifovalnye-stanki-s-chpu/" class="menu_inner__link">
                                        <span class="menu_inner__text">Внутришлифовальные станки с ЧПУ</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/shlifovalnye-stanki/profileshlifovalnye-stanki-s-chpu/" class="menu_inner__link">
                                        <span class="menu_inner__text">Профилешлифовальные станки с ЧПУ</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/shlifovalnye-stanki/koordinatno-shlifovalnye-stanki-s-chpu/" class="menu_inner__link">
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
                                  <a href="https://maihong.ru/catalog/elektroerozionnye-stanki/" class="menu_inner__link">
                                    <span class="menu_inner__text">Электроэрозионные станки</span>
                                  </a>

                                  <ul class="menu_inner__list">
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/elektroerozionnye-stanki/kopirovalno-proshivnye-stanki/" class="menu_inner__link">
                                        <span class="menu_inner__text">Копировально-прошивные станки</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/elektroerozionnye-stanki/provolochno-vyreznye-stanki/" class="menu_inner__link">
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
                                  <a href="https://maihong.ru/catalog/vspomogatelnoe-oborudovanie/" class="menu_inner__link">
                                    <span class="menu_inner__text">Вспомогательное оборудование</span>
                                  </a>

                                  <ul class="menu_inner__list">
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/vspomogatelnoe-oborudovanie/vintovye-kompressory/" class="menu_inner__link">
                                        <span class="menu_inner__text">Винтовые компрессоры</span>
                                      </a>
                                    </li>
                                    <li class="menu_inner__item menu_inner__item--subsection">
                                      <a href="https://maihong.ru/catalog/vspomogatelnoe-oborudovanie/filtratsionnaya-ustanovka-fvu/" class="menu_inner__link">
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
                                  <a href="https://maihong.ru/catalog/zapchasti-dlya-metalloobrabatyvayushchikh-stankov/" class="menu_inner__link">
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
                                  <a href="https://maihong.ru/catalog/raskhodnye-materialy-dlya-metalloobrabatyvayushchikh-stankov/" class="menu_inner__link">
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
        <div class="header__block">
          <div class="header__phone phone">
            <a href="tel:+78007002985" class="phone__link"> <span class="phone__text">8 (800) 700-29-85</span> </a>                        </div>
          <div class="header__social social">
            <div class="social__item">
              <a href="https://t.me/Maih0ng" class="social__link" target="_blank">
    <span class="social__icon block_flex">
        <img src="/upload/frontend/tg_icon_maihong.svg" alt="Telegram" class="img_contain social__img--black">
    </span>
              </a>                            </div>
            <div class="social__item">
              <a href="https://api.whatsapp.com/send/?phone=79647731808&amp;text=Здравствуйте! Номер моей заявки: 205451" class="social__link" target="_blank">
    <span class="social__icon block_flex">
        <img src="/upload/frontend/whatsapp_icon_maihong.svg" alt="WhatsApp" class="img_contain social__img--black">
    </span>
              </a>                            </div>
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
  <main><div class="page page--main">

