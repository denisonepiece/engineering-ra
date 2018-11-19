$('input:radio').on('change', function () {
    document.location.href = "http://engineering-ra.ru/site/news?type="+$(this).val()+"&date_to="+$('option[name=to]:selected').val()+"&date_do="+$('option[name=do]:selected').val();

});
$('select').on('change', function () {
    document.location.href = "http://engineering-ra.ru/site/news?type="+$('input:radio:checked').val()+"&date_to="+$('option[name=to]:selected').val()+"&date_do="+$('option[name=do]:selected').val();
});