<?php if (have_posts()): $i = 1; while (have_posts()) : the_post(); ?>

	<div class="col-lg-6 col-xl-4 mb-4" data-aos="fade-up" data-aos-delay="<?php echo $i; ?>00" data-aos-duration="800" data-aos-once="true">
		<div class="articulo">
			<div class="miniatura" style="background: url('<?php the_post_thumbnail_url(); ?>')">
				<a href="<?php the_permalink(); ?>"></a>
			</div>
			<div class="contenido">
				<a href="<?php the_permalink(); ?>">
					<h6 class="titulo"><?php the_title(); ?></h6>
				</a>
				<hr>
				<p><?php html5wp_excerpt('html5wp_custom_post'); ?></p>
			</div>
			<div class="pie">
				<div class="row">
					<div class="col-10 my-auto">
						<i class="fa-solid fa-calendar-days"></i> <small><?php esc_html_e( 'Publicado el:', 'geg' ); ?> <time datetime="<?php the_time( 'H:i:s' ); ?>"><?php echo get_the_date( 'j F, Y' ); ?></time></small>
					</div>
					<!-- div class="col-2 my-auto text-end">
						<a href="#">
							<i class="fa-solid fa-heart"></i>
						</a>
					</div -->
				</div>
			</div>
		</div>
	</div>

<?php $i++; endwhile; ?>
<?php else : ?>

	<div class="col-lg-6 col-xl-4 mb-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
		<div class="articulo">
			<div class="contenido">
				<p><?php esc_html_e( 'Lo sentimos, no hay nada que mostrar aquí.', 'geg' ); ?></p>
			</div>
		</div>
	</div>

<?php endif; ?>

<?php wp_reset_query(); ?>
