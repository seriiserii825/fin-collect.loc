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
                    	<?php 
                    		$logo = get_custom_logo();
                    		if($logo) echo $logo;
                    	?>
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
