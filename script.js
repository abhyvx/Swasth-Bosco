function togglePwd() {
    var pwdInput = document.getElementById("password");
    if (pwdInput.type === "password") {
        pwdInput.type = "text";
    } else {
        pwdInput.type = "password";
    }
}
