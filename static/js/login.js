{
    function showpass(check) {
        const checked = check.checked;
        const password = document.getElementsByClassName("pass")[0];
        if(checked == true) {
            password.setAttribute("type", "text");
        } else {
            password.setAttribute("type", "password");
        }
    }
}