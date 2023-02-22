$(document).ready(function() {

    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        allowTouchMove: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        loop: true,
    });

    $('#menuColaboradores, #menuColaboradoresMovil').on('click', () => {
        $('#colaboradores').animatescroll({
            scrollSpeed: 3000,
            easing: 'easeInOutBack'
        });
    })

    $('.navbar-nav>li>a').on('click', () => {
        $('.navbar-collapse').collapse('hide')
        $("#menuModal").modal("hide");
    })

    $("#navbar-toggler").on("click", function() {
        $("#menuModal").modal("show");
    })

    $("#menuInscripcion, #menuInscripcionMovil").on("click", function() {
        $("#inscripcionModal").modal("show");
    })

    $(window).on('resize', function() {
        $("#menuModal").modal("hide");
    });


});
