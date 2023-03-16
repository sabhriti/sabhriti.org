<?php if ( $docs ) { ?>
    <div class="row nav list-group-flush">
		<?php foreach ( $docs as $key => $main_doc ) { ?>
                <?php
            if ($key%2 === 0 ) { ?>
                </div><div class="row nav list-group-flush">
            <?php }

            ?>

            <div class="col nav-item wedocs-docs-single nav-item p-5">
                <a class="nav-link text-light list-group-item list-group-item-action bg-blue"
                   href="<?php echo get_permalink( $main_doc['doc']->ID ); ?>">
                    <span class="material-icons doc-title-icon">manage_accounts</span>
					<?php echo $main_doc['doc']->post_title; ?>
                </a>

				<?php if ( $main_doc['sections'] ) { ?>
                    <ul class="btn-toggle-nav list-unstyled fw-normal m-0">
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

                <div class="wedocs-doc-link p-2 bg-blue ">
                    <a href="<?php echo get_permalink( $main_doc['doc']->ID ); ?>" class="nav-link text-white">
						<?php echo $more; ?>
                    </a>
                </div>
            </div>
		<?php } ?>
    </div>
<?php }
