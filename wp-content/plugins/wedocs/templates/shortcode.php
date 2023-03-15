<?php if ( $docs ) { ?>
    <div class="bg-light border-right vh-100" id="sidebar-wrapper" style="width: 100%;">
        <ul class="nav list-group list-group-flush overflow-auto h-100">

			<?php foreach ( $docs as $main_doc ) { ?>
                <li class="wedocs-docs-single nav-item">
                    <a class="nav-link text-light list-group-item list-group-item-action bg-dark"
                       href="<?php echo get_permalink( $main_doc['doc']->ID ); ?>">
						<?php echo $main_doc['doc']->post_title; ?>
                    </a>

					<?php if ( $main_doc['sections'] ) { ?>
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1">
							<?php foreach ( $main_doc['sections'] as $section ) { ?>
                                <li>
                                    <a href="<?php echo get_permalink( $section->ID ); ?>"
                                       class="list-group-item list-group-item-action bg-light">
										<?php echo $section->post_title; ?>
                                    </a>
                                </li>
							<?php } ?>
                        </ul>
					<?php } ?>

                    <div class="wedocs-doc-link p-3">
                        <a href="<?php echo get_permalink( $main_doc['doc']->ID ); ?>" class="right">
                            <?php echo $more; ?>
                        </a>
                    </div>
                </li>
			<?php } ?>
        </ul>
    </div>
<?php }
