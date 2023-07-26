import Slider from 'hd-components/slider';
import { getDevice } from '../helpers';

class TeamSlider {
  constructor() {
    this.setup();
  }

  setup() {
    $('.team-slider__slider').each((i, carousel) => {
      const device = getDevice();
      const $el = $(carousel);
      new Slider($el, {
        cellAlign: 'center',
        wrapAround: true,
        autoPlay: false,
        arrows: $('.team-slider__slider-slide').length > 1 && device != 'phone',
        arrowsClass: 'team-slider__slider-arrow',
        dots: $('.team-slider__slider-slide').length > 1,
        dotsClass: 'team-slider__slider-dots',
      });
    });
  }
}
  
export default TeamSlider;