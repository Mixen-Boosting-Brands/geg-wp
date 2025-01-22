<div class="row mt-4">
    <div class="col">
        <div class="carrusel-tipo-4">
            <div id="carruselTipo4" class="carousel slide" data-bs-ride="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                        <?php
                            $args = array(
                                'number' => 3, // 9/09/2022 - Cambiar a 2 para ocultar la categoría "Contenidos descargables"
                                'orderby' => 'name'
                            );

                            $cats = get_terms('category', $args);

                            $i = 3;

                            foreach($cats as $cat):
                        ?>
                            <div class="col-lg-4 overflow-hidden" data-aos="fade-up" data-aos-delay="<?php echo $i; ?>00" data-aos-duration="800" data-aos-once="true">
                            <?php if( have_rows('carrusel', $cat) ): while( have_rows('carrusel', $cat) ): the_row(); ?>
                                <div class="icono">
                                    <?php the_sub_field('icono'); ?>
                                </div>
                                <div class="inner-item" style="background: url('<?php the_sub_field('imagen'); ?>');">
                                    <h5><?php echo $cat->name; ?></h5>
                                    <a href="<?php echo esc_url( home_url() ); ?>/category/<?php echo $cat->slug; ?>"></a>
                                </div>
                            <?php endwhile; endif; ?>
                            </div>
                        <?php $i++; endforeach; ?>
                        </div>
                    </div>
                <?php
                    $args = array(
                        'taxonomy' => 'category'
                    );

                    $cats1 = get_categories($args);

                    foreach($cats1 as $cat1):
                        $count1++;
                    endforeach;

                    if( $count1 > 3 ):
                ?>
                    <div class="carousel-item">
                        <div class="row">
                        <?php
                            $args = array(
                                'number' => 3,
                                'orderby' => 'name',
                                'offset' => 3
                            );

                            $cats = get_terms('category', $args);

                            $i = 3;

                            foreach($cats as $cat):
                        ?>
                            <div class="col-lg-4 overflow-hidden" data-aos="fade-up" data-aos-delay="<?php echo $i; ?>00" data-aos-duration="800" data-aos-once="true">
                            <?php if( have_rows('carrusel', $cat) ): while( have_rows('carrusel', $cat) ): the_row(); ?>
                                <div class="icono">
                                    <?php the_sub_field('icono'); ?>
                                </div>
                                <div class="inner-item" style="background: url('<?php the_sub_field('imagen'); ?>');">
                                    <h5><?php echo $cat->name; ?></h5>
                                    <a href="<?php echo esc_url( home_url() ); ?>/category/<?php echo $cat->slug; ?>"></a>
                                </div>
                            <?php endwhile; endif; ?>
                            </div>
                        <?php $i++; endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php
                    $args = array(
                        'taxonomy' => 'category'
                    );

                    $cats2 = get_categories($args);

                    foreach($cats2 as $cat2):
                        $count2++;
                    endforeach;

                    if( $count2 > 6 ):
                ?>
                    <div class="carousel-item">
                        <div class="row">
                        <?php
                            $args = array(
                                'number' => 3,
                                'orderby' => 'name',
                                'offset' => 6
                            );

                            $cats = get_terms('category', $args);

                            $i = 3;

                            foreach($cats as $cat):
                        ?>
                            <div class="col-lg-4 overflow-hidden" data-aos="fade-up" data-aos-delay="<?php echo $i; ?>00" data-aos-duration="800" data-aos-once="true">
                            <?php if( have_rows('carrusel', $cat) ): while( have_rows('carrusel', $cat) ): the_row(); ?>
                                <div class="icono">
                                    <?php the_sub_field('icono'); ?>
                                </div>
                                <div class="inner-item" style="background: url('<?php the_sub_field('imagen'); ?>');">
                                    <h5><?php echo $cat->name; ?></h5>
                                    <a href="<?php echo esc_url( home_url() ); ?>/category/<?php echo $cat->slug; ?>"></a>
                                </div>
                            <?php endwhile; endif; ?>
                            </div>
                        <?php $i++; endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
                </div>
                <!-- div class="carousel-indicators">
                    <button type="button" data-bs-target="#carruselTipo4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <?php
                    if( $count1 > 3 ):
                ?>
                    <button type="button" data-bs-target="#carruselTipo4" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <?php endif; ?>
                <?php
                    if( $count2 > 6 ):
                ?>
                    <button type="button" data-bs-target="#carruselTipo4" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <?php endif; ?>
                </div -->
            </div>
        </div>
    </div>
</div>