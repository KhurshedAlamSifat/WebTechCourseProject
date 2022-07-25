function validateForm() {
    var fname = document.getElementById("sellername").value;
    var email = document.getElementById("selleremail").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    
    
    var pass = document.getElementById("sellerpass").value;
    var pb = document.getElementById("sellerpublication").value;
    
    if (fname == "" ) {
     document.getElementById("errname").innerHTML="*Please fill out full name";
      return false;
    }
    if (document.getElementById("sellergender1").checked == false &&  document.getElementById("sellergender2").checked == false)
    {
      document.getElementById("errgender").innerHTML="*Please select gender";
      return false;
    }
    if(!res)
    {
        document.getElementById("erremail").innerHTML="*Email format is not correct";
        return false; 
    }
    if (pb == "" ) {
        document.getElementById("errpb").innerHTML="*Please fill out publication";
         return false;
       }
    if ( pass.length < 5) {
        document.getElementById("errpass").innerHTML="*Please enter password";
        return false;
      }
   
  }