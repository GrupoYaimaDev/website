var Slider = /** @class */ (function () {
    function Slider(selector, time) {
        var _this = this;
        this.pos = 0;
        this.getSliders = function () {
            return _this.selector;
        };
        this.start = function (t) {
            _this.size = _this.selector.length;
            _this.NextSlider();
            _this.timer = setInterval(_this.NextSlider, t);
        };
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
        };
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
        this.start(time);
    }
    return Slider;
}());
export default Slider;
