
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
<?php
    session_start();

?>
    <form action="log_inser_email.php" method="post" >
            <header class="text-white p-1 text-center" style="background-color:tomato;">
            <h6>Assignment</h6>
            </header>

            

            <div class="d-flex justify-content-center align-items-center" style="height:85vh; ">
            
            
                <div class="d-flex justify-content-center align-items-center my-3">
                    <div class="border my-3 px-3 pt-4 position-relative text-center w-40 " style="height:70vh; width: 60vh;" >
                        <i class="fa fa-user-circle text-info" aria-hidden="true" style="font-size:40px;position:absolute;top:-25px"></i> 

                        <div class="col my-1" >
                                <div class="position-relative">
                                    <h6 style="font-size:20px;p-2" >Congrants, </h6>
                                </div> 
                                
                        </div>
                        <div class="row g-2 mt-1 my-7">
                        <div class="col">
                            <div class="position-relative">
                                <button type="Email" class="btn btn-info rounded-pill text-white fw-bold w-100"><i class="fa fa-user-circle" aria-hidden="true"></i> Your email</button>
                            </div>
                        </div>
                        <div >
                                <div class="position-relative">
                                <h6>Help us in the jouney of trust</h6>
                                </div>
                        </div>
                        <div class=" my-30" >
                                <div class="position-relative">
                                <p style="font-size:13px;">Check your above email to confirm emailownership</p>

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
            </div>
    </form>
   
</body>
</html>
