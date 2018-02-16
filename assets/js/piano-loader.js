"use strict";
var PianoLoader = (function() {
    var x = 0;
    var y = x;
    var s = 0.2;
    var vY = 0;
    var k = 0;
    var maxY = 3;

    function animate() {
        requestAnimationFrame(animate);
        vY += s;
        s = vY <= 0 ? 0.2 : vY >= maxY ? -0.2 : s;
        if (vY <= 0) {
            k = (k + 1) % 4;
        }
        draw();
    }

    function draw() {
        var canvas = document.getElementById("piano-loader_piano");
        var context = canvas.getContext("2d");
        context.clearRect(0, 0, 52, 65);
        context.fillStyle = "#DDD";
        for (var i = 0; i < 4; i++) {
            if (i === k) {
                context.fillRect(x + 14 * i, y + vY / 2, 10, 60 + vY);
            } else {
                context.fillRect(x + 14 * i, y, 10, 60);
            }
        }
        context.fillStyle = "#111";
        for (var j = 0; j < 3; j++) {
            context.fillRect(x + 14 * j + 8, y + 1, 8, 40);
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        window.scrollTo(0,0);
        animate();
    });


    window.onload = function() {
        hide();
    };

    var hide = function hide() {
        document.getElementById("piano-loader").classList.add("hidden");
    };

    return {
        hide: hide
    }
})();