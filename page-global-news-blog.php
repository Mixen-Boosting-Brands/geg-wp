<?php 
    /* Template Name: Global News & Blog */
    get_header();
    $currentlang = get_bloginfo('language');
?>

	<!-- Incluir header interna -->
    <?php include get_template_directory() . '/includes/header-interna.php'; ?>
    <!-- /Incluir header interna -->

    <section class="py-60">
        <div class="container">
            <div class="row">
                <div class="col text-center" data-aos="fade-right" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
                <?php if( have_rows('texto_superior') ): while( have_rows('texto_superior') ): the_row(); ?>
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
            <div class="row">
            <?php 
                if ( $currentlang == "en-US" ) {
                    $args = array(
                        'category_name' => 'blog-en'
                    );
                } else {
                    $args = array(
                        'category_name' => 'blog'
                    );
                }

                $the_query = new WP_Query( $args );
            ?>
            <?php if ($the_query->have_posts()): $i = 1; while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="row mt-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
                <div class="col">
                    <?php echo bootstrap_pagination(); ?>
                </div>
            </div>
        </div>
   </section>

<?php get_footer(); ?>
