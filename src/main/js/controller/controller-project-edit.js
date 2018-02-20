$(document).ready(function()
{
    $('#form').submit(function()
    {
        project = new Project();
        showValidation($('#help-name'), project.validateName($('#name').val()));
        showValidation($('#help-start'), project.validateStartDate($('#start').val()));
        return project.getSuccess();
    });
});
