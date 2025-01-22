<?php
	get_header();
	$term = get_queried_object();
?>

	<section class="banner-superior" data-parallax="scroll" data-image-src="<?php if( have_rows('header', $term) ): while( have_rows('header', $term) ): the_row(); ?><?php the_sub_field('imagen'); ?><?php endwhile; endif; ?>">
        <div class="overlay">
            <div class="caption">
                <h1 data-aos="fade-right" data-aos-once="true"><?php esc_html_e( '', 'geg' ); single_cat_title(); ?></h1>
			<?php if( have_rows('header', $term) ): while( have_rows('header', $term) ): the_row(); ?>
                <p data-aos="fade-right" data-aos-delay="300" data-aos-once="true"><?php the_sub_field('texto'); ?></p>
			<?php endwhile; endif; ?>
            </div>
        </div>
    </section>

	<section class="py-60">
        <div class="container">
            <div class="row">
                <div class="col text-center" data-aos="fade-right" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
                <?php if( have_rows('texto_superior', $term) ): while( have_rows('texto_superior', $term) ): the_row(); ?>
                    <p><?php the_sub_field('texto'); ?></p>
                <?php endwhile; endif; ?>
                </div>
            </div>
            <!-- Incluir carrusel -->
            <?php include get_template_directory() . '/includes/carrusel-global-news-blog.php'; ?>
            <!-- /Incluir carrusel -->
        </div>
    </section>

	<section class="articulos py-60">
		<div class="container">
			<div class="row mb-4">
				<?php get_template_part( 'loop' ); ?>
			</div>
			<div class="row" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
				<div class="col text-center">
					<?php echo bootstrap_pagination(); ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
