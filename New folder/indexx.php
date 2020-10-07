<?php  
 $connect = mysqli_connect("localhost", "root", "", "sem7_sgp");  
 $query = "SELECT * FROM sheet3 ";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Faculty Event Management</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
           <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:900px;">  
                <!-- <h2 align="center">Ajax PHP MySQL Date Range Search using jQuery DatePicker</h2>  
                 -->
                 <h3 align="center">Faculty Data</h3><br />  
                <div class="col-md-3">  
                     <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
                </div>  
                <div class="col-md-3">  
                     <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
                </div>  
                <div class="col-md-5">  
                     <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />  
                </div>  
                <div style="clear:both"></div>                 
                <br />  

                <p class="font-weight-light" style="color:grey;font-size:18px;">Type something in the input field to search according that.</p>  
                <input id="myInput" type="text" placeholder="Search..." class="form-control" width="30">
                <br><br>
                <div id="order_table">  
                     <table class="table table-bordered ">  
                          <tr>  
                               <th width="5%">EmpID_H</th>  
                               <th width="30%">Employee Name</th>  
                               <th width="43%">Employee Current Status</th>  
                               <th width="10%">Event_From</th>  
                               <th width="12%">Event_To</th>  
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
                          </tr>  
                     <?php  
                     }  
                     ?> 
                     </tbody> 
                     </table>  
                </div>  
           </div>  
           <div>
           <form method="post" enctype="multipart/form-data">
          <div align="center">  
    <label>Select CSV File:</label>
    <input type="file" name="file" />
    <br />
    <input type="submit" name="submit" value="Import" class="btn btn-info" />
   </div>
  </form>
  </div>
      </body>  
 </html>  
<?php
$connect = mysqli_connect("localhost", "root", "", "sem7_sgp");  

 if(isset($_POST["submit"]))
{
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   { 
                $item4 = mysqli_real_escape_string($connect, $data[3]); 
                $item5 = mysqli_real_escape_string($connect, $data[4]); 
                $item6 = mysqli_real_escape_string($connect, $data[5]); 
                $item7 = mysqli_real_escape_string($connect, $data[6]); 
                $item8 = mysqli_real_escape_string($connect, $data[7]);  
                $item9 = mysqli_real_escape_string($connect, $data[8]);  
                
                $query = "INSERT into sheet3(
                SubOrgID_H,
                DeptID_H,
                 EmpID_H,
                 ReportSysID_H,
                 RepOpt_H,Report_Option) values ('$item4','$item5','$item6','$item7','$item8','$item9')";


                mysqli_query($connect, $query);
   }
   fclose($handle);
   echo "<script>alert('Import done');</script>";
  }
 }
}
?> 

 <script>  
      $(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
           });  
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val();  
                if(from_date != '' && to_date != '')  
                {  
                     $.ajax({  
                          url:"filter.php",  
                          method:"POST",  
                          data:{from_date:from_date, to_date:to_date},  
                          success:function(data)  
                          {  
                               $('#order_table').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
      });  
 </script>
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
