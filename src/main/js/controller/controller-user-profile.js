$(document).ready(function()
{
    $('#form').submit(function()
    {
        user = new User();
        showValidation($('#help-name'), user.validateName($('#name').val()));
        showValidation($('#help-email'), user.validateEmail($('#email').val()));
        return user.getSuccess();
    });
});
