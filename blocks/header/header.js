export default () => {
  const headerSearchModal = document.querySelector('.header-search-modal')

  if (headerSearchModal) {
    headerSearchModal.classList.add('header-search-modal_ready')

    const headerSearchTrigger = document.querySelector('.header-search__trigger'),
      headerSearchOverlay = document.querySelector('.header-search-modal__overlay')

    if (headerSearchTrigger) {
      headerSearchTrigger.addEventListener('click', () => {
        if (document.body.classList.contains('page_search-opened')) {
          document.body.classList.remove('page_search-opened')
        } else {
          document.body.classList.add('page_search-opened')

          const form = headerSearchModal.querySelector('.header-search-form__control')

          if (form) form.focus()
        }
      })
    }

    if (headerSearchOverlay) {
      headerSearchOverlay.addEventListener('click', () => {
        document.body.classList.remove('page_search-opened')
      })
    }
  }
}
