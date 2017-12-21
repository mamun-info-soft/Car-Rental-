<?php 
   require_once "init.php";
   if($_SESSION['access']=='1'){
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
         <h1 style="text-align: center;">Service Manager</h1>
         <div class="panel-group" id="accordion">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                     Branch Information</a>
                  </h4>
               </div>
               <div id="collapse1" class="panel-collapse collapse">
                  <div class="panel-body">
                  <form class="form-horizontal" role="form" id="branch_form">
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Branch name:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="" name="branch_name">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Branch city:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="" name="branch_city">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label"></label>
                           <div class="col-md-8">
                              <input type="button" id="branch_create" class="btn btn-success" value="Create branch">
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
               <?php 
               $select_branch_name = '<option value="">Select branch</option>'; 
               $stmt = $Database->prepare("SELECT b_id, b_name FROM branch ORDER BY b_name");
               $stmt->execute();
               $stmt->bind_result($b_id, $b_name);
               while ($stmt->fetch())
               {
                $select_branch_name .= "<option value='" . $b_id . "'";
           // if ($name == $prod_name) { $selectpat .= "selected='selected'"; }
                $select_branch_name .= ">" . $b_name . "</option>";
           //$selectpat .= "<option value='" . $id . "'>" . $name . "</option>";
             }
             $stmt->close();
             ?>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                     Car Information</a>
                  </h4>
               </div>
               <div id="collapse3" class="panel-collapse collapse">
                  <div class="panel-body">
                  <form class="form-horizontal" role="form" id="car_form">
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Car Model:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="" name="car_model" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Year:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="" name="year" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Make:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="" name="make" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">AVA:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="" name="ava" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label">Mileage:</label>
                           <div class="col-md-8">
                              <input class="form-control" type="text" value="" name="mileage" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Car type:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="" name="car_type" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Rate:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="" name="rate" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label">Branch name:</label>
                           <div class="col-md-8">
                              <select  class="form-control"  name="branch_name" required >
                                 <?php echo $select_branch_name; ?>
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label"></label>
                           <div class="col-md-8">
                              <input type="button" class="btn btn-success" value="Register Car" id="car_register">
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
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
            <div class="panel panel-default">
            	<div class="panel-heading">
            		<h4 class="panel-title">
            		<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
            				Employee information</a>
            			</h4>
            		</div>
            		<div id="collapse4" class="panel-collapse collapse">
            			<div class="panel-body">
            			<form class="form-horizontal" role="form" id="employee_form">
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Employee name:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="" name="employee_name" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Branch ID:</label>
                           <div class="col-lg-8">
                              <select  class="form-control"  name="branch_name" required >
                                 <?php echo $select_branch_name; ?>
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Salary:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="" name="salary" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label"></label>
                           <div class="col-md-8">
                              <input type="button" class="btn btn-success" value="Register Employee" id="employee_register">
                           </div>
                        </div>
                     </form>
            			</div>
            		</div>
            	</div>
               <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
                        View & update Employee information</a>
                     </h4>
                  </div>
                  <div id="collapse10" class="panel-collapse collapse">
                     <div class="panel-body">
                        <table class="table table-bordered">
                           <tr>
                              <th>No</th>
                              <th>Employee name</th>
                              <th>Branch </th>
                              <th>Salary</th>
                              <th>Action</th>
                           </tr>
                           <?php 
                                $employee =array();
                                $stmt1=$Database->prepare("SELECT e_id,b_id,e_name,salary FROM employee");
                                $stmt1->execute();
                                $stmt1->store_result();
                                $stmt1->bind_result($e_id,$b_id,$e_name,$salary);

                                while($stmt1->fetch()){
                                    $stmt7=$Database->prepare("SELECT b_name FROM branch WHERE b_id=?");
                                    $stmt7->bind_param('i',$b_id);
                                    $stmt7->execute();
                                    $stmt7->store_result();
                                    $stmt7->bind_result($b_name);
                                    while($stmt7->fetch()){
                                       $employee[] =   array(
                                          'e_id' => $e_id, 
                                          'b_name' => $b_name,
                                          'e_name' => $e_name,
                                          'salary' => $salary
                                          );
                                    }
                                 }
                                 foreach ($employee as $key => $employees) {?>
                                  <tr>
                                    <td><input type="text" id="<?php echo "e_id".$key; ?>" value="<?php echo $employees['e_id']; ?>"></input></td>
                                    <td><input type="text" id="<?php echo "e_name".$key; ?>" value="<?php echo $employees['e_name'];?>"></input></td>
                                    <td><select id="<?php echo "branch".$key; ?>"><?php                                 
                               $select_branch_name = '<option value="">Select branch</option>'; 
                                    $stmt4 = $Database->prepare("SELECT b_id, b_name FROM branch ORDER BY b_name");
                                    $stmt4->execute();
                                    $stmt4->bind_result($b_id, $b_name2);
                                    while ($stmt4->fetch())
                                    {
                                     $select_branch_name .= "<option value='" . $b_id . "'";
                                     if ($b_name2 == $employees['b_name']) { $select_branch_name .= "selected='selected'"; }
                                     $select_branch_name .= ">" . $b_name2 . "</option>";
                                        //$select_branch_name .= "<option value='" . $id . "'>" . $name . "</option>";
                                  }
                                  echo $select_branch_name;
                                  $stmt4->close(); 
                                  ?></select></td>
                                    <td><input type="text" id="<?php echo "salary".$key; ?>" value="<?php echo $employees['salary']; ?>"></input></td>
                                    <td><a href='#' data-key="<?php echo $key; ?>" data-car="<?php echo $employees['e_id']; ?>"  id='update_employee'>Save</a><br><a href='#' data-car="<?php echo $employees['e_id']; ?>" id='delete_employee' data-key="<?php echo $key; ?>">DELETE</a></td>
                                 </tr>
                               <?php   }  ?>

                        </table>
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
            				<form class="form-horizontal" role="form" id="manager_form">
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Manager name:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="" name="manager_name" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Branch ID:</label>
                           <div class="col-lg-8">
                              <select  class="form-control"  name="branch_name" required >
                                 <?php echo $select_branch_name; ?>
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label"></label>
                           <div class="col-md-8">
                              <input type="button" class="btn btn-success" value="Assign manager" id="manager_assign">
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
            				Maintenance Information</a>
            			</h4>
            		</div>
            		<div id="collapse7" class="panel-collapse collapse">
            			<div class="panel-body">
            				<form class="form-horizontal" role="form" id="maintenance_form">
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Order:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="" name="order">
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
                           <label class="col-lg-3 control-label">Branch ID:</label>
                           <div class="col-lg-8">
                              <select  class="form-control"  name="branch_name" required >
                                 <?php echo $select_branch_name; ?>
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-lg-3 control-label">Date of service:</label>
                           <div class="col-lg-8">
                              <input class="form-control" type="text" value="" placeholder="dd-mm-yyyy" name="sevice_date" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label">Day out:</label>
                           <div class="col-md-8">
                              <input class="form-control" type="text" value="" placeholder="dd-mm-yyyy" name="day_out" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label">Repair cost:</label>
                           <div class="col-md-8">
                              <input class="form-control" type="text" value="" name="cost" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label"></label>
                           <div class="col-md-8">
                              <input type="button" class="btn btn-primary" value="Save" id="maintenance">
                           </div>
                        </div>
                     </form>
            			</div>
            		</div>
            	</div>
               <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse13">
                        View & update branch information</a>
                     </h4>
                  </div>
                  <div id="collapse13" class="panel-collapse collapse">
                     <div class="panel-body">
                        <table class="table table-bordered">
                           <tr>
                              <th>No</th>
                              <th>Branch name</th>
                              <th>Branch city</th>
                              <th>Action</th>
                           </tr>
                           <?php 
                                $branch =array();
                                $stmt1=$Database->prepare("SELECT b_id,b_name,City FROM branch");
                                $stmt1->execute();
                                $stmt1->store_result();
                                $stmt1->bind_result($b_id,$b_name,$City);

                                while($stmt1->fetch()){
                                 $branch[] =   array(
                                    'b_id' => $b_id, 
                                    'b_name' => $b_name,
                                    'City' => $City
                                    );
                                 }
                                 foreach ($branch as $key => $branchs) {?>
                                 <tr>
                                    <td><input type="text" id="<?php echo "b_id".$key; ?>" value="<?php echo $branchs['b_id']; ?>"></input></td>
                                    <td><input type="text" id="<?php echo "b_name".$key; ?>" value="<?php echo $branchs['b_name'];?>"></input></td>
                                    <td><input type="text" id="<?php echo "City".$key; ?>" value="<?php echo $branchs['City']; ?>"></input></td>
                                    <td><a href='#' data-key="<?php echo $key; ?>" data-car="<?php echo $branchs['b_id']; ?>"  id='update_branch'>Save</a><br><a href='#' data-car="<?php echo $branchs['b_id']; ?>" id='delete_branch' data-key="<?php echo $key; ?>">DELETE</a></td>
                                 </tr>
                               <?php   }  ?>

                        </table>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                        View all orders</a>
                     </h4>
                  </div>
                  <div id="collapse8" class="panel-collapse collapse">
                     <div class="panel-body">
                        <table class="table table-bordered">
                           <tr>
                              <th>Transaction ID</th>
                              <th>Customer name</th>
                              <th>Customer Phone</th>
                              <th>Car model</th>
                              <th>Pick time</th>
                              <th>Return time</th>
                              <th>Rate</th>
                              <th>Action</th>
                           </tr>
                           <?php 
                           $stmt=$Database->prepare("SELECT Tran_id,C_id,VIN,R_time,RU_time FROM rents");
                           $stmt->execute();
                           $stmt->store_result();
                           $stmt->bind_result($Tran_id,$C_id,$VIN,$R_time,$RU_time);

                           while($stmt->fetch()){
                              $result="<tr>";
                             $stmt1=$Database->prepare("SELECT C_name,Phone FROM customer WHERE C_id=?");
                              $stmt1->bind_param('i',$C_id);
                             $stmt1->execute();
                             $stmt1->store_result();
                             $stmt1->bind_result($C_name,$Phone);

                             while($stmt1->fetch()){
                             
                                 $stmt3=$Database->prepare("SELECT Model,d_rate FROM car WHERE VIN=?");
                                 $stmt3->bind_param('i',$VIN);
                                 $stmt3->execute();
                                 $stmt3->store_result();
                                 $stmt3->bind_result($Model,$d_rate);
                                 while($stmt3->fetch()){
                                     echo $result.="<td>".$Tran_id."</td><td>".$C_name."</td><td>".$Phone."</td><td>".$Model."</td><td><input type='text' id='pick_time' value=".$R_time."></td><td><input type='text' id='return_time' value=".$RU_time."></td><td>".$d_rate."</td><td><a href='#' data-transaction=".$Tran_id." id='update_order'>Save</a>";
                                 }
                             }
                           }
                           ?>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
                        View & update car information</a>
                     </h4>
                  </div>
                  <div id="collapse9" class="panel-collapse collapse">
                     <div class="panel-body">
                        <table class="table table-bordered">
                           <tr>
                              <th>VIN</th>
                              <th>MODEL</th>
                              <th>YEAR</th>
                              <th>AVA</th>
                              <th>MAKE</th>
                              <th>MILEAGE</th>
                              <th>TYPE</th>
                              <th>DAILY RATE</th>
                              <th>BRANCH</th>
                              <th>ACTION</th>
                           </tr>
                           <?php 
                              $data=array();
                              $stmt=$Database->prepare("SELECT VIN,Model,Year,AVA,Make,Mileage,c_type,d_rate,b_id FROM car");
                              $stmt->execute();
                              $stmt->store_result();
                              $stmt->bind_result($VIN,$Model,$Year,$AVA,$Make,$Mileage,$c_type,$d_rate,$b_id);

                              while($stmt->fetch()){
                                $stmt1=$Database->prepare("SELECT b_name FROM branch WHERE b_id=?");
                                 $stmt1->bind_param('i',$b_id);
                                $stmt1->execute();
                                $stmt1->store_result();
                                $stmt1->bind_result($b_name);

                                while($stmt1->fetch()){
                                 $data[] =   array(
                                    'VIN' => $VIN, 
                                    'Model' => $Model,
                                    'Year' => $Year,
                                    'AVA' => $AVA,
                                    'Make' => $Make,
                                    'Mileage' => $Mileage, 
                                    'c_type' => $c_type,
                                    'd_rate' => $d_rate,
                                    'b_name' => $b_name
                                    );
                                 }
                              }
                              foreach ($data as $key=>$datas) {
                           ?>
                              <tr>
                              <td><input type="text" id="<?php echo "vin".$key; ?>" value="<?php echo $datas['VIN']; ?>"></input></td>
                              <td><input type="text" id="<?php echo "model".$key; ?>" value="<?php echo $datas['Model'];?>"></input></td>
                              <td><input type="text" id="<?php echo "year".$key; ?>" value="<?php echo $datas['Year']; ?>"></input></td>
                              <td><input type="text" id="<?php echo "ava".$key; ?>" value="<?php echo $datas['AVA']; ?>"></input></td>
                              <td><input type="text" id="<?php echo "make".$key; ?>" value="<?php echo $datas['Make']; ?>"></input></td>
                              <td><input type="text" id="<?php echo "mileage".$key; ?>" value="<?php echo $datas['Mileage']; ?>"></input></td>
                              <td><input type="text" id="<?php echo "type".$key; ?>" value="<?php echo $datas['c_type']; ?>"></input></td>
                              <td><input type="text" id="<?php echo "rate".$key; ?>" value="<?php echo $datas['d_rate']; ?>"></input></td>
                              <td><select id="<?php echo "branch".$key; ?>"><?php                                 
                               $select_branch_name = '<option value="">Select branch</option>'; 
                                    $stmt4 = $Database->prepare("SELECT b_id, b_name FROM branch ORDER BY b_name");
                                    $stmt4->execute();
                                    $stmt4->bind_result($b_id, $b_name2);
                                    while ($stmt4->fetch())
                                    {
                                     $select_branch_name .= "<option value='" . $b_id . "'";
                                     if ($b_name2 == $datas['b_name']) { $select_branch_name .= "selected='selected'"; }
                                     $select_branch_name .= ">" . $b_name2 . "</option>";
                                        //$select_branch_name .= "<option value='" . $id . "'>" . $name . "</option>";
                                  }
                                  echo $select_branch_name;
                                  $stmt4->close(); 
                                  ?></select></td>
                              <td><a href='#' data-key="<?php echo $key; ?>" data-car="<?php echo $datas['VIN']; ?>"  id='update_car'>Save</a><br><a href='#' data-car="<?php echo $datas['VIN']; ?>" id='delete_car' data-key="<?php echo $key; ?>">DELETE</a></td>
                           </tr>
                           <?php } ?>
                        </table>
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
         $("#branch_create").on("click",function(){
           $.ajax({
            type:"post",
            url: "branch.php",
            data:$("#branch_form").serialize(),
            beforeSend: function(){
                //TODO: dont know what to do yet
             },
             success:function(msg){
              $("#branch_form").html("Branch has been created Successfully!!");
              location.reload();
           },
           error: function(){
              alert("failure");
           }

        });
        });

         $("#car_register").on("click",function(){
          $.ajax({
            type:"post",
            url: "car_register.php",
            data:$("#car_form").serialize(),
            beforeSend: function(){
                //TODO: dont know what to do yet
             },
             success:function(msg){
                $("#car_form").html("Car has been registered Successfully!!");
                location.reload();
             },
             error: function(){
                alert("failure");
             }

          });
       });

         $("#employee_register").on("click",function(){
           $.ajax({
            type:"post",
            url: "employee_register.php",
            data:$("#employee_form").serialize(),
            beforeSend: function(){
                //TODO: dont know what to do yet
             },
             success:function(msg){
               $("#employee_form").html("Employee has been registered Successfully!!");
              location.reload();
           },
           error: function(){
              alert("failure");
           }

        });
        });
         $("#manager_assign").on("click",function(){
          $.ajax({
            type:"post",
            url: "manager_register.php",
            data:$("#manager_form").serialize(),
            beforeSend: function(){
                //TODO: dont know what to do yet
             },
             success:function(msg){
               $("#manager_form").html("Manager has been assigned Successfully!!");
               location.reload();
            },
            error: function(){
             alert("failure");
          }

       });
       });

         $("#maintenance").on("click",function(){
           $.ajax({
            type:"post",
            url: "maintenance.php",
            data:$("#maintenance_form").serialize(),
            beforeSend: function(){
                //TODO: dont know what to do yet
             },
             success:function(msg){
               $("#maintenance_form").html("maintenance has been ordered Successfully!!");
               location.reload();
            },
            error: function(){
              alert("failure");
           }

        });
        });

         $("#update_order").on("click",function(){
            var pick =$("#pick_time").val();
            var return_time =$("#return_time").val();
            var Transaction=$(this).data('transaction');
          $.ajax({
            type:"post",
            url: "update_order.php",
            data:{pick:pick,retun_time:return_time,Tran_id:Transaction},
            beforeSend: function(){
                //TODO: dont know what to do yet
             },
             success:function(msg){
               location.reload();
            },
            error: function(){
             alert("failure");
          }

       });
       });

         $("#update_car").on("click",function(){
            var key=$(this).data("key");
            var vin =$("#vin"+key).val();
            var model=$("#model"+key).val();
            var year=$("#year"+key).val();
            var ava =$("#ava"+key).val();
            var make=$("#make"+key).val();
            var mileage=$("#mileage"+key).val();
            var type=$("#type"+key).val();
            var rate=$("#rate"+key).val();
            var branch=$("#branch"+key).val();
            $.ajax({
               type:"post",
               url: "update_car.php",
               data:{vin:vin,model:model,year:year,ava:ava,make:make,mileage:mileage,type:type,rate:rate,branch:branch},
               beforeSend: function(){
                //TODO: dont know what to do yet
             },
             success:function(msg){
               location.reload();
            },
            error: function(){
              alert("failure");
           }

        });
         });

      $("#delete_car").on("click",function(){
            var key=$(this).data("key");
            var vin =$("#vin"+key).val();
            console.log(vin);
            $.ajax({
               type:"post",
               url: "delete_car.php",
               data:{vin:vin},
               beforeSend: function(){
                //TODO: dont know what to do yet
             },
             success:function(msg){
               location.reload();
            },
            error: function(){
              alert("failure");
           }

        });
         });

            $("#update_branch").on("click",function(){
            var key=$(this).data("key");
            var b_id =$("#b_id"+key).val();
            var b_name =$("#b_name"+key).val();
            var City =$("#City"+key).val();
            console.log(b_id);
            $.ajax({
               type:"post",
               url: "update_branch.php",
               data:{b_id:b_id,b_name:b_name,City:City},
               beforeSend: function(){
                //TODO: dont know what to do yet
             },
             success:function(msg){
               location.reload();
            },
            error: function(){
              alert("failure");
           }

        });
         });
            $("#update_employee").on("click",function(){
               var key=$(this).data("key");
               var e_id =$("#e_id"+key).val();
               var b_name =$("#branch"+key).val();
               var e_name =$("#e_name"+key).val();
               var salary =$("#salary"+key).val();
               $.ajax({
                  type:"post",
                  url: "update_employee.php",
                  data:{e_id:e_id,b_name:b_name,e_name:e_name,salary:salary},
                  beforeSend: function(){
                //TODO: dont know what to do yet
             },
             success:function(msg){
               location.reload();
            },
            error: function(){
             alert("failure");
          }

       });
            });

            $("#delete_branch").on("click",function(){
               var key=$(this).data("key");
               var b_id =$("#b_id"+key).val();
               $.ajax({
                  type:"post",
                  url: "delete_branch.php",
                  data:{b_id:b_id},
                  beforeSend: function(){
                //TODO: dont know what to do yet
             },
             success:function(msg){
               location.reload();
            },
            error: function(){
             alert("failure");
          }

       });
            });
            $("#delete_employee").on("click",function(){
               var key=$(this).data("key");
               var e_id =$("#e_id"+key).val();
               $.ajax({
                  type:"post",
                  url: "delete_employee.php",
                  data:{e_id:e_id},
                  beforeSend: function(){
                //TODO: dont know what to do yet
             },
             success:function(msg){
               //location.reload();
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