<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/system/bootstrap.php' ?>
<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <title>Аренда склада | Аренда, продажа, покупка складов и офисов в одном месте от компании Складов</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="склад аренда снять"/>
    <meta name="description"
          content="Аренда склада. складских и офисных помещений от Складов. Склады и офисы сдаваемые в аренду. Самая большая база складов в Москве и Московской области"/>
    <meta name='yandex-verification' content='5c6c68c67cb1b959'/>
    <meta name="google-site-verification" content="WwQ5PN02ZnEsP7NAw4g0VsqxKgx-lGt8zx9BZqG2UwQ"/>
    <!--[if IE]>
    <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" type="text/css" href="/assets/templates/v2.css"/>
</head>
<body>
<div id="wrapper">
    <header id="header">
        <div class="wrap">
            <div class="head_right">
                <div data-global-container="var_phone"
                     style="width:100%;font-family:Verdana, Geneva, sans-serif;font-size:21px;color:#ff9138;margin:5px 0;display:block;"><a href="tel:+74952262215" class="phone">+7 (495) 226-22-15</a></div>
                <form id="poisk" action="find.html" method="post" style="width: initial;">
                    <input type="text" name="search" placeholder="Номер объекта или фраза">
                    <input class="search" type="submit" value="Найти!">
                </form>
            </div>
            <div data-global-container="array_catalogies" class="absolute_block"><a href="/city/" class="shoce towns"><span>Поиск по городам МО</span></a><a href="/highways/" class="shoce"><span>Поиск по шоссе</span></a><a href="/region/" class="distr"><span>Поиск по району</span></a>

            </div>
            <div id='blok_logo' style="float: left; width: 230px; height: 85px;">
                <a class="logo" href="/"></a>
            </div>
            <!-- ч:topp -->
            <!--topmenu-->
            <nav>
                <ul id="ajaxmenu" class="top_nav">
                    <ul data-global-container="array_menu" class="box"><li><a href="/">Главная<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="/ostavit_zayavku/">Оставить заявку<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="/kontakti.html">Контакты<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="/vakansii.html">Вакансии<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="/tovars/">Объекты<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="/stati/">Статьи<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="/build-to-suit.html">BTS<span class="tab-l"></span><span class="tab-r"></span></a></li>

                    </ul>

                </ul>
            </nav>
            <button class="hamburger mobile">&#9776;</button>
            <button class="cross mobile">&#735;</button>
            <div class="mobile_menu mobile">
                <ul>
                    <ul data-global-container="array_menu" class="box"><li><a href="/">Главная<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="/ostavit_zayavku/">Оставить заявку<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="/kontakti.html">Контакты<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="/vakansii.html">Вакансии<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="/tovars/">Объекты<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="/stati/">Статьи<span class="tab-l"></span><span class="tab-r"></span></a></li><li><a href="/build-to-suit.html">BTS<span class="tab-l"></span><span class="tab-r"></span></a></li>

                    </ul>

                    <div data-global-container="array_catalogies" class="box"><a href="/city/" class="shoce towns"><span>Поиск по городам МО</span></a><a href="/highways/" class="shoce"><span>Поиск по шоссе</span></a><a href="/region/" class="distr"><span>Поиск по району</span></a>

                    </div>
                </ul>
            </div>

            <div class='zaya'>
                <form method='post' class="form-sysm">
                    <div class='close'>x</div>
                    <input type='hidden' name='id' value='1'/>


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
                            <td class="data"><input type="submit" id="submit" name="fm-submit" value="Отправить"></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>


                </form>
            </div> <!--Заявка-->


        </div>
    </header><!-- #header-->

    <div id="content">
        <div class="grey top" id='main'>
            <div class="wrap link__head">
                <nav>
                    <div style="float:left; margin-right:40px; margin-left:230px;">
                        <ul data-global-container="array_catalog-selection" data-limit="5" class='box'
                            style='height:102px;'><li><a href="/arenda-sklada/kupit-sklad.html">Купить склад</a></li><li><a href="/prodazha-kommercheskoj-nedvizhimosti.html">Продажа склада</a></li><li><a href="/arenda-sklada/otvetstvennoe-hranenie.html">Склады ответственного хранения</a></li><li><a href="/arenda-sklada-v-moskve/">Склад в Москве</a></li><li><a href="/sklady-v-moskovskoj-oblasti.html">Склад в Московской области</a></li>

                        </ul>
                    </div>
                    <div style="float:left; margin-right:40px">
                        <ul data-global-container="array_catalog-selection" data-limit="5" data-offset="5" class='box'
                            style='height:102px;'><li><a href="/arenda-sklada/arenda-sklada-ot-sobstvennika.html">Склад от собственника</a></li><li><a href="/arenda-sklada/teplyi-sklad.html">Теплый склад</a></li><li><a href="/arenda-sklada/holodnyi-sklad.html">Холодный склад</a></li><li><a href="/arenda-sklada/sklad-do-1000m.html">Склад до 1000м.</a></li><li><a href="/arenda-sklada/farmacevticheskij-sklad.html">Фармацевтический склад</a></li>

                        </ul>
                    </div>
                </nav>
                <br class='clear'/>
                <div class="clear"></div>
            </div>
            <div class="wrap">


                <style>
                    .search-block .center_main {
                        float: right !important;
                        margin: 0;
                        width: 100%;
                    }

                    #sysm_home_4Objects {
                        /* height: 1%;
                        overflow: hidden; */
                        margin-bottom: 13px;
                        /* margin-bottom: 18px; */
                        height: 294px;
                        overflow: hidden;
                    }

                    #slider1 .card_wrapper {
                        overflow: hidden
                    }

                    #sysm_home_4Objects .clear {
                        height: 10px
                    }

                    #sysm_home_4Objects .viewport {
                        /* float: left; */
                        width: 100%;
                        /* min-height: 293px;
                        overflow: hidden;
                        position: relative */
                    }

                    #sysm_home_4Objects .disable {
                        visibility: hidden
                    }

                    #sysm_home_4Objects .overview {
                        /* list-style: none;
                        position: absolute;
                        padding: 0;
                        margin: 0;
                        width: 1024px;
                        left: 0;
                        top: 0 */
                    }

                    #sysm_home_4Objects ul li:hover {
                        background: #E2E2E2
                    }

                    #sysm_home_4Objects .overview li {
                        font-size: 12px;
                        background: #f2f2f2;
                        float: left;
                        width: 212px;
                        padding: 12px;
                        -webkit-border-radius: 5px;
                        -moz-border-radius: 5px;
                        border-radius: 5px;
                        behavior: url(/assets/PIE.htc);
                        height: 269px;
                        margin-right: 13px;
                        margin-bottom: 13px;

                    }

                    #sysm_home_4Objects .overview li:nth-child(4) {
                        margin-right: 0;
                    }

                    #sysm_home_4Objects .overview li:nth-child(6) {
                        margin-right: 0;
                    }

                    #sysm_home_4Objects .overview li:nth-child(9) {
                        margin-right: 0;
                    }

                    #sysm_home_4Objects .overview li {
                        display: block;
                    }

                    #sysm_home_4Objects .last_obj {
                        background: #f2f2f2;
                        float: left;
                        width: 222px;
                        padding: 12px;
                        -webkit-border-radius: 5px;
                        -moz-border-radius: 5px;
                        border-radius: 5px;
                        behavior: url(/assets/PIE.htc)
                    }

                    #sysm_home_4Objects .overview li .title {
                        color: #595959;
                        font-weight: bold;
                        margin-bottom: 8px;
                        height: 48px;
                        line-height: 14px;
                        overflow: hidden;
                        overflow: hidden !important;
                    }

                    #sysm_home_4Objects .overview li img {
                        margin: 0 -12px 4px
                    }

                    #sysm_home_4Objects .overview li p {
                        padding-bottom: 1px
                    }

                    #sysm_home_4Objects .overview li p b {
                        color: #7ac11a
                    }

                    #sysm_home_4Objects .overview li .zajavka {
                        float: left;
                        display: block;
                        color: #5c5c5c;
                        font-size: 10px;
                        text-shadow: 1px 1px 1px #fff;
                        width: 100px;
                        height: 29px;
                        line-height: 29px;
                        text-align: center;
                        border-top: 1px solid #fff;
                        border-left: 1px solid #dedede;
                        border-right: 1px solid #dedede;
                        border-bottom: 1px solid #a3a3a3;
                        -webkit-box-shadow: #a3a3a3 0px 2px 2px;
                        -moz-box-shadow: #a3a3a3 0px 2px 2px;
                        box-shadow: #a3a3a3 0px 2px 2px;
                        background: #f5f5f5;
                        background: -webkit-gradient(linear, 0 0, 0 bottom, from(#f5f5f5), to(#dedede));
                        background: -webkit-linear-gradient(#f5f5f5, #dedede);
                        background: -moz-linear-gradient(#f5f5f5, #dedede);
                        background: -ms-linear-gradient(#f5f5f5, #dedede);
                        background: -o-linear-gradient(#f5f5f5, #dedede);
                        background: linear-gradient(#f5f5f5, #dedede);
                        -pie-background: linear-gradient(#f5f5f5, #dedede);
                        -webkit-border-radius: 5px;
                        -moz-border-radius: 5px;
                        border-radius: 5px;
                        behavior: url(/assets/PIE.htc);
                        margin: 7px 0 0 0
                    }

                    #sysm_home_4Objects .overview li .more {
                        float: right;
                        color: #5c5c5c;
                        font-size: 10px;
                        text-shadow: 1px 1px 1px #fff;
                        margin: 15px 0 0 0
                    }

                    #sysm_home_4Objects .pager {
                        verflow: hidden;
                        list-style: none;
                        clear: both;
                        margin: 0 0 0 480px
                    }

                    #sysm_home_4Objects .pager li {
                        float: left;
                        margin: 25px 5px 0 5px
                    }

                    #sysm_home_4Objects .pagenum {
                        background: url(/assets/images/pagination2.png) no-repeat scroll left top;
                        width: 10px;
                        height: 10px;
                        display: block
                    }

                    #sysm_home_4Objects .active {
                        background-position: left bottom
                    }

                    #sysm_home_4Objects img {
                        width: 236px;
                        height: 110px;
                    }

                    #sysm_home_4Objects .viewport {
                        height: 350px !important
                    }

                    .btn-allobj {
                        display: inline-block;
                        width: 200px;
                        height: 28px;
                        line-height: 28px;
                        font-size: 14px;
                        font-family: 'cuprumbold';
                        color: #fff;
                        text-shadow: 0 1px 0 #558f04;
                        border: 1px solid #65a906;
                        -webkit-border-radius: 5px;
                        -moz-border-radius: 5px;
                        border-radius: 5px;
                        -webkit-box-shadow: inset #a9d46e 0px 1px 0px;
                        -moz-box-shadow: inset #a9d46e 0px 1px 0px;
                        box-shadow: inset #a9d46e 0px 1px 0px;
                        background: #8bc53c;
                        background: -webkit-gradient(linear, 0 0, 0 bottom, from(#8bc53c), to(#65a906));
                        background: -webkit-linear-gradient(#8bc53c, #65a906);
                        background: -moz-linear-gradient(#8bc53c, #65a906);
                        background: -ms-linear-gradient(#8bc53c, #65a906);
                        background: -o-linear-gradient(#8bc53c, #65a906);
                        background: linear-gradient(#8bc53c, #65a906);
                        -pie-background: linear-gradient(#8bc53c, #65a906);
                        behavior: url(/assets/PIE.htc);
                    }

                    #sysm_home_4Objects .p--last-value {
                        height: 31px;
                    }
                </style>
                <div class="search-block">
                    <!--sysm_home_podbor_more_search_min-->
                    <!-- <div class="" style="height: 25px;">
                        &nbsp;
                    </div> -->
                    <div class="search-form">
                        <style>
                            .sy_radio {
                                width: 48%;
                                display: inline-block;
                            }

                            .sy_mt0 {
                                margin-top: 0 !important;
                            }

                            .sy_mt5 {
                                margin-top: 5px !important;
                            }

                            .sy_mt10 {
                                margin-top: 10px !important;
                            }

                            .sy_mb0 {
                                margin-bottom: 0 !important;
                            }

                            .sy_mb5 {
                                margin-bottom: 5px !important;
                            }

                            .sy_pb10 {
                                padding-bottom: 10px !important;
                            }

                            .search-buttons-block {
                                padding: 0 0 0 16px;
                            }

                            .search-form .new-orange .radiobt label {
                                font-family: 'cuprumregular';
                                color: #494949;
                                font-size: 14px;
                                cursor: pointer;
                                background: url(//sklad-ofis.ru/assets/images/radio.png) no-repeat scroll left top;
                                padding: 0 0 0 22px;
                                display: block;
                                margin-left: 16px;
                                margin-bottom: 2px;
                                letter-spacing: 0.3px;
                                color: #fff;
                            }

                            .search-form .new-orange .name,
                            .search-form .new-orange .sq {
                                color: #fff;
                            }

                            .search-form input.reset, .search-form input.reset2 {
                                margin-right: 7px !important;
                            }

                            .new-orange .podbor input.pickup_new {
                                background-image: url(//sklad-ofis.ru/assets/images/podbor2.png);
                            }

                            .new-orange input.pickup_new {
                                background: url(//sklad-ofis.ru/assets/images/podbor.png) no-repeat scroll 15px 6px;
                                padding: 4px 15px 6px 33px;
                                cursor: pointer;
                                font-family: 'cuprumregular';
                                color: #BE651C;
                                text-shadow: 0 1px 0 #FFF;
                                border: none;
                                text-decoration: underline;
                                line-height: 16px;
                            }

                            .search-form .new-orange input.reset_new {
                                cursor: pointer;
                                margin: -3px 4px;
                                font-size: 14px;
                                font-family: 'cuprumregular';
                                color: #a7530e;
                                background: none;
                                border: none;
                                border-bottom: 1px dotted #a7530e;
                                text-decoration: none;
                                line-height: 16px;
                                background: rgba(241, 241, 241, 0.92);
                                /* padding: 5px; */
                                padding: 4px 15px 6px 15px;
                                border-radius: 5px;
                                border: 1px solid #be651c;
                                background: #f5f5f5;
                                background: -moz-linear-gradient(top, #f5f5f5 0%, #dedede 100%);
                                background: -webkit-linear-gradient(top, #f5f5f5 0%, #dedede 100%);
                                background: linear-gradient(to bottom, #f5f5f5 0%, #dedede 100%);
                                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#dedede', GradientType=0);
                            }

                            .search-form .new-orange .radiobt input:checked + label {
                                background-position: 0 0;
                                color: #000;
                            }

                            @media screen and (max-width: 1050px) {
                                .search-form {
                                    position: absolute;
                                    z-index: 9;
                                }

                                .search-block > .center_main {
                                    float: none !important;
                                    width: 100%;
                                }

                                #sysm_home_4Objects {
                                    margin-bottom: 13px;
                                    height: initial;
                                    overflow: initial;
                                }

                                #sysm_home_4Objects .viewport {
                                    height: initial !important;
                                }

                                #sysm_home_4Objects .overview li {
                                    width: 213px;
                                }

                                #sysm_home_4Objects .overview li {
                                    margin-right: 13px !important;
                                }

                                .clear.clearza {
                                    clear: both !important;
                                    display: none !important;
                                }

                                #sysm_home_4Objects .clear.sysm {
                                    display: none !important;
                                }

                                .clear.sysm {
                                    display: none !important;
                                }

                                #content .main {
                                    float: left;
                                }

                                #sysm_home_4Objects .zaglushka {
                                    display: block !important;
                                    opacity: 0;
                                }

                                .zaglushka-text {
                                    width: 250px;
                                    display: inline-block;
                                }
                            }

                            @media screen and (max-width: 850px) {
                                .center_main a.order,
                                .center_main .add {
                                    padding: 0 5px;
                                    width: initial;
                                }

                                .center_main .add span {
                                    margin-left: 0px;
                                    padding-left: 16px;
                                }
                            }

                            @media screen and (max-width: 790px) {
                                .search-block h2, .search-block .h2 {
                                    font-size: 15px;
                                    height: 21px;
                                }

                                .search-form {
                                    position: initial;
                                    width: 100%;
                                }

                                .search-block h2, .search-block .h2 {
                                    font-size: 18px;
                                    height: initial;
                                }

                                .zaglushka-text {
                                    display: none;
                                }
                            }

                        </style>


                        <!-- <div class="clear"></div>
                                                    <div style="" class="count_of_objects sy_mt10">1 288 зданий в базе / 3 864 731 м<sup>2</sup> свободно</div> -->
                        <div class="clear"></div>

                    </div>

                    <!-- карта -->
                    <!-- конец карта -->
                    <div class="clear clearza"></div>
                    <div style="float: right;margin: -43px 0 0;width: 728px;clear: both;display: none;"
                         class="count_of_objects">1 288 зданий в базе / 3 864 731 м<sup>2</sup> свободно
                    </div>
                    <div class="clear clearza"></div>


                    <style>

                        #sysm_home_4Objects_2 {
                            /* height: 1%;
                            overflow: hidden; */
                            margin-bottom: 18px;
                            margin-bottom: 18px;
                            overflow: hidden;
                        }

                        #slider1 .card_wrapper {
                            overflow: hidden
                        }

                        #sysm_home_4Objects_2 .clear {
                            height: 10px
                        }

                        #sysm_home_4Objects_2 .viewport {
                            width: 100%;
                        }

                        #sysm_home_4Objects_2 .disable {
                            visibility: hidden
                        }

                        #sysm_home_4Objects_2 .overview {
                            /* list-style: none;
                            position: absolute;
                            padding: 0;
                            margin: 0;
                            width: 1024px;
                            left: 0;
                            top: 0 */
                        }

                        #sysm_home_4Objects_2 ul li:hover {
                            background: #E2E2E2
                        }

                        #sysm_home_4Objects_2 .overview li {
                            font-size: 12px;
                            background: #f2f2f2;
                            width: 212px;
                            padding: 12px;
                            -webkit-border-radius: 5px;
                            -moz-border-radius: 5px;
                            border-radius: 5px;
                            behavior: url(/assets/PIE.htc);
                            height: 269px;
                            margin-right: 10px;
                            margin-bottom: 13px;

                        }

                        #sysm_home_4Objects_2 .last_obj {
                            background: #f2f2f2;
                            width: 222px;
                            padding: 12px;
                            -webkit-border-radius: 5px;
                            -moz-border-radius: 5px;
                            border-radius: 5px;
                            behavior: url(/assets/PIE.htc)
                        }

                        #sysm_home_4Objects_2 .overview li .title {
                            color: #595959;
                            font-weight: bold;
                            margin-bottom: 8px;
                            height: 48px;
                            line-height: 14px;
                            overflow: hidden
                        }

                        #sysm_home_4Objects_2 .overview li img {
                            margin: 0 -12px 4px
                        }

                        #sysm_home_4Objects_2 .overview li p {
                            padding-bottom: 1px
                        }

                        #sysm_home_4Objects_2 .overview li p b {
                            color: #7ac11a
                        }

                        #sysm_home_4Objects_2 .overview li .zajavka {
                            float: left;
                            display: block;
                            color: #5c5c5c;
                            font-size: 10px;
                            text-shadow: 1px 1px 1px #fff;
                            width: 100px;
                            height: 29px;
                            line-height: 29px;
                            text-align: center;
                            border-top: 1px solid #fff;
                            border-left: 1px solid #dedede;
                            border-right: 1px solid #dedede;
                            border-bottom: 1px solid #a3a3a3;
                            -webkit-box-shadow: #a3a3a3 0px 2px 2px;
                            -moz-box-shadow: #a3a3a3 0px 2px 2px;
                            box-shadow: #a3a3a3 0px 2px 2px;
                            background: #f5f5f5;
                            background: -webkit-gradient(linear, 0 0, 0 bottom, from(#f5f5f5), to(#dedede));
                            background: -webkit-linear-gradient(#f5f5f5, #dedede);
                            background: -moz-linear-gradient(#f5f5f5, #dedede);
                            background: -ms-linear-gradient(#f5f5f5, #dedede);
                            background: -o-linear-gradient(#f5f5f5, #dedede);
                            background: linear-gradient(#f5f5f5, #dedede);
                            -pie-background: linear-gradient(#f5f5f5, #dedede);
                            -webkit-border-radius: 5px;
                            -moz-border-radius: 5px;
                            border-radius: 5px;
                            behavior: url(/assets/PIE.htc);
                            margin: 7px 0 0 0
                        }

                        #sysm_home_4Objects_2 .overview li .more {
                            float: right;
                            color: #5c5c5c;
                            font-size: 10px;
                            text-shadow: 1px 1px 1px #fff;
                            margin: 15px 0 0 0
                        }

                        #sysm_home_4Objects_2 .pager {
                            verflow: hidden;
                            list-style: none;
                            clear: both;
                            margin: 0 0 0 480px
                        }

                        #sysm_home_4Objects_2 .pager li {
                            float: left;
                            margin: 25px 5px 0 5px
                        }

                        #sysm_home_4Objects_2 .pagenum {
                            background: url(/assets/images/pagination2.png) no-repeat scroll left top;
                            width: 10px;
                            height: 10px;
                            display: block
                        }

                        #sysm_home_4Objects_2 .active {
                            background-position: left bottom
                        }

                        #sysm_home_4Objects_2 img {
                            width: 236px;
                            height: 110px;
                        }

                        #sysm_home_4Objects_2 .p--last-value {
                            height: 31px;
                        }

                        @media screen and (max-width: 1050px) {

                        }

                        .overview {
                            display: flex !important;
                            flex-direction: row;
                            flex-wrap: wrap;
                            align-items: center;
                            justify-content: flex-start;
                            width: 100%;
                        }

                    </style>
                    <div id="sysm_home_4Objects_2">
                        <div class="or left">
                            <span class="typemap active" style="display: none;">Карта Москвы</span>
                        </div>
                        <div class="or right">
                            <a href="add/" class="add"><span>Добавить объект</span></a>
                            <a href="ostavit_zayavku/" class="order"><span>Оставить заявку</span></a>
                        </div>
                        <p class="h2"><span class="zaglushka-text"></span>ПОСЛЕДНИЕ ДОБАВЛЕННЫЕ ОБЪЕКТЫ</p>
                        <div class="viewport">

                            <ul data-container="plugin_catalog" class="overview" style="">
                                <?= execPlugin('PonomareVlad/catalog', 'category', ['limit' => 20, 'img_size' => ['300']], 'index_widget'); ?>


                            </ul>

                        </div>

                    </div>
                    <div class="clear"></div>
                    <style>
                        .btn-allobj {
                            display: inline-block;
                            width: 200px;
                            height: 28px;
                            line-height: 28px;
                            font-size: 14px;
                            font-family: 'cuprumbold';
                            color: #fff;
                            text-shadow: 0 1px 0 #558f04;
                            border: 1px solid #65a906;
                            -webkit-border-radius: 5px;
                            -moz-border-radius: 5px;
                            border-radius: 5px;
                            -webkit-box-shadow: inset #a9d46e 0px 1px 0px;
                            -moz-box-shadow: inset #a9d46e 0px 1px 0px;
                            box-shadow: inset #a9d46e 0px 1px 0px;
                            background: #8bc53c;
                            background: -webkit-gradient(linear, 0 0, 0 bottom, from(#8bc53c), to(#65a906));
                            background: -webkit-linear-gradient(#8bc53c, #65a906);
                            background: -moz-linear-gradient(#8bc53c, #65a906);
                            background: -ms-linear-gradient(#8bc53c, #65a906);
                            background: -o-linear-gradient(#8bc53c, #65a906);
                            background: linear-gradient(#8bc53c, #65a906);
                            -pie-background: linear-gradient(#8bc53c, #65a906);
                            behavior: url(/assets/PIE.htc);
                        }
                    </style>
                    <p class="h2" style="text-align: center; padding: 18px 0 0 0;"><a class="btn-allobj"
                                                                                      href="/arenda-sklada/"
                                                                                      title="Посмотреть все объекты">Посмотреть
                        все объекты</a></p>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <!--wrap-->
        <div class="wrap last__object">
            <div class="white ">

                <p class="h2" style="display: none;">ПОСЛЕДНИЕ ДОБАВЛЕННЫЕ ОБЪЕКТЫ</p>

                <div id="slider1" style="display: none;">

                    <div class="viewport">
                        <li>
                            <div class='card_wrapper qwe'>
                                <div class="title">Аренда открытой площадки 1000 кв.м., ЮВАО Москвы, около
                                    ТТК
                                </div>

                                <a href="tovary/arenda-otkrytoj-ploshhadki-1000-kv.m.-yuvao-moskvy-okolo-ttk.html">
                                    <img alt=""
                                         src="https://sklad-ofis.ru/assets/images/watermark_cache/813bf119396fdd70af6128eb0ae7c7f6-246-110.jpg">
                                </a>

                                <span class='z_id'>2519</span>
                                <p data-container="var_adress">
                                    Район: <span class='bold'>ЮВАО Москва</span>
                                </p>
                                <p data-container="var_cost">
                                    Цена за метр в, руб.: <span class='bold'>1800 в г.</span>
                                </p>
                                <p data-container="var_square" class="p--last-value">
                                    Общая площадь: <span class='bold'>1000 кв. м</span>
                                </p>
                            </div>
                            <a href="ostavit_zayavku/" class="zajavka">
                                Оставить заявку
                            </a>
                            <a href="tovary/arenda-otkrytoj-ploshhadki-1000-kv.m.-yuvao-moskvy-okolo-ttk.html"
                               class="more">
                                Подробнее>>
                            </a>
                            <p class="clear"></p>
                        </li>
                        <ul class="overview" style="width: 3108px; left: 0px;">
                            <?= execPlugin('PonomareVlad/catalog', 'category', ['limit' => 20, 'img_size' => ['300']], 'index_widget'); ?>
                            <style>
                                #slider1 .viewport {
                                    height: 595px
                                }
                            </style>


                        </ul>

                    </div>

                    <!--paper-->
                    <ul class="pager">
                        <li><a rel="0" class="pagenum" href="#"></a></li>
                        <li><a rel="1" class="pagenum" href="#"></a></li>
                        <li><a rel="2" class="pagenum" href="#"></a></li>
                    </ul>
                    <!--grey-->
                </div>
            </div>

            <article data-container="html_description" class="main"><h1>Аренда склада</h1><p><strong>Аренда склада</strong> ответственное дело, требующее тщательного подхода. Арендатору необходимо продумать и предусмотреть не только месторасположение и размеры склада, но и наличие подъездных путей к складскому помещению, систему отопления и наличие складского оборудования.</p><p>Основное направление компании "Складов" - помощь в подборе складов, офисов, складских и офисных помещений предлагаемых в аренду. На сайте "Складов", представлена самая большая база помещений, находящихся в разных регионах города и Московской области. Благодаря, удобному фильтру, Вы сможете подобрать оптимальный вариант под необходимые Вам требования и критерии: расположение вблизи метро или шоссе, район Москвы, город в области, площадь складского или офисного объекта, класс, категория, стоимость аренды.</p><blockquote><strong>Памятка для арендаторов складов</strong><br> При выборе склада стоит помнить, что они делятся на категории: А, B,C, Д.<ul><li>К категории А относятся склады, в которых можно хранить продукцию любых типов. В них поддерживается особый температурный режим и необходимая влажность.</li><li>Категория В подойдёт тем, кто хочет приобрести склад хорошего качества по приемлемой стоимости.</li><li>Склады категории С предназначаются для продукции, не требующей определённых климатических условий.</li><li>Склады и складские помещения категории Д – это не отапливаемые помещения, располагающиеся в технических зданиях.</li></ul></blockquote><h2>Преимущества аренды склада</h2><p>К основным преимуществам аренды склада, складских помещений и офисов стоит отнести:</p><ul><li>возможность моментального использования склада для своих нужд, после заключения договора аренды;</li><li>экономию средств на покупку складского оборудования;</li><li>возможность сменить склад или офис, если вас перестанет устраивать его расположение.</li></ul><h3>Преимущества аренды офиса у компании "Складов"</h3><p>Если вы собираетесь арендовать офис, то у вас будет иметься возможность выбрать помещение с хорошим и капитальным ремонтом и всем необходимым офисным оборудованием. Также среди выгодных предложений нашей компании, можно найти и офис с мебелью.</p><p>На каком бы варианте вы не остановили свой выбор, вы будете удивлены большим выбором складов, офисов и складских помещений, приемлемыми ценами и выгодными условиями аренды, при сотрудничестве с нашей компанией.</p>

            </article>


        </div>
    </div>
</div><!-- #content-->

</div><!-- #wrapper -->

<!-- #footer -->
<footer id="footer">
    <div class="wrap">

        <div class="foot_phone">

            <span class='email'> <script>document.write("<a href='mailto:arenda@" + "sklad-ofis.ru'>arenda" + "@sklad-" + "ofis.ru</a>")</script></span>
            <div class='clear'></div>

            <span> 8 (495) 226-22-15
			</span>

        </div>
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
            <div><img src="https://mc.yandex.ru/watch/29424345" style="position:absolute; left:-9999px;" alt=""/></div>
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
        <b>Аренда склада</b>
        от sklad-ofis.ru — склады в аренду на востоке Москвы, <a href='arenda-sklada-v-moskve/'>аренда склада в
        Москве</a><!--
-->

        <p><a href="karta-sajta.html" title="Карта сайта">Карта сайта</a></p>
    </div>
</footer>
<script type="text/javascript" src="/assets/templates/v1.js" async></script>
</body>
</html>