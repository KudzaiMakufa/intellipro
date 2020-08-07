
<div class="col-md-3 left_col">
                
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo Uri::create('dashboard'); ?>" class="site_title">
              <i class="fa fa-paw"></i> <span>SmartFarmer</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php 
              ?>" 
                alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php 12345 ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" style="margin-top: 90px;">
              <div class="menu_section">
               <h3>Application menu</h3>
               <!-- @todo: grab all menus from the Db and their children and then we gen the html here  -->
                <ul class="nav side-menu">
                                            <?php 

                                            for ($i=0; $i < 10; $i++) { 
                                                  echo '<li><a href="'.Uri::create('profilepic').'"><i class="fa fa-flag fa-stack-1x"></i>112345<span class="fa fa-hand-o-right"></span></a></li>';
                                              # code...
                                            }
          
                                                            
                                
                                              ?>
                           
                </ul>
                
              </div>
            </div>
            <!-- /sidebar menu -->

            
          </div>
</div>
        
         <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo 12345 ?>" alt="">
                    <?php 112345 ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo Uri::create('logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
