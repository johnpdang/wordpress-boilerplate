/* global traina_wpScreenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */
import Modal from './accessibility.js';


(function($) {
    $(document).ready(function() {
        

        var masthead, menuToggle, siteNavContain, siteNavigation;
        var supportsES6 = function() {
            try {
                new Function("(a = 0) => a");
                return true;
            } catch (err) {
                return false;
            }
        }();

        const StickyHeader = ((window, document) => {
            // version 3.0 - MJF @ websemantics.uk 2017

            "use strict";
            if (!supportsES6) { return false; }

            const stickyClass = "navbar";
            const header = $("body .navbar");
            const hiddenClass = stickyClass + "-hidden";
            const belowFoldClass = 'isBelowFold';
            const bodyElem = $("body");
            const darkLogo = $('.dark-logo');
            const lightLogo = $('.light-logo');
            const innerNav = $('.navbar-inner-wrap');
            const leftBg = $('.nav-bg.left');
            const rightBg = $('.nav-bg.right');

            // The amount of downward movement before header is hidden
            const downTolerance = 8;
            const upTolerance = 20;
            let hasScrolled = false;
            let lastScrollTop = 0;

            // Handles swapping out the dark/light logo depending on page and screen position
            const handleLogoSwap = () => {
                if ((!bodyElem.hasClass('home') && !bodyElem.hasClass('page-template-default')) && $(window).innerWidth() > 992) {
                    if ($('.isBelowFold').length > 0 || $('.navbar-brand ').hasClass('hover-active')) {
                        darkLogo.removeClass('hidden');
                        lightLogo.addClass('hidden');
                    } else {
                        darkLogo.addClass('hidden');
                        lightLogo.removeClass('hidden');
                    }
                } else {
                    darkLogo.removeClass('hidden');
                    lightLogo.addClass('hidden');
                }
            }


            const _redraw = () => {
                // This is costly to performance but unavoidable
                const pageY = window.scrollY;

                if (window.pageYOffset > 60) {
                    bodyElem.addClass(belowFoldClass);
                } else {
                    bodyElem.removeClass(belowFoldClass);
                }

                if (window.pageYOffset > 500) {
                    // Put it away
                    if (pageY > (lastScrollTop + downTolerance)) {
                        header.addClass(hiddenClass);
                    }

                    // Pull em down
                    if (pageY < lastScrollTop - upTolerance || pageY <= 0) {
                        header.removeClass(hiddenClass);
                    }

                }

                handleLogoSwap();
                lastScrollTop = pageY;
                hasScrolled = false;
            };

            // Setting nav white background
            const navBg = () => {
                const navWrapper = $('.navbar');
                const mainNav = $('.navbar-nav');

                let rightWidth = Number(innerNav.css('marginRight').split('px')[0]) + Number(mainNav.innerWidth()) + 50;
                let leftWidth = Number(navWrapper.innerWidth()) - rightWidth;

                leftBg.css({ 'width': leftWidth, 'left': 0 });
                rightBg.css({ 'width': rightWidth, 'right': 0, 'background-color': '#fff' });

            };

            $(window).resize(() => navBg());

            $('.navbar-brand ').hover(
                () => {
                    leftBg.css('background-color', '#fff');
                    $('.navbar-brand ').addClass('hover-active');
                },
                () => {
                    leftBg.css('background-color', 'transparent');
                    $('.navbar-brand ').removeClass('hover-active');
                }
            )

            // Important: keep this function as performant as possible!
            const _onScroll = () => {
                if (!hasScrolled) { window.requestAnimationFrame(_redraw); }

                hasScrolled = true;
                window.requestAnimationFrame(_onScroll);
            };

            navBg();
            _onScroll();
        })(window, document);

        const menuToggleEvents = ((window, document) => {
            const masthead = $('#masthead');
            const menuToggle = masthead.find('.menu-toggle');
            const closeMenu = masthead.find('[close-menu]');
            const closeButton = $('[close-button]');
            const siteNavContain = masthead.find('.main-navigation');
            const navWrapper = $('#display_full_navigation');
            const focusable = ["a[href]", " area[href]", " input:not([disabled])", " select:not([disabled])", " textarea:not([disabled])", " button:not([disabled])", "object", "embed", " *[tabindex]", " *[contenteditable]"]
                // Return early if menuToggle is missing.
            if (!menuToggle.length) return;

            // Add an initial value for the attribute.
            menuToggle.attr('aria-expanded', 'false');

            menuToggle.on('click.traina_wp', (e) => {
                ScrollReveal().clean('#menu-main-menu > .menu-item');
                ScrollReveal().clean('#second-navigation');
                ScrollReveal().sync();

                siteNavContain.toggleClass('toggled-on');
                navWrapper.toggleClass('expanded');
                navWrapper.fadeToggle();

                $('body').addClass('scroll-lock');
                $(e.currentTarget).attr('aria-expanded', siteNavContain.hasClass('toggled-on'));
                $('#full-site-nav .menu-item:first-of-type a').focus();

                Modal.open(navWrapper);

            });

            closeMenu.on('click keypress', (e) => {
                if (e.keyCode === 13) { $(e.currentTarget).click() };

                navWrapper.toggleClass('expanded');
                navWrapper.fadeOut();
                siteNavContain.toggleClass('toggled-on');
                $('body').removeClass('scroll-lock');

                Modal.close(navWrapper);

            })

            closeButton.focus((e) => { $(e.currentTarget).addClass('hover-active') });
            closeButton.focusout((e) => { $(e.currentTarget).removeClass('hover-active') });

            closeButton.hover(
                // On hover add this class
                (e) => { $(e.currentTarget).addClass('hover-active'); },
                // on hover exit remove this class
                (e) => {
                    $(e.currentTarget).removeClass('hover-active');
                })
        })(window, document);

    })
})(jQuery);