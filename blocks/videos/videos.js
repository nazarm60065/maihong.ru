import Swiper from 'swiper'
import { Navigation } from 'swiper/modules'

export default () => {
  const slider = document.querySelector('.videos-slider')

  if (slider) {
    const wrapper = slider.closest('.videos-slider-wrapper'),
      prevEl = wrapper.querySelector('.videos-slider__arrow_prev'),
      nextEl = wrapper.querySelector('.videos-slider__arrow_next')

    new Swiper(slider, {
      modules: [Navigation],
      slidesPerView: 'auto',
      spaceBetween: 8,
      navigation: {
        prevEl,
        nextEl,
        disabledClass: 'videos-slider__arrow_disabled',
        lockClass: 'videos-slider__arrow_lock',
      },
      breakpoints: {
        1200: {
          spaceBetween: 16,
        }
      }
    })
  }
}
