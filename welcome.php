<?php 
    session_start();
    if (!isset($_SESSION['userid'])) {
        header('location:sign_up.php');
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
    <body>

        <form action="regist_user.php" method="post" >
                <header class="text-white p-1 text-center" style="background-color:tomato;">
                    <h6>Assignment</h6>
                </header>


                <div class="dropdown d-flex justify-content-end align-end " style="top:-40px">
                <button class="btn btn-secondary dropdown-toggle rounded-circle" type="button" id="triggerId" data-bs-toggle="dropdown">
                    Me
                </button>
                
            <div class="dropdown-menu">
                    <a class="dropdown-item" href="logout.php">Logout</a>
                    <a class="dropdown-item disabled" href="#">Back</a>
                
                </div>
        </div> 
        </header>


        

        <div class="row bg-secondary" style="width:200vh">
            <div class="col-md-8 ">
                <div class="col">
                    cover image
            

                <form method="POST" action="cover.php" id="wraper">        

                    <input type="file" name="cover" value="" /><br>

                        <button type="submit" name="uploadfile">

                        UPLOAD

                        </button>


                </form>



                </div>
                <div class="col">
                    <div>
                <b> headline</b>
                
                
            </div>

                    <!-- php for updating the headline from database -->

                    <?php 
                include('conn.php');

                $select=mysqli_query($conn,"SELECT * FROM headline");
                if ($select) {

                    while ($row=mysqli_fetch_assoc($select)) {
                        $id=['id'];
                        $headline=$row['headline'];
                        ?>
                        <h4><?php print $headline; ?></h4>
                    <a href="updatehead.php?updateid=<?php echo $row['id']; ?>"> 
                    <i class="fa fa-pencil text-dark  position-absolute" aria="true" style="top:180px;left:85vh;"></i></a>

                        <?php
                    
                        
                    }

                
                }

                    ?>
                </div>

                <div class="col">
                    
                </div>
            </div>
            <div class="col-md-4">
                
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
                    <i class="fa fa-activity text-info position-absolute" aria="true" style="top:10px;left:5px"></i>
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
            <div class="footer bg-primary d-flex p-1 justify-content-between fixed-bottom">
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