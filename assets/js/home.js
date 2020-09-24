"use strict";

$(window).on("resize scroll", function () {
  let wTop = $(window).scrollTop();
  if (
    $("#sec-section").offset().top <= wTop &&
    wTop <= $("#footer").offset().top
  ) {
    $(".new-quote-btn").fadeIn();
  } else {
    $(".new-quote-btn").hide();
  }

  if ($(".ourTeam-section").isInViewport()) {
    let i = 0;

    const interval = setInterval(() => {
      $(".team-container div")
        .eq(i)
        .removeClass("opacity0")
        .addClass("scale-in-center");
      i++;
      if (i == 10) {
        clearInterval(interval);
      }
    }, 250);
  }

  if ($(".fourth-section .mobile").isInViewport()) {
    let i = 0;
    const interval = setInterval(() => {
      $(".mobile-app-box .left-col .mobile-app")
        .eq(i)
        .addClass("slide-in-right");
      $(".mobile-app-box .right-col .mobile-app")
        .eq(i)
        .addClass("slide-in-left");
      i++;
      if (i == 10) {
        clearInterval(interval);
      }
    }, 250);
  }

  if ($(".learning-section").offset().top - 700 <= wTop) {
    let i = 0;

    const interval = setInterval(() => {
      $(".learning-contents .learning-item")
        .eq(i)
        .removeClass("opacity0")
        .addClass("slide-in-bottom");
      i++;
      if (i == 10) {
        clearInterval(interval);
      }
    }, 500);
  }
});

//carousel configs

// welcome carousel
let welcomeSlides = $(".welcome-carousel").children(".welcome-item").length;
$(".welcome-carousel").on("initialized.owl.carousel", function (event) {
  let current = event.item.index;
  let text = $(`.welcome-carousel .owl-item`)
    .eq(current)
    .children(".welcome-item")
    .attr("data-value");
  $("#welcome-slider-text").text(text);
  $("#welcome-slider-timer").css("width", "0px");
  $("#welcome-slider-timer").animate(
    {
      width: `100%`,
    },
    2800
  );
  $(".first-section").attr("data-before", text.toUpperCase());
  $(`.welcome-carousel .welcome-item`)
    .eq(current + 1)
    .removeClass("scaleTransform");
  $(`.welcome-carousel .welcome-item`)
    .eq(current - 1)
    .removeClass("scaleTransform");
  $(`.welcome-carousel .welcome-item`).eq(current).addClass("scaleTransform");
});

$(".welcome-carousel").owlCarousel({
  loop: true,
  items: 1,
  center: true,
  nav: false,
  dots: true,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
});

$(".welcome-carousel").on("changed.owl.carousel", function (event) {
  welcomeCallback(event);
});

function welcomeCallback(event) {
  let current = event.item.index;
  let text = $(`.welcome-carousel .owl-item`)
    .eq(current)
    .children(".welcome-item")
    .attr("data-value");
  $("#welcome-slider-text").text("");
  $("#welcome-slider-timer").css("width", "0px");
  $("#welcome-slider-timer").animate(
    {
      width: `100%`,
    },
    2800
  );
  typeInit(text, "welcome-slider-text");
  $(".first-section").attr("data-before", text.toUpperCase());
  $(`.welcome-carousel .welcome-item`)
    .eq(current + 1)
    .removeClass("scaleTransform");
  $(`.welcome-carousel .welcome-item`)
    .eq(current - 1)
    .removeClass("scaleTransform");
  $(`.welcome-carousel .welcome-item`).eq(current).addClass("scaleTransform");
}

$(".first-section").on("mousewheel", ".welcome-carousel .owl-stage", function (
  e
) {
  if (welcomeSlides > 0) {
    if (e.deltaY > 0) {
      $(".welcome-carousel").trigger("next.owl");
    } else {
      $(".welcome-carousel").trigger("prev.owl");
    }
    e.preventDefault();
    welcomeSlides--;
  }
});

// End of welcome carousel

// welcome mobile carousel
$(".welcome-mobile-carousel").on("initialized.owl.carousel", function (event) {
  welcomeMobileCallback(event);
});

$(".welcome-mobile-carousel").owlCarousel({
  loop: true,
  items: 1.5,
  margin: 5,
  autoplay: true,
  autoplayTimeout: 3000,
  nav: false,
  dots: false,
  onDragged: welcomeMobileCallback,
});

$(".welcome-mobile-carousel").on("changed.owl.carousel", function (event) {
  welcomeMobileCallback(event);
});

function welcomeMobileCallback(event) {
  let current = event.item.index;
  let text = $(`.welcome-mobile-carousel .owl-item`)
    .eq(current)
    .children(".welcome-item")
    .attr("data-value");
  $("#welcome-mobile-slider-text").text("");
  $("#welcome-mobile-slider-timer").css("width", "0px");
  $("#welcome-mobile-slider-timer").animate(
    {
      width: `100%`,
    },
    2800
  );
  typeInit(text, "welcome-mobile-slider-text");
  $(".first-section").attr("data-Mobilebefore", text.toUpperCase());
  $(`.welcome-mobile-carousel .welcome-item`)
    .eq(current + 1)
    .removeClass("scaleTransform");
  $(`.welcome-mobile-carousel .welcome-item`)
    .eq(current - 1)
    .removeClass("scaleTransform");
  $(`.welcome-mobile-carousel .welcome-item`)
    .eq(current)
    .addClass("scaleTransform");
}

// End of welcome mobile carousel

// third section carousel

$(".website-carousel").owlCarousel({
  rtl: true,
  items: 3,
  loop: true,
  margin: 10,
  nav: false,
  dots: false,
  onDragged: callback,
});
function callback(event) {
  var item = event.item.index;
  let src = $(`.website-carousel .owl-item`)
    .eq(item - 1)
    .children(".website-img")
    .children("img")
    .attr("src");
  $("#larger-img").attr("src", src);
  $("#web-title").text(
    $(`.website-carousel .owl-item`)
      .eq(item - 1)
      .children(".website-img")
      .attr("data-webName")
  );
  $("#web-year").text(
    $(`.website-carousel .owl-item`)
      .eq(item - 1)
      .children(".website-img")
      .attr("data-year")
  );
}

// End third section carousel

// third mobile section carousel

$(".website-mobile-carousel").on("initialized.owl.carousel", function (event) {
  let current = event.item.index;
  $(`.website-mobile-carousel .website-img`)
    .eq(current - 1)
    .removeClass("scaleTransform");
  $(`.website-mobile-carousel .website-img`)
    .eq(current)
    .addClass("scaleTransform");
  $("#web-mobile-title").text(
    $(`.website-mobile-carousel .owl-item`)
      .eq(current)
      .children(".website-img")
      .attr("data-webName")
  );
  $("#web-mobile-year").text(
    $(`.website-mobile-carousel .owl-item`)
      .eq(current)
      .children(".website-img")
      .attr("data-year")
  );
});

$(".website-mobile-carousel").owlCarousel({
  loop: true,
  items: 1.5,
  margin: 5,
  nav: false,
  dots: false,
  onDragged: websiteMobileCallback,
});

function websiteMobileCallback(event) {
  let current = event.item.index;
  let text = $(`.website-mobile-carousel .owl-item`)
    .eq(current)
    .children(".website-img")
    .attr("data-value");
  $("#web-mobile-title").text(
    $(`.website-mobile-carousel .owl-item`)
      .eq(current)
      .children(".website-img")
      .attr("data-webName")
  );
  $("#web-mobile-year").text(
    $(`.website-mobile-carousel .owl-item`)
      .eq(current)
      .children(".website-img")
      .attr("data-year")
  );
  $(`.website-mobile-carousel .website-img`)
    .eq(current + 1)
    .removeClass("scaleTransform");
  $(`.website-mobile-carousel .website-img`)
    .eq(current - 1)
    .removeClass("scaleTransform");
  $(`.website-mobile-carousel .website-img`)
    .eq(current)
    .addClass("scaleTransform");
}

// End mobile third section carousel

// mobile section carousel
var count = $(".mobile-carousel").children(".mobile-app-item").length;
$(".mobile-carousel").owlCarousel({
  loop: true,
  margin: 10,
  items: 5,
  stagePadding: 40,
  center: true,
  nav: false,
  dots: false,
  responsiveClass: true,
  responsive: {
    800: {
      items: 3,
    },
    1024: {
      items: 3,
    },
    1200: {
      items: 5,
    },
  },
});

$(".mobile-carousel").on("mousewheel", ".owl-stage", function (e) {
  if (count > 0) {
    if (e.deltaY > 0) {
      $(".mobile-carousel").trigger("next.owl");
    } else {
      $(".mobile-carousel").trigger("prev.owl");
    }
    e.preventDefault();
    count--;
  }
});

// End mobile section carousel

// comments section carousel

$(".comments-carousel").on("initialized.owl.carousel", function (event) {
  let current = event.item.index;
  $(`.comments-carousel .comment-box`)
    .eq(current - 1)
    .removeClass("scaleTransform");
  $(`.comments-carousel .comment-box`).eq(current).addClass("scaleTransform");
});

$(".comments-carousel").owlCarousel({
  loop: true,
  items: 2,
  margin: 100,
  nav: false,
  dots: false,
  onDragged: commentsCallback,
});
function commentsCallback(event) {
  let current = event.item.index;
  $(`.comments-carousel .comment-box`)
    .eq(current + 1)
    .removeClass("scaleTransform");
  $(`.comments-carousel .comment-box`)
    .eq(current - 1)
    .removeClass("scaleTransform");
  $(`.comments-carousel .comment-box`).eq(current).addClass("scaleTransform");
}

// End comments section carousel

// comments mobile section carousel

$(".comments-mobile-carousel").on("initialized.owl.carousel", function (event) {
  let current = event.item.index;
  $(`.comments-mobile-carousel .comment-box`)
    .eq(current - 1)
    .removeClass("scaleTransform");
  $(`.comments-mobile-carousel .comment-box`)
    .eq(current)
    .addClass("scaleTransform");
});

$(".comments-mobile-carousel").owlCarousel({
  loop: true,
  items: 1.2,
  margin: 0,
  nav: false,
  dots: false,
  onDragged: commentsCallback,
});
function commentsCallback(event) {
  let current = event.item.index;
  $(`.comments-mobile-carousel .comment-box`)
    .eq(current + 1)
    .removeClass("scaleTransform");
  $(`.comments-mobile-carousel .comment-box`)
    .eq(current - 1)
    .removeClass("scaleTransform");
  $(`.comments-mobile-carousel .comment-box`)
    .eq(current)
    .addClass("scaleTransform");
}

// End comments mobile section carousel

// teamMate start
var sourceSwap = function () {
  var $this = $(this).children("img");
  var newSource = $this.data("alt-src");
  $this.data("alt-src", $this.attr("src"));
  $this.attr("src", newSource);
};

$(function () {
  $(".teamMate-container").hover(sourceSwap, sourceSwap);
});

// end of team mate
