import { getDataFromUrl } from "./getDataFromUrl";

interface int_LoadProducts {
	index: number;
}

interface int_product {
	id: number;
	name: string;
	cat: number;
	number: string;
	desc: string;
	img:string;
}

/**
 * esta funcion se encarga de cargar los productos del sitio web.
 * @param e
 */
export function LoadProducts(
	cate: number = 0,
	prop: int_LoadProducts = { index: 0 }
) {
	getDataFromUrl("./scripts/products.json").then((r) => {
		if (r != null) {
            let data: any[]
			if (cate > 0) {
				data = r.filter((x: int_product) => { return x.cat === cate });
			}else{
                data = r
            }
            console.log(data, prop.index);
            createCard("productsContainer", data);
		}
	});
}

export const categorias_productos = [
	"Materia Prima",
	"Materia Procesada",
	"Organiquimicos",
	"Aceites",
]

export function createCard(selector: string, data: any[]) {
	let $element: any = document.getElementById(selector);

	data.map((i:int_product) => {
		let item: any = `
            <div class="wow fadeIn Card">
                <img class="logo" src="./src/logo-verde.png" alt="grupoyaima | logo de grupo yaima">
                <img src="./src/productos/${i.img}" alt="grupoyaima | ${i.name}">
                <p style="text-align:center;justify-content:center">
                    <b>
                        ${i.name}
                    </b>
                    <!-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. -->
                </p>
                <p>
                    <i class="fi fi-sr-box-alt"></i>
                    <span class="uppercase">
                        ${categorias_productos[i.cat]}
                    </span>
                    <!-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. -->
                </p>
				<span class="grid grid-cols-2 gap-2 p-2">
                <a class="no_m" target="_blank" href="https://api.whatsapp.com/send/?phone=584244320503&text=Hola, me gustaria obtener información acerca del precio y disponibilidad del producto, ${i.name}"><i class="fi fi-sr-smartphone"></i>WHATSAPP</a>
                <a class="no_m" target="_blank" href="mailto:grupoyaima2020@gmail.com"><i class="fi fi-sr-comment-alt"></i>CORREO</a>
				</span>
            </div>
        `;

		$element.innerHTML += `${item}`;
	});
}
