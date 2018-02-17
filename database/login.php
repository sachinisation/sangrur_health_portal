<?php
session_start();
if(isset($_SESSION['uid'])){
 header('location:admindash.php');
}

?>

<html>
<head>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
// define variables and set to empty values
//$name = $pass="";
$con=mysqli_connect('localhost','root','','gov_project');
if($con){
//echo"conneted";


}else{
	die("not conneted");
}
if (isset($_POST['submit'] )) {
  
  $uname = $_POST['username'];
  $pass = $_POST['password'];
  $qry= " SELECT *FROM Login_Table where Username='$uname' and Password='$pass'  ";
  $run=mysqli_query($con,$qry);
  $row=mysqli_num_rows($run);
  if($row < 1){
   ?>
    <script>
     alert('username or password is not matched');
     window.open('login.php','_self');
   </script>
  <?php
 }
 else {
   $data=mysqli_fetch_assoc($run);
   $id=$data['ID'];
   session_start();
   $_SESSION['uid']=$id;
   header('location:admindash.php');
  }
  
}
?>
<div class="container" >
</br></br> </br>  </br> </br>
  <div class="row">
		<div class="col-md-4 col-md-offset-4" style="padding-right:20px ">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Please sign in</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" action="login.php" method="post">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <label for="Username">Username</label>
							<input class="form-control" placeholder="username" name="username" type="text">
			    		</div>
			    		<div class="form-group">
						<label for="Password">Password</label>
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div> 
			    		<input class="btn btn-lg btn-block btn-danger"type="submit" name="submit" value="Login">
			    	</fieldset>
			      	</form>                <!-- class=" btn btn-lg btn-success btn-danger"  it is the class for making button green-->
			    </div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

