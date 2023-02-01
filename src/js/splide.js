import '@splidejs/splide/css/core';
import Splide from '@splidejs/splide';

// Initiate Splide slider
new Splide('.splide', {
  type: 'loop',
  perPage: 1,
  rewind: true,
  autoplay: true,
  arrows: false,
  gap: '20rem',
  width: '120rem',
  focus: 'center',
  padding: '2rem',
  autoHeight: true,
}).mount();
