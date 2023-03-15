<?php
/*
 * Template Name: Content page template
 * description: The template for the inner pages.
 */
?>
<?php get_header(); ?>

<?php get_template_part( 'template-parts/svg', '' ); ?>
<?php get_template_part( 'template-parts/menu', 'top' ); ?>

<div class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
    <div class="d-flex flex-column flex-md-row align-items-center p-3">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="card-deck mb-3 text-left col-10">
	                <?php
	                while ( have_posts() ) : the_post();

		                the_content();

		                get_template_part( 'content', 'page' );
	                endwhile;
	                ?>
                </div>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>


