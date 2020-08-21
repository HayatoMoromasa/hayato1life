<?php get_header(); ?>
<!-- main -->
<div id="content">
    <div id="main-content">
    <?php get_sidebar(); ?>
        <main>
            <!-- blog__single -->
            <section class="blog__single opacity-simple anchor3" id="blog__single">
                <div class="blog__single__inner">
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
                                    <h1 class="entry-title"><?php the_title(); ?></h1><!-- /entry-title -->

                                    <!-- entry-img -->
                                    <div class="entry__profile-img">
                                        <div class="inset">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('large');
                                            }
                                            ?>
                                        </div><!-- /.inset -->
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