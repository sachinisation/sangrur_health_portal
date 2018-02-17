<html>
</title>

</title>
<head>
<link rel="stylesheet" href="js/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>

<script>
$(document).ready(function(){
    $("#sel1").change(function(){
        $("#sel2").removeAttr('disabled');
        var Edu_block=$("#sel1").val();
       $.ajax({
        url: 'form_data.php',
        type: 'POST',
        data: {Edu_block:Edu_block},
        success: function(data) {
            $("#sel2").html(data); // Inspect this in your console
            $("#sel3").html(" <option>Please select Class Name</option>");
            }
        });});

    $("#sel2").change(function(){
        $("#sel3").removeAttr('disabled');
    var Edu_block=$("#sel1").val(),School=$("#sel2").val();
       $.ajax({
        url: 'form_data.php',
        type: 'POST',
        data: {Edu_block:Edu_block,School:School},
        success: function(data) {
            $("#sel3").html(data); // Inspect this in your console
        }
        });
    });

     $("#sel3").change(function(){
        $("#Dropout").removeAttr('disabled');
       $("#Student").removeAttr('disabled');
        $("#Diability").removeAttr('disabled');
        $("#BMI").removeAttr('disabled');
         $("#submit").removeAttr('disabled');
    });
     $("#submit").click(function(event){
      var Edu_block=$("#sel1").val(),School=$("#sel2").val(),Class=$("#sel3").val(),Radio=$("input[name='function']:checked").val();
     $.ajax({
        url: 'form_data.php',
        type: 'POST',
        data: {Edu_block:Edu_block,School:School,Class:Class,Radio:Radio},
        success: function(data) {
          $("#table_show").html(data);
             window.scrollTo(0,500);
           // Inspect this in your console
          //  console.log(data);//  check:sqn-1,GPS BHalla basti gsss san(g) se
        }
        });});
    
});
</script>
<?php
require 'form_data.php';
?>
<body>
<nav class="navbar navbar-default"  role="navigation">
<div class="navbar-wrapper">
    <div class="container-fluid">
        
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
					
                    <a class="navbar-brand" href="#"> </a>
					
                </div>
				
				
				<img src="images/LOGO2.jpg" class="img-responsive" align="center" alt="logo" height="150" width="1000" style="padding-left:50px">
            <!--   <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        
                        
                        
                       
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        
						
						
                       
                    </ul>
                </div> -->
            </div>
            <ul class="nav navbar-nav navbar-right">
        <li><button style="float:right;margin-right:5px; margin-top:-25px;color:tomato"><a href="database/login.php"><span class="glyphicon glyphicon-log-in"></span>Admin Login</a></li>
       
    <!-- <button style="float:right;margin-right:10px;margin-top:10px;color:tomato"><a href="../database/login.php"><h3 style="float:right;margin-right:10px;margin-top:10px;color:green" >Admin Login</h3></a></button>                  
-->
    
    </ul>
       
    </div>
</div>



<!-- second bar -->


 <!-- third bar -->
 
</nav>

<!--   -->

<div class="container-fluid">
  <div class="row content" >
    <div class="col-sm-3 sidenav" >
      <div style="border-style: groove; padding: 10px ">
      <center><h2 style="color:GREEN"> VISION AND PURPOSE</h2></center>
    <!--
	<ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Home</a></li>
        <li><a href="#section2">Friends</a></li>
        <li><a href="#section3">Family</a></li>
        <li><a href="#section3">Photos</a></li>
      </ul>
	  -->
	  <br>
	  
	  <h3>   <p style="text-align: justify;text-justify:inter-word;">This site is aimed to track the various indicator of health and education of district Sangrur. In education primary focus on dropouts. To track dropout children current year school enrollment is compared with last year school enrollment. To track health focus is on Body Mass Index (BMI). BMI between 18 to 25 is normal. Variations beyond this range needs tracking and intervention.
 Another aspect of this website is to track differentially enabled children and provide them requisite assistance.</p> <h3>
<h5 ><b> "HEALTHY MIND LIVES IN HEALTHY BODY"</b></h5>
	</div>

    <!--  <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>  -->
    </div>
	
	
	

	
 <div class="col-sm-6" >
	
	<h2  style="padding-left:250px; color:tomato" >
School Education and Health Reporter<br>
                </h2><h2 style="padding-left:350px; color:tomato;display:inline;"">(SEHR)
</h2>
 <!-- <p>The form b </p>  -->
   <!--  <label for="sel1">Select list (select one):</label> -->

	<div class="form-group" style="padding-left:120px " >
     <label for="Educational Block"> Educational Block </label>     
	 <select class="form-control" id="sel1">
       <option>  Please select Educational Block</option>
        <?php educationalBlock()?>
</select>
      
	  <br>
	   <label for="School Name"> School Name</label> 
	   <select class="form-control" id="sel2" disabled="true">
       <option>Please select School Name</option>
       
      </select>
	  <br>
	  <label for="Class Name"> Class Name</label> 
	   <select class="form-control" id="sel3" disabled="true">
        <option>Please select Class Name</option>
       
      </select>
	  <br>
	  <input type="radio" name="function" value="Dropout" disabled="true" id="Dropout" checked>Dropout <br>
	  <input type="radio" name="function" value="BMI" disabled="true" id="BMI">BMI<br>
	  <input type="radio" name="function" value="Student" disabled="true" id="Student">Student<br>
	  <input type="radio" name="function" value="Disability" disabled="true" id="Diability">Specially Enabled<br><br>
	
	 
   <button  id="submit" class="btn btn-primary" name="submit" value="submit" disabled="true">Submit</button>
	  
	  
	  </div>
	  	 
  <div id="table_show">
   
  </div>
 
</div>
   </div>
</div>
  


  </body>
<footer class="container-fluid text-center">
  


  <p aling="center"><a href="about/adm.html"> Contact Us</p></a>



</footer>

</html>


