
             

function showElement(i) {
    document.getElementById(i).style.display='block';
}

function showBookInfo(id,i) {
    $('.bookinfoTable').empty();
    $.getJSON("book/read.php?bookID="+id, function(results) {
         $.each(results, function(key, value) {
            $('.bookinfoTable').append("<tr id="+key+">"+
            "<th>Book Name</th>"+
            "<th>Author</th>"+
            "<th>Book Cover</th>"+
            "<th>Addition</th>"+
            "<th>Library</th>"+
            "<th>Library Address</th>"+
            "<th>Checked Out By</th>"+         
            "</tr>");
             $(".bookinfoTable").append("<tr id="+key+1+">"+
             "<td>"+value.bookName+"</td>"+
               "<td>"+value.author+"</td>"+
               "<td><img src="+value.filePath+"></td>"+
               "<td>"+value.bookAddition+"</td>"+
               "<td>"+value.libraryName+"</td>"+
               "<td>"+value.libraryAddress+"</td>"+
               "<td>"+value.username+"</td>"+
               "</tr>");
         }); 
         document.getElementById(i).style.display='block';
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