<?php
	session_start();
	include 'LoginUtilities.php';
	
	//this is an ugly way of ensuring only one attemptLogin goes off
	if (!empty($_SESSION['createname'] && !empty($_SESSION['createpass'])))
	{
		attemptLogin($_SESSION['createname'], $_SESSION['createpass']);
		$_SESSION['createname'] = 0;
		$_SESSION['createpass'] = 0;
	}
	//checkLogin();
?>
<!DOCTYPE html>
<!-- questionnaire.php -->
<!-- This page is provided to users who sign up for the first time! -->
<html>
  <head>
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta charset="UTF-8">
    <title>CareerBuddy Questionnaire</title>
    <link rel = "stylesheet" type = "text/css" href = "questionnaire.css" />
  </head>
  <?php
     if (!empty($_POST['jobtitle']) && !empty($_POST['location'])){
		setTheUserPref();
     }
  ?>
  <body>
    <IMG STYLE="position:absolute; TOP:0px; LEFT: 0px;" SRC="newlogo.png">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="well login-box text-center">
                <form name="jobform" Method="Post" Action="questionnaire.php?func_name=setTheUserPref">
                  <!--<legend>Let's Personalize Your Experience</legend>-->
                  <div class="form-group text-center">
                    <h4> Preferred Job Title: </h4>
		    <select name="jobtitle" id="jobtitle">  
		      <option disabled selected value></option>
		      <option value="Application Developer">Application Developer</option>
		      <option value="Application Support Analyst">Application Support Analyst</option>
		      <option value="Computer Systems Manager">Computer Systems Manager</option>
		      <option value="Database Administrator">Database Administrator</option>
		      <option value="Developer">Developer</option>
		      <option value="Front End Developer">Front End Developer</option>
		      <option value="IT">IT</option>
		      <option value="IT Support Manager">IT Support Manager</option>
		      <option value="Java Developer">Java Developer</option>
		      <option value="Network Engineer">Network Engineer</option>
		      <option value="Software Developer">Software Developer</option>
		      <option value="Software Engineer">Software Engineer</option>
		      <option value="Systems Administrator">Systems Administrator</option>
		      <option value="Systems Analyst">Systems Analyst</option>
		      <option value="System Architect">System Architect</option>
		      <option value="Technical Support Engineer">Technical Support Engineer</option>
		      <option value="Web Developer">Web Developer</option>
		      <option value="Webmaster">Webmaster</option>
                    </select>
                  </div>
                  <div class="form-group text-center">
                    <h4> Preferred Location: </h4>
		    <select name="location" id="location">
                      <option disabled selected value></option>
                      <option value="San Francisco, CA">San Francisco, CA</option>
                      <option value="San Diego, CA">San Diego, CA</option>
                      <option value="Los Angeles, CA">Los Angeles, CA</option>
                      <option value="Seattle, WA">Seattle, WA</option>
                      <option value="Denver, CO">Denver, CO</option>
                      <option value="Austin, TX">Austin, TX</option>
                      <option value="New York City, NY">New York City, NY</option>
                      <option value="Orlando, FL">Orlando, FL</option>
                    </select>
		   <br/><br/>
		   <input type="hidden" name="submitclicked" value="1">
		   <button type="submit" class="button button-block" name="Submit_User_Pref" value="submit">Submit</button>
		   <br/>
                  </div>
                </form>
          </div>
        </div>
      </div>
    </div>
    <?PHP
       function setTheUserPref(){
		   include 'DatabaseUtilities.php';

		   $theJobTitle = $_POST['jobtitle'];
		   $theJobLoc = $_POST['location'];
		   $_SESSION['jobtitle'] = $theJobTitle;
		   $_SESSION['location'] = $theJobLoc;
		   setPrefJobTitle($_SESSION['uid'], $theJobTitle);
		   setPrefJobLoc($_SESSION['uid'], $theJobLoc);
      		   header('Location: /group_D/dashboard.php');
       }
    ?>
  </body>
</html>


