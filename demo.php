<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Services</title>
      <meta charset="utf-8">
      <meta name = "format-detection" content = "telephone=no" />
      <link rel="icon" href="images/favicon.ico">
      <link rel="shortcut icon" href="images/favicon.ico" />
      <link rel="stylesheet" href="css/style.css">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <script src="js/jquery.js"></script>
      <script src="js/jquery-migrate-1.2.1.js"></script>
      <script src="js/script.js"></script>
      <script src="js/superfish.js"></script>
      <script src="js/jquery.ui.totop.js"></script>
      <script src="js/jquery.equalheights.js"></script>
      <script src="js/jquery.mobilemenu.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
      <script>
         $(document).ready(function(){
         	$().UItoTop({ easingType: 'easeOutQuart' });
         });
      </script>
      <!--[if lt IE 8]>
      <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
         <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
      <![endif]-->
      <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">
      <![endif]-->
   </head>
   <body class="" id="top">
      <div class="main">
         <!--==============================header=================================-->
         <header>
            <div class="menu_block ">
               <div class="container_12">
                  <div class="grid_12">
                     <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                        <ul class="sf-menu">
                           <li><a href="index.html">Home</a></li>
                           <li><a href="index-1.html">About</a></li>
                           <li><a href="index-2.html">Cars</a></li>
                           <li><a href="index-4.html">Contacts</a></li>
                           <li><a href="index-5.php">Register</a></li>
                           <li><a href="#" id="logout">logout</a></li>
                        </ul>
                     </nav>
                     <div class="clear"></div>
                  </div>
                  <div class="clear"></div>
               </div>
            </div>
            <div class="clear"></div>
         </header>
         <!--==============================Content=================================-->
         <h1 style="text-align: center;">Service Manager</h1>
         <div class="panel-group" id="accordion">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                     Branch Information</a>
                  </h4>
               </div>
               <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body">
                  <form class="form-horizontal" role="form">
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Branch name:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Branch city:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                        <label class="col-lg-3 control-label">Vehicle identification number:</label>
                        	<div class="col-lg-8">
                        		<input class="form-control" type="text" value="">
                        	</div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Car:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label">Employee:</label>
                           <div class="col-md-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label">Maintainance Order:</label>
                           <div class="col-md-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label"></label>
                           <div class="col-md-8">
                              <input type="button" class="btn btn-primary" value="Save Changes">
                              <span></span>
                              <input type="reset" class="btn btn-default" value="Cancel">
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                     Car Information</a>
                  </h4>
               </div>
               <div id="collapse3" class="panel-collapse collapse">
                  <div class="panel-body">
                  <form class="form-horizontal" role="form">
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Customer Model:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Year:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Make:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">AVA:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label">Mileage:</label>
                           <div class="col-md-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label">Branch ID:</label>
                           <div class="col-md-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label"></label>
                           <div class="col-md-8">
                              <input type="button" class="btn btn-primary" value="Save Changes">
                              <span></span>
                              <input type="reset" class="btn btn-default" value="Cancel">
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="panel panel-default">
            	<div class="panel-heading">
            		<h4 class="panel-title">
            		<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
            				Employee information</a>
            			</h4>
            		</div>
            		<div id="collapse4" class="panel-collapse collapse">
            			<div class="panel-body">
            			<form class="form-horizontal" role="form">
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Employee name:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Branch ID:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Salary:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                     </form>
            			</div>
            		</div>
            	</div>
            	<div class="panel panel-default">
            	<div class="panel-heading">
            		<h4 class="panel-title">
            		<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
            				Manager Information</a>
            			</h4>
            		</div>
            		<div id="collapse5" class="panel-collapse collapse">
            			<div class="panel-body">
            				<form class="form-horizontal" role="form">
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Manager name:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Branch ID:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Employee ID:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                     </form>
            			</div>
            		</div>
            	</div>
            	<div class="panel panel-default">
            	<div class="panel-heading">
            		<h4 class="panel-title">
            		<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
            				Rent Information</a>
            			</h4>
            		</div>
            		<div id="collapse6" class="panel-collapse collapse">
            			<div class="panel-body">
            				<form class="form-horizontal" role="form">
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Customer ID:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Vehicle identification number:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Pick up time:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Return time:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label">Transaction ID:</label>
                           <div class="col-md-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label"></label>
                           <div class="col-md-8">
                              <input type="button" class="btn btn-primary" value="Save Changes">
                              <span></span>
                              <input type="reset" class="btn btn-default" value="Cancel">
                           </div>
                        </div>
                     </form>
            			</div>
            		</div>
            	</div>
            	<div class="panel panel-default">
            	<div class="panel-heading">
            		<h4 class="panel-title">
            		<a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
            				Maintainance Information</a>
            			</h4>
            		</div>
            		<div id="collapse7" class="panel-collapse collapse">
            			<div class="panel-body">
            				<form class="form-horizontal" role="form">
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Order:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Vehicle identification number:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Branch ID:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Date of service:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label">Day out:</label>
                           <div class="col-md-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label">Repair cost:</label>
                           <div class="col-md-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label"></label>
                           <div class="col-md-8">
                              <input type="button" class="btn btn-primary" value="Save Changes">
                              <span></span>
                              <input type="reset" class="btn btn-default" value="Cancel">
                           </div>
                        </div>
                     </form>
            			</div>
            		</div>
            	</div>
            	<div class="panel panel-default">
            	<div class="panel-heading">
            		<h4 class="panel-title">
            		<a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
            				Class information</a>
            			</h4>
            		</div>
            		<div id="collapse8" class="panel-collapse collapse">
            			<div class="panel-body">
            				<form class="form-horizontal" role="form">
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Model:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Car type:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Rate:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label"></label>
                           <div class="col-md-8">
                              <input type="button" class="btn btn-primary" value="Save Changes">
                              <span></span>
                              <input type="reset" class="btn btn-default" value="Cancel">
                           </div>
                        </div>
                     </form>
            			</div>
            		</div>
            	</div>
         </div>
      </div>
      <!--==============================footer=================================-->
      <footer>
         <div class="container_12">
            <div class="grid_12">
               <div class="f_phone"><span>Call Us:</span> + 8801758422282</div>
               <div class="socials">
                  <a href="#" class="fa fa-twitter"></a>
                  <a href="#" class="fa fa-facebook"></a>
                  <a href="#" class="fa fa-google-plus"></a>
               </div>
               <div class="copy">
                  <div class="st1">
                     <div class="brand">Car<span class="color1">R</span>ental </div>
                     &copy; 2016	| <a href="#">Privacy Policy</a> 
                  </div>
               </div>
            </div>
            <div class="clear"></div>
         </div>
      </footer>
      <script type="text/javascript">
         $("#logout").on("click",function(){
           $.ajax({
            type:"post",
            url: "logout.php",
            beforeSend: function(){
                //TODO: dont know what to do yet
             },
             success:function(msg){
              window.location.replace("index.html");
           },
           error: function(){
              alert("failure");
           }

        });
        });
      </script>
   </body>
</html>