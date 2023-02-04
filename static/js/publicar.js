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

{
    // bbcode
    function insert_bbcode(bbcode) {
        const textarea = document.getElementsByName("content")[0];
        const ini = textarea.selectionStart;
        const fin = textarea.selectionEnd;
        const textselection = textarea.value.substring(ini,fin);
        
        const textini = textarea.value.substring(0,ini);
        const textfin = textarea.value.substring(fin,textarea.value.length);
        const code = "[" + bbcode + "]" + textselection + "[/" + bbcode + "]";
        const new_text = textini + code + textfin;
        textarea.value = new_text;
    }
    
    const file = document.getElementById("file");
    const title = document.getElementById("title-file");
    let conx;
    function upload_image() {
        const form = new FormData();
        form.append("file", file.files[0]);
        form.append("title", title.value);
        conx = new XMLHttpRequest();
        conx.onreadystatechange = success_image;
        conx.open("POST", URLBASE+"/includes/upload_file.php?type=image");
        conx.send(form);
    }
    function success_image() {
        if(conx.readyState == 4) {
            const response = conx.responseText;
            switch(response) {
                case "err1":
                    alert("tipo no existe");
                    break;
                case "err2":
                    alert("campos vacios");
                    break;
                case "err3":
                    alert("error al subir archivo");
                    break;
                default:
                    insert_file("image", response);
            }
        }
    }
    
    
    
    function upload_video() {
        const form = new FormData();
        form.append("file", file.files[0]);
        form.append("title", title.value);
        conx = new XMLHttpRequest();
        conx.onreadystatechange = success_video;
        conx.open("POST", URLBASE+"/includes/upload_file.php?type=video");
        conx.send(form);
    }
    function success_video() {
        if(conx.readyState == 4) {
            const response = conx.responseText;
            switch(response) {
                case "err1":
                    alert("tipo no existe");
                    break;
                case "err2":
                    alert("campos vacios");
                    break;
                case "err3":
                    alert("error al subir archivo");
                    break;
                default:
                    insert_file("video", response);
            }
        }
    }
    
    function insert_file(opc,file) {
        const textarea = document.getElementsByName("content")[0];
        const ini = textarea.selectionStart;
        const fin = textarea.selectionEnd;
        const textini = textarea.value.substring(0, ini);
        const textfin = textarea.value.substring(fin, textarea.value.length);
        let ins;
        if(opc == "image") {
            ins = "[img=" + URLBASE+"/static/images/"+file + "]";
        } else {
            ins = "[video=" + URLBASE+"/static/videos/"+file +"][/video]"
        }
        const new_text = textini + ins + textfin;
        textarea.value = new_text;
    }
}