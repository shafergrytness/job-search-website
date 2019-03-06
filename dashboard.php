<?php
        session_start();
 include 'LoginUtilities.php';
  include 'DatabaseUtilities.php';

 if (isset($_POST['submitclicked']))
        {
                if (!empty($_POST['jobtitle']) || !empty($_POST['location']) || !empty($_POST['username']) || !empty($_POST['newpass_1']))
                {
                        $DBpass = getPassword($_SESSION['uid']);

                        //if the password is good then we can update their info
                        if ($_POST['currentpass'] == $DBpass)
                        {
                                if (!empty($_POST['jobtitle']))
                                {
                                        setPrefJobTitle($_SESSION['uid'], $_POST['jobtitle']);
                                        $_SESSION['jobtitle'] = $_POST['jobtitle'];
                                }
                                if (!empty($_POST['location']))
                                {
                                        setPrefJobLoc($_SESSION['uid'], $_POST['location']);
                                        $_SESSION['location'] = $_POST['location'];
                                }
                                if (!empty($_POST['username']))
                                {
                                        setUsername($_SESSION['uid'], $_POST['username']);
                                        $_SESSION['username'] = $_POST['username'];
                                }
                                if (!empty($_POST['newpass_1']))
                                {
                                        setPassword($_SESSION['uid'], $_POST['newpass_1']);
                                }
                        }
                }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <meta charset="UTF-8">
  <title>CareerBuddy Dashboard</title>
  <link rel="stylesheet" type = "text/css" href = "dashboard.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<a href="/group_D/dashboardv3.php">
  <IMG STYLE="position:absolute; TOP:0px; LEFT: 0px;" SRC="newlogo.png">
</a>
  <div class="logoutform">
    <form action="logout.php" method="post">
      <label class="logoutlabel">        
	  <!--Welcome [username]-->
	    <?php
		echo "Welcome, " . htmlspecialchars($_SESSION['username']) . "!";
		  ?>
		    </label>
		      <input type="hidden" name="logoutclicked" value="1" />
      <button type="submit" class="button button-logout">Log Out</button>
    </form>
  </div>

  <div class="form"> 
      <ul class="tab-group">
        <li class="active tab" id="lefttab"><a href="#feed">Your Feed</a></li>
        <li class="tab" id="righttab"><a href="#settings">Account Settings</a></li>
      </ul>

      <div class="tab-content">
            <!-- Job Feed -->
	    <div id="feed" class="custab">
	    	 <div class="row col-md-12 custyle">
		      <table class="table table-striped">
<?php
         include 'DatabaseInfo.php';
	 include 'runJobScraper.php';
     
         $userid = $_SESSION["uid"];
       	 //runJobScraper($userid);
         $jobChoice = getPrefJobTitle($userid);
	 $locChoice = getJobLoc($userid);
	 $conn = @mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);

         if(!$conn){
           die("Connection failed: " . mysqli_connect_error() . "<br>");
         }

         //$query = "SELECT JobTitle, JobCompany, JobLoc, JobSource, JobBoard FROM Job;";
	 $query = "SELECT JobTitle, JobCompany, JobLoc, JobSource, JobBoard FROM Job WHERE JobQuery = '".$jobChoice."'";
         $Qresult = mysqli_query($conn, $query);

         if(!$Qresult){
           print "Error - The query was not successful.";
           $error = mysql_error();//sql error
           print "<p>" . $error . "</p>";
           exit;
         }

         $n_rows = mysqli_num_rows($Qresult);// Number of rows var
?>
<!--Favorites Feed Button -->
<button type="button" class="favFilter btn btn-default btn-sm">
<span class="glyphicon glyphicon-heart"></span> Favorites</button> 
<?php
	
         if($n_rows > 0){
           // Get the first row of the result
           $firstRow = mysqli_fetch_assoc($Qresult);
	   // Get the number of fields in the result
           $num_fields = mysqli_num_fields($Qresult);
           // Get the column names
           //$CNames = array_keys($firstRow);
	   $CNames = array("Job Title", "Company", "Action");
	   // Display column names as appropriate column headers
           print "<thead>
	   	  <tr>
		  <th class='text-center'>Job Title</th>
		  <th class='text-center'>Company</th>
		  <th class='text-center'>Action</th>
		  </tr>
		  </thead>";
	   

 for($row_num = 0; $row_num < $n_rows; $row_num++){
            print "<tr>";
            $values = array_values($firstRow);
            $jobtitle = htmlspecialchars($values[0]);
	    $company = $values[1];
	    $location = $values[2];
	    $source = $values[3];
	    $board = $values[4];
print "<td>" . $jobtitle . "</br><span class='subtitleBold'>" . $board . "</span></td>";
print "<td>" . $company . "</br><span class='subtitleBold'>" . $location . "</span></td>";
print "<td class='text-center'><a class='btn btn-primary btn-xs' target='_blank' href = '" . $source . "'><span class='glyphicon glyphicon-plus'></span> Apply</a><a href='#' class='btn btn-info btn-xs'><span class='glyphicon glyphicon-heart'></span> Fav </a></br></td>";

            print "</tr>";// End row
            $firstRow = mysqli_fetch_assoc($Qresult);//next row

}
}
print "</table>";

?>
</div>
</div>


        <div id="settings">

    <form action="dashboardv3.php" method="post">
          <div class="top-row">
		<div class="field-wrap">
			<label class="fielddescription">
				  <!--[Current Job Title]-->
				  	       	     <?php 
									echo htmlspecialchars($_SESSION['jobtitle']);
										  ?>
												</label>
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
																																																																																																															       <div class="field-wrap">
																																																																																																															       	     <label class="fielddescription">
																																																																																																																     	         <!--[Current Location]-->
																																																																																																																		 	           <?php 
																																																																																																																				   	    echo htmlspecialchars($_SESSION['location']);
																																																																																																																					    	      ?>
																																																																																																																						        </label>
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
																																														       </div>
          </div>
          <br />

          
		 <div class="field-wrap">
		       <label class="fielddescription">
		       	        
					  <!--[Current Username]-->
					  	         <?php 
								echo htmlspecialchars($_SESSION['username']);
								       ?>
									  </label>
										  <label>
												New Username
												      </label>
													  <input type="text" name="username"/>
													  	 </div>


															  <br />
															        
          <div class="field-wrap">
            <label>
              Current Password<span class="req">*</span>
            </label>
            <input type="password" name="currentpass" id="currentpass_id" required/>
          </div>

          <div class="field-wrap">
            <label>
              New Password
            </label>
            <input type="password" name="newpass_1" id="newpass_id_1"/>
          </div>

          <div class="field-wrap">
            <label>
              New Password Again
            </label>
            <input type="password" name="newpass_2" id="newpass_id_2"/>
          </div>

          <div class="top-row">
            <div class="field-wrap">
			  <input type="hidden" name="submitclicked" value="1"/>
              <button type="submit" class="button button-block"/>Save Changes</button>
            </div>
            <div class="field-wrap">
              <button type="reset" class="button-reset button-block"/>Clear Form</button>
            </div>
          </div>
	  </div>
          </form>






  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

 <script type = "text/javascript" src = "dashboard.js" > </script>


</body>
</html>

