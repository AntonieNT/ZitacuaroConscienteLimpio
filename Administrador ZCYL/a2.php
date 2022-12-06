<?php
include('config.php');
$consulta = 'SELECT * FROM materiales';
$con = conectar();
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.6.13, mobirise.com">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image:src" content="">
    <meta property="og:image" content="">
    <meta name="twitter:title" content="Lista de materiales-Administrador">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/2038361f-83a2-447b-9ae2-a81bb8fa96dc-removebg-preview.png"
        type="image/x-icon">
    <meta name="description" content="">


    <title>Lista de materiales-Administrador</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload"
        href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900&display=swap" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900&display=swap">
    </noscript>
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">




</head>

<body>

    <section data-bs-version="5.1" class="menu menu2 cid-tmt32aNgDq" once="menu" id="menu2-1v">

        <nav class="navbar navbar-dropdown navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="https://mobiri.se">
                            <img src="assets/images/2038361f-83a2-447b-9ae2-a81bb8fa96dc-removebg-preview-684x365.png"
                                alt="Mobirise Website Builder" style="height: 3rem;">
                        </a>
                    </span>
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-7"
                            href="a1.html">Zitácuaro Consciente y Limpio<br></a></span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse"
                    data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                        <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-info display-5"
                                href="index.html#header14-1j" data-toggle="dropdown-submenu" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false"><span
                                    class="mobi-mbri mobi-mbri-features mbr-iconfont mbr-iconfont-btn"></span>Catálogo</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-899"><a
                                    class="dropdown-item text-info text-primary display-5"
                                    href="a4.php">Productos<br></a><a
                                    class="dropdown-item text-info text-primary display-5"
                                    href="a2.php">Materiales<br></a></div>
                        </li>
                        <li class="nav-item dropdown"><a
                                class="nav-link link text-info text-primary dropdown-toggle show display-5"
                                href="t8.php" data-toggle="dropdown-submenu" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false"><span
                                    class="mobi-mbri mobi-mbri-users mbr-iconfont mbr-iconfont-btn"></span>Perfiles</a>
                            <div class="dropdown-menu show" aria-labelledby="dropdown-938" data-bs-popper="none"><a
                                    class="text-info text-primary dropdown-item display-5" href="a8.php">Usuarios</a><a
                                    class="text-info text-primary show dropdown-item display-5"
                                    href="a10.php">Trabajadores</a></div>
                        </li>
                        <li class="nav-item dropdown"><a
                                class="nav-link link text-info text-primary dropdown-toggle show display-5"
                                href="t6.html" data-toggle="dropdown-submenu" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false"><span
                                    class="mobi-mbri mobi-mbri-contact-form mbr-iconfont mbr-iconfont-btn"></span>Solicitudes</a>
                            <div class="dropdown-menu show" aria-labelledby="dropdown-803" data-bs-popper="none"><a
                                    class="text-info text-primary dropdown-item display-5"
                                    href="a6.html">Citas&nbsp;</a><a
                                    class="text-info text-primary show dropdown-item display-5"
                                    href="a12.html">Trabajadores</a></div>
                        </li>
                        <li class="nav-item dropdown"><a
                                class="nav-link link text-info text-primary dropdown-toggle display-5" href="t6.html"
                                data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                aria-expanded="false"><span
                                    class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>Sesión</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-832"><a
                                    class="text-info text-primary show dropdown-item display-5"
                                    href="../Visitante ZCYL/v1.html">Cerrar Sesión</a></div>
                        </li>
                    </ul>


                </div>
            </div>
        </nav>
    </section>

    <section data-bs-version="5.1" class="form6 cid-tmwgxZyg49" id="form6-2w">
    <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Materiales</strong>
                </h3>

            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                    <form action="../Administrador ZCYL/CRUD_Materiales/registrar.php" method="POST"
                        class="mbr-form form-with-styler mx-auto" data-form-title="Form Name">

                        <div class="dragArea row">
                            <div class="col-12 form-group mb-3" data-for="url">
                                <input type="text" name="nombre" placeholder="Nombre" data-form-field="url"
                                    class="form-control" value="" id="url-form5-j">
                            </div>
                            <div class="col-12 form-group mb-3" data-for="url">
                                <input type="text" name="valor" placeholder="Valor en puntos" data-form-field="url"
                                    class="form-control" value="" id="url-form5-j">
                            </div>
                            <div class="container">
                                <div class="row justify-content-end">
                                    <div class="col-12 col-lg-9">
                                        <div class="mbr-section-btn mt-3">
                                            <input type="submit" value="Registrar Material"
                                                class="btn btn-info display-7">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="header5 cid-tmEF3H7HyR" id="header5-49">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-9">
                    <div class="mbr-section-btn mt-3"><a class="btn btn-info display-7" href="a2.php"><span
                                class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>Buscar Material</a></div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="gallery3 cid-tmt3Km7ACI" id="gallery3-25">


        <div class="container-fluid">
            <div class="mbr-section-head">
                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Lista de
                        materiales</strong><strong><br></strong></h4>

            </div>
            <div class="row mt-4">
            <div class="row mt-4">
                <?php
            if ($result = mysqli_query($con, $consulta)) {
                while ($row = $result->fetch_assoc()) {
                    $field1name = $row["idmateriales"];
                    $field2name = $row["nombre"];
                    $field3name = $row["valorpuntos"];
            ?>
                <div class="item features-image сol-12 col-md-6 col-lg-4 active">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="assets/images/materiales.jpg" alt="Mobirise Website Builder"
                                data-slide-to="0" data-bs-slide-to="0">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-7">
                                <strong>Nombre:</strong>
                                <?php echo $field2name ?>
                            </h5>

                            <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                <strong>Valor en puntos:</strong>
                                <?php echo $field3name ?>
                            </p>
                        </div>
                        <div class="mbr-section-btn item-footer mt-2">

                            <a class="btn btn-info display-4"
                                href="a15.php?id=<?php echo $field1name ?>&nombre=<?php echo $field2name ?>&valor=<?php echo $field3name ?>">Editar</a>
                                <a class="btn btn-info display-4" href="..\Administrador ZCYL\CRUD_Materiales\eliminar.php?id=<?php echo $field1name ?>">Eliminar</a>
                        </div>
                    </div>
                </div>
                <?php
                }
                $result->free();
            }
                ?>
            </div>
            </div>
        </div>
    </section>
    <section class="display-7"
        style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;">
        <a href="https://mobiri.se/2777008"
            style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"></a>
        <p style="margin: 0;text-align: center;" class="display-7"> &#8204;</p><a style="z-index:1"
            href="https://mobirise.com/website-design-software.html"></a>
    </section>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/ytplayer/index.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/formoid/formoid.min.js"></script>


</body>

</html>