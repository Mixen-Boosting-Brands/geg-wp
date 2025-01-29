<?php
/* Template Name: Contáctanos */
get_header();
$currentlang = get_bloginfo("language");
?>

	<!-- Incluir header interna -->
    <?php include get_template_directory() . "/includes/header-interna.php"; ?>
    <!-- /Incluir header interna -->

    <section class="py-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 my-auto" data-aos="fade-right" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
                    <h3><?php esc_html_e("Contáctanos", "geg"); ?></h3>
                <?php if (have_rows("contactanos")):
                    while (have_rows("contactanos")):
                        the_row(); ?>
                    <p class="mb-5" data-aos="fade-right" data-aos-delay="600" data-aos-duration="800" data-aos-once="true"><?php the_sub_field(
                        "texto"
                    ); ?></p>
                <?php
                    endwhile;
                endif; ?>
                    <h3 class="titulo-verde mt-5 mb-4" data-aos="fade-right" data-aos-delay="900" data-aos-duration="800" data-aos-once="true"><?php esc_html_e(
                        "Contacto Corporativo",
                        "geg"
                    ); ?></h3>
                <?php if (have_rows("datos_de_contacto", "option")):
                    while (have_rows("datos_de_contacto", "option")):
                        the_row(); ?>
                    <h4 data-aos="fade-right" data-aos-delay="1200" data-aos-duration="800" data-aos-once="true"><?php esc_html_e(
                        "Dirección",
                        "geg"
                    ); ?></h4>
                    <address data-aos="fade-right" data-aos-delay="1500" data-aos-duration="800" data-aos-once="true">
                        <p>
                            <?php the_sub_field("direccion"); ?>
                        </p>
                    </address>
                    <h4 data-aos="fade-right" data-aos-delay="1800" data-aos-duration="800" data-aos-once="true"><?php esc_html_e(
                        "Teléfonos",
                        "geg"
                    ); ?></h4>
                    <div class="mb-4" data-aos="fade-right" data-aos-delay="2100" data-aos-duration="800" data-aos-once="true">
                        <?php if (have_rows("telefono_1")):
                            while (have_rows("telefono_1")):
                                the_row(); ?><a href="tel:+52<?php the_sub_field(
    "telefono_sin_formato"
); ?>"><?php the_sub_field("telefono_con_formato"); ?></a><?php
                            endwhile;
                        endif; ?> <?php esc_html_e("y", "geg"); ?> <?php if (
     have_rows("telefono_2")
 ):
     while (have_rows("telefono_2")):
         the_row(); ?><a href="tel:+52<?php the_sub_field(
    "telefono_sin_formato"
); ?>"><?php the_sub_field("telefono_con_formato"); ?></a><?php
     endwhile;
 endif; ?>
                    </div>

                <?php if ($currentlang == "en-US"): ?>
                    <a href="<?php echo get_page_link(
                        "10882"
                    ); ?>" class="btn btn-primary btn-block" data-aos="fade-right" data-aos-delay="2200" data-aos-duration="800" data-aos-once="true"><?php esc_html_e(
    "Citas",
    "geg"
); ?></a>
                <?php else: ?>
                    <a href="<?php echo get_page_link(
                        "10875"
                    ); ?>" class="btn btn-primary btn-block" data-aos="fade-right" data-aos-delay="2200" data-aos-duration="800" data-aos-once="true"><?php esc_html_e(
    "Citas",
    "geg"
); ?></a>
                <?php endif; ?>

                <?php
                    endwhile;
                endif; ?>
                    <!-- div // 9/09/2024 - Se agrupó información de Contacto Comercial en este div para ocultarlo por solicitud del cliente>
                        <h3 class="titulo-verde mt-5 mb-4" data-aos="fade-right" data-aos-delay="2400" data-aos-duration="800" data-aos-once="true"><?php esc_html_e(
                            "Contacto comercial",
                            "geg"
                        ); ?></h3>
                        <p data-aos="fade-right" data-aos-delay="2700" data-aos-duration="800" data-aos-once="true">
                            <?php esc_html_e(
                                "Si te interesa cotizar y obtener propuestas de valor, contáctanos.",
                                "geg"
                            ); ?>
                        </p>
                        <p data-aos="fade-right" data-aos-delay="2700" data-aos-duration="800" data-aos-once="true">
                            <?php esc_html_e(
                                "¡Nos encantaría conocer tus proyectos industriales y comerciales!",
                                "geg"
                            ); ?>
                        </p>
                    <?php if ($currentlang == "en-US"): ?>
                        <a href="mailto:vvjimenez@geg.me">
                            <img src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/contacto/thumb-valeria-jimenez-en.png" class="img-fluid mb-3" style="max-width: 400px;" alt="Valeria Jiménez" data-aos="fade-right" data-aos-delay="2700" data-aos-duration="800" data-aos-once="true">
                        </a>
                    <?php else: ?>
                        <a href="mailto:vvjimenez@geg.me">
                            <img src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/contacto/thumb-valeria-jimenez-es.png" class="img-fluid mb-3" style="max-width: 400px;" alt="Valeria Jiménez" data-aos="fade-right" data-aos-delay="2700" data-aos-duration="800" data-aos-once="true">
                        </a>
                    <?php endif; ?>
                        <h5 data-aos="fade-right" data-aos-delay="2700" data-aos-duration="800" data-aos-once="true">Valeria Jiménez</h5>
                        <p data-aos="fade-right" data-aos-delay="2700" data-aos-duration="800" data-aos-once="true"><?php esc_html_e(
                            "Ejecutiva de mercadotecnia y prospección",
                            "geg"
                        ); ?></p>
                        <h4 data-aos="fade-right" data-aos-delay="2700" data-aos-duration="800" data-aos-once="true"><?php esc_html_e(
                            "Correo",
                            "geg"
                        ); ?></h4>
                        <p data-aos="fade-right" data-aos-delay="3000" data-aos-duration="800" data-aos-once="true">
                            <a href="mailto:vvjimenez@geg.me">vvjimenez@geg.me</a>
                        </p>
                        <h4 data-aos="fade-right" data-aos-delay="2700" data-aos-duration="800" data-aos-once="true"><?php esc_html_e(
                            "Móvil",
                            "geg"
                        ); ?></h4>
                        <p data-aos="fade-right" data-aos-delay="3000" data-aos-duration="800" data-aos-once="true">
                            <a href="tel:+526567962204">(656) 796 2204</a>
                        </p>
                    </div -->
                </div>
                <div class="col-md-6 my-auto" data-aos="fade-left" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
                    <div class="row">
                        <!-- Aquí se inyecta feedback a usuario vía Ajax -->
                        <div id="form-messages"></div>
                        <!-- /Aquí se inyecta feedback a usuario vía Ajax -->
                        <form action="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/mailer-contacto.php" method="POST" class="row g-3 needs-validation formulario-contacto" id="ajax-contact-contacto" novalidate>
                            <div class="col-md-12 form-floating">
                                <input type="text" class="form-control shadow-none" id="nombre" name="nombre" placeholder="<?php esc_html_e(
                                    "Nombre completo",
                                    "geg"
                                ); ?>*"
                                    pattern=".{5,50}" required>
                                <label for="nombre" class="form-label"><?php esc_html_e(
                                    "Nombre completo",
                                    "geg"
                                ); ?>*</label>
                                <div class="valid-feedback">
                                    <?php esc_html_e("¡Se ve bien!", "geg"); ?>
                                </div>
                                <div class="invalid-feedback">
                                    <?php esc_html_e(
                                        "Por favor introduce tu nombre completo.",
                                        "geg"
                                    ); ?>
                                </div>
                            </div>
                            <div class="col-md-12 form-floating">
                                <input type="text" class="form-control shadow-none" id="empresa" name="empresa" placeholder="<?php esc_html_e(
                                    "Empresa",
                                    "geg"
                                ); ?>*"
                                    pattern=".{5,50}" required>
                                <label for="nombre" class="form-label"><?php esc_html_e(
                                    "Empresa",
                                    "geg"
                                ); ?>*</label>
                                <div class="valid-feedback">
                                    <?php esc_html_e("¡Se ve bien!", "geg"); ?>
                                </div>
                                <div class="invalid-feedback">
                                    <?php esc_html_e(
                                        "Por favor introduce el nombre de tu empresa.",
                                        "geg"
                                    ); ?>
                                </div>
                            </div>
                            <div class="col-md-4 form-floating">
                                <input type="text" class="form-control shadow-none" id="ciudad" name="ciudad" placeholder="<?php esc_html_e(
                                    "Ciudad",
                                    "geg"
                                ); ?>*"
                                    pattern=".{5,50}" required>
                                <label for="nombre" class="form-label"><?php esc_html_e(
                                    "Ciudad",
                                    "geg"
                                ); ?>*</label>
                                <div class="valid-feedback">
                                    <?php esc_html_e("¡Se ve bien!", "geg"); ?>
                                </div>
                                <div class="invalid-feedback">
                                    <?php esc_html_e(
                                        "Por favor introduce tu ciudad.",
                                        "geg"
                                    ); ?>
                                </div>
                            </div>
                            <div class="col-md-4 form-floating">
                                <select class="form-select" id="estado" name="estado" aria-label="<?php esc_html_e(
                                    "Estado",
                                    "geg"
                                ); ?>*" required>
                                    <option selected disabled value=""><?php esc_html_e(
                                        "Estado",
                                        "geg"
                                    ); ?>*</option>
                                    <option value="Aguascalientes">Aguascalientes</option>
                                    <option value="Baja California">Baja California</option>
                                    <option value="Baja California Sur">Baja California Sur</option>
                                    <option value="Campeche">Campeche</option>
                                    <option value="Chiapas">Chiapas</option>
                                    <option value="Chihuahua">Chihuahua</option>
                                    <option value="CDMX">Ciudad de México</option>
                                    <option value="Coahuila">Coahuila</option>
                                    <option value="Colima">Colima</option>
                                    <option value="Durango">Durango</option>
                                    <option value="Estado de México">Estado de México</option>
                                    <option value="Guanajuato">Guanajuato</option>
                                    <option value="Guerrero">Guerrero</option>
                                    <option value="Hidalgo">Hidalgo</option>
                                    <option value="Jalisco">Jalisco</option>
                                    <option value="Michoacán">Michoacán</option>
                                    <option value="Morelos">Morelos</option>
                                    <option value="Nayarit">Nayarit</option>
                                    <option value="Nuevo León">Nuevo León</option>
                                    <option value="Oaxaca">Oaxaca</option>
                                    <option value="Puebla">Puebla</option>
                                    <option value="Querétaro">Querétaro</option>
                                    <option value="Quintana Roo">Quintana Roo</option>
                                    <option value="San Luis Potosí">San Luis Potosí</option>
                                    <option value="Sinaloa">Sinaloa</option>
                                    <option value="Sonora">Sonora</option>
                                    <option value="Tabasco">Tabasco</option>
                                    <option value="Tamaulipas">Tamaulipas</option>
                                    <option value="Tlaxcala">Tlaxcala</option>
                                    <option value="Veracruz">Veracruz</option>
                                    <option value="Yucatán">Yucatán</option>
                                    <option value="Zacatecas">Zacatecas</option>
                                    <option value="Otro"><?php esc_html_e(
                                        "Otro",
                                        "geg"
                                    ); ?></option>
                                </select>
                                <label for="estado"><?php esc_html_e(
                                    "Estado",
                                    "geg"
                                ); ?></label>
                                <div class="valid-feedback">
                                    <?php esc_html_e("¡Se ve bien!", "geg"); ?>
                                </div>
                                <div class="invalid-feedback">
                                    <?php esc_html_e(
                                        "Por favor selecciona tu Estado.",
                                        "geg"
                                    ); ?>
                                </div>
                            </div>
                            <div class="col-md-4 form-floating">
                                <select class="form-select" id="pais" name="pais" aria-label="<?php esc_html_e(
                                    "País",
                                    "geg"
                                ); ?>*" required>
                                    <option selected disabled value=""><?php esc_html_e(
                                        "País",
                                        "geg"
                                    ); ?>*</option>
                                <?php if ($currentlang == "en-US"): ?>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="North Macedonia">North Macedonia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-leste">Timor-leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                <?php else: ?>
                                    <option value="Afganistán" id="AF">Afganistán</option>
                                    <option value="Albania" id="AL">Albania</option>
                                    <option value="Alemania" id="DE">Alemania</option>
                                    <option value="Andorra" id="AD">Andorra</option>
                                    <option value="Angola" id="AO">Angola</option>
                                    <option value="Anguila" id="AI">Anguila</option>
                                    <option value="Antártida" id="AQ">Antártida</option>
                                    <option value="Antigua y Barbuda" id="AG">Antigua y Barbuda</option>
                                    <option value="Antillas holandesas" id="AN">Antillas holandesas</option>
                                    <option value="Arabia Saudí" id="SA">Arabia Saudí</option>
                                    <option value="Argelia" id="DZ">Argelia</option>
                                    <option value="Argentina" id="AR">Argentina</option>
                                    <option value="Armenia" id="AM">Armenia</option>
                                    <option value="Aruba" id="AW">Aruba</option>
                                    <option value="Australia" id="AU">Australia</option>
                                    <option value="Austria" id="AT">Austria</option>
                                    <option value="Azerbaiyán" id="AZ">Azerbaiyán</option>
                                    <option value="Bahamas" id="BS">Bahamas</option>
                                    <option value="Bahrein" id="BH">Bahrein</option>
                                    <option value="Bangladesh" id="BD">Bangladesh</option>
                                    <option value="Barbados" id="BB">Barbados</option>
                                    <option value="Bélgica" id="BE">Bélgica</option>
                                    <option value="Belice" id="BZ">Belice</option>
                                    <option value="Benín" id="BJ">Benín</option>
                                    <option value="Bermudas" id="BM">Bermudas</option>
                                    <option value="Bhután" id="BT">Bhután</option>
                                    <option value="Bielorrusia" id="BY">Bielorrusia</option>
                                    <option value="Birmania" id="MM">Birmania</option>
                                    <option value="Bolivia" id="BO">Bolivia</option>
                                    <option value="Bosnia y Herzegovina" id="BA">Bosnia y Herzegovina</option>
                                    <option value="Botsuana" id="BW">Botsuana</option>
                                    <option value="Brasil" id="BR">Brasil</option>
                                    <option value="Brunei" id="BN">Brunei</option>
                                    <option value="Bulgaria" id="BG">Bulgaria</option>
                                    <option value="Burkina Faso" id="BF">Burkina Faso</option>
                                    <option value="Burundi" id="BI">Burundi</option>
                                    <option value="Cabo Verde" id="CV">Cabo Verde</option>
                                    <option value="Camboya" id="KH">Camboya</option>
                                    <option value="Camerún" id="CM">Camerún</option>
                                    <option value="Canadá" id="CA">Canadá</option>
                                    <option value="Chad" id="TD">Chad</option>
                                    <option value="Chile" id="CL">Chile</option>
                                    <option value="China" id="CN">China</option>
                                    <option value="Chipre" id="CY">Chipre</option>
                                    <option value="Ciudad estado del Vaticano" id="VA">Ciudad estado del Vaticano</option>
                                    <option value="Colombia" id="CO">Colombia</option>
                                    <option value="Comores" id="KM">Comores</option>
                                    <option value="Congo" id="CG">Congo</option>
                                    <option value="Corea" id="KR">Corea</option>
                                    <option value="Corea del Norte" id="KP">Corea del Norte</option>
                                    <option value="Costa del Marfíl" id="CI">Costa del Marfíl</option>
                                    <option value="Costa Rica" id="CR">Costa Rica</option>
                                    <option value="Croacia" id="HR">Croacia</option>
                                    <option value="Cuba" id="CU">Cuba</option>
                                    <option value="Dinamarca" id="DK">Dinamarca</option>
                                    <option value="Djibouri" id="DJ">Djibouri</option>
                                    <option value="Dominica" id="DM">Dominica</option>
                                    <option value="Ecuador" id="EC">Ecuador</option>
                                    <option value="Egipto" id="EG">Egipto</option>
                                    <option value="El Salvador" id="SV">El Salvador</option>
                                    <option value="Emiratos Arabes Unidos" id="AE">Emiratos Arabes Unidos</option>
                                    <option value="Eritrea" id="ER">Eritrea</option>
                                    <option value="Eslovaquia" id="SK">Eslovaquia</option>
                                    <option value="Eslovenia" id="SI">Eslovenia</option>
                                    <option value="España" id="ES">España</option>
                                    <option value="Estados Unidos" id="US">Estados Unidos</option>
                                    <option value="Estonia" id="EE">Estonia</option>
                                    <option value="c" id="ET">Etiopía</option>
                                    <option value="Ex-República Yugoslava de Macedonia" id="MK">Ex-República Yugoslava de Macedonia</option>
                                    <option value="Filipinas" id="PH">Filipinas</option>
                                    <option value="Finlandia" id="FI">Finlandia</option>
                                    <option value="Francia" id="FR">Francia</option>
                                    <option value="Gabón" id="GA">Gabón</option>
                                    <option value="Gambia" id="GM">Gambia</option>
                                    <option value="Georgia" id="GE">Georgia</option>
                                    <option value="Georgia del Sur y las islas Sandwich del Sur" id="GS">Georgia del Sur y las islas Sandwich del Sur</option>
                                    <option value="Ghana" id="GH">Ghana</option>
                                    <option value="Gibraltar" id="GI">Gibraltar</option>
                                    <option value="Granada" id="GD">Granada</option>
                                    <option value="Grecia" id="GR">Grecia</option>
                                    <option value="Groenlandia" id="GL">Groenlandia</option>
                                    <option value="Guadalupe" id="GP">Guadalupe</option>
                                    <option value="Guam" id="GU">Guam</option>
                                    <option value="Guatemala" id="GT">Guatemala</option>
                                    <option value="Guayana" id="GY">Guayana</option>
                                    <option value="Guayana francesa" id="GF">Guayana francesa</option>
                                    <option value="Guinea" id="GN">Guinea</option>
                                    <option value="Guinea Ecuatorial" id="GQ">Guinea Ecuatorial</option>
                                    <option value="Guinea-Bissau" id="GW">Guinea-Bissau</option>
                                    <option value="Haití" id="HT">Haití</option>
                                    <option value="Holanda" id="NL">Holanda</option>
                                    <option value="Honduras" id="HN">Honduras</option>
                                    <option value="Hong Kong R. A. E" id="HK">Hong Kong R. A. E</option>
                                    <option value="Hungría" id="HU">Hungría</option>
                                    <option value="India" id="IN">India</option>
                                    <option value="Indonesia" id="ID">Indonesia</option>
                                    <option value="Irak" id="IQ">Irak</option>
                                    <option value="Irán" id="IR">Irán</option>
                                    <option value="Irlanda" id="IE">Irlanda</option>
                                    <option value="Isla Bouvet" id="BV">Isla Bouvet</option>
                                    <option value="Isla Christmas" id="CX">Isla Christmas</option>
                                    <option value="Isla Heard e Islas McDonald" id="HM">Isla Heard e Islas McDonald</option>
                                    <option value="Islandia" id="IS">Islandia</option>
                                    <option value="Islas Caimán" id="KY">Islas Caimán</option>
                                    <option value="Islas Cook" id="CK">Islas Cook</option>
                                    <option value="Islas de Cocos o Keeling" id="CC">Islas de Cocos o Keeling</option>
                                    <option value="Islas Faroe" id="FO">Islas Faroe</option>
                                    <option value="Islas Fiyi" id="FJ">Islas Fiyi</option>
                                    <option value="Islas Malvinas Islas Falkland" id="FK">Islas Malvinas Islas Falkland</option>
                                    <option value="Islas Marianas del norte" id="MP">Islas Marianas del norte</option>
                                    <option value="Islas Marshall" id="MH">Islas Marshall</option>
                                    <option value="Islas menores de Estados Unidos" id="UM">Islas menores de Estados Unidos</option>
                                    <option value="Islas Palau" id="PW">Islas Palau</option>
                                    <option value="Islas Salomón" d="SB">Islas Salomón</option>
                                    <option value="Islas Tokelau" id="TK">Islas Tokelau</option>
                                    <option value="Islas Turks y Caicos" id="TC">Islas Turks y Caicos</option>
                                    <option value="Islas Vírgenes EE.UU." id="VI">Islas Vírgenes EE.UU.</option>
                                    <option value="Islas Vírgenes Reino Unido" id="VG">Islas Vírgenes Reino Unido</option>
                                    <option value="Israel" id="IL">Israel</option>
                                    <option value="Italia" id="IT">Italia</option>
                                    <option value="Jamaica" id="JM">Jamaica</option>
                                    <option value="Japón" id="JP">Japón</option>
                                    <option value="Jordania" id="JO">Jordania</option>
                                    <option value="Kazajistán" id="KZ">Kazajistán</option>
                                    <option value="Kenia" id="KE">Kenia</option>
                                    <option value="Kirguizistán" id="KG">Kirguizistán</option>
                                    <option value="Kiribati" id="KI">Kiribati</option>
                                    <option value="Kuwait" id="KW">Kuwait</option>
                                    <option value="Laos" id="LA">Laos</option>
                                    <option value="Lesoto" id="LS">Lesoto</option>
                                    <option value="Letonia" id="LV">Letonia</option>
                                    <option value="Líbano" id="LB">Líbano</option>
                                    <option value="Liberia" id="LR">Liberia</option>
                                    <option value="Libia" id="LY">Libia</option>
                                    <option value="Liechtenstein" id="LI">Liechtenstein</option>
                                    <option value="Lituania" id="LT">Lituania</option>
                                    <option value="Luxemburgo" id="LU">Luxemburgo</option>
                                    <option value="Macao R. A. E" id="MO">Macao R. A. E</option>
                                    <option value="Madagascar" id="MG">Madagascar</option>
                                    <option value="Malasia" id="MY">Malasia</option>
                                    <option value="Malawi" id="MW">Malawi</option>
                                    <option value="Maldivas" id="MV">Maldivas</option>
                                    <option value="Malí" id="ML">Malí</option>
                                    <option value="Malta" id="MT">Malta</option>
                                    <option value="Marruecos" id="MA">Marruecos</option>
                                    <option value="Martinica" id="MQ">Martinica</option>
                                    <option value="Mauricio" id="MU">Mauricio</option>
                                    <option value="Mauritania" id="MR">Mauritania</option>
                                    <option value="Mayotte" id="YT">Mayotte</option>
                                    <option value="México" id="MX">México</option>
                                    <option value="Micronesia" id="FM">Micronesia</option>
                                    <option value="Moldavia" id="MD">Moldavia</option>
                                    <option value="Mónaco" id="MC">Mónaco</option>
                                    <option value="Mongolia" id="MN">Mongolia</option>
                                    <option value="Montserrat" id="MS">Montserrat</option>
                                    <option value="Mozambique" id="MZ">Mozambique</option>
                                    <option value="Namibia" id="NA">Namibia</option>
                                    <option value="Nauru" id="NR">Nauru</option>
                                    <option value="Nepal" id="NP">Nepal</option>
                                    <option value="Nicaragua" id="NI">Nicaragua</option>
                                    <option value="Níger" id="NE">Níger</option>
                                    <option value="Nigeria" id="NG">Nigeria</option>
                                    <option value="Niue" id="NU">Niue</option>
                                    <option value="Norfolk" id="NF">Norfolk</option>
                                    <option value="Noruega" id="NO">Noruega</option>
                                    <option value="Nueva Caledonia" id="NC">Nueva Caledonia</option>
                                    <option value="Nueva Zelanda" id="NZ">Nueva Zelanda</option>
                                    <option value="Omán" id="OM">Omán</option>
                                    <option value="Panamá" id="PA">Panamá</option>
                                    <option value="Papua Nueva Guinea" id="PG">Papua Nueva Guinea</option>
                                    <option value="Paquistán" id="PK">Paquistán</option>
                                    <option value="Paraguay" id="PY">Paraguay</option>
                                    <option value="Perú" id="PE">Perú</option>
                                    <option value="Pitcairn" id="PN">Pitcairn</option>
                                    <option value="Polinesia francesa" id="PF">Polinesia francesa</option>
                                    <option value="Polonia" id="PL">Polonia</option>
                                    <option value="Portugal" id="PT">Portugal</option>
                                    <option value="Puerto Rico" id="PR">Puerto Rico</option>
                                    <option value="Qatar" id="QA">Qatar</option>
                                    <option value="Reino Unido" id="UK">Reino Unido</option>
                                    <option value="República Centroafricana" id="CF">República Centroafricana</option>
                                    <option value="República Checa" id="CZ">República Checa</option>
                                    <option value="República de Sudáfrica" id="ZA">República de Sudáfrica</option>
                                    <option value="República Democrática del Congo Zaire" id="CD">República Democrática del Congo Zaire</option>
                                    <option value="República Dominicana" id="DO">República Dominicana</option>
                                    <option value="Reunión" id="RE">Reunión</option>
                                    <option value="Ruanda" id="RW">Ruanda</option>
                                    <option value="Rumania" id="RO">Rumania</option>
                                    <option value="Rusia" id="RU">Rusia</option>
                                    <option value="Samoa" id="WS">Samoa</option>
                                    <option value="Samoa occidental" id="AS">Samoa occidental</option>
                                    <option value="San Kitts y Nevis" id="KN">San Kitts y Nevis</option>
                                    <option value="San Marino" id="SM">San Marino</option>
                                    <option value="San Pierre y Miquelon" id="PM">San Pierre y Miquelon</option>
                                    <option value="San Vicente e Islas Granadinas" id="VC">San Vicente e Islas Granadinas</option>
                                    <option value="Santa Helena" id="SH">Santa Helena</option>
                                    <option value="Santa Lucía" id="LC">Santa Lucía</option>
                                    <option value="Santo Tomé y Príncipe" id="ST">Santo Tomé y Príncipe</option>
                                    <option value="Senegal" id="SN">Senegal</option>
                                    <option value="Serbia y Montenegro" id="YU">Serbia y Montenegro</option>
                                    <option value="Sychelles" id="SC">Seychelles</option>
                                    <option value="Sierra Leona" id="SL">Sierra Leona</option>
                                    <option value="Singapur" id="SG">Singapur</option>
                                    <option value="Siria" id="SY">Siria</option>
                                    <option value="Somalia" id="SO">Somalia</option>
                                    <option value="Sri Lanka" id="LK">Sri Lanka</option>
                                    <option value="Suazilandia" id="SZ">Suazilandia</option>
                                    <option value="Sudán" id="SD">Sudán</option>
                                    <option value="Suecia" id="SE">Suecia</option>
                                    <option value="Suiza" id="CH">Suiza</option>
                                    <option value="Surinam" id="SR">Surinam</option>
                                    <option value="Svalbard" id="SJ">Svalbard</option>
                                    <option value="Tailandia" id="TH">Tailandia</option>
                                    <option value="Taiwán" id="TW">Taiwán</option>
                                    <option value="Tanzania" id="TZ">Tanzania</option>
                                    <option value="Tayikistán" id="TJ">Tayikistán</option>
                                    <option value="Territorios británicos del océano Indico" id="IO">Territorios británicos del océano Indico</option>
                                    <option value="Territorios franceses del sur" id="TF">Territorios franceses del sur</option>
                                    <option value="Timor Oriental" id="TP">Timor Oriental</option>
                                    <option value="Togo" id="TG">Togo</option>
                                    <option value="Tonga" id="TO">Tonga</option>
                                    <option value="Trinidad y Tobago" id="TT">Trinidad y Tobago</option>
                                    <option value="Túnez" id="TN">Túnez</option>
                                    <option value="Turkmenistán" id="TM">Turkmenistán</option>
                                    <option value="Turquía" id="TR">Turquía</option>
                                    <option value="Tuvalu" id="TV">Tuvalu</option>
                                    <option value="Ucrania" id="UA">Ucrania</option>
                                    <option value="Uganda" id="UG">Uganda</option>
                                    <option value="Uruguay" id="UY">Uruguay</option>
                                    <option value="Uzbekistán" id="UZ">Uzbekistán</option>
                                    <option value="Vanuatu" id="VU">Vanuatu</option>
                                    <option value="Venezuela" id="VE">Venezuela</option>
                                    <option value="Vietnam" id="VN">Vietnam</option>
                                    <option value="Wallis y Futuna" id="WF">Wallis y Futuna</option>
                                    <option value="Yemen" id="YE">Yemen</option>
                                    <option value="Zambia" id="ZM">Zambia</option>
                                    <option value="Zimbabue" id="ZW">Zimbabue</option>
                                <?php endif; ?>
                                </select>
                                <label for="pais"><?php esc_html_e(
                                    "País",
                                    "geg"
                                ); ?></label>
                                <div class="valid-feedback">
                                    <?php esc_html_e("¡Se ve bien!", "geg"); ?>
                                </div>
                                <div class="invalid-feedback">
                                    <?php esc_html_e(
                                        "Por favor selecciona tu país.",
                                        "geg"
                                    ); ?>
                                </div>
                            </div>
                            <div class="col-md-12 form-floating">
                                <input type="email" class="form-control shadow-none" id="correo" name="correo" placeholder="<?php esc_html_e(
                                    "Correo electrónico",
                                    "geg"
                                ); ?>*"
                                    required>
                                <label for="correo" class="form-label"><?php esc_html_e(
                                    "Correo electrónico",
                                    "geg"
                                ); ?>*</label>
                                <div class="valid-feedback">
                                    <?php esc_html_e("¡Se ve bien!", "geg"); ?>
                                </div>
                                <div class="invalid-feedback">
                                    <?php esc_html_e(
                                        "Por favor introduce un correo electrónico válido.",
                                        "geg"
                                    ); ?>
                                </div>
                            </div>
                            <div class="col-md-12 form-floating">
                                <input type="tel" class="form-control shadow-none" id="telefono" name="telefono" placeholder="<?php esc_html_e(
                                    "Teléfono",
                                    "geg"
                                ); ?>*"
                                    pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
                                <label for="telefono" class="form-label"><?php esc_html_e(
                                    "Teléfono",
                                    "geg"
                                ); ?>*</label>
                                <div class="valid-feedback">
                                    <?php esc_html_e("¡Se ve bien!", "geg"); ?>
                                </div>
                                <div class="invalid-feedback">
                                    <?php esc_html_e(
                                        "Por favor escribe un número de teléfono válido (Ej: 6561234567).",
                                        "geg"
                                    ); ?>
                                </div>
                            </div>
                            <div class="col-md-12 form-floating mb-4">
                                <textarea class="form-control shadow-none" id="mensaje" name="mensaje" placeholder="<?php esc_html_e(
                                    "Tus dudas o comentarios",
                                    "geg"
                                ); ?>*" style="height: 100px;" required></textarea>
                                <label for="mensaje"><?php esc_html_e(
                                    "Tus dudas o comentarios",
                                    "geg"
                                ); ?>*</label>
                                <div class="valid-feedback">
                                    <?php esc_html_e("¡Se ve bien!", "geg"); ?>
                                </div>
                                <div class="invalid-feedback">
                                    <?php esc_html_e(
                                        "Por favor introduce tus dudas o comentarios.",
                                        "geg"
                                    ); ?>
                                </div>
                            </div>
                            <div class="col-md-6 my-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="privacidad" required>
                                    <label class="form-check-label" for="privacidad">
                                        <?php esc_html_e(
                                            "Acepto el",
                                            "geg"
                                        ); ?> <?php if (
     $currentlang == "en-US"
 ): ?><a href="<?php echo get_page_link("698"); ?>"><?php echo get_the_title(
    "698"
); ?></a><?php else: ?><a href="<?php echo get_page_link(
    "3"
); ?>"><?php esc_html_e("Aviso de Privacidad", "geg"); ?></a><?php endif; ?>
                                    </label>
                                    <div class="invalid-feedback">
                                        <?php esc_html_e(
                                            "Debes de aceptar nuestro aviso de privacidad para poder enviar el formulario.",
                                            "geg"
                                        ); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 my-auto text-end">
                                <button type="submit" class="btn btn-primary btn-block"><?php esc_html_e(
                                    "Enviar",
                                    "geg"
                                ); ?></button>
                                <div id="hold-on-a-sec">
                                    <i id="contact-spinner" class="fas fa-spinner fa-spin"></i> <?php esc_html_e(
                                        "Espera un momento por favor...",
                                        "geg"
                                    ); ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<section class="mapa">
    <?php if (have_rows("datos_de_contacto", "option")):
        while (have_rows("datos_de_contacto", "option")):
            the_row(); ?>
        <?php the_sub_field("mapa"); ?>
    <?php
        endwhile;
    endif; ?>
    </section>

<?php get_footer(); ?>
