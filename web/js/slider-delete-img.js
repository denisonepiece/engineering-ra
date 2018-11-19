$('.delete-slider-news').on('click', function () {
    id=$(this).attr('id');
    $.ajax({
        url:'/admin/news/sliderdelete/',
        data: {id: id},
        type: 'POST',
        success: function(result){
            $('#'+id).parent().parent().remove();
        },
        error: function () {
            alert('Error!');
        }
    });
});
$('.delete-slider-services').on('click', function () {
    id=$(this).attr('id');
    $.ajax({
        url:'/admin/services/sliderdelete/',
        data: {id: id},
        type: 'POST',
        success: function(result){
            $('#'+id).parent().parent().remove();
        },
        error: function () {
            alert('Error!');
        }
    });
});