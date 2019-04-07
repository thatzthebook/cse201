

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
  $('.content').append("<div class='row'></div>");
  $.each(results, function(key, value) {
      $('.row').append("<div id='box'><h3>"+value.bookName+"</h3></div>"+
        "<div id='box'><h3>"+value.author+"<h3></div>"+
        "<div id='box'><img onclick=\"showBookInfo('bookinfo')\" src="+value.filePath+"></div>");
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



