<?php
$connect = mysqli_connect("localhost", "root", "", "sem7_sgp");
 $query = "SELECT * FROM sheet3 ";  
 $result = mysqli_query($connect, $query); 
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Faculty Event Report</title>

  <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<div class="firstrow row">
		<div class="col-lg-2 dropdown">
  			<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		Report Status
  			</button>
  			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    			<a class="dropdown-item" href="#">Approved</a>
    			<a class="dropdown-item" href="#">Pending</a>
  			</div>
		</div>

		<div class="col-lg-2 dropdown">
  			<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		Academic Year
  			</button>
  			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    			<a class="dropdown-item" href="#">2010-11</a>
    			<a class="dropdown-item" href="#">2011-12</a>
    			<a class="dropdown-item" href="#">2012-13</a>
    			<a class="dropdown-item" href="#">2013-14</a>
    			<a class="dropdown-item" href="#">2014-15</a>
    			<a class="dropdown-item" href="#">2015-16</a>
    			<a class="dropdown-item" href="#">2016-17</a>
    			<a class="dropdown-item" href="#">2017-18</a>
    			<a class="dropdown-item" href="#">2018-19</a>
    			<a class="dropdown-item" href="#">2019-20</a>
    			<a class="dropdown-item" href="#">2020-21</a>
  			</div>
		</div>

		<div class="col-lg-2 dropdown">
  			<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		Event Type
  			</button>
  			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    			<a class="dropdown-item" href="#">FDP</a>
    			<a class="dropdown-item" href="#">Industrial Training</a>
    			<a class="dropdown-item" href="#">Workshops</a>
    			<a class="dropdown-item" href="#">STTP</a>
    			<a class="dropdown-item" href="#">Symposia</a>
    			<a class="dropdown-item" href="#">Conferences</a>
    			<a class="dropdown-item" href="#">Online Course</a>
    			<a class="dropdown-item" href="#">Webinar</a>
    			<a class="dropdown-item" href="#">Other</a>
  			</div>
		</div>

		<div class="col-lg-2 dropdown">
  			<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		Event Level
  			</button>
  			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    			<a class="dropdown-item" href="#">University</a>
    			<a class="dropdown-item" href="#">State</a>
    			<a class="dropdown-item" href="#">National</a>
    			<a class="dropdown-item" href="#">International(Within India)</a>
    			<a class="dropdown-item" href="#">International(Abroad)</a>
  			</div>
		</div>

		<div class="col-lg-2 dropdown">
  			<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		Participation Mode
  			</button>
  			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    			<a class="dropdown-item" href="#">In Person</a>
    			<a class="dropdown-item" href="#">Online</a>
  			</div>
		</div>

		<div class="col-lg-2 dropdown">
  			<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		Organizing Body
  			</button>
  			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    			<a class="dropdown-item" href="#">Charusat</a>
    			<a class="dropdown-item" href="#">Other</a>
  			</div>
		</div>
	</div>

	<div class="normalrow row">
		<div class="col-lg-2 dropdown">
  			<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		Participation Hours
  			</button>
  			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    			<a class="dropdown-item" href="#"><3 Hours</a>
    			<a class="dropdown-item" href="#">>3 Hours</a>
  			</div>
		</div>

		<div class="col-lg-2 dropdown">
  			<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		Leave Required?
  			</button>
  			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    			<a class="dropdown-item" href="#">Yes</a>
    			<a class="dropdown-item" href="#">No</a>
  			</div>
		</div>

		<div class="col-lg-4 dropdown">
  			<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		Member of Organizing Committee
  			</button>
  			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    			<a class="dropdown-item" href="#">Yes</a>
    			<a class="dropdown-item" href="#">No</a>
  			</div>
		</div>

		<div class="col-lg-4 btn btn-primary">
			<input type="date" id="idate" name="Event From">
			To
			<input type="date" id="edate" name="Event To">
		</div>
	</div>

	<div class="normalrow row">
		<div class="col-lg-4 dropdown">
  			<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		Financial Assistance from Other Agency?
  			</button>
  			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    			<a class="dropdown-item" href="#">Yes</a>
    			<a class="dropdown-item" href="#">No</a>
  			</div>
		</div>

		<div class="col-lg-4 dropdown">
  			<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		Financial Assistance from CHARUSAT?
  			</button>
  			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    			<a class="dropdown-item" href="#">Yes</a>
    			<a class="dropdown-item" href="#">No</a>
  			</div>
		</div>
	</div>

	<div class="normalrow row">
		<div class="col-lg-4 form-group">
  			<input type="text" class="form-control" id="usr" placeholder="Amount of Assistance from Agency">
		</div>

		<div class="col-lg-4 form-group">
  			<input type="text" class="form-control" id="usr" placeholder="Assistance Approved from CHARUSAT">
		</div>

		<div class="col-lg-4 form-group">
  			<input type="text" class="form-control" id="usr" placeholder="Actual Expance">
		</div>
	</div>
	<div class="container" style="overflow-x:auto;">
   <p class="font-weight-light" style="color:grey;font-size:18px;">Type something in the input field to search according that.</p>  
                <input id="myInput" type="text" placeholder="Search..." class="form-control" width="30">
                <br><br>
               
  	<table class="table" 
>
    	
      		
        <tr class="table-primary">  
                               <th >EmpID_H</th>  
                               <th >Employee Name</th>  
                               <th >Employee Current Status</th>  
                               <th >Event_From</th>  
                               <th >Event_To</th> 
                               <th >RecStatus</th> 
                               <th >Department</th> 
                               
                               <th >RecStatus</th> 
                               <th >RecStatus</th> 
                               <th >RecStatus</th> 
                               <th >RecStatus</th> 
                               <th >RecStatus</th> 
                               <th >RecStatus</th> 

                               <th >RecStatus</th> 

                               <th >RecStatus</th> 
                               <th >RecStatus</th> 
                               <th >RecStatus</th> 
                               <th >RecStatus</th> 
                               <th >RecStatus</th> 
                               <th >RecStatus</th> 
                               <th >RecStatus</th> 
                               <th >RecStatus</th> 
                               
                                
                          </tr>  
                          <tbody id="myTable">
                     <?php  
                      
                     while($row = mysqli_fetch_array($result))  
                     {  
                      
                        ?> 
                          <tr>  
                               <td><?php echo $row["EmpID_H"]; ?></td>  
                               <td><?php echo $row["Employee_Name"]; ?></td>  
                               <td><?php echo $row["Employee_Current_Status"]; ?></td>  
                               <td> <?php echo $row["Event_From"]; ?></td>  
                               <td><?php echo $row["Event_To"]; ?></td>
                               <td><?php echo $row["RecStatus"]; ?></td>
                               <td><?php echo $row["Department"]; ?></td>

                               
                              
                                 
                          </tr>  
                     
                   
                   <?php
                     }  
                     ?> 

    	</tbody>
  	</table>
	</div>

  <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html> 