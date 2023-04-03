// var swiper = new Swiper(".mySwiper", {
//     loop: true,
//     pagination: {
//       el: ".swiper-pagination",
//     },
//   });
  var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">'+ "</span>";
      },
    },
  });