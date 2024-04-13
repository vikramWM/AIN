"use strict";

var KTAccountSettingsSigninMethods = {
    init: function () {
        var t, e;

        (function () {
            var n = document.getElementById("kt_signin_password");
            var i = document.getElementById("kt_signin_password_edit");
            var r = document.getElementById("kt_signin_password_button");
            var a = document.getElementById("kt_password_cancel");

           

            r.querySelector("button").addEventListener("click", function () {
                d();
            });

            a.addEventListener("click", function () {
                d();
            });

           
            var d = function () {
                n.classList.toggle("d-none");
                r.classList.toggle("d-none");
                i.classList.toggle("d-none");
            };
        })();

        
    }
};

function onDOMContentLoaded(callback) {
    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", callback);
    } else {
        callback();
    }
}

onDOMContentLoaded(function () {
    KTAccountSettingsSigninMethods.init();
});
