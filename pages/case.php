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
              <a class="btn btn-lg btn-warning" href="home.php">Back</a>
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Case Study</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="row">
	          
			
            <div class="col-xs-12">
              <div class="box box-primary">
    
                <div class="box-header">
                  <h3 class="box-title">Zambike Case Study</h3>
                </div>
                <div class="box-body">
                    <p>Zambikes is a zambian bicycle company located in Lusaka, Zambia. The current operations for this company includes procurement, sales, inventory management and production. In this game, we will consider only sales and inventory management.</p>
                    <p>Zambikes' objective is to create a business addressing the economic and social needs of people in southern Africa.</p>
                    <p>Zambikes' philosophy is to empower local cummunities through job creation and skills developmentand also to commit to sustainable craftmanship and manufacturing of high quality bicycles.</p>
                    <p>Zambikes organizational structure starts with a managing director, and is followed by 5 different sections; logistics& international sales, sales & Marketing, Production, Accounts & Finance and Admin respectively. Each Department has its own manager.</p>
                    <p>The products zambikes makes are in 3 different categories; finished products, semi-finished products and trading goods. Finished products consists of the bamboo touring bike, transport zambike, zambulance and the zamcart. Semi-finished product is the bamboo frame only and the trading goods are the repair kits, water bottles and bicycle pumps.</p>
                    <p>Zambike has both local and international vendors and customers but for this hands-on practice we will consider local and international as one.</p>
                    <p>Full case study Link: <a href="https://slideplayer.com/slide/10584071/">here</a></p><br>
                    <h4>What To Do?</h4>
                    <br>
                    <p>You need to create an invoice for a customer named 'Johnny Blaze' ordering 4 touring bamboo bike, 10 transport zambike, 5 zambulance and 5 zamcart. The address of the customer is to be an address of your choice and the contact number is also a contact number of your choice. The amount tendered is 6000usd.</p>
                    <p>Then you need to create another invoice for the same customer using the options available for an order of 15 water bottles, 5 bicycles pumps, 15 repair kits and 2 bamboo frames. The amount tendered is 1500usd.</p>
                    <br><br><br>
                    <h1>
              <a class="btn btn-lg btn-warning" href="hints.php">Hints</a>
              
            </h1>
                </div>
              </div>
            </div>
            </div>
          </section>
        </div>
    </div>
   </body>
</html>