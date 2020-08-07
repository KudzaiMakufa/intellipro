
<?php


        list(, $userid) = Auth::get_user_id();
          // Debug::dump($userid);die;
        if($userid == 0){
            Session::set_flash('error', 'You must login First');
            Response::redirect('login');
        }




?>
  <?php echo Asset::css(array(
      'bootstrap.css',
      'sidetemp.css',
      'bootstrapOrg.css',
      'bootstrap.min.css',
      'font-awesome/css/font-awesome.min.css',
    )); ?>

    <?php  echo Asset::js(array(
      'jquery.min.js',
      'bootstrap.min.js',
      'jquery-ui.min.js',
  ));?>

<html>
<head>

    <style >
            body,html{
        height: 100%;
    }

    /* remove outer padding */
    .main .row{
        padding: 0px;
        margin: 0px;
    }

    /*Remove rounded coners*/

    nav.sidebar.navbar {
        border-radius: 0px;
    }

    nav.sidebar, .main{
        -webkit-transition: margin 200ms ease-out;
        -moz-transition: margin 200ms ease-out;
        -o-transition: margin 200ms ease-out;
        transition: margin 200ms ease-out;
    }

    /* Add gap to nav and right windows.*/
    .main{
        padding: 10px 10px 0 10px;
    }

    /* .....NavBar: Icon only with coloring/layout.....*/

    /*small/medium side display*/
    @media (min-width: 768px) {

        /*Allow main to be next to Nav*/
        .main{
            position: absolute;
            width: calc(100% - 40px); /*keeps 100% minus nav size*/
            margin-left: 40px;
            float: right;
        }

        /*lets nav bar to be showed on mouseover*/
        nav.sidebar:hover + .main{
            margin-left: 200px;
        }

        /*Center Brand*/
        nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
            margin-left: 0px;
        }
        /*Center Brand*/
        nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
            text-align: center;
            width: 100%;
            margin-left: 0px;
        }

        /*Center Icons*/
        nav.sidebar a{
            padding-right: 13px;
        }

        /*adds border top to first nav box */
        nav.sidebar .navbar-nav > li:first-child{
            border-top: 1px #e5e5e5 solid;
        }

        /*adds border to bottom nav boxes*/
        nav.sidebar .navbar-nav > li{
            border-bottom: 1px #e5e5e5 solid;
        }

        /* Colors/style dropdown box*/
        nav.sidebar .navbar-nav .open .dropdown-menu {
            position: static;
            float: none;
            width: auto;
            margin-top: 0;
            background-color: transparent;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        /*allows nav box to use 100% width*/
        nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
            padding: 0 0px 0 0px;
        }

        /*colors dropdown box text */
        .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
            color: #777;
        }

        /*gives sidebar width/height*/
        nav.sidebar{
            width: 200px;
            height: 100%;
            margin-left: -160px;
            float: left;
            z-index: 8000;
            margin-bottom: 0px;
        }

        /*give sidebar 100% width;*/
        nav.sidebar li {
            width: 100%;
        }

        /* Move nav to full on mouse over*/
        nav.sidebar:hover{
            margin-left: 0px;
        }
        /*for hiden things when navbar hidden*/
        .forAnimate{
            opacity: 0;
        }
    }

    /* .....NavBar: Fully showing nav bar..... */

    @media (min-width: 1330px) {

        /*Allow main to be next to Nav*/
        .main{
            width: calc(100% - 200px); /*keeps 100% minus nav size*/
            margin-left: 200px;
        }

        /*Show all nav*/
        nav.sidebar{
            margin-left: 0px;
            float: left;
        }
        /*Show hidden items on nav*/
        nav.sidebar .forAnimate{
            opacity: 1;
        }
    }

    nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
        color: #CCC;
        background-color: transparent;
    }

    nav:hover .forAnimate{
        opacity: 1;
    }
    section{
        padding-left: 15px;
    }
    </style>
     <?php echo Asset::js('tempstrap.min.js'); ?>
    
 


<!------ Include the above in your HEAD tag ---------->

  
</head>
<body>
  <!--   <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->




<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           <img src="<?php echo Uri::base(false);?>/assets/landing-theme/images/logopro.png" alt="INTELLIPRO" title="intellipro logo" width="100%" height="10%">
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>

                <li class="active"><a href="<?php echo Uri::base().'dashboard' ; ?>">Dashboard<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-dashboard"></span></a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Project Planning </b><span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></span></a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li class="divider"></li>
                            <li><a href="<?php echo Uri::base().'project' ; ?>"><span class="fa-stack fa-lg pull-left"><i class="glyphicon glyphicon-play "></i></span>View Projects</a></li>    
                        <li class="divider"></li>
                            <li><a href="<?php echo Uri::base().'project/create' ; ?>"><span class="fa-stack fa-lg pull-left"><i class="glyphicon glyphicon-pencil "></i></span>Create Project</a></li>                    
                        <li class="divider"></li>
                            <li><a href="<?php echo Uri::base().'activity' ; ?>"><span class="fa-stack fa-lg pull-left"><i class="glyphicon glyphicon-plus-sign "></i></span>Activities</a></li>
                        <li class="divider"></li>
                            <li><a href="<?php echo Uri::base().'task' ; ?>"><span class="fa-stack fa-lg pull-left"><i class="glyphicon glyphicon-tasks"></i></span>Tasks</a></li>
                        
                        <li class="divider"></li>
                            <li><a href="<?php echo Uri::base().'predict' ; ?>"><span class="fa-stack fa-lg pull-left"><i class="glyphicon glyphicon-flash "></i></span>Predict</a></li>
                        
                    </ul>
                </li>


                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Recurring Issues </b><span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-repeat"></span></a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li class="divider"></li>
                        <li><a href="<?php echo Uri::base().'issue' ; ?>"><span class="fa-stack fa-lg pull-left"><i class=" glyphicon glyphicon-console "></i></span>Issues</a></li> 
                            <li><a href="<?php echo Uri::base().'issue/create' ; ?>"><span class="fa-stack fa-lg pull-left"><i class="glyphicon glyphicon-screenshot "></i></span>Log an issue</a></li>                    
                        <li class="divider"></li>
                            <li><a href="<?php echo Uri::base().'issue/detect' ; ?>"><span class="fa-stack fa-lg pull-left"><i class="glyphicon glyphicon-eye-open "></i></span>Detect Issues</a></li>
                        <li><a href="<?php echo Uri::base().'issue/fix' ; ?>"><span class="fa-stack fa-lg pull-left"><i class="glyphicon glyphicon-ok"></i></span>Solutions</a></li> 
                       
                        
                    </ul>
                </li>


                <li ><a href="<?php echo Uri::base().'chat' ; ?>"><b>Online Messaging</b><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
              
                
                <li ><a href="#">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                               <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>User Profile </b><span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li class="divider"></li>
                            <li><a href="<?php echo Uri::base().'userprofile/update' ; ?>"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Change Password</a></li>                    
                        <li class="divider"></li>
                            <li><a href="<?php echo Uri::base().'chat' ; ?>"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Send Message</a></li>
                     
                        
                    </ul>
                </li>

                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Administration </b><span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li class="divider"></li>
                            <li><a href="<?php echo Uri::base().'role/create' ; ?>"><span class="fa-stack fa-lg pull-left"><i class="glyphicon glyphicon-lock "></i></span>Add User Roles</a></li>
                        <li class="divider"></li>
                            <li><a href="<?php echo Uri::base().'userprofile/activate' ; ?>"><span class="fa-stack fa-lg pull-left"><i class="glyphicon glyphicon-lock "></i></span>Authorize Users</a></li>                    
                        <li class="divider"></li>
                            <li><a href="<?php echo Uri::base().'department' ; ?>"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Add Department</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo Uri::base().'projecttype' ; ?>"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Add Project Type</a></li>
                     
                        
                    </ul>
                </li>
                <li ><a href="<?php echo Uri::base().'user/logout' ; ?>">Logout<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>

            </ul>
        </div>
    </div>
</nav>
<div class="main">
    
<?php if (Session::get_flash('success')): ?>
            <div class="alert alert-success">
                <strong>Success</strong>
                <p>
                <?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
                </p>
            </div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
            <div class="alert alert-danger">
                <strong>Error</strong>
                <p>
                <?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
                </p>
            </div>
<?php endif; ?>

   <div style="padding-left: 1%;"> <?php echo $content ; ?></div>
<!-- Content Here -->
</div>

 <?php echo Asset::js(array(
        'bootstrap.min.js',
        'fastclick.js',
        'nprogress.js',
        'custom.min.js'
    )); ?>
<script type="text/javascript">
        function htmlbodyHeightUpdate(){
        var height3 = $( window ).height()
        var height1 = $('.nav').height()+50
        height2 = $('.main').height()
        if(height2 > height3){
            $('html').height(Math.max(height1,height3,height2)+10);
            $('body').height(Math.max(height1,height3,height2)+10);
        }
        else
        {
            $('html').height(Math.max(height1,height3,height2));
            $('body').height(Math.max(height1,height3,height2));
        }
        
    }
    $(document).ready(function () {
        htmlbodyHeightUpdate()
        $( window ).resize(function() {
            htmlbodyHeightUpdate()
        });
        $( window ).scroll(function() {
            height2 = $('.main').height()
            htmlbodyHeightUpdate()
        });
    });
</script>
</body>
</html>

