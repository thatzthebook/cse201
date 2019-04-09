

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
$.getJSON('book/read.php', function(results) {
  mainPage(results); 
});

function mainPage(results) {
  $.each(results, function(key, value) {
    $('.content').append("<div class='row"+key+"'></div>")
    $('.row'+key+'').append("<div class='box'><h3>"+value.bookName+"</h3></div><br>"+
      "<div class='box'><h3>"+value.author+"<h3></div><br>"+
      "<div class='box'><img onclick=\"showBookInfo("+value.bookID+", 'bookinfo')\" src="+value.filePath+"></div><br>");
}); 
}


$(document).ready(function() {
  var searchBox = document.getElementById("searchText");
  //on key up search
  $('#searchText').keyup(function () {
    var search = searchBox.value;
    if(search == "") {
      $.getJSON('book/read.php', function(results) {
        mainPage(results);
        location.reload(true);
      })
    } else if(search.slice(-1) ==="%"){
      $('.content').empty();
      $.getJSON('book/read.php?search='+search, function(results) {
       mainPage(results);
      })
    }else {
     search= search+"%";
      $('.content').empty();
      $.getJSON('book/read.php?search='+search, function(results) {
      mainPage(results);
      })
    }
  })
})
 


function checkPassword(form) {
    password1 = form.password.value;
    password2 = form.repassword.value;

  if (password1 != password2) {
    alert("Password did not match: please try again")
    return false;
  }else {
    return true;
  }
}



