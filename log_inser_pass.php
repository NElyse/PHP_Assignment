<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email verfication</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="boostrap\css\bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/boostrap\js\bootstrap.bundle.min.js"></script>
</head>
<body>

<form action="welcome.php" method="post" >
        <header class="text-white p-1 text-center" style="background-color:tomato;">
        <h6>Assignment</h6>
        </header>
    <div class="d-flex justify-content-center align-items-center my-3">
            <div class="border my-3 px-3 pt-4 position-relative text-center w-40 " style="height:70vh; width: 60vh;" >
            
                
                <div class="position:relative my-5"">
                <h5>Welcome Back!</h5>
                <i class="fa fa-user-circle text-info" aria-hidden="true"></i>
                Hi NSENGIMANA
                </div>
                
                <div class="row g-2 mt-1 my-7">
                <div class="col" >
                    <div class="position-relative">
                        <!-- <input type="Email" class=" rounded-pill   w-100 " ><i class="fa fa-user-circle" aria-hidden="true"  
                        style=" padding-left: 40px"></i> Your email</input>  -->
                        <!-- <input type="text" name="" placeholder="fetch your email " id=""> -->
                    </div>
                </div>
                
                

               <div class="row g-2 mt-1">
                <div class="col">
                    <div class="position-relative">
                        <input type="password" name="Password" placeholder="Password" class="form-control" id="view" style="padding-left: 40px">
                        <i class="fa text-info fa-key position-absolute" style="top: 13px; left: 15px" aria-hidden="true"></i>
                        <i class="fa text-info fa-eye-slash position-absolute" style="top: 13px; left: 320px" onclick="view_pas()" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
                        
               <div class="row g-1 m,">
                    <div class="col">
                        
                        <button type="submit" class="btn btn-info rounded-pill text-white fw-bold w-100"><a  href="welcome.php">Login</a></button> 
                        </div>
                    </div>
                </div>
                
               <div class="col">
                        <div class="position-relative "> 
                            <a style="margin-left:10px" href="#.php"><p style="font-size:15px; color:red;">Forgot password?</p></a> 
                        
                        </div>
                        
                    </div>

        </div>

        


        <div  class="footer bg-primary d-flex p-1 justify-content-between fixed-bottom">
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
    
</body>
</html>


<script>
    function view_pas() {
var x = document.getElementById("view");
if (x.type === "password") {
x.type = "text";
} else {
x.type = "password";
}
}


</script>