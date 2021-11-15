/**
 * Clase principal para controlar un Slider
 */
export default class Slider {
	selector: any;
	timer: any;
	time: number = 0;
	pos: number = 0;
	size: number;
	contador: number = 0;

	constructor(selector: string, time: number) {
		this.selector = document.querySelectorAll(selector);
		this.time = time
		this.contador = ( time / 1000 );
	}
    
	public getSliders = () => {
        return this.selector;
	};
    
	/**
	 * este metodo es el inicializador de la clase Slider
	 */
	public start = () => {
        this.size = this.selector.length;
        // this.NextSlider()
        this.timer = setInterval(()=>{ this.countSlider() }, 1000);
	};

	private countSlider = () => 
	{
		if(this.time < this.contador){
			this.time++;
		}else{
			this.NextSlider()
		}
		// console.log(this.time)
	}

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
		this.time = 0;

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
		this.time = 0;

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
