$(function(){
    $(document).on('change', 'select', function(){
        if($(this).val() == "placeholder"){
            $(this).css('color','#ddd')
        } else {
            $(this).css('color','#333')
        }
    });

    $('select').each(function(){
        if ($(this).val() == ""){
            $(this).css('color','#ddd')
        }else {
            $(this).css('color','#333')
        }
    })
});
