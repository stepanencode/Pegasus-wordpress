<div>
    <h3><?php the_title(); ?></h3>
    <hr class="decorate-line-tour"/>
    <?php the_content(); ?>
    
    <?php echo get_the_post_thumbnail( $page->ID, 'full'); ?>

    <button class="btn btn-more">
        <a class="btn__text " href="<?php echo get_post_permalink( $page->ID ); ?>">Подробнее</a>
    </button>    
</div>
