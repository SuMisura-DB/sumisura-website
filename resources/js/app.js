// Load bootstrap.js (Axios, Laravel utilities)
import './bootstrap';
import Splide from '@splidejs/splide';
import { Fancybox } from "@fancyapps/ui";

// Load your CSS
// import '../css/app.css';
import '@splidejs/splide/dist/css/splide.min.css';
import "@fancyapps/ui/dist/fancybox/fancybox.css";

// (optional) export if you want to use it elsewhere
window.Splide = Splide;
window.Fancybox = Fancybox;


// new Splide('.gallery-container', {

//     type: 'slide',
//     perPage: 1,
//     pagination: false,
//     autoHeight: false,

// }).mount();

$(function () {

    // Portfolio Galleries
    $('.gallery-container.splide').each(function () {

        const el = this;

        // Prevent double-mount (handy if scripts run twice)
        if ($(el).data('splideMounted')) return;
        $(el).data('splideMounted', true);

        // Create slider
        const splide = new Splide(el, {
            type: 'slide',
            perPage: 1,
            pagination: false,
            arrows: true,
            lazyLoad: 'nearby'
        });

        // Optional: counter inside THIS slider
        const $counter = $(el).find('.splide-counter').first();

        const updateCounter = function () {
            if (!$counter.length) return;
            $counter.text((splide.index + 1) + ' / ' + splide.length);
        };

        splide.on('mounted move', updateCounter);
        splide.mount();

    });

    /* Fancybox - full screen gallery */
    Fancybox.bind('[data-fancybox]', {
        Thumbs: false,
    });

    $(document).on('click', '.view-gallery[data-open-gallery]', function (e) {
        e.preventDefault();

        const group = $(this).data('open-gallery');

        const items = $(`a[data-fancybox="${group}"]`).map(function () {
            return {
            src: this.getAttribute('href'),
            type: 'image',
            caption: this.dataset.caption || '',
            };
        }).get();

        if (!items.length) {
            console.warn('No fancybox links found for group:', group);
            return;
        }

        Fancybox.show(items, { startIndex: 0 });
    });

    /* Scroll down to areas */
    $(document).on('click', '.scroll-to-section', function (e) {
        e.preventDefault();

        const targetSection = $(this).data('section-scroll');
        const $target = $('#' + targetSection);

        if (!$target.length) return;

        // close menu first
        if ($('#main-header').hasClass('menu-open')) {
            closeMobileMenu();
        }

        $('html, body').stop(true).animate(
            { scrollTop: $target.offset().top - headerHeight },
            800,
            function () {
                // run AFTER scroll completes (more reliable than setTimeout)
                if (targetSection === 'contact-section') {
                    // pick first "real" field (input/select/textarea), skip hidden/disabled
                    const $field = $target
                        .find('form :input')
                        .filter(':visible:not([type="hidden"]):not([disabled])')
                        .first();

                    if ($field.length) {
                        $field.trigger('focus');
                    }
                }
            }
        );
    });


    /* HEADER SCROLL POSITION FIXED */
        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {
            scrollHeader()
        };

        // Get the header
        // var header = document.getElementById("header");
        var header = document.getElementById("main-header");
        // var headerElement = document.getElementById("header");
        // Hover menus that we want to append to the header if it is with a position:fixed
        // var hoverMenus = document.getElementsByClassName("dropdown-menu");
        var body = document.body;

        var headerHeight = header.clientHeight;
        // console.log(headerHeight);

        // Get the offset position of the navbar
        var sticky = header.offsetTop + headerHeight;

        // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function scrollHeader() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
                body.style.marginTop = headerHeight + "px";
            } else {
                header.classList.remove("sticky");
                body.style.marginTop = '0px';
            }
        }
    /* END OF HEADER SCROLL POSITION FIXED */


    /* Mobile Burger Button Click */
    // $('.mobile-menu-burger').on('click', function(){

    //     let mobileMenu = $('.menu-container');

    //     mobileMenu.toggleClass('active');
    // });

    function openMobileMenu() {
        const $header = $('#main-header');
        $header.addClass('menu-open');
        $header.find('.menu-container').addClass('active');
    }

    function closeMobileMenu() {
        const $header = $('#main-header');
        $header.removeClass('menu-open');
        $header.find('.menu-container').removeClass('active');
    }

    $('.mobile-menu-burger').on('click', function (e) {
        e.stopPropagation(); // prevents the document click (outside) from instantly closing it

        const $header = $('#main-header');
        const isOpen = $header.hasClass('menu-open');

        if (isOpen) closeMobileMenu();
        else openMobileMenu();
    });

    // Close mobile menu if click outside of header
    $(document).on('click', function (e) {
        const $header = $('#main-header');
        const $menu = $header.find('.menu-container');

        // only act if menu is open
        if (!$menu.hasClass('active')) return;

        // if click is NOT inside the header, close it
        if ($(e.target).closest('#main-header').length === 0) {
            closeMobileMenu();
        }
    });
    
    const $form = $('#contact-form');
    if (!$form.length) return;

    const $btn = $form.find('button[type="submit"]').first();

    let $status = $form.find('.form-status');
    if (!$status.length) {
        $status = $('<div class="form-status" aria-live="polite"></div>');
        $btn.before($status);
    }

    $form.on('submit', function () {
        if ($btn.data('busy')) return false;
        $btn.data('busy', true);

        $form.addClass('is-sending');
        $btn.addClass('is-loading');

        $btn.data('originalHtml', $btn.html());
        $btn.html('<span class="spinner"></span>A enviar…');

        // $status.removeClass('success error').addClass('show').text('A enviar o teu pedido…');

        // allow native submit (into iframe)
        return true;
    });

    // OPTIONAL: show success after a short delay (since iframe submit has no callback)
    // You can tune timing or remove if you prefer.
    $form.on('submit', function () {
        setTimeout(() => {
        $status.removeClass('error').addClass('show success').text('Enviado com sucesso ✅ Obrigado!');
        $form.removeClass('is-sending');
        $btn.removeClass('is-loading').html($btn.data('originalHtml') || 'Enviar Pedido');
        $btn.data('busy', false);

        // optional reset
        // $form[0].reset();
        }, 900);
    });


});