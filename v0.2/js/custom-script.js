/*================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================

NOTE:
------
PLACE HERE YOUR OWN JS CODES AND IF NEEDED.
WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR CUSTOM SCRIPT IT'S BETTER LIKE THIS. */
$(document).ready(function () {
    //$('.modal').modal();
    //    $(".right li:first-child").hide();
    $(".logout-button").on("click", function () {
        swal({
            title: "Logout?"
            , text: "Have you saved all your changes?"
            , type: "warning"
            , showCancelButton: true
            , confirmButtonColor: "#DD6B55"
            , confirmButtonText: "Yes, logout now!"
            , closeOnConfirm: false
        }, function () {
            window.open("login.html", "_self");
        });
    });
    //menu change container
    $("li>.add-order-menu").on("click", function () {
        $(".container-main>div").each(function () {
            if ($(this).hasClass("content-active")) {
                $(this).removeClass("content-active");
            }
        });
        $(".content-new-order").toggleClass("content-active");
        $(".side-nav>li").each(function () {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
            }
        });
        $(this).parent().addClass("active");
    });
    $("li>.order-records-menu").on("click", function () {
        $(".container-main>div").each(function () {
            if ($(this).hasClass("content-active")) {
                $(this).removeClass("content-active");
            }
        });
        $(".content-order-records").toggleClass("content-active");
        $(".side-nav>li").each(function () {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
            }
        });
        $(this).parent().addClass("active");
    });
    $("li>.products-menu").on("click", function () {
        $(".container-main>div").each(function () {
            if ($(this).hasClass("content-active")) {
                $(this).removeClass("content-active");
            }
        });
        $(".content-products").toggleClass("content-active");
        $(".side-nav>li").each(function () {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
            }
        });
        $(this).parent().addClass("active");
    });
    $("li>.agents-stockists-menu").on("click", function () {
        $(".container-main>div").each(function () {
            if ($(this).hasClass("content-active")) {
                $(this).removeClass("content-active");
            }
        });
        $(".content-agent").toggleClass("content-active");
        $(".side-nav>li").each(function () {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
            }
        });
        $(this).parent().addClass("active");
    });
    $("li>.calendar-menu").on("click", function () {
        $(".side-nav>li").each(function () {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
            }
        });
        $(this).parent().addClass("active");
    });
    $("li>.settings-menu").on("click", function () {
        $(".side-nav>li").each(function () {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
            }
        });
        $(this).parent().addClass("active");
    });
});