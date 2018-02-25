$(document).ready(function () {
    $('ul a').on('click', function (event) {
        event.preventDefault();
        $.ajax({
            url: $templateDir + '/update_main.php',
            type: "POST",
            dataType: 'html',
            data: ({
                id: $(this).attr('href')
            }),
            success: function (data) {
                $('main').html(data);
            },
            error: function (event) {
                console.log(event);
            }
        });
    });

    /* ALERT-OUT */
    var first_time = true;
    $(this).on('mouseleave', function () {
        if (first_time) {
            $('._black-cover').css('display', 'flex');

            $('._alert-close').on('click', function () {
                $('._black-cover').css('display', 'none')
            });
        }
        first_time = false;
    });

    /* SMOOTH SCROLL LINK*/
    // Select all links with hashes
    $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function () {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });
});
