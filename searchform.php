<form action="/" style="--url:url('<?php echo get_theme_file_uri("/public/search.svg") ?>')" data-search-form
    method="get">
    <input type="text" name="s" id="searchBar" value="<?php the_search_query(); ?>" placeholder="Search..">
</form>