$(document).ready(function()
{
    $('#form-account').submit(function()
    {
        success=true;
        if($('#password').val()==='')
        {
            $('#label-password').addClass('text-danger');
            $('#help-password').removeClass('d-none');
            success=false;
        }
        else
        {
            $('#label-password').removeClass('text-danger');
            $('#help-password').addClass('d-none');
        }
        $('#form-password').addClass('was-validated');
        return success;
    });
});

