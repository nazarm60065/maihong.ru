export default () => {
  const floatContacts = document.querySelector('.float-contacts')

  if (floatContacts) {
    floatContacts.addEventListener('click', () => {
      if (floatContacts.classList.contains('float-contacts_opened')) {
        floatContacts.classList.remove('float-contacts_opened')
      } else {
        floatContacts.classList.add('float-contacts_opened')
      }
    })
  }
}
