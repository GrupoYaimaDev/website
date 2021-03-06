<!DOCTYPE html>
<?php include './scripts/main.php'; ?>
<html lang="es-VE" data-page="['index','0']">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | GRUPOYAIMA.COM</title>

    <meta property="og:title" content="GRUPO YAIMA | Inicio"/>
    <meta property="og:site_name" content="Grupo Yaima | Comercializadora de Insumos y Agro-insumos"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.grupoyaima.com" />
    <meta property="og:image" content="https://www.grupoyaima.com/src/opengraph-grupoyaima.jpg"/>
    <meta property="og:description" content="En GRUPO YAIMA, C.A Estamos comprometidos con ofrecerte lo mejor, por eso te ofrecemos un gran apartado en productos agro-quimicos, organi-quimico y materias primas para la elaboración de productos agropecuarios. Para cumplir con tus expectativas contamos con grandes alianzas comerciales, para garantizar la disponibilidad y entrega de nuestros productos y materias primas."/>
    <meta name="description" content="En GRUPO YAIMA, C.A Estamos comprometidos con ofrecerte lo mejor, por eso te ofrecemos un gran apartado en productos agro-quimicos, organi-quimico y materias primas para la elaboración de productos agropecuarios. Para cumplir con tus expectativas contamos con grandes alianzas comerciales, para garantizar la disponibilidad y entrega de nuestros productos y materias primas.">
    <meta name="keywords" content="Grupoyaima, Grupo Yaima, Yaima, ABA, Comercializadora de Insumos, Agroinsumos, Materia Prima, Granos, Portuguesa, Venezuela Grupo Yaima, Harina, Consumo Animal, Aportando al Futuro, Somos yaima, Sitio web Yaima">
    <meta name="author" content="Desarrollador web : Elieser Silva novaelirs15@gmail.com | Diseñador Grafico : Jairo Barrios jairo.behance.net@gmail.com">

    <link rel="shortcut icon" href="./src/logo-verde.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/app.css?<?php echo $date ?>">
</head>

<body class="bg-black" style="background: linear-gradient(357deg, #040404, #313131);">
    <nav class="main full" id="mainNav">
        <div class="max-w-5xl mx-auto flex justify-between">
            <img src="./src/logo-txt.png" id="mainLogo" alt="Logo Vertical de Grupo Yaima, C.A" style="filter: drop-shadow(-1px 0px 0px trasnparent) saturate(1.3);" class="logo h-12 py-1" srcset="">
            <label style="font-family: 'uicons-solid-rounded';" for="showerMenu" class="text-white text-3xl md:hidden flex justify-center items-center w-12 bg-black bg-opacity-10 fi fi-sr-menu-burger buttonMenu">
            </label>
            <input type="checkbox" id="showerMenu" class="hidden">
            <ul class="mainMenu md:flex" class="mainMenu">
                <li><a href="./" class="active">Inicio</a></li>
                <li><a href="./productos">Productos</a></li>
                <li><a href="./nosotros">Nosotros</a></li>
                <!-- <li><a href="#">Menu<i class="flex items-center fi fi-sr-angle-small-down"></i></a></li> -->
            </ul>
        </div>
    </nav>
    <header class="main h-screen bg-black overflow-hidden cut-bottom">
        <figure class="mask fadeBottom bg-img bg-main sliders hidden animated fadeInLeft" id="main-picture" style="background-image: url(./src/slide1.jpg);">
            <figcaption>Alta-tecnologia he innovacion.</figcaption>
        </figure>
        <figure class="mask fadeBottom bg-img bg-main sliders hidden animated fadeInLeft" id="main-picture" style="background-image: url(./src/slide2.jpg);">
            <figcaption>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</figcaption>
        </figure>
        <figure class="mask fadeBottom bg-img bg-main sliders hidden animated fadeInLeft" id="main-picture" style="background-image: url(./src/main-4.jpg);">
            <figcaption>Materia prima, solo de las mejores siembras del pais.</figcaption>
        </figure>
        <div class="wow bounceIn absolute left-0 top-0 w-full h-screen z-10 flex flex-col justify-center items-center">
            <picture class="logo-second bg-white bg-opacity-30">
                <img src="./src/logo-verde.png" alt="" srcset="">
            </picture>
            <p class="text-main mt-4 pt-8 text-black text-center tracking-wider uppercase">
                <span class="popBold text-xl md:text-3xl">GRUPO YAIMA, C.A</span><br>
                <span class="text-base md:text-xl">
                    Comercializadora de <span class="popBold">Insumos</span> y <span class="popBold">Agro-insumos</span>.
                </span>
            </p>
        </div>
        <button id="buttonSliderPrev" class="z-20 text-5xl text-white z-10 left-4 absolute hidden md:flex items-center hover:text-yellow buttonSlider"> <i class="fi fi-sr-angle-left"></i> </button>
        <button id="buttonSliderNext" class="z-20 text-5xl text-white z-10 right-4 absolute hidden md:flex items-center hover:text-yellow buttonSlider"> <i class="fi fi-sr-angle-right"></i> </button>
        <div class="z-10 bottom-3 absolute hidden items-center gap-4">
            <button class="text-md text-white flex items-center hover:text-yellow myButtonSlider"> <i class="fi fi-sr-circle-small"></i> </button>
            <button class="text-md text-white flex items-center hover:text-yellow myButtonSlider"> <i class="fi fi-sr-circle-small"></i> </button>
            <button class="text-md text-white flex items-center hover:text-yellow myButtonSlider"> <i class="fi fi-sr-circle-small"></i> </button>
            <button class="text-md text-white flex items-center hover:text-yellow myButtonSlider"> <i class="fi fi-sr-circle-small"></i> </button>
        </div>
    </header>
    <section class="w-full bg-white py-4 cut-top overflow-hidden">
        <article class="wow fadeIn max-w-5xl rounded-md mx-auto w-full p-8">
            <h2 class="pb-4 mt-12 uppercase">Te damos una cordial bienvenida</h2>
            <div class="decoration-header pb-4">
                <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <i class="text-yellow text-lg fi fi-sr-signal-alt-2"></i>
                <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </div>
            <p class="text-justify_center ">
                En <span class="popBold">GRUPO YAIMA, C.A</span>: para cumplir con las expectativas de nuestros clientes, nos mantenemos en constante mejoramiento he innovando en cada momento con cada uno de nuestros productos. Para alcanzar las expectativas de nuestros distinguidos clientes y las exigencias del mercado actual.
            </p>
        </article>
        <article class="relative max-w-5xl grid md:grid-cols-3 rounded-md mx-auto w-full p-4 gap-8 mt-8">
            <div class="wow fadeInLeft flex flex-col justify-center items-center rounded-md gap-6 w-full items-center">
                <img src="./src/circle-1.jpg" class="box-shadow_first_img w-200p rounded-full" alt="">
                <span class="text-sm w-300p tracking-wider text-center">Tenemos lo mejor en materia prima.</span>
                <a href="./productos" class="blackButton hover:bg-yellow-button">ver productos</a>
            </div>
            <div class="wow fadeInUp flex flex-col justify-center items-center rounded-md gap-6 w-full items-center">
                <img src="./src/circle-2.jpg" class="box-shadow_first_img w-200p rounded-full" alt="">
                <span class="text-sm w-300p tracking-wider text-center">Ofrecemos productos Organiquimos, para la nutrici&oacute;n animal.</span>
                <a href="./productos" class="blackButton hover:bg-blue-button">ver Organiquimicos</a>
            </div>
            <div class="wow fadeInRight flex flex-col justify-center items-center rounded-md gap-6 w-full items-center">
                <img src="./src/circle-3.jpg" class="box-shadow_first_img w-200p rounded-full" alt="">
                <span class="text-sm w-300p tracking-wider text-center">Contamos con una gran red Comercial, para la distribuci&oacute;n de nuestros productos.</span>
                <a href="./nosotros" class="blackButton hover:bg-green-button">Mas informaci&oacute;n</a>
            </div>
        </article>
    </section>
    <section class="overflow-hidden bg-lightwhite py-12 inner-block" style="background-image: url(./src/pattern.png)">
        <article class="max-w-5xl mx-auto w-full grid md:grid-cols-2">
            <picture class="md:rounded-l-md bg-cover h-300p md:h-full" style="background-image: url(./src/main-4.jpg);"></picture>
            <div class=" bg-white rounded-r-md shadow-prop p-4">
                <h2>GRUPO YAIMA, C.A</h2>
                <div class="decoration-header">
                    <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <i class="text-lg fi fi-sr-shopping-cart-add"></i>
                    <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                </div>
                <p class="p-8 text-sm text-justify">
                    En GRUPO YAIMA, C.A Estamos comprometidos con ofrecerte lo mejor, por eso te ofrecemos un gran apartado en productos agro-quimicos, organi-quimico y materias primas para la elaboración de productos agropecuarios. Para cumplir con tus expectativas contamos con grandes alianzas comerciales, para garantizar la disponibilidad y entrega de nuestros productos y materias primas.
                </p>
            </div>
        </article>
        <article class="productsContainer max-w-5xl mx-auto py-8">
            <div class="wow fadeInLeft Card">
                <img class="logo" src="./src/logo-verde.png" alt="">
                <img src="./src/productos/afrecho-trigo.jpg" alt="">
                <p>
                    <i class="fi fi-sr-box-alt"></i>
                    <b>
                        materias primas
                    </b>
                    <!-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. -->
                </p>
                <a href="./productos#productsContainer">ver productos</a>
            </div>
            <div class="wow fadeInUp Card">
                <img class="logo" src="./src/logo-verde.png" alt="">
                <img src="./src/productos/melaza.jpg" alt="">
                <p>
                    <i class="fi fi-sr-box-alt"></i>
                    <b>
                        materias procesadas
                    </b>
                    <!-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. -->
                </p>
                <a href="./productos#productsContainer">ver productos</a>
            </div>
            <div class="wow fadeInUp Card">
                <img class="logo" src="./src/logo-verde.png" alt="">
                <img src="./src/productos/harina.jpg" alt="">
                <p>
                    <i class="fi fi-sr-box-alt"></i>
                    <b>
                        Harinas
                    </b>
                    <!-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. -->
                </p>
                <a href="./productos#productsContainer">ver productos</a>
            </div>
            <div class="wow fadeInRight Card">
            <img class="logo" src="./src/logo-verde.png" alt="">
                <img src="./src/productos/metrionina.png" alt="">
                <p>
                    <i class="fi fi-sr-box-alt"></i>
                    <b>
                        Organiquimicos
                    </b>
                    <!-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. -->
                </p>
                <a href="./productos#productsContainer">ver productos</a>
            </div>
        </article>
    </section>
    <section class="w-full bg-blue py-12 relative z-10">
        <img class="w-300p absolute left-0 bottom-0 opacity-10" src="./src/icons/SILOS.png" alt="">
        <article class="wow fadeInLeft text-white max-w-5xl rounded-md mx-auto w-full p-4 xl:p-8">
            <h2 class="pb-4">Siempre en constante expansion</h2>
            <div class="decoration-header pb-4">
                <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <i class="text-yellow text-lg fi fi-sr-signal-alt-2"></i>
                <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </div>
            <p class="text-justify_center p-4">
                En <span class="popBold">GRUPO YAIMA, C.A</span>: para cumplir con las expectativas de nuestros clientes, nos mantenemos en constante mejoramiento he innovando en cada momento con cada uno de nuestros productos. Para alcanzar las expectativas de nuestros distinguidos clientes y las exigencias del mercado actual.
            </p>
        </article>
    </section>
    <section class="main bg-grad-bottom h-500p flex items-center justify-center">
        <picture class="absolute top-0 left-0 w-full h-full mask bg-fixed invert bg-img bg-main" style="background-image: url(./src/img1.jpg);"></picture>
        <div class="title wow fadeIn">
            <p>
                Materias primas de la mejor calidad a tu alcance
            </p>
        </div>
    </section>
    <section class="w-full bg-green">
    </section>
    <section class="main bg-blue-to_green_invert h-500p flex items-center justify-center">
        <picture class="absolute top-0 left-0 w-full h-full bg-fixed mask invert bg-img bg-main" style="background-image: url(./src/main-3.jpg);"></picture>
        <div class="title wow fadeIn">
            <p>
                Siempre apoyando al pequeño y mediano agricultor.
            </p>
        </div>
    </section>
    <section class="main bg-blue flex items-center justify-center py-4 overflow-hidden">
        <article class="wow fadeInRight text-white max-w-5xl rounded-md mx-auto w-full p-4 xl:p-8">
            <h2 class="pb-4">Con nuestros convenios de produccion</h2>
            <div class="decoration-header pb-4">
                <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <i class="text-yellow text-lg fi fi-sr-plus"></i>
                <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </div>
            <p class="text-justify_center p-4">
                En <span class="popBold">GRUPO YAIMA, C.A</span>: para aportar ayudas a nuestros agricultores, realizamos convenios de producción y comercialización agrícola venezolana. Ayudando así al crecimiento de nuestros pequeños y medianos productores agrícolas.
            </p>
        </article>
    </section>
    <section class="main bg-blue-to_green h-500p flex items-center justify-center">
        <picture class="absolute top-0 left-0 w-full h-full bg-fixed mask invert bg-img bg-main" style="background-image: url(./src/img3.jpg);"></picture>
        <div class="title wow fadeIn flex flex-col items-end gap-8">
            <p>
                Te Ofrecemos el servicio de Nutricionista Veterinario.
            </p>
            <!-- <a href="#" class="text-base w-300p blackButton bg-op-50 hover:bg-yellow-button">mas informacion</a> -->
        </div>
    </section>
    <section class="main bg-green py-12 flex items-center justify-center overflow-hidden">
        <article class="wow fadeInRight text-white max-w-5xl rounded-md mx-auto w-full p-4 xl:p-8">
            <h2 class="pb-4">Disponibilidad a todas partes del país</h2>
            <div class="decoration-header pb-4">
                <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <i class="text-yellow text-lg fi fi-sr-marker"></i>
                <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </div>
            <p class="text-justify_center p-4">
                En <span class="popBold">GRUPO YAIMA, C.A</span> : realizamos ventas en todas partes del país, con la finalidad de expandirnos a cada rincón de nuestra tierra y así ofrecer de manera directa nuestros productos y servicios.
            </p>
        </article>
        <img class="absolute top-0 -mt-16" src="./src/vene.png" alt="">
    </section>
    <section class="borde-y-white bg-white w-full py-8 overflow-hidden">
        <article class="wow animated fadeInLeft max-w-3xl rounded-md mx-auto w-full p-4 xl:p-8">
            <h2 class="pb-4">Medios electronicos y redes sociales</h2>
            <div class="decoration-header pb-4">
                <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <i class="text-blue text-lg fi fi-sr-world"></i>
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
            <a target="_blank" class="w-100p h-100p hover:bg-green bg-black-b rounded-full p-4 wow fadeInUp" href="https://api.whatsapp.com/send/?phone=584124664420&text=Hola, Me gustaria obtener mas información acerca de sus productos y servicios.">
                <img src="./src/icons/icon-ws.png" class="img-invert w-full" alt="">
            </a>
            <!-- <a target="_blank" class="w-100p h-100p hover:bg-blue bg-black-b rounded-full p-4 wow fadeInUp" href="#">
                <img src="./src/icons/icon-tl.png" class="img-invert w-full" alt="">
            </a> -->
            <a target="_blank" class="w-100p h-100p hover:bg-red bg-black-b rounded-full p-4 wow fadeInRight" href="https://instagram.com/grupoyaima">
                <img src="./src/icons/icon-instagram.png" class="img-invert w-full" alt="">
            </a>
        </div>
    </section>
    <section class="bg-blue mask no_top w-full py-8 overflow-hidden">
        <article class="wow animated fadeInDown max-w-3xl rounded-md mx-auto text-white w-full p-4 xl:p-8">
            <h2 class="pb-4">Ubicanos</h2>
            <div class="decoration-header pb-4">
                <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <i class="text-yellow text-lg fi fi-sr-marker"></i>
                <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </div>
            <p class="text-justify_center p-4">
               Visitanos en nuestras Oficinas y sedes.
            </p>
        </article>
        <div class="flex flex-col md:flex-row max-w-5xl gap-4 mx-auto mb-12">
                <address class="direcciones bg-black wow fadeInLeft bg-opacity-10 hover:bg-blue grid gap-4 text-justify_center text-white p-4 px-8">
                    <b>Oficina de Ventas:</b>
                    <span>
                        Calle Fernando Figueredo, entre Av. Bolivar y Ricaurte. Edif: Yaima, Planta Baja, Sector Guarataro. <br> Tinaquillo - Estado Cojedes.
                    </span>
                </address>
                <address class="direcciones bg-black wow fadeInRight bg-opacity-10 hover:bg-blue grid gap-4 rounded-md text-justify_center text-white p-4 px-8">
                    <b>Planta y Silos:</b>
                    <span>
                        Carretera Nacional, cruce la redoma, Av. los pioneros, local Galpon n°1 Sector Palo Gordo. <br> Araure - Estado Portuguesa.
                    </span>
                </address>
            </div>
    </section>
    <footer class="bg-black overflow-hidden relative w-full pt-24">
        <div class="max-w-5xl mx-auto grid gap-4">
            <div class="flex justify-center pb-12">
                <img src="./src/logo-verde.png" class="wow fadeIn transition h-200p" alt="Logo de Grupo Yaima, C.A">
            </div>
            <div class="text-white p-2 border-t border-white border-opacity-10 rounded-md bg-opacity-30 text-center flex flex-col md:flex-row justify-center gap-2">
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