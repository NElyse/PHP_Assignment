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
<body class="mr-10 ml-10 " >
<div class="row m-0">
       <div class="mr-10 ml-10 " style="background-color:tomato;" >
       <h2 class="text-center" style="color:white;">Assignment</h2>
       </div>
             <div class="dropdown d-flex justify-content-end align-end " style="top:-40px">
        <button class="btn btn-secondary dropdown-toggle rounded-circle" type="button" id="triggerId" data-bs-toggle="dropdown">
            Me
        </button>

        
 </div>
    <div class="row mt- ps-4 bg-white">
        <div class="col-md-8">
            <div class="">
            <div class="position-relative" style="height:25vh; background: url(Caverpage.png); background-size: cover; background-repeat: no-repeat">
            <h6 class="col-sm-8 col-md-12 text-white position-relative" style="top: 135px; font-size: 18px; padding-left: 20vh;"> <b>NSENGIMANA Elyse</b> </h6>
            <span class="position-absolute bottom-0 start-0 ml-2">
                <img class="img pt-5 " src="profile.png" alt="" width="100px" style="margin-left: 30px;">
            </span>
            </div>
        
            <div class="mt-5">
                <hr>
                <div class="col-sm-4 ">
            
                    <h6><center>Headline</center></h6>
                </div>
                <span>Software Engineer | Data analyst</span>
            </div>
        <div class="row  ps-3">
        <a href="" class="btn border-danger border-top-0 border-right-0 border-left-0 bg-primary col-sm-12 mt-1" style="color:white; font-size:20px ;text-align:left; ">Change pasword</a>
        </div>
        <div class="container mt-2 mb-5 d-flex justify-content-center">
            
                <div class="card-body mr-5 ml-5">
                        <div class="row d-flex flex-row">
                        <div class="col-sm-6"><label for=""><b>Current password</b></label></div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="password" name="password"> </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-sm-6"><label for=""><b>New password</b></label></div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="password" name="password"> </div>
                            </div>
                        </div>
                        <div> <center><input type="checkbox" class="terms mt-3" style="color:skyblue;">Remind me to change password for each 3 months </center></div>
                        <div class="row">
                            <div class="col-sm-6">

                            </div>
                        <div class=" d-flex flex-column text-center  mt-2 mb-1 col-sm-6"> <button class="btn btn-primary btn-block confirm-button">Set new password</button></div> 

                        </div>
                </div> 
             
        </div>
     </div>
    </div>


<div class="col-md-8" style="width: 400px ;">
                       
                        
                
                                <div class="col text-center border border-top border-info bg-white" style="width: 65vh;" ><h6 class="text-info bg-white"  > Account Settings</h6></div>
                                    <div class=" col position-relative bg-white border border-top border-info" style="width: 65vh;">
                                        <a class="dropdown-item ps-4 text-start bg-white" href="#" >Edit Profile</a>
                                            <i class="fa fa-pencil text-info position-absolute" aria="true" style="top:10px;left:5px;"></i>
                                    </div>

                                    <div class=" col position-relative bg-white border border-top border-info" style="width: 65vh;">
                                        <a class="dropdown-item ps-4 text-start bg-white" href="pass_reset.php" >Change password</a>
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
</body>
</html>