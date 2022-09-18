// const produitcontainers=[...document.querySelector('produit-containe')];
// const iconleft=[...document.querySelectorAll('.iconright')];
// const iconright=[...document.querySelectorAll('.iconleft')];

// produitcontainers.forEach((item,i)=>{

// 	let containerDimenstions=item.getBoundingClientRect();
// 	let containerWidth=containerDimenstions.width ;
// 	iconright[i].addEventListener('click',()=>{
// 		item.scrollleft+=containerWidth;

// 	})
// 	iconleft[i].addEventListener('click',()=>{
// 		item.scrollleft-=containerWidth;

// 	})
		
	
// })
const swiper = new Swiper('.produit-containe', {
  // Optional parameters
  direction: 'vertical',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
//   scrollbar: {
//     el: '.swiper-scrollbar',
//   },
});
