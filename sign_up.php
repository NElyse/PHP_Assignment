
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include 'db-connect.php';
session_start();
$error=NULL;

if (isset($_POST['submit'])) {


$fna=$_POST['FName'];
$lna=$_POST['LName'];
$em=$_POST['Email'];
$pass=$_POST['Password'];
$_SESSION['Email']=$em;
$_SESSION['name']=$fna;


if (strlen($pass)<=5) {
$error='Your password must be at least 6 characters';
}
else{

$fna=$conn->real_escape_string($fna);
$lna=$conn->real_escape_string($lna);
$em=$conn->real_escape_string($em);
$pass=$conn->real_escape_string($pass);

$vkey=md5(time().$fna);
$insert=NULL;

}

$sellect=$connection->query("SELECT * FROM account WHERE email='$em'");
$check=mysqli_num_rows($sellect);
if ($check) {
$error="This Email ".$em. " Is already exist try other email";
}
if ($check==0) {

require 'vendor/autoload.php';

$maill = new PHPMailer(true);
$link="
<h2>Confirm your Email verification:</h2 
<a href='http://localhost/signup/account_ver.php?check=$vkey'>Check your email to Confirm</a>";
try {
                 
$maill->isSMTP(true);                      
$maill->Host  = 'smtp.gmail.com;';         
$maill->SMTPAuth = true;             
$maill->Username = 'elinsengimana@gmail.com';        
$maill->Password = '0781049197';            
$maill->SMTPSecure = 'tls';              
$maill->Port  = 587;

$maill->setFrom('elinsengimana@gmail.com', 'Email verification link');    
$maill->addAddress($e);
$maill->isHTML(true);                
$maill->Subject = 'Email verification';
$maill->Body = $body;
$maill->AltBody = 'Body in plain text for non-HTML maill$maill clients';
$maill->send();
$insert=$connection->query("INSERT INTO account VALUES (NULL,'$FName','$LName','$Email','$Password'");
if ($insert) {
header('location:account_ver.php');
}


} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$maill->ErrorInfo}";
}
}


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="boostrap\css\bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/boostrap\js\bootstrap.bundle.min.js"></script>

<title>Document</title>
</head>
<body>

<form action="log_inser_email.php" method="post" >
<header class="text-white p-1 text-center" style="background-color:tomato;">
<h6>Assignment</h6>
</header>


<div class="d-flex justify-content-center align-items-center my-3">

<div class="border my-3 px-3 pt-4 position-relative text-center w-40 " style="height:70vh; width: 60vh;" >
    <i class="fa fa-user-circle text-info" aria-hidden="true" style="font-size:40px;position:absolute;top:-25px"></i>
<div class=" my-3"><h6 style="font-size:20px;padding:2">I can't wait to create an account</h6></div> 


<div class="row g-2">
    <div class="col">
        <div class="position-relative">
            <input type="text" placeholder="FirstName" name="FName" class="form-control" style="padding-left: 40px">
            <i class="fa text-info fa-user-circle position-absolute" style="top: 13px; left: 15px" aria-hidden="true"></i>
        </div>
    </div>
    <div class="col">
        <div class="position-relative">
            <input type="text" placeholder="LastName" name="LName" class="form-control" style="padding-left: 40px">
            <i class="fa text-info fa-user-circle position-absolute" style="top: 13px; left: 15px" aria-hidden="true"></i>
        </div>
    </div>
</div>


<div class="row g-2 mt-1">
    <div class="col">
        <div class="position-relative">
            <input type="email" name="Email" placeholder="Email" class="form-control" style="padding-left: 40px">
            <i class="fa text-info fa-envelope position-absolute" style="top: 13px; left: 15px" aria-hidden="true"></i>
            
        </div>
    </div>
</div>


<div class="row g-2 mt-1">
    <div class="col">
        <div class="position-relative">
            <input type="password" name="Password" placeholder="Password" class="form-control" style="padding-left: 40px">
            <i class="fa text-info fa-key position-absolute" style="top: 13px; left: 15px" aria-hidden="true"></i>
            <i class="fa text-info fa-eye-slash position-absolute" style="top: 13px; left: 320px" aria-hidden="true"></i>
        </div>
    </div>
</div>


<div class="row g-2 mt-1">
    <div class="col">
        <div class="position-relative">
            <button type="submit" class="btn btn-info rounded-pill text-white fw-bold w-100">Next</button>
        </div>
    </div>
</div>



<div class="row g-2 mt-1">
    <div class="col">
        <div class="d-flex align-items-center px-3">
            <span class="border w-100"></span>
            <span class="px-2">Or</span>
            <span class="border w-100"></span>
            </div>
        </div>
    </div>
    
    
    <div class="row g-1 mt-1">
        <div class="col">
            <div class="position-relative">
                <button type="button" class="btn btn-danger text-white fw-light w-100 text-start btn-sm">
                    <i class="fa fa-google " aria-hidden="true"></i>
                    <span class="ps-2">Signin with Google</span>
                </button>
            </div>
        </div>
    </div>
    <div class="row g-1 m,">
        <div class="col">
            <div class="position-relative"><h6 class="" style="color:red;">Already have an account,  <a style="color:red;" href="log_inser_email.php">SIGN IN</a>  </h6>
            </div>
        </div>
    </div>

    

        


    
    
</div>
</div>
<div class="footer bg-primary d-flex w-1 justify-content-between fixed-bottom"  >
<div  class="d-flex">
<p style="margin-left:9px"> About Us</p>
<p style="margin-left:10px"> Advertisement</p>
</div>
<div><p>Kigali,Rwanda</p></div>
<div  class="d-flex">
<p style="margin-right:20px;padding:1px">How Search Work</p>
<p style="margin-right:20px; font-size:20px" >Privacy</p>
</div>

</form>



<script>
//show password

function view_pas() {
var x = document.getElementById("view");
if (x.type === "password") {
x.type = "text";
} else {
x.type = "password";
}
}



// Render Google Sign-in button
function renderButton() {
gapi.signin2.render('gSignIn', {
'scope': 'profile email',
'width': 290,
'height': 40,
'longtitle': true,
'theme': 'dark',
'onsuccess': onSuccess,
'onfailure': onFailure
});
}
// Sign-in success callback
function onSuccess(googleUser) {
// Get the Google profile data (basic)
//var profile = googleUser.getBasicProfile();

// Retrieve the Google account data
gapi.client.load('oauth2', 'v2', function () {
var request = gapi.client.oauth2.userinfo.get({
'userId': 'me'
});
request.execute(function (resp) {
// Display the user details
var profileHTML = '<h3>Welcome '+resp.given_name+'! <a href="javascript:void(0);" onclick="signOut();">Sign out</a></h3>';
profileHTML += '<img src="'+resp.picture+'"/><p><b>Google ID: </b>'+resp.id+'</p><p><b>Name: </b>'+resp.name+'</p><p><b>Email: </b>'+resp.email+'</p><p><b>Gender: </b>'+resp.gender+'</p><p><b>Locale: </b>'+resp.locale+'</p><p><b>Google Profile:</b> <a target="_blank" href="'+resp.link+'">click to view profile</a></p>';
document.getElementsByClassName("userContent")[0].innerHTML = profileHTML;

document.getElementById("gSignIn").style.display = "none";
document.getElementsByClassName("userContent")[0].style.display = "block";
});
});
}

// Sign-in failure callback
function onFailure(error) {
alert(error);
}

// Sign out the user
function signOut() {
var auth2 = gapi.auth2.getAuthInstance();
auth2.signOut().then(function () {
document.getElementsByClassName("userContent")[0].innerHTML = '';
document.getElementsByClassName("userContent")[0].style.display = "none";
document.getElementById("gSignIn").style.display = "block";
});

auth2.disconnect();
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/boostrap\js\bootstrap.bundle.min.js"
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
<script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>


</body>
</html>
