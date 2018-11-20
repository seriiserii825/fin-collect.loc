<!DOCTYPE html>
<html>
<head <?php language_attributes('ru'); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
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
                        <div><?php echo carbon_get_theme_option('crb_phone'); ?></div>
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
                        	<?php wp_nav_menu([
	                    		'theme_location'  => 'mobile_menu_in_header',
	                    		'menu'            => '',
	                    		'container'       => false,
	                    		'container_class'       => '',
	                    		'menu_class'      => '',
	                    		'menu_id'         => '',
                        	]); ?>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-menu-wrapper hidden-xs hidden-sm">
            <div class="container">
                <div class="relative">
                    <div class="top-menu">
                    	<?php wp_nav_menu( array(
                    		'theme_location'  => 'menu_in_header',
                    		'menu'            => '',
                    		'container'       => false,
                    		'container_class'       => '',
                    		'menu_class'      => '',
                    		'menu_id'         => '',
                    		'walker'          => new Header_Menu_Class(),
                    	) ); ?>
                        <div class="cleaner"></div>
                    </div>
                    <a href="#" class="lk-btn">Личный кабинет</a>
                </div>
            </div>
        </div>
