
             

function showElement(i) {
    document.getElementById(i).style.display='block';
}

function showBookInfo(i) {
    document.getElementById(i).style.display='block';
    JQuery.getJSON('book/readDefault.php?bookID='+i, function(results) {
        $('bookinfoContent').append("stuff");
        $('.bookinfoContent').append("<table class='bookinfoTable'>");
         $.each(results, function(key, value) {
             $('.bookinfoTable').append("<tr><td>"+value.bookName+"</td>"+
               "<td>"+value.author+"</td>"+
               "<td><img src="+value.filePath+"></td><td>"+
               value.userID+"</td><td>"+value.libraryName+"</td></tr>");
         }); 
       });
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