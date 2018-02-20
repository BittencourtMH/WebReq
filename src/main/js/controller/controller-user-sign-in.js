$(document).ready(function()
{
    $('#form').submit(function()
    {
        user = new User();
        showValidation($('#help-username'), user.validateUsername($('#username').val()));
        showValidation($('#help-password'), user.validatePassword($('#password').val()));
        return user.getSuccess();
    });
});
