let materialize = {
  instance: undefined,
  mainPageBrandsInterval: undefined,

  initComponents: function () {
    M.Sidenav.init(document.querySelectorAll('.sidenav'), {
      edge: 'right',
      preventScrolling: false
    });

    M.Carousel.init(document.querySelectorAll('.carousel'), {
      dist: 0,
      shift: 20,
      numVisible: 5
    });
    
    M.Tooltip.init(document.querySelectorAll('.tooltipped'), {
      enterDelay: 300
    });
    
    M.Parallax.init(document.querySelectorAll('.parallax'), {});

    M.Tabs.init(document.querySelectorAll('.tabs'), {});

    if (document.querySelectorAll('.autocomplete').length > 0) {
      M.Autocomplete.init(document.querySelector('#mz-portfolio-search'), {
        data: searchArray,
        onAutocomplete: () => {
          document.querySelector('.search-bar__submit').click();
        }
      });
    }
  },

  carouselAutoplay: function (instance, time) {
    if (instance) {
      materialize.mainPageBrandsInterval = setInterval(function () {
        materialize.instance = M.Carousel.getInstance(instance);
        materialize.instance.next();
      }, time);
    }
  },

  carouselPrev: function (instance) {
    materialize.instance = M.Carousel.getInstance(instance);
    materialize.instance.prev();
  },

  carouselNext: function (instance) {
    materialize.instance = M.Carousel.getInstance(instance);
    materialize.instance.next();
  }
} 

export {materialize};
