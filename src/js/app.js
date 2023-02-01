// When the user scrolls down 80px from the top of the document,
// change the header's background
// window.onscroll = function () {
//   scrollFunction();
// };

// function scrollFunction() {
//   if (body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
//     header.style.backgroundColor = '#121416f2';
//   } else {
//     header.style.backgroundColor = '';
//   }
// }

// When the user scrolls down 80px from the top of the document, the header hides.
// When the user scrolls up, the header shows.
const burger = document.querySelector('.hamburger');
const mobileMenu = document.querySelector('.mobile-menu');
const memberMenu = document.querySelector('.member-menu');
const body = document.body;
const header = document.querySelector('.header');
// const scrollUp = 'scroll-up';
// const scrollDown = 'scroll-down';
// let lastScroll = 0;

// window.addEventListener('scroll', () => {
//   const currentScroll = window.pageYOffset;
//   if (currentScroll <= 50) {
//     body.classList.remove(scrollUp);
//     mobileMenu.classList.remove('show');
//     memberMenu.classList.remove('show');
//     burger.classList.remove('is-active');
//     return;
//   }

//   if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
//     // down
//     body.classList.remove(scrollUp);
//     body.classList.add(scrollDown);
//     mobileMenu.classList.remove('show');
//     memberMenu.classList.remove('show');
//     burger.classList.remove('is-active');
//   } else if (
//     currentScroll < lastScroll &&
//     body.classList.contains(scrollDown)
//   ) {
//     // up
//     body.classList.remove(scrollDown);
//     body.classList.add(scrollUp);
//   }
//   lastScroll = currentScroll;
// });

// Mobile menus
let showMenu = false;

function closeMenu() {
  burger.classList.remove('is-active');
  mobileMenu.classList.remove('show');
  showMenu = false;
}

function toggleMenu() {
  if (!showMenu) {
    burger.classList.add('is-active');
    mobileMenu.classList.add('show');
    showMenu = true;
  } else {
    burger.classList.remove('is-active');
    mobileMenu.classList.remove('show');
    showMenu = false;
  }
}

burger.addEventListener('click', toggleMenu);
window.addEventListener('resize', closeMenu);

// Stop transitions on page load
const classes = document.body.classList;
let timer = 0;
window.addEventListener('resize', function () {
  if (timer) {
    clearTimeout(timer);
    timer = null;
  } else classes.add('stop-transitions');

  timer = setTimeout(() => {
    classes.remove('stop-transitions');
    timer = null;
  }, 100);
});

window.addEventListener('scroll', function () {
  showFunction();
});

var animateHTML = function () {
  var elems, windowHeight;

  var init = function () {
    elems = document.getElementsByClassName('hidden');
    windowHeight = window.innerHeight;
    _addEventHandlers();
  };

  var _addEventHandlers = function () {
    window.addEventListener('scroll', _checkPosition);
    window.addEventListener('resize', init);
  };
  var _checkPosition = function () {
    for (var i = 0; i < elems.length; i++) {
      var posFromTop = elems[i].getBoundingClientRect().top;
      if (posFromTop - windowHeight <= 0) {
        elems[i].className = elems[i].className.replace('hidden', 'reveal');
      }
    }
  };

  return {
    init: init,
  };
};

animateHTML().init();
