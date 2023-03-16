<?php
/*
 * Template Name: Documentation template
 * description: The template for the inner pages.
 */
?>
<?php get_header(); ?>

<?php get_template_part( 'template-parts/svg', '' ); ?>
<?php get_template_part( 'template-parts/menu', 'top' ); ?>

<div class="justify-content-between align-items-center py-3 border-top bg-dark">
    <div class="d-flex flex-column flex-md-row align-items-center p-3">

        <div class="container-fluid">
            <div class="p-4 p-md-5 mb-4 text-white">
                <div class="col-md-6 px-0">
                    <p class="display-1 fst-italic h1 p-0 mb-5"><?php the_title() ?></p>
                    <form role="search" method="get" class="ms-3"
                          action="<?php echo home_url( '/' ); ?>">
                        <div class="input-group mb-3">
                            <input
                                    aria-label="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
                                    aria-describedby="button-addon2"
                                    type="search"
                                    class="form-control bg-light border-light rounded-0"
                                    id="searchInput"
                                    placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
                                    value="<?php echo get_search_query() ?>"
                                    name="s"
                                    title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>"
                            />
                            <button type="submit" class="btn btn-light rounded-0">
                                <span class="material-icons">search</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

			<?php echo do_shortcode( '[wedocs]' ); ?>

			<?php
			while ( have_posts() ) : the_post();

				the_content();

				get_template_part( 'content', 'page' );
			endwhile;
			?>

        </div>
    </div>
</div>

<?php get_footer(); ?>
