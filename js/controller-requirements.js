$('document').ready(function()
{
    $('#requirements tr').click(function()
    {
        if($(this).attr('id'))
            $(this).toggleClass('active');
    });
});