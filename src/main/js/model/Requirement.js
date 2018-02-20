class Requirement
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
    updateSuccess(valid)
    {
        if(this.success === true)
            this.success = valid;
        return valid;
    }
}
