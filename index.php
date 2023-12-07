<!-- PHP INCLUDES -->

<?php

include "connect.php";
include "Includes/templates/header.php";
include "Includes/templates/navbar.php";

?>

<!-- HOME SECTION -->

<section class="home-section" id="home-section">
    <div class="home-section-content">
        <div id="home-section-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#home-section-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#home-section-carousel" data-slide-to="1"></li>
                <li data-target="#home-section-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <!-- FIRST SLIDE -->
                <div class="carousel-item active">
                    <img class="d-block w-100" src="Design/images/slaider1.jpg" alt="primer slide">
                    <div class="carousel-caption d-md-block">
                        <h3>Un Corte de Cabello para cada Ocasión</h3>
                        <p>
                            Somos la mejor peluquería del Mundo, te queremos bien !!
                            <br>
                            Acá te puedes sentir muy cómodo.
                        </p>
                    </div>
                </div>
                <!-- SECOND SLIDE -->
                <div class="carousel-item">
                    <img class="d-block w-100" src="Design/images/slaider2.jpg" alt="segundo slide">
                    <div class="carousel-caption d-md-block">
                        <h3>Un Corte de Cabello para cada Ocasión</h3>
                        <p>
                            Somos la mejor peluquería del Mundo  mundial, te queremos bien !!
                            <br>
                            Acá te puedes sentir muy cómodo.
                        </p>
                    </div>
                </div>
                <!-- THIRD SLIDE -->
                <div class="carousel-item">
                    <img class="d-block w-100" src="Design/images/slaider3.jpg" alt="tercer slide">
                    <div class="carousel-caption d-md-block">
                        <h3>Un Corte de Cabello para cada Ocasión</h3>
                        <p>
                            Somos la mejor peluquería del Mundo, te queremos bien !!
                            <br>
                            Acá te puedes sentir muy cómodo.
                        </p>
                    </div>
                </div>
            </div>
            <!-- PREVIOUS & NEXT -->
            <a class="carousel-control-prev" href="#home-section-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previo</span>
            </a>
            <a class="carousel-control-next" href="#home-section-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
</section>

<section class="book_section" id="login">
    <div class="book_bg"></div>
    <div class="map_pattern"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-6">
                <form action="admin/" method="post" id="appointment_form" class="form-horizontal appointment_form">
                    <div class="book_content">
                        <h2 style="color: white;">Administra tu barberia</h2>
                        <p style="color: #999;">
                            En unos sencillos pasos, solo ingresa tus credenciales<br>y podrás administrar tu cita sin problemas.
                        </p>
                    </div>
                    <!-- SUBMIT BUTTON -->

                    <button id="app_submit" class="default_btn" type="submit">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>git config --global user.email "you@example.com"
  git config --global user.name "Your Name"

<!-- ABOUT SECTION --> 

<section id="about" class="about_section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about_content" style="text-align: center;">
                    <h3 style="color: #fff;">Estamos para ti</h3>
                    <h2>Somos tu Peluquería <br>Desde 2023</h2>
                    <img src="Design/images/faceticket.jpeg" alt="logo2"> 
                    <p style="color: #fff">
                        Somos una peluquería enfocada en nuestros clientes, antes de empezar analizamos tu fisonomía para recomendarte tu mejor corte.
                        Como siempre respetando como máxima tu criterio, tus gustos y preferencias ante todos.
                    </p>
                    <a href="#" class="default_btn" style="opacity: 1;">Más acerda de nosotros</a>
                </div>
            </div>
            <div class="col-md-6  d-none d-md-block">
                <div class="about_img" style="overflow:hidden">
                    <img class="about_img_1" src="Design/images/aboutprimera.jpg" alt="aboutprimera">
                    <img class="about_img_2" src="Design/images/aboutsegunda.jpg" alt="aboutsegunda">
                    <img class="about_img_3" src="Design/images/abouttres.jpg" alt="abouttres">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES SECTION -->

<section class="services_section" id="services">
    <div class="container">
        <div class="section_heading">
            <h3>Somos tu Peluquería</h3>
            <h2>Nuestros Servicios</h2>
            <div class="heading-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 padd_col_res">
                <div class="service_box">
                    <i class="bs bs-scissors-1"></i>
                    <h3>Cortes de Cabello</h3>
                    <p>Los mejores cortes de cabellos adaptados a la fixonomía de tu cara</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padd_col_res">
                <div class="service_box">
                    <i class="bs bs-razor-2"></i>
                    <h3>Corte de Barba</h3>
                    <p>Nos ajustamos a tu barba, te damos los mejores consejos posibles.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padd_col_res">
                <div class="service_box">
                <i class="bs bs-brush"></i>
                    <h3>Afeitado Suave</h3>
                    <p>Incluimos un tratamiento, de cremas y balsamos que cuidan tu piel.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padd_col_res">
                <div class="service_box">
                    <i class="bs bs-hairbrush-1"></i>
                    <h3>Mascarilla Facial</h3>
                    <p>Aplicamos los mejores tratamiento, para cuidar tu piel y humectarla</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BOOKING SECTION -->



<!-- GALLERY SECTION -->

<section class="gallery-section" id="gallery">
    <div class="section_heading">
        <h3>Somos tu Peluquería</h3>
        <h2>Nuestros Clientes Felices</h2>
        <div class="heading-line"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('Design/images/portfolio-5.jpg');"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('Design/images/portfolio-6.jpg');"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('Design/images/portfolio-7.jpg');"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('Design/images/portfolio-8.jpg');"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TEAM SECTION -->

<section id="team" class="team_section">
    <div class="container">
        <div class="section_heading ">
            <h3>Somos tu Peluquería</h3>
            <h2>Nuestros Peluqueros</h2>
            <div class="heading-line"></div>
        </div>
        <ul class="team_members row">
        <li class="col-lg-3 col-md-6 padd_col_res">
                <div class="team_member">
                    <img src="Design/images/team-3.jpg" alt="Team Member">
                </div>
            </li>
            <li class="col-lg-3 col-md-6 padd_col_res">
                <div class="team_member">
                    <img src="Design/images/team-4.jpg" alt="Team Member">
                </div>
            </li>
            <li class="col-lg-3 col-md-6 padd_col_res">
                <div class="team_member">
                    <img src="Design/images/team-3.jpg" alt="Team Member">
                </div>
            </li>
            <li class="col-lg-3 col-md-6 padd_col_res">
                <div class="team_member">
                    <img src="Design/images/team-4.jpg" alt="Team Member">
                </div>
            </li>
        </ul>
    </div>
</section>

<!-- REVIEWS SECTION -->

<!-- PRICING SECTION  -->

<section class="pricing_section" id="pricing">

    <!-- START GET CATEGORIES  PRICES FROM DATABASE -->

    <?php

    $stmt = $con->prepare("Select * from service_categories");
    $stmt->execute();
    $categories = $stmt->fetchAll();

    ?>

    <!-- END -->

    <div class="container">
        <div class="section_heading">
            <h3>Somos tu mejor opción</h3>
            <h2>Nuestros Precios</h2>
            <div class="heading-line"></div>
        </div>
        <div class="row">
            <?php

            foreach ($categories as $category) {
                $stmt = $con->prepare("Select * from services where category_id = ?");
                $stmt->execute(array($category['category_id']));
                $totalServices =  $stmt->rowCount();
                $services = $stmt->fetchAll();

                if ($totalServices > 0) {
            ?>

                    <div class="col-lg-4 col-md-6 sm-padding">
                        <div class="price_wrap">
                            <h3><?php echo $category['category_name'] ?></h3>
                            <ul class="price_list">
                                <?php

                                foreach ($services as $service) {
                                ?>

                                    <li>
                                        <h4><?php echo $service['service_name'] ?></h4>
                                        <p style="color: #8cfffb;"><?php echo $service['service_description'] ?></p>
                                        <span class="price">L<?php echo $service['service_price'] ?></span>
                                    </li>

                                <?php
                                }

                                ?>

                            </ul>
                        </div>
                    </div>

            <?php
                }
            }

            ?>

        </div>
    </div>
</section>

<!-- CONTACT SECTION -->


<!-- WIDGET SECTION / FOOTER -->

<section class="widget_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer_widget">
                    <img src="Design/images/Logo.jpeg" alt="Brand">
                    <ul class="widget_social">
                        <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="fab fa-twitter fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="LinkedIn"><i class="fab fa-linkedin fa-2x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_widget">
                    <h3>Quienes Somos?</h3>
                    <p>
                        En Faceticket,somos una empresa que damos vida a una experiencia única en el mundo de la belleza masculina. Somos más que una aplicación de reserva de barberías;
                        somos el vínculo que conecta a hombres modernos con su estilista ideal. Nos enorgullece ofrecer un espacio digital intuitivo y elegante que simplifica la búsqueda y
                        reserva de citas de barbería, permitiendo a nuestros usuarios descubrir y conectar con los mejores profesionales del estilo.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_widget">
                    <h3>Dirección</h3>
                    <p>
                    </p>
                    <p>
                        bussiness@faceticket.com
                        <br>
                        (+504) 1234-1234
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_widget">
                    <h3>
                        Horarios Disponibles
                    </h3>
                    <ul class="opening_time">
                        <li>De Lunes a Viernes</li>
                        <li>9:30am - 6:00 pm</li>
                        <li>Sabados y Domingos </li>
                        <li>11:00am - 4:00 pm</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- FOOTER  -->

<?php include "./Includes/templates/footer.php"; ?>