require("./bootstrap");
import $ from "jquery";
import L from "leaflet";
import Dropzone from "dropzone";

$(document).ready(function () {


    $('header .header__menu ul li a').filter(function(){
        return this.href === location.href;
      }).addClass('active');

    setTimeout(function () {
        $(".alert").fadeOut(400);
    }, 3500);

    $(".button a").click(function () {
        $(".overlay").fadeToggle(200);
        $(this).toggleClass("btn-open").toggleClass("btn-close");
    });

    $(".overlay").click(function () {
        $(".overlay").fadeToggle(200);
        $(".button a").toggleClass("btn-open").toggleClass("btn-close");
    });

    // $(".dropdown__services").click(function () {
    //     if ($(this).parent(".particular__dropdown").hasClass("open")) {
    //         $(this).parent(".particular__dropdown").removeClass("open");
    //         $(this).siblings(".dropdown__description").slideUp(500);
    //     } else {
    //         $(".particular__dropdown").removeClass("open");
    //         $(".particular__dropdown .dropdown__description").slideUp(500);
    //         $(this).parent(".particular__dropdown").addClass("open");
    //         $(this).siblings(".dropdown__description").slideDown(500);
    //     }
    // });

    $("#directors").click(function () {
        $(".directors__modal").fadeIn({
            start: function () {
                $(this).css("display", "flex");
            },
        });
        $(".historical").addClass("opacity-0");
        $(".mission").addClass("opacity-0");
        $(".territory").addClass("opacity-0");
        $("header").addClass("opacity-0");
        $("footer").addClass("opacity-0");
    });

    $("#directors__close").click(function () {
        $(".directors__modal").fadeOut();
        $(".historical").removeClass("opacity-0");
        $(".mission").removeClass("opacity-0");
        $(".territory").removeClass("opacity-0");
        $("header").removeClass("opacity-0");
        $("footer").removeClass("opacity-0");
    });

    $("#permanents").click(function () {
        $(".permanents__modal").fadeIn({
            start: function () {
                $(this).css("display", "flex");
            },
        });
        $(".historical").addClass("opacity-0");
        $(".mission").addClass("opacity-0");
        $(".territory").addClass("opacity-0");
        $("header").addClass("opacity-0");
        $("footer").addClass("opacity-0");
    });

    $("#permanents__close").click(function () {
        $(".permanents__modal").fadeOut();
        $(".historical").removeClass("opacity-0");
        $(".mission").removeClass("opacity-0");
        $(".territory").removeClass("opacity-0");
        $("header").removeClass("opacity-0");
        $("footer").removeClass("opacity-0");
    });

});

var mymap = L.map("mapid").setView([49.3072731, 2.7214514], 15);

L.marker([49.3072731, 2.7214514])
    .addTo(mymap)
    .bindPopup(
        "Association Intermediaire<br>3, Square des Merlets - 60410 VERBERIE"
    );
mymap.scrollWheelZoom.disable();

L.tileLayer(
    "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}",
    {
        attribution:
            'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 25,
        id: "mapbox/streets-v11",
        tileSize: 512,
        zoomOffset: -1,
        accessToken:
            "pk.eyJ1IjoiYWx5YXIiLCJhIjoiY2t1d25sanJsMDYwNjJ1cXFkZGUweTV1MiJ9.im61QJxZqpFlimrS18u5TA",
    }
).addTo(mymap);

