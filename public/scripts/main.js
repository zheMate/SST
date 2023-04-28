$(window).load(function () {
    const loader = document.querySelector(".loader");
    loader.classList.add("loader-hidden");
    loader.addEventListener("transitionend", () => {
        loader.style.display = "none";
    })
    var height = window.innerHeight,
        x = 0, y = height / 2,
        curveX = 10,
        curveY = 0,
        targetX = 0,
        xitteration = 0,
        yitteration = 0,
        menuExpanded = false;

    blob = $('#blob'),
        blobPath = $('#blob-path'),

        hamburger = $('.hamburger');

    $(this).on('mousemove', function (e) {
        x = e.pageX;

        y = e.pageY;


    });

    $('.hamburger, .menu-inner').on('mouseenter', function () {
        $(this).parent().addClass('expanded');
        menuExpanded = true;
    });

    $('.menu-inner').on('mouseleave', function () {
        menuExpanded = false;
        $(this).parent().removeClass('expanded');
    });

    function easeOutExpo(currentIteration, startValue, changeInValue, totalIterations) {
        return changeInValue * (-Math.pow(2, -10 * currentIteration / totalIterations) + 1) + startValue;
    }

    var hoverZone = 10;
    var expandAmount = 20;

    function svgCurve() {
        if ((curveX > x - 1) && (curveX < x + 1)) {
            xitteration = 0;
        } else {
            if (menuExpanded) {
                targetX = 0;
            } else {
                xitteration = 0;
                if (x > hoverZone) {
                    targetX = 0;
                } else {
                    targetX = -(((60 + expandAmount) / 100) * (x - hoverZone));
                }
            }
            xitteration++;
        }

        if ((curveY > y - 1) && (curveY < y + 1)) {
            yitteration = 0;
        } else {
            yitteration = 0;
            yitteration++;
        }

        curveX = easeOutExpo(xitteration, curveX, targetX - curveX, 100);
        curveY = easeOutExpo(yitteration, curveY, y - curveY, 100);

        var anchorDistance = 200;
        var curviness = anchorDistance - 40;

        if (curveY <= 140 || curveY >= 900) {
            curveY - 10
        }
        else {
            hamburger.css('transform', 'translate(' + curveX + 'px, ' + curveY + 'px)');
        }


        window.requestAnimationFrame(svgCurve);
    }

    window.requestAnimationFrame(svgCurve);

});
