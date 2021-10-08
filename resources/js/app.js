require("./bootstrap");
import $ from "jquery";

$(document).ready(function () {
    $(".header__menu a").filter(function(){
        return this.href === location.href;
      }).addClass('active');

    // MENU BURGER

    $(".button a").click(function () {
        $(".overlay").fadeToggle(200);
        $(this).toggleClass("btn-open").toggleClass("btn-close");
    });

    $(".overlay").click(function () {
        $(".overlay").fadeToggle(200);
        $(".button a").toggleClass("btn-open").toggleClass("btn-close");
    });
});
