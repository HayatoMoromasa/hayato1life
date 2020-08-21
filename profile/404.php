<?php get_header(); ?>
<!-- main -->
<div id="content">
    <div id="main-content">
    <?php get_sidebar(); ?>
        <main>
            <!-- blog__single -->
            <section class="blog__single opacity-simple anchor3" id="blog__single">
                <div class="blog__single__inner">
                
                	<h1 class="entry-title">404 Not Found（ページが見つかりませんでした）</h1><!-- /entry-title -->
                	<p class="error_url">URL ：<span><?php echo get_pagenum_link(); ?></span></p><!-- /error_url -->
                	<p>現在表示する記事がありません。よろしければ、検索ボックスにお探しのコンテンツに該当するキーワードを入力して下さい。</p>
                	<div class="not-found">
                        <?php get_search_form(); ?><!-- 検索フォームを表示 -->
                    </div><!-- /not-found -->
                	<p><a class="not-found-link" href="<?php echo home_url(); ?>">トップページへ >></a><!-- /not-found-link --></p>
                
                </div><!-- /blog__single__inner -->
            </section><!-- /blog__single -->
            <!-- /blog__single -->
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