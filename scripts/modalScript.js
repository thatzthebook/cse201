
             

function showElement(i) {
    document.getElementById(i).style.display='block';
}

// Get the modal


// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    var modal = document.getElementById('addUserID');
    var loginmodal = document.getElementById('loginID');
    var bookinfo = document.getElementById('bookinfo');
    if (event.target == modal) {
        modal.style.display = "none";
    }else if (event.target == loginmodal) {
        loginmodal.style.display = "none";
    }else if (event.target == bookinfo) {
        bookinfo.style.display = "none";
    }
}



window.onkeydown = function(e) {
    var key = e.keyCode ? e.keyCode : e.which;
    var modal = document.getElementById('addUserID');
    var loginmodal = document.getElementById('loginID');
    var bookinfo = document.getElementById('bookinfo');
    if(key == 27) {
        modal.style.display = "none";
        loginmodal.style.display = "none";
        bookinfo.style.display = "none";
    }
}