import { materialize } from './modules/materialize.js';
import { modal } from './modules/modal.js';


let globals = {
  localDomain: 'talento.localhost',
  siteDomain: ['talentodesign.com.br', 'novo.talentodesign.com.br'],

  isLocal: location.origin.match('localhost') ? true : false,

  siteURL: function() {
    let siteURL

    for (let i in globals.siteDomain) {
      if (globals.siteDomain[i] === location.host) {
        siteURL = globals.siteDomain[i]

        break;
      }
    }

    return this.isLocal === true ? globals.localDomain : siteURL;
  },

  userDevice: function() {
    let userAgent = navigator.userAgent

    if (userAgent.match('Android')) {
      return 'android';
    } else if (userAgent.match('iPhone')) {
      return 'ios'
    } else {
      return 'pc'
    }
  },

  isMobile: function() {
    if (window.innerWidth <= 480) {
      return true
    }
    else {
      return false
    }
  },

  protocol: location.protocol + '//',

  root: function() {
    return this.protocol + this.siteURL() + '/'
  },

  homePage: function() {
    return this.root().slice(0, -1)
  },

  isHomePage: function() {
    if (location.href === globals.root() || location.href === globals.homePage() || location.href.match(globals.root() + '#')) {
      return true
    } else {
      return false
    }
  }
}

const navbar = document.getElementsByClassName('top-navbar')[0]
const logoNav = document.getElementsByClassName('nav-logo')[0]
const logoSplash = document.getElementsByClassName('home-logo')[0]

const carousel = document.querySelectorAll('.carousel')
const carouselWrapper = document.querySelector('#carousel-logos-wrapper')

if (carousel.length > 0) {
  carouselWrapper.addEventListener('mouseleave', () => {
    materialize.carouselAutoplay(carousel[0], 2000)
  });
  
  carouselWrapper.addEventListener('mouseenter', () => {
    clearInterval(materialize.mainPageBrandsInterval)
  });
}




document.addEventListener('DOMContentLoaded', function() {
  materialize.initComponents()

  materialize.carouselAutoplay(document.querySelector('#carousel-logos'), 2000)

  fixedLogo()

  changeSkyColor()

  function skyLoop() {
    setTimeout(function() {
      changeSkyColor()

      skyLoop()
    }, 1000)
  }
  skyLoop()
});


document.addEventListener('scroll', function() {
  fixedLogo()
  checkScroll()
});


document.addEventListener('resize', function() {
  fixedLogo()
  checkScroll()
});







function fixedLogo() {
  if (globals.isHomePage() && logoSplash) {
    const top = window.scrollY;

    if (top > 40) {
      logoNav.classList.add('fixed-logo')

      logoSplash.classList.add('fixed-logo')

      navbar.classList.add('shadow-2', 'fixed-nav')
    } else {
      logoNav.classList.remove('fixed-logo')

      logoSplash.classList.remove('fixed-logo')

      navbar.classList.remove('shadow-2', 'fixed-nav')
    }
  } else {
    const top = window.scrollY;

    if (top > 0) {
      navbar.classList.add('shadow-2')
    } else {
      navbar.classList.remove('shadow-2')
    }
  }
}








function changeSkyColor() {
  const date = new Date()
  const hours = date.getHours()

  const sky = document.getElementsByClassName('site-splash')[0]
  const text = document.querySelectorAll('.js-splash-text')
  const logo = document.querySelector('.home-logo')
  const logoWhiteSrc = 'url(./wp-content/themes/talento/img/logo/talento-logo-white.svg)'
  const characters = document.querySelector('.splash-illustration._characters')
  const stars = document.querySelectorAll('.splash-illustration._stars')
  const cloud = document.getElementsByClassName('clouds')[0]
  const textWithWave = document.getElementsByClassName('text-sine-wave')[0]

  let colors = {
    dawn: '#0b192f',
    sunrise: '#5b98d4',
    day: '#cadfff',
    sunset: '#336699',
    night: '#0b192f'
  }


  if (sky !== undefined) {
    // Midnight
    if (hours >= 0 && hours <= 5) {
      sky.style.backgroundColor = colors.dawn
  
      text.forEach((el) => {
        el.classList.add('white-text')
      });
  
      stars.forEach((el) => {
        el.style.display = ''
      });

      logo.style.backgroundImage = logoWhiteSrc
      characters.style.backgroundImage = 'url(./wp-content/themes/talento/img/splash/header-illustration-darker.svg)'
      cloud.style.opacity = '0.2'
      textWithWave.style.color = ''
    }
    
    // Dawn
    else if (hours === 6) {
      sky.style.backgroundColor = colors.sunrise;
  
      text.forEach((el) => {
        el.classList.add('white-text')
      });
  
      stars.forEach((el) => {
        el.style.display = 'none'
      });

      logo.style.backgroundImage = logoWhiteSrc
      characters.style.backgroundImage = 'url(./wp-content/themes/talento/img/splash/header-illustration-darker.svg)'
      cloud.style.opacity = '0.3'
      textWithWave.style.color = '#fff'
    }
  
    // Daylight
    else if (hours >= 7 && hours <= 17) {
      sky.style.backgroundColor = colors.day
  
      text.forEach((el) => {
        el.classList.remove('white-text')
      });
  
      stars.forEach((el) => {
        el.style.display = 'none'
      });

      logo.style.backgroundImage = ''
      characters.style.backgroundImage = ''
      cloud.style.opacity = ''
      textWithWave.style.color = ''
    }
    // Dusk
    else if (hours === 18) {
      sky.style.backgroundColor = colors.sunset
  
      text.forEach((el) => {
        el.classList.add('white-text')
      });
  
      stars.forEach((el) => {
        el.style.display = ''
      });
      
      logo.style.backgroundImage = logoWhiteSrc
      characters.style.backgroundImage = ''
      cloud.style.opacity = '0.2'
      textWithWave.style.color = '#fff'
    }
    // Night
    else if (hours >= 19 && hours <= 23) {
      sky.style.backgroundColor = colors.night
  
      text.forEach((el) => {
        el.classList.add('white-text')
      });
  
      stars.forEach((el) => {
        el.style.display = ''
      });

      logo.style.backgroundImage = logoWhiteSrc
      characters.style.backgroundImage = 'url(./wp-content/themes/talento/img/splash/header-illustration-darker.svg)'
      cloud.style.opacity = '0.1'
      textWithWave.style.color = ''
    }
  }
}




const videos = document.getElementsByTagName("video");

function checkScroll() {
  for (let i = 0; i < videos.length; i++) {
    const video = videos[i]

    const y = video.getBoundingClientRect().top
    const h = video.getBoundingClientRect().height

    if (y > window.innerHeight - h / 2 && y + h >= 115) {
      video.pause()
      // console.log('pause');
    }
    else if (y + h < 115 && y <= window.innerHeight - h / 2) {
      video.pause()
      // console.log('pause');
    }
    else {
      if (globals.isMobile() === false) video.play()
      // console.log('play');
    }
  }
}


const portfolioOpenModal = document.querySelectorAll('.js-open-modal')
const portfolioCloseModal = document.querySelectorAll('.js-close-modal')

portfolioOpenModal.forEach((el) => {
  el.addEventListener('click', function() {
    const modalId = parseInt(this.getAttribute('data-modal-id'))

    console.log(modalId)

    modal.open(modalId, {})
  })
})

portfolioCloseModal.forEach((el) => {
  el.addEventListener('click', function() {
    modal.close()
  })
});





const tabs = document.querySelector('.tabs');
const tabItem = document.querySelectorAll('.tab');

if (tabItem.length > 0) {
  tabItem.forEach((el) => {
    el.addEventListener('click', function() {
      const y = tabs.parentElement.getBoundingClientRect().top + window.scrollY - 56;

      window.scroll({
        top: y,
        behavior: 'smooth'
      });
    })
  })
}