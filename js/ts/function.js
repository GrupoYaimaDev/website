import { getDataFromUrl } from "./getDataFromUrl";
/**
 * esta funcion se encarga de cargar los productos del sitio web.
 * @param e
 */
export function LoadProducts(cate, prop) {
    if (cate === void 0) { cate = 0; }
    if (prop === void 0) { prop = { index: 0 }; }
    getDataFromUrl("./scripts/products.json").then(function (r) {
        if (r != null) {
            var data = void 0;
            if (cate > 0) {
                data = r.filter(function (x) { return x.cat === cate; });
            }
            else {
                data = r;
            }
            console.log(data, prop.index);
            createCard("productsContainer", data);
        }
    });
}
export var categorias_productos = [
    "Materia Prima",
    "Materia Procesada",
    "Organiquimicos",
    "Aceites",
];
export function createCard(selector, data) {
    var $element = document.getElementById(selector);
    data.map(function (i) {
        var item = "\n            <div class=\"wow fadeIn Card\">\n                <img src=\"./src/productos/" + i.img + "\" alt=\"\">\n                <p style=\"text-align:center;justify-content:center\">\n                    <b>\n                        " + i.name + "\n                    </b>\n                    <!-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. -->\n                </p>\n                <p>\n                    <i class=\"fi fi-sr-box-alt\"></i>\n                    <span class=\"uppercase\">\n                        " + categorias_productos[i.cat] + "\n                    </span>\n                    <!-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. -->\n                </p>\n                <a href=\"https://api.whatsapp.com/send/?phone=584124664420&text=Hola, me gustaria obtener informaci\u00F3n acerca del precio y disponibilidad del producto, " + i.name + "\">solicitar <i class=\"fi fi-sr-shopping-cart-add\"></i></a>\n            </div>\n        ";
        $element.innerHTML += "" + item;
    });
}
