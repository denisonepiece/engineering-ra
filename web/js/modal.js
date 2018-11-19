$('html').on('click', '#modal', function () {
    $(".modal-container").addClass('modal-visible');
});
$('html').on('click', '.modal-header__close-btn', function () {
    $(".modal-container").removeClass('modal-visible');
});
