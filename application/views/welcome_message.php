<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
      <link rel="stylesheet" type="text/css" href="styles.css">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	body{
    background-color: #;

   background-image: url("Artboard 1.jpg");

  background-repeat: no-repeat;
  background-size: 100%;
      background-image: linear-gradient(to right, #9c41a7 , #8264bd);
}
.container{
    width: 80%;
    align-content: center;
}
#form3Example1m{

         border-radius: 35px;
}
#fpass{

   border-radius: 35px;
}
.gender{
  border-radius: 35px;
  height: 51px;
}
.ball{
        width: 60%;
    position: absolute;

}
body {
   
    font-size: .8rem;
    font-weight: 500;
    line-height: 1;
    /*color: #212529;*/
    text-align: left;
    /*background-color: #fff;*/
}
.card {
  border: 0 solid rgba(0,0,0,.125);
    border-radius: 2rem;
}

.form-control-lg {
    height: calc(1.5em + 1rem + 2px);
    padding: 0.5rem 1rem;
    font-size: 1.1rem;
    line-height: 1.1;
      }
       .btn-lg {
    /* padding: 0.5rem 1rem; */
    font-size: -24.75rem;
    line-height: -36.5;
    border-radius: 4.3rem;

}
.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    background-color: #9151b1;
    -ms-flex-direction: column;
    flex-direction: column;
    box-shadow: 100px;
    box-shadow: 100px 100px 100px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;

    em: ;
    */box-shadow: azure;
}
.text-center{
  margin-right: 20px;
}
P.ty{
  color: #6c757d;
}
.form-control {
    
    color: #6c757d;
    
}
h3{

  color: #fff;
  text-align: center;
}
.gender {
    border-radius: 35px;
    height: 37px;

}
.a{
  margin-left: 0px;
}
.q{
  margin-right: 18px;

}
.f{
  border-radius: 35px;
}
.btn-lg{
  font-size: 1 ;
}
.btn.btn-primary.btn {
  background: aqua!important ;
  height: 38px;
  line-height: 4px;
}
body{
  font-size: .8rem;
    font-weight: 300;
    line-height: 1;
    color: #f8f9fa;
    text-align: right;
    background-color: #fff;
}
.mt-2{
    margin-top: 0.5rem!important;
    text-align: center;
}
a {
    color: #00ffe0;
    text-decoration: none;
    background-color: transparent;
}

body {
        padding: 10px;
        background-color: white;
        color: black;
        font-size: 10px;
      }
      .dark-mode {
        background-color: black;
        color: white;
      }
      .light-mode {
        background-color: white;
        color: black;

        body 
    padding: 10px;
    background-color: white;
    color: black;
    font-size: 10px;
    font-weight: 300;
}
body {
    padding: 10px;
    background-color: white;
    color: black;
    font-size: 15px;
}
#confirmphone{
  position: relative;
  text-align: center;
}
.far {
  margin-top: 40 px;
}
.l{
  color: white;
}

.text-center{
  float: left;
}
.passeye{
  position: absolute;
    margin-left: -25px;
    margin-top: 11px;
}
.input-help {
    font-size: 10px;
    position: absolute;
    right: 70px;
    left: 11px;
    color: red;
}
#msg {
    position: absolute;
    font-size: 11px;
    color: black;
}
input:focus, textarea:focus, select:focus{
        outline: none!important;
        border-color: inherit;
        box-shadow: none!important;
    }  
  
#msg {
    position: absolute;
    color: #4ae808;
}

element.style {
    color: red;
}

	
	</style>
</head>
<body>

 <section class="gradient-custom">
         <div class="container py-5 h-100">
            <div class="row">
               <form action="#" name="myForm" onsubmit="return validateform()" method="post" />
                  <div class="col-md-6 col-lg-5 col-12 m-auto">
                     <div class="card x-auto p-3">
                        <h3 >REGISTER</h3>
                        <div class="col">
                           <div class="form-group">
                              <input type="text" id="name" name="name" class="form-control f" placeholder="Name" required maxlength="20"onkeypress = "return  (event.charCode > 96 && event.charCode < 123) || (event.charCode > 64 && event.charCode < 91) || (event.charCode == 32)"autocomplete="off">
                           <span id=username class="text-danger font-weight-bold"></span>
                           </div>
                           <div class="form-group">
                              <input type="email" name="email" id="email" class="form-control f" placeholder="Email" pattern = "^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$">
                              <span id="result"></span>
                           </div>

                           <div class="form-group">
                              <i class="far fa-eye passeye" id="togglePassword" style=""></i>
                              <input type="password" name="password" onkeyup="validatepass1()" id="password" class="form-control f"
                                 placeholder="Password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" maxlength="40" required onfocusout="passwordValidation()" > 
                              <div class="input-help">
                                 <span style="display:none;" id="1-letter"  class="l">•<strong style="color:red;">At least one lower case letter</strong></span>
                                 <span style="display:none;" id="1-number"class="l">•<strong style="color:red;">At least one number</strong></span>
                                 <span style="display:none;" id="pwd-length" class="l">•<strong style="color:red;">At least 8 characters long</strong></span>
                                 <span style="display:none;" id="cap" class="l">•<strong style="color:red;">At least one uppercase</strong></span>
                                 <span style="display:none;" id="q"   class="l">•<strong style="color:red;">At least one Special character</strong></span>
                              </div>
                               <div id="div4"></div>
                           </div>
                           <div class="form-group">
                              <input type="password" name="Cpassword" onkeyup="validatepass1()" class="form-control f" placeholder="Confirm Password"id="Cpassword" name="Cpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  maxlength="20" required onkeyup="passcheck()">
                              <div style="position: absolute;" >
                                 <span style="color:red;" id="Cpass"      class="red"></span>
                              </div>
                              <div id="div6"></div>
                           </div>
                           <div class="form-group">
                              <input type="text" type="Number" id="Phone" onkeyup = "mobilevali()" class="form-control f" placeholder="Phone No" required maxlength="10"pattern="^[6-9]\d{9}$"id="mobile"name="mobile" required >
                              <span id=confirmphone class=" text-center sfont-weight-bold"></span>
                           </div>

                           <div class="row">
                              <div class="col-12 col-md-6">
                                 <div class="form-group">
                                    <select class=" form-control mr-2 gender a" required />
                                       <option  value="" selected disabled>Select Gender</option>
                                       <option value="Male">Male</option>
                                       <option value="Female">Female</option>
                                       <option value="Female">Others</option>

                                    </select>
                                 </div>
                              </div>
                              <div class="col-12 col-md-6">
                                 <div class="form-group">
                                    <input type="Address" name="Address" id="Address" class="form-control f " placeholder="Address" required>
                                 </div>
                              </div>
                              <div class="col-12 col-md-6">
                                 <div class="form-group">
                                    <input type="State" id="state" name="State" class="form-control f " placeholder="State" required maxlength="20"onkeypress = "return  (event.charCode > 96 && event.charCode < 123) || (event.charCode > 64 && event.charCode < 91) || (event.charCode == 32)"> 
                                 </div>
                              </div>
                              <div class="col-12 col-md-6">
                                 <div class="form-group">
                                    <input type="pin" name="pin" id="zipCode" class="form-control f " placeholder="Pin"required maxlength="6"
                                       onkeyup="validateInput(); fetchapi();">
                                    <div id="msg"></div>
                                    <span id="pin-pi" class="f-error test-danger font-weight-bold"></span>
                                 </div>
                              </div>


                              <div class="col-12 col-md-6">
                                 <div class="form-group">
                                    <input type="City" name="City" id="City" class="form-control f " placeholder="City" required required maxlength="20"onkeypress = "return  (event.charCode > 96 && event.charCode < 123) || (event.charCode > 64 && event.charCode < 91) || (event.charCode == 32)">

                                 </div>
                              </div>
                              <div class="col-12 col-md-6">
                                 <div class="form-group">
                                    <input type="Country" name="Countey" id="Country" class="form-control f " placeholder="Country" required required maxlength="20"onkeypress = "return  (event.charCode > 96 && event.charCode < 123) || (event.charCode > 64 && event.charCode < 91) || (event.charCode == 32)">
                                 </div>
                              </div>
                           </div>
                           <div class="col mb-4 ff">
                              <input type="checkbox" class="checkbox" required> I accept <a href="#!">terms of use </a>
                           </div>
                        </div>

                        <div class="col ">
                           <button type="submit" id="submit" value="submit"  class="submit btn btn-primary text-dark btn-lg btn-block">REGISTER NOW</button>
                           
                        </div>
                        <p class="mx-auto mt-2 text-blue ">Already a member? <a href="#!"> LOGIN</a></p>
                     </div>
                  </div>
            </div>
         </div>
         </form>
         </div>
         </div>
      </section>

</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script type="text/javascript">
    

$(function(){
$("#email").on('keypress',function(e) {
    if (e.which == 32) 
        return false;

    });
});
 
 $(function(){
$("#Phone").on('keypress',function(e) {
    if (e.which == 32) 
        return false;

    });
});

$(function(){
$("#state").on('keypress',function(e) {
    if (e.which == 32) 
        return false;

    });
});


$(function(){
$("#pin").on('keypress',function(e) {
    if (e.which == 32) 
        return false;

    });
});

$(function(){
$("#City").on('keypress',function(e) {
    if (e.which == 32) 
        return false;

    });
});


$(function(){
$("#Country").on('keypress',function(e) {
    if (e.which == 32) 
        return false;

    });
});
$(function(){
$("#Phone").on('keypress',function(e) {
    if (e.which == 32) 
        return false;

    });
});
$(function(){
$("#zipCode").on('keypress',function(e) {
    if (e.which == 32) 
        return false;

    });
});

   //   };
      
      function mobilevali(){
         let mob_object = document.getElementById("Phone");
        
         if((/^[6-9]\d{9}$/.test(mob_object.value) == false) || (mob_object.value.length >10)){
             document.getElementById("confirmphone").style.color = "red";
             document.getElementById("confirmphone").innerHTML = "Invalid Phone No";
             document.getElementById('submit').disabled=true
         }
         else{
             document.getElementById("confirmphone").style.color = "#04f704";
             document.getElementById("confirmphone").innerHTML = "";
              var pattern=/^[0-9]{10}$/
               document.getElementById('submit').disabled=false
      
         }
      
      } 
      
       //eye icon
           const togglePassword = document.querySelector('#togglePassword');
      const password = document.querySelector('#password');
      
      
      togglePassword.addEventListener('click', function (e) {
       // toggle the type attribute
       const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
       password.setAttribute('type', type);
       // toggle the eye slash icon
       this.classList.toggle('fa-eye-slash');
      });
       
      
      
       $(document).ready(function () {
          $("#Cpassword").bind("keyup change", function () {
        passcheck($("#password").val(), $("#Cpassword").val());
        });
       });   
      
      // ************************
      
      // 
      
      function passcheck(mypass, myconfirmpass){
        if(mypass!=myconfirmpass){
        $("#submit").removeAttr("onclick");
        $("#Cpass").show();
        $("#Cpass").html('<div class="text-red">Password did not matched!</div>');
        document.getElementById('submit').disabled = true;
        }
      
        else {
        $("#submit").removeAttr("onclick");
        $("#Cpass").show();
        $("#Cpass").html('');
      
        
        document.getElementById('submit').disabled = false;
        }
      }


      function validatepass1(){
var confirm_password = document.getElementById("Cpassword").value;
var pass = document.getElementById('password').value;
if(confirm_password != pass){
    document.getElementById('div6').innerHTML="";
    document.getElementById('div6').style.color="red";
     document.getElementById('submit').disabled = true;
}
else{
  document.getElementById('div6').innerHTML="";
  document.getElementById('div6').style.color="";
   document.getElementById('submit').disabled = false;
}
}
      
      
      
      
      
      function passwordValidation(){
               // debugger
               //e.preventDefault()
               let pwd_object = document.getElementById("password");
               // check number
               if(/([0-9])/.test(pwd_object.value) == false){
                   ele = document.getElementById("1-number")
                   ele.style.color = "red";
                   // ele.style.background = cross_sign;
                   
               }
               else{
                   document.getElementById("1-number").style.display='none';
                   // document.getElementById("1-number").style.background = tick_sign;
               }
               // check letter
               if(/([a-z])/.test(pwd_object.value) == false){
                   document.getElementById("1-letter").style.display = 'inline';
                   // document.getElementById("1-letter").style.background = cross_sign;
              }else{
                   document.getElementById("1-letter").style.display='none';
                   // document.getElementById("1-letter").style.background = tick_sign;
               }
      
      
               if(/([A-Z])/.test(pwd_object.value) == false){
                   document.getElementById("cap").style.display = 'inline';
                   // document.getElementById("1-letter").style.background = cross_sign;
              }else{
                   document.getElementById("cap").style.display='none';
                   // document.getElementById("1-letter").style.background = tick_sign;
               }
      
      
      
      
               if(/([$&+,:;=?@#|'<>.^*()%!-])/.test(pwd_object.value) == false){
                   document.getElementById("q").style.display = 'inline';
                   // document.getElementById("1-letter").style.background = cross_sign;
              }else{
                   document.getElementById("q").style.display='none';
                   // document.getElementById("1-letter").style.background = tick_sign;
               }
      
      
      
      
         
      
               // check length
               if(pwd_object.value.length < 8){
                   document.getElementById("pwd-length").style.display = 'inline';
                   // document.getElementById("pwd-length").style.background = cross_sign;
               }
               else{
                   document.getElementById("pwd-length").style.display='none';
                   // document.getElementById("pwd-length").style.background = tick_sign;
                   
               }
           }
           // pin validate
           function isUSAZipCode(str) 
      {
      return /^\d{6}(-\d{5})?$/.test(str);
      }
      
      function validateInput() 
      {
      console.log("validateInput");
      let zipCode = document.getElementById("zipCode").value;
      let message = "";
      if (isUSAZipCode(zipCode)) 
      {
      message = "";
      } else {
      message = "Invalid Pin Code";
      }
      document.getElementById("msg").innerHTML = message;
      
      }
      
      
      // email validation
      $("#email").keyup(function(){
      
       var email = $("#email").val();
       var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
         // if (charcode == 32)
         if (!filter.test(email)) {
           // alert('Please provide a valid email address');
           $("#error_email").text("not a valid email");
           email.focus;
           document.getElementById('submit').disabled = true;
           // document.getElementById('email').value = "";
           // buttonControl();
           $("#email").reset();
           //return false;
       } else {
        $("#error_email").text("");
        document.getElementById('submit').disabled = false;
      }
      
      });
     
           // pin validate
           function isUSAZipCode(str) 
      {
      return /^\d{6}(-\d{5})?$/.test(str);
      }
      
      function validateInput() 
      {
      console.log("validateInput");
      let zipCode = document.getElementById("zipCode").value;
      let message = "";
      if (isUSAZipCode(zipCode)) 
      {
      message = "";
      document.getElementById('submit').disabled=false
      } else {
      message = "Invalid Pin Code";
      document.getElementById('submit').disabled=true
      }
      document.getElementById("msg").innerHTML = message;
      
      }
      
      
function fetchapi(){
   var pincode = document.getElementById("zipCode").value;
    fetch(`https://api.postalpincode.in/pincode/${pincode}`).then((response) => response.json())
      .then((data) => {
        var city = data[0].PostOffice[0].District;
        var state = data[0].PostOffice[0].State;
        var country = data[0].PostOffice[0].Country;
        document.getElementById("Country").value = country;
        document.getElementById("City").value=city;
        document.getElementById("state").value=state;
    });
      if (pincode == "") {
            document.getElementById("Country").value = "";
        document.getElementById("City").value="";
        document.getElementById("state").value="";

      }
}

        document.getElementById('submit').disabled=true
        document.getElementById('submit').disabled=false


    //Disable cut copy paste
    $('body').bind('cut copy paste', function (e) {
    e.preventDefault();
    });
   
    //Disable mouse right click
    $("body").on("contextmenu",function(e){
        return false;
    });

      
           
             
   </script>
</html>
