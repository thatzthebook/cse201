

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

 

  

  function createNode(element) {
    return document.createElement(element);
  }

  function append(parent, el) {
    return parent.appendChild(el);
  }
  
  function print(data) {
    $('content').append($("<div id='row'/>"));
  }
 


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



