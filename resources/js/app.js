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
    $(document).on('click', '.scroll-to-section', function(e) {
        e.preventDefault();
        
        // Get the target section ID from data attribute
        var targetSection = $(this).data('section-scroll');
        var $target = $('#' + targetSection);
        
        if ($target.length) {
            // Scroll to the section
            $('html, body').animate({
                scrollTop: $target.offset().top - headerHeight
            }, 800); // 800ms animation duration
            
            // Special handling for contact-section
            if (targetSection === 'contact-section') {
                // Wait for scroll to complete, then focus first input
                setTimeout(function() {
                    var $firstInput = $target.find('form input:first');
                    if ($firstInput.length) {
                        $firstInput.focus();
                    }
                }, 850); // Slightly longer than scroll animation
            }
        }
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

});