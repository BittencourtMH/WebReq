$(document).ready(function()
{
    $('#form').submit(function()
    {
        requirement = new Requirement();
        showValidation($('#help-name'), requirement.validateName($('#name').val()));
        return requirement.getSuccess();
    });
});
