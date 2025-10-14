<?php get_header(); ?>

<main class="main container max-w-6xl mx-auto px-4 py-8">
    <?php if (have_posts()) : ?>
        <div class="posts-grid grid gap-8">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('post-card bg-white rounded-lg shadow-md overflow-hidden'); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large', ['class' => 'w-full h-48 object-cover']); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    
                    <div class="post-content p-6">
                        <header class="post-header mb-4">
                            <h2 class="post-title text-2xl font-bold mb-2">
                                <a href="<?php the_permalink(); ?>" class="text-gray-900 hover:text-blue-600 transition-colors">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            
                            <div class="post-meta text-sm text-gray-600 mb-4">
                                <span class="post-date">
                                    <?php echo get_the_date(); ?>
                                </span>
                                <span class="post-author ml-4">
                                    by <?php the_author(); ?>
                                </span>
                                <?php if (get_the_category()) : ?>
                                    <span class="post-categories ml-4">
                                        in <?php the_category(', '); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </header>
                        
                        <div class="post-excerpt text-gray-700 mb-4">
                            <?php the_excerpt(); ?>
                        </div>
                        
                        <footer class="post-footer">
                            <a href="<?php the_permalink(); ?>" class="read-more inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                Read More
                            </a>
                        </footer>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
        
        <div class="pagination mt-12">
            <?php
            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => __('← Previous', 'textdomain'),
                'next_text' => __('Next →', 'textdomain'),
                'class' => 'flex justify-center space-x-2'
            ));
            ?>
        </div>
        
    <?php else : ?>
        <div class="no-posts text-center py-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">No posts found</h2>
            <p class="text-gray-600 mb-6">Sorry, no posts were found. Please check back later.</p>
            <a href="<?php echo home_url(); ?>" class="inline-block bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 transition-colors">
                Return Home
            </a>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>