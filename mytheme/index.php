<?php get_header(); ?>

<main>
    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            echo '<article>';
            the_title('<h2>', '</h2>');
            // the_content();
            echo '</article>';
        }
    } else {
        echo '<p>No posts found.</p>';
    }
    ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
