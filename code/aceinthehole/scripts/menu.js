$(document).ready(function() {

    // alert("jquery is running");

    if (window.matchMedia("(max-width: 480px)").matches) {
        $(".cross").hide();
        $(".menu").hide();
    }

        $(".hamburger").on("click", function () {

            $(".menu").slideToggle("slow");

            $(".hamburger").hide();

            $(".cross").show();

        });

        $(".cross").on("click", function () {

            $(".menu").slideToggle("slow");

            $(".cross").hide();

            $(".hamburger").show();

        });


});