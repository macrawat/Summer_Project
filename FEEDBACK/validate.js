<!--Form Validation-->
    <script type="text/javascript">
function validateForm(){
  
  var name = document.getElementById('your-name');
  var email = document.getElementById('your-mail');
  var message = document.getElementById('message');
  alert(name+email+message);

  if(isAlphabet(name, "Please enter only letters for your's Name")){
      if(emailValidator(email, "Please enter a valid email address")){
        if(notEmpty(message, "Please Fill up your Feedback")){
                    return true;
                  }
                }
              }
              
  return false;
  
}


function notEmpty(elem, helperMsg){
  if(elem.value.length == 0){
    alert(helperMsg);
    elem.focus(); // set the focus to this input
    return false;
  }
  return true;
}
    
    
function isAlphabet(elem, helperMsg){
  var alphaExp = /^[a-zA-Z][a-zA-Z ]+$/;
  if(elem.value.match(alphaExp)){
    return true;
  }else{
    alert(helperMsg);
    elem.focus();
    return false;
  }
}         



function emailValidator(elem, helperMsg){
  var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-Z0-9]{2,4}$/;
  if(elem.value.match(emailExp)){
    return true;
  }else{
    alert(helperMsg);
    elem.focus();
    return false;
  }
}
</script> 