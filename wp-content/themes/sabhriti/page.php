<?php
/*
 * Template Name: Content page template
 * description: The template for the inner pages.
 */
?>
<?php get_header(); ?>

<?php get_template_part( 'template-parts/svg', '' ); ?>
<?php get_template_part( 'template-parts/menu', 'top' ); ?>

<main>
    <div class="justify-content-between align-items-center py-3 border-top bg-dark ">
        <div class="d-flex flex-column flex-md-row align-items-center p-3 text-light">
			<?php
			while ( have_posts() ) : the_post();

				the_content();

				get_template_part( 'content', 'page' );
			endwhile;
			?>

        </div>
    </div>
</main>
<?php get_footer(); ?>
