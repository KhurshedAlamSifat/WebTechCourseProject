function validateForm() {
    var fname = document.getElementById("delivername").value;
    var email = document.getElementById("deliveremail").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    
    
    var pass = document.getElementById("deliverpass").value;
    var city = document.getElementById("delivercity").value;
    var area = document.getElementById("deliverarea").value;
    var phone = document.getElementById("deliverphone").value;

    if (fname == "" ) {
     document.getElementById("errname").innerHTML="*Please fill out full name";
      return false;
    }

    if(!res)
    {
        document.getElementById("erremail").innerHTML="*Email format is not correct";
        return false; 
    }
    if (city == "" ) {
        document.getElementById("errcity").innerHTML="*Please fill out city";
         return false;
       }
       if (area == "" ) {
        document.getElementById("errarea").innerHTML="*Please fill out area";
         return false;
       }
       if (phone .length < 10 ) {
        document.getElementById("errphn").innerHTML="*Please enter valid phone no";
         return false;
       }
    if ( pass.length < 5) {
        document.getElementById("errpass").innerHTML="*Please enter password";
        return false;
      }
   
  }