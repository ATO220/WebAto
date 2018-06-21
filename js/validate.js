function ValidateEmail(mail)
{
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail.value))
    {
        console.log("asdasdas")
        document.getElementById(contacto).submit();
        return true;
    }else{
        console.log("asdasdasd121212")
        var elemento = document.getElementById("mailInvalid");
        elemento.classList.remove("d-none");
        return false;
    }
}