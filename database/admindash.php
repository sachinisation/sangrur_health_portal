<?php 
session_start();
if(!isset($_SESSION['uid'])){
 header('location:login.php');
}


?>

<!DOCTYPE HTML>
<html lang="en_Us">
<head> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css" />

</head>
<body>  
<br/><br/><br/>
    
    <!-- Plans -->
	
   <section id="content">
        <div class="container">
         

                <!-- item -->
                <div class="col-md-10 text-center" style="margin-left:90px; margin-right:50px"; >
                    <div class="panel panel-danger panel-pricing" >
                        <button style="float:right;margin-right:10px;margin-top:10px;color:tomato"><a href="logout.php"><h3 style="float:right;margin-right:10px;margin-top:10px;color:tomato" >Logout</h3></a></button>                  
					   <div class="panel-heading">
                          <!-- <i class="fa fa-desktop"></i> -->
                            <h3 > Welcome To Admin Dashboard</h3>
							</div>
                                                  

						     <div class="panel-footer">
                           <a class="btn btn-lg btn-block btn-danger" href="keep.php">Insert Student Details</a>
                          <a class="btn btn-lg btn-block btn-danger"   href="keep.php"> Update Student Details</a>
					       <a class="btn btn-lg btn-block btn-danger" href="keep.php" >Delete Student Details</a>	<a class="btn btn-lg btn-block btn-danger" href="Database_creater.php">Create new Database</a>
						</div>
                    </div>
                </div>
</div>
</div>
</section>

				</body>
</html>
