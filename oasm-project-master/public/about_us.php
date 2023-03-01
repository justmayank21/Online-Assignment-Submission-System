<?php
   session_start();
    $cur_page="Contact Us"; 
     include_once("../includes/layouts/header.php");
     require_once("../includes/functions.php");
      $connection=connectDB();
     checkConnectivity();
 ?>
<div id="body">
  <div id="left_main">
  <br/>
    <?php echo navigation()?>

  </div>
  <div id="center_main">
   <h2>  About Us </h2>
    <p style="font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; margin:10px;">OASM is a online assignment managment service which lets Student and Teachers to communicate. It also allows, 
    students to submit their projects or assignments directly to the respective teachers. 
    </p>
    <h2>  Developed By  </h2>
    <ul style="list-style-type:!important; list-stylefont-style:normal;font-size:24px; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif';">
      <li>Ankesh Bharti <a href="http://www.facebook.com/shermix011"> <img src="images/fb.png"/></a></li>
      <li>Amrit Srivastava  <a href="https://www.facebook.com/amrit.srivastava.566"> <img src="images/fb.png"/></a></li>
      <li>Shubh Anand  <a href="http://www.facebook.com/shubhanand26" > <img src="images/fb.png"/></a></li>
      <li>Navneet Khandelwal <a href="http://www.facebook.com/navneet.khandelwal.92"><img src="images/fb.png"/></a></li>
    </ul>
    </div>
    <div id="right_main">
      <?php right_main(); ?>
    </div>
</div>
<?php include("../includes/layouts/footer.php"); ?>
