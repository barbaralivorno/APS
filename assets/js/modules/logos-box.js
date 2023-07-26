import Slider from 'hd-components/slider';

class LogosBox {
  constructor() {
    this.setup();
  }

  setup() {
    $('.logos-box__slider').each((i, carousel) => {
      const $el = $(carousel);
      if($el.find('.slider__slide').length > 4)
        new Slider($el, {
          wrapAround: true,
          groupCells: true,
          groupCells: 4,
        });
    });
  }
}
  
export default LogosBox;