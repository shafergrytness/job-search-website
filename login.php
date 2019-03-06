<?php
	session_start();
?>
<!DOCTYPE html>
<!-- login.html -->
<!-- CIS 444 Group D -->
<html lang = "en">
<head>
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <meta charset="UTF-8">
  <title>Welcome to CareerBuddy!</title>
  <link rel = "stylesheet" type = "text/css" href = "login.css" />
</head>
<body>
  <IMG STYLE="position:absolute; TOP:0px; LEFT: 0px;" SRC="newlogo.png">
  <!-- Form code -->
  <div class="form">
    
    <!-- Login Tab -->
      <ul class="tab-group">
         <li class="tab"><a href="#login">LOG IN</a></li>
        <!-- Create Account Tab -->
        <li class="tab active"><a href="#signup">CREATE ACCOUNT</a></li>
      </ul>
      
    <!-- Create Account Tab Info -->
      <div class="tab-content">
        <div id="signup">   
          <form method="post" action="toquestionnaire.php">
            <div class="field-wrap">
   <!-- Create Account Username Field -->
              <label>
                Username<span class="req">*</span>
              </label>
   <input type="username" required autocomplete="off" name="createname" />
   </div>
            

   <!-- Create Account Password Fields -->       
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="createpass"/>
          </div>
            <div class="field-wrap">
            <label>
              Re-enter Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="createpass2"/>
          </div>
          <!-- Submit Button -->
          <button type="submit" class="button button-block"/>Submit</button>

 </form>
        </div>
        
    <!-- Login Tab Info -->
        <div id="login">   
          <form  method="post" action="todashboard.php">
            <div class="field-wrap">
              <!-- Email Field -->
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="username"required autocomplete="off" name="loginname"/>
          </div>
    <!-- Password Field -->
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="loginpass"/>
          </div>
          
          <!-- Login Button Field -->
          <button type="submit" class="button button-block"/>LOG IN</button>

          </form>
        </div>
        
      </div><!-- /tab-content -->
      
</div> <!-- /form -->
  
  <!-- Third Party Reference to Jquery code for tab functions -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <!-- Reference to Javascript File: login.js -->
   <script type = "text/javascript" src = "login.js" ></script>


</body>
</html>
<!-- end html -->