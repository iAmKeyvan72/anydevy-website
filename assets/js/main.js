"use strict";

$.fn.isInViewport = function () {
  var t = $(this).offset().top,
    e = t + $(this).outerHeight(),
    a = $(window).scrollTop(),
    i = a + $(window).height();
  return e > a && t < i;
};

$.fn.isInTop = function () {
  var w = $(window).scrollTop();
  for (let i = 0; i < $(this).length; i++) {
    if ($(this).eq(i).isInViewport()) {
      var t = $(this).eq(i).offset().top - 40;
      if (t <= w) {
        return 1;
      }
    }
  }
  return 0;
};

var footerflag = false;
var i = 0;
var txt = "Be comfortable,";
var target = "footer-title1";

const typeInit = (text, id) => {
  i = 0;
  txt = text;
  target = id;
  typeWriter();
};

function typeWriter() {
  if (i < txt.length) {
    document.getElementById(target).innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, 50);
  }
}

$(window).on("resize scroll load", function () {
  if ($(".dark-bg").isInTop()) {
    $(".menu-toggle").removeClass("dark");
    $(".new-quote-btn").removeClass("btn-blue").addClass("btn-pink");
  } else {
    $(".menu-toggle").addClass("dark");
    $(".new-quote-btn").removeClass("btn-pink").addClass("btn-blue");
  }

  let wTop = $(window).scrollTop();

  if ($("#footer").isInViewport() && !footerflag) {
    typeInit("Be comfortable,", "footer-title1");
    setTimeout(() => {
      typeInit("say", "footer-title2");
    }, 1000);
    setTimeout(() => {
      typeInit("hello", "footer-title3");
    }, 1300);
    setTimeout(() => {
      typeInit(":]", "footer-title4");
    }, 1600);
    footerflag = true;
  }
});

$(".menu-toggle").on("click", () => {
  $(".navbar").toggleClass("open");
  $(".menu-toggle").toggleClass("open");
});

// footer input
$(".input-with-label").val("");

$(".input-effect input").focusout(function () {
  if ($(this).val() != "") {
    $(this).addClass("has-content");
  } else {
    $(this).removeClass("has-content");
  }
});

// end of footer input

// alert modal closing

$(window).on("click", function (e) {
  if (!$(e.target).hasClass("alert-modal")) {
    $(".alert-modal").fadeOut();
  }
});

// end of alert modal closing
