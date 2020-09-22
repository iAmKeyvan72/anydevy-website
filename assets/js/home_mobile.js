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
});

//carousel configs

// welcome carousel
$('.welcome-mobile-carousel').on('initialized.owl.carousel', function (event) {
  let current = event.item.index;
  $(`.welcome-mobile-carousel .welcome-item`).eq(current - 1).removeClass("scaleTransform")
  $(`.welcome-mobile-carousel .welcome-item`).eq(current).addClass("scaleTransform")
  $("#welcome-slider-timer").css("width", "0").animate(
    {
      width: `100%`,
    },
    3000
  );
});

$('.welcome-mobile-carousel').owlCarousel({
  loop: true,
  items: 1.5,
  margin: 5,
  autoplay: true,
  autoplayTimeout: 3000,
  nav: false,
  dots: false,
  onDragged: welcomeMobileCallback
})

$('.welcome-mobile-carousel').on('changed.owl.carousel', function (event) {
  welcomeMobileCallback(event)
});

function welcomeMobileCallback(event) {
  let current = event.item.index;
  let text = $(`.welcome-mobile-carousel .owl-item`).eq(current).children(".welcome-item").attr("data-value");
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
  $(`.welcome-mobile-carousel .welcome-item`).eq(current + 1).removeClass("scaleTransform")
  $(`.welcome-mobile-carousel .welcome-item`).eq(current - 1).removeClass("scaleTransform")
  $(`.welcome-mobile-carousel .welcome-item`).eq(current).addClass("scaleTransform")
}

// End of welcome carousel

// third section carousel

$('.website-mobile-carousel').on('initialized.owl.carousel', function (event) {
  let current = event.item.index;
  $(`.website-mobile-carousel .website-img`).eq(current - 1).removeClass("scaleTransform")
  $(`.website-mobile-carousel .website-img`).eq(current).addClass("scaleTransform")
});

$('.website-mobile-carousel').owlCarousel({
  loop: true,
  items: 1.5,
  margin: 5,
  nav: false,
  dots: false,
  onDragged: websiteMobileCallback
})

function websiteMobileCallback(event) {
  let current = event.item.index;
  let text = $(`.website-mobile-carousel .owl-item`).eq(current).children(".website-img").attr("data-value");

  $(`.website-mobile-carousel .website-img`).eq(current + 1).removeClass("scaleTransform")
  $(`.website-mobile-carousel .website-img`).eq(current - 1).removeClass("scaleTransform")
  $(`.website-mobile-carousel .website-img`).eq(current).addClass("scaleTransform")
}

// End third section carousel

// comments section carousel

$('.comments-carousel').on('initialized.owl.carousel', function (event) {
  let current = event.item.index;
  $(`.comments-carousel .comment-box`).eq(current - 1).removeClass("scaleTransform")
  $(`.comments-carousel .comment-box`).eq(current).addClass("scaleTransform")
});

$('.comments-carousel').owlCarousel({
  loop: true,
  items: 1.2,
  margin: 0,
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

// $(".teamMate-container").hover((e)=>{

//     $(e.target).children("img").attr("src", `/assets/images/teamMates/${secondImg}`);
// });
let firstImg;
let secondImg;
let hoverMate;
$(".teamMate-container").hover(
  function () {
    hoverMate = $(this).children("img");
    firstImg = $(this).children("img").attr("src");
    secondImg = $(this).attr("data-secImg");
    hoverMate.fadeOut(200, function () {
      hoverMate.attr("src", `/assets/images/teamMates/${secondImg}`);
      hoverMate.fadeIn(200);
    });
  },
  function () {
    hoverMate.fadeOut(200, function () {
      hoverMate.attr("src", firstImg);
      hoverMate.fadeIn(200);
    });
  }
);

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
