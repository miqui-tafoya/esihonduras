class Slider {
    constructor(id) {
        this.id = id;
        this.slider = document.getElementById(id);
        this.slides = document.getElementById("ytvideo-slides");
        this.slideItems = [...this.slides.children];
        this.init();
    }
    activeSlide(index) {
        this.active = index;
        this.slideItems.forEach((item) => item.classList.remove('active'));
        this.slideItems[index].classList.add('active');
    }
    prev() {
        if (this.active > 0) {
            this.activeSlide(this.active - 1);
        } else {
            this.activeSlide(this.slideItems.length - 1);
        }
    }
    next() {
        if (this.active < this.slideItems.length - 1) {
            this.activeSlide(this.active + 1);
        } else {
            this.activeSlide(0);
        }
    }
    addNav() {
        const sNext = this.slider.querySelector('#' + this.id + '-next');
        const sPrev = this.slider.querySelector('#' + this.id + '-prev');
        sNext.addEventListener('click', this.next);
        sPrev.addEventListener('click', this.prev);
    }
    init() {
        this.prev = this.prev.bind(this);
        this.next = this.next.bind(this);
        this.activeSlide(0);
        this.addNav();
    }
}
new Slider('youtube-slider');