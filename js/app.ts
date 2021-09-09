import Slider from './ts/Slider';
import WOW from './frameworks/wow';

let slider:any = new Slider('.sliders',15000);

document.addEventListener('DOMContentLoaded',handlerStart);

function handlerStart(event:any){

    window.addEventListener('scroll',handlerScroll);
    document.addEventListener('click',handlerClick);
    let wow = new WOW({
        offset: 100
    })
    
    wow.init();
    
    console.log('start APP.')
    console.log(slider.getSliders() )
    return null;
}

function handlerScroll(event:any){

    let $nav = document.getElementById('mainNav');

    console.log($nav.classList);

    if(window.scrollY > 70){
        if(!$nav.classList.contains('active')){
            $nav.classList.add('active');
        }
    }else{
        if($nav.classList.contains('active')){
            $nav.classList.remove('active');
        }

    }

    console.log(window.scrollY)
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
