<?php
$s = get_search_query();
$args = array(
    's' => $s,
    'post_type' => array('post'),
    // 'post_type' => array('post', 'page', 'product'),
    // 'post__not_in' => array(wc_get_page_id('cart'))
);


$the_query = new WP_Query($args);
?>


<?php get_header(); ?>
<main class="main search-page" id="search-page">
    <div class="section">
        <div class="b-container">
            <div class="seach-page-head">
                <?php

                if ($the_query->have_posts()) {
                ?>
                    <h2 class="primary-heading">
                        Search Results for:
                        <span>
                            <?php echo get_query_var('s'); ?>
                        </span>
                    </h2>
                <?php
                } else {
                ?>
                    <h2 class="primary-heading">
                        Nothing Found
                    </h2>
                    <div class="alert alert-info">
                        <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.
                        </p>
                    </div>
                <?php
                }
                ?>
            </div>


            <div class="flex flex-col gap-4">

                <?php

                if ($the_query->have_posts()) {
                ?>
                    <?php
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                    ?>
                        <li class="primary-sub-heading">
                            <a target="_blank" href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </li>
                <?php
                    }
                }

                wp_reset_postdata();
                ?>
            </div>
        </div>

    </div>
</main>
<?php get_footer(); ?>