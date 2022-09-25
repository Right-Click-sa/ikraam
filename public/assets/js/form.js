//conent-us//
(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
  })()

///fixed-navder///
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
//activ-link-nav//
const currentlocation = location.href;
const menuitem = document.querySelectorAll('.navbar-index .nav-link');
 const menulength = menuitem.length
for (let i = 0; i<menulength; i++){
 if(menuitem[i].href === currentlocation) {
   menuitem[i].className = "active"
    }
}
//activ-link-nav//
const currentlocatione = location.href;
const menuiteme = document.querySelectorAll('.nav-request a');
 const menulengthe = menuiteme.length
for (let i = 0; i<menulengthe; i++){
 if(menuiteme[i].href === currentlocatione) {
   menuiteme[i].className = "active"
    }
}

// ******************VIDEO*****************************

var myVideo = document.getElementById('myVideo');

$(".video-date").on('click',function () {
    // debugger;
        if (myVideo.paused){
        $("#myBtn").hide();
        myVideo.play();

        }
        else {
        myVideo.pause();
        $("#myBtn").show();
        }
    });
////file////
updateList = function() {
  var input = document.getElementById('file');
  var output = document.getElementById('fileList');
  var children = "";
  for (var i = 0; i < input.files.length; ++i) {
      children +=  '<li>'+ input.files.item(i).name + '<span class="remove-list" onclick="return this.parentNode.remove()">X</span>' + '</li>'
  }
  output.innerHTML = children;
}
$(window).scroll(function () {
  if ($(window).scrollTop() >= 100){
$('.donation-btns').addClass('botoon-top');
$('.floating-btns').addClass('botton-witc')
  }
  else {

      $('.donation-btns').removeClass('botoon-top');
      $('.floating-btns').removeClass('botton-witc')


  }
});

$(document).ready(function() {
//nav-search//
$('#show').click(function() {
  $('.form-index').toggle("slide");
});


  });

  
