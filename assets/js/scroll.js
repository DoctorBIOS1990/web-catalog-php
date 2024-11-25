
const header = document.querySelector("header");
window.addEventListener("scroll", function(){

    /*header.classList.toggle("sticky", window.scrollY > 100);*/
    if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
});
