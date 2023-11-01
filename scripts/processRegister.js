function valName(event) {
    // Get Form inputs
    let custName = event.currentTarget.value;
    // Validate the Name Input
    let pos = custName.search(/[a-zA-Z]{5,20}/);
    // Debug statements
    // console.log(custName);
    // console.log(pos);

    if (pos < 0) {
        document.getElementById("valName").style.display = "block";
        return false;
    } else {
        document.getElementById("valName").style.display = "none";
        return true;
    }
}

function valEmail(event) {
    // Get Form input
    let custEmail = event.currentTarget.value;

    // Validate form input
    let pos = custEmail.search(/^[\w\.\-]+@([A-Za-z]+\.){1,3}([A-Za-z]){1,3}$/);
    if (pos !== 0) {
        document.getElementById("valEmail").style.display = "block";
        return false;
    } else {
        document.getElementById("valEmail").style.display = "none";
        return true;
    }
}

function valPassword(event) {
    // Get Form input
    let password = document.getElementById('password').value;

    // Validate form input
    let pos = password.search(/[\w]{8,}/);
    if (pos !== 0) {
        document.getElementById("valPassword").style.display = "block";
        return false;
    } else {
        document.getElementById("valPassword").style.display = "none";
        return true;
    }
}

function valCheck(event) {
    //Get check and password
    let check = document.getElementById('check').value;
    let password = document.getElementById('password').value;

    if (check === password) {
        document.getElementById("valCheck").style.display = "none";
        return true;
    } else {
        document.getElementById("valCheck").style.display = "block";
        return false;
    }
}

function reset(event) {
    document.getElementById("valName").style.display = "none";
    document.getElementById("valEmail").style.display = "none";
    document.getElementById("valCheck").style.display = "none";
    document.getElementById("valPassword").style.display = "none";
    return true;
}