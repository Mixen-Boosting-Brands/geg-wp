// Libraries
window.bootstrap = require('bootstrap/dist/js/bootstrap.bundle.js');

// Local Scripts
import '../src/smooth-scrolling';
import '../src/form-contacto';
import '../src/form-bolsa-de-trabajo';
import '../src/form-proveedores';
import '../src/form-contratistas';
import '../src/form-movimiento-global';
import '../src/aos';
import 'jquery-parallax.js';

// Header
$(function () {
    // Cachea el objeto jQuery que contiene el elemento #navbar
    var header = $("#navbar");

    function updateScroll() {
        var scroll = $(window).scrollTop();

        if (scroll >= 1) {
            header.addClass('navbar-scroll');
        } else {
            header.removeClass("navbar-scroll");
        }
    }

    $(function () {
        $(window).scroll(updateScroll);
        updateScroll();
    });
});

// Menú de navegación
$('#mburger').click(function (e) {
    e.stopPropagation();
    $('.menu').toggleClass('menu-abierto');
    $('#navbar').toggleClass('opacity-0');
    $('#backdrop').toggleClass('backdrop-opacity-1');
});

$('.menu').click(function (e) {
    e.stopPropagation();
});

$('body,html').click(function (e) {
    $('.menu').removeClass('menu-abierto');
    $('#navbar').removeClass('opacity-0');
    $('#backdrop').removeClass('backdrop-opacity-1');
});

document.getElementById("cerrar-menu").addEventListener("click", cerrarMenu, false);
/*
document.getElementById("btn-logo").addEventListener("click", cerrarMenu, false);
document.getElementById("btn-nav-1").addEventListener("click", cerrarMenu, false);
document.getElementById("btn-nav-2").addEventListener("click", cerrarMenu, false);
document.getElementById("btn-nav-3").addEventListener("click", cerrarMenu, false);
document.getElementById("btn-nav-4").addEventListener("click", cerrarMenu, false);
document.getElementById("btn-nav-5").addEventListener("click", cerrarMenu, false);
document.getElementById("btn-contacto").addEventListener("click", cerrarMenu, false);
*/

function cerrarMenu() {
    $('.menu').removeClass('menu-abierto');
    $('#navbar').removeClass('opacity-0');
    $('#backdrop').removeClass('backdrop-opacity-1');
}

// Backdrop buscador
$('#buscar-movil').click(function (e) {
    e.stopPropagation();
    $('body').toggleClass('modal-open');
    $('#navbar').toggleClass('opacity-0');
    $('#backdrop-buscar').toggleClass('backdrop-opacity-1');
    document.getElementById("search-input-field").focus();
});

$('#buscar-escritorio').click(function (e) {
    e.stopPropagation();
    $('body').toggleClass('modal-open');
    $('#navbar').toggleClass('opacity-0');
    $('#backdrop-buscar').toggleClass('backdrop-opacity-1');
    document.getElementById("search-input-field").focus();
});

$('#backdrop-buscar').click(function (e) {
    $('body').toggleClass('modal-open');
    $('#navbar').removeClass('opacity-0');
    $('#backdrop-buscar').removeClass('backdrop-opacity-1');
});

$('#search-input').click(function (e) {
    e.stopPropagation();
});

// Scrollear al item abierto del acordion
const accordionItems = document.querySelectorAll('.accordion-collapse');
const acc = document.getElementById('acordion-formularios');

accordionItems.forEach((el)=>{
    el.addEventListener('shown.bs.collapse',(e)=>{
        var scrollOffset = acc.scrollTop + el.parentNode.offsetTop
        acc.scroll({
            top: scrollOffset,
            left: 0, 
            behavior: 'smooth'
        });
    });
});

// Instancias de Swiper
const sliderVacantes = new Swiper('.slider-vacantes', {
    // Optional parameters
    slidesPerView: 1,
    spaceBetween: 30,
    grabCursor: true,

    // Responsive breakpoints
    breakpoints: {
        400: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
        576: {
          slidesPerView: 1,
          spaceBetween: 30,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        992: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 30,
        }
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });