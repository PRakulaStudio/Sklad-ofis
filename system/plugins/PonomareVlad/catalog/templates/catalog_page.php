<?php if (is_callable('getData')): ?>
    <!DOCTYPE html>

    <html xmlns="http://www.w3.org/1999/xhtml" sysm="so_my_template_hd_2">
    <!--HEAD-->
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--[if IE]>
        <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <title><?= getData('meta_title'); ?></title>

        <meta name='yandex-verification' content='5c6c68c67cb1b959'/>
        <meta name="google-site-verification" content="9kl24DY61G4Tc_1Pz4_2lSuhNy9V06WyQ9ppXIIFLCE"/>
        <meta name="keywords" content="<?= getData('meta_keywords'); ?>"/>
        <meta name="description" content="<?= getData('meta_description'); ?>"/>
        <link rel="stylesheet" href="/assets/style.css" type="text/css" media="screen"/>
        <script type="text/javascript" src="/assets/js/jquery-1.6.1.js"></script>
        <script type="text/javascript" src="/assets/js/jScrollPane.js"></script>
        <script type="text/javascript" src="/assets/js/slides.min.jquery.js"></script>
        <!-- слайдер вверху -->
        <script type="text/javascript" src="/assets/js/jquery.tinycarousel.min.js"></script>    <!-- слайдер внизу -->

        <script type="text/javascript" src="/assets/js/jquery-ui_slider.js"></script>
        <!-- -->
        <!-- радиокнопки скрипт-->
        <script type="text/javascript" src="/assets/js/control_radio.js"></script>                <!-- UI подбор -->
        <script type="text/javascript" src="/assets/js/jquery.checkbox.js"></script>            <!-- чекбокс -->
        <script type="text/javascript" src="/assets/js/jquery.sliderkit.1.4.js"></script>        <!-- Slider Kit 3шт -->
        <script type="text/javascript" src="/assets/js/jquery.easing.1.3.min.js"></script>
        <script type="text/javascript" src="/assets/js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="/assets/js/init.js"></script>
        <script type="text/javascript" src="/assets/js/scrollbar.js"></script>
        <link rel="stylesheet" href="/map/style.css" type="text/css" media="screen, projection"/>
        <script type="text/javascript" src="/map/canvas_script.js"></script>
        <script type="text/javascript" src="/assets/js/ellipsis.js"></script>
        <script type="text/javascript" src="/assets/js/callback.js"></script>
        <script type="text/javascript"
                src="//maps.googleapis.com/maps/api/js?key=AIzaSyBAL0RG1jaL86itdftjrstsyAGUavq5gWg&sensor=false&libraries=geometry,drawing,places"></script>

        <script type='text/javascript'>

            function searchObject() {
                $('#searchForm').submit();
            };
        </script>
        <meta name="google-site-verification" content="WwQ5PN02ZnEsP7NAw4g0VsqxKgx-lGt8zx9BZqG2UwQ"/>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body><a name='yandex_top'></a>
    <script>var loc = 'https://sklad-ofis.ru/arenda-sklada/teplyi-sklad.html';</script>
    <script src="//yandex.st/hilitedaemon-js/1.29/_counter.js" type="text/javascript"></script>
    <script>document.domain = 'yandex.net'</script>
    <style>.highlight_active {
            margin: 0 -0.15em;
            padding: 0 0.15em;
            background: #ffff00;
            border: 2px solid #ffff00;
            color: #000 !important;
        }

        .b-safe-panel__inject-current {
            border: 2px solid red;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            -webkit-box-shadow: 0 0 4px red;
            -moz-box-shadow: 0 0 4px red;
            box-shadow: 0 0 4px red;
        }</style>
    <script> (window.YaCC || (window.YaCC = {})).date = '12.12.2017 [03:32:54]';
        window.YaCC.mysign = '1514310534.f5fd8adeff8fdb0551f2ffdcf8273fcc'; </script>

    <div id="wrapper">
        <header id="header">
            <div class="wrap">
                <div class="head_right">
                    <div style="width:100%;font-family:Verdana, Geneva, sans-serif;
font-size:21px;
color:#ff9138;
margin:5px 0;
display:block;"><a href="tel:+74952262215" style="color: #ff9138;text-decoration: none;">+7 (495) 226-22-15</a></div>
                    <form id="poisk" action="find.html" method="post" style="width: initial;">
                        <input type="text" name="search" placeholder="Номер объекта или фраза">
                        <input class="search" type="submit" value="Найти!">
                    </form>
                </div>
                <div class="absolute_block">
                    <a href="/city/" class="shoce towns"><span>Поиск по городам МО</span></a>
                    <a href="/highways/" class="shoce"><span>Поиск по шоссе</span></a>
                    <a href="/region/" class="distr"><span>Поиск по району</span></a>


                </div>
                <div id='blok_logo' style="float: left; width: 230px; height: 85px;">
                    <a class="logo" href="/"></a>
                </div>
                <!-- ч:topp -->
                <!--topmenu-->
                <nav>
                    <ul id="ajaxmenu" class="top_nav">
                        <ul class="box">
                            <li>
                                <a href="/">Главная
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="ostavit_zayavku/">Оставить заявку
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="kontakti.html">Контакты
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="vakansii.html">Вакансии
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="tovars/">Объекты
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="stati/">Статьи
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="build-to-suit.html">BTS
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                        </ul>

                    </ul>
                </nav>
                <button class="hamburger mobile">&#9776;</button>
                <button class="cross mobile">&#735;</button>
                <div class="mobile_menu mobile">
                    <ul>
                        <ul class="box">
                            <li>
                                <a href="/">Главная
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="ostavit_zayavku/">Оставить заявку
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="kontakti.html">Контакты
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="vakansii.html">Вакансии
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="tovars/">Объекты
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="stati/">Статьи
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="build-to-suit.html">BTS
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                        </ul>

                        <li><a href="/city/">Поиск по городам МО</a></li>
                        <li><a href="/highways/">Поиск по шоссе</a></li>
                        <li><a href="/region/">Поиск по району</a></li>
                    </ul>
                </div>

                <div class='zaya'>
                    <form method='post' class="form-sysm">
                        <div class='close'>x</div>
                        <input type='hidden' name='id' value='1588'/>
                        <input type="hidden" name="fb-id" value="1821">
                        <input type="hidden" name="fb-vidoperacii_name" value="Аренда">
                        <input type="hidden" name="fb-rayon_name" value="МО Северо-восток">
                        <input type="hidden" name="fb-metro_name" value="Не выбрано">
                        <input type="hidden" name="fb-kmotmkad" value="15">
                        <input type="hidden" name="fb-cena" value="140">
                        <table>
                            <tbody>
                            <tr>
                                <td class='title' colspan='3'>Заявка на объект</td>
                            </tr>
                            <tr>
                                <td class="name">Контактное лицо:</td>
                                <td class="data"><input type="text" id="fb-name" name="fb-name" size="25"></td>
                                <td rowspan='3' class='img'><img src="" alt=""></td>
                            </tr>
                            <tr>
                                <td class="name">Контактный e-mail:</td>
                                <td class="data"><input type="text" id="fb-mail" name="fb-mail" size="25"></td>
                            </tr>
                            <tr>
                                <td class="name">Контактный телефон:</td>
                                <td class="data"><input type="text" id="fb-phone" name="fb-phone" size="25"></td>
                            </tr>
                            <tr>
                                <td class="name">Сообщение:</td>
                                <td class="data" colspan='2'><textarea name="fb-message" id="fb-message" cols="45"
                                                                       rows="6"></textarea></td>
                            </tr>
                            <tr>
                                <td class="name"></td>
                                <td class="data"><img src="captcha.php" alt="captcha"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="name">Защитный код:</td>
                                <td class="data"><input type="text" id="fb-kapcha" name="fb-kapcha" size="25"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="2">
                                    <div class="policy">
                                        <input type="checkbox" name="policy" value="1" class="required" checked="">
                                        <span>Принимаю <a href="politika-konfidencialnosti.html" target="_blank">политику конфиденциальности</a></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="name">&nbsp;</td>
                                <td class="data"><input type="submit" id="submit" name="fm-submit" value="Отправить">
                                </td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>


                    </form>
                </div> <!--Заявка-->


            </div>
        </header><!-- #header-->

        <div id="content">
            <div class="grey top">
                <div class="wrap">
                    <!-- -->
                    <div id="container">
                        <div id="example">
                            <div id="slides">
                                <div class="slides_container">
                                    <div class="slaid">
                                        <p class="lft">
                                            <span>Административно-складской комплекс «А» класса</span>
                                            <span><i>Варшавское шоссе, 10 км. от МКАД</i></span>
                                        </p>
                                        <a href="tovary/varshavskoe-shosse-arenda-sklada-klassa-a-ploshhadyu-ot-3000-do-10000-kv.-m.html"
                                           class="more">Смотреть далее</a>
                                        <img src="https://sklad-ofis.ru/assets/images/ban6.png" alt="">
                                    </div>
                                    <div class="slaid">
                                        <p class="lft">
                                            <span>Складской комплекс «А» класса, площадь в аренду до 15000 кв.м.</span>
                                            <span><i>Ленинградское шоссе, 10 км. от МКАД</i></span>
                                        </p>
                                        <a href="tovary/leningradskoe-shosse-arenda-sklada-klassa-a-obshhaya-ploshhad-ot-3000-do-15000-kv.-m.html"
                                           class="more">Смотреть далее</a>
                                        <img src="https://sklad-ofis.ru/assets/images/ban2.png" alt="">
                                    </div>
                                    <div class="slaid">
                                        <p class="lft">
                                            <span>Аренда склада класса «А» рядом с МКАД</span>
                                            <span><i>Новорязанское шоссе</i></span>
                                        </p>
                                        <a href="tovary/novoryazanskoe-shosse-arenda-sklada-klassa-a-obshhaya-ploshhad-ot-5000-do-30000-kv.-m.html"
                                           class="more">Смотреть далее</a>
                                        <img src="https://sklad-ofis.ru/assets/images/ban4_.png" alt="">
                                    </div>
                                    <div class="slaid">
                                        <p class="lft">
                                            <span>Продажа склада «А» класса, площадь до 30000 кв.м.</span>
                                            <span><i>Ленинградское шоссе, 10 км. от МКАД</i></span>
                                        </p>
                                        <a href="tovary/leningradskoe-shosse-prodazha-sklada-klassa-a-obshhaya-ploshhad-ot-10000-do-30000-kv.-m.html"
                                           class="more">Смотреть далее</a>
                                        <img src="https://sklad-ofis.ru/assets/images/ban1.png" alt="">
                                    </div>
                                    <div class="slaid">
                                        <p class="lft">
                                            <span>Складской комплекс «А» класса, площадь в аренду до 9000 кв.м.</span>
                                            <span><i>Дмитровское шоссе, 10 км. от МКАД</i></span>
                                        </p>
                                        <a href="tovary/dmitrovskoe-shosse-arenda-sklada-klass-a-obshhaya-ploshhad-ot-4000-do-9000-kv.-m.html"
                                           class="more">Смотреть далее</a>
                                        <img src="https://sklad-ofis.ru/assets/images/ban5_.png" alt="">
                                    </div>

                                </div>
                                <a href="#" class="prev"></a>
                                <a href="#" class="next"></a>
                            </div>
                        </div>
                        <div class="wrap link__head">
                            <nav>
                                <div style="float:left; margin-right:40px; margin-left:230px;">
                                    <ul class='box' style='height:102px;'>
                                        <!--li><a href='arenda-sklada/'>Аренда склада</a></li-->
                                        <li><a href='arenda-sklada/kupit-sklad.html'>Купить склад</a></li>
                                        <li><a href='prodazha-kommercheskoj-nedvizhimosti.html'>Продажа склада</a></li>
                                        <li><a href='arenda-sklada/otvetstvennoe-hranenie.html'>Склады ответственного
                                                хранения</a></li>
                                        <li><a href='arenda-sklada-v-moskve/'>Аренда склада в Москве</a></li>
                                        <li><a href='sklady-v-moskovskoj-oblasti.html'>Аренда склада в Московской
                                                области</a></li>
                                    </ul>
                                </div>
                                <div style="float:left; margin-right:40px">
                                    <ul class='box' style='height:102px;'>
                                        <li><a href='arenda-sklada/arenda-sklada-ot-sobstvennika.html'>Аренда склада от
                                                собственника</a></li>
                                        <li><a href='arenda-sklada/teplyi-sklad.html'>Аренда теплого склада</a></li>
                                        <li><a href='arenda-sklada/holodnyi-sklad.html'>Аренда холодного склада</a></li>
                                        <li><a href='arenda-sklada/sklad-do-1000m.html'>Аренда склада до 1000м.</a></li>
                                        <li><a href='arenda-sklada/farmacevticheskij-sklad.html'>Аренда
                                                фармацевтического
                                                склада</a></li>
                                        <!--li><a href="tovars/">Все объекты</a></li-->
                                    </ul>
                                </div>
                            </nav>
                            <br class='clear'/>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--left_main -->

                    <!--right_main_vnt-->


                    <div class="clear"></div>
                </div>
            </div>
            <!--grey-->


            <div class="wrap">

                <div class="so_ufu_section_cont">
                    <?= getData('childSections', 'catalog_sections_item') ?></div>


                <div class="result_nav">
                    <div class="left">
                        <div class="rez_title"><h1><?= getData('title'); ?></h1></div>
                    </div>
                    <div class="right">
                        <span>Сортировать по цене:</span>

                        <a href="<?= $_SERVER['REQUEST_URI'] ?>?order=desc" id='desc' class=""><i>По убыв.</i></a>
                        <a href="<?= $_SERVER['REQUEST_URI'] ?>?order=asc" id='asc' class=""><i>По возр.</i></a>
                    </div>
                    <div class="clear"></div>
                </div>


                <ul class="grbx results" sysm="so_my_snippet_rent">
                    <div class="pages1">
                        <div class='pagess'>
                            <?php
                            $pagesCount = getData('pages');
                            $currentPage = getData('currentPage');
                            for ($i = 1; $i <= $pagesCount; $i++) echo $currentPage == $i ? '<span>' . $i . '</span>' : '<a href="?page=' . $i . '">' . $i . '</a>';
                            ?>
                        </div>
                    </div>
                    <?= getData('items', 'catalog_list_item'); ?>
                    <div class="clear">
                        <div class='pagess'>
                            <?php
                            for ($i = 1; $i <= $pagesCount; $i++) echo $currentPage == $i ? '<span>' . $i . '</span>' : '<a href="?page=' . $i . '">' . $i . '</a>';
                            ?>
                        </div>
                    </div>
                </ul>


                <article class="main">
                    <h2><?= getData('meta_title'); ?></h2>
                    <?= getData('content'); ?>
                </article>


            </div>


        </div>
    </div>
    </div>
    </div><!-- #content-->

    </div><!-- #wrapper -->

    <!-- #footer -->
    <footer id="footer">
        <div class="wrap">
            <!--ul class="foot_menu">
    <li><a href="tovars/search_ofis.html">Аренда офиса</a></li>
    <li><a href="tovars/search_prodazha.html">Продажа офисов</a></li>
    <li><a href="tovars/torgov_ploshyad.html">Торговые площади</a></li>
    <li><a href="tovars/arenda_sklada.html">Аренда склада</a></li>
    <li><a href="tovars/skladskie_pomeshenie.html">Складские помещения</a></li>
    </ul-->
            <!--topmenu-->

            <div class="foot_phone">

                <span class='email'> <script>document.write("<a href='mailto:arenda@" + "sklad-ofis.ru'>arenda" + "@sklad-" + "ofis.ru</a>")</script></span>
                <div class='clear'></div>

                <span> 8 (495) 226-22-15
			</span>

            </div>
            <!--<div class="clear"></div> -->

            <!-- Yandex.Metrika informer -->
            <a href="https://metrika.yandex.ru/stat/?id=29424345&amp;from=informer"
               target="_blank" rel="nofollow"><img
                        src="https://informer.yandex.ru/informer/29424345/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
                        style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика"
                        title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)"
                        onclick="try{Ya.Metrika.informer({i:this,id:29424345,lang:'ru'});return false}catch(e){}"/></a>
            <!-- /Yandex.Metrika informer -->

            <!-- Yandex.Metrika counter -->
            <script type="text/javascript">
                (function (d, w, c) {
                    (w[c] = w[c] || []).push(function () {
                        try {
                            w.yaCounter29424345 = new Ya.Metrika({
                                id: 29424345,
                                clickmap: true,
                                trackLinks: true,
                                accurateTrackBounce: true,
                                webvisor: true
                            });
                        } catch (e) {
                        }
                    });

                    var n = d.getElementsByTagName("script")[0],
                        s = d.createElement("script"),
                        f = function () {
                            n.parentNode.insertBefore(s, n);
                        };
                    s.type = "text/javascript";
                    s.async = true;
                    s.src = "https://mc.yandex.ru/metrika/watch.js";

                    if (w.opera == "[object Opera]") {
                        d.addEventListener("DOMContentLoaded", f, false);
                    } else {
                        f();
                    }
                })(document, window, "yandex_metrika_callbacks");
            </script>
            <noscript>
                <div><img src="https://mc.yandex.ru/watch/29424345" style="position:absolute; left:-9999px;" alt=""/>
                </div>
            </noscript>
            <!-- /Yandex.Metrika counter -->

            <!-- google -->
            <script>
                (function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

                ga('create', 'UA-10581168-19', 'sklad-ofis.ru');
                ga('send', 'pageview');

            </script>
            <!-- /google -->
        </div>
        <div class="copy" style="display: none;">
        </div>
        <div style="padding: 44px 0 10px 0; text-align: center;background: #fff;">
            © 2008-2017 Все права защищены. <br/>
            <a href='/' title="Аренда склада">Аренда склада</a>
            от sklad-ofis.ru — строительство под заказчика, <a href='arenda-sklada-v-moskve/'>аренда складов в
                Москве</a><!--
-->

            <p><a href="karta-sajta.html" title="Карта сайта">Карта сайта</a></p>
        </div>
    </footer>


    <!-- RedHelper
    <script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async"
        src="https://web.redhelper.ru/service/main.js?c=terminal1204">
    </script>
    <!--/Redhelper -->


    <script>
        $(".cross").hide();
        $(".mobile_menu").hide();
        $(".hamburger").click(function () {
            $(".mobile_menu").slideToggle("slow", function () {
                $(".hamburger").hide();
                $(".cross").show();
            });
        });

        $(".cross").click(function () {
            $(".mobile_menu").slideToggle("slow", function () {
                $(".cross").hide();
                $(".hamburger").show();
            });
        });
    </script>

    <script>
        if (!window.pms) window.pms = {};
        if (!window.pms.plugin) window.pms.plugin = {};
        if (!window.pms.plugin.catalog) window.pms.plugin.catalog = {};
        window.pms.plugin.catalog.itemsData = <?=getData(false, false, false, true);?>;
        console.debug(window.pms.plugin.catalog.itemsData);
    </script>
    </body>
    </html>
<?php endif; ?>