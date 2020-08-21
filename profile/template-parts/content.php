<div class="blog__items">
    <?php
    if (have_posts()) : ?>
        <?php
        while (have_posts()) :
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
                                if ($category[0]) {
                                    echo '<div class="blog__item-tag">' . $category[0]->cat_name . '</div><!-- /blog-item-tag>';
                                }
                                ?>
                                <!--   公開日時を動的に表示する -->
                                <time class="blog__item-published" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time><!-- blog-item-published -->
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