
        <footer class="footer appear up">
            <div class="logo item">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/hyt1lifeLogoWhite.svg" alt="" class="logo__img" /></a>
            </div>
            <nav class="footer__nav">
                <ul class="footer__ul">
                    <li class="footer__li item"><a href="<?php echo esc_url( home_url( '#profile' ) ); ?>">Profile</a></li>
                    <li class="footer__li item"><a href="<?php echo esc_url( home_url( '#blog' ) ); ?>">Blog</a></li>
                    <li class="footer__li item"><a href="<?php echo esc_url( home_url( '#memories' ) ); ?>">Memories</a></li>
                    <li class="footer__li item"><a href="<?php echo esc_url( home_url( '#skills' ) ); ?>">Skills</a></li>
                    <li class="footer__li item"><a href="<?php echo esc_url( home_url( '#contact' ) ); ?>">Contact</a></li>
                </ul>
                <ul class="footer__ul-sns">
                    <li class="footer__li-sns item">
                        <a class="main-title youtube"href="https://www.youtube.com/channel/UCDSnJTBDru8P8Js4kJaxQMQ" target="_blank" rel="noopener">
                        </a>
                    </li>
                    <li class="footer__li-sns item">
                        <a class="main-title twitter" id="js-show-popup7-1">
                        </a>
                    </li>
                    <li class="footer__li-sns item">
                        <a class="main-title facebook"href="https://www.facebook.com/hayato.moromasa" target="_blank" rel="noopener">
                        </a>
                    </li>
                    <li class="footer__li-sns item">
                        <a class="main-title instagram"href="https://instagram.com/bboyhayato1/?hl=ja" target="_blank" rel="noopener">
                        </a>
                    </li>
                    <li class="footer__li-sns item">
                        <a class="main-title github"href="https://github.com/HayatoMoromasa" target="_blank" rel="noopener"></a>
                    </li>
                </ul>
            </nav>
            <div class="footer__copyright item">
                &copy; Hayato Moromasa
            </div>
        </footer>
    </div><!-- /container -->
</div><!-- /global-container -->
<?php wp_footer()?>
<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>