$(document).ready(function() {
   $('.popup-youtube').magnificPopup({
   disableOn: 700,
   type: 'iframe',
   mainClass: 'mfp-fade',
   removalDelay: 160,
   preloader: false,

   fixedContentPos: false
  });
});

$('.test-popup-link').magnificPopup({
    type: 'image'
  });


function view(n) {
    style = document.getElementById(n).style;
    style.display = (style.display == 'block') ? 'none' : 'block';
  }
