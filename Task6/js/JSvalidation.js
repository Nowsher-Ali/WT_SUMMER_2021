function validateForm() {
    var fname = document.getElementById("fname").value;
    var email = document.getElementById("email").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    var pass= document.getElementById("pass").value;
    var cmt = document.getElementById("cmt").value;
    var file = document.getElementById("filetoupload").value;
    
    var g1 = document.getElementById("male").checked;
    var g2 = document.getElementById("female").checked;
    var g3 = document.getElementById("other").checked;

    var h1 = document.getElementById("hobby1").checked;
    var h2 = document.getElementById("hobby2").checked;
    var h3 = document.getElementById("hobby3").checked;

    if (fname == "" ) {
     document.getElementById("errorfname").innerHTML="Please fill out first name";
      return false;
    }
    if(!res)
    {
      document.getElementById("erroremail").innerHTML="Email format is not correct";
      return false; 
    }

    if (pass == "") 
    {
      document.getElementById("errorpass").innerHTML="Please fill out password";
      return false;
    }
    else if(pass.length < 5)
    {
      document.getElementById("errorpass").innerHTML="Password must be atleast 5 character long";
      return false;
    }

    if (cmt == "") 
    {
      document.getElementById("errorcmt").innerHTML="Please fill out comment box";
      return false;
    }

    if(g1==false && g2==false && g3==false)
    {
      document.getElementById("errorgender").innerHTML="Please select atleast one gender option";
      return false;
    }

    if (h1==false && h2==false && h3==false) 
    {
      document.getElementById("errorchkbox").innerHTML=" Please select atleast one hobby option";
      return false;
    }

    if (file == "") {
      document.getElementById("errorfile").innerHTML="Please upload a file";
      return false;
  }
}