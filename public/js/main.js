$(function () {
    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
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
                    }, 100, function () {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        }
                    });
                }
            }
        });

    // Currency formatter on input fields
    $('[data-type="currency"]').each(function () {
        formatCurrency($(this));
    });

    // Add/Remove item
    $('.btn-cart').click(function () {
        let id = ( $(this).data('content') ).toString();
        let action = $(this).data('action');
        let response;

        switch (action) {
            case 'add':
                response = addItem(id, $(this));
                break;

            case  'remove':
                response =  removeItem(id, $(this));
                break;
        }

        console.log(Cart.all(), response);
    });

    function addItem(id, button = null) {

        if (!id || Cart.exists(id)) {
            return;
        }

        Cart.put(id);

        if (button) {
            button.find('.text-add').hide();
            button.find('.text-remove').show();

            button.data('action', 'remove');
            button.removeClass('btn-dark').addClass('btn-danger');
        }

        return true;
    }
    
    function removeItem(id, button = null) {
        if (!id || !Cart.exists(id)) {
            return;
        }

        Cart.remove(id);

        if (button) {
            button.find('.text-remove').hide();
            button.find('.text-add').show();

            button.data('action', 'add');
            button.removeClass('btn-danger').addClass('btn-dark');
        }

        return true;
    }

    try {
        $('#feedback-modal').modal('show');
    } catch (e) {
        console.log(e);
    }
});