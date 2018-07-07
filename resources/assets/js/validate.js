
function validate_required(field,alerttxt)
{
    with (field)
    {
        if (value==null||value=="") {
            alert(alerttxt);
            return false
        }
        else {
            return true
        }
    }
}

function validate_form(thisform)
{
    with (thisform)
    {
        if (validate_required(name,"name must be filled out!")==false)
        {
            name.focus();
            return false
        }
        if (validate_required(title,"title must be filled out!")==false)
        {
            name.focus();
            return false
        }
        if (validate_required(content,"content must be filled out!")==false)
        {
            name.focus();
            return false
        }
    }
}