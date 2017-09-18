$('document').ready(function()
{
    $('#save').click(function()
    {
        if($('#name').val()==='')
        {
            $('#help-name').html('This field cannot be empty.');
            $('#form-name').addClass('has-error');
            return false;
        }
        else
        {
            $('#help-name').html('');
            $('#form-name').removeClass('has-error');
            return true;
        }
    });
});