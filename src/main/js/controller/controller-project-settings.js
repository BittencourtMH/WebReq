$(document).ready(function()
{
    $('#form').submit(function()
    {
        user = new User();
        showValidation($('#help-password'), user.validatePassword($('#password').val()));
        return user.getSuccess();
    });
});
