

function toggleMenu(x) {
    var menuBox = document.getElementById('menu-box');
    if(menuBox.style.display == "block") { // if is menuBox displayed, hide it
        x.classList.toggle("change");
        menuBox.style.display = "none";
    }
    else { // if is menuBox hidden, display it
      menuBox.style.display = "block";
      x.classList.toggle("change");
    }
  }
$.getJSON('book/readDefault.php', function(results) {
  $.each(results, function(key, value) {
      $('.content').append("<div class='row"+key+"'></div>")
      $('.row'+key+'').append("<div class='box'><h3>"+value.bookName+"</h3></div><br>"+
        "<div class='box'><h3>"+value.author+"<h3></div><br>"+
        "<div class='box'><img onclick=\"showBookInfo("+value.bookID+", 'bookinfo')\" src="+value.filePath+"></div><br>");
  }); 
});


 


function checkPassword(form) {
    password1 = form.password.value;
    password2 = form.repassword.value;

  if (password1 != password2) {
    alert("\nPassword did not match: please try again")
    return false;
  }else {
    return true;
  }
}



