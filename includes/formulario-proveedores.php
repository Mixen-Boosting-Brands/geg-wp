<form action="<?php echo esc_url( get_template_directory_uri() ); ?>/mailer-proveedores.php" method="POST" class="row g-3 needs-validation formulario-proveedores" id="ajax-contact-proveedores" novalidate>
    <h2 class="titulo-verde"><span>1.</span> <?php esc_html_e( 'Apartado legal', 'geg' ); ?></h2>
    <div class="col-md-6 form-floating">
        <input type="text" class="form-control shadow-none" id="razon-social" name="razon-social" placeholder="<?php esc_html_e( 'Razón social', 'geg' ); ?>*"
            pattern=".{5,50}" required>
        <label for="razon-social" class="form-label"><?php esc_html_e( 'Razón social', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce tu razón social completa.', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <input type="text" class="form-control shadow-none" id="nombre-comercial" name="nombre-comercial" placeholder="<?php esc_html_e( 'Nombre comercial', 'geg' ); ?>*"
            pattern=".{5,50}" required>
        <label for="nombre-comercial" class="form-label"><?php esc_html_e( 'Nombre comercial', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce tu nombre comercial completo.', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <input type="text" class="form-control shadow-none" id="ubicacion" name="ubicacion" placeholder="<?php esc_html_e( 'Ubicación', 'geg' ); ?>*"
            pattern=".{5,50}" required>
        <label for="ubicacion" class="form-label"><?php esc_html_e( 'Ubicación', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce tu ubicación actual.', 'geg' ); ?>
        </div>
    </div>
    <h2 class="titulo-verde"><span>2.</span> <?php esc_html_e( 'Especialización', 'geg' ); ?></h2>
    <div class="col-md-6 my-auto">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="especializacion-opciones" id="fabricante" value="Fabricante" checked>
            <label class="form-check-label" for="fabricante"><?php esc_html_e( 'Fabricante', 'geg' ); ?></label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="especializacion-opciones" id="distribuidor" value="Distribuidor">
            <label class="form-check-label" for="distribuidor"><?php esc_html_e( 'Distribuidor', 'geg' ); ?></label>
        </div>
    </div>
    <div class="col-md-6 form-floating my-auto">
        <input type="text" class="form-control shadow-none" id="especialidad" name="especialidad" placeholder="<?php esc_html_e( 'Especialidad de la empresa', 'geg' ); ?>*"
            pattern=".{5,50}" required>
        <label for="especialidad" class="form-label"><?php esc_html_e( 'Especialidad de la empresa', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce la especialidad de la empresa.', 'geg' ); ?>
        </div>
    </div>
    <h2 class="titulo-verde"><span>3.</span> <?php esc_html_e( 'Financiero', 'geg' ); ?></h2>
    <div class="col-md-6 form-floating">
        <input type="text" class="form-control shadow-none" id="capital-contable" name="capital-contable" placeholder="<?php esc_html_e( 'Capital contable', 'geg' ); ?>*"
            pattern=".{5,50}" required>
        <label for="capital-contable" class="form-label"><?php esc_html_e( 'Capital contable', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce el capital contable de la empresa.', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <input type="text" class="form-control shadow-none" id="afianzadora" name="afianzadora" placeholder="<?php esc_html_e( 'Afianzadora', 'geg' ); ?>*"
            pattern=".{3,50}" required>
        <label for="afianzadora" class="form-label"><?php esc_html_e( 'Afianzadora', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce la afianzadora de la empresa.', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <input type="text" class="form-control shadow-none" id="volumen" name="volumen" placeholder="<?php esc_html_e( 'Volumen anual de ventas', 'geg' ); ?>*"
            pattern=".{1,50}" required>
        <label for="volumen" class="form-label"><?php esc_html_e( 'Volumen anual de ventas', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce el volumen anual de ventas de la empresa.', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <select class="form-select" id="tramitar-fianzas" name="tramitar-fianzas" aria-label="<?php esc_html_e( '¿Puede tramitar fianzas?', 'geg' ); ?>" required>
            <option selected disabled value=""><?php esc_html_e( '¿Puede tramitar fianzas?', 'geg' ); ?></option>
            <option value="Si"><?php esc_html_e( 'Si', 'geg' ); ?></option>
            <option value="No"><?php esc_html_e( 'No', 'geg' ); ?></option>
        </select>
        <label for="tramitar-fianzas"><?php esc_html_e( '¿Puede tramitar fianzas?', 'geg' ); ?></label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor selecciona una opción.', 'geg' ); ?>
        </div>
    </div>
    <h2 class="titulo-verde"><span>4.</span> <?php esc_html_e( 'Experiencia', 'geg' ); ?></h2>
    <div class="col-12 form-floating">
        <textarea class="form-control shadow-none" id="proyectos-relevantes" name="proyectos-relevantes" placeholder="<?php esc_html_e( 'Proyectos relevantes (últimos 3 años)', 'geg' ); ?>*" style="height: 100px;" required></textarea>
        <label for="proyectos-relevantes"><?php esc_html_e( 'Proyectos relevantes (últimos 3 años)', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce los proyectos relevantes de la empresa de los últimos 3 años.', 'geg' ); ?>
        </div>
    </div>
    <h2 class="titulo-verde"><span>5.</span> <?php esc_html_e( 'Calidad', 'geg' ); ?></h2>
    <div class="col-12 form-floating">
        <textarea class="form-control shadow-none" id="garantia" name="garantia" placeholder="<?php esc_html_e( '¿Cómo garantiza su empresa la calidad de sus productos o equipos que suministra?', 'geg' ); ?>*" style="height: 100px;" required></textarea>
        <label for="garantia"><?php esc_html_e( '¿Cómo garantiza su empresa la calidad de sus productos o equipos que suministra?', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce cómo garantiza tu empresa la calidad de sus productos o equipos que suministra.', 'geg' ); ?>
        </div>
    </div>
    <div class="col-12 form-floating">
        <textarea class="form-control shadow-none" id="politicas-garantia" name="politicas-garantia" placeholder="<?php esc_html_e( 'Describa sus políticas de garantía', 'geg' ); ?>*" style="height: 100px;" required></textarea>
        <label for="politicas-garantia"><?php esc_html_e( 'Describa sus políticas de garantía', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce las políticas de garantía de tu empresa.', 'geg' ); ?>
        </div>
    </div>
    <h2 class="titulo-verde"><span>6.</span> <?php esc_html_e( 'Contacto', 'geg' ); ?></h2>
    <h4><?php esc_html_e( 'Administrativo', 'geg' ); ?></h4>
    <div class="col-md-6 form-floating">
        <input type="text" class="form-control shadow-none" id="nombre-administrativo" name="nombre-administrativo" placeholder="<?php esc_html_e( 'Nombre completo', 'geg' ); ?>*"
            pattern=".{5,50}" required>
        <label for="nombre-administrativo" class="form-label"><?php esc_html_e( 'Nombre completo', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce tu nombre completo.', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <input type="tel" class="form-control shadow-none" id="telefono-administrativo" name="telefono-administrativo" placeholder="<?php esc_html_e( 'Teléfono', 'geg' ); ?>*"
            pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
        <label for="telefono-administrativo" class="form-label"><?php esc_html_e( 'Teléfono', 'geg' ); ?></label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor escribe un número de teléfono válido (Ej: 6561234567).', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <input type="email" class="form-control shadow-none" id="correo-administrativo" name="correo-administrativo" placeholder="<?php esc_html_e( 'Correo electrónico', 'geg' ); ?>*"
            required>
        <label for="correo-administrativo" class="form-label"><?php esc_html_e( 'Correo electrónico', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce un correo electrónico válido.', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <input type="tel" class="form-control shadow-none" id="telefono-celular-administrativo" name="telefono-celular-administrativo" placeholder="<?php esc_html_e( 'Teléfono celular', 'geg' ); ?>*"
            pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
        <label for="telefono-celular-administrativo" class="form-label"><?php esc_html_e( 'Teléfono celular', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor escribe un número de teléfono válido (Ej: 6561234567).', 'geg' ); ?>
        </div>
    </div>
    <h4><?php esc_html_e( 'Ventas', 'geg' ); ?></h4>
    <div class="col-md-6 form-floating">
        <input type="text" class="form-control shadow-none" id="nombre-ventas" name="nombre-ventas" placeholder="<?php esc_html_e( 'Nombre completo', 'geg' ); ?>*"
            pattern=".{5,50}" required>
        <label for="nombre-ventas" class="form-label"><?php esc_html_e( 'Nombre completo', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce tu nombre completo.', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <input type="tel" class="form-control shadow-none" id="telefono-ventas" name="telefono-ventas" placeholder="<?php esc_html_e( 'Teléfono', 'geg' ); ?>*"
            pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
        <label for="telefono-ventas" class="form-label"><?php esc_html_e( 'Teléfono', 'geg' ); ?></label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor escribe un número de teléfono válido (Ej: 6561234567).', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <input type="email" class="form-control shadow-none" id="correo-ventas" name="correo-ventas" placeholder="<?php esc_html_e( 'Correo electrónico', 'geg' ); ?>*"
            required>
        <label for="correo-ventas" class="form-label"><?php esc_html_e( 'Correo electrónico', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor introduce un correo electrónico válido.', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 form-floating">
        <input type="tel" class="form-control shadow-none" id="telefono-celular-ventas" name="telefono-celular-ventas" placeholder="<?php esc_html_e( 'Teléfono celular', 'geg' ); ?>*"
            pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
        <label for="telefono-celular-ventas" class="form-label"><?php esc_html_e( 'Teléfono celular', 'geg' ); ?>*</label>
        <div class="valid-feedback">
            <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
        </div>
        <div class="invalid-feedback">
            <?php esc_html_e( 'Por favor escribe un número de teléfono válido (Ej: 6561234567).', 'geg' ); ?>
        </div>
    </div>
    <h2 class="titulo-verde mb-3"><span>7.</span> <?php esc_html_e( 'Carta de presentación', 'geg' ); ?></h2>
    <div class="col-md-12 my-auto">
        <label for="userfile-1" class="form-label btn btn-primary">
            <i class="fas fa-file-pdf"></i> <?php esc_html_e( 'Comprobante de domicilio', 'geg' ); ?>*
        </label>
        <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
        <input type="file" class="form-control form-control-sm mb-4" id="userfile-1" name="userfile-1[]" multiple="multiple" aria-describedby="fileUploadBlock-proveedores-comprobante" required>
        <div id="fileUploadBlock-proveedores-comprobante" class="form-text mb-5">
            <?php esc_html_e( 'Tamaño máximo de archivo: 10 MB', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-12 my-auto">
        <label for="userfile-2" class="form-label btn btn-primary">
            <i class="fas fa-file-pdf"></i> <?php esc_html_e( 'RFC - Constancia', 'geg' ); ?>*
        </label>
        <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
        <input type="file" class="form-control form-control-sm mb-4" id="userfile-2" name="userfile-2[]" multiple="multiple" aria-describedby="fileUploadBlock-proveedores-rfc" required>
        <div id="fileUploadBlock-proveedores-rfc" class="form-text mb-5">
            <?php esc_html_e( 'Tamaño máximo de archivo: 10 MB', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-12 my-auto">
        <label for="userfile-3" class="form-label btn btn-primary">
            <i class="fas fa-file-pdf"></i> <?php esc_html_e( 'Acta constitutiva', 'geg' ); ?>*
        </label>
        <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
        <input type="file" class="form-control form-control-sm mb-4" id="userfile-3" name="userfile-3[]" multiple="multiple" aria-describedby="fileUploadBlock-proveedores-acta" required>
        <div id="fileUploadBlock-proveedores-acta" class="form-text mb-5">
            <?php esc_html_e( 'Tamaño máximo de archivo: 10 MB', 'geg' ); ?>
        </div>
    </div>
    <div class="col-md-6 my-auto">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="privacidad" required>
            <label class="form-check-label" for="privacidad">
                <?php esc_html_e( 'Acepto el', 'geg' ); ?> <a href="<?php echo get_page_link('3'); ?>"><?php esc_html_e( 'Aviso de Privacidad', 'geg' ); ?></a>
            </label>
            <div class="invalid-feedback">
                <?php esc_html_e( 'Debes de aceptar nuestro aviso de privacidad para poder enviar el formulario.', 'geg' ); ?>
            </div>
        </div>
    </div>
    <div class="col-md-6 my-auto text-end">
        <button type="submit" class="btn btn-primary btn-block"><?php esc_html_e( 'Enviar', 'geg' ); ?></button>
        <div id="hold-on-a-sec">
            <i id="contact-spinner" class="fas fa-spinner fa-spin"></i> <?php esc_html_e( 'Espera un momento por favor...', 'geg' ); ?>
        </div>
    </div>
</form>
<!-- Aquí se inyecta feedback a usuario vía Ajax -->
<div class="mt-4" id="form-messages"></div>
<!-- /Aquí se inyecta feedback a usuario vía Ajax -->