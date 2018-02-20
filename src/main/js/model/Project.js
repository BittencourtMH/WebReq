class Project
{
    constructor()
    {
        this.success = true;
    }
    getSuccess()
    {
        return this.success;
    }
    validateName(name)
    {
        return this.updateSuccess(name !== '');
    }
    validateStartDate(startDate)
    {
        return this.updateSuccess(startDate !== '');
    }
    updateSuccess(valid)
    {
        if(this.success === true)
            this.success = valid;
        return valid;
    }
}
