<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml">
<!--HEAD-->


<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="https://sklad-ofis.ru/"/>
    <!--[if IE]>
    <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <title>Аренда склада и складских помещений - ответы на вопросы</title>

    <meta name='yandex-verification' content='5c6c68c67cb1b959'/>
    <meta name="google-site-verification" content="9kl24DY61G4Tc_1Pz4_2lSuhNy9V06WyQ9ppXIIFLCE"/>
    <meta name="keywords" content="аренда склада, аренда офиса, аренда коммерческой недвижимости, статьи"/>
    <meta name="description"
          content="Как выбрать коммерческую недвижимость? Что лучше купить склад или арендовать? - ответы на все вопросы по аренде и покупке склада или офиса, на сайте Sklad-ofis.Ru"/>
    <link rel="stylesheet" href="/assets/style.css" type="text/css" media="screen"/>
    <script type="text/javascript" src="/assets/js/jquery-1.6.1.js"></script>
    <script type="text/javascript" src="/assets/js/jScrollPane.js"></script>
    <script type="text/javascript" src="/assets/js/slides.min.jquery.js"></script>            <!-- слайдер вверху -->
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
    <link rel="stylesheet" href="/map/style.css" type="text/css" media="screen"/>
    <script type="text/javascript" src="/map/canvas_script.js"></script>
    <script type="text/javascript" src="/assets/js/ellipsis.js"></script>

    <script type="text/javascript" src="/assets/js/callback.js"></script>


    <!-- HotLog -->
    <script type="text/javascript">
        hotlog_r = "" + Math.random() + "&s=2298231&im=307&r=" +
            escape(document.referrer) + "&pg=" + escape(window.location.href);
        hotlog_r += "&j=" + (navigator.javaEnabled() ? "Y" : "N");
        hotlog_r += "&wh=" + screen.width + "x" + screen.height + "&px=" +
            (((navigator.appName.substring(0, 3) == "Mic")) ? screen.colorDepth : screen.pixelDepth);
        hotlog_r += "&js=1.3";
        document.write('<div style="display:none"><a href="//click.hotlog.ru/?2298231" target="_blank"><img ' +
            'src="//hit3.hotlog.ru/cgi-bin/hotlog/count?' +
            hotlog_r + '" border="0" width="88" height="31" title="HotLog: показано количество посетителей за сегодня, за вчера и всего" alt="HotLog"><\/a></div>');
    </script>
    <!-- /HotLog -->


    <script type="text/javascript"
            src="//maps.googleapis.com/maps/api/js?key=AIzaSyBAL0RG1jaL86itdftjrstsyAGUavq5gWg&sensor=false&libraries=geometry,drawing,places"></script>

    <script type="text/javascript">
        var drawingManager = undefined;
        var map = undefined;

        function initialize() {
            var mapOptions = {
                center: new google.maps.LatLng(55.836, 37.575),
                zoom: 7,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
            drawingManager = new google.maps.drawing.DrawingManager({
                drawingMode: google.maps.drawing.OverlayType.POLYGON,
                drawingControl: true,
                drawingControlOptions: {
                    position: google.maps.ControlPosition.TOP_CENTER,
                    drawingModes: [
                        google.maps.drawing.OverlayType.POLYGON
                    ]
                },
            });
            drawingManager.setMap(map);

            function overlayClickListener(overlay) {
                google.maps.event.addListener(overlay, "mouseup", function (event) {
                    $('#selected_coordinates').val(overlay.getPath().getArray());
                    console.log(overlay.getPath().getArray());
                });
            }

            google.maps.event.addListener(drawingManager, "overlaycomplete", function (event) {
                overlayClickListener(event.overlay);
                $('#selected_coordinates').val(event.overlay.getPath().getArray());
                console.log(overlay.getPath().getArray());
            });

            build_markers_on_map();

        }


    </script>

    <script type='text/javascript'>

        function searchObject() {
            $('#searchForm').submit();
        };
    </script>
    <meta name="google-site-verification" content="WwQ5PN02ZnEsP7NAw4g0VsqxKgx-lGt8zx9BZqG2UwQ"/>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript" src="/assets/js/special_offer_api.js"></script>
</head>

<SCRIPT LANGUAGE="JavaScript">
    function checkRadio(r) {
        for (var i = 0, len = r.length; i < len; i++) if (r[i].checked) return true;
        return false;
    }

    function myFunc(o) {
        if (checkRadio(o.tip_obekta)) return true;
        alert('бла*бла*бла');
        show(arenda);
        return false;
    }

    /*

    function al(e){
    document.getElementById('spisok').style.display = 'none';
    if(document.getElementById('sklad').checked == true){
    document.getElementById('spisok').style.display = 'inline';
    }
    else{
    document.getElementById('spisok').style.display = 'none';
    alert(document.getElementById(e.tagName).getAttribute('value'));
    }
    }
    */
</SCRIPT>

<body>


<div id="wrapper">
    <header id="header">
        <div class="wrap">
            <div class="head_right">
                <div data-container="var_phone" style="width:100%;font-family:Verdana, Geneva, sans-serif;
font-size:21px;
color:#ff9138;
margin:5px 0;
display:block;"></div>
                <form id="poisk" action="find.html" method="post" style="width: initial;">
                    <input type="text" name="search" placeholder="Номер объекта или фраза">
                    <input class="search" type="submit" value="Найти!">
                </form>
            </div>
            <div  data-global-container="array_catalogies" class="absolute_block">

            </div>
            <div id='blok_logo' style="float: left; width: 230px; height: 85px;">
                <a class="logo" href="/"></a>
            </div>
            <!-- ч:topp -->
            <!--topmenu-->
            <nav>
                <ul id="ajaxmenu" class="top_nav">
                    <ul  data-global-container="array_menu" class="box">

                    </ul>

                </ul>
            </nav>
            <button class="hamburger mobile">&#9776;</button>
            <button class="cross mobile">&#735;</button>
            <div class="mobile_menu mobile">
                <ul>
                    <ul  data-global-container="array_menu" class="box">

                    </ul>

                    <div  data-global-container="array_catalogies" class="box">

                    </div>
                </ul>
            </div>

            <div class='zaya'>
                <script>
                    nomer = {
                        593: '1824А',
                        463: '1521А',
                        464: '1520А',
                        763: '1582А',
                        591: '1826А',
                        592: '1825А',
                        448: '1824А',
                        594: '1823А',
                        595: '1821А',
                        596: '1820А',
                        597: '1819А',
                        598: '1818А',
                        599: '1817А',
                        600: '1816А',
                        601: '1814А',
                        602: '1813А',
                        448: '1812А',
                        607: '1808А',
                        608: '1807А',
                        609: '1806А',
                        610: '1804А',
                        636: '1803А',
                        637: '1802А',
                        638: '1801А',
                        639: '1800А',
                        640: '1799А',
                        641: '1798А',
                        642: '1797А',
                        643: '1796А',
                        644: '1795А',
                        645: '1794А',
                        646: '1793А',
                        647: '1792А',
                        648: '1791А',
                        649: '1788А',
                        650: '1787А',
                        651: '1786А',
                        652: '1785А',
                        653: '1784А',
                        655: '1783А',
                        656: '1782А',
                        657: '1781А',
                        658: '1780А',
                        659: '1779А',
                        660: '1778А',
                        661: '1776А',
                        662: '1775А',
                        663: '1773А',
                        664: '1767А',
                        665: '1766А',
                        666: '1735А',
                        667: '1734А',
                        668: '1733А',
                        669: '1732А',
                        670: '1729А',
                        671: '1728А',
                        672: '1727А',
                        673: '1726А',
                        674: '1725А',
                        675: '1724А',
                        676: '1723А',
                        677: '1722А',
                        678: '1721А',
                        679: '1720А',
                        680: '1719А',
                        682: '1718А',
                        683: '1717А',
                        684: '1716А',
                        685: '1715А',
                        686: '1714А',
                        687: '1713А',
                        688: '1712А',
                        689: '1711А',
                        690: '1710А',
                        691: '1709А',
                        692: '1708А',
                        693: '1707А',
                        694: '1706А',
                        696: '1705А',
                        697: '1703А',
                        698: '1702А',
                        699: '1701А',
                        700: '1700А',
                        701: '1699А',
                        702: '1698А',
                        703: '1697А',
                        704: '1694А',
                        705: '1693А',
                        706: '1692А',
                        707: '1691А',
                        708: '1690А',
                        709: '1687А',
                        711: '1680А',
                        712: '1675А',
                        713: '1674А',
                        715: '1673А',
                        716: '1671А',
                        719: '1669А',
                        720: '1668А',
                        721: '1667А',
                        723: '1666А',
                        728: '1665А',
                        731: '1660А',
                        732: '1659А',
                        734: '1656А',
                        736: '1655А',
                        738: '1654А',
                        740: '1653А',
                        742: '1649А',
                        745: '1646А',
                        748: '1643А',
                        750: '1617А',
                        752: '1609А',
                        754: '1605А',
                        755: '1603А',
                        756: '1601А',
                        757: '1599А',
                        758: '1596А',
                        759: '1595А',
                        760: '1590А',
                        761: '1587А',
                        762: '1583А',
                        763: '1582А',
                        764: '1576А',
                        767: '1575А',
                        768: '1574А',
                        769: '1573А',
                        770: '1571А',
                        771: '1567А',
                        772: '1565А',
                        773: '1564А',
                        774: '1563А',
                        775: '1562А',
                        776: '1560А',
                        777: '1559А',
                        778: '1557А',
                        779: '1554А',
                        780: '1552А',
                        781: '1550А',
                        782: '1549А',
                        783: '1543А',
                        784: '1541А',
                        785: '1537А',
                        786: '1536А',
                        787: '1535А',
                        788: '1533А',
                        789: '1532А',
                        790: '1531А',
                        791: '1530А',
                        792: '1527А',
                        793: '1524А',
                        766: '551А',
                        765: '570А',
                        753: '572А',
                        751: '575А',
                        747: '578А',
                        746: '579А',
                        744: '582А',
                        743: '583А',
                        741: '584А',
                        739: '585А',
                        737: '589А',
                        735: '590А',
                        733: '591А',
                        730: '593А',
                        727: '594А',
                        726: '598А',
                        725: '600А',
                        724: '601А',
                        722: '604А',
                        717: '632А',
                        626: '665А',
                        624: '668А',
                        623: '670А',
                        622: '689А',
                        621: '690А',
                        620: '709А',
                        619: '747А',
                        618: '749А',
                        617: '845А',
                        616: '863А',
                        615: '1147А',
                        614: '1227А',
                        613: '1228А',
                        612: '1292А',
                        611: '1294А',
                        465: '1519А',
                        466: '1518А',
                        467: '1517А',
                        468: '1516А',
                        469: '1514А',
                        470: '1510А',
                        471: '1509А',
                        474: '1508А',
                        475: '1507А',
                        476: '1506А',
                        477: '1505А',
                        478: '1504А',
                        479: '1503А',
                        480: '1502А',
                        481: '1500А',
                        482: '1499А',
                        483: '1496А',
                        484: '1495А',
                        485: '1494А',
                        486: '1493А',
                        488: '1492А',
                        489: '1491А',
                        490: '1490А',
                        491: '1489А',
                        492: '1487А',
                        493: '1486А',
                        494: '1485А',
                        495: '1484А',
                        496: '1481А',
                        497: '1480А',
                        498: '1479А',
                        499: '1476А',
                        500: '1473А',
                        501: '1469А',
                        502: '1462А',
                        503: '1455А',
                        504: '1453А',
                        505: '1448А',
                        506: '1446А',
                        507: '1443А',
                        508: '1442А',
                        509: '1439А',
                        510: '1433А',
                        511: '1431А',
                        512: '1427А',
                        513: '1426А',
                        514: '1425А',
                        515: '1424А',
                        516: '1422А',
                        519: '1419А',
                        520: '1418А',
                        521: '1417А',
                        522: '1416А',
                        523: '1414А',
                        524: '1411А',
                        525: '1408А',
                        526: '1404А',
                        527: '1403А',
                        528: '1402А',
                        529: '1401А',
                        536: '1399А',
                        537: '1396А',
                        538: '1394А',
                        539: '1393А',
                        540: '1389А',
                        541: '1388А',
                        542: '1387А',
                        543: '1385А',
                        544: '1384А',
                        545: '1383А',
                        546: '1382А',
                        547: '1381А',
                        548: '1380А',
                        549: '1379А',
                        550: '1377А',
                        551: '1376А',
                        552: '1375А',
                        557: '1374А',
                        558: '1373А',
                        559: '1372А',
                        560: '1371А',
                        561: '1370А',
                        562: '1369А',
                        563: '1368А',
                        564: '1367А',
                        565: '1363А',
                        566: '1362А',
                        567: '1361А',
                        568: '1360А',
                        569: '1359А',
                        570: '1343А',
                        571: '1342А',
                        572: '1341А',
                        573: '1340А',
                        574: '1339А',
                        575: '1338А',
                        576: '1337А',
                        577: '1335А',
                        578: '1333А',
                        580: '1331А',
                        581: '1308А',
                        582: '1307А',
                        583: '1306А',
                        584: '1304А',
                        585: '1303А',
                        586: '1302А',
                        587: '1301А',
                        588: '1300А',
                        589: '1299А',
                        590: '1298А',
                        611: '1294А',
                        612: '1292А',
                        613: '1228А',
                        614: '1227А',
                        615: '1147А',
                        616: '863А',
                        617: '845А',
                        618: '749А',
                        619: '747А',
                        620: '709А',
                        621: '690А',
                        622: '689А',
                        623: '670А',
                        624: '668А',
                        626: '665А',
                        717: '632А',
                        722: '604А',
                        724: '601А',
                        726: '600А',
                        795: '598А',
                        727: '594А',
                        730: '593А',
                        733: '591А',
                        735: '590А',
                        737: '589А',
                        739: '585А',
                        741: '584А',
                        743: '583А',
                        744: '582А',
                        746: '579А',
                        747: '578А',
                        751: '575А',
                        753: '572А',
                        765: '570А',
                        766: '551А',
                        803: '1522А',
                        804: '1822А',
                        805: '1538А',
                        806: '1511А',
                        807: '1512А',
                        808: '1815А',
                        809: '1498А',
                        810: '1630А',
                        811: '1811А',
                        812: '1810А',
                        813: '1809А',
                        814: '1805А',
                        815: '1777А',
                        816: '1774А',
                        817: '1731А',
                        818: '1661А',
                        819: '1662А',
                        820: '1668А',
                        821: '1730А',
                        822: '1670А',
                        823: '1671А',
                        824: '1673А',
                        603: '1812А',
                        825: '1674А',
                        826: '1675А',
                    };

                    links = {
                        448: '/index.php?type=560&idr=1824',
                        448: '/index.php?type=560&idr=1812',
                        765: '/index.php?type=560&idr=570',
                        726: '/index.php?type=560&idr=598',
                        726: '/index.php?type=560&idr=600',
                    }
                </script>


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
            <div class="wrap">
                <!-- -->
                <div id="container">
                    <div data-global-container="widget_catalog_header" id="example">

                    </div>
                    <div class="wrap link__head">
                        <nav>
                            <div style="float:left; margin-right:40px; margin-left:230px;">
                                <ul data-global-container="array_catalog-selection" data-limit="5" class="box" style="height:102px;">
                                </ul>
                            </div>
                            <div style="float:left; margin-right:40px">
                                <ul data-global-container="array_catalog-selection" data-limit="5" data-offset="5" class="box" style="height:102px;">
                                </ul>
                            </div>
                        </nav>
                        <br class='clear'/>
                        <div class="clear"></div>
                    </div>
                </div>
                <!--left_main -->
                <div  data-global-container="widget_catalog_right" class="left_main">



                </div>
                <!--right_main-->
                <div class='center_in'>
                    <article data-container="html_description" class="main">

                    </article>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <!--wrap-->
        <div class="wrap  last__object" sysm="wrap">
            <div class="white">
                <div  data-global-container="widget_catalog_bottom" class="viewport">



                </div>
                <!--/noindex-->

            </div>

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
</body>
</html>