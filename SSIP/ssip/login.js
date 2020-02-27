var attempt = 30;

function validate() {
    var resID = document.getElementById("resID").value;
    var password = document.getElementById("password").value;
    if (resID == "abc" && password == "123") {
        alert("Login successfully");
        window.location = "SSIP/.html";
        return false;
    } else {
        attempt--;
        alert("You have left " + attempt + " attempt;");
        if (attempt == 0) {
            document.getElementById("resID").disabled = true;
            document.getElementById("password").disabled = true;
            document.getElementById("submit").disabled = true;
            return false;
        }
    }
}