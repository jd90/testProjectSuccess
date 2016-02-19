function validate(form) {

    isValid = true;
    message = "ERROR SUBMITTING! \n\n These are required fields: \n\n";
    message2 = "\n Please correct before submitting.";
    errors = "";

    if (form.address.value == "") {
        isValid = false;
        errors += " Address \n";
    }

    if (form.image.value == "") {
        isValid = false;
        errors += " Image link \n";
    }

    if (form.description.value == "") {
        isValid = false;
        errors += " Description \n";
    }
    if (form.bbName.value == "") {
        isValid = false;
        errors += " B&B name \n";
    }

    if (isValid) {
        return true;
    } else {
        alert(message + errors +message2);
        return false;
    }


}
