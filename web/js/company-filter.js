$('input:radio').on('change', function () {
    document.location.href = "http://engineering-ra.ru/site/company?id_type="+$(this).val()+"&id_activity="+$('option:selected').val();

});
$('select').on('change', function () {
    document.location.href = "http://engineering-ra.ru/site/company?id_type="+$('input:radio:checked').val()+"&id_activity="+$(this).val();
});