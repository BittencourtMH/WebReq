class User
{
    constructor()
    {
        this.success = true;
    }
    getSuccess()
    {
        return this.success;
    }
    validateUsername(username)
    {
        return this.updateSuccess(username !== '');
    }
    validatePassword(password)
    {
        this.password = password;
        return this.updateSuccess(password !== '');
    }
    validatePassword2(password2)
    {
        return this.updateSuccess(this.password === password2);
    }
    validateName(name)
    {
        return this.updateSuccess(name !== '');
    }
    validateEmail(email)
    {
        return this.updateSuccess(email !== '');
    }
    updateSuccess(valid)
    {
        if(this.success === true)
            this.success = valid;
        return valid;
    }
}
