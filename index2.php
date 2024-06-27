<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Lateral con Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- Tu script personalizado para mantener el estado del menú -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Tu script personalizado para mantener el estado del menú -->



    <link rel="stylesheet" href="styles.css"> <!-- Estilos adicionales personalizados -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Restaurar el estado del menú al cargar la página
            const submenu0 = document.getElementById('submenu0');
            const submenu1 = document.getElementById('submenu1');
            const submenu2 = document.getElementById('submenu2');
            const submenu3 = document.getElementById('submenu3');
            const submenu4 = document.getElementById('submenu4');
            const submenu5 = document.getElementById('submenu5');
            const submenu6 = document.getElementById('submenu6');

            if (localStorage.getItem('submenu0-expanded') === 'true') {
                submenu0.classList.add('show');
            }
            if (localStorage.getItem('submenu1-expanded') === 'true') {
                submenu1.classList.add('show');
            }
            if (localStorage.getItem('submenu2-expanded') === 'true') {
                submenu2.classList.add('show');
            }
            if (localStorage.getItem('submenu3-expanded') === 'true') {
                submenu3.classList.add('show');
            }
            if (localStorage.getItem('submenu4-expanded') === 'true') {
                submenu4.classList.add('show');
            }
            if (localStorage.getItem('submenu5-expanded') === 'true') {
                submenu5.classList.add('show');
            }
            if (localStorage.getItem('submenu6-expanded') === 'true') {
                submenu6.classList.add('show');
            }

            // Guardar el estado del menú cuando se expande o colapsa
            document.getElementById('link-submenu0').addEventListener('click', function () {
                const isExpanded = submenu0.classList.contains('show');
                localStorage.setItem('submenu0-expanded', !isExpanded);
            });

            document.getElementById('link-submenu1').addEventListener('click', function () {
                const isExpanded = submenu1.classList.contains('show');
                localStorage.setItem('submenu1-expanded', !isExpanded);
            });
            document.getElementById('link-submenu2').addEventListener('click', function () {
                const isExpanded = submenu2.classList.contains('show');
                localStorage.setItem('submenu2-expanded', !isExpanded);
            });
            document.getElementById('link-submenu3').addEventListener('click', function () {
                const isExpanded = submenu3.classList.contains('show');
                localStorage.setItem('submenu3-expanded', !isExpanded);
            });
            document.getElementById('link-submenu4').addEventListener('click', function () {
                const isExpanded = submenu4.classList.contains('show');
                localStorage.setItem('submenu4-expanded', !isExpanded);
            });
            document.getElementById('link-submenu5').addEventListener('click', function () {
                const isExpanded = submenu5.classList.contains('show');
                localStorage.setItem('submenu5-expanded', !isExpanded);
            });
            document.getElementById('link-submenu6').addEventListener('click', function () {
                const isExpanded = submenu6.classList.contains('show');
                localStorage.setItem('submenu6-expanded', !isExpanded);
            });
        });

    </script>
    <link rel="stylesheet" href="styles.css"> <!-- Estilos adicionales personalizados -->
    <style>
        .checkmark {
            color: #ff6600;
            /* Cambia el color de la marca de verificación */
            font-size: 1.2em;
            /* Cambia el tamaño de la marca de verificación */
        }

        .page-header {
            background-repeat: no-repeat;
            background-position: center;
            background-color: #FF5A00;
            text-align: center;
            /* Centra los elementos */
            padding: 66px;
            /* Añade espaciado alrededor del contenido si es necesario */
        }

        .centered-images {
            position: relative;
            /* Permite posicionar las imágenes dentro de este contenedor */
        }

        .img-top {
            position: absolute;
            /* Posiciona la imagen TRIO WIN1 */
            top: 67px;
            /* La coloca en la parte superior del contenedor padre */
            left: 532px;
            /* La coloca al inicio del contenedor padre */
        }

        .img-bottom {
            position: absolute;
            /* Posiciona la imagen TRIO WIN2 */
            bottom: -127px;
            /* La coloca en la parte inferior del contenedor padre */
            right: 508px;
        }

        /* La coloca al final del contenedor padre */


        .img-center {
            /* Estilo para la imagen TRIO WIN que debe estar en el centro */
            margin-top: -54px;
            /* Ajusta este valor según sea necesario para superponerla sobre las imágenes TRIO WIN1 y TRIO WIN2 */
        }

        @media (min-width: 768px) {
            .col-md-3-custom-1 {
                flex: 0 0 auto;
                width: 17%;
            }

            .col-md-3-custom-2 {
                flex: 0 0 auto;
                width: 33%;
            }
        }

        .image-with-text {
            position: relative;
            overflow: hidden;
            height: 300px;
            /* Altura deseada para la imagen */
            border: 1px solid #ff6600;
            /* Borde alrededor de la imagen */
            place-items: center;
            /* Centra horizontal y verticalmente */

        }

        .image-with-text img {
            display: block;
            max-width: 100%;
            max-height: 100%;
            margin: auto;
            /* object-fit: cover; /* Ajusta la imagen para cubrir todo el contenedor */
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.5);
            /* Fondo semitransparente */
            color: white;
            text-align: center;
            box-sizing: border-box;
            padding: 20px;
            border: 2px solid #ff6600;
            /* Color y grosor del borde */
        }

        .overlay .text {
            font-size: 18px;
            font-weight: bold;
        }

        .table {
            margin: auto;
        }


        .crossed-out {
            text-decoration: line-through;
            color: #666;
        }

        .big-number {
            font-size: 1em;
            color: #ff6600;
            font-weight: bold;
        }

        .big-number-custom1 {
            font-size: 1em;
            color: #321712;
            font-weight: bold;
        }

        .small-text {
            font-size: 0.8em;
            color: #666;
        }

        .small-text1 {
            font-size: 0.8em;
            color: #321712;
        }

        /* Estilos personalizados */
        .p-4 {
            padding: 0.5rem !important;
        }

        .row {
            --bs-gutter-x: 1.5rem;
        }

        .sidebar {
            position: fixed;
            top: 0;
            z-index: 100;
            height: 100%;
            padding-top: 1rem;
            border-right: 1px solid #C1B9B4;
            background-color: #DFDAD9;
        }

        .bg-light {
            background-color: #DFDAD9 !important;
        }

        .nav-link {
            padding: 0.5rem 1rem;
            color: #333;
        }

        .nav-link.active {
            font-weight: 600;
            color: #0062cc;
            background-color: #C1B9B4;
            border-left: 3px solid #007bff;
            padding-left: calc(1rem - 3px);
        }

        .nav-item>.nav-link {
            font-size: 16px;
            /* Tamaño de fuente para los elementos de nivel superior */
        }

        .nav-item {
            padding-left: 0.5rem;
            /* Ajuste de indentación para submenús */
        }

        .nav-item .nav-link.small {
            font-size: 13px;
            /* Tamaño de fuente para los elementos de submenús */
            padding-left: 1.5rem;
        }

        .nav-item .nav-link.fw-bold {
            font-size: 15px;
        }

        .collapse.list-unstyled {
            padding-left: 0;
            list-style: none;
        }

        .collapse.list-unstyled>li {
            border-bottom: 1px solid #dee2e6;
            /* Borde inferior entre elementos */
        }
    </style>
</head>

<body>
    <?php
    echo '<h1>Index 2</h1>';
    echo '<p>Contenido de la página index</p>';

    ?>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-md-3-custom-1 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <div class="p-4">
                        <h2>
                            <nav id="sidebar" class="col-md-3 col-md-3-custom-1 col-lg-2 d-md-block bg-light sidebar">
                                <div class="position-sticky">
                                    <div class="p-4">
                                        <h2>
                                            <center>BIZAG.SAC</center>
                                        </h2>
                                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#submenu0" data-bs-toggle="collapse"
                                    aria-expanded="false" id="link-submenu0">WIN LIMA</a>
                                <ul class="collapse list-unstyled border-top border-bottom" id="submenu0">

                                    <li class="nav-item">
                                        <a class="nav-link fw-bold" href="#submenu1" data-bs-toggle="collapse"
                                            aria-expanded="false" id="link-submenu1">PLAN MONO</a>
                                        <ul class="collapse list-unstyled" id="submenu1">
                                            <li><a class="nav-link small" href="index.php">index</a>
                                            </li>
                                            <li><a class="nav-link small" href="index1.php">index1</a>
                                            </li>
                                            <li><a class="nav-link small" href="index2.php">index2</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link  fw-bold" href="#submenu2" data-bs-toggle="collapse"
                                            aria-expanded="false" id="link-submenu2">PLAN DUOS</a>
                                        <ul class="collapse list-unstyled" id="submenu2">
                                            <li><a class="nav-link small" href="duotvbasico.php">100% FIBRA + WINTV
                                                    BÁSICO</a></li>
                                            <li><a class="nav-link small" href="duotvplus.php">100% FIBRA + WINTV
                                                    PLUS</a></li>
                                            <li><a class="nav-link small" href="duodgol1max.php">100% FIBRA + DGO
                                                    L1MAX</a></li>
                                            <li><a class="nav-link small" href="duodgobasico.php">100% FIBRA + DGO
                                                    BÁSICO</a></li>
                                            <li><a class="nav-link small" href="duodgofull.php">100% FIBRA + DGO
                                                    FULL</a></li>
                                            <li><a class="nav-link small" href="duofonowin.php">100% FIBRA + FONOWIN</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  fw-bold" href="#submenu3" data-bs-toggle="collapse"
                                            aria-expanded="false" id="link-submenu3">PLAN TRIOS</a>
                                        <ul class="collapse list-unstyled" id="submenu3">
                                            <li><a class="nav-link small" href="triotvbasico.php">INTERNET + WINTV
                                                    BÁSICO + FONOWIN</a>
                                            </li>
                                            <li><a class="nav-link small" href="triotvplus.php">100% FIBRA + WINTV PLUS
                                                    + FONOWIN</a>
                                            </li>
                                            <li><a class="nav-link small" href="triodgol1max.php">100% FIBRA + DGO L1MAX
                                                    + FONOWIN</a>
                                            </li>
                                            <li><a class="nav-link small" href="triodgobasico.php">100% FIBRA + DGO
                                                    BÁSICO + FONOWIN</a>
                                            </li>
                                            <li><a class="nav-link small" href="triodgofull.php">100% FIBRA + DGO FULL +
                                                    FONOWIN</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  fw-bold" href="#submenu4" data-bs-toggle="collapse"
                                            aria-expanded="false" id="link-submenu4">PLAN GAMER</a>
                                        <ul class="collapse list-unstyled" id="submenu4">
                                            <li><a class="nav-link small" href="#">100% FIBRA</a></li>
                                            <li><a class="nav-link small" href="triogamertvbasico.php">INTERNET + WINTV
                                                    BÁSICO + FONOWIN</a>
                                            </li>
                                            <li><a class="nav-link small" href="triogamertvplus.php">INTERNET + WINTV
                                                    PLUS + FONOWIN</a>
                                            </li>
                                            <li><a class="nav-link small" href="triogamerdgol1max.php">INTERNET + DGO
                                                    L1MAX + FONOWIN</a>
                                            </li>
                                            <li><a class="nav-link small" href="triogamerdgobasico.php">INTERNET + DGO
                                                    BÁSICO + FONOWIN</a>
                                            </li>
                                            <li><a class="nav-link small" href="triogamerdgofull.php">INTERNET + DGO
                                                    FULL + FONOWIN</a>
                                            </li>
                                            <li><a class="nav-link small" href="duogamertvbasico.php">INTERNET + WINTV
                                                    BÁSICO</a></li>
                                            <li><a class="nav-link small" href="duogamertvplus.php">INTERNET + WINTV
                                                    PLUS</a></li>

                                            <li><a class="nav-link small" href="duogamerdgol1max.php">INTERNET + DGO
                                                    L1MAX</a>
                                            </li>
                                            <li><a class="nav-link small" href="duogamerdgobasico.php">INTERNET + DGO
                                                    BÁSICO</a>
                                            </li>
                                            <li><a class="nav-link small" href="duogamerdgofull.php">INTERNET + DGO
                                                    FULL</a>
                                            </li>
                                            <li><a class="nav-link small" href="duogamerfonowin.php">INTERNET +
                                                    FONOWIN</a></li>

                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link fw-bold" href="#submenu5" data-bs-toggle="collapse"
                                            aria-expanded="false" id="link-submenu5">RUC 20</a>
                                        <ul class="collapse list-unstyled" id="submenu5">
                                            <li><a class="nav-link small" href="#"> DÚO Y TRÍO WIN (CON WINTV Y
                                                    FONOWIN)</a></li>
                                            <li><a class="nav-link small" href="#">DÚO Y TRÍO WIN (CON DGO Y
                                                    FONOWIN)</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link fw-bold" href="#submenu6" data-bs-toggle="collapse"
                                            aria-expanded="false" id="link-submenu6">VERISURE</a>
                                        <ul class="collapse list-unstyled" id="submenu6">
                                            <li><a class="nav-link small" href="#">PLANES WIN PROTECCIÓN</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Opción 3</a>
                            </li>
                        </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Opción 3</a>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>

                            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                                <div class="pt-3">
                                    <div class="main-content">

                                        <main>
                                            <div class="page-content">
                                                <div class="analytics">
                                                    <div id="panelWIN" class="panel">
                                                        <div class="page-header">
                                                            <div class="centered-images">
                                                                <img src="assets/triowinsub1.png" alt="TRIO WIN1"
                                                                    class="img-top">
                                                            </div>
                                                            <center>
                                                                <img src="assets/triowin1.png" alt="TRIO WIN"
                                                                    class="img-center">
                                                            </center>
                                                        </div>
                                        </main>
                                        <div class="row justify-content-cente" style="padding-top: 15px;">
                                            <div class="col-md-4" style="padding-top: 1px;">
                                                <div class="col-md-12">
                                                    <center>
                                                        <span
                                                            style="font-size: 36px; font-weight: bold; display: inline-block; font-family: sans-serif; color: #f4691c;">WIN</span>
                                                        <span
                                                            style="font-size: 36px; font-weight: bold;  display: inline-block; font-family: sans-serif; color: #333333;">TV</span>
                                                        <span
                                                            style="font-size: 36px;font-weight: bold;  display: inline-block; font-family: sans-serif; color: #f4691c;">BASICO</span>
                                                    </center>

                                                    <div class="table-responsive">
                                                        <table class="table text-center">
                                                            <thead>
                                                                <th>
                                                                    <button
                                                                        style="background-color: #ff6600; color: white;font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px;">
                                                                        INDEX2</button>

                                                                </th>

                                                                <th>
                                                                    <button
                                                                        style="background-color: #ff6600; color: white;font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px;">PRECIO
                                                                        PROMO</button>
                                                                </th>
                                                                <th>
                                                                    <button
                                                                        style="background-color: #fff; color: #ff6600;font-weight: bold; padding: 10px 20px; border: 1px solid #ff6600; border-radius: 5px;">PRECIO
                                                                        REGULAR</button>

                                                                </th>


                                                            </thead>
                                                            <tbody>
                                                                <td>

                                                                    <span class="crossed-out">200 Mbps</span><br>
                                                                    <span class="big-number">400 Mbps</span><br>
                                                                    <span class="small-text">DE VELOCIDAD</span>

                                                                </td>

                                                                <td>
                                                                    <button
                                                                        style="background-color: #ff6600; color: white;font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px;">-</button>
                                                                </td>
                                                                <td>
                                                                    <button
                                                                        style="background-color: #fff; color: #ff6600;font-weight: bold; padding: 10px 20px; border: 1px solid #ff6600; border-radius: 5px;">S/.
                                                                        124</button>
                                                                </td>
                                                                </td>
                                                            </tbody>
                                                            <tbody>
                                                                <td>

                                                                    <span class="crossed-out">300 Mbps</span><br>
                                                                    <span class="big-number">600 Mbps</span><br>
                                                                    <span class="small-text">DE VELOCIDAD</span>

                                                                </td>

                                                                <td>
                                                                    <button
                                                                        style="background-color: #ff6600; color: white;font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px;">S/.
                                                                        114</button>
                                                                </td>
                                                                <td>
                                                                    <button
                                                                        style="background-color: #fff; color: #ff6600;font-weight: bold; padding: 10px 20px; border: 1px solid #ff6600; border-radius: 5px;">S/.
                                                                        144</button>
                                                                </td>
                                                                </td>
                                                            </tbody>
                                                            <tbody>
                                                                <td>

                                                                    <span class="crossed-out">400 Mbps</span><br>
                                                                    <span class="big-number">800 Mbps</span><br>
                                                                    <span class="small-text">DE VELOCIDAD</span>

                                                                </td>

                                                                <td>
                                                                    <button
                                                                        style="background-color: #ff6600; color: white;font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px;">S/.
                                                                        124</button>
                                                                </td>
                                                                <td>
                                                                    <button
                                                                        style="background-color: #fff; color: #ff6600;font-weight: bold; padding: 10px 20px; border: 1px solid #ff6600; border-radius: 5px;">S/.
                                                                        154</button>
                                                                </td>
                                                                </td>
                                                            </tbody>
                                                            <tbody>
                                                                <td>
                                                                    <span class="big-number">600 Mbps</span><br>
                                                                    <span class="small-text">DE VELOCIDAD</span>

                                                                </td>

                                                                <td>
                                                                    <button
                                                                        style="background-color: #ff6600; color: white;font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px;">S/.
                                                                        134</button>
                                                                </td>
                                                                <td>
                                                                    <button
                                                                        style="background-color: #fff; color: #ff6600;font-weight: bold; padding: 10px 20px; border: 1px solid #ff6600; border-radius: 5px;">S/.
                                                                        164</button>
                                                                </td>
                                                                </td>
                                                            </tbody>
                                                            <tbody>
                                                                <td>
                                                                    <span class="big-number">1000 Mbps</span><br>
                                                                    <span class="small-text">DE VELOCIDAD</span>

                                                                </td>

                                                                <td>
                                                                    <button
                                                                        style="background-color: #ff6600; color: white;font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px;">S/.
                                                                        154</button>
                                                                </td>
                                                                <td>
                                                                    <button
                                                                        style="background-color: #fff; color: #ff6600;font-weight: bold; padding: 10px 20px; border: 1px solid #ff6600; border-radius: 5px;">S/.
                                                                        184</button>
                                                                </td>
                                                                </td>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="padding-top: 1px;">
                                                <div class="col-md-12">
                                                    <center>
                                                        <span
                                                            style="font-size: 36px; font-weight: bold; display: inline-block; font-family: sans-serif; color: #f4691c;">WIN</span>
                                                        <span
                                                            style="font-size: 36px; font-weight: bold;  display: inline-block; font-family: sans-serif; color: #333333;">TV</span>
                                                        <span
                                                            style="font-size: 36px;font-weight: bold;  display: inline-block; font-family: sans-serif; color: #f4691c;">BASICO</span>
                                                    </center>

                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <th class="text-center">
                                                                    <button
                                                                        style="background-color: #ff6600; color: white;font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px;">BENEFICIOS
                                                                    </button>
                                                                </th>
                                                            </thead>
                                                            <tbody>
                                                                <td>
                                                                    <span class="big-number-custom1"><span
                                                                            class="checkmark">&#10003;</span> Más de 40
                                                                        canales locales
                                                                        e internacionales</span><br>

                                                                </td>
                                                            </tbody>
                                                            <tbody>
                                                                <td>
                                                                    <span class="big-number-custom1"><span
                                                                            class="checkmark">&#10003;</span> Grabación
                                                                        de 5 hrs de
                                                                        contenido
                                                                    </span><br>

                                                                </td>
                                                            </tbody>
                                                            <tbody>
                                                                <td>
                                                                    <span class="big-number-custom1"><span
                                                                            class="checkmark">&#10003;</span> Pausa y
                                                                        retrocede en vivo
                                                                        hasta
                                                                        7 días</span><br>

                                                                </td>
                                                            </tbody>
                                                            <tbody>
                                                                <td>
                                                                    <span class="big-number-custom1"><span
                                                                            class="checkmark">&#10003;</span> Disfrútalo
                                                                        hasta en 4
                                                                        dispositivos
                                                                        en simultáneo (hasta 2 tv/winbox
                                                                        + 2 móvil/web)</span><br>

                                                                </td>
                                                            </tbody>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <div class="table-responsive">
                                                            <table class="table text-center">
                                                                <thead>
                                                                    <th colspan="2" class="text-center">
                                                                        <button
                                                                            style="font-size: 1.5em; background-color: #ff6600; color: white;font-weight: bold; padding: 13px 49px; border: none; border-radius: 36px;">INSTALACION
                                                                            GRATIS
                                                                        </button>
                                                                    </th>
                                                                </thead>
                                                                <tbody>

                                                                    <td style="background-color: #FE580A;">
                                                                        <img src="assets/winbox.png"
                                                                            alt="Descripción de la imagen"
                                                                            class="img-fluid">
                                                                    </td>
                                                                    <td style="background-color: #FE580A;">
                                                                        <button
                                                                            style="font-size: 1.2rem; background-color: #FE580A; color: white;font-weight: bold; padding: 10px 20px; border: 1px solid #FE580A; border-radius: 5px;">Llévate
                                                                            1 WINBOX a S/ 15 mensuales
                                                                            Máx. 2 unidades por cliente

                                                                            <br><span class="small-text1">Sujeto a
                                                                                evaluación
                                                                                crediticia</span>
                                                                        </button>
                                                                    </td>
                                                                </tbody>
                                                                <tbody>

                                                                    <td style="background-color: #FE580A;">
                                                                        <img src="assets/fonowin1.png"
                                                                            alt="Descripción de la imagen"
                                                                            class="img-fluid">
                                                                    </td>
                                                                    <td style="background-color: #FE580A;">
                                                                        <button
                                                                            style="font-size: 1.2rem; background-color: #FE580A; color: white;font-weight: bold; padding: 10px 20px; border: 1px solid #FE580A; border-radius: 5px;">Solicita
                                                                            la App FONOWIN en la post venta al
                                                                            707-3000 Opción 2, una vez se encuentre
                                                                            activo tu servicio de telefonía fija.
                                                                        </button>
                                                                    </td>
                                                                </tbody>
                                                                <tbody>
                                                                    <td style="background-color: #FE580A;">
                                                                        <img src="assets/mesh1.png"
                                                                            alt="Descripción de la imagen"
                                                                            class="img-fluid">
                                                                    </td>
                                                                    <td style="background-color: #FE580A;">
                                                                        <button
                                                                            style="font-size: 1.2rem;background-color: #FE580A; color: white;font-weight: bold; padding: 10px 20px; border: 1px solid #FE580A; border-radius: 5px;">Solicita
                                                                            el cableado
                                                                            de 2 Mesh GRATIS<br><span
                                                                                class="small-text1"> (solo para el
                                                                                plan de 1000 Mbps)</span>
                                                                        </button>
                                                                    </td>
                                                                </tbody>
                                                        </div>

                                                        <div class="image-with-text">
                                                            <img src="assets/wintvbasico.png"
                                                                alt="Descripción de la imagen" class="img-fluid">
                                                            <div class="overlay">
                                                                <div class="text">WINTV BASICO</div>
                                                            </div>
                                                        </div>
                                                        <!--<div class="row mb-3">
                                            <div class="col-md-12">
                                                <img src="assets/wintvbasico.png" alt="Descripción de la imagen 3"
                                                    class="img-fluid">
                                            </div>
                                        </div>-->
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                            </main>
                    </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

                ?>

</body>

</html>
<?php
// Contenido de la página index1
echo '<h1>Index 1</h1>';
echo '<p>Contenido de la página index2</p>';