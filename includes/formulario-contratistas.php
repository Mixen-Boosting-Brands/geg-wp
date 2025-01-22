<form action="<?php echo esc_url( get_template_directory_uri() ); ?>/mailer-contratistas.php" method="POST" class="row g-3 needs-validation formulario-contratistas" id="ajax-contact-proveedores" novalidate>
    <h2 class="titulo-verde"><span>1.</span> <?php esc_html_e( 'Apartado legal', 'geg' ); ?></h2>
    <div class="col-md-6 form-floating">
        <input type="text" class="form-control shadow-none" id="cont-razon-social" name="cont-razon-social" placeholder="<?php esc_html_e( 'Razón social', 'geg' ); ?>*"
            pattern=".{5,50}" required>
        <label for="cont-razon-social" class="form-label"><?php esc_html_e( 'Razón social', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce tu razón social completa.', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <input type="text" class="form-control shadow-none" id="cont-nombre-comercial" name="cont-nombre-comercial" placeholder="<?php esc_html_e( 'Nombre comercial', 'geg' ); ?>*"
            pattern=".{5,50}" required>
        <label for="cont-nombre-comercial" class="form-label"><?php esc_html_e( 'Nombre comercial', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce tu nombre comercial completo.', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <input type="text" class="form-control shadow-none" id="cont-ubicacion" name="cont-ubicacion" placeholder="<?php esc_html_e( 'Ubicación', 'geg' ); ?>*"
            pattern=".{5,50}" required>
        <label for="cont-ubicacion" class="form-label"><?php esc_html_e( 'Ubicación', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce tu ubicación actual.', 'geg' ); ?>
        </div>
    </div>
    <h2 class="titulo-verde"><span>2.</span> <?php esc_html_e( 'Especialización', 'geg' ); ?></h2>
    <div class="col form-floating my-auto">
        <input type="text" class="form-control shadow-none" id="cont-especialidad" name="cont-especialidad" placeholder="<?php esc_html_e( 'Especialidad de la empresa', 'geg' ); ?>*"
            pattern=".{5,50}" required>
        <label for="cont-especialidad" class="form-label"><?php esc_html_e( 'Especialidad de la empresa', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce la especialidad de la empresa.', 'geg' ); ?>
        </div>
    </div>
    <h2 class="titulo-verde"><span>3.</span> <?php esc_html_e( 'Financiero', 'geg' ); ?></h2>
    <div class="col-md-6 form-floating">
        <input type="text" class="form-control shadow-none" id="cont-capital-contable" name="cont-capital-contable" placeholder="<?php esc_html_e( 'Capital contable', 'geg' ); ?>*"
            pattern=".{5,50}" required>
        <label for="cont-capital-contable" class="form-label"><?php esc_html_e( 'Capital contable', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce el capital contable de la empresa.', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <input type="text" class="form-control shadow-none" id="cont-afianzadora" name="cont-afianzadora" placeholder="<?php esc_html_e( 'Afianzadora', 'geg' ); ?>*"
            pattern=".{3,50}" required>
        <label for="cont-afianzadora" class="form-label"><?php esc_html_e( 'Afianzadora', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce la afianzadora de la empresa.', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <input type="text" class="form-control shadow-none" id="cont-volumen" name="cont-volumen" placeholder="<?php esc_html_e( 'Volumen anual de ventas', 'geg' ); ?>*"
            pattern=".{1,50}" required>
        <label for="cont-volumen" class="form-label"><?php esc_html_e( 'Volumen anual de ventas', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce el volumen anual de ventas de la empresa.', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <select class="form-select" id="cont-tramitar-fianzas" name="cont-tramitar-fianzas" aria-label="<?php esc_html_e( '¿Puede tramitar fianzas?', 'geg' ); ?>" required>
            <option selected disabled value=""><?php esc_html_e( '¿Puede tramitar fianzas?', 'geg' ); ?></option>
            <option value="Si"><?php esc_html_e( 'Si', 'geg' ); ?></option>
            <option value="No"><?php esc_html_e( 'No', 'geg' ); ?></option>
        </select>
        <label for="cont-tramitar-fianzas"><?php esc_html_e( '¿Puede tramitar fianzas?', 'geg' ); ?></label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor selecciona una opción.', 'geg' ); ?>
        </div>
    </div>
    <h2 class="titulo-verde"><span>4.</span> <?php esc_html_e( 'Experiencia', 'geg' ); ?></h2>
    <div class="col-12 form-floating">
        <textarea class="form-control shadow-none" id="cont-proyectos-relevantes" name="cont-proyectos-relevantes" placeholder="<?php esc_html_e( 'Proyectos relevantes (últimos 3 años)', 'geg' ); ?>*" style="height: 100px;" required></textarea>
        <label for="cont-proyectos-relevantes"><?php esc_html_e( 'Proyectos relevantes (últimos 3 años)', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce los proyectos relevantes de la empresa de los últimos 3 años.', 'geg' ); ?>
        </div>
    </div>
    <h2 class="titulo-verde"><span>5.</span> <?php esc_html_e( 'Seguridad', 'geg' ); ?></h2>
    <div class="col-12 form-floating">
        <textarea class="form-control shadow-none" id="cont-seguridad-e-higiene" name="cont-seguridad-e-higiene" placeholder="<?php esc_html_e( '¿Cuenta con personal especializado en Seguridad e Higiene?', 'geg' ); ?>*" style="height: 100px;" required></textarea>
        <label for="cont-seguridad-e-higiene"><?php esc_html_e( '¿Cuenta con personal especializado en Seguridad e Higiene?', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce si cuentas con personal especializado en Seguridad e Higiene y todos los detalles al respecto.', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <input type="text" class="form-control shadow-none" id="cont-anos-de-experiencia" name="cont-anos-de-experiencia" placeholder="<?php esc_html_e( 'Años de experiencia', 'geg' ); ?>*"
            pattern=".{1,50}" required>
        <label for="cont-anos-de-experiencia" class="form-label"><?php esc_html_e( 'Años de experiencia', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce tus años de experiencia en este rubro.', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <input type="text" class="form-control shadow-none" id="cont-certificaciones" name="cont-certificaciones" placeholder="<?php esc_html_e( 'Certificaciones', 'geg' ); ?>*"
            pattern=".{3,50}" required>
        <label for="cont-certificaciones" class="form-label"><?php esc_html_e( 'Certificaciones', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce tus certificaciones.', 'geg' ); ?>
        </div>
    </div>
    <div class="col-12 form-floating">
        <textarea class="form-control shadow-none" id="cont-cursos-tomados" name="cont-cursos-tomados" placeholder="<?php esc_html_e( 'Cursos tomados', 'geg' ); ?>*" style="height: 100px;" required></textarea>
        <label for="cont-cursos-tomados"><?php esc_html_e( 'Cursos tomados', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce tus cursos tomados.', 'geg' ); ?>
        </div>
    </div>
    <h2 class="titulo-verde"><span>6.</span> <?php esc_html_e( 'Calidad', 'geg' ); ?></h2>
    <div class="col-12 form-floating">
        <textarea class="form-control shadow-none" id="cont-garantia" name="cont-garantia" placeholder="<?php esc_html_e( '¿Cómo garantiza su empresa la calidad de sus productos o equipos que suministra?', 'geg' ); ?>*" style="height: 100px;" required></textarea>
        <label for="cont-garantia"><?php esc_html_e( '¿Cómo garantiza su empresa la calidad de sus productos o equipos que suministra?', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce cómo garantiza tu empresa la calidad de sus productos o equipos que suministra.', 'geg' ); ?>
        </div>
    </div>
    <div class="col-12 form-floating">
        <textarea class="form-control shadow-none" id="cont-politicas-garantia" name="cont-politicas-garantia" placeholder="<?php esc_html_e( 'Describe sus políticas de garantía', 'geg' ); ?>*" style="height: 100px;" required></textarea>
        <label for="cont-politicas-garantia"><?php esc_html_e( 'Describa sus políticas de garantía', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce las políticas de garantía de tu empresa.', 'geg' ); ?>
        </div>
    </div>
    <h2 class="titulo-verde"><span>7.</span> <?php esc_html_e( 'Contacto', 'geg' ); ?></h2>
    <h4><?php esc_html_e( 'Administrativo', 'geg' ); ?></h4>
    <div class="col-md-6 form-floating">
        <input type="text" class="form-control shadow-none" id="cont-nombre-administrativo" name="cont-nombre-administrativo" placeholder="<?php esc_html_e( 'Nombre completo', 'geg' ); ?>*"
            pattern=".{5,50}" required>
        <label for="cont-nombre-administrativo" class="form-label"><?php esc_html_e( 'Nombre completo', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce tu nombre completo.', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <input type="tel" class="form-control shadow-none" id="cont-telefono-administrativo" name="cont-telefono-administrativo" placeholder="<?php esc_html_e( 'Teléfono', 'geg' ); ?>*"
            pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
        <label for="cont-telefono-administrativo" class="form-label"><?php esc_html_e( 'Teléfono', 'geg' ); ?></label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor escribe un número de teléfono válido (Ej: 6561234567).', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <input type="email" class="form-control shadow-none" id="cont-correo-administrativo" name="cont-correo-administrativo" placeholder="<?php esc_html_e( 'Correo electrónico', 'geg' ); ?>*"
            required>
        <label for="cont-correo-administrativo" class="form-label"><?php esc_html_e( 'Correo electrónico', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce un correo electrónico válido.', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <input type="tel" class="form-control shadow-none" id="cont-telefono-celular-administrativo" name="cont-telefono-celular-administrativo" placeholder="<?php esc_html_e( 'Teléfono celular', 'geg' ); ?>*"
            pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
        <label for="cont-telefono-celular-administrativo" class="form-label"><?php esc_html_e( 'Teléfono celular', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor escribe un número de teléfono válido (Ej: 6561234567).', 'geg' ); ?>
        </div>
    </div>
    <h4><?php esc_html_e( 'Ventas', 'geg' ); ?></h4>
    <div class="col-md-6 form-floating">
        <input type="text" class="form-control shadow-none" id="cont-nombre-ventas" name="cont-nombre-ventas" placeholder="<?php esc_html_e( 'Nombre completo', 'geg' ); ?>*"
            pattern=".{5,50}" required>
        <label for="cont-nombre-ventas" class="form-label"><?php esc_html_e( 'Nombre completo', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce tu nombre completo.', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <input type="tel" class="form-control shadow-none" id="cont-telefono-ventas" name="cont-telefono-ventas" placeholder="<?php esc_html_e( 'Teléfono', 'geg' ); ?>*"
            pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
        <label for="cont-telefono-ventas" class="form-label"><?php esc_html_e( 'Teléfono', 'geg' ); ?></label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor escribe un número de teléfono válido (Ej: 6561234567).', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <input type="email" class="form-control shadow-none" id="cont-correo-ventas" name="cont-correo-ventas" placeholder="<?php esc_html_e( 'Correo electrónico', 'geg' ); ?>*"
            required>
        <label for="cont-correo-ventas" class="form-label"><?php esc_html_e( 'Correo electrónico', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce un correo electrónico válido.', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <input type="tel" class="form-control shadow-none" id="cont-telefono-celular-ventas" name="cont-telefono-celular-ventas" placeholder="<?php esc_html_e( 'Teléfono celular', 'geg' ); ?>*"
            pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
        <label for="cont-telefono-celular-ventas" class="form-label"><?php esc_html_e( 'Teléfono celular', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor escribe un número de teléfono válido (Ej: 6561234567).', 'geg' ); ?>
        </div>
    </div>
    <h2 class="titulo-verde mb-3"><span>8.</span> <?php esc_html_e( 'Carta de presentación', 'geg' ); ?></h2>
    <div class="col-md-6 my-auto">
        <label for="cont-userfile" class="form-label btn btn-primary">
            <i class="fas fa-file-pdf"></i> <?php esc_html_e( 'Elegir archivo', 'geg' ); ?>*
        </label>
    </div>
    <div class="col-md-6 my-auto">
        <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
        <input type="file" class="form-control form-control-sm mb-4" id="cont-userfile" name="cont-userfile[]" multiple="multiple" aria-describedby="fileUploadBlock-contratistas" required>
        <div id="fileUploadBlock-contratistas" class="form-text mb-5">
            <?php esc_html_e( 'Tamaño máximo de archivo: 10 MB', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 my-auto">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="cont-privacidad" required>
            <label class="form-check-label" for="cont-privacidad">
            <?php esc_html_e( 'Acepto el', 'geg' ); ?> <a href="<?php echo get_page_link('3'); ?>"><?php esc_html_e( 'Aviso de Privacidad', 'geg' ); ?></a>
            </label>
            <div class="invalid-feedback">
                <?php esc_html_e( 'Debes de aceptar nuestro aviso de privacidad para poder enviar el formulario.', 'geg' ); ?>
            </div>
        </div>
    </div>
    <div class="col-md-6 my-auto text-end">
        <button type="submit" class="btn btn-primary btn-block"><?php esc_html_e( 'Enviar', 'geg' ); ?></button>
        <div id="cont-hold-on-a-sec">
            <i id="cont-contact-spinner" class="fas fa-spinner fa-spin"></i> <?php esc_html_e( 'Espera un momento por favor...', 'geg' ); ?>
        </div>
    </div>
</form>
<!-- Aquí se inyecta feedback a usuario vía Ajax -->
<div class="mt-4" id="cont-form-messages"></div>
<!-- /Aquí se inyecta feedback a usuario vía Ajax -->