<div class="row mt-4">
    <div class="carrusel-tipo-5">
        <div class="col-10 offset-1 overflow-hidden">
             <!-- Slider main container -->
             <div class="slider-vacantes">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                <?php 
                    $args = array(
                        'post_type' => 'vacantes'
                    );

                    $the_query = new WP_Query( $args );
                ?>
                <?php if ($the_query->have_posts()): $i = 3; while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="swiper-slide">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('vacante'); ?>
                        </a>
                    </div>
                <?php $i++; endwhile; ?>
                <?php else : ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            
        </div>
    </div>
</div>