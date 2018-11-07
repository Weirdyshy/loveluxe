<?php /* Template Name: return-and-exchange*/ ?>

<?php get_header();?>

<style>
	ol
	{
		background-color:transparent!important;
	}
</style>

<?php
// TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
	<h2 style = "padding:20px;"><?php the_title(); ?></h2>     
        <div class="entry-content-page" style = "padding:20px;">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
endwhile; //resetting the page loop
wp_reset_query(); //resetting the page query
?>

<?php get_footer();?>
