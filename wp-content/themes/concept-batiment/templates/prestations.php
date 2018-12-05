<section class="prestations">
    <div class="container">
        <h2 class="title"><?php _e('Nos prestations', 'twoobl'); ?></h2>
        <div class="wrapper-prestations">
            <?php
            $the_query = new WP_Query( array('post_type' => 'page', 'posts_per_page' => -1));
            $urls = get_field('prestations', 'options');
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) : $the_query->the_post();
                    if ($urls) {
                        foreach ($urls as $url) {
                            if ($url == get_permalink()) {
                                echo '<article class="item-prestation">';
                                    echo '<a href="' . get_the_permalink() . '">';
                                        echo '<div class="wrapper-image">';
                                            the_post_thumbnail();
                                        echo '</div>';
                                        echo '<h3>' . get_the_title() . '</h3>';
                                        echo the_excerpt();
                                    echo '</a>';
                                echo '</article>';
                            }
                        }
                    }
                endwhile;
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
