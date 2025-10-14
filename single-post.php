<?php get_header() ?>


<main class="main blog-details" id="blog-details">

    <?php

    $banner_image = get_field('image', get_the_ID());
    $banner_video = get_field('video', get_the_ID());

    $banner_image = get_the_post_thumbnail_url(get_the_ID(), "full");


    $default_image = get_theme_file_uri("/public/bg-banner.png");


    ?>

    <section
        class="w-full relative aspect-[16/9] overflow-hidden flex flex-col justify-center snap-y overflow-y-scroll <?php echo $banner_image ? "bg-cover bg-center" : "bg-[#1b395675]" ?> "
        style="--url:url(<?php echo $banner_image ? $banner_image : "" ?>);
        
    background-image: linear-gradient(#1b395675), var(--url);
        ">
        <?php if ($banner_video): ?>
            <video autoplay muted loop class="w-full h-full object-cover absolute top-0 left-0 -z-10">
                <source src="<?php echo $banner_video; ?>" type="video/mp4">
            </video>
        <?php endif; ?>
        <div class="container  snap-start h-full flex flex-col gap-8 items-center relative uppercase justify-center z-[1]">

            <div class="ball-box" data-aos="fade-in" data-aos-duration="1000">
                <div class="ball">
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="flex flex-col py-16">
            <div class="flex flex-col justify-center items-center gap-4">

                <h2 class="text-3xl uppercase text-center sm:text-6xl font-normal text-primary" data-aos-duration="1000" data-aos="fade-up">
                    <?php
                    echo get_the_title()
                    ?>
                </h2>
                <hr class="border-primary w-1/6" data-aos="fade-up" data-aos-duration="100">
                <p class="text-sm text-gray-500 mb-12" data-aos="fade-up" data-aos-duration="100">
                    <?php echo get_the_date(); ?>
                </p>

                <div class="blog-content" data-aos="fade-up" data-aos-duration="100">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>

</main>
<?php get_footer() ?>