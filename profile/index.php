

<?php get_header(); ?>
<!-- top -->
<div class="banner">
    <video src="<?php echo get_template_directory_uri() ?>/images/bg.mp4" autoplay muted loop playsinline type="mp4"></video>
    <div class="textBox">
        <h2><span class="titleColor">O</span>N<br><span class="titleColor">N</span>EXT<br><span class="titleColor">E</span>VOLUTION</h2>
        <p>
            small things add up to make a big difference
        </p>
    </div><!-- /textBox -->
    <div class="imgBox">
        <img src="<?php echo get_template_directory_uri() ?>/images/hyt1freeze.png" alt="bboy hayato1" />
    </div><!-- /imgBox -->
    <div class="scroll__arrow">
        <div class="scroll__arrow-container">
            <a><span></span>SCROLL</a>
        </div><!-- /scroll__arrow-container -->
    </div><!-- /scroll__arrow -->
</div><!-- /banner -->
<!-- /top -->
<!-- main -->
<div id="content">
    <div id="main-content">
        <?php get_sidebar(); ?>
        <main>
            <!-- profile -->
            <section class="profile opacity-simple anchor" id="profile">
                <div class="profile__inner">
                    <div class="profile__img opacity-animation">
                        <img class="img-zoom" src="<?php echo get_template_directory_uri() ?>/images/profile.jpg" alt="bboy hayato1" />
                    </div>
                    <div class="profile__texts appear left">
                        <div class="profile__texts-inner">
                            <div class="profile__title main-title item">
                                <span>HAYATO MOROMASA</span>
                            </div><!-- /profile__title -->
                            <div class="profile__sub sub-title item">Profile...</div><!-- /profile__sub -->
                            <div class="profile__description item">
                                <p>
                                    中学生の頃、地元の鹿児島でブレイクダンスに出会う。大阪へ拠点を移し日本各地の大会をはじめアジア圏、ヨーロッパ諸国での世界大会出場や審査員等の経験を積む。<br />
                                    その一方で、WebデザインやWebサービス開発に向けたコーディングやプログラミング等、IT技術の修得、発信にも注力しており<br />
                                    「ダンス×IT技術」<br />
                                    この2軸を武器にして、さらなる高みに挑む。
                                </p>
                            </div><!-- /profile__description -->

                            <div class="profile__btn item">
                                <button class="btn slide-bg3 item"><a href="<?php echo esc_url( home_url( 'profile' ) ); ?>">more details</a></button>
                            </div><!-- /profile__btn -->
                        </div><!-- /profile__texts-inner -->
                    </div><!-- /profile__texts -->
                </div><!-- /profile__inner -->
            </section><!-- /profile  -->
            <!-- /profile -->
            <!-- blog -->
            <section id="blog" class="blog anchor">
                <div class="blog__inner">
                <?php include_once("blog-top.php") ?>
                
                <div class="ajax-content">
                <?php get_template_part('template-parts/content'); ?>
                    
                        <?php
                            global $wp_query; 
                            
                            if (  $wp_query->max_num_pages > 1 )
                                echo '<div class="btn filled2 ajax_loadmore">More posts</div>';
                        ?>
                    </div>
                    
                </div><!-- /blog__inner -->
            </section><!-- /blog -->
            <!-- swiper -->
            <div class="hero">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="hero__title"><a href="<?php echo esc_url( home_url( 'portfolio' ) ); ?>">PORTFOLIO</a></div>
                            <img src="<?php echo get_template_directory_uri() ?>/images/taipei.jpg" alt="bboy hayato1" />
                        </div><!-- /swiper-slide -->
                        <div class="swiper-slide">
                            <div class="hero__title"><a href="https://www.youtube.com/results?search_query=bboy+hayato1" target="_blank" rel="noopener">BATTLE</a></div>
                            <img src="<?php echo get_template_directory_uri() ?>/images/france.jpg" alt="bboy hayato1" />
                        </div><!-- /swiper-slide -->
                        <div class="swiper-slide">
                            <div class="hero__title"><a href="https://instagram.com/bboyhayato1/?hl=ja" target="_blank" rel="noopener">LIFE</a></div>
                            <img src="<?php echo get_template_directory_uri() ?>/images/life.jpg" alt="bboy hayato1" />
                        </div><!-- /swiper-slide -->
                    </div><!-- /swiper-wrapper -->
                </div><!-- /swiper-container -->
            </div><!-- /hero -->
            <!-- /swiper -->
            <!-- memories -->
            <section class="memories">
                <div>
                    <h2 class="main-title tween-animate-title anchor" id="memories">Memories</h2>
                    <p class="sub-title tween-animate-title">
                        Battle Judge Lesson and more...
                    </p>
                </div>
                <div class="memories__inner">
                    <div class="memories__item">
                        <div class="cover-slide hover-darken">
                            <div id="js-show-popup1" class="bg-img-zoom img-bg50" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/battle.jpg);"></div>
                        </div><!-- /cover-slide -->
                        <p class="memories__title tween-animate-title">
                            Exhibition battle in Osaka
                        </p><!-- /memories__title -->
                        <p class="memories__subtitle tween-animate-title">
                            @X Over Japan 2019 
                        </p><!-- /memories__subtitle -->
                    </div><!-- /memories__item -->

                    <div class="memories__item">
                        <div class="cover-slide hover-darken">
                            <div id="js-show-popup2" class="bg-img-zoom img-bg50" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/russia.jpg);"></div>
                        </div><!-- /cover-slide -->
                        <p class="memories__title tween-animate-title">
                            Battle in Russia
                        </p><!-- /memories__title -->
                        <p class="memories__subtitle tween-animate-title">
                            @COMBONATION X
                        </p><!-- /memories__subtitle -->
                    </div><!-- /memories__item -->
                    <div class="memories__item">
                        <div class="cover-slide hover-darken">
                            <div id="js-show-popup3" class="bg-img-zoom img-bg50" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/singapore.jpg);"></div>
                        </div>
                        <p class="memories__title tween-animate-title">
                            Battel in Singapore
                        </p><!-- /memories__title -->
                        <p class="memories__subtitle tween-animate-title">
                        Hancai Battle Breakin Final | Radikal Forze Jam 2018
                        </p><!-- /memories__subtitle -->
                    </div><!-- /memories__item -->
                    <div class="memories__item">
                        <div class="cover-slide hover-darken">
                            <div id="js-show-popup4" class="bg-img-zoom img-bg50" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/judge2.jpg);"></div>
                        </div>
                        <p class="memories__title tween-animate-title">
                            Judge in HongKong
                        </p><!-- /memories__title -->
                        <p class="memories__subtitle tween-animate-title">
                            @HipHop Arena2018
                        </p><!-- /memories__subtitle -->
                    </div><!-- /memories__item -->
                    <div class="memories__item">
                        <div class="cover-slide hover-darken">
                            <div id="js-show-popup5" class="bg-img-zoom img-bg50" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/judge3.jpg);"></div>
                        </div>
                        <p class="memories__title tween-animate-title">
                            Judge in China
                        </p><!-- /memories__title -->
                        <p class="memories__subtitle tween-animate-title">
                            @卧虎藏龙jam
                        </p><!-- /memories__subtitle -->
                    </div><!-- /memories__item -->
                    <div class="memories__item">
                        <div class="cover-slide hover-darken">
                            <div id="js-show-popup6" class="bg-img-zoom img-bg50" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/lesson.jpg);"></div>
                        </div><!-- /cover-slide -->
                        <p class="memories__title tween-animate-title">
                            Workshop in Taiwan
                        </p><!-- /memories__title -->
                        <p class="memories__subtitle tween-animate-title">
                           @Taoyuan city
                        </p><!-- /memories__subtitle -->
                    </div><!-- /memories__item -->
                    <div class="memories__btn appear up">
                        <button class="btn slide-bg2">
                            <a href="https://www.youtube.com/results?search_query=bboy+hayato1" target="_blank" rel="noopener">
                                GO to YouTube
                            </a>
                        </button><!-- /btn -->
                    </div><!-- /memories__btn -->

                </div><!-- /memories__inner -->
            </section><!-- /memories -->
            <!-- /memories -->
            <!-- skills -->
            <section class="skills anchor" id="skills">
                <div class="skills__header">
                    <h2 class="main-title tween-animate-title">Skills</h2>
                    <p class="sub-title tween-animate-title">
                        About Programing / Design / Movie Create / Motion Graphics
                    </p>
                </div><!-- /skills__header -->
                <div class="skills__inner">
                    <div class="colum1">
                        <div class="skill-box">
                            <div class="skill-title">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/html5.png" class="skill-icon" />
                                </div><!-- /img -->
                                <h3>HTML 5</h3>
                            </div><!-- /skill-title -->
                        </div><!-- /skill-box -->
                        <div class="skill-box">
                            <div class="skill-title">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/css3.png" class="skill-icon" />
                                </div><!-- /img -->
                                <h3>CSS3</h3>
                            </div><!-- /skill-title -->
                        </div><!-- /skill-box -->
                        <div class="skill-box">
                            <div class="skill-title">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/sass.png" class="skill-icon" />
                                </div><!-- /img -->
                                <h3>Sass/SCSS</h3>
                            </div><!-- /skill-title -->
                        </div><!-- /skill-box -->
                    </div><!-- /colum1 -->
                    <div class="colum2">
                        <div class="skill-box">
                            <div class="skill-title">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/bem.png" class="skill-icon" />
                                </div><!-- /img -->
                                <h3>BEM</h3>
                            </div><!-- /skill-title -->
                        </div><!-- /skill-box -->
                        <div class="skill-box">
                            <div class="skill-title">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/javascript.png" class="skill-icon" />
                                </div><!-- /img -->
                                <h3>javascript</h3>
                            </div><!-- /skill-title -->
                        </div><!-- /skill-box -->
                        <div class="skill-box">
                            <div class="skill-title">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/jquery.svg" class="skill-icon" />
                                </div><!-- /img -->
                                <h3>iQuery</h3>
                            </div><!-- /skill-title -->
                        </div><!-- /skill-box -->
                    </div><!-- /colum2 -->
                    <div class="colum3">
                        <div class="skill-box">
                            <div class="skill-title">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/php.png" class="skill-icon" />
                                </div><!-- /img -->
                                <h3>PHP</h3>
                            </div><!-- /skill-title -->
                        </div><!-- /skill-box -->
                        <div class="skill-box">
                            <div class="skill-title">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/wordpress.png" class="skill-icon" />
                                </div><!-- /img -->
                                <h3>Wordpress</h3>
                            </div><!-- /skill-title -->
                        </div><!-- /skill-box -->
                        <div class="skill-box">
                            <div class="skill-title">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/webpack.png" class="skill-icon" />
                                </div><!-- /img -->
                                <h3>Webpack</h3>
                            </div><!-- /skill-title -->
                        </div><!-- /skill-box -->
                    </div><!-- /colum3 -->
                    <div class="colum4">
                        <div class="skill-box">
                            <div class="skill-title">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/photoshop.svg" class="skill-icon" />
                                </div><!-- /img -->
                                <h3>Photoshop</h3>
                            </div><!-- /skill-title -->
                        </div><!-- /skill-box -->
                        <div class="skill-box">
                            <div class="skill-title">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/premire.svg" class="skill-icon" />
                                </div><!-- /img -->
                                <h3>PremirePro</h3>
                            </div><!-- /skill-title -->
                        </div><!-- /skill-box -->
                        <div class="skill-box">
                            <div class="skill-title">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/after-effects.svg" class="skill-icon" />
                                </div><!-- /img -->
                                <h3>AfterEffect</h3>
                            </div><!-- /skill-title -->
                        </div><!-- /skill-box -->
                    </div><!-- /colum4 -->
                </div><!-- /skills__inner -->
            </section><!-- /skills -->
            <!-- /skills -->
            <!-- contact -->
            <section class="anchor2" id="contact">
                <div class="contact">
                    <div class="contact__items">
                        <h2>Contact</h2>
                        <?php echo do_shortcode( '[contact-form-7 id="148" title="CONTACT"]' ); ?>

                    </div><!-- /contact__items -->
                </div><!-- /contact -->
            </section><!-- /anchor2 -->
            <!-- /contact -->
        </main>
        <aside class="side right">
            <div class="side__inner">
               <a id="to-top"><span></span>TOP</a>
            </div><!-- /side__inner -->
        </aside><!-- /side right -->
        <aside class="side-sp">
            <div class="side-sp-inner">
               <a id="to-top-sp" class="fade-in"><span></span></a>
            </div><!-- /side__inner-sp -->
        </aside><!-- /side right-sp -->
    </div><!-- /main-content -->
</div><!-- /content -->
<!-- /main -->
<?php include_once("modal.php") ?>

<?php get_footer() ?>