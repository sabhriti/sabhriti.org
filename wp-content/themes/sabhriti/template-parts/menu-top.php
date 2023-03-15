<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 1 bg-white border-bottom box-shadow">
    <h5 class="navbar-brand my-0 mr-md-auto font-weight-normal">
        <a href="<?php echo home_url(); ?>" class="nav-link">
            <img alt="" class="mb-2" height="25"
                 src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo_transparent.png" width="25"> &nbsp;
            Sabhriti
        </a>
    </h5>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavigation"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="material-icons navbar-toggler-icon">menu</span>
        </button>

        <div class="collapse navbar-collapse my-2 my-md-0 mr-md-3" id="topNavigation">
			<?php
			wp_nav_menu(
				[
					'menu'                   => 'primary',
					'container'              => false,
					'menu_class'             => "my-2 my-md-0 mr-md-3 navbar-nav",
					'items_wrap'             => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'menu_item_anchor_class' => 'nav-link text-dark',
				]
			);
			?>
            <a class="btn btn-outline-primary" href="#">Github</a>
        </div>
    </nav>
</div>
