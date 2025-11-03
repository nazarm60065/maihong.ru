import './templates'

import videos from '../../videos/videos'
import work from '../../work/work'
import header from '../../header/header'
import floatContacts from '../../float-contacts/float-contacts'

import 'swiper/css'
import './index.sass'

document.addEventListener('DOMContentLoaded', () => {
  header()

  videos()
  work()
  floatContacts()
})
