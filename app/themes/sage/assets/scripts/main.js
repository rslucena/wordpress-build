(function ($) {
    let Sage = {
        'common': {
            init: function () {
            },
        },
        'home': {
            init: function () {
            },
            finalize: function () {
            }
        },
    };

    let UTIL = {
        fire: function (func, funcname, args) {
            let fire;
            let namespace = Sage;
            funcname = (funcname === undefined) ? 'init' : funcname;
            fire = func !== '';
            fire = fire && namespace[func];
            fire = fire && typeof namespace[func][funcname] === 'function';

            if (fire) {
                namespace[func][funcname](args);
            }
        },
        loadEvents: function () {
            UTIL.fire('common');
            $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function (i, classnm) {
                    UTIL.fire(classnm);
                    UTIL.fire(classnm, 'finalize');
                }
            );
            UTIL.fire('common', 'finalize');
        }
    };
    $(document).ready(UTIL.loadEvents);

    //COOKIE
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    function checkCookie(name, value) {
        let values = getCookie(name);
        if (values == "") {
            setCookie(name, value, 365);
            values = getCookie(name);
        }
        return values;
    }

})(jQuery);