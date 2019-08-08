$(function () {

    var  primaryColor = document.documentElement.style
        .setProperty('--site-primary', localStorage.getItem("site-primary"));


    // reloadCss();
    //console.log(primaryColor);
});


/******************************************
 */

"use strict";
$("#search").on("click", function (e) {
    e.preventDefault(), $(".search-box").fadeIn()
}), $(".dismiss").on("click", function () {
    $(".search-box").fadeOut()
}), $(".card-close a.remove").on("click", function (e) {
    e.preventDefault(), $(this).parents(".card").fadeOut()
}), $('[data-toggle="tooltip"]').tooltip(), $(".dropdown").on("show.bs.dropdown", function () {
    $(this).find(".dropdown-menu").first().stop(!0, !0).fadeIn()
}), $(".dropdown").on("hide.bs.dropdown", function () {
    $(this).find(".dropdown-menu").first().stop(!0, !0).fadeOut()
}), $("#toggle-btn").on("click", function (e) {
    e.preventDefault(), $(this).toggleClass("active"), $(".side-navbar").toggleClass("shrinked"), $(".content-inner").toggleClass("active"), $(document).trigger("sidebarChanged"), $(window).outerWidth() > 1183 && ($("#toggle-btn").hasClass("active") ? ($(".navbar-header .brand-small").hide(), $(".navbar-header .brand-big").show()) : ($(".navbar-header .brand-small").show(), $(".navbar-header .brand-big").hide())), $(window).outerWidth() < 1183 && $(".navbar-header .brand-small").show()
}), $(".form-validate").each(function () {
    $(this).validate({
        errorElement: "div",
        errorClass: "is-invalid",
        validClass: "is-valid",
        ignore: ":hidden:not(.summernote, .checkbox-template, .form-control-custom),.note-editable.card-block",
        errorPlacement: function (e, t) {
            e.addClass("invalid-feedback"), console.log(t), "checkbox" === t.prop("type") ? e.insertAfter(t.siblings("label")) : e.insertAfter(t)
        }
    })
});
var e = $("input.input-material");
e.filter(function () {
    return "" !== $(this).val()
}).siblings(".label-material").addClass("active"), e.on("focus", function () {
    $(this).siblings(".label-material").addClass("active")
}), e.on("blur", function () {
    $(this).siblings(".label-material").removeClass("active"), "" !== $(this).val() ? $(this).siblings(".label-material").addClass("active") : $(this).siblings(".label-material").removeClass("active")
});
var t = $(".content-inner");

function n() {
    var e = $(".main-footer").outerHeight();
    t.css("padding-bottom", e + "px")
}

$(document).on("sidebarChanged", function () {
    n()
}), $(window).on("resize", function () {
    n()
}), $(".external").on("click", function (e) {
    e.preventDefault(), window.open($(this).attr("href"))
});

$("#colour").change(function () {
    if ($(this).val() == 'red.premium') {

        document.documentElement.style
            .setProperty('--site-primary', '#ff3f3f');
        localStorage.setItem("site-primary", '#ff3f3f');

        localStorage.setItem("site-primary:hover", '#ff3f3f');

        document.documentElement.style
            .setProperty('--site-secendary', '#f20000');

        localStorage.setItem("site-secendary", '#f20000');

        localStorage.setItem("site-secendary:hover", '#f20000');

    } else if ($(this).val() == 'green.premium') {
        document.documentElement.style
            .setProperty('--site-primary', '#33b35a');
        localStorage.setItem("site-primary", '#33b35a');
        localStorage.setItem("site-primary-hover", '#33b35a');

        document.documentElement.style
            .setProperty('--site-secendary', '#22773c');
        localStorage.setItem("site-secendary", '#22773c');
        localStorage.setItem("site-secendary-hover", '#22773c');

    } else if ($(this).val() == 'pink.premium') {
        document.documentElement.style
            .setProperty('--site-primary', '#ef5285');
        localStorage.setItem("site-primary", '#ef5285');
        localStorage.setItem("site-primary-hover", '#ef5285');

        document.documentElement.style
            .setProperty('--site-secendary', '#e01557');
        localStorage.setItem("site-secendary", '#e01557');
        localStorage.setItem("site-secendary-hover", '#e01557');

    } else if ($(this).val() == 'sea.premium') {
        document.documentElement.style
            .setProperty('--site-primary', '#379392');
        localStorage.setItem("site-primary", '#379392');
        localStorage.setItem("site-primary-hover", '#379392');

        document.documentElement.style
            .setProperty('--site-secendary', '#225b5b');
        localStorage.setItem("site-secendary", '#225b5b');
        localStorage.setItem("site-secendary-hover", '#225b5b');

    } else if ($(this).val() == 'violet.premium') {
        document.documentElement.style
            .setProperty('--site-primary', '#796AEE');
        localStorage.setItem("site-primary", '#796AEE');
        localStorage.setItem("site-primary-hover", '#796AEE');

        document.documentElement.style
            .setProperty('--site-secendary', '#3b25e6');
        localStorage.setItem("site-secendary", '#3b25e6');
        localStorage.setItem("site-secendary-hover", '#3b25e6');

    } else if ($(this).val() == 'blue.premium') {
        document.documentElement.style
            .setProperty('--site-primary', '#2b90d9');
        localStorage.setItem("site-primary", '#2b90d9');
        localStorage.setItem("site-primary-hover", '#2b90d9');

        document.documentElement.style
            .setProperty('--site-secendary', '#1c669c');
        localStorage.setItem("site-secendary", '#1c669c');
        localStorage.setItem("site-secendary-hover", '#1c669c');
    } else {
        document.documentElement.style
            .setProperty('--site-primary', '#796AEE');
        localStorage.setItem("site-primary", '#796AEE');
        localStorage.setItem("site-primary-hoverr", '#796AEE');

        document.documentElement.style
            .setProperty('--site-secendary', '#3b25e6');
        localStorage.setItem("site-secendary", '#3b25e6');
        localStorage.setItem("site-secendary-hover", '#3b25e6');
    }
    document.getElementById('style-switch').classList.remove('show');

});