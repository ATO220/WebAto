function ValidateEmail(mail)
{
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(mail.value))
    {
        console.log("asdasdas")
        document.getElementById("formContacto").submit();
        return true;
    }else{
        console.log("asdasdasd121212")
        var elemento = document.getElementById("mailInvalid");
        elemento.classList.remove("d-none");
        return false;
    }
}