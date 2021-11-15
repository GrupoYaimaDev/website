/**
 * Clase principal para controlar un Slider
 */
var Slider = /** @class */ (function () {
    function Slider(selector, time) {
        var _this = this;
        this.time = 0;
        this.pos = 0;
        this.contador = 0;
        this.getSliders = function () {
            return _this.selector;
        };
        /**
         * este metodo es el inicializador de la clase Slider
         */
        this.start = function () {
            _this.size = _this.selector.length;
            // this.NextSlider()
            _this.timer = setInterval(function () { _this.countSlider(); }, 1000);
        };
        this.countSlider = function () {
            if (_this.time < _this.contador) {
                _this.time++;
            }
            else {
                _this.NextSlider();
            }
            // console.log(this.time)
        };
        /**
         * Pasa a mostrar el siguiente Slide del Slider
         */
        this.NextSlider = function () {
            _this.count(false);
            for (var i = 0; i < _this.size; i++) {
                if (_this.pos == i) {
                    _this.selector[_this.pos].classList.remove("hidden");
                }
                else {
                    _this.selector[i].classList.add("hidden");
                }
            }
            _this.time = 0;
        };
        /**
         * Pasa a mostrar el anterior Slide del Slider
         */
        this.BackSlider = function () {
            _this.count(true);
            for (var i = 0; i < _this.size; i++) {
                if (_this.pos == i) {
                    _this.selector[_this.pos].classList.remove("hidden");
                }
                else {
                    _this.selector[i].classList.add("hidden");
                }
            }
            _this.time = 0;
        };
        this.count = function (inv) {
            if (inv) {
                if (_this.pos < 1) {
                    _this.pos = _this.size - 1;
                }
                else {
                    _this.pos--;
                }
            }
            else {
                if (_this.pos >= _this.size - 1) {
                    _this.pos = 0;
                }
                else {
                    _this.pos++;
                }
            }
            // console.log(this.pos,this.size)
        };
        this.selector = document.querySelectorAll(selector);
        this.time = time;
        this.contador = (time / 1000);
    }
    return Slider;
}());
export default Slider;
