<section class="jumbotron">
    <div class="jumbotron__header">
        <!-- jumbotron header -->

    </div>
    <div class="jumbotron__body">
        <?php the_custom_logo(); ?>
        <h1><?php echo esc_html(get_bloginfo('name'))?></h1>
        <div class="catch-phrase">
            <div class="catch-phrase__body">
                <h2><?php echo html_entity_decode(get_bloginfo('description'));?></h2>
                <p>description Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis, culpa vitae.</p>
            </div>
        </div>
    </div>
</section>