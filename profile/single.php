<?php get_header(); ?>
<!-- main -->
<div id="content">
    <div id="main-content">
    <?php get_sidebar(); ?>
        <main>
            <!-- blog__single -->
            <section class="blog__single opacity-simple anchor3" id="blog__single">
                <div class="blog__single__inner">
                    <?php include_once("blog-top.php") ?>

                    <div class="blog__single__texts appear left">
                        <?php if (function_exists('bcn_display')) : ?>
                            <!-- breadcrumb -->
                            <div class="breadcrumb">
                                <?php bcn_display(); ?>
                            </div><!-- /breadcrumb -->
                        <?php endif; ?>

                        <?php
                        if (have_posts()) :
                            while (have_posts()) :
                                the_post();
                        ?>
                            <!-- entry -->
                            <article <?php post_class(array('entry')); ?>>

                                <!-- entry-header -->
                                <div class="entry-header">
                                    <?php
                                    // カテゴリー１つ目の名前を表示
                                    $category = get_the_category();
                                    if ($category[0]) : ?>
                                        <div class="entry-label"><a href="<?php echo esc_url(get_category_link($category[0]->term_id)); ?>"><?php echo $category[0]->cat_name; ?></a></div><!-- /entry-item-tag -->
                                    <?php endif; ?>
                                    <h1 class="entry-title"><?php the_title(); ?></h1><!-- /entry-title -->

                                    <!-- entry-meta -->
                                    <div class="entry-meta">
                                        <time class="entry-published" datetime="<?php the_time('c'); ?>">公開日 <?php the_time('Y/n/j'); ?></time>
                                        <?php if (get_the_modified_time('Y-m-d') !== get_the_time('Y-m-d')) : ?>
                                            <time class="entry-updated" datetime="<?php the_modified_time('c'); ?>">最終更新日 <?php the_modified_time('Y/n/j'); ?></time>
                                        <?php endif; ?>
                                    </div><!-- /entry-meta -->

                                    <!-- entry-img -->
                                    <div class="entry-img">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('large');
                                        }
                                        ?>
                                    </div><!-- /entry-img -->
                                </div><!-- /entry-header -->

                                <!-- entry-body -->
                                <div class="entry-body">
                                    <?php
                                    //本文の表示
                                    the_content(); ?>
                                    <?php
                                    //改ページを有効にするための記述
                                    wp_link_pages(
                                        array(
                                            'before' => '<nav class="entry-links">',
                                            'after' => '</nav>',
                                            'link_before' => '',
                                            'link_after' => '',
                                            'next_or_number' => 'number',
                                            'separator' => '',
                                        )
                                    );
                                    ?>
                                </div><!-- /entry-body -->
                            </article><!-- /entry -->
                            <?php
                            endwhile;
                        endif;
                            ?>
                    </div>
                    <div class="blog__single__link">
                        <?php previous_post_link('%link', '<< Back', true); ?>
                        <?php next_post_link('%link', 'Next >>', true); ?>
                    </div>
                    <?php

                        $categ = get_the_category($post->ID);
                        $catID = array();

                        foreach($categ as $cat){
                            array_push($catID, $cat -> cat_ID);
                        }

                        $args = array(
                            'post__not_in' => array($post->ID),
                            'category__in' => $catID,
                            'posts_per_page' => 4,
                            'orderby' => 'rand'
                        );

                        $the_query = new WP_Query($args);
                        if($the_query -> have_posts()) :?>

                        <h2 class="related-posts-title">Related posts</h2>
                        <div class="related-posts">
                        <?php while($the_query -> have_posts()) : $the_query -> the_post();
                        ?>
                            <div class="cell">
                                <a href="<?php the_permalink(); ?>">
                                <div class="cell-img">
                                    <?php if(has_post_thumbnail()): the_post_thumbnail('thumbnail');
                                        else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/noimg.png" alt="<?php the_title(); ?>">
                                    <?php endif; ?>

                                </div>
                                </a>
                                <div class="post-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                        </div>
                        <?php endif; wp_reset_postdata(); ?>
                </div>
            </section>
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