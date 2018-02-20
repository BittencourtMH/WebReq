$(document).ready(function()
{
    $('#form').submit(function()
    {
        user = new User();
        showValidation($('#help-old-password'), user.validatePassword($('#old-password').val()));
        if(showValidation($('#help-new-password'), user.validatePassword($('#new-password').val())))
            showValidation($('#help-new-password2'), user.validatePassword2($('#new-password2').val()));
        return user.getSuccess();
    });
});
