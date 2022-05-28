<?php 
    session_start();
    if (!isset($_SESSION['userid'])) {
      
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Dashboard</title>
            
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="boostrap\css\bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/boostrap\js\bootstrap.bundle.min.js"></script>
               
        </head>
     
        <style type="text/css">
            body{
                background-color: rgba(82, 80, 80, 0.107);
            }
        </style>

            <body>

   

            <form action="#.php" method="post" >
              <header class="text-white p-2 text-center" style="background-color:tomato;">
               <h6>Assignment</h6>
              </header>

                <header>
                    <div class="dropdown d-flex justify-content-end align-end " style="top:-40px">
                    <button class="btn btn-secondary dropdown-toggle rounded-circle" type="button" id="triggerId" data-bs-toggle="dropdown">Me</button>
                
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="logout.php">Logout</a>
                        <a class="dropdown-item disabled" href="#">Back</a>
                
                    </div>
             
                    </div> 
                </header>


                <!-- <div style=" background-color: rgba(82, 80, 80, 0.107);"> -->
    
                        <div class="body-cont d-flex " style="height: 10px; " >
                            
                            <div class="col ps-3">
                                <div class="col-sm-8 col-md-12">
                                    <img class="col-sm-12 col-md-12 " src="caverpage.jpg" style="height: 20vh; width: 80vh;" alt="background-large">
                        
                                        <div class="body-cont d-flex">

                                            <div class="left" style="padding-left: 8vh; width: 140vh;">
                                                <div class="position-absolute d-flex py-2" style="margin-left: 1vh; top: 110px;"> 
                                                    <img class="rounded-circle z-depth-2" style="width: 100px; " src="profile.jpg" alt="profile-pc">
                                                    <h6 class="col-sm-8 col-md-12 text-white position-relative" style="top: 70px; font-size: 18px; padding-left: 1vh;"> <b>NSENGIMANA Elyse</b> </h6>
                                                    
                                                </div>
                                            </div> 
                                       
                                            <div> 
                                            <hr class="position-absolute" style="left: 10vh;">
                                        </div>
                                        
                                        
                                        <div class="d-flex position-absolute " style="padding-left: 8vh;">
                                            <h6><b>Headline</b></h6>
                                                <div class="d-flex" style="padding-left: 8vh;">
                                                    <a href="#" class="position-absolute" style="left: 150px; top: 300px;"><i class="fa fa-pencil mx-2 text-black" aria-hidden="true"></i></a>
                                                </div>
                                            <h6 class="d-flex" style="font-size: 14px;">Software Engineer | Data Analyst</h6>

                                        
                                        </div>
                                </div>

                             
            
         
                                
                
                             <form action="" method="post">
                                <div class="col-sm-8 col-md-12 d-flex bg-info "  style="width:80vh ;">
                                    <i class="fa fa-key mx-2 mt-2" aria-hidden="true"></i>
                                    <h6 class="text-white mt-1"><b>Change Password</b></h6>
                                </div>

                                <div class="mt-5 mx-2">
                                    <div class="d-flex">
                                        <h6 class="mx-4 mt-2">Current Password</h6>
                                        <div class="position-relative" >
                                            <input class="ps-5 form-control" placeholder="Password" type="password" name="" id="view">
                                            <i class="fa fa-key text-info position-absolute" style="top: 13px; left: 15px;" aria-hidden="true"></i>
                                            <i class="fa text-info fa-eye-slash position-absolute" style="top: 13px; left: 210px" onclick="view_pas()" aria-hidden="true"></i>
                
                                        </div>
                                        
                                    </div>
                                    <div class="d-flex mt-3">
                                        <h6 class="mx-5 mt-2">New Password</h6>
                                        <div class="position-relative" style="left: -31px;">
                                            <input class="ps-5 form-control" placeholder="Password" type="password" name="" id="view">
                                            <i class="fa fa-key text-info position-absolute" style="top: 13px; left: 15px;" aria-hidden="true"></i>
                                            <i class="fa fa-eye text-info position-absolute" style="top: 13px; right: 16px;" onclick="view_pas()" aria-hidden="true"></i>
                                        </div>
                                    </div>


                                    <div class="d-flex">
                                        <input class="form-check-input position-absolute" style="left:auto; top: 545px;"  type="checkbox" name="" id="">
                                        <p class="position-absolute" style="font-size: 11px; top: auto; left: 308px;"><b>remind me to change password for each 3 months</b></p>
                                    </div>

                                    <button class="my-5 btn btn-info text-white position-absolute" style="left: 388px;" type="submit">Set New Password</button>
                                    <div class="my-5 position-absolute" style="top: 600px;"><h5>.</h5></div>
                                </div>
                            </form>
                        </div>
            

                        </div>

                 



                        <div class="col-md-4" style="width: 400px ;">
                        <div class="col" >
                        <div class="col-md-4" style="width: 400px ;">
                
                                <div class="col text-center border border-top border-info bg-white" style="width: 65vh;" ><h6 class="text-info bg-white"  > Account Settings</h6></div>
                                    <div class=" col position-relative bg-white border border-top border-info" style="width: 65vh;">
                                        <a class="dropdown-item ps-4 text-start bg-white" href="#" >Edit Profile</a>
                                            <i class="fa fa-pencil text-info position-absolute" aria="true" style="top:10px;left:5px;"></i>
                                    </div>

                                    <div class=" col position-relative bg-white border border-top border-info" style="width: 65vh;">
                                        <a class="dropdown-item ps-4 text-start bg-white" href="changepass.php" >Change password</a>
                                        <i class="fa fa-key text-info position-absolute" aria="true" style="top:10px;left:5px;"></i>
                                    </div>
                                    <div class="col position-relative bg-white border border-top border-info" style="width: 65vh;">
                                        <a class="dropdown-item ps-4 text-start" href="#" >Sign in Activities</a>
                                    <i class=" text-info position-absolute" aria="true" style="top:40px;left:5px"></i>
                                    </div>
                            
                                    <div class="col position-relative bg-white border border-top border-info" style="width: 65vh;">
                                        <a class="dropdown-item ps-4 text-start" href="#" >Session Timeout</a>
                                    <i class="fa fa-timeout text-info position-absolute" aria="true" style="top:10px;left:5px"></i>
                                    </div>
                                    <div class="col position-relative bg-white border border-top border-info" style="width: 65vh;">
                                        <a class="dropdown-item ps-4 text-start " href="#" >Memolisation</a>
                                    <i class="fa fa-memorial text-info position-absolute" aria="true" style="top:10px;left:5px"></i>
                                    </div>
                                    <div class="col position-relative bg-white border border-top border-info" style="width: 65vh;">
                                        <a class="dropdown-item ps-4 text-start " href="#" >Job Feed Contents</a>
                                    <i class="fa fa-job text-info position-absolute" aria="true" style="top:10px;left:5px"></i>
                                    </div>
                                    <div class="col position-relative bg-white border border-top border-info" style="width: 65vh;">
                                        <a class="dropdown-item ps-4 text-start " href="#" >Email & SMS Notifications</a>
                                    <i class="fa fa-envelope text-info position-absolute" aria="true" style="top:10px;left:5px"></i>
                                    </div>
                                    <div class="col position-relative bg-white border border-top border-info" style="width: 65vh;">
                                        <a class="dropdown-item ps-4 text-start" href="#" >Push Notifications</a>
                                    <i class="fa fa-notification text-info position-absolute" aria="true" style="top:10px;left:5px"></i>
                                    </div>
                                    <div class="col position-relative bg-white border border-top border-info" style="width: 65vh;">
                                        <a class="dropdown-item ps-4 text-start" href="#" >Delete My Account</a>
                                    <i class="fa fa-delete text-info position-absolute" aria="true" style="top:10px;left:5px"></i>
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