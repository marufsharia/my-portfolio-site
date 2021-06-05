/**
 * Plugin: Harold Loader
 * Author: Peter Morrison
 * Created: 2014-09-24
 * Updated: Not yet
 * Version: 0.1.0
 */
(function ($) {

    $.fn.loader = function (options) {

        // Plugin defaults.
        var defaults = {
            background:  getComputedStyle(document.documentElement).getPropertyValue('--site-primary'),
            fadeSpeed: 300,
            left: 0,
            loader: '.progress',
            padding: 2,
            position: 'fixed',
            top: 0,
            width: $(window).width(),
            padding:2
        };

        // Plugin settings.
        var settings = $.extend({
            background: defaults.background,
            fadeSpeed: defaults.fadeSpeed,
            left: defaults.left,
            loader: defaults.loader,
            padding: defaults.padding,
            position: defaults.position,
            title: $('title').text(),
            top: defaults.top,
            width: defaults.width
        }, options);

        // Set the CSS styling of the loader.
        $(settings.loader).css({
            background: settings.background,
            left: settings.left,
            padding: settings.padding,
            position: settings.position,
            top: settings.top
        });

        var selector = this.selector;

        /**
         * Progress loader.
         */
        loader = function (selector) {
            // Hide the specified content by default.
            $(selector).hide();

            // Run the loader animation.
            $(settings.loader).stop().animate({
                width: settings.width
            }).fadeOut(settings.fadeSpeed);
        },

            /**
             * Content loader.
             *
             * var string selector
             */
            content = function (selector) {
                $(selector).animate({opacity: 1.0}).fadeIn(settings.fadeSpeed);
            },

            /**
             * Progress loader initializer.
             *
             * var string selector
             */
            init = function (selector) {
                $.when(loader(selector)).then(content(selector));
            };

        // Initialize the progress loader.
        init(selector);
    };

}(jQuery));
