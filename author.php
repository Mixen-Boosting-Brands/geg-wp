<?php get_header(); ?>

	<section class="banner-superior" data-parallax="scroll" data-image-src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/global-news-and-blog/bg-banner-global-news-and-blog.png">
        <div class="overlay">
            <div class="caption">
                <h1 data-aos="fade-right" data-aos-once="true"><?php esc_html_e( 'Archivos de ', 'geg' ); echo get_the_author(); ?></h1>
            </div>
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