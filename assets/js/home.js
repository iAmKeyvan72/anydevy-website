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

$(window).on("resize scroll", function () {
  if ($(".dark-bg").isInTop()) {
    $(".menu-toggle").removeClass("dark");
    $(".new-quote-btn").removeClass("btn-blue").addClass("btn-pink");
  }
  if ($(".light-bg").isInTop() || $(".white-bg").isInTop()) {
    $(".menu-toggle").addClass("dark");
    $(".new-quote-btn").removeClass("btn-pink").addClass("btn-blue");
  }

  let wTop = $(window).scrollTop();
  if (
    $("#sec-section").offset().top <= wTop &&
    wTop <= $("#footer").offset().top
  ) {
    $(".new-quote-btn").fadeIn();
  } else {
    $(".new-quote-btn").hide();
  }

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

  if (($(".learning-section").offset().top - 700) <= wTop) {
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

$(".menu-toggle").on("click", () => {
  $(".navbar-list").toggleClass("open");
  $(".menu-toggle").toggleClass("open");
});

//carousel configs

// welcome carousel
let welcomeSlides = $('.welcome-carousel').children(".welcome-item").length;
$('.welcome-carousel').on('initialized.owl.carousel', function (event) {
  welcomeCallback(event)
});

$('.welcome-carousel').owlCarousel({
  loop: true,
  items: 1,
  center: true,
  nav: false,
  dots: true,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true
});

$('.welcome-carousel').on('changed.owl.carousel', function (event) {
  welcomeCallback(event)
});

function welcomeCallback(event) {
  let item = event.item.index;
  let text = $(`.welcome-carousel .owl-item`).eq(item).children(".welcome-item").attr("data-value");
  $("#welcome-slider-text").text("");
  $("#welcome-slider-timer").css("width", "0px");
  $("#welcome-slider-timer").animate(
    {
      width: `100%`,
    },
    2800
  );
  typeInit(
    text,
    "welcome-slider-text"
  );
  $(".first-section").attr(
    "data-before",
    text.toUpperCase()
  );
}

$('.first-section').on('mousewheel', '.welcome-carousel .owl-stage', function (e) {
  if (welcomeSlides > 0) {
    if (e.deltaY > 0) {
      $('.welcome-carousel').trigger('next.owl');
    } else {
      $('.welcome-carousel').trigger('prev.owl');
    }
    e.preventDefault();
    welcomeSlides--;
  }
});

// End of welcome carousel

// third section carousel

$('.website-carousel').owlCarousel({
  rtl: true,
  items: 3,
  loop: true,
  margin: 10,
  nav: false,
  dots: false,
  onDragged: callback
})
function callback(event) {
  var item = event.item.index;
  let src = $(`.website-carousel .owl-item`).eq(item - 1).children(".website-img").children("img").attr("src");
  $("#larger-img").attr("src", src);
  $("#web-title").text($(`.website-carousel .owl-item`).eq(item - 1).children(".website-img").attr("data-webName"));
  $("#web-year").text($(`.website-carousel .owl-item`).eq(item - 1).children(".website-img").attr("data-year"));
}

// End third section carousel

// mobile section carousel
var count = $('.mobile-carousel').children(".mobile-app-item").length;
$('.mobile-carousel').owlCarousel({
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
      items: 3
    },
    1024: {
      items: 3
    },
    1200: {
      items: 5
    }
  }
})

$('.mobile-carousel').on('mousewheel', '.owl-stage', function (e) {
  if (count > 0) {
    if (e.deltaY > 0) {
      $('.mobile-carousel').trigger('next.owl');
    } else {
      $('.mobile-carousel').trigger('prev.owl');
    }
    e.preventDefault();
    count--;
  }
});

// End mobile section carousel

// comments section carousel

$('.comments-carousel').on('initialized.owl.carousel', function (event) {
  let current = event.item.index;
  $(`.comments-carousel .comment-box`).eq(current - 1).removeClass("scaleTransform")
  $(`.comments-carousel .comment-box`).eq(current).addClass("scaleTransform")
});

$('.comments-carousel').owlCarousel({
  loop: true,
  items: 2,
  margin: 100,
  nav: false,
  dots: false,
  onDragged: commentsCallback
})
function commentsCallback(event) {
  let current = event.item.index;
  $(`.comments-carousel .comment-box`).eq(current + 1).removeClass("scaleTransform")
  $(`.comments-carousel .comment-box`).eq(current - 1).removeClass("scaleTransform")
  $(`.comments-carousel .comment-box`).eq(current).addClass("scaleTransform")
}

// End comments section carousel


// teamMate start
var sourceSwap = function () {
  var $this = $(this).children("img");
  var newSource = $this.data('alt-src');
  $this.data('alt-src', $this.attr('src'));
  $this.attr('src', newSource);
}

$(function () {
  $('.teamMate-container').hover(sourceSwap, sourceSwap);
});

// end of team mate

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
