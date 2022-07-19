<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Case Study | <?php include('../dist/includes/title.php');?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <style>
      
    </style>
 </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-<?php echo $_SESSION['skin'];?> layout-top-nav">
    <div class="wrapper">
      <?php include('../dist/includes/header.php');
      include('../dist/includes/dbcon.php');
      ?>
    <!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              <a class="btn btn-lg btn-warning" href="case.php">Back</a>
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="case.php"><i class="fa fa-dashboard"></i> Case Study</a></li>
              <li class="active">Hints</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="row">
	          
			
            <div class="col-xs-12">
              <div class="box box-primary">
    
                <div class="box-header">
                  <h3 class="box-title">Zambike Case Study Hints/Walkthrough</h3>
                </div>
                <div class="box-body">
                    <p>You need to create an invoice for a customer named 'Johnny Blaze' ordering 4 touring bamboo bike, 10 transport zambike, 5 zambulance and 5 zamcart. The address of the customer is to be an address of your choice and the contact number is also a contact number of your choice. The amount tendered is 6000usd.</p>
                    <p>Then you need to create another invoice for the same customer using the options available for an order of 15 water bottles, 5 bicycles pumps, 15 repair kits and 2 bamboo frames. The amount tendered is 1500usd.</p>
                    <br>
                    <h4>Walkthrough</h4>
                    <p>Step 1: On the homepage, click on the purchase button.</p>
                    <p>Step 2: Create new customer by filling the textboxes; Blaze for lastname, Johnny for firstname. Then add an address and a contact number for the new customr.</p>
                    <p>Step 3: Click on the next button on the same page.</p>
                    <p>Step 4: Select the touring bamboo bike and set the quantity to 5 and click add.</p>
                    <p>Step 5: Select the transport zambike and set the quantity to 10 and click add.</p>
                    <p>Step 6: Select the zambulance and set the quantity to 5 and click add.</p>
                    <p>Step 7: Select the zamcart and set the quantity to 5 and click add.</p>
                    <p>Step 8: Enter 6000 in the amount tendered textbox.</p>
                    <p>Step 9: Click on complete sales button.</p>
                    <p>Step 10: View or Print the sales Invoice and click the 'back to homepage' button.</p>
                    <p>Step 11: Click on Purchases button again.</p>
                    <p>Step 12: Click on search existing customer and select Blaze johnny.</p>
                    <p>Step 13: Select the water bottles and set the quantity to 15 and click add.</p>
                    <p>Step 14: Select the bicycle pumps bike and set the quantity to 5 and click add.</p>
                    <p>Step 15: Select the repair kit and set the quantity to 15 and click add.</p>
                    <p>Step 16: Select the bamboo frame and set the quantity to 2 and click add.</p>
                    <p>Step 17: Enter 1500 in the amount tendered textbox.</p>
                    <p>Step 18: Click on complete sales button.</p>
                    <p>Step 19: View or Print the sales Invoice and click the 'back to homepage' button.</p>
                    <p>Congratulations, you completed the game.</p>
                </div>
              </div>
            </div>
            </div>
          </section>
        </div>
    </div>
   </body>
</html>