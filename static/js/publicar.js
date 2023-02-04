{
    let conx;
    function publicar() {
        const form = new FormData(document.getElementsByClassName("form-publicar")[0]);
        conx = new XMLHttpRequest();
        conx.onreadystatechange = response;
        conx.open("POST", URLBASE+"/includes/publicar.php");
        conx.send(form);
    }
    function response() {
        if(conx.readyState == 4) {
            alert(conx.responseText);
        }
    }
}