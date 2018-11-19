$(document).ready(function(){
    $('.tabs__controls-link').on('click', function(e){
        e.preventDefault();
        
        var item = $(this).closest('.tabs__controls-item'),
            contentItem = $('.tabs__item'),
            itemPosition = item.index();
        
        contentItem.eq(itemPosition)
        .addClass('tabs__item--active')
        .siblings()
        .removeClass('tabs__item--active');
        
        item.addClass('tabs__controls-link--active')
        .siblings()
        .removeClass('tabs__controls-link--active');
    });
    $(".click").trigger('click');
});