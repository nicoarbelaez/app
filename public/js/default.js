$(document).ready(function() {
    var currentURL = window.location.href;
    var currentURL = currentURL.split('/');
    var currentURL = '#' + currentURL[4];
    // selecionar el padre del elemento actual
    var currentURL = $(currentURL).parent();
    $(currentURL).css({
        'color':'#fff',
        'border-bottom':'2px solid #ccc'
    });
})

// window.addEventListener('scroll', function() {
//     var nav = document.querySelector('nav');
//     nav.classList.toggle('sticky', window.scrollY > 240);
// });

$(window).scroll(function() {
    var nav = $('nav');
    nav.toggleClass('sticky', $(this).scrollTop() > 240);
});