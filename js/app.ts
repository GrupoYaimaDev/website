import Slider from './ts/Slider';
import WOW from './frameworks/wow';
import { LoadProducts } from './ts/function';



let slider = new Slider('.sliders',15000);

document.addEventListener('DOMContentLoaded',handlerStart);

const dataPage = {
	index: () => {
        slider.start()
		// console.log("estoy en index");
	},
	productos: LoadProducts,
	default: null,
};


function handlerStart(event:any){

    window.addEventListener('scroll',handlerScroll);
    document.addEventListener('click',handlerClick);

    let $data_page: any = document.querySelector('html');
    $data_page = $data_page.getAttribute('data-page');
    $data_page = $data_page.replaceAll("'",'"');
    $data_page = JSON.parse($data_page);
    // console.log($data_page)
    dataPage[$data_page[0]]($data_page[1])
    
    let wow = new WOW({
        offset: 100
    })
    wow.init();
    
    return null;
}

function handlerScroll(event:any){

    let $nav = document.getElementById('mainNav');

    // console.log($nav.classList);

    if(window.scrollY > 70){
        if(!$nav.classList.contains('active')){
            $nav.classList.add('active');
        }
    }else{
        if($nav.classList.contains('active')){
            $nav.classList.remove('active');
        }

    }

    // console.log(window.scrollY)
    return null;
}

function handlerClick(event:any){

    let attrib:string = event.target.getAttribute('id');
    console.log(attrib)
    switch (attrib) {
        case 'buttonSliderNext':
                slider.NextSlider()
            break;
        case 'buttonSliderPrev':
                slider.BackSlider()
            break;
    
        default:
            break;
    }
}
