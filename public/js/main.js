$(document).ready(function() {
    $('.get-lang').on('click', function() {
        const lang = $(this).data('lang');
        document.location.href = '/?lang=' + lang;
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip({
            trigger: 'manual',
        });
    })

    const selectors = $('.country,.region,.city');
    $(function () {
        selectors.tooltip({
            trigger: 'manual',
        });
    })
    selectors.on('mouseover', function() {
        $(this).tooltip('show');
    });

    selectors.on('mouseout', function() {
        $(this).tooltip('hide');
    });
});
