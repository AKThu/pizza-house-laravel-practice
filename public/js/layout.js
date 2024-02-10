

// toggle profile
logout = document.querySelector('#logout-container');
let visible = false;

function profileOnClickHandler(e) {
    if(visible) {
        logout.className = "hidden";
        visible = !visible;
    } else {
        logout.className = "block"
        visible = !visible;
    }
}


// notification hide
noti = document.querySelector('#noti');

function notiHandler() {
    noti.style.display = "none";
}
