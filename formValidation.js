function validate(form) {

    isValid = true;
    message = "ERROR SUBMITTING! \n\n These are required fields: \n\n";
    message2 = "\n Please correct before submitting.";
    errors = "";

    if (form.address.value == "") {
        isValid = false;
        errors += " address \n";
    }

    if (form.image.value == "") {
        isValid = false;
        errors += " image link \n";
    }

    if (form.description.value == "") {
        isValid = false;
        errors += " description \n";
    }
    if (form.bbName.value == "") {
        isValid = false;
        errors += "News summary required \n";
    }

    if (isValid) {
        return true;
    } else {
        alert(message + errors +message2);
        return false;
    }


}
