<!DOCTYPE html>
<html>
<head>
    <title>Финколлект</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="apple-touch-icon-precomposed" href="apple-touch-favicon.png"/>
    -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:600,400,300,400italic,600,700,700italic,800&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>
<body>
    <div class="main-wrapper">
        <div class="header-wrapper">
            <div class="container">
                <div class="header relative">
                    <div class="logo">
                        <a href="index.html">
                            <img src="<?php echo get_template_directory_uri()?>/images/logo-xs.png" alt="logo" class="visible-xs visible-sm" />
                            <img src="<?php echo get_template_directory_uri()?>/images/logo.png" alt="logo" class="hidden-xs hidden-sm" />
                        </a>
                    </div>
                    <a href="#callback" class="button invert min callback-btn fancyboxModal hidden-xs hidden-sm">Обратный звонок</a>
                    <div class="header-tel hidden-xs hidden-sm">
                        <div>8 (800) 700-77-46</div>
                        <small>Звонок по РФ бесплатный </small>
                    </div>
                    <div class="mob-menu-btn visible-xs visible-sm">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="dropdown text-center">
                        <div class="dropdown-head">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="dropdown-tel">
                                        <div>8 (800) 700-77-46</div>
                                        <small>Звонок по РФ бесплатный </small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="dropdown-callback">
                                        <a href="#callback" class="button invert min callback-btn fancyboxModal">Обратный звонок</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-lk">
                            <a href="#" class="lk-btn"><span></span> Личный кабинет</a>
                        </div>
                        <div class="mobile-menu">
                            <ul>
                                <li class="active"><a href="about.html">О компании</a></li>
                                <li><a href="clients.html">Клиентам</a></li>
                                <li><a href="partners.html">Партнерам</a></li>
                                <li><a href="job.html">Карьера</a></li>
                                <li><a href="contacts.html">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-menu-wrapper hidden-xs hidden-sm">
            <div class="container">
                <div class="relative">
                    <div class="top-menu">
                        <ul>
                            <li><a href="index.html"><span>О компании</span></a>
                                <ul>
                                    <li><a href="#">Информация о компании</a></li>
                                    <li><a href="#">Миссия</a></li>
                                    <li><a href="#">Ценности</a></li>
                                    <li><a href="#">Документы и правовая база</a></li>
                                    <li><a href="#">Участие в ассоциациях</a></li>
                                    <li><a href="news.html">Новости</a></li>
                                </ul>
                            </li>
                            <li><a href="clients.html"><span>Клиентам</span></a>
                                <ul>
                                    <li><a href="#">Способы погашения</a></li>
                                    <li><a href="#">Сообщить о погашении</a></li>
                                    <li><a href="#">Если у вас задолженность</a></li>
                                    <li><a href="#">Советы и рекомендации</a></li>
                                    <li><a href="#">Часто задаваемые вопросы</a></li>
                                </ul>
                            </li>
                            <li><a href="partners.html"><span>Партнерам</span></a>
                                <ul>
                                    <li><a href="#">Наши партнеры</a></li>
                                    <li><a href="#">Тендеры</a></li>
                                    <li><a href="#">Рекомендационные письма</a></li>
                                </ul>
                            </li>
                            <li><a href="job.html"><span>Карьера</span></a>
                                <ul>
                                    <li><a href="#">Почему стоит работать в «Финколлект»</a></li>
                                    <li><a href="#">Вакансии</a></li>
                                    <li><a href="#">Контакты менеджеров по персоналу</a></li>
                                </ul>
                            </li>
                            <li><a href="contacts.html"><span>Контакты</span></a></li>
                        </ul>
                        <div class="cleaner"></div>
                    </div>
                    <a href="#" class="lk-btn">Личный кабинет</a>
                </div>
            </div>
        </div>
        <div class="header-slider white">
            <div class="table">
                <div class="table-cell">
                    <div class="container">
                        <div class="title">Финколлект</div>
                        <p>
                            Уважение к нашим партнерам, их заемщикам и нашим сотрудникам – <br />
                            залог благоприятного и долгосрочного сотрудничества.
                        </p>
                        <a href="#" class="button min dark-btn">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="partners">
            <div class="push40"></div>
            <div class="container">
                <div class="title-h2"><span class="red">С кем мы</span> работаем</div>
                <div class="push10"></div>
                <div class="partners-carousel">
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="img-wrapper">
                                    <img src="<?php echo get_template_directory_uri()?>/images/partner1.jpg" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="element-content">
                                    <div class="push30 hidden-md"></div>
                                    <div class="title f24">Быстроденьги</div>
                                    <div class="push5"></div>
                                    <div class="text">
                                        «Быстроденьги» – крупная федеральная компания на рынке микрофинансирования с разветвленной сетью 
                                        офисов финансовой помощи по всей стране. Это первая организация в России, предложившая населению 
                                        услугу «займы до зарплаты» — небольшие суммы денег в долг на короткий срок. 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="img-wrapper">
                                    <img src="<?php echo get_template_directory_uri()?>/images/partner1.jpg" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="element-content">
                                    <div class="push30 hidden-md"></div>
                                    <div class="title f24">Быстроденьги</div>
                                    <div class="push5"></div>
                                    <div class="text">
                                        «Быстроденьги» – крупная федеральная компания на рынке микрофинансирования с разветвленной сетью 
                                        офисов финансовой помощи по всей стране. Это первая организация в России, предложившая населению 
                                        услугу «займы до зарплаты» — небольшие суммы денег в долг на короткий срок. 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="img-wrapper">
                                    <img src="<?php echo get_template_directory_uri()?>/images/partner1.jpg" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="element-content">
                                    <div class="push30 hidden-md"></div>
                                    <div class="title f24">Быстроденьги</div>
                                    <div class="push5"></div>
                                    <div class="text">
                                        «Быстроденьги» – крупная федеральная компания на рынке микрофинансирования с разветвленной сетью 
                                        офисов финансовой помощи по всей стране. Это первая организация в России, предложившая населению 
                                        услугу «займы до зарплаты» — небольшие суммы денег в долг на короткий срок. 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="push100"></div>
            </div>
        </div>
        <div class="loan-pay gray-bg">
            <div class="push40"></div>
            <div class="container">
                <div class="title-h2"><span class="red">Оплатить</span> займ</div>
                <p>
                    Вы можете оплатить вашу задолженность онлайн и уточнить о поступлении денежных средств по номеру горячей линии.
                </p>
                <form class="rf">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" class="form-control required" placeholder="Номер договора" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" class="form-control required" placeholder="Сумма" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <input type="submit" class="button btn block" value="Оплатить" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="push20"></div>
        </div>
        <div class="news">
            <div class="push40"></div>
            <div class="container">
                <div class="title-h2">Новости</div>
                <div class="push5"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="element relative">
                            <div class="date">
                                <div>04</div>
                                <small>апреля</small>
                            </div>
                            <div class="text">
                                <a href="#">
                                    Запустила продажу сертификатов
                                    на оказание юридических услуг
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="element relative">
                            <div class="date">
                                <div>04</div>
                                <small>апреля</small>
                            </div>
                            <div class="text">
                                <a href="#">
                                    Запустила продажу сертификатов
                                    на оказание юридических услуг
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="element relative">
                            <div class="date">
                                <div>04</div>
                                <small>апреля</small>
                            </div>
                            <div class="text">
                                <a href="#">
                                    Запустила продажу сертификатов
                                    на оказание юридических услуг
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="push40"></div>
        </div>
        <div class="footer-push"></div>
    </div>

    <div class="footer-wrapper">
        <div class="container">
            <div class="push25"></div>
            <div class="row">
                <div class="col-sm-6 col-md-7 col-lg-6">
                    <div class="copyright">
                        © 2016 ООО «Финколлект». <br class="hidden-md hidden-lg">Все права защищены.
                        <div class="footer-logo"><a href="/"><img src="<?php echo get_template_directory_uri()?>/images/footer-logo.png" alt="logo" /></a></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 col-lg-offset-2 hidden-xs">
                    <div class="push5"></div>
                    <div class="footer-tel relative">
                        <div class="push3"></div>
                        <div>8 (800) 700-77-46</div>
                        <small>Звонок по РФ бесплатный </small>
                        <a href="#callback" class="button invert min callback-btn fancyboxModal">Обратный звонок</a>
                    </div>
                </div>
            </div>
            <div class="push15"></div>
        </div>
    </div>
    <div class="modal" id="callback">
        <div class="title-h2"><span class="red">перезвонить</span> мне</div>
        <p>
            Оставьте телефон и мы перезвоним вам бесплатно
            в удобное время.
        </p>
        <form class="rf">
            <div class="form-group">
                <input type="text" class="form-control required" placeholder="Имя" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control required tel" placeholder="Телефон" />
            </div>
            <input type="submit" class="button btn block" value="позвоните мне" />
        </form>
    </div>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php wp_footer(); ?>
</body>
</html>