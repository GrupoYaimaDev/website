<!DOCTYPE html>
<?php include './scripts/main.php'; ?>
<html lang="es-VE" data-page="['productos',0]">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos | GRUPOYAIMA.COM</title>


    <meta property="og:title" content="GRUPO YAIMA | Productos"/>
    <meta property="og:site_name" content="Grupo Yaima | Comercializadora de Insumos y Agro-insumos"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.grupoyaima.com/productos" />
    <meta property="og:image" content="https://www.grupoyaima.com/src/opengraph-grupoyaima.jpg"/>
    <meta property="og:description" content="En GRUPO YAIMA, C.A Estamos comprometidos con ofrecerte lo mejor, por eso te ofrecemos un gran apartado en productos agro-quimicos, organi-quimico y materias primas para la elaboración de productos agropecuarios. Para cumplir con tus expectativas contamos con grandes alianzas comerciales, para garantizar la disponibilidad y entrega de nuestros productos y materias primas."/>
    <meta name="description" content="En GRUPO YAIMA, C.A Estamos comprometidos con ofrecerte lo mejor, por eso te ofrecemos un gran apartado en productos agro-quimicos, organi-quimico y materias primas para la elaboración de productos agropecuarios. Para cumplir con tus expectativas contamos con grandes alianzas comerciales, para garantizar la disponibilidad y entrega de nuestros productos y materias primas.">
    <meta name="keywords" content="productos grupoyaima,productos grupo yaima, yaima,productos ABA, comercializadora de insumos,productos agroinsumos, Materia Prima, granos, portuguesa, venezuela grupo yaima, harina, consumo animal, aportando al futuro, somos yaima, sitio web yaima">
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
                <li><a href="./">Inicio</a></li>
                <li><a href="./productos" class="active">Productos</a></li>
                <li><a href="./nosotros">Nosotros</a></li>
                <!-- <li><a href="#">Menu<i class="flex items-center fi fi-sr-angle-small-down"></i></a></li> -->
            </ul>
        </div>
    </nav>
    <header class="main h-600p bg-black overflow-hidden cut-bottom">
        <figure class="mask fadeBottom bg-img bg-main sliders animated fadeInLeft" id="main-picture" style="background-image: url(./src/slide4.jpg);">
            <!-- <figcaption>Alta-tecnologia he innovacion.</figcaption> -->
        </figure>
        <div class="wow bounceIn absolute left-0 top-0 w-full h-600p z-10 flex flex-col justify-center items-center">
            <picture class="logo-second min-size bg-white bg-opacity-30">
                <img src="./src/logo-verde.png" alt="" srcset="">
            </picture>
            <p class="text-main mt-4 pt-8 flex flex-col items-center gap-4 text-black text-center tracking-wider uppercase">
                <span class="text-base md:text-xl">
                    Comercializamos <span class="popBold">lo mejor</span> de nuestra <span class="popBold">Tierra</span>.
                </span>
                <!-- <span class="popBold text-xl md:text-3xl">GRUPO YAIMA, C.A</span><br> -->
                    <a href="#productsContainer" class="blackButton w-200p hover:bg-yellow-button" style="text-shadow: none;">Ver Productos</a>

            </p>
        </div>
    </header>
    <section class="w-full bg-white py-4 cut-top overflow-hidden">
        <article class="wow fadeIn max-w-5xl rounded-md mx-auto w-full p-8">
            <h2 class="pb-4 mt-12 uppercase">Tenemos la mejor selección del mercado</h2>
            <div class="decoration-header pb-4">
                <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <i class="text-yellow text-lg fi fi-sr-box-alt"></i>
                <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </div>
            <p class="text-justify_center ">
                En <span class="popBold">GRUPO YAIMA, C.A</span>: para cumplir con las expectativas de nuestros clientes, nos mantenemos en constante mejoramiento he innovando en cada momento con cada uno de nuestros productos. Para alcanzar las expectativas de nuestros distinguidos clientes y las exigencias del mercado actual.
            </p>
            <!-- <form action="" class="flex gap-4 justify-center mt-8">
                <select class="text-white bg-black bg-opacity-50 p-2 px-4 rounded" name="" id="">
                        <option value="">Materia Prima</option>
                        <option value="">Materia Procesada</option>
                        <option value="">Organiquimicos</option>
                        <option value="">Aceites</option>
                </select>
                <button class="blackButton dot-left bg-op-50 flex hover:bg-blue-button justify-center items-center gap-2"><span>BUSCAR</span><i class="fi fi-sr-search flex items-center"></i></button>
            </form> -->
        </article>
    </section>
    <section class="overflow-hidden bg-lightwhite py-12 inner-block" style="background-image: url(./src/pattern.png)">
        <article id="productsContainer" class="productsContainer max-w-5xl mx-auto py-8">
            
        </article>
    </section>
    <section class="w-full bg-blue py-12 relative z-10">
    </section>
    <section class="main bg-grad-bottom h-500p flex items-center justify-center">
        <picture class="absolute top-0 left-0 w-full h-full mask bg-fixed invert bg-img bg-main" style="background-image: url(./src/main-4.jpg);"></picture>
        <div class="title wow fadeIn">
            <p>
                Materias primas de la mejor calidad a tu alcance.
            </p>
        </div>
    </section>
    <section class="w-full bg-green">
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