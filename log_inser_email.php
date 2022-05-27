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

<form action="" method="post" >
        <header class="text-white p-1 text-center" style="background-color:tomato;">
        <h6>Assignment</h6>
        </header>

        
   
        
    <div class="d-flex justify-content-center align-items-center my-3">
            <div class="border my-3 px-3 pt-4 position-relative text-center w-40 " style="height:70vh; width: 60vh;" >
            
                <div class="col my-5" >
                        <div class="position-relative">
                        <h6 style="font-size:25px;p-2" >Welcome Back!</h6>
                        </div> 
                        
                </div>
                <div class="col g-2" >
                        <div class="position-relative">
                            <h6 style="font-size:20px;p-2" > Sign in</h6>
                        </div> 
                        
                </div>
                <div class="row g-2 mt-1">
                   <div class="col">
                       <div class="position-relative">
                           <input type="email" placeholder="Email" class="form-control" style="padding-left: 40px">
                           <i class="fa text-info fa-envelope position-absolute" style="top: 13px; left: 15px" aria-hidden="true"></i>
                       </div>
                   </div>
               </div>
               <div class="row g-2 mt-1">
                   <div class="col">
                       <div class="position-relative">
                         
                       <button type="submit" class="btn btn-info rounded-pill text-white fw-bold w-100"><a href="log_inser_pass.php">Next</a></button>
                       </div>
                   </div>
                   <div class="row g-1 mt-1">
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
                                <span class="ps-2">Continue with Google</span>
                            </button>
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="position-relative">
                            <a style="margin-right:200px;" href="sign_up.php">Create account</a> 
                        
                        </div>
                        
                    </div>
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