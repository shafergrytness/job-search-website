<?PHP
//==================
// GET FUNCTIONS
//==================
function getUsername($UserID){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}	
$sql = "SELECT Username FROM User WHERE UserID = '".$UserID."'";
$result = mysqli_query($conn, $sql);	
if (mysqli_num_rows($result) > 0)  {
	$fn = mysqli_fetch_assoc($result);
	mysqli_close($conn);
	return $fn["Username"];
}
else {
	mysqli_close($conn);
	return false;
}
}
function getPassword($UserID){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}	
$sql = "SELECT Password FROM User WHERE UserID = '".$UserID."'";
$result = mysqli_query($conn, $sql);	
if (mysqli_num_rows($result) > 0)  {
	$pw = mysqli_fetch_assoc($result);
	mysqli_close($conn);
	return $pw["Password"];
}
else {
	mysqli_close($conn);
	return false;
}
}
function getPrefJobTitle($UserID){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}	
$sql = "SELECT PrefJobTitle FROM User WHERE UserID = '".$UserID."'";
$result = mysqli_query($conn, $sql);	
if (mysqli_num_rows($result) > 0)  {
	$pj = mysqli_fetch_assoc($result);
	mysqli_close($conn);
	return $pj["PrefJobTitle"];
}
else {
	mysqli_close($conn);
	return false;
}	
}
function getPrefJobLoc($UserID){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}	
$sql = "SELECT PrefJobLoc FROM User WHERE UserID = '".$UserID."'";
$result = mysqli_query($conn, $sql);	
if (mysqli_num_rows($result) > 0)  {
	$pl = mysqli_fetch_assoc($result);
	mysqli_close($conn);
	return $pl["PrefJobLoc"];
}
else {
	mysqli_close($conn);
	return false;
}		
}
function getFavJobsList($UserID){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}	
$sql = "SELECT FavJobs FROM User WHERE UserID = '".$UserID."'";
$result = mysqli_query($conn, $sql);	
if (mysqli_num_rows($result) > 0)  {
	$fj = mysqli_fetch_assoc($result);
	mysqli_close($conn);
	return $fj["FavJobs"];
}
else {
	mysqli_close($conn);
	return false;
}		
}
function getAdminStatus($UserID){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}	
$sql = "SELECT Administrator FROM User WHERE UserID = '".$UserID."'";
$result = mysqli_query($conn, $sql);	
if (mysqli_num_rows($result) > 0)  {
	$adminStat = mysqli_fetch_assoc($result);
	mysqli_close($conn);
	return $adminStat["Administrator"];
}
else {
	mysqli_close($conn);
	return false;
}	
}
function getJobTitle($JobID){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}	
$sql = "SELECT JobTitle FROM Job WHERE JobID = '".$JobID."'";
$result = mysqli_query($conn, $sql);	
if (mysqli_num_rows($result) > 0)  {
	$jt = mysqli_fetch_assoc($result);
	mysqli_close($conn);
	return $jt["JobTitle"];
}
else {
	mysqli_close($conn);
	return false;
}	
}
function getJobCompany($JobID){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}	
$sql = "SELECT JobCompany FROM Job WHERE JobID = '".$JobID."'";
$result = mysqli_query($conn, $sql);	
if (mysqli_num_rows($result) > 0)  {
	$jt = mysqli_fetch_assoc($result);
	mysqli_close($conn);
	return $jt["JobCompany"];
}
else {
	mysqli_close($conn);
	return false;
}	
}
function getJobLoc($JobID){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}	
$sql = "SELECT JobLoc FROM Job WHERE JobID = '".$JobID."'";
$result = mysqli_query($conn, $sql);	
if (mysqli_num_rows($result) > 0)  {
	$jLoc = mysqli_fetch_assoc($result);
	mysqli_close($conn);
	return $jLoc["JobLoc"];
}
else {
	mysqli_close($conn);
	return false;
}		
}
function getJobBoard($JobID){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}	
$sql = "SELECT JobBoard FROM Job WHERE JobID = '".$JobID."'";
$result = mysqli_query($conn, $sql);	
if (mysqli_num_rows($result) > 0)  {
	$jBoard = mysqli_fetch_assoc($result);
	mysqli_close($conn);
	return $jBoard["JobBoard"];
}
else {
	mysqli_close($conn);
	return false;
}		
}
function getJobSource($JobID){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}	
$sql = "SELECT JobSource FROM Job WHERE JobID = '".$JobID."'";
$result = mysqli_query($conn, $sql);	
if (mysqli_num_rows($result) > 0)  {
	$jSource = mysqli_fetch_assoc($result);
	mysqli_close($conn);
	return $jSource["JobSource"];
}
else {
	mysqli_close($conn);
	return false;
}	
}
//==================
// ADD FUNCTIONS
//==================
function addNewUser($Username, $Password){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}
$sql = "INSERT INTO User (UserID, Username, Password, PrefJobTitle, PrefJobLoc, FavJobs, Administrator) VALUES ('0', '".$Username."', '".$Password."', '', '', '', '0')";
if (mysqli_query($conn, $sql)) {
	mysqli_close($conn);
	return true;
} else {
	mysqli_close($conn);
	return false;
}	
}
function addNewJob($JobID, $JobTitle, $JobCompany, $JobLoc, $JobBoard, $JobSource){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}
$sql = "INSERT INTO Job (JobID, JobTitle, JobCompany, JobLoc, JobBoard, JobSource) VALUES ('".$JobID."', '".$JobTitle."', '".$JobCompany."', '".$JobLoc."', '".$JobBoard."', '".$JobSource."')";
if (mysqli_query($conn, $sql)) {
	mysqli_close($conn);
	return true;
} else {
	mysqli_close($conn);
	return false;
}	
}
//==================
// SET FUNCTIONS
//==================
function setUsername($UserID, $Username){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}
$sql = "UPDATE User SET Username = '".$Username."' WHERE UserID = '".$UserID."'";
if (mysqli_query($conn, $sql)) {
	mysqli_close($conn);
	return true;
} else {
	mysqli_close($conn);
	return false;
}	
}
function setPassword($UserID, $Password){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}
$sql = "UPDATE User SET Password = '".$Password."' WHERE UserID = '".$UserID."'";
if (mysqli_query($conn, $sql)) {
	mysqli_close($conn);
	return true;
} else {
	mysqli_close($conn);
	return false;
}	
}
function setPrefJobTitle($UserID, $PrefJobTitle){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}
$sql = "UPDATE User SET PrefJobTitle = '".$PrefJobTitle."' WHERE UserID = '".$UserID."'";
if (mysqli_query($conn, $sql)) {
	mysqli_close($conn);
	return true;
} else {
	mysqli_close($conn);
	return false;
}	
}
function setPrefJobLoc($UserID, $PrefJobLoc){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}
$sql = "UPDATE User SET PrefJobLoc = '".$PrefJobLoc."' WHERE UserID = '".$UserID."'";
if (mysqli_query($conn, $sql)) {
	mysqli_close($conn);
	return true;
} else {
	mysqli_close($conn);
	return false;
}	
}
function setFavJobsList($UserID, $FavJobs){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}
$sql = "UPDATE User SET FavJobs = '".$FavJobs."' WHERE UserID = '".$UserID."'";
if (mysqli_query($conn, $sql)) {
	mysqli_close($conn);
	return true;
} else {
	mysqli_close($conn);
	return false;
}	
}
function setAdminStatus($UserID, $AdministratorStatus){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}
$sql = "UPDATE User SET Administrator = '".$Administrator."' WHERE UserID = '".$UserID."'";
if (mysqli_query($conn, $sql)) {
	mysqli_close($conn);
	return true;
} else {
	mysqli_close($conn);
	return false;
}	
}
function setJobTitle($JobID, $JobTitle){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}
$sql = "UPDATE Job SET JobTitle = '".$JobTitle."' WHERE JobID = '".$JobID."'";
if (mysqli_query($conn, $sql)) {
	mysqli_close($conn);
	return true;
} else {
	mysqli_close($conn);
	return false;
}	
}
function setJobCompany($JobID, $JobCompany){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}
$sql = "UPDATE Job SET JobCompany = '".$JobCompany."' WHERE JobID = '".$JobID."'";
if (mysqli_query($conn, $sql)) {
	mysqli_close($conn);
	return true;
} else {
	mysqli_close($conn);
	return false;
}		
}
function setJobLoc($JobID, $JobLoc){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}
$sql = "UPDATE Job SET JobLoc = '".$JobLoc."' WHERE JobID = '".$JobID."'";
if (mysqli_query($conn, $sql)) {
	mysqli_close($conn);
	return true;
} else {
	mysqli_close($conn);
	return false;
}	
}
function setJobBoard($JobID, $JobBoard){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}
$sql = "UPDATE Job SET JobBoard = '".$JobBoard."' WHERE JobID = '".$JobID."'";
if (mysqli_query($conn, $sql)) {
	mysqli_close($conn);
	return true;
} else {
	mysqli_close($conn);
	return false;
}		
}
function setJobSource($JobID, $JobSource){
include 'DatabaseInfo.php';
// Create connection
$conn = mysqli_connect($DB_servername, $DB_username, $DB_password, $DB_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}
$sql = "UPDATE Job SET JobSource = '".$JobSource."' WHERE JobID = '".$JobID."'";
if (mysqli_query($conn, $sql)) {
	mysqli_close($conn);
	return true;
} else {
	mysqli_close($conn);
	return false;
}	
}
?>