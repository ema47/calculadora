<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Lateral con Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"> <!-- Estilos adicionales personalizados -->
    <link
        href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Dangrek&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
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
</head>

<body>
    <div class="container-fluid">
        <div class="row">
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
                    </div>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="pt-3">
                    <div class="main-content">

                        <main>
                            <div class="page-content">
                                <div class="analytics">
                                    <div id="triowin2" class="panel">
                                        <div class="page-header">
                                            <center>
                                                <div style="text-align: center;line-height: 1.2;">

                                                    <span
                                                        style="font-size: 85px; font-weight: 800; display: inline-block; font-family: Open Sans,sans-serif; color: white;">DÚO
                                                        WIN</span>
                                                    <br>
                                                    <span
                                                        style="font-size: 32px; font-weight: 800; display: inline-block; font-family: sans-serif; color: white;">DUPLICA
                                                        TU VELOCIDAD</span> <span
                                                        style="font-size: 32px; font-weight: 800;  display: inline-block; font-family: sans-serif; color: #321712;">X6
                                                        MESES</span><br>
                                                </div>
                                                <i class="bi bi-wifi" style="font-size: 3.0rem;color: white;"></i>

                                                <span
                                                    style="font-size: 36px; font-weight: 800; display: inline-block; font-family: sans-serif; color: white;">
                                                    +  DGO   </span>
                                                <br>
                                                <span
                                                    style="font-size: 15px; font-weight: bold; display: inline-block; font-family: sans-serif; color: white;">INTERNET
                                                    100% FIBRA + TELEVISIÓN DIGITAL (DGO)</span>
                                            </center>
                                        </div>
                        </main>
                        <div class="row justify-content-cente" style="padding-top: 15px;">
                            <div class="col-md-4" style="padding-top: 1px;">
                                <div class="col-md-12">
                                    <center>
                                        <i class="bi bi-wifi" style="font-size: 3.0rem;color: #ff8300;"></i>

                                        <span
                                            style="font-size: 36px; font-weight: 800; display: inline-block; font-family: sans-serif; color: #2e9fe1;">+ D</span>
                                        <span
                                            style="font-size: 36px; font-weight: 800;  display: inline-block; font-family: sans-serif; color: #ff8300;">GO</span>
                                        <span
                                            style="font-size: 36px;font-weight: 800;  display: inline-block; font-family: sans-serif; color: #2e9fe1;">L1MAX </span>
                                    </center>


                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead>
                                                <th>
                                                    <button
                                                        style="font-size: 1.2em;background-color: #ff6600; color: white;font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px;">WIN<br>
                                                        PRO</button>


                                                </th>

                                                <th>
                                                    <button
                                                        style="font-size: 1.2em;background-color: #2e9fe1; color: white;font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px;">PRECIO
                                                        PROMO</button>
                                                </th>
                                                <th>
                                                    <button
                                                        style="font-size: 1.2em;background-color: #fff; color: #ff6600;font-weight: bold; padding: 10px 20px; border: 1px solid #ff6600; border-radius: 5px;">PRECIO
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
                                                        style="font-size: 1.2em;background-color: #2e9fe1; color: white;font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px;">-</button>
                                                </td>
                                                
                                                <td>
                                                    <button
                                                        style="font-size: 1.2em;background-color: #fff; color: #2e9fe1;font-weight: bold; padding: 10px 20px; border: 1px solid #ff6600; border-radius: 5px;">S/.
                                                        148</button>
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
                                                        style="font-size: 1.2em;background-color: #2e9fe1; color: white;font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px;">S/.
                                                        138</button>
                                                </td>
                                                
                                                <td>
                                                    <button
                                                        style="font-size: 1.2em;background-color: #fff; color: #2e9fe1;font-weight: bold; padding: 10px 20px; border: 1px solid #ff6600; border-radius: 5px;">S/.
                                                        168</button>
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
                                                        style="font-size: 1.2em;background-color: #2e9fe1; color: white;font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px;">S/.
                                                        148</button>
                                                </td>
                                               
                                                <td>
                                                    <button
                                                        style="font-size: 1.2em;background-color: #fff; color: #2e9fe1;font-weight: bold; padding: 10px 20px; border: 1px solid #ff6600; border-radius: 5px;">S/.
                                                        178</button>
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
                                                        style="font-size: 1.2em;background-color: #2e9fe1; color: white;font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px;">S/.
                                                        158</button>
                                                </td>
                                              
                                                <td>
                                                    <button
                                                        style="font-size: 1.2em;background-color: #fff; color: #2e9fe1;font-weight: bold; padding: 10px 20px; border: 1px solid #ff6600; border-radius: 5px;">S/.
                                                        188</button>
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
                                                        style="font-size: 1.2em;background-color: #2e9fe1; color: white;font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px;">S/.
                                                        178</button>
                                                </td>
                                              
                                                <td>
                                                    <button
                                                        style="font-size: 1.2em;background-color: #fff; color: #2e9fe1;font-weight: bold; padding: 10px 20px; border: 1px solid #ff6600; border-radius: 5px;">S/.
                                                        208</button>
                                                </td>
                                                </td>
                                            </tbody>
                                            <tbody>
                                                <td>
                                                    <button
                                                        style="font-size: 0.9em;background-color: #321712; color: white;font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px;">NUEVOS
                                                        PLANES</button>
                                                </td>

                                                <td>
                                                    <button
                                                        style="font-size: 0.9em;background-color: #321712; color: white;font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px;">
                                                        x6 meses</button>
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
                                            style="font-size: 36px; font-weight: 800; display: inline-block; font-family: sans-serif; color: #2e9fe1;">D</span>
                                        <span
                                            style="font-size: 36px; font-weight: 800;  display: inline-block; font-family: sans-serif; color: #ff8300;">GO</span>
                                        <span
                                            style="font-size: 36px;font-weight: 800;  display: inline-block; font-family: sans-serif; color: #2e9fe1;">L1MAX </span>
                                    </center>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <th class="text-center">
                                                    <button
                                                        style="background-color: #2e9fe1; color: white;font-weight: bold; padding: 10px 20px; border: none; border-radius: 5px;">BENEFICIOS
                                                    </button>
                                                </th>
                                            </thead>
                                            <tbody>
                                                <td>
                                                    <span class="big-number-custom1"><span
                                                            class="checkmark-custom2">&#10003;</span> Más de 18 canales en vivo para DGO Plan L1MAX
                                                        </span><br>

                                                </td>
                                            </tbody>
                                            <tbody>
                                                <td>
                                                    <span class="big-number-custom1"><span
                                                            class="checkmark-custom2">&#10003;</span> Más de 60 canales en vivo para DGO Plan BASICO
                                                        </span><br>

                                                </td>
                                            </tbody>
                                            <tbody>
                                                <td>
                                                    <span class="big-number-custom1"><span
                                                            class="checkmark-custom2">&#10003;</span> Más de 85 canales en vivo para DGOFull
                                                        </span><br>

                                                </td>
                                            </tbody>
                                            <tbody>
                                                <td>
                                                    <span class="big-number-custom1"><span
                                                            class="checkmark-custom2">&#10003;</span> 02 Dispositivos en simultáneo (DGO L1MAX y BASICO)
                                                    </span><br>

                                                </td>
                                            </tbody>
                                                  <tbody>
                                                <td>
                                                    <span class="big-number-custom1"><span
                                                            class="checkmark-custom2">&#10003;</span> 04 Dispositivos en simultáneo DGO FULL
                                                    </span><br>

                                                </td>
                                            </tbody>
                                            <tbody>
                                                <td>
                                                    <span class="big-number-custom1"><span
                                                            class="checkmark-custom2">&#10003;</span> Con DGO podras crear hasta 5 perfiles</span><br>

                                                </td>
                                            </tbody>
                                            <tbody>
                                                <td>
                                                    <span class="big-number-custom1"><span
                                                            class="checkmark-custom2">&#10003;</span> Retroceder la programacion en curso *Aplica para DGO Full. No aplica para canales Premium (Liga 1 Max</span><br>

                                                </td>
                                            </tbody>
                                           
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <center>
                                        <span
                                            style="font-size: 36px; font-weight: bold;  display: inline-block; font-family: sans-serif; color: #333333;">RECORDATORIO</span>
                                    </center>

                                    <div class="table-responsive">
                                        <table class="table">

                                            <tbody>
                                                <td>
                                                    <span class="big-number-custom1"><span
                                                            style="font-size: 1.2em;color:#2e9fe1;">★</span> 800 Mbps
                                                        opcional un MESH</span><br>

                                                </td>
                                            </tbody>
                                            <tbody>
                                                <td>
                                                    <span class="big-number-custom1"><span
                                                            style="font-size: 1.2em;color:#2e9fe1;">★</span> 600 Mbps
                                                        opcional 2 MESH
                                                    </span><br>

                                                </td>
                                            </tbody>
                                            <tbody>
                                                <td>
                                                    <span class="big-number-custom1"><span
                                                            style="font-size: 1.2em;color:#2e9fe1;">★</span> 1000 Mbps
                                                        opcional 2 MESH</span><br>

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
                                                            style="font-size: 1.5em; background-color: #2e9fe1; color: white;font-weight: 800; padding: 13px 49px; border: none; border-radius: 36px;">!INSTALACION
                                                            GRATIS!
                                                        </button>
                                                    </th>
                                                </thead>
                                                <tbody>
                                                    <td style="background-color: #FE580A;">
                                                        <img src="assets/winbox.png" alt="Descripción de la imagen"
                                                            class="img-fluid" style="max-width: 62px;">
                                                    </td>
                                                    <td style="background-color: #FE580A;">
                                                        <button
                                                            style="font-size: 1rem; background-color: #FE580A; color: white;font-weight: bold; padding: 10px 20px; border: 1px solid #FE580A; border-radius: 5px;">Llévate
                                                            1 WINBOX a S/ 15 mensuales
                                                            Máx. 2 unidades por cliente

                                                            <br><span class="small-text1">Sujeto a evaluación
                                                                crediticia</span>
                                                        </button>
                                                    </td>
                                                </tbody>
                                               
                                                </tbody>
                                                <tbody>
                                                    <td style="background-color: #FE580A;">
                                                        <img src="assets/mesh1.png" alt="Descripción de la imagen"
                                                            class="img-fluid"style="max-width: 62px;">
                                                    </td>
                                                    <td style="background-color: #FE580A;">
                                                        <button
                                                            style="font-size: 1rem;background-color: #FE580A; color: white;font-weight: bold; padding: 10px 20px; border: 1px solid #FE580A; border-radius: 5px;">Solicita
                                                            el cableado
                                                            de 2 Mesh GRATIS<br><span class="small-text1"> (solo para el
                                                                plan de 1000 Mbps)</span>
                                                        </button>
                                                    </td>
                                                </tbody>
                                        </div>

                                        <div class="image-with-text-custom1">
                                            <img src="assets/dgol1max.png" alt="Descripción de la imagen"
                                                class="img-fluid">
                                            <div class="overlay-custom1">
                                                <div class="text">DGOL1MAX</div>
                                            </div>
                                        </div>
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
</body>

</html>