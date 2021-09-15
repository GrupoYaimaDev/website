<!DOCTYPE html>
<?php include './scripts/main.php'; ?>
<html lang="es-VE" data-page="['productos',0]">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos | GRUPOYAIMA.COM</title>
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
                <li><a href="./productos" class="active">Productos<i class="flex items-center fi fi-sr-angle-small-down"></i></a></li>
                <li><a href="#">Nosotros</a></li>
                <!-- <li><a href="#">Menu<i class="flex items-center fi fi-sr-angle-small-down"></i></a></li> -->
            </ul>
        </div>
    </nav>
    <header class="main h-600p bg-black overflow-hidden cut-bottom">
        <figure class="mask fadeBottom bg-img bg-main sliders animated fadeInLeft" id="main-picture" style="background-image: url(./src/slide4.jpg);">
            <!-- <figcaption>Alta-tecnologia he innovacion.</figcaption> -->
        </figure>
        <div class="wow bounceIn absolute left-0 top-0 w-full h-600p bg-red z-10 flex flex-col justify-center items-center">
            <picture class="logo-second min-size bg-white bg-opacity-30">
                <img src="./src/logo-verde.png" alt="" srcset="">
            </picture>
            <p class="text-main mt-4 pt-8 flex flex-col items-center gap-4 text-black text-center tracking-wider uppercase">
                <span class="text-base md:text-xl">
                    Comercializamos con solo <span class="popBold">lo mejor</span> de nuestra <span class="popBold">Tierra</span>.
                </span>
                <!-- <span class="popBold text-xl md:text-3xl">GRUPO YAIMA, C.A</span><br> -->
                    <a href="#" class="blackButton w-200p hover:bg-yellow-button" style="text-shadow: none;">Ver Productos</a>

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
            <form action="" class="flex gap-4 justify-center mt-8">
                <select class="text-white bg-black bg-opacity-50 p-2 px-4 rounded" name="" id="">
                    <!-- <optgroup title="mucjos"> -->
                        <option value="">Materia Prima</option>
                        <option value="">Materia Procesada</option>
                        <option value="">Organiquimicos</option>
                        <option value="">Aceites</option>
                    <!-- </optgroup> -->
                </select>
                <button class="blackButton dot-left bg-op-50 flex hover:bg-blue-button justify-center items-center gap-2"><span>BUSCAR</span><i class="fi fi-sr-search flex items-center"></i></button>
            </form>
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
                La mejor calidad y la mayor cantidad.
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
            <h2 class="pb-4">Estamos en redes sociales</h2>
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
            <a class="w-100p h-100p hover:bg-blue bg-black-b rounded-full p-4 wow fadeInLeft" href="#">
                <img src="./src/icons/icon-f.png" class="img-invert w-full" alt="">
            </a>
            <a class="w-100p h-100p hover:bg-blue bg-black-b rounded-full p-4 wow fadeInUp" href="#">
                <img src="./src/icons/icon-tw.png" class="img-invert w-full" alt="">
            </a>
            <a class="w-100p h-100p hover:bg-blue bg-black-b rounded-full p-4 wow fadeInUp" href="#">
                <img src="./src/icons/icon-tl.png" class="img-invert w-full" alt="">
            </a>
            <a class="w-100p h-100p hover:bg-blue bg-black-b rounded-full p-4 wow fadeInRight" href="#">
                <img src="./src/icons/icon-instagram.png" class="img-invert w-full" alt="">
            </a>
        </div>
    </section>
    <footer class="bg-black-b w-full py-24">
        <div class="grid max-w-5xl mx-auto grid gap-8 md:grid-cols-3">
            <div>
                <!-- <ul class="menu">
                <li>MENU</li>
                <li><a href="#">inicio</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Nosotros</a></li>
            </ul> -->
            </div>
            <div class="flex justify-center">
                <img src="./src/logo-verde.png" class="wow fadeIn transition h-200p filter_contrast_0 hover:filter_contrast_1" alt="Logo de Grupo Yaima, C.A">
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