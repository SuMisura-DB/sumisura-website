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

});