<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">

    <div class="col-md-4 d-flex align-items-center">
        <span class="mb-3 mb-md-0 text-muted">www.sabhriti.org</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3">
            <a class="text-muted" href="#">
                <svg class="bi" height="24" width="24">
                    <use xlink:href="#github"></use>
                </svg>
            </a>
        </li>
        <li class="ms-3">
            <a class="text-muted" href="#">
                <svg class="bi" height="24" width="24">
                    <use xlink:href="#stack-overflow"></use>
                </svg>
            </a>
        </li>
        <li class="ms-3">
            <a class="text-muted" href="#">
                <svg class="bi" height="24" width="24">
                    <use xlink:href="#twitter"></use>
                </svg>
            </a>
        </li>
    </ul>
</footer>


<?php wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-slim.min.js', array(), 1.1, true ); ?>
<?php wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js', array(), 1.1, true ); ?>
<?php wp_enqueue_script( 'Holder', get_template_directory_uri() . '/assets/js/holder.min.js', array(), 1.1, true ); ?>
<?php wp_footer(); ?>

<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>

</body>
</html>
