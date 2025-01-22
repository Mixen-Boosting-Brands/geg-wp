<div class="row mt-4" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
    <div class="stateSelection d-block d-lg-none">
       <div class="col">
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" onChange="window.location.href=this.value">
                <option selected><?php esc_html_e( 'Selecciona un Estado', 'geg' ); ?></option>
            <?php
                $args = array(
                    'orderby' => 'name'
                );

                $cats = get_terms('estado', $args);

                foreach($cats as $cat):
            ?>
                <option value="<?php echo get_category_link( $cat->term_id ) ?>"><?php echo $cat->name; ?></option>
            <?php endforeach; ?> 
            </select>
       </div>
    </div>
    <div class="carrusel-tipo-2 d-none d-lg-block">
        <div class="col-10 offset-1">
            <div id="carruselTipo2" class="carousel slide" data-bs-ride="carousel" data-bs-ride="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                        <?php
                            $args = array(
                                'number' => 3,
                                'orderby' => 'name'
                            );

                            $cats = get_terms('estado', $args);

                            foreach($cats as $cat):
                        ?>
                            <div class="col-lg-4 mb-4 mb-lg-0">
                                <div class="inner-item" style="background: url('<?php if( get_field('imagen_destacada', $cat) ): ?><?php the_field('imagen_destacada', $cat); ?><?php endif; ?>;">
                                    <div class="overlay"></div>
                                    <div class="caption">
                                        <h3 class="titulo"><?php echo $cat->name; ?></h3>
                                    </div>
                                    <a href="<?php echo get_category_link( $cat->term_id ) ?>"></a>
                                </div>
                            </div>
                        <?php endforeach; ?> 
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                        <?php
                            $args = array(
                                'number' => 3,
                                'orderby' => 'name',
                                'offset' => 3
                            );

                            $cats = get_terms('estado', $args);

                            foreach($cats as $cat):
                        ?>
                            <div class="col-lg-4 mb-4 mb-lg-0">
                                <div class="inner-item" style="background: url('<?php if( get_field('imagen_destacada', $cat) ): ?><?php the_field('imagen_destacada', $cat); ?><?php endif; ?>;">
                                    <div class="overlay"></div>
                                    <div class="caption">
                                        <h3 class="titulo"><?php echo $cat->name; ?></h3>
                                    </div>
                                    <a href="<?php echo get_category_link( $cat->term_id ) ?>"></a>
                                </div>
                            </div>
                        <?php endforeach; ?> 
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                        <?php
                            $args = array(
                                'number' => 3,
                                'orderby' => 'name',
                                'offset' => 6
                            );

                            $cats = get_terms('estado', $args);

                            foreach($cats as $cat):
                        ?>
                            <div class="col-lg-4 mb-4 mb-lg-0">
                                <div class="inner-item" style="background: url('<?php if( get_field('imagen_destacada', $cat) ): ?><?php the_field('imagen_destacada', $cat); ?><?php endif; ?>;">
                                    <div class="overlay"></div>
                                    <div class="caption">
                                        <h3 class="titulo"><?php echo $cat->name; ?></h3>
                                    </div>
                                    <a href="<?php echo get_category_link( $cat->term_id ) ?>"></a>
                                </div>
                            </div>
                        <?php endforeach; ?> 
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                        <?php
                            $args = array(
                                'number' => 3,
                                'orderby' => 'name',
                                'offset' => 9
                            );

                            $cats = get_terms('estado', $args);

                            foreach($cats as $cat):
                        ?>
                            <div class="col-lg-4 mb-4 mb-lg-0">
                                <div class="inner-item" style="background: url('<?php if( get_field('imagen_destacada', $cat) ): ?><?php the_field('imagen_destacada', $cat); ?><?php endif; ?>;">
                                    <div class="overlay"></div>
                                    <div class="caption">
                                        <h3 class="titulo"><?php echo $cat->name; ?></h3>
                                    </div>
                                    <a href="<?php echo get_category_link( $cat->term_id ) ?>"></a>
                                </div>
                            </div>
                        <?php endforeach; ?> 
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carruselTipo2" data-bs-slide="prev">
                    <i class="fa-solid fa-circle-chevron-left" aria-hidden="true"></i>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carruselTipo2" data-bs-slide="next">
                    <i class="fa-solid fa-circle-chevron-right" aria-hidden="true"></i>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>