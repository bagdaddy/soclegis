// $(document).ready(function(){
//     $('.customer-logos').slick({
//         slidesToShow: 6,
//         slidesToScroll: 1,
//         autoplay: true,
//         autoplaySpeed: 1000,
//         arrows: false,
//         dots: false,
//         pauseOnHover: false,
//         responsive: [{
//             breakpoint: 768,
//             settings: {
//                 slidesToShow: 4
//             }
//         }, {
//             breakpoint: 520,
//             settings: {
//                 slidesToShow: 3
//             }
//         }]
//     });
// });
$(document).ready(function(){
    $(".btn-social").on("click", function (e) {
        e.preventDefault();
        window.open(
            $(this).attr("href"),
            "fbShareWindow",
            "height=450, width=650, top=" +
            (window.innerHeight / 2 - 275) +
            ", left=" +
            (window.innerWidth / 2 - 325) +
            ", toolbar=0, location=0, menubar=0, directories=0, scrollbars=0"
        );
        return false;
    });
})