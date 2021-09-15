/**
 * Clase principal para controlar un Slider
 */
export default class Slider {
	selector: any;
	timer: any;
	time: number = 0;
	pos: number = 0;
	size: number;

	constructor(selector: string, time: number) {
		this.selector = document.querySelectorAll(selector);
		this.time = time
	}
    
	public getSliders = () => {
        return this.selector;
	};
    
	/**
	 * este metodo es el inicializador de la clase Slider
	 */
	public start = () => {
        this.size = this.selector.length;
        this.NextSlider()
        this.timer = setInterval(this.NextSlider, this.time);
	};

	/**
	 * Pasa a mostrar el siguiente Slide del Slider
	 */
	public NextSlider = () => {

		this.count(false);
		for (let i: number = 0; i < this.size; i++) {
			if (this.pos == i) {
				this.selector[this.pos].classList.remove("hidden");
			} else {
				this.selector[i].classList.add("hidden");
			}
		}

	};
	/**
	 * Pasa a mostrar el anterior Slide del Slider
	 */
	public BackSlider = () => {

		this.count(true);
		for (let i: number = 0; i < this.size; i++) {
			if (this.pos == i) {
				this.selector[this.pos].classList.remove("hidden");
			} else {
				this.selector[i].classList.add("hidden");
			}
		}

	};

	private count = (inv:boolean) => {

		if(inv){
			if (this.pos < 1) {
				this.pos = this.size - 1;
			} else {
				this.pos--;
			}
		}else{
			if (this.pos >= this.size - 1) {
				this.pos = 0;
			} else {
				this.pos++;
			}
		}

        // console.log(this.pos,this.size)
	};
}
