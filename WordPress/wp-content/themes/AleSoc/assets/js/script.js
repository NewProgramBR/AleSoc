$(document).ready(function () {
    $.ajax({
        url: $templateDir + '/archive.php',
        type: "POST",
        dataType: 'html',
        success: function (data) {
            console.log(data);
            $('main .container').html(data);
        },
        error: function (event) {
            console.log(event);
        }
    });

    $('main .container').on('mouseleave', function () {
        $('.opt').each(function () {
            $(this).css('opacity', 1);
        });
    });

    $('main .container').on('mouseenter', '.opt', function () {
        $op = this;
        $('.opt').each(function () {
            if (this == $op) {
                $(this).css('opacity', 1);
            } else {
                $(this).css('opacity', 0.6);
            }
        });
    });

    $k = 0; //clicks counter
    $('main .container').on('click', '.opt', function () {
        $k++;
        $post = ($k >= 2) ? true : false; //posts time?
        $type = ($post) ? 'html' : 'json'; //dataType = 'html' when posts only
        $('main').fadeTo('slow', 0, function () {
            $.ajax({
                url: $templateDir + '/update_avaliacoes.php',
                type: "POST",
                dataType: $type,
                data: ({
                    post: $post
                }),
                success: function (data) {
                    console.log(data);
                    if ($post) {
                        $('main p').remove();
                        $('main .container').html(data);
                        $('main .container').removeClass('opts');
                        $('main .container').addClass('posts');
                    } else {
                        $('main p').html(data[0]);
                        $('main .container').html(data[1]);
                    }
                },
                error: function (event) {
                    console.log(event);
                }
            });
        }).fadeTo('slow', 1);
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
