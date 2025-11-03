import { Tab } from '../tab/Tab'
import Swiper from 'swiper'
import { Dropdown } from '../dropdown/Dropdown'
import { AdaptiveDropdown } from '../dropdown/AdaptiveDropdown'
import { Navigation } from 'swiper/modules'
import { Expander } from '../expander/Expander'

export default () => {
  const tabs = document.querySelector('.work-tabs')

  if (tabs) {
    initDropdowns()
    initExpander()
    initInnerSliders()
    initInnerTabs()
    initTab()
    initSlider()
  }

  function initDropdowns() {
    const dropdownList = tabs.querySelectorAll('.work-dropdown')

    if (dropdownList.length) {
      dropdownList.forEach(dropdown => {
        new AdaptiveDropdown({
          selectors: {
            el: dropdown,
            dropdown: '.work-dropdown',
            current: '.dropdown-current',
            currentText: '.dropdown-current__text',
            value: '.work-dropdown__button'
          },
          defaultCurrentText: 'Выберите город',
          maxWidth: 1200,
        })
      })
    }
  }

  function initExpander() {
    const expanderList = tabs.querySelectorAll('.work-expander')

    if (expanderList.length) {
      expanderList.forEach(expander => {
        new Expander({
          selectors: {
            expander: expander, // блок-контейнер
            toggle: '.work-expander__toggle', // переключатель состояний

            hidden: '.work-expander-hidden', // блок с контентом, который сворачивается

          },
          classes: {
            opened: 'expander_expand', // модификатор развернутого состояния
            unset: 'expander_unset' // модификатор состояния, при котором плагин неактивен для данного разрешения экрана
          },
          text: {
            expanded: 'Свернуть', // текст переключателя в развернутом положении
            collapsed: 'Показать все', // текст переключателя в свернутом положении
          },
          _delta: 100, // разница между максимальной высотой и высотой контента, при которой плагин неактивен,
        })
      })
    }
  }

  function initInnerSliders() {
    const innerSliderList = document.querySelectorAll('.work-item-slider')

    if (innerSliderList.length) {
      innerSliderList.forEach(innerSlider => {
        new Swiper(innerSlider, {
          modules: [Navigation],
          spaceBetween: 20,
          navigation: {
            prevEl: ".work-item-slider__arrow_prev",
            nextEl: ".work-item-slider__arrow_next",
            disabledClass: "work-item-slider__arrow_disabled",
            lockClass: "work-item-slider__arrow_lock",
          }
        })
      })
    }
  }

  function initTab() {
    new Tab({
      selectors: {
        tab: '.work-tabs',
        link: '.work-tabs-slide__button',
        panel: '.work-panel',
        panelContainer: '.work-panels'
      },
      classes: {
        panelIn: "tab-panel_in",
        panelActive: "tab-panel_active",
        panel: "tab-panel",
        linkActive: 'work-tabs-slide__button_active'
      },
    })
  }

  function initInnerTabs() {
    const innerTabsList = document.querySelectorAll('.work-inner-tabs')

    if (innerTabsList.length) {
      innerTabsList.forEach(innerTabs => {
        new Tab({
          selectors: {
            tab: innerTabs,
            link: '.work-dropdown__button',
            panel: '.work-inner-tabs-panel',
            panelContainer: '.work-inner-tabs-panels'
          },
          classes: {
            panelIn: "tab-panel_in",
            panelActive: "tab-panel_active",
            panel: "tab-panel",
            linkActive: 'work-dropdown__button_tab-active'
          },
        })
      })
    }
  }

  function initSlider() {
    const activeTab = tabs.querySelector('.work-tabs-slide__button')

    let index = 0

    if (activeTab && activeTab.dataset.index) index = activeTab.dataset.index

    new Swiper('.work-tabs-slider', {
      slidesPerView: 'auto',
      spaceBetween: 12,
      initialSlide: index,
    })
  }
}
