<?php
// SECCIÓN DE PHP PARA PROCESAR EL FORMULARIO
$envio_exitoso = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $envio_exitoso = true;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TÍTULO DE LA PÁGINA -->
    <title>Portafolio Digital</title>

    <!-- ESTILOS DE BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <!-- HOJA DE ESTILOS PERSONALIZADA -->
    <link rel="stylesheet" href="css/style.css">

    <!-- SCRIPT PARA CARGAR NAVBAR Y FOOTER -->
    <script defer src="js/script.js"></script>

    <!-- ICONO DE LA PÁGINA (FAVICON) -->
    <link rel="icon" type="image/x-icon" href="img/logos/logo-fav.png">

    <!-- ICONOS DE BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<!-- INICIO DEL BODY CON SCROLLSPY ACTIVADO -->

<body data-bs-spy="scroll" data-bs-target="#navbarMain" data-bs-offset="80" tabindex="0">

    <!-- SECCIÓN NAVBAR (CARGADA DINÁMICAMENTE) -->
    <div id="navbar-container"></div>

    <!-- SECCIÓN INICIO (PUNTO DE REFERENCIA PARA SCROLLSPY) -->
    <section id="inicio" style="height:1px;"></section>

    <!-- SECCIÓN SOBRE MÍ -->
    <section class="pt-3 mt-5">
        <div class="container py-5">
            <div class="row align-items-center flex-column flex-md-row text-center text-md-left">

                <!-- FOTO DE PERFIL -->
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                    <div class="mx-auto rounded-circle overflow-hidden" style="width: 250px; height: 250px;">
                        <img src="img/about/perfil.png" alt="FotoPerfil" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                </div>

                <!-- DESCRIPCIÓN PERSONAL -->
                <div class="col-12 col-md-8 ps-md-5">
                    <h3 class="mb-3 fw-bolder text-center text-md-start">¡Hola! Soy Daniel Hernández</h3>
                    <p class="text-center text-md-start fw-medium">
                        Estudiante de Ingeniería en Tecnologías de la Información y Comunicaciones, del ITESS,
                        apasionado por el desarrollo web y el diseño UX/UI.
                    </p>
                    <h6 class="text-muted fw-semibold text-center text-md-start">
                        Conoce mis proyectos y descubre cómo puedo aportar valor a tus ideas.
                    </h6>
                </div>

            </div>
        </div>
    </section>

    <!-- SECCIÓN LÍNEA DEL TIEMPO -->
    <section id="sobre-mi">
        <div class="container mt-md-5 mb-5">

            <!-- PRIMER PUNTO DE LA LÍNEA DEL TIEMPO -->
            <div class="row mb-4 timeline-row">

                <!-- FECHA -->
                <div class="col-12 col-md-3 text-center text-md-end pe-4">
                    <h5 class="fw-light">2022 - Actualidad</h5>
                </div>

                <!-- DESCRIPCIÓN -->
                <div class="col-12 col-md-7 position-relative text-center text-md-start">
                    <ul class="timeline">
                        <li>
                            <h5 class="fw-semibold">Ingeniería en Tecnologías de la Información y Comunicaciones</h5>
                            <p>Instituto Tecnológico Superior de Salvatierra - Formación orientada a redes, desarrollo
                                de software, bases de datos, soporte técnico y gestión de infraestructura de TICs.</p>
                        </li>
                    </ul>
                </div>

                <!-- TECNOLOGÍAS UTILIZADAS -->
                <div class="col-12 col-md-2 text-center text-md-start my-2 mt-md-0">
                    <img src="img/icons/cgato.svg" width="35px">
                    <img src="img/icons/c.svg" width="41px">
                    <img src="img/icons/c++.svg" width="35px">
                    <img src="img/icons/python.svg" width="35px">
                    <img src="img/icons/java.svg" width="35px">
                </div>
            </div>

            <!-- SEGUNDO PUNTO DE LA LÍNEA DEL TIEMPO -->
            <div class="row mb-4 timeline-row">

                <!-- FECHA -->
                <div class="col-12 col-md-3 text-center text-md-end pe-4">
                    <h5 class="fw-light">2023 - 2024</h5>
                </div>

                <!-- DESCRIPCIÓN -->
                <div class="col-12 col-md-7 position-relative text-center text-md-start">
                    <ul class="timeline">
                        <li>
                            <h5 class="fw-semibold">Front-End Developer Jr.</h5>
                            <p>Desarrollo de páginas web responsivas para negocios locales y portafolios personales.
                                Diseño de interfaces modernas, optimización para móviles y carga rápida.</p>
                        </li>
                    </ul>
                </div>

                <!-- TECNOLOGÍAS UTILIZADAS -->
                <div class="col-12 col-md-2 text-center text-md-start my-2 mt-md-0">
                    <img src="img/icons/bootstrap.svg" width="35px">
                    <img src="img/icons/github.svg" width="41px">
                    <img src="img/icons/figma.svg" width="30px">
                </div>
            </div>

            <!-- TERCER PUNTO DE LA LÍNEA DEL TIEMPO -->
            <div class="row mb-4 timeline-row">

                <!-- FECHA -->
                <div class="col-12 col-md-3 text-center text-md-end pe-4">
                    <h5 class="fw-light">2022</h5>
                </div>

                <!-- DESCRIPCIÓN -->
                <div class="col-12 col-md-7 position-relative text-center text-md-start">
                    <ul class="timeline">
                        <li>
                            <h5 class="fw-semibold">Curso Certificado UX/UI</h5>
                            <p>Certificación en diseño de interfaces y experiencia de usuario. Desarrollo de wireframes,
                                user flows y prototipos interactivos en Figma, aplicando principios de usabilidad.</p>
                        </li>
                    </ul>
                </div>

                <!-- TECNOLOGÍAS UTILIZADAS -->
                <div class="col-12 col-md-2 text-center text-md-start my-2 mt-md-0">
                    <img src="img/icons/figma.svg" width="30px">
                    <img src="img/icons/canva.svg" width="41px">
                </div>
            </div>

            <!-- CUARTO PUNTO DE LA LÍNEA DEL TIEMPO -->
            <div class="row mb-4 timeline-row">

                <!-- FECHA -->
                <div class="col-12 col-md-3 text-center text-md-end pe-4">
                    <h5 class="fw-light">2021</h5>
                </div>

                <!-- DESCRIPCIÓN -->
                <div class="col-12 col-md-7 position-relative text-center text-md-start">
                    <ul class="timeline timeline-end">
                        <li>
                            <h5 class="fw-semibold">Taller de Ofimática</h5>
                            <p>Capacitación práctica en hojas de cálculo, presentaciones y documentos colaborativos.</p>
                        </li>
                    </ul>
                </div>

                <!-- TECNOLOGÍAS UTILIZADAS -->
                <div class="col-12 col-md-2 text-center text-md-start my-2 mt-md-0">
                    <img src="img/icons/powerpoint.svg" width="38px">
                    <img src="img/icons/excel.svg" width="38px">
                    <img src="img/icons/Word.svg" width="38px">
                </div>
            </div>

        </div>
    </section>

    <!-- SECCIÓN PROYECTOS -->
    <section id="proyectos">
        <div class="container py-5">
            <div class="row g-3 justify-content-center align-items-stretch">

                <!-- IMAGEN DEL PROYECTO -->
                <div class="col-12 col-md-6 mb-4 mb-md-0 d-flex justify-content-end">
                    <img src="/img/projects/landing-educativa/landing-educativa-top.jpg" alt="Proyecto"
                        class="w-100 object-fit-cover rounded-top rounded-md-start rounded-md-top-0">
                </div>

                <!-- TARJETA CON INFORMACIÓN DEL PROYECTO -->
                <div class="col-12 col-md-6">
                    <div class="card h-100 rounded-bottom rounded-md-end rounded-md-bottom-0 border-custom">

                        <!-- INFORMACIÓN DEL PROYECTO -->
                        <div class="card-body d-flex flex-column justify-content-center text-center">
                            <h3 class="card-title fw-semibold">Landing Page Educativa</h3>
                            <p class="card-text fw-medium">Diseño y desarrollo de una página educativa responsiva para
                                compartir
                                recursos académicos.</p>
                            <a href="../projects/proyecto.html"
                                class="btn btn-custom rounded-pill mx-auto mt-3 w-50 w-md-25">
                                Ver más
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- SECCIÓN CONTACTO -->
    <section id="contacto">
        <div class="container-fluid bg-contact py-5">
            <div class="container text-center">

                <!-- TEXTO SUPERIOR -->
                <h4>¿Te interesa mi trabajo?</h4>
                <h5 class="mb-4">Escríbeme.</h5>

                <!-- FORMULARIO DE CONTACTO -->
                <form method="POST" action="">
                    <div class="d-flex flex-column align-items-center">
                        <input type="text" name="nombre" class="form-control custom-input w-50 mb-3"
                            placeholder="Nombre" required>

                        <input type="email" name="correo" class="form-control custom-input w-50 mb-3"
                            placeholder="Correo electrónico" required>

                        <input type="text" name="asunto" class="form-control custom-input w-50 mb-3"
                            placeholder="Asunto" required>

                        <textarea name="mensaje" class="form-control custom-input w-50 mb-3" placeholder="Mensaje"
                            rows="3" required></textarea>

                        <button type="submit" class="btn btn-custom rounded-pill mt-3 px-5">
                            Enviar
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </section>

    <!-- SECCIÓN FOOTER (CARGADA DINÁMICAMENTE) -->
    <div id="footer-container"></div>

    <!-- SCRIPT DE BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- MODAL DE CONFIRMACIÓN -->
    <div class="modal fade" id="modalConfirmacion" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-header bg-modal text-white">
                    <h5 class="modal-title text-center" id="modalLabel">¡Mensaje enviado!</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Cerrar"></button>
                </div>
                <div class="modal-body text-center">
                    <i class="bi bi-check-circle fs-1"></i>
                    <p>Gracias por escribirme.</p>
                    <p>Pronto recibirás una respuesta.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPT PARA MOSTRAR LA MODAL SI EL FORMULARIO SE ENVÍA -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            <?php if ($envio_exitoso): ?>
                var modal = new bootstrap.Modal(document.getElementById('modalConfirmacion'));
                modal.show();
            <?php endif; ?>
        });
    </script>

</body>

</html>