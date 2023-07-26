import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

class Header {
  constructor() {
    this.setup();
  }

  setup() {
    gsap.registerPlugin(ScrollTrigger);
    
    const header = document.querySelector('.site-header');

    ScrollTrigger.create({
      trigger: document.querySelector('.hero'),
      start: `bottom ${header.getBoundingClientRect().height}`,
      end: `bottom ${header.getBoundingClientRect().height}`,
      onEnter: () => header.classList.add('site-header--solid'),
      onEnterBack: () => header.classList.remove('site-header--solid'),
    });
  }
}

export default Header;