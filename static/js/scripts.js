const URLBASE = "http://localhost:8001";
{
    function open_menu() {
        const menu = document.getElementsByClassName("menu")[0];
        const display = window.getComputedStyle(menu).display;
        const img = document.getElementsByClassName("image-menu")[0];
        
        if(display == "none") {
            menu.style.display = "block";
            img.setAttribute("src", URLBASE+"/static/images/icon-x.png");
        } else {
            menu.style.display = "none";
            img.setAttribute("src", URLBASE+"/static/images/icon-menu.png");
        }
    }
}