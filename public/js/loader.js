setTimeout(function () {
    $('#preloader').addClass('animated fadeOut fade');

    setTimeout(function () {
        $('#preloader').remove();
    }, 1000);
}, 1000);