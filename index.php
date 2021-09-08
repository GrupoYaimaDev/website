<!DOCTYPE html>
<?php include './scripts/main.php'; ?>
<html lang="es-VE">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | GRUPOYAIMA.COM</title>
    <link rel="stylesheet" href="./css/app.css?<?php echo $date ?>">
    <link rel="shortcut icon" href="./src/logo-verde.png" type="image/x-icon">
</head>

<body class="bg-black" style="background: linear-gradient(357deg, #040404, #313131);">
    <nav class="main full" id="mainNav">
        <div class="max-w-5xl mx-auto flex justify-between">
            <ul class="mainMenu hidden md:flex">
                <li><a href="#" class="active">Inicio</a></li>
                <li><a href="#">Productos<i class="flex items-center fi fi-sr-angle-small-down"></i></a></li>
                <li><a href="#">Nosotros</a></li>
                <!-- <li><a href="#">Menu<i class="flex items-center fi fi-sr-angle-small-down"></i></a></li> -->
            </ul>
            <img src="./src/logo-w.png" id="mainLogo" alt="" style="filter: drop-shadow(-1px 0px 0px orange) saturate(1.3);" class="logo h-16 py-1" srcset="">
        </div>
    </nav>
    <header class="main h-screen bg-blue-to_null_invert overflow-hidden cut-bottom">
        <figure class="mask no_top bg-img bg-main sliders hidden animated fadeInLeft" id="main-picture" style="background-image: url(./src/slide1.jpg);">
            <figcaption>Alta-tecnologia he innovacion.</figcaption>
        </figure>
        <figure class="mask no_top bg-img bg-main sliders hidden animated fadeInLeft" id="main-picture" style="background-image: url(./src/slide2.jpg);">
            <figcaption>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</figcaption>
        </figure>
        <figure class="mask no_top bg-img bg-main sliders hidden animated fadeInLeft" id="main-picture" style="background-image: url(./src/slide3.jpg);">
            <figcaption>Materia prima, solo de las mejores siembras del paiz.</figcaption>
        </figure>
        <div class="absolute left-0 top-0 w-full h-screen bg-red z-10 flex flex-col justify-center items-center">
            <picture class="logo-second bg-white bg-opacity-30">
                <img src="./src/logo-verde.png" alt="" srcset="">
            </picture>
            <p class="text-main mt-4 pt-8 text-black text-center tracking-wider uppercase">
            <span class="popBold text-3xl">GRUPO YAIMA, C.A</span><br>
            <span class="text-xl">
                Comercializadora de <span class="popBold">Insumos</span> y <span class="popBold">Agro-insumos</span>.
            </span>
            </p>
        </div>
        <button id="buttonSliderPrev" class="z-20 text-5xl text-white z-10 left-4 absolute flex items-center hover:text-yellow buttonSlider"> <i class="fi fi-sr-angle-left"></i> </button>
        <button id="buttonSliderNext" class="z-20 text-5xl text-white z-10 right-4 absolute flex items-center hover:text-yellow buttonSlider"> <i class="fi fi-sr-angle-right"></i> </button>
        <div class="z-10 bottom-3 absolute flex items-center gap-4">
            <button class="text-md text-white flex items-center hover:text-yellow myButtonSlider"> <i class="fi fi-sr-circle-small"></i> </button>
            <button class="text-md text-white flex items-center hover:text-yellow myButtonSlider"> <i class="fi fi-sr-circle-small"></i> </button>
            <button class="text-md text-white flex items-center hover:text-yellow myButtonSlider"> <i class="fi fi-sr-circle-small"></i> </button>
            <button class="text-md text-white flex items-center hover:text-yellow myButtonSlider"> <i class="fi fi-sr-circle-small"></i> </button>
        </div>
    </header>
    <section class="w-full bg-white py-12 cut-top">
        <article class="text-white relative max-w-5xl rounded-md mx-auto w-full p-4 xl:p-8">
            <div class="flex flex-col justify-center items-center">
                <!-- <picture class="logo-second">
                    <img src="./src/logo-verde.png" alt="" srcset="">
                </picture> -->
                <!-- <p class="mt-4 pt-8 text-black text-center text-xl lg:text-3xl tracking-wider uppercase">
                    Comercializadora de <br> <span class="popBold">Insumos</span> y <span class="popBold">Agro-insumos</span>.
                </p> -->
            </div>
            <!-- <h2>Lorem ipsum dolor sit amet consectetur.</h2> -->
            <!-- <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque saepe assumenda harum nihil minima ad explicabo deserunt, placeat veniam minus eaque quod ratione quasi asperiores exercitationem autem hic, culpa commodi.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque saepe assumenda harum nihil minima ad explicabo deserunt, placeat veniam minus eaque quod ratione quasi asperiores exercitationem autem hic, culpa commodi.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque saepe assumenda harum nihil minima ad explicabo deserunt, placeat veniam minus eaque quod ratione quasi asperiores exercitationem autem hic, culpa commodi.
            </p> -->
        </article>
    </section>
    <section class="bg-lightwhite py-12 inner-block" style="background-image: url(./src/pattern.png)">
        <article class="max-w-5xl mx-auto w-full grid md:grid-cols-2">
            <picture class="md:rounded-l-md bg-cover h-300p md:h-full" style="background-image: url(./src/main-4.jpg);"></picture>
            <div class=" bg-white rounded-r-md shadow-prop p-4">
                <h2>GRUPO YAIMA, C.A</h2>
                <div class="decoration-header">
                    <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <i class="text-lg fi fi-sr-shopping-cart-add"></i>
                    <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                </div>
                <p class="p-8 text-sm">
                    En GRUPO YAIMA, C.A Estamos comprometidos con ofrecerte solo lo mejor, por eso te ofrecemos un gran apartado en lo mejor de productos agro-quimicos, organi-quimico y materias primas para la elaboración de productos agropecuarios. Para cumplir con tus expectativas contamos con grandes alianzas comerciales, para garantizar la disponibilidad y entrega de nuestros productos y materias primas.
                </p>
            </div>
        </article>
        <article class="productsContainer max-w-5xl mx-auto py-8">
            <div class="Card">
                <img src="./src/productos/trigo.jpg" alt="">
                <p>
                    <i class="fi fi-sr-box-alt"></i>
                    <b>
                        materias primas
                    </b>
                    <!-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. -->
                </p>
                <a href="#">ver productos</a>
            </div>
            <div class="Card">
                <img src="./src/productos/soya.jpg" alt="">
                <p>
                    <i class="fi fi-sr-box-alt"></i>
                    <b>
                        materias procesadas
                    </b>
                    <!-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. -->
                </p>
                <a href="#">ver productos</a>
            </div>
            <div class="Card">
                <img src="./src/productos/harina.jpg" alt="">
                <p>
                    <i class="fi fi-sr-box-alt"></i>
                    <b>
                        Harinas
                    </b>
                    <!-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. -->
                </p>
                <a href="#">ver productos</a>
            </div>
            <div class="Card">
                <img src="./src/productos/metrionina.png" alt="">
                <p>
                    <i class="fi fi-sr-box-alt"></i>
                    <b>
                        Organiquimicos
                    </b>
                    <!-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. -->
                </p>
                <a href="#">ver productos</a>
            </div>
        </article>
    </section>
    <section class="w-full bg-blue py-12">
        <article class="text-white max-w-5xl rounded-md mx-auto w-full p-4 xl:p-8">
            <h2 class="pb-4">Siempre en constante expansion</h2>
            <div class="decoration-header pb-4">
                    <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <i class="text-yellow text-lg fi fi-sr-signal-alt-2"></i>
                    <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </div>
            <p class="text-center ">
                En <span class="popBold">GRUPO YAIMA, C.A</span>: para cumplir con las expectativas de nuestros clientes, nos mantenemos en constante mejoramiento he innovando en cada momento con cada uno de nuestros productos. Para alcanzar las expectativas de nuestros distinguidos clientes y las exigencias del mercado actual.
            </p>
        </article>
    </section>
    <section class="main bg-grad-bottom h-500p flex items-center justify-center">
        <picture class="absolute top-0 left-0 w-full h-full mask bg-fixed invert bg-img bg-main" style="background-image: url(./src/img1.jpg);"></picture>
        <div class="title">
            <p>
                La mejor calidad y la mayor cantidad.
            </p>
        </div>
    </section>
    <section class="w-full bg-green">
    </section>
    <section class="main bg-blue-to_green_invert h-500p flex items-center justify-center">
        <picture class="absolute top-0 left-0 w-full h-full bg-fixed mask invert bg-img bg-main" style="background-image: url(./src/main-3.jpg);"></picture>
        <div class="title">
            <p>
                Siempre apoyando al pequeño y mediano agricultor.
            </p>
        </div>
    </section>
    <section class="main bg-blue flex items-center justify-center py-4">
    <article class="text-white max-w-5xl rounded-md mx-auto w-full p-4 xl:p-8">
            <h2 class="pb-4">Con nuestros convenios de produccion</h2>
            <div class="decoration-header pb-4">
                    <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <i class="text-yellow text-lg fi fi-sr-plus"></i>
                    <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </div>
            <p class="text-center">
                En <span class="popBold">GRUPO YAIMA, C.A</span>: para aportar ayudas a nuestros agricultores, realizamos convenios de producción y comercialización agrícola venezolana. Ayudando así al crecimiento de nuestros pequeños y medianos productores agrícolas.
            </p>
        </article>
    </section>
    <section class="main bg-blue-to_green h-500p flex items-center justify-center">
        <picture class="absolute top-0 left-0 w-full h-full bg-fixed mask invert bg-img bg-main" style="background-image: url(./src/img3.jpg);"></picture>
        <div class="title">
            <p>
                Te Ofrecemos el servicio de Nutricionista Veterinario.
            </p>
        </div>
    </section>
    <section class="main bg-green-to-black py-8 flex items-center justify-center">
    <article class="text-white max-w-5xl rounded-md mx-auto w-full p-4 xl:p-8">
            <h2 class="pb-4">Disponibilidad a todas partes del paiz</h2>
            <div class="decoration-header pb-4">
                    <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <i class="text-yellow text-lg fi fi-sr-marker"></i>
                    <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </div>
            <p class="text-center">
                en <span class="popBold">GRUPO YAIMA, C.A</span> : para cumplir con las expectativas de nuestros clientes,nos mantenemos en constante mejoramiento he innovando en cada momento con cada uno de nuestros productos. para alcanzar las expectativas de nuestros distinguidos clientes y las exigencias del mercado actual.
            </p>
        </article>
    </section>
    <footer class="bg-black-b w-full py-8">
    <div class="grid max-w-5xl mx-auto grid gap-8 grid-cols-3">
        <div>
            <!-- <ul class="menu">
                <li>MENU</li>
                <li><a href="#">inicio</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Nosotros</a></li>
            </ul> -->
        </div>
        <div class="flex justify-center">
            <img src="./src/logo-verde.png" class="h-200p" alt="">
        </div>
        <div></div>
        <div class="col-span-3 text-white text-center grid">
            <b>
                WWW.GRUPOYAIMA.COM
            </b>
            <span>
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