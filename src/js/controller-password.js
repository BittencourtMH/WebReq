$(document).ready(function()
{
    $('#form-password').submit(function()
    {
        success=true;
        if($('#old-password').val()==='')
        {
            $('#label-old-password').addClass('text-danger');
            $('#help-old-password').removeClass('d-none');
            success=false;
        }
        else
        {
            $('#label-old-password').removeClass('text-danger');
            $('#help-old-password').addClass('d-none');
        }
        $('#form-old-password').addClass('was-validated');
        if($('#new-password').val()==='')
        {
            $('#label-new-password').addClass('text-danger');
            $('#help-new-password').removeClass('d-none');
            success=false;
        }
        else
        {
            $('#label-new-password').removeClass('text-danger');
            $('#help-new-password').addClass('d-none');
        }
        $('#form-new-password').addClass('was-validated');
        if($('#new-password2').val()==='')
        {
            $('#label-new-password2').addClass('text-danger');
            $('#help-new-password2').text('Please provide a valid password.');
            $('#help-new-password2').removeClass('d-none');
            success=false;
        }
        else if($('#new-password').val()!==$('#new-password2').val())
        {
            $('#label-new-password2').addClass('text-danger');
            $('#help-new-password2').text('Passwords do not match.');
            $('#help-new-password2').removeClass('d-none');
            success=false;
        }
        else
        {
            $('#label-new-password2').removeClass('text-danger');
            $('#help-new-password2').addClass('d-none');
        }
        $('#form-new-password2').addClass('was-validated');
        return success;
    });
});

