import "slick-carousel";
import "../styles/index.scss";
import $ from "jquery";
import "./modules/animation/animations.js";
import "./modules/animation/anime.js";
import "./modules/slick-config/product-slider";
import Search from "./modules/Search";

var search = new Search();

$(function () {
  var ulLi = $("nav ul > li"),
    fa = $("nav ul > li:last-of-type a .fa");

  $("nav ul").append("<ol></ol>");

  $("nav").each(function () {
    for (var i = 0; i <= ulLi.length - 12; i++) {
      $("nav ul > ol").append("<li>" + i + "</li>");
      $("nav ul > ol > li")
        .eq(i)
        .html(ulLi.eq(i + 0).html());
    }
  });

  $("nav ul > li:last-of-type").on("click", function () {
    fa.toggleClass("fa-bars");
    fa.toggleClass("fa-times");
    $(this).parent().children("ol").slideToggle(500);
  });
});
