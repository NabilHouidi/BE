function validateForm() {
    var name = document.forms["contact_form"]["u_name"].value;
    var mail = document.forms["contact_form"]["email"].value;
    var message = document.forms["contact_form"]["message"].value;
    
    if (name==""||mail==""||message==""){
        alert("All input fields must be filled out");
        return false;
    }
    var RegExpr = /\S+@\S+\.\S+/;
    if (!RegExpr.test(mail)){
        alert("mail must be a valid email");
        return false;

    }


}