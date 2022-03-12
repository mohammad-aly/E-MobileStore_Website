<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <title>E-Store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/css.css" type="text/css">
    </head>
    <body>
         <?php
        include 'includes/header.php';
        ?>
                   
            <div class="container text-center">
			<div class="container11">
                <div id="item_list">
                    <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <center>
                                
                            <h2 style="color:black; margin-top: 35px;"><b>ONE PLUS MOBILES</b></h2>
                        </center>
                        </div>

                    <div class="panel-body">
                        <div class="col-sm-4">
                            
                               <div class="thumbnail">
                                    <img src="img/1.jfif" alt="iphone x" >
                                        <div class="caption">
                                            <h3>One Plus Nord</h3>
											<p>Price:Rs.70,000</p> 
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>

                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-4">
                          
                               <div class="thumbnail">
                                    <img src="img/2.jfif" alt=" " >
                                        <div class="caption">
										<h3>One Plus 9R</h3>
                                        <p>Price:Rs.1,58,000</p> 
										<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                       
                                        </div>
                                </div>
                            </a>
                        </div>
						 <div class="col-sm-4">
                            
                               <div class="thumbnail">
                                   
                                <img src="img/3.jfif" alt="" >
                                        <div class="caption">
                                          <h3>One Plus 13</h3>
                                        <p>Price:Rs.36,000</p> 
										<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>

                                        </div>
                                </div>
                            </a>
                        </div>
						</div>
						
						<div class="panel-body">
						<div class="col-sm-4">
                            <div class="thumbnail">
                                <img src="img/4.jfif" alt="" >
                                        <div class="caption">
                                        <h3>One Plus CE</h3>
                                        <p>Price:Rs.70,000</p> 
										<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>

                                        </div>
                                </div>
                            </a>
                        </div>
						
						<div class="col-sm-4">
                            <div class="thumbnail">   
                                <img src="img/5.jfif" alt=" " >
                                        <div class="caption">
                                        <h3>One Plus XS</h3>
                                        <p>Price:Rs.88,000</p> 
										<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>

                                        </div>
                                </div>
                            </a>
                        </div>
						
						<div class="col-sm-4">
                            
                               <div class="thumbnail">
                                   
                                <img src="img/5.jfif" alt=" " >
                                        <div class="caption">
                                          <h3>One Plus yv</h3>
                                        <p>Price:Rs.53,000</p> 
										<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>

                                        </div>
                                </div>
                            </a>
                        </div>
						
						<div class="col-sm-4">
                            <div class="thumbnail">   
                                <img src="img/7.jfif" alt=" " >
                                        <div class="caption">
                                        <h3>One Plus JA</h3>
                                        <p>Price:Rs.70,000</p> 
										<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>

                                        </div>
                                </div>
                            </a>
                        </div>
						<div class="col-sm-4">
                           
                               <div class="thumbnail">
                                    <img src="img/8.jfif" alt=" " >
                                        <div class="caption">
                                           <h3>One Plus RJ</h3>
                                        <p>Price:Rs. 1,10,000.00</p> 
										<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>

                                        </div>
                                </div>
                            </a>
                        </div>
						<div class="col-sm-4">
                            <div class="thumbnail">
                                <img src="img/9.jfif" alt=" " >
                                        <div class="caption">
                                        <h3>One Plus  WIS</h3>
                                        <p>Price:Rs.1,30,000</p> 
										<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>

                                        </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>



                </div>
            </div>
			</div>
           
            </div>
			</div>
        
    
<?php
include 'includes/footer.php';
?>
    </body>
</html>
