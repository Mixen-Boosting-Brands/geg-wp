<section class="banner-superior" data-parallax="scroll" data-image-src="<?php if( !is_search() ): ?><?php if( have_rows('header') ): while( have_rows('header') ): the_row(); ?><?php the_sub_field('imagen'); ?><?php endwhile; endif; ?><?php else: ?><?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/404/header-404.png<?php endif; ?>">
    <div class="overlay">
        <div class="caption">
    <?php if( !is_search() ): ?>
        <?php if( have_rows('header') ): while( have_rows('header') ): the_row(); ?>
            <h1 data-aos="fade-right" data-aos-once="true" <?php if( get_sub_field('color_del_titulo') ): ?>style="color: #<?php the_sub_field('color_del_titulo'); ?>;"<?php endif; ?>><?php the_title(); ?></h1>
        <?php endwhile; endif; ?>
    <?php endif; ?>
        <?php if( have_rows('header') ): while( have_rows('header') ): the_row(); ?>
            <p data-aos="fade-right" data-aos-delay="300" data-aos-once="true"><?php the_sub_field('texto'); ?></p>
        <?php endwhile; endif; ?>
        </div>
    </div>
</section>