// Navbar Toggler Icon
const navbarToggler = document.querySelector(".navbar-toggler");
const togglerIcon = navbarToggler.querySelector(".navbar-toggler-icon");

navbarToggler.addEventListener("click", () => {
  if (navbarToggler.getAttribute("aria-expanded") === "true") {
    togglerIcon.classList.remove("navbar-toggler-icon");
    togglerIcon.innerHTML = '<i class="bi bi-x-lg fs-4"></i>'; // Using Bootstrap Icons
  } else {
    togglerIcon.classList.add("navbar-toggler-icon");
    togglerIcon.innerHTML = "";
  }
});

// JQUERY - OWL-CAROUSEL

jQuery(document).ready(function ($) {
  // FadeOut Carousel (Intro Slider)
  $(".fadeOut").owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    animateOut: "fadeOut",
    margin: 0,
    nav: true,
    dots: false,
    mouseDrag: false,
    touchDrag: false,
    pullDrag: false,
    smartSpeed: 2000,
    slideTransition: "linear",
  });

$("#testimonial-carousel").owlCarousel({
  items: 1,
  margin: 20,
  loop: true,
  nav: true,
  dots: false,
  autoplay: true,
  navText: [
    '<i class="bi bi-chevron-left"></i>',
    '<i class="bi bi-chevron-right"></i>'
  ],
  responsive: {
    768: { items: 2 },
    992: { items: 3 },
  },
});



  // Gallery - Slide Right
  var slideRight = $(".slide-right").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: false,
    smartSpeed: 9000,
    slideTransition: "linear",
    rtl: true,

    responsive: {
      0: { items: 1 },
      576: { items: 2 },
      768: { items: 3 },
    },
  });

  // Gallery - Slide Left
  var slideLeft = $(".slide-left").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3500,
    autoplayHoverPause: false,
    smartSpeed: 9000,
    slideTransition: "linear",
    responsive: {
      0: { items: 1 },
      576: { items: 2 },
      768: { items: 3 },
    },

    // Testimonial slider
  });

  // Trigger refresh on resize to prevent layout scatter
  $(window).resize(function () {
    if (!slideRight.hasClass("owl-loaded")) {
      slideRight.trigger("refresh");
    }
    if (!slideLeft.hasClass("owl-loaded")) {
      slideLeft.trigger("refresh");
    }
  });
});

// Gallery Lightbox
const lightbox = GLightbox({
  selector: ".glightbox",
  touchNavigation: true,
  loop: true,
  zoomable: true,
});

document.addEventListener("DOMContentLoaded", function () {
  const elements = document.querySelectorAll(".choices-select");
  elements.forEach((el) => {
    new Choices(el, {
      searchEnabled: false, // or true if you want search
      itemSelectText: "",
      shouldSort: false,
    });
  });

  // Galley Page Image Effect
  const imageModal = document.getElementById("imageModal");
  imageModal.addEventListener("show.bs.modal", (event) => {
    const triggerElement = event.relatedTarget;

    const imageSrc = triggerElement.getAttribute("data-image");
    const imageTitle = triggerElement.getAttribute("data-title");

    const modalTitle = imageModal.querySelector(".modal-title");
    const modalImage = imageModal.querySelector(".modal-body img");

    modalTitle.textContent = imageTitle;
    modalImage.src = imageSrc;
  });
});

// Go to Top Button
const goToTopBtn = document.getElementById("goToTopBtn");

window.onscroll = function () {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    goToTopBtn.classList.add("show");
  } else {
    goToTopBtn.classList.remove("show");
  }
};

goToTopBtn.addEventListener("click", function () {
  window.scrollTo({ top: 0, behavior: "smooth" });
});

window.addEventListener("DOMContentLoaded", () => {
  const pointer = document.getElementById("pointer-icon");

  // Position the pointer near the "Drive to Location" button
  const driveBtn = document.querySelector(".btn-sign");
  if (driveBtn) {
    const rect = driveBtn.getBoundingClientRect();
    pointer.style.top = `${rect.top - 30 + window.scrollY}px`;
    pointer.style.left = `${
      rect.left + rect.width / 2 - 10 + window.scrollX
    }px`;
  }

  // Hide the pointer after 5 seconds
  setTimeout(() => {
    pointer.classList.add("fade-out");
  }, 9000);
});
