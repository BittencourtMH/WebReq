$(document).ready(function()
{
    $('#form').submit(function()
    {
        user = new User();
        showValidation($('#help-username'), user.validateUsername($('#username').val()));
        if(showValidation($('#help-password'), user.validatePassword($('#password').val())))
            showValidation($('#help-password2'), user.validatePassword2($('#password2').val()));
        showValidation($('#help-name'), user.validateName($('#name').val()));
        showValidation($('#help-email'), user.validateEmail($('#email').val()));
        return user.getSuccess();
    });
});
