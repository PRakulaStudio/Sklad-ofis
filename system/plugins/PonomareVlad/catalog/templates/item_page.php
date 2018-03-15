<?php if (is_callable('getData')): ?>
    <!DOCTYPE html>
    <html xmlns="https://www.w3.org/1999/xhtml">

    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<base href="//sklad-ofis.ru/"/>-->
        <base href="//sklad-ofis.ru"/>

        <!--[if IE]>
        <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

        <meta name='yandex-verification' content='5c6c68c67cb1b959'/>
        <title><?= getData('title'); ?></title>
        <meta name="keywords"
              content="<?= getData('title'); ?>"/>
        <meta name="description"
              content="<?= getData('short_description'); ?>"/>


        <link rel="stylesheet" type="text/css" href="/assets/templates/v1.css"/>
        <script type="text/javascript" src="//vk.com/js/api/share.js?85" charset="windows-1251" async></script>
        <!-- HotLog
        <script type="text/javascript">
            hotlog_r=""+Math.random()+"&s=2298231&im=307&r="+
                escape(document.referrer)+"&pg="+escape(window.location.href);
            hotlog_r+="&j="+(navigator.javaEnabled()?"Y":"N");
            hotlog_r+="&wh="+screen.width+"x"+screen.height+"&px="+
                (((navigator.appName.substring(0,3)=="Mic"))?screen.colorDepth:screen.pixelDepth);
            hotlog_r+="&js=1.3";
            document.write('<div style="display:none"><a href="//click.hotlog.ru/?2298231" target="_blank"><img '+
                           'src="//hit3.hotlog.ru/cgi-bin/hotlog/count?'+
                           hotlog_r+'" border="0" width="88" height="31" title="HotLog: показано количество посетителей за сегодня, за вчера и всего" alt="HotLog"><\/a></div>');
        </script>
        <!-- /HotLog -->
        <meta name="google-site-verification" content="WwQ5PN02ZnEsP7NAw4g0VsqxKgx-lGt8zx9BZqG2UwQ"/>
        <style>
            .bg_in {
                background-position-y: -55px;
            }

            .tovar_page {
                margin-top: 30px;
            }
        </style>
        <script src='https://www.google.com/recaptcha/api.js'></script>

    </head>

    <body class="bg_in">
    <!--тесттесттест-->
    <div id="wrapper">
        <?php require_once 'header.php' ?>

        <div id="content">
            <div class="wrap link__head">
                <nav>
                    <div style="float:left; margin-right:40px; margin-left:230px;">
                        <ul class='box' style='height:102px;'>
                            <!--li><a href='arenda-sklada/'>Аренда склада</a></li-->
                            <li><a href='/arenda-sklada/kupit-sklad.html'>Купить склад</a></li>
                            <li><a href='/prodazha-kommercheskoj-nedvizhimosti.html'>Продажа склада</a></li>
                            <li><a href='/arenda-sklada/otvetstvennoe-hranenie.html'>Склады ответственного хранения</a>
                            </li>
                            <li><a href='/arenda-sklada-v-moskve/'>Аренда склада в Москве</a></li>
                            <li><a href='/sklady-v-moskovskoj-oblasti.html'>Аренда склада в Московской области</a></li>
                        </ul>
                    </div>
                    <div style="float:left; margin-right:40px">
                        <ul class='box' style='height:102px;'>
                            <li><a href='/arenda-sklada/arenda-sklada-ot-sobstvennika.html'>Аренда склада от
                                    собственника</a></li>
                            <li><a href='/arenda-sklada/teplyi-sklad.html'>Аренда теплого склада</a></li>
                            <li><a href='/arenda-sklada/holodnyi-sklad.html'>Аренда холодного склада</a></li>
                            <li><a href='/arenda-sklada/sklad-do-1000m.html'>Аренда склада до 1000м.</a></li>
                            <li><a href='/arenda-sklada/farmacevticheskij-sklad.html'>Аренда фармацевтического склада</a>
                            </li>
                            <!--li><a href="tovars/">Все объекты</a></li-->
                        </ul>
                    </div>
                </nav>
                <br class='clear'/>
            </div>
            <div class="wrap">
                <!-- -->
                <div class="breadcrumbs">
                    <a href="#">Главная</a> > <a href="tovars/">Каталог</a> > <span><?= getData('title'); ?></span>
                </div>
                <!-- -->
                <div class="central">
                    <div class="meta">

                    </div>


                    <!-- .tovar_page  -->
                    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "description": "<?= getData('short_description'); ?>",
  "name": "<?= getData('title'); ?>",
  "image": "<?= getData('cover_image'); ?>",
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "price": "1800 руб. в год",
    "priceCurrency": "RUB"
  },
  "url": "<?= getData('href'); ?>",
  "sku": "<?= getData('id'); ?>",
  "category": "аренда Склад"
}









                    </script>


                    <div class="tovar_page" itemscope itemtype="http://schema.org/Product">

                        <div class="left"> <!---->


                            <!-- Start photosgallery-std -->
                            <div class="sliderkit photosgallery-std">
                                <div class="sliderkit-nav">
                                    <div class="sliderkit-nav-clip">

                                        <ul>

                                            <?php $GLOBALS['short_description'] = getData('short_description'); ?>
                                            <?= getData('images', [
                                                'id' => 'item_slider_navigation_slide',
                                                'source' => '<li><a href="#" title="<?=$GLOBALS[\'short_description\'];?>"><img src="<?=getData(\'300\');?>" alt="[Alternative text]"/></a></li>'
                                            ]);
//                                            foreach ($images as $image) echo '<li><a href="#" title="' . getData('short_description') . '"><img src="' . $image['300'] . '" alt="[Alternative text]"/></a></li>';
                                            ?>


                                            <!---->
                                        </ul>
                                    </div>
                                    <div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-prev"><a rel="nofollow"
                                                                                                       href="#"
                                                                                                       title="Previous line"><span>Previous line</span></a>
                                    </div>
                                    <div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-next"><a rel="nofollow"
                                                                                                       href="#"
                                                                                                       title="Next line"><span>Next line</span></a>
                                    </div>
                                </div>
                                <div class="sliderkit-panels">
                                    <?php getData('images', [
                                        'id' => 'item_slider_viewbox_slide',
                                        'source' => '<div class="sliderkit-panel"><a href="<?=getData(\'original\');?>" rel="group" target="_blank"><img src="<?=getData(\'500\');?>" alt="skofImage" itemprop="image"/></a></div>'
                                    ]);
//                                    foreach ($images as $image) echo '<div class="sliderkit-panel"><a href="' . $image['original'] . '" rel="group" target="_blank"><img src="' . $image['500'] . '" alt="skofImage" itemprop="image"/></a></div>';
                                    ?>
                                </div>
                            </div>
                            <!-- // end of photosgallery-std -->
                            <script type="text/javascript" src="//yandex.st/share/share.js"
                                    charset="utf-8"></script>
                            <div class="yashare-auto-init" data-yashareL10n="ru"
                                 data-yashareType="none"
                                 data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir,gplus"

                            ></div>

                            <a class="zajavka2 zajavka3"
                               onclick="$('.zaya input[name=id]').val(<?= getData('id'); ?>); return false;"
                               href="#"><span>Оставить заявку</span>
                            </a>
                            <span class="h3">РАНЕЕ ПРОСМОТРЕННЫЕ ПРЕДЛОЖЕНИЯ</span>
                            <ul class="nedavno" sysm="vyvod_objekta_2">
                                <li>
                                    <div class='card_wrapper'>
                                        <div class="title"><?= getData('title'); ?></div>

                                        <a class='img'
                                           href="tovary/arenda-otkrytoj-ploshhadki-1000-kv.m.-yuvao-moskvy-okolo-ttk.html"><img
                                                    src="//sklad-ofis.ru/system/cache/thumb/assets/images/object/MTUwODIzNjIxNzAzLTAy.246x110.jpg"></a>

                                        <span class='z_id'><?= getData('id'); ?></span>
                                        <p>Район: <span class="bold green">ЮВАО Москва</span></p>
                                        <p>Цена за метр в, руб.: <span class="bold green">1800</span></p>
                                        <p>Общая площадь: <span class="bold green">1000 кв. м</span></p></div>
                                    <a onclick="$('.zaya input[name=id]').val(<?= getData('id'); ?>); return false;" class="zajavka feedback_popup">Оставить заявку</a><a
                                            href="tovary/arenda-otkrytoj-ploshhadki-1000-kv.m.-yuvao-moskvy-okolo-ttk.html"
                                            class="more">Подробнее>></a>
                                    <div class="clear"></div>
                                </li>
                                <div class="clear"></div>
                            </ul>

                        </div>
                        <div class="right">

                            <div class='h1' itemprop="name"><h1><span
                                            class='num'>№<?= getData('id'); ?> </span><?= getData('title'); ?>
                                </h1><!--<h2> ЮВАО Москвы, около ТТК</h2>-->
                            </div>
                            <div class="h_ki">
                                <p>Номер объекта: <span><?= getData('id'); ?></span></p>
                                <p class='type_p'>Тип предложения: <span>
<a href='tovars/?vid_obekta=Склад&vid_operacii=аренда'><?= getData('object_category'); ?></a></span></p>


                                <p>Район:&nbsp;<span><a
                                                href="/?id=72&rayon=ЮВАО Москва&vid_obekta=Склад"><?= getData('region'); ?></a></span>
                                </p>
                                <p>Метро:&nbsp;<span><a
                                                href="/?id=72&metro=Кожуховская"><?= getData('metro'); ?></a></span>
                                </p>
                                <p>Шоссе:&nbsp;<span>&nbsp;<a
                                                href="/?id=72&shosse=Каширское&vid_obekta=Склад&vid_operacii=аренда"><?= getData('highway'); ?></a></span>
                                </p>


                                <p>Общая площадь:&nbsp;<span><a
                                                href="/?id=72&ploshyad_objekta=1000&tip_ploshadi=кв. м&ploshyad_objekta_do=1000&vid_obekta=Склад"><?= getData('maximum_space'); ?> <?= getData('space_dimension'); ?></a></span>
                                </p>
                                <!--p>Общая площадь:  <span>1000 кв. м</span></p-->


                                <p itemprop="offers" itemscope itemtype="http://schema.org/Offer">Цена за метр: <a
                                            class='red'
                                            href='tovars/?cena_objekta=1800&tip_ceny=в год&vid_obekta=Склад&vid_operacii=аренда'><span
                                                class="red"><span itemprop="price"><?= getData('price'); ?></span> руб. <span
                                                    itemprop="priceCurrency"
                                                    style="display:none;">RUB</span><?= getData('price_dimension'); ?></span></a>
                                </p>


                                <br/>


                                <p>Свободная
                                    площадь:&nbsp;<span><?= getData('available_space'); ?> <?= getData('space_dimension'); ?></span>
                                </p>

                                <p>Тип пола:&nbsp;<span><?= getData('floor_type'); ?></span></p>


                                <p>Технические характеристики: </p>
                                <ul>
                                    <?php $features = getData('features');
                                    foreach ($features as $feature) echo '<li>' . $feature . '</li>';
                                    ?>
                                </ul>
                                <br>


                                <!-- <b class='manager'></b>
                    <p>Менеджер на объекте:&nbsp;<span>Елена</span></p>
                    <p>Телефон:&nbsp;<span>+7(985)190-40-00</span></p>

                     -->
                            </div>
                            <div class="outh">

                                <a class="zajavka2_1"
                                   href="tovary/arenda-otkrytoj-ploshhadki-1000-kv.m.-yuvao-moskvy-okolo-ttk.html#callback_div"
                                   onclick="$('#callback_div').css('display','block')"><span>Обратный звонок</span></a>

                                <!--<a class="favorites" href="375.html"><span>Добавить в избранное</span></a> ; return false; -->
                                <form method="POST">
                                    <input type="hidden" value="<?= getData('id'); ?>" name="favorites">
                                    <input class="favorites" type="submit" value="Добавить в избранное">
                                </form>

                                <div style="border:2px solid #e5e5e5;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
padding:0 0 7px 3px;
font-family: 'cuprumregular';
color:#ff9138;
font-size:18px;">
                                    <p>Связаться с нами:</p>
                                    <p><span style="width:100%;font-family:Verdana, Geneva, sans-serif;
font-size:19px;
color:#ff9138;
margin:5px 0;
display:block;">
					<a href="tel:+74952262215" style="color: #ff9138;text-decoration: none;">+7 (495) 226-22-15</a>

					</span></p>
                                    <p><span style="width:100%;font-family:Verdana, Geneva, sans-serif;
font-size:18px;
color:#ff9138;
margin:5px 0;
display:block;" class='email'>arenda@sklad-ofis.ru</span></p>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <span class='descr'>ОПИСАНИЕ</span>
                            <div itemprop="description">
                                <?= getData('full_description'); ?>
                            </div>
                            <div class="clear"></div>
                            <br/>
                            <h2 class='descr'><p></p></h2>
                        </div>
                        <div class="clear"></div>
                    </div> <!-- .tovar_page  -->
                </div>

                <div id="callback_div">
                    <table align="center" style="text-align: center; line-height: 1.5;">
                        <tbody>
                        <tr>
                            <td><span class="product-callback-form-title">Обратный звонок</span></td>
                        </tr>
                        <tr>
                            <td><h3 id="err_msg"></h3></td>
                        </tr>
                        <tr>
                            <td><p>Ваше имя</p></td>
                        </tr>
                        <tr>
                            <td><input type="text" id="callback_name"></td>
                        </tr>
                        <tr>
                            <td><p>Телефон</p></td>
                        </tr>
                        <tr>
                            <td><input type="text" id="callback_phone"></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="policy" style="margin-top: 10px;">
                                    <input type="checkbox" name="policy" value="1" class="required" checked=""
                                           id="callback_policy">
                                    <span>Принимаю <a href="politika-konfidencialnosti.html" target="_blank">политику конфиденциальности</a></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><a class="zajavka2_2" onclick="callback_send()"
                                   style="margin-left: auto;margin-right: auto;"><span>Заказать</span></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- //SYSM comment: tovar_page -->


            </div>

        </div>
    </div>
    </div><!-- #content-->
    </div><!-- #wrapper -->

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
            от sklad-ofis.ru — продажа коммерческой недвижимости в москве, <a
                    href='/tovars/?vid_obekta=строительство под заказчика'>ответственное хранение</a><!--
-->

            <p><a href="karta-sajta.html" title="Карта сайта">Карта сайта</a></p>
        </div>
    </footer>


    <!-- RedHelper
    <script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async"
        src="https://web.redhelper.ru/service/main.js?c=terminal1204">
    </script>
    <!--/Redhelper -->
    <!-- #footer -->


    <script type="text/javascript" src="/assets/templates/v2.js?v=0.1"></script>

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="/assets/js/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen"/>
    <script type="text/javascript" src="/assets/js/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $(".sliderkit-panels a").fancybox({
                maxWidth: 800,
                maxHeight: 600,
                fitToView: false,
                width: '70%',
                height: '70%',
                autoSize: false,
                closeClick: false,
                openEffect: 'none',
                closeEffect: 'none'
            });
        });
    </script>
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
    <script src="/system/plugins/secargonia/wishlist/web/js/wishlist.js?v=0.1"></script>
    <script src="/system/plugins/secargonia/feedback/web/js/feedback.js?v=0.2.7"></script>
    <script src="/assets/js/akula.js"></script>
    <script>console.debug(JSON.parse('<?=addslashes(getData(false, false, false, true));?>'));</script>
    </body>
    </html>
<?php endif; ?>