<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <style type="text/css">
        
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
.form-control{
  height: 50px;
  border-radius: 23px;
}
body {
         background-color: #286090;

         }

      </style>
   </head>
   <body>
      <div class="container text-white">
         <div class="text-center text-white">
            <h2>Registartion Form</h2>
         </div>
         <?php echo @$message; ?>
         <form method="post" enctype="multipart/formdata">
            <div class="form-group">
               <label for="email">Name:</label>
               <input type="text" class="form-control" name="name" required placeholder="Enter Name"
               onkeypress = "return  (event.charCode > 96 && event.charCode < 123) || (event.charCode > 64 && event.charCode < 91) || (event.charCode == 32)"autocomplete="off">
            </div>
            <div class="form-group">
               <label for="email">Email:</label>
               <input type="email" class="form-control" name="email" required placeholder="Enter Email ID"  pattern = "^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$">
            </div>
            <div class="form-group">
               <label for="phone">Phone Number:</label>
               <input type="text" class="form-control" name="phone" pattern="^[6-9]\d{9}$" required placeholder="Enter Phone Number">
            </div>
            <div class="form-group">
               <label for="phone">Password</label>
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
            <input type="submit" name="register" class="btn btn-success" value="Register"/>
         </form>
      </div>
   </body>
</html>