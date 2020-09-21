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
    console.log("helol");
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
    console.log("helol");
    let i = 0;

    const interval = setInterval(() => {
      $(".learning-contents div")
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

//slick configs

$(".V_slider").on("init.slick", function (event, slick) {
  $("#welcome-slider-timer").animate(
    {
      width: `100%`,
    },
    3000
  );
});

$(".V_slider").slick({
  vertical: true,
  verticalSwiping: true,
  dots: true,
  arrows: false,
  cssEase: "linear",
  autoplay: true,
  autoplaySpeed: 3000,
  draggable: true,
  slidesToShow: 1,
  touchMove: true,
  margin: "auto",
  customPaging: function (slider, i) {
    return '<div class="pager__item" id=' + i + ">___</div>";
  },
});

new Splide('#mobile-splide', {
  type: 'loop',
  perPage: 3,
  focus: 'center',
  arrows: false,
  pagination: false,
  easing: 'ease',
  padding: {
    right: '5rem',
    left: '5rem',
  },
}).mount();

new Splide('#othersSiad-splide', {
  type: 'loop',
  perPage: 2,
  arrows: false,
  pagination: false,
  easing: 'ease',
  gap: '5rem'
}).mount();

var webSplide = new Splide('#website-splide', {
  type: 'loop',
  perPage: 4,
  perMove: 1,
  arrows: false,
  autoWidth: true,
  direction: 'rtl',
  pagination: false,
  easing: 'ease',
}).mount();

webSplide.on('moved', function (newIndex) {
  $("#website-title").text("")
  $("#website-year").text("")
  let title = $(`#website-splide li`).eq(newIndex).attr("data-webName");
  let year = $(`#website-splide li`).eq(newIndex).attr("data-year");
  console.log(title, year)
  $("#web-title").text(title)
  $("#web-year").text(year)
});

$(".V_slider").on("afterChange", function (event, slick, currentSlide) {
  $("#welcome-slider-text").text("");
  typeInit(
    `${$(slick.$slides.get(currentSlide)).attr("data-value")}`,
    "welcome-slider-text"
  );
  $(".first-section").attr(
    "data-before",
    $(slick.$slides.get(currentSlide)).attr("data-value").toUpperCase()
  );
  $("#welcome-slider-timer").css("width", "0").animate(
    {
      width: `100%`,
    },
    3000
  );
});

// end of slick configs

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
