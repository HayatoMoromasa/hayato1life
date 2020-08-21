

<?php get_header(); ?>
<!-- main -->
<div id="content">
    <div id="main-content">
    <?php get_sidebar(); ?>
        <main>
            <!-- blog -->
            <section id="blog" class="blog anchor3">
                <div class="blog__inner">
                <?php include_once("blog-top.php") ?>

                    <!-- breadcrumb -->
                    <div class="breadcrumb">
                    <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
                    </div><!-- /breadcrumb -->

                    <div class="archive-head m_description">
                    <div class="archive-lead">ARCHIVE</div>
                    <h1 class="archive-title m_category"><?php the_archive_title(); //一覧ページ名を表示 ?></h1><!-- /archive-title -->
                    <div class="archive-description">
                    <p><?php the_archive_description(); //説明を表示 ?></p>
                    </div><!-- /archive-description -->
                    </div><!-- /archive-head -->    
                    <div class="blog__items">
                        <?php
                        if (have_posts()) : ?>
                            <?php 
                            while(have_posts()) :
                                the_post(); ?>
                            <div class="blog__item">
                                <a href="<?php the_permalink(); ?>" class="blog__media">
                                    <div class="blog__media-img">
                                    <?php
                                            if (has_post_thumbnail()) {
                                                //アイキャッチ画像が設定されてれば大サイズで表示
                                                the_post_thumbnail('large');
                                            } else {
                                                //なければnoimage画像をデフォで表示
                                                echo '<img src="' . esc_url(get_template_directory_uri()) . '/images/noimg.png" alt="">';
                                            }
                                            ?>
                                    </div><!-- blog__media-img -->
                                    <div class="blog__media-body">
                                        <div class="blog__media-body">
                                            <div class="blog__item-meta">
                                            <?php 
                                            //カテゴリー1つ目の名前を表示
                                            $category = get_the_category();
                                            if($category[0]){
                                                echo '<div class="blog__item-tag">' . $category[0]->cat_name . '</div><!-- /blog-item-tag>';
                                            }
                                            ?>
                                            <!--   公開日時を動的に表示する -->
                                            <time class="blog__item-published" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j');?></time><!-- blog-item-published -->
                                            </div><!-- blog-item-meta -->
                                        </div><!-- blog__media-body -->
                                        <h2 class="blog__media-title"><?php the_title(); //タイトル表示 
                                                                            ?></h2><!-- /blog-media-title -->
                                        <div class="blog__media-content">
                                            <?php the_excerpt(); //抜粋表示 
                                                ?></div><!-- blog__media-content -->
                                    </div><!-- blog__media-body -->
                                </a><!-- blog__media -->
                            </div><!-- blog__item -->
                            <?php
                                    endwhile;
                                    ?>
                            <?php endif; ?>
                    </div><!-- /blog__items -->
                        <?php get_template_part('template-parts/pagenation'); ?>
                </div><!-- /blog__inner -->
            </section><!-- /blog -->

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