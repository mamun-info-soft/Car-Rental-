<?php 
   require_once "init.php";
   if($_SESSION['access']=='2'){

 ?>
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
         <?php 
            $select_car = '<option value="">Select Car</option>'; 
            $stmt = $Database->prepare("SELECT VIN, Model FROM car ORDER BY Model");
            $stmt->execute();
            $stmt->bind_result($VIN, $Model);
            while ($stmt->fetch())
            {
               $select_car .= "<option value='" . $VIN . "'";
           // if ($name == $prod_name) { $selectpat .= "selected='selected'"; }
               $select_car .= ">" . $Model . "</option>";
           //$selectpat .= "<option value='" . $id . "'>" . $name . "</option>";
           }
           $stmt->close();
           ?>
           <?php 
           // Generate Guid 
           function NewGuid() { 
              $s = strtoupper(md5(uniqid(rand(),true))); 
              $guidText = 
              substr($s,0,8) . '-' . 
              substr($s,8,4) . '-' . 
              substr($s,12,4). '-' . 
              substr($s,16,4). '-' . 
              substr($s,20); 
              return $guidText;
           }
// End Generate Guid 

           $Guid = NewGuid();
           ?>
         <h1 style="text-align: center;">Your order information</h1>
         <div class="panel-group" id="accordion">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                        Rent Information</a>
                     </h4>
                  </div>
                  <div id="collapse6" class="panel-collapse collapse">
                     <div class="panel-body">
                        <form class="form-horizontal" role="form" id="order_form">
                        <div class="form-group">
                           
                           <div class="col-lg-8">
                              <input class="form-control" type="hidden" value="<?php echo $_SESSION['user_id']; ?>" name="customer_id">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Vehicle identification number:</label>
                           <div class="col-lg-8">
                              <select  class="form-control"  name="car_model" required >
                                 <?php echo $select_car; ?>
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Pick up time:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="" name="pick">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Return time:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="" name="return">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label">Transaction ID:</label>
                           <div class="col-md-8">
                              <input class="form-control" type="text" value="<?php echo $Guid; ?>" name="transaction">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label"></label>
                           <div class="col-md-8">
                              <input type="button" class="btn btn-primary" value="Submit"  id="order">
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

         $("#order").on("click",function(){
          $.ajax({
            type:"post",
            url: "process_order.php",
            data:$("#order_form").serialize(),
            beforeSend: function(){
                //TODO: dont know what to do yet
             },
             success:function(msg){
               $("#order_form").html("order has been submitted Successfully!!");
               location.reload();
            },
            error: function(){
             alert("failure");
          }

       });
       });
    </script>
   </body>
</html>
<?php }else{
   header("location:index-6.php");
   } ?>