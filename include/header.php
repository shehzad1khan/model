<?php
if (!isset($_SESSION)) session_start();
    if(!isset($_SESSION['userid']))
        header('location:login.php');
?>
<div class="header">
    <div class="header-content clearfix">
        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
        <div class="header-right">
            <ul class="clearfix">
                <li class="icons dropdown">
                <h5 class="mr-1">Welcome, <b><i><?php echo $_SESSION['name'];?></i></b></h5>
                    <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                       
                       <span class="activity active"></span> 
                        <img src="db_images/<?php echo $_SESSION['image'];?>" height="40" width="40" alt="Img">                      
                    </div>
                    <div class="drop-down dropdown-profile   dropdown-menu">
                        <div class="dropdown-content-body">
                            <ul>
                                <li>
                                    <a href="profile.php"><i class="icon-user"></i> <span>Profile</span></a>
                                </li>
                                <hr class="my-2">                               
                                <li><a href="logout.php"><i class="icon-key"></i> <span>Logout</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>