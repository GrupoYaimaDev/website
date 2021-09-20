<!DOCTYPE html>
<?php include './scripts/main.php'; ?>
<html lang="es-VE" data-page="['nosotros',0]">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros | GRUPOYAIMA.COM</title>
    <link rel="stylesheet" href="./css/app.css?<?php echo $date ?>">
    <link rel="shortcut icon" href="./src/logo-verde.png" type="image/x-icon">
</head>

<body class="bg-black" style="background: linear-gradient(357deg, #040404, #313131);">
    <nav class="main full" id="mainNav">
        <div class="max-w-5xl mx-auto flex justify-between">
            <img src="./src/logo-txt.png" id="mainLogo" alt="Logo Vertical de Grupo Yaima, C.A" style="filter: drop-shadow(-1px 0px 0px trasnparent) saturate(1.3);" class="logo h-12 py-1" srcset="">
            <i class="text-white text-3xl md:hidden flex justify-center items-center w-12 bg-black bg-opacity-10 fi fi-sr-menu-burger" class="buttonMenu">
            </i>
            <ul class="mainMenu hidden md:flex" class="mainMenu">
                <li><a href="./">Inicio</a></li>
                <li><a href="./productos">Productos</a></li>
                <li><a href="./nosotros" class="active">Nosotros</a></li>
                <!-- <li><a href="#">Menu<i class="flex items-center fi fi-sr-angle-small-down"></i></a></li> -->
            </ul>
        </div>
    </nav>
    <header class="main h-600p bg-black overflow-hidden cut-bottom">
        <figure class="mask fadeBottom bg-img bg-main sliders animated fadeInLeft" id="main-picture" style="background-image: url(./src/slide5.jpg);">
            <!-- <figcaption>Alta-tecnologia he innovacion.</figcaption> -->
        </figure>
        <div class="wow bounceIn absolute left-0 top-0 w-full h-600p bg-red z-10 flex flex-col justify-center items-center">
            <picture class="logo-second bg-white bg-opacity-30">
                <img src="./src/logo-verde.png" alt="" srcset="">
            </picture>
            <p class="text-main mt-4 pt-8 flex flex-col items-center gap-4 text-black text-center tracking-wider uppercase">
                <span class="text-base md:text-xl">
                    Aportando al <span class="popBold">futuro</span> con nuestras propias <span class="popBold">manos</span>.
                </span>
                <!-- <span class="popBold text-xl md:text-3xl">GRUPO YAIMA, C.A</span><br> -->
                <!-- <a href="#" class="blackButton w-200p hover:bg-yellow-button" style="text-shadow: none;">Ver Productos</a> -->

            </p>
        </div>
    </header>
    <section class="w-full bg-white py-4 cut-top overflow-hidden">
        <article class="wow fadeIn max-w-5xl rounded-md mx-auto w-full p-8">
            <h2 class="pb-4 mt-12 uppercase">¿Quienes Somos?</h2>
            <div class="decoration-header pb-4">
                <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <i class="text-blue text-lg fi fi-sr-diamond"></i>
                <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </div>
            <p class="text-justify_center ">
                Somos especialistas de la comercialización y distribución de materias primas de alta calidad nutricional, para la producción de productos agro-alimentarios(ABA). somos comercializadora de insumos y agro-insumos con capacidad de respuesta a la alta demanda del mercado.
            </p>
        </article>
    </section>
    <section class="overflow-hidden bg-lightwhite py-12 inner-block" style="background-image: url(./src/pattern.png)">
        <article class="grid max-w-5xl text-white rounded-xl overflow-hidden tracking-wide mx-auto my-8">
            <div class="bg-blue grid grid-cols-2">
                <img src="./src/slide3.jpg" class="h-400p object-cover w-full" alt="">
                <div class="flex flex-col gap-4 justify-center items-center p-8">
                    <h2 class="mt-4">Nuestra Misión</h2>
                    <div class="decoration-header pb-4">
                        <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <i class="text-yellow text-lg fi fi-sr-text-check"></i>
                        <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    </div>
                    <p class="text-sm text-justify_center">
                        Ser un elemento esencial para los clientes con nuestros productos y servicios, diferenciados por la alta calidad y eficiencia que nos caracteriza manteniendo así nuestro apoyo constante al productor nacional.
                    </p>
                </div>
            </div>
            <div class="bg-green grid grid-cols-2">
                <img src="./src/vision.jpg" class="order-1 h-400p object-cover w-full" alt="">
                <div class="flex flex-col gap-4 justify-center items-center p-8">
                    <h2 class="mt-4">Nuestra Visión</h2>
                    <div class="decoration-header pb-4">
                        <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <i class="text-yellow text-lg fi fi-sr-users"></i>
                        <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    </div>
                    <p class="text-sm text-justify_center">
                        Ir hacia un crecimiento rentable y sostenible para mejorar y expandir nuestra gama de productos y servicios, sirviendo mejor a nuestros clientes para ser siempre relevantes en sus vidas y formar relaciones comerciales duraderas.
                    </p>
                </div>
            </div>
        </article>
    </section>
    <section class="w-full bg-blue py-12 relative z-10">
    </section>
    <section class="main bg-grad-bottom h-500p flex items-center justify-center">
        <picture class="absolute top-0 left-0 w-full h-full mask bg-fixed invert bg-img bg-main" style="background-image: url(./src/valores.jpg);"></picture>
        <div class="title wow fadeIn">
            <p>
                Nuestros valores nos definen
            </p>
        </div>
    </section>
    <section class="w-full bg-green">
    </section>
    <section class="main bg-green py-12 flex items-center justify-center overflow-hidden">
        <article class="wow fadeInRight text-white flex flex-wrap justify-center gap-2 rounded-md mx-auto w-full p-4">

            <span class="bg-yellow text-black popBold uppercase tracking-wider rounded bg-opacity-20 px-4 h-8 flex items-center">
                Sustentabilidad
            </span>
            <span class="bg-yellow text-black popBold uppercase tracking-wider rounded bg-opacity-20 px-4 h-8 flex items-center">
                Innovación
            </span>
            <span class="bg-yellow text-black popBold uppercase tracking-wider rounded bg-opacity-20 px-4 h-8 flex items-center">
                Eficiencia
            </span>
            <span class="bg-yellow text-black popBold uppercase tracking-wider rounded bg-opacity-20 px-4 h-8 flex items-center">
                Colaboracion
            </span>
            <span class="bg-yellow text-black popBold uppercase tracking-wider rounded bg-opacity-20 px-4 h-8 flex items-center">
                Respeto
            </span>
            <span class="bg-yellow text-black popBold uppercase tracking-wider rounded bg-opacity-20 px-4 h-8 flex items-center">
                Compromiso
            </span>
            <span class="bg-yellow text-black popBold uppercase tracking-wider rounded bg-opacity-20 px-4 h-8 flex items-center">
                calidad
            </span>
            <!-- <h2 class="pb-4">Disponibilidad a todas partes del país</h2>
            <div class="decoration-header pb-4">
                <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <i class="text-yellow text-lg fi fi-sr-marker"></i>
                <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </div>
            <p class="text-justify_center p-4">
                En <span class="popBold">GRUPO YAIMA, C.A</span> : realizamos ventas en todas partes del país, con la finalidad de expandirnos a cada rincón de nuestra tierra y así ofrecer de manera directa nuestros productos y servicios.
            </p> -->
        </article>
        <!-- <img class="absolute top-0 -mt-16" src="./src/vene.png" alt=""> -->
    </section>
    <section class="borde-y-white bg-white w-full py-8 overflow-hidden">
        <article class="wow animated fadeInLeft max-w-3xl rounded-md mx-auto w-full p-4 xl:p-8">
            <h2 class="pb-4">Medios electronicos y redes sociales</h2>
            <div class="decoration-header pb-4">
                <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <i class="text-blue text-lg fi fi-sr-marker"></i>
                <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </div>
            <p class="text-justify_center p-4">
                Si deseas obtener información acerca de promociones y eventos únete a nuestra comunidad en redes.
            </p>
        </article>
        <div class="mt-8 md:mt-4 flex max-w-xs md:max-w-lg mx-auto flex-wrap gap-8 justify-center">
            <!-- <a class="w-100p h-100p hover:bg-blue bg-black-b rounded-full p-4 wow fadeInLeft" href="#">
                <img src="./src/icons/icon-f.png" class="img-invert w-full" alt="">
            </a> -->
            <a class="w-100p h-100p hover:bg-green bg-black-b rounded-full p-4 wow fadeInUp" href="#">
                <img src="./src/icons/icon-ws.png" class="img-invert w-full" alt="">
            </a>
            <a class="w-100p h-100p hover:bg-blue bg-black-b rounded-full p-4 wow fadeInUp" href="#">
                <img src="./src/icons/icon-tl.png" class="img-invert w-full" alt="">
            </a>
            <a class="w-100p h-100p hover:bg-red bg-black-b rounded-full p-4 wow fadeInRight" href="#">
                <img src="./src/icons/icon-instagram.png" class="img-invert w-full" alt="">
            </a>
        </div>
    </section>
    <footer class="bg-black-b w-full py-24">
        <div class="max-w-5xl mx-auto grid gap-4">
            <div class="flex justify-center pb-12">
                <img src="./src/logo-verde.png" class="wow fadeIn transition h-200p" alt="Logo de Grupo Yaima, C.A">
            </div>
            <div class="flex flex-col md:flex-row gap-4 max-w-5xl">
                <address class="direcciones hover:bg-blue bg-black bg-opacity-30 grid gap-4 rounded-md text-justify_center text-white p-4 px-8">
                    <b>Oficina de Ventas:</b>
                    <span>
                        Calle Fernando Figueredo, entre Av. Bolivar y Ricaurte. Edif: Yaima, Planta Baja, Sector Guarataro. <br> Tinaquillo - Estado Cojedes.
                    </span>
                </address>
                <address class="direcciones hover:bg-blue bg-black bg-opacity-30 grid gap-4 rounded-md text-justify_center text-white p-4 px-8">
                    <b>Planta y Silos:</b>
                    <span>
                        Carretera Nacional, cruce la redoma, Av. los pioneros, local Galpon n°1 Sector Palo Gordo. <br> Araure - Estado Portuguesa.
                    </span>
                </address>
            </div>
            <div class="text-white bg-black p-2 rounded-md bg-opacity-30 text-center flex flex-col md:flex-row justify-center gap-2">
                <b class="lg:border-r-2 border-white pr-2">
                    WWW.GRUPOYAIMA.COM
                </b>
                <span class="lg:border-r-2 border-white pr-2">
                    Todos los derechos reservados 2021 &reg;
                </span>
                <span>
                    GRUPO YAIMA, C.A RIF: J-40942202-0
                </span>
            </div>
        </div>
    </footer>
</body>

<script src="./js/app.js?<?php echo $date ?>" type="module"></script>

</html>