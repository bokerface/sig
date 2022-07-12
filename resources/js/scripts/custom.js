//Removing Preloader
setTimeout(function () {
    var preloader = document.getElementById('preloader')
    if (preloader) { preloader.classList.add('preloader-hide'); }
}, 150);

document.addEventListener('DOMContentLoaded', () => {
    'use strict'

    //Global Variables
    let isPWA = true;  // Enables or disables the service worker and PWA
    let isAJAX = true; // AJAX transitions. Requires local server or server
    var pwaName = "SIGOV"; //Local Storage Names for PWA
    var pwaRemind = 1; //Days to re-remind to add to home
    var pwaNoCache = true; //Requires server and HTTPS/SSL. Will clear cache with each visit

    //Setting Service Worker Locations scope = folder | location = service worker js location
    var pwaScope = "/";
    var pwaLocation = "/_service-worker.js";

    //Place all your custom Javascript functions and plugin calls below this line
    function init_template() {
        e
        //Caching Global Variables
        var i, e, el; //https://www.w3schools.com/js/js_performance.asp

        //Greetig Heading
        var pageTitle = document.querySelectorAll('.page-title-large, .page-title-small, .menu-header a');
        if (pageTitle) {
            var greetingTime = new Date().getHours();
            var greetingMessage;
            var greetingExist = document.querySelectorAll('.greeting-text')[0]
            if (greetingExist) {
                var greetingUser = document.querySelectorAll('.greeting-text')[0].getAttribute('data-username');
                var greetingMorning = ('Good morning');
                var greetingAfternoon = ('Good afternoon');
                var greetingEvening = ('Good evening');

                if (greetingTime >= 0 && greetingTime < 12) {
                    greetingMessage = greetingMorning;
                } else if (greetingTime >= 12 && greetingTime < 17) {
                    greetingMessage = greetingAfternoon;
                } else if (greetingTime >= 17 && greetingTime < 24) { greetingMessage = greetingEvening; }
                document.querySelectorAll('.greeting-text')[0].insertAdjacentHTML('beforeend', greetingMessage + ',<br>' + greetingUser);
            }
        }


        //Attaching Menu Hider
        var menuHider = document.getElementsByClassName('menu-hider');
        if (!menuHider.length) { var hider = document.createElement('div'); hider.setAttribute("class", "menu-hider"); document.body.insertAdjacentElement('beforebegin', hider); }
        if (menuHider[0].classList.contains('menu-active')) { menuHider[0].classList.remove('menu-active'); }


        //Demo function for programtic creation of Menu

        window.addEventListener('insert-success', event => {
            menu('modal-success', 'show', 250);

            let tID = setTimeout(function () {
                window.location.href = "/inbox";
                window.clearTimeout(tID);		// clear time out.
            }, 2000);
        })


        //Activating Menus
        document.querySelectorAll('.menu').forEach(el => { el.style.display = 'block' })


        //Image Sliders
        var splide = document.getElementsByClassName('splide');
        if (splide.length) {
            var singleSlider = document.querySelectorAll('.single-slider');
            if (singleSlider.length) {
                singleSlider.forEach(function (e) {
                    var single = new Splide('#' + e.id, {
                        type: 'loop',
                        autoplay: true,
                        interval: 4000,
                        perPage: 1,
                    }).mount();
                    var sliderNext = document.querySelectorAll('.slider-next');
                    var sliderPrev = document.querySelectorAll('.slider-prev');
                    sliderNext.forEach(el => el.addEventListener('click', el => { single.go('>'); }));
                    sliderPrev.forEach(el => el.addEventListener('click', el => { single.go('<'); }));
                });
            }




        }



        //Don't jump on Empty Links
        const emptyHref = document.querySelectorAll('a[href="#"]')
        emptyHref.forEach(el => el.addEventListener('click', e => {
            e.preventDefault();
            return false;
        }));



        var checkedCard = document.querySelectorAll('.check-card');
        checkedCard.forEach(el => el.addEventListener('click', e => {
            if (el.querySelector('input').getAttribute('checked') == "checked") {
                el.querySelector('input').removeAttribute('checked');
            } else {
                el.querySelector('input').setAttribute('checked', 'checked');
            }
        }));


        //Setting Sidebar Widths
        var menus = document.querySelectorAll('.menu');
        function menuFunction() {
            if (menus.length) {
                var menuSidebar = document.querySelectorAll('.menu-box-left, .menu-box-right');
                menuSidebar.forEach(function (e) {
                    if (e.getAttribute('data-menu-width') === "cover") {
                        e.style.width = '100%'
                    } else {
                        e.style.width = (e.getAttribute('data-menu-width')) + 'px'
                    }
                })
                var menuSheets = document.querySelectorAll('.menu-box-bottom, .menu-box-top, .menu-box-modal');
                menuSheets.forEach(function (e) {
                    if (e.getAttribute('data-menu-width') === "cover") {
                        e.style.width = '100%'
                        e.style.height = '100%'
                    } else {
                        e.style.width = (e.getAttribute('data-menu-width')) + 'px'
                        e.style.height = (e.getAttribute('data-menu-height')) + 'px'
                    }
                })

                //Opening Menus
                var menuOpen = document.querySelectorAll('[data-menu]');
                var wrappers = document.querySelectorAll('.header, #footer-bar, .page-content');

                menuOpen.forEach(el => el.addEventListener('click', e => {
                    //Close Existing Opened Menus
                    const activeMenu = document.querySelectorAll('.menu-active');
                    for (let i = 0; i < activeMenu.length; i++) { activeMenu[i].classList.remove('menu-active'); }
                    //Open Clicked Menu
                    var menuData = el.getAttribute('data-menu');
                    document.getElementById(menuData).classList.add('menu-active');
                    document.getElementsByClassName('menu-hider')[0].classList.add('menu-active');
                    //Check and Apply Effects
                    var menu = document.getElementById(menuData);
                    var menuEffect = menu.getAttribute('data-menu-effect');
                    var menuLeft = menu.classList.contains('menu-box-left');
                    var menuRight = menu.classList.contains('menu-box-right');
                    var menuTop = menu.classList.contains('menu-box-top');
                    var menuBottom = menu.classList.contains('menu-box-bottom');
                    var menuWidth = menu.offsetWidth;
                    var menuHeight = menu.offsetHeight;
                    var menuTimeout = menu.getAttribute('data-menu-hide');

                    if (menuTimeout) {
                        setTimeout(function () {
                            document.getElementById(menuData).classList.remove('menu-active');
                            document.getElementsByClassName('menu-hider')[0].classList.remove('menu-active');
                        }, menuTimeout)
                    }

                    if (menuEffect === "menu-push") {
                        var menuWidth = document.getElementById(menuData).getAttribute('data-menu-width');
                        if (menuLeft) { for (let i = 0; i < wrappers.length; i++) { wrappers[i].style.transform = "translateX(" + menuWidth + "px)" } }
                        if (menuRight) { for (let i = 0; i < wrappers.length; i++) { wrappers[i].style.transform = "translateX(-" + menuWidth + "px)" } }
                        if (menuBottom) { for (let i = 0; i < wrappers.length; i++) { wrappers[i].style.transform = "translateY(-" + menuHeight + "px)" } }
                        if (menuTop) { for (let i = 0; i < wrappers.length; i++) { wrappers[i].style.transform = "translateY(" + menuHeight + "px)" } }
                    }
                    if (menuEffect === "menu-parallax") {
                        var menuWidth = document.getElementById(menuData).getAttribute('data-menu-width');
                        if (menuLeft) { for (let i = 0; i < wrappers.length; i++) { wrappers[i].style.transform = "translateX(" + menuWidth / 10 + "px)" } }
                        if (menuRight) { for (let i = 0; i < wrappers.length; i++) { wrappers[i].style.transform = "translateX(-" + menuWidth / 10 + "px)" } }
                        if (menuBottom) { for (let i = 0; i < wrappers.length; i++) { wrappers[i].style.transform = "translateY(-" + menuHeight / 5 + "px)" } }
                        if (menuTop) { for (let i = 0; i < wrappers.length; i++) { wrappers[i].style.transform = "translateY(" + menuHeight / 5 + "px)" } }
                    }
                }));

                //Closing Menus
                const menuClose = document.querySelectorAll('.close-menu, .menu-hider');
                menuClose.forEach(el => el.addEventListener('click', e => {
                    const activeMenu = document.querySelectorAll('.menu-active');
                    for (let i = 0; i < activeMenu.length; i++) { activeMenu[i].classList.remove('menu-active'); }
                    for (let i = 0; i < wrappers.length; i++) { wrappers[i].style.transform = "translateX(-" + 0 + "px)" }
                }));
            }
        }
        menuFunction();


        function activateMenus() {
            const menuActive = document.querySelectorAll('[data-menu-active]')[0];
            if (menuActive) {
                var selectedMenu = menuActive.getAttribute('data-menu-active');
                document.querySelectorAll('#' + selectedMenu)[0].classList.add('nav-item-active');
                if (document.querySelectorAll('#' + selectedMenu)[0].parentNode.getAttribute('class') === "submenu") {
                    var subId = '#' + document.querySelectorAll('#' + selectedMenu)[0].parentNode.getAttribute('id')
                    var subData = document.querySelectorAll('#' + selectedMenu)[0].parentNode.getAttribute('id')
                    var subSize = document.querySelectorAll(subId)[0].children.length;
                    var subHeight = document.querySelectorAll(subId)[0].offsetHeight;
                    document.querySelectorAll(subId)[0].style.transition = "all 250ms";
                    document.querySelectorAll(subId)[0].style.height = (subSize * 50) + 26 + 'px';
                    document.querySelectorAll('[data-submenu="' + subData + '"]')[0].classList.add('nav-item-active')
                }
            }

            document.querySelectorAll('[data-submenu]').forEach(function (e) {
                var subID = e.getAttribute('data-submenu');
                var subChildren = document.getElementById(subID).children.length;
                var subtest = e.querySelectorAll('strong')[0];
                subtest.insertAdjacentHTML('beforeend', subChildren)
            });

            var submenuLink = document.querySelectorAll('[data-submenu]');
            submenuLink.forEach(el => el.addEventListener('click', e => {
                el.classList.toggle('nav-item-active');
                var subData = el.getAttribute('data-submenu');
                var subId = '#' + subData
                var subSize = document.querySelectorAll(subId)[0].children.length;
                var subHeight = document.querySelectorAll(subId)[0].offsetHeight;
                if (subHeight === 0) {
                    console.log('true')
                    document.querySelectorAll(subId)[0].style.transition = "all 250ms";
                    document.querySelectorAll(subId)[0].style.height = (subSize * 50) + 26 + 'px';
                } else {
                    console.log('false')
                    document.querySelectorAll(subId)[0].style.transition = "all 250ms";
                    document.querySelectorAll(subId)[0].style.height = "0px";
                }
            }));
        }

        //Back Button
        const backButton = document.querySelectorAll('[data-back-button]');
        if (backButton.length) {
            backButton.forEach(el => el.addEventListener('click', e => {
                e.stopPropagation;
                e.preventDefault;
                window.history.go(-1);
            }));
        }


        //Back to Top
        function backUp() {
            const backToTop = document.querySelectorAll('.back-to-top-icon, .back-to-top-badge, .back-to-top');
            if (backToTop) {
                backToTop.forEach(el => el.addEventListener('click', e => {
                    window.scrollTo({ top: 0, behavior: `smooth` })
                }));
            }
        }

        //Check iOS Version and add min-ios15 class if higher or equal to iOS15
        function iOSversion() {
            let d, v;
            if (/iP(hone|od|ad)/.test(navigator.platform)) {
                v = (navigator.appVersion).match(/OS (\d+)_(\d+)_?(\d+)?/);
                d = { status: true, version: parseInt(v[1], 10), info: parseInt(v[1], 10) + '.' + parseInt(v[2], 10) + '.' + parseInt(v[3] || 0, 10) };
            } else { d = { status: false, version: false, info: '' } }
            return d;
        }
        let iosVer = iOSversion();
        if (iosVer.version > 14) { document.querySelectorAll('#page')[0].classList.add('min-ios15'); }


        //Card Extender
        const cards = document.getElementsByClassName('card');
        function card_extender() {
            var headerHeight, footerHeight, headerOnPage;
            var headerOnPage = document.querySelectorAll('.header:not(.header-transparent)')[0];
            var footerOnPage = document.querySelectorAll('#footer-bar')[0];

            headerOnPage ? headerHeight = document.querySelectorAll('.header')[0].offsetHeight : headerHeight = 0
            footerOnPage ? footerHeight = document.querySelectorAll('#footer-bar')[0].offsetHeight : footerHeight = 0

            for (let i = 0; i < cards.length; i++) {
                if (cards[i].getAttribute('data-card-height') === "cover") {
                    if (window.matchMedia('(display-mode: fullscreen)').matches) { var windowHeight = window.outerHeight; }
                    if (!window.matchMedia('(display-mode: fullscreen)').matches) { var windowHeight = window.innerHeight; }
                    //Fix for iOS 15 pages with data-height="cover"
                    var coverHeight = windowHeight + 'px';
                    // - Remove this for iOS 14 issues - var coverHeight = windowHeight - headerHeight - footerHeight + 'px';
                }
                if (cards[i].getAttribute('data-card-height') === "cover-card") {
                    var windowHeight = window.outerHeight;
                    var coverHeight = windowHeight - 300 + 'px';
                    cards[i].style.height = coverHeight
                }
                if (cards[i].getAttribute('data-card-height') === "cover-full") {
                    if (window.matchMedia('(display-mode: fullscreen)').matches) { var windowHeight = window.outerHeight; }
                    if (!window.matchMedia('(display-mode: fullscreen)').matches) { var windowHeight = window.innerHeight; }
                    var coverHeight = windowHeight + 'px';
                    cards[i].style.height = coverHeight
                }
                if (cards[i].hasAttribute('data-card-height')) {
                    var getHeight = cards[i].getAttribute('data-card-height');
                    cards[i].style.height = getHeight + 'px';
                    if (getHeight === "cover") {
                        var totalHeight = getHeight
                        cards[i].style.height = coverHeight
                    }
                }
            }
        }

        if (cards.length) {
            card_extender();
            window.addEventListener("resize", card_extender);
        }

        //Adding Local Storage for Visited Links
        var checkVisited = document.querySelectorAll('.check-visited');
        if (checkVisited.length) {
            function check_visited_links() {
                var visited_links = JSON.parse(localStorage.getItem(pwaName + '_Visited_Links')) || [];
                var links = document.querySelectorAll('.check-visited a');
                for (let i = 0; i < links.length; i++) {
                    var that = links[i];
                    that.addEventListener('click', function (e) {
                        var clicked_url = this.href;
                        if (visited_links.indexOf(clicked_url) == -1) {
                            visited_links.push(clicked_url);
                            localStorage.setItem(pwaName + '_Visited_Links', JSON.stringify(visited_links));
                        }
                    })
                    if (visited_links.indexOf(that.href) !== -1) {
                        that.className += ' visited-link';
                    }
                }
            }
            check_visited_links();
        }

        //Link List Toggle
        var linkListToggle = document.querySelectorAll('[data-trigger-switch]:not([data-toggle-theme])');
        if (linkListToggle.length) {
            linkListToggle.forEach(el => el.addEventListener('click', event => {
                var switchData = el.getAttribute('data-trigger-switch');
                var getCheck = document.getElementById(switchData);
                getCheck.checked ? getCheck.checked = false : getCheck.checked = true;
            }))
        }

        //Classic Toggle
        var classicToggle = document.querySelectorAll('.classic-toggle');
        if (classicToggle.length) {
            classicToggle.forEach(el => el.addEventListener('click', event => {
                el.querySelector('i:last-child').classList.toggle('fa-rotate-180');
                el.querySelector('i:last-child').style.transition = "all 250ms ease"
            }))
        }

        //Toasts
        var toastTrigger = document.querySelectorAll('[data-toast]');
        if (toastTrigger.length) {
            toastTrigger.forEach(el => el.addEventListener('click', event => {
                var toastData = el.getAttribute('data-toast')
                var notificationToast = document.getElementById(toastData);
                var notificationToast = new bootstrap.Toast(notificationToast);
                notificationToast.show();
            }));
        }

        //Dropdown
        var dropdownElementList = [].slice.call(document.querySelectorAll('[data-bs-toggle="dropdown"]'))
        if (dropdownElementList.length) {
            var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
                return new bootstrap.Dropdown(dropdownToggleEl);
            })
        }

        if (window.location.protocol === "file:") {
            var linksLocal = document.querySelectorAll('a');
            linksLocal.forEach(el => el.addEventListener('mouseover', event => {
                // console.log("You are seeing these errors because your file is on your local computer. For real life simulations please use a Live Server or a Local Server such as AMPPS or WAMPP or simulate a  Live Preview using a Code Editor like http://brackets.io (it's 100% free) - PWA functions and AJAX Page Transitions will only work in these scenarios.");
            }));
        }

        //Collapse Flip Icon
        var collapseBtn = document.querySelectorAll('[data-bs-toggle="collapse"]:not(.no-effect)');
        if (collapseBtn.length) {
            collapseBtn.forEach(el => el.addEventListener('click', e => {
                if (el.querySelectorAll('i').length) {
                    el.querySelector('i').classList.toggle('fa-rotate-180')
                };
            }));
        }

        //Tabs
        var tabTrigger = document.querySelectorAll('.tab-controls a');
        if (tabTrigger.length) {
            tabTrigger.forEach(function (e) {
                if (e.hasAttribute('data-active')) {
                    var highlightColor = e.parentNode.getAttribute('data-highlight');
                    e.classList.add(highlightColor);
                    e.classList.add('no-click');
                }
            });
            tabTrigger.forEach(el => el.addEventListener('click', e => {
                var highlightColor = el.parentNode.getAttribute('data-highlight');
                var tabParentGroup = el.parentNode.querySelectorAll('a');
                tabParentGroup.forEach(function (e) {
                    e.classList.remove(highlightColor);
                    e.classList.remove('no-click');
                });
                el.classList.add(highlightColor);
                el.classList.add('no-click');
            }));
        }

        //Extending Menu Functions
        function menu(menuName, menuFunction, menuTimeout) {
            setTimeout(function () {
                if (menuFunction === "show") {
                    return document.getElementById(menuName).classList.add('menu-active'),
                        document.querySelectorAll('.menu-hider')[0].classList.add('menu-active')
                } else {
                    return document.getElementById(menuName).classList.remove('menu-active'),
                        document.querySelectorAll('.menu-hider')[0].classList.remove('menu-active')
                }
            }, menuTimeout)
        }

        var autoActivate = document.querySelectorAll('[data-auto-activate]');
        if (autoActivate.length) {
            var autoActivateData = autoActivate[0].getAttribute('data-auto-activate');
            var autoActivateTime = autoActivateData * 1000
            setTimeout(function () {
                autoActivate[0].classList.add('menu-active');
                menuHider[0].classList.add('menu-active');
            }, autoActivateTime);
        }

        //Calling Functions Required After External Menus are Loaded
        var dataMenuLoad = document.querySelectorAll('[data-menu-load]')
        dataMenuLoad.forEach(function (e) {
            var menuLoad = e.getAttribute('data-menu-load')
            fetch(menuLoad)
                .then(data => data.text())
                .then(html => e.innerHTML = html)
                .then(data => {
                    setTimeout(function () {
                        if (dataMenuLoad[dataMenuLoad.length - 1] === e) {
                            menuFunction();
                            // checkDarkMode();
                            activateMenus();
                            // shareLinks();
                            // highlightColors();
                            // selectHighlight();
                            // card_extender();
                            // backUp();
                            // shapeChanger();
                            // copyright_year();
                            // feather.replace();
                            // featherIcons();
                        }
                    }, 500);
                })
        })



        //Detecting Mobile OS
        let isMobile = {
            Android: function () { return navigator.userAgent.match(/Android/i); },
            iOS: function () { return navigator.userAgent.match(/iPhone|iPad|iPod/i); },
            any: function () { return (isMobile.Android() || isMobile.iOS()); }
        };

        const androidDev = document.getElementsByClassName('show-android');
        const iOSDev = document.getElementsByClassName('show-ios');
        const noDev = document.getElementsByClassName('show-no-device');
        if (!isMobile.any()) { for (let i = 0; i < iOSDev.length; i++) { iOSDev[i].classList.add('disabled'); } for (let i = 0; i < androidDev.length; i++) { androidDev[i].classList.add('disabled'); } }
        if (isMobile.iOS()) { document.querySelectorAll('#page')[0].classList.add('device-is-ios'); for (let i = 0; i < noDev.length; i++) { noDev[i].classList.add('disabled'); } for (let i = 0; i < androidDev.length; i++) { androidDev[i].classList.add('disabled'); } }
        if (isMobile.Android()) { document.querySelectorAll('#page')[0].classList.add('device-is-android'); for (let i = 0; i < iOSDev.length; i++) { iOSDev[i].classList.add('disabled'); } for (let i = 0; i < noDev.length; i++) { noDev[i].classList.add('disabled'); } }

        //Creating Offline Alert Messages
        var addOfflineClasses = document.querySelectorAll('.offline-message');
        if (!addOfflineClasses.length) {
            const offlineAlert = document.createElement('p');
            const onlineAlert = document.createElement('p');
            offlineAlert.className = 'offline-message bg-red-dark color-white';
            offlineAlert.textContent = 'No internet connection detected';
            onlineAlert.className = 'online-message bg-green-dark color-white';
            onlineAlert.textContent = 'You are back online';
            document.getElementsByTagName('body')[0].appendChild(offlineAlert);
            document.getElementsByTagName('body')[0].appendChild(onlineAlert);
        }

        //Online / Offline Settings
        //Activating and Deactivating Links Based on Online / Offline State
        function offlinePage() {
            //Enable the code below to disable offline mode.
            //var anchorsDisabled = document.querySelectorAll('a');
            //anchorsDisabled.forEach(function(e){
            //    var hrefs = e.getAttribute('href');
            //    if(hrefs.match(/.html/)){e.classList.add('show-offline'); e.setAttribute('data-link',hrefs); e.setAttribute('href','#');}
            //});
            var showOffline = document.querySelectorAll('.show-offline');
            showOffline.forEach(el => el.addEventListener('click', event => {
                document.getElementsByClassName('offline-message')[0].classList.add('offline-message-active');
                setTimeout(function () { document.getElementsByClassName('offline-message')[0].classList.remove('offline-message-active'); }, 1500)
            }));
        }
        function onlinePage() {
            var anchorsEnabled = document.querySelectorAll('[data-link]');
            anchorsEnabled.forEach(function (e) {
                var hrefs = e.getAttribute('data-link');
                if (hrefs.match(/.html/)) { e.setAttribute('href', hrefs); e.removeAttribute('data-link', ''); }
            });
        }

        //Defining Offline/Online Variables
        var offlineMessage = document.getElementsByClassName('offline-message')[0];
        var onlineMessage = document.getElementsByClassName('online-message')[0];


        //Online / Offine Status
        function isOnline() {
            onlinePage(); onlineMessage.classList.add('online-message-active');
            setTimeout(function () { onlineMessage.classList.remove('online-message-active'); }, 2000)
            console.info('Connection: Online');
        }

        function isOffline() {
            offlinePage(); offlineMessage.classList.add('offline-message-active');
            setTimeout(function () { offlineMessage.classList.remove('offline-message-active'); }, 2000)
            console.info('Connection: Offline');
        }

        var simulateOffline = document.querySelectorAll('.simulate-offline');
        var simulateOnline = document.querySelectorAll('.simulate-online');
        if (simulateOffline.length) {
            simulateOffline[0].addEventListener('click', function () { isOffline() });
            simulateOnline[0].addEventListener('click', function () { isOnline() });
        }

        //Check if Online / Offline
        function updateOnlineStatus(event) { var condition = navigator.onLine ? "online" : "offline"; isOnline(); }
        function updateOfflineStatus(event) { isOffline(); }
        window.addEventListener('online', updateOnlineStatus);
        window.addEventListener('offline', updateOfflineStatus);

        //iOS Badge
        const iOSBadge = document.querySelectorAll('.simulate-iphone-badge');
        iOSBadge.forEach(el => el.addEventListener('click', e => {
            document.getElementsByClassName('add-to-home')[0].classList.add('add-to-home-visible', 'add-to-home-ios');
            document.getElementsByClassName('add-to-home')[0].classList.remove('add-to-home-android');
        }));

        //Android Badge
        const AndroidBadge = document.querySelectorAll('.simulate-android-badge');
        AndroidBadge.forEach(el => el.addEventListener('click', e => {
            document.getElementsByClassName('add-to-home')[0].classList.add('add-to-home-visible', 'add-to-home-android');
            document.getElementsByClassName('add-to-home')[0].classList.remove('add-to-home-ios');
        }));

        //Remove Add to Home Badge
        const addToHomeBadgeClose = document.querySelectorAll('.add-to-home');
        addToHomeBadgeClose.forEach(el => el.addEventListener('click', e => {
            document.getElementsByClassName('add-to-home')[0].classList.remove('add-to-home-visible');
        }));


        //PWA Settings
        // if(isPWA === true){
        //     var checkPWA = document.getElementsByTagName('html')[0];
        //     if(!checkPWA.classList.contains('isPWA')){
        //         if ('serviceWorker' in navigator) {
        //           window.addEventListener('load', function() {
        //             navigator.serviceWorker.register(pwaLocation, {scope: pwaScope}).then(function(registration){registration.update();})
        //           });
        //         }

        //         //Setting Timeout Before Prompt Shows Again if Dismissed
        //         var hours = pwaRemind * 1; // Reset when storage is more than 24hours
        //         var now = Date.now();
        //         var setupTime = localStorage.getItem(pwaName+'-PWA-Timeout-Value');
        //         if (setupTime == null) {
        //             localStorage.setItem(pwaName+'-PWA-Timeout-Value', now);
        //         } else if (now - setupTime > hours*60*60*1000) {
        //             localStorage.removeItem(pwaName+'-PWA-Prompt')
        //             localStorage.setItem(pwaName+'-PWA-Timeout-Value', now);
        //         }


        //         const pwaClose = document.querySelectorAll('.pwa-dismiss');
        //         pwaClose.forEach(el => el.addEventListener('click',e =>{
        //             const pwaWindows = document.querySelectorAll('#menu-install-pwa-android, #menu-install-pwa-ios');
        //             for(let i=0; i < pwaWindows.length; i++){pwaWindows[i].classList.remove('menu-active');}
        //             localStorage.setItem(pwaName+'-PWA-Timeout-Value', now);
        //             localStorage.setItem(pwaName+'-PWA-Prompt', 'install-rejected');
        //             console.log('PWA Install Rejected. Will Show Again in '+ (pwaRemind)+' Days')
        //         }));

        //         //Trigger Install Prompt for Android
        //         const pwaWindows = document.querySelectorAll('#menu-install-pwa-android, #menu-install-pwa-ios');
        //         if(pwaWindows.length){
        //             if (isMobile.Android()) {
        //                 if (localStorage.getItem(pwaName+'-PWA-Prompt') != "install-rejected") {
        //                     function showInstallPrompt() {
        //                         setTimeout(function(){
        //                             if (!window.matchMedia('(display-mode: fullscreen)').matches) {
        //                                 console.log('Triggering PWA Window for Android')
        //                                 document.getElementById('menu-install-pwa-android').classList.add('menu-active');
        //                                 document.querySelectorAll('.menu-hider')[0].classList.add('menu-active');
        //                             }
        //                         },3500);
        //                     }
        //                     var deferredPrompt;
        //                     window.addEventListener('beforeinstallprompt', (e) => {
        //                         e.preventDefault();
        //                         deferredPrompt = e;
        //                         showInstallPrompt();
        //                     });
        //                 }
        //                 const pwaInstall = document.querySelectorAll('.pwa-install');
        //                 pwaInstall.forEach(el => el.addEventListener('click', e => {
        //                     deferredPrompt.prompt();
        //                     deferredPrompt.userChoice
        //                         .then((choiceResult) => {
        //                             if (choiceResult.outcome === 'accepted') {
        //                                 console.log('Added');
        //                             } else {
        //                                 localStorage.setItem(pwaName+'-PWA-Timeout-Value', now);
        //                                 localStorage.setItem(pwaName+'-PWA-Prompt', 'install-rejected');
        //                                 setTimeout(function(){
        //                                     if (!window.matchMedia('(display-mode: fullscreen)').matches) {
        //                                         document.getElementById('menu-install-pwa-android').classList.remove('menu-active');
        //                                         document.querySelectorAll('.menu-hider')[0].classList.remove('menu-active');
        //                                     }
        //                                 },50);
        //                             }
        //                             deferredPrompt = null;
        //                         });
        //                 }));
        //                 window.addEventListener('appinstalled', (evt) => {
        //                     document.getElementById('menu-install-pwa-android').classList.remove('menu-active');
        //                     document.querySelectorAll('.menu-hider')[0].classList.remove('menu-active');
        //                 });
        //             }
        //             //Trigger Install Guide iOS
        //             if (isMobile.iOS()) {
        //                 if (localStorage.getItem(pwaName+'-PWA-Prompt') != "install-rejected") {
        //                     setTimeout(function(){
        //                         if (!window.matchMedia('(display-mode: fullscreen)').matches) {
        //                             console.log('Triggering PWA Window for iOS');
        //                             document.getElementById('menu-install-pwa-ios').classList.add('menu-active');
        //                             document.querySelectorAll('.menu-hider')[0].classList.add('menu-active');
        //                         }
        //                     },3500);
        //                 }
        //             }
        //         }
        //     }
        //     checkPWA.setAttribute('class','isPWA');
        // }


        // //End of isPWA
        // if(pwaNoCache === true){
        //     caches.delete('workbox-runtime').then(function() {});
        //     sessionStorage.clear()
        //     caches.keys().then(cacheNames => {
        //       cacheNames.forEach(cacheName => {
        //         caches.delete(cacheName);
        //       });
        //     });
        // }


    }


    //Fix Scroll for AJAX pages.
    if ('scrollRestoration' in window.history) window.history.scrollRestoration = 'manual';

    //End of Init Template
    if (isAJAX === true) {
        if (window.location.protocol !== "file:") {
            const options = {
                containers: ["#page"],
                cache: false,
                animateHistoryBrowsing: false,
                plugins: [
                    new SwupPreloadPlugin()
                ],
                linkSelector: 'a:not(.external-link):not(.default-link):not([href^="https"]):not([href^="http"]):not([data-gallery])'
            };
            const swup = new Swup(options);
            document.addEventListener('swup:pageView', (e) => { init_template(); })
        }
    }

    init_template();
});

