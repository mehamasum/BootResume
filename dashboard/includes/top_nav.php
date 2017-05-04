<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['user']?>  <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="help.php">Help</a></li>
                        <li><a href="mailto:team.batfia@gmail.com?subject=Elegant Resume Feedback">Feedback</a></li>
                        <li><a href="https://devpost.com/mehamasum">About Us</a></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                </li>
                <li><a target="_blank" href="../profile.php?u=<?php echo $_SESSION['user']?>"><i class="fa fa-globe"></i> Live</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->