function showValidation(help, success)
{
    form = help.parent();
    if(success === false)
    {
        form.addClass('text-danger');
        form.children('input').addClass('border-danger');
        help.addClass('d-block');
    }
    return success;
}
function hideValidation(event)
{
    input = event.target;
    form = input.parentElement;
    help = form.getElementsByClassName('invalid-feedback');
    form.classList.remove('text-danger');
    input.classList.remove('border-danger');
    for(i = 0; i < help.length; i++)
        help[i].classList.remove('d-block');
}
