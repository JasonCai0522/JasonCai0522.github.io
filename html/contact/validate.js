function validate() {
    var emailadr = document.emailform.email.value;
    atsign = emailadr.indexOf("@");
    period = emailadr.lastIndexOf(".");

    if (atsign < 1 || (period-atsign < 2)) {
        alert("Error in Email Address Format!");
        return false
    }

    return true
}
