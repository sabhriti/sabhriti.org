<header>
    <nav class="d-flex flex-column flex-md-row align-items-center bg-light border-bottom box-shadow">

        <h5 class="navbar-brand my-0 mr-md-auto font-weight-normal">
            <a href="<?php echo home_url(); ?>" class="nav-link text-dark">
                <img alt="sabhriti-logo" class="mb-2" height="25"
                     src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo_transparent.png" width="25">
                &nbsp;
                SABHRITI
            </a>
        </h5>

        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu"
                        aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="main-menu">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'main-menu',
						'container'      => false,
						'menu_class'     => '',
						'fallback_cb'    => '__return_false',
						'items_wrap'     => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
						'depth'          => 2,
						'walker'         => new bootstrap_5_wp_nav_menu_walker()
					) );
					?>
                </div>

                <a href="https://www.github.com/sabhriti" target="_blank" class="btn btn-sm btn-outline-danger ml-sm-5"
                   type="submit">Github</a>
            </div>
        </nav>
    </nav>
</header>