<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="format-detection" content="telephone=no">
    <?php wp_head() ?>
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/logo.png" />
    
</head>

<body data-barba="wrapper" >
<?php include_once("analyticstracking.php") ?>
    <div id="global-container">
        <nav class="mobile-menu">
            <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/hyt1lifeLogoWhite.svg" alt="" class="logo__img" /></a>
            </div>
            <ul class="mobile-menu__main">
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="<?php echo esc_url( home_url( '#profile' ) ); ?>">
                        <span class="main-title">Profile</span>
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="<?php echo esc_url( home_url( '#blog' ) ); ?>">
                        <span class="main-title">Blog</span>
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="<?php echo esc_url( home_url( '#memories' ) ); ?>">
                        <span class="main-title">Memories</span>
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="<?php echo esc_url( home_url( '#skills' ) ); ?>">
                        <span class="main-title">Skills</span>
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="<?php echo esc_url( home_url( '#contact' ) ); ?>">
                        <span class="main-title">Contact</span>
                    </a>
                </li>
            </ul>
            <ul class="mobile-menu__main sns">
                <li class="mobile-menu__item__sns">
                    <a class="mobile-menu__link" href="https://www.youtube.com/channel/UCDSnJTBDru8P8Js4kJaxQMQ" target="_blank" rel="noopener">
                        <span class="main-title youtube"></span>
                    </a>
                </li>
                <li class="mobile-menu__item__sns">
                    <a class="mobile-menu__link" id="js-show-popup8">
                        <span class="main-title twitter"></span>
                    </a>
                </li>
                <li class="mobile-menu__item__sns">
                    <a class="mobile-menu__link" href="https://www.facebook.com/hayato.moromasa" target="_blank" rel="noopener">
                        <span class="main-title facebook"></span>
                    </a>
                </li>
                <li class="mobile-menu__item__sns">
                    <a class="mobile-menu__link" href="https://instagram.com/bboyhayato1/?hl=ja" target="_blank" rel="noopener">
                        <span class="main-title instagram"></span>
                    </a>
                </li>
                <li class="mobile-menu__item__sns">
                    <a class="mobile-menu__link" href="https://github.com/HayatoMoromasa" target="_blank" rel="noopener">
                        <span class="main-title github"></span>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- twitter-modal -->
        <div class="popup" id="js-popup8">
            <div class="popup__inner-twitter">
                <a class="popup-twitter" href="https://twitter.com/bboyhayato1" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri() ?>/images/bboyhayato1.png);" alt="bboyhayato1"></a>
                <a class="popup-twitter" href="https://twitter.com/hyt1script" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri() ?>/images/hyt1script.png);" alt="hyt1script"></a>
            </div><!-- /popup__inner -->
            <p class="popup__text-twitter">Twitter @bboyhayato1</p>
            <p class="popup__text-twitter">Twitter @hyt1script</p>
            <div class="black-background" id="js-black-bg8"></div><!-- /black-background -->
        </div><!-- /popup -->
        <!-- /twitter-modal -->

        <div id="container">

            <div class="mobile-menu__cover"></div>
            <div class="nav-trigger"></div>
            <header class="header">
                <div class="header__inner appear up">
                    <div class="logo item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/hyt1lifeLogo.svg" alt="" class="logo__img" /></a>
                    </div>
                    <nav class="header__nav">
                        <ul class="header__ul">
                            <li class="header__li item"><a href="<?php echo esc_url( home_url( '#profile' ) ); ?>">Profile</a></li>
                            <li class="header__li item"><a href="<?php echo esc_url( home_url( '#blog' ) ); ?>">Blog</a></li>
                            <li class="header__li item"><a href="<?php echo esc_url( home_url( '#memories' ) ); ?>">Memories</a></li>
                            <li class="header__li item"><a href="<?php echo esc_url( home_url( '#skills' ) ); ?>">Skills</a></li>
                            <li class="header__li item">
                                <a class="btn filled" href="<?php echo esc_url( home_url( '#contact' ) ); ?>">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <button class="mobile-menu__btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </header>