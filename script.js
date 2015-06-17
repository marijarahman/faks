$(document).ready(function() {
  $("#nav li ul").css({
    display: "none"
  });
  $("#menu li").hover(function() {
    $(this)
      .find("ul")
      .stop(true, true)
      .slideDown("fast");
  }, function() {
    $(this)
      .find("ul")
      .stop(true,true)
      .fadeOut("fast");
  });

  $(function() {
  $('.slide:gt(0)').hide();
  setInterval(function() {
    $('.slide:first').fadeOut('slow').next().fadeIn('slow').end().appendTo('#slider');
  }, 2500);
});
$("#login form").hide();
$("#login a").toggle(function(){
  $(this)
  .addClass("active")
  .next("form")
  .animate({'height':'show'}, {
        duration:'slow',
        easing: 'easeOutBounce'
      });
}, function() {
    $(this)
    .removeClass("active")
    .next("form")
    .slideUp();

});
 $('#login form :submit').click(function() {
    $(this)
      .parent()
      .prev('a')
      .click();
  });

$(".email-signup").hide();
$("#signup-box-link").click(function(){
  $(".email-login").fadeOut(100);
  $(".email-signup").delay(100).fadeIn(100);
  $("#login-box-link").removeClass("active");
  $("#signup-box-link").addClass("active");
});
$("#login-box-link").click(function(){
  $(".email-login").delay(100).fadeIn(100);;
  $(".email-signup").fadeOut(100);
  $("#login-box-link").addClass("active");
  $("#signup-box-link").removeClass("active");

});
var photoTh = $('.picture'),
    overlay = $('.overlay');

photoTh.click(function() {    
    var dataPhoto = $(this).attr('src'),
        dataTitle = $(this).data('title');
  
    overlay.show();
    
    $('.picture-big').attr("src", dataPhoto);
    $('.photo-title').text(dataTitle);
  }
);

overlay.click(function() {
  $(this).hide();
});

});
 
  var reEmail = /^\w+([\.-_]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  var pop = true;

function check() {
  var reName = /^[A-Z]{1}[a-z]{2,15}$/;
  var reLastName = /^[A-Z]{1}[a-z]{2,40}$/;

  var name = document.getElementById("txtName").value;
  var lastName = document.getElementById("txtLast").value;
  var email = document.getElementById("txtEmail").value;

  if(!name.match(reName)){
    document.getElementById("errorName").innerHTML = "Name must be at least 2 characters, first capital";
    document.getElementById("errorName").style.fontFamily = "Raleway";
    document.getElementById("errorName").style.fontSize = "0.8em";
    document.getElementById("txtName").style.borderColor="red";
    pop = false;
  }

if(!lastName.match(reLastName)){
    document.getElementById("errorLast").innerHTML = "Last must be at least 2 characters, first capital";
    document.getElementById("errorLast").style.fontFamily = "Raleway";
    document.getElementById("errorLast").style.fontSize = "0.8em";
    document.getElementById("txtLast").style.borderColor="red";
    pop = false;
  }

if(!email.match(reEmail)){
    document.getElementById("errorEmail").innerHTML = "Email must be xxxx@yyyy.zz format";
    document.getElementById("errorEmail").style.fontFamily = "Raleway";
    document.getElementById("errorEmail").style.fontSize = "0.8em";
    document.getElementById("txtEmail").style.borderColor="red";
    pop = false;
  }
 if(pop){
    alert("Your mail has been sent!");
  }

}

var func = true;
function signUp() {
  var signUpEmail = document.getElementById("signUpEmail").value;
  var signUpPass = document.getElementById("signUpPass").value;
  var signUpPass2 = document.getElementById("signUpPass2").value;
  var signUpUser = document.getElementById("signUpUser").value;

  var reUpPass = /^[\S]{7,15}$/;
  var reUpUser = /^[A-Za-z]{6,16}$/;

if(!signUpEmail.match(reEmail)){
    document.getElementById("errorUpEmail").innerHTML = "Email must be xxxx@yyyy.zz format";
    document.getElementById("errorUpEmail").style.fontFamily = "Raleway";
    document.getElementById("errorUpEmail").style.fontSize = "0.8em";
    document.getElementById("signUpEmail").style.borderColor="red";
    func = false;
}

if(!signUpUser.match(reUpUser)){
    document.getElementById("errorUpUser").innerHTML = "Username must be 6 - 16 characters, only alphabethic";
    document.getElementById("errorUpUser").style.fontFamily = "Raleway";
    document.getElementById("errorUpUser").style.fontSize = "0.8em";
    document.getElementById("signUpUser").style.borderColor="red";
   func = false;
}

if(!signUpPass.match(reUpPass)){
    document.getElementById("errorUpPass").innerHTML = "Password must be 7 - 15 characters, no blank space";
    document.getElementById("errorUpPass").style.fontFamily = "Raleway";
    document.getElementById("errorUpPass").style.fontSize = "0.8em";
    document.getElementById("signUpPass").style.borderColor="red";
    func = false;
}
if (signUpPass2!=signUpPass){
    document.getElementById("errorUpPass2").innerHTML = "Please retype your password";
    document.getElementById("errorUpPass2").style.fontFamily = "Raleway";
    document.getElementById("errorUpPass2").style.fontSize = "0.8em";
    document.getElementById("signUpPass2").style.borderColor="red";
    func = false;
}

if (func){
  alert("You have been registrated!");
}

}


function create(){
  if(window.XMLHttpRequest){
    xmlhttp = new XMLHttpRequest();
  }
   else{
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.open("GET","blogposts.xml",false);
  xmlhttp.send();
  xmlDoc = xmlhttp.responseXML;
  search(xmlDoc);
}



  function vote() {
  var d = new Date();
  d.setMonth(d.getMonth() + 6);
  var existsYes = false;
  var existsNo = false;
  var valueYes, valueNo;
  var yes=document.getElementById("rdbtnYes").checked;
  var no=document.getElementById("rdbtnNo").checked; 
  var c=document.cookie.split("; ");
  for(i = 0; i < c.length; i++){
    var c1 = c[i].split(";");
    var name = c1[0].split("=")[0];
    var value = parseInt(c1[0].split("=")[1]);
    if(name == "resultYes"){
            existsYes = true;
            valueYes = value;
            
            }
    if(name == "resultNo"){
            existsNo = true;
            valueNo = value;
            }
              }
  if(yes){ 
  valueYes++;
  document.cookie="resultYes="+valueYes+";expires="+d.toGMTString()+";";
  }
  else {
  valueNo++;
  document.cookie="resultNo="+valueNo+";expires="+d.toGMTString()+";";
  }
              
  if(!existsNo) {document.cookie="resultNo=1;expires="+d.toGMTString()+";"; valueNo=1;}
  if(!existsYes) {document.cookie="resultYes=1;expires="+d.toGMTString()+";"; valueYes=1;}
  document.getElementById("yes").innerHTML="Yes: "+valueYes;
  document.getElementById("no").innerHTML="No: "+valueNo;
  document.getElementById("surveyForm").style.display = 'none';
  document.getElementById("results").style.display = 'block';
  }
function reset() {
  document.getElementById("searchBox").value = "";
}



/*===================================*\

  LIVE SEARCH 

\*===================================*/



function getResult(value) {

  $('#search').on('change', function(){
    var search = $('#search').val();
    if ($.trim(search) != '') {
      $.post('ajax/search.php', {search: value}, function(data){
      $('#search-result').html(data);
      });
    }
    else {
      $('#search-result').html('');
    }
  });
}