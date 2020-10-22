<?php

require 'include.php';
 $query = "SELECT * FROM sheet3 ";  
 $result = mysqli_query($connect, $query); 
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faculty Event Report</title>

        
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> 

           <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  

     
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
  <!-- <form action="fetch_data.php" method="POST"> -->
    <div class="firstrow row">
    

    <div class="col-lg-2 dropdown">
      <select class="select-css" class="select-css" name="report_status" id="report_status">
          
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          
            <option class="dropdown-item" value="">Select Report  Status </option>
            <option class="dropdown-item" value="Approved">Approved</option>
            <option class="dropdown-item" value="Pending">Pending</option>
   
        </div>
        </select>
 
    </div>

















    <div class="col-lg-2 dropdown">
      <select class="select-css" class="select-css" name="academic_year" id="academic_year">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Academic Year
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          
            <option class="dropdown-item" value="">Select Academic Year </option>
            <option class="dropdown-item" value="2010-11">2010-11</option>
            <option class="dropdown-item" value="2011-12">2011-12</option>
            <option class="dropdown-item" value="2012-13">2012-13</option>
            <option class="dropdown-item" value="2013-14">2013-14</option>
            <option class="dropdown-item" value="2014-15">2014-15</option>
            <option class="dropdown-item" value="2015-16">2015-16</option>
            <option class="dropdown-item" value="2016-17">2016-17</option>
            <option class="dropdown-item" value="2017-18">2017-18</option>
            <option class="dropdown-item" value="2018-19">2018-19</option>
            <option class="dropdown-item" value="2019-20">2019-20</option>
            <option class="dropdown-item" value="2020-21">2020-21</option>

   
        </div>
        </select>
 
    </div>

    <div class="col-lg-2 dropdown">
      <select class="select-css" name="event_type" id="event_type">
            
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          
            <option class="dropdown-item" value=""> Select Event Type </option>
            <option class="dropdown-item" value="FDP">FDP</option>
            <option class="dropdown-item" value="Industrial Training">Industrial Training</option>
            <option class="dropdown-item" value="Workshops">Workshops</option>
            <option class="dropdown-item" value="STTP">STTP</option>
            <option class="dropdown-item" value="Symposia">Symposia</option>
            <option class="dropdown-item" value="Conferences">Conferences</option>
            <option class="dropdown-item" value="Online Course">Online Course</option>
            <option class="dropdown-item" value="Webinar">Webinar</option>
            <option class="dropdown-item" value="Other">Other</option>


   
        </div>
        </select>
 
    </div>

    <div class="col-lg-2 dropdown">
      <select class="select-css" name="event_level" id="event_level">
            
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          
            <option class="dropdown-item" value="">        Select Event Level   </option>
            <option class="dropdown-item" value="University">University</option>
            <option class="dropdown-item" value="State">State</option>
            <option class="dropdown-item" value="National">National</option>
            <option class="dropdown-item" value="International_Within_India">International(Within India)</option>
            <option class="dropdown-item" value="International_Abroad">International(Abroad)</option>


   
        </div>
        </select>
 
    </div>


















  
    <div class="col-lg-2 dropdown">
      <select class="select-css" name="participation_mode" id="participation_mode">
            
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          
            <option class="dropdown-item" value="">Participation Mode </option>
            <option class="dropdown-item" value="In Person">In Person</option>
            <option class="dropdown-item" value="Online">Online</option>
   
        </div>
        </select>
 
    </div>


<div class="col-lg-2 dropdown">
      <select class="select-css" name="organizing_body" id="organizing_body">
            
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          
            <option class="dropdown-item" value=""> Organizing Body </option>
            <option class="dropdown-item" value="Charusat">Charusat</option>
            <option class="dropdown-item" value="Other">Other</option>
   
        </div>
        </select>
 
    </div>


  </div>

  <div class="normalrow row">
    <div class="col-lg-2 dropdown">
        <select class="select-css" name="participation_hour" id="participation_hour">
            
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          
            <option class="dropdown-item" value=""> Participation Hour </option>
            <option class="dropdown-item" value="4"><3 Hour</option>
            <option class="dropdown-item" value="5">>=3 Hour</option>
   
        </div>
        </select>
        



    </div>


    <div class="col-lg-2 dropdown">
        <select class="select-css" name="leave_required" id="leave_required">
            
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          
            <option class="dropdown-item" value=""> Leave Required? </option>
            <option class="dropdown-item" value="Yes">Yes</option>
            <option class="dropdown-item" value="No">No</option>
   
        </div>
        </select>
        



    </div>



    <div class="col-lg-3 dropdown">
        <select class="select-css" name="Member_of_organized" id="Member_of_organized">
            
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          
            <option class="dropdown-item" value=""> Member of Organizing Committee </option>
            <option class="dropdown-item" value="Yes">Yes</option>
            <option class="dropdown-item" value="No">No</option>
   
        </div>
        </select>
        



    </div>


<div class="col-lg-3">  
                     <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
                </div>  
                <div class="col-md-2">  
                     <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
                </div>  
                
                
  </div>

  <div class="normalrow row">
    





    <div class="col-lg-4 dropdown">
        <select class="select-css" name="financial_other_agency" id="financial_other_agency">
            
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          
            <option class="dropdown-item" value="">Financial Assistance from Other Agency?</option>
            <option class="dropdown-item" value="Yes">Yes</option>
            <option class="dropdown-item" value="No">No</option>
   
        </div>
        </select>
        



    </div>

  



<div class="col-lg-4 dropdown">
        <select class="select-css" name="financial_charusat" id="financial_charusat">
            
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          
            <option class="dropdown-item" value="">Financial Assistance from CHARUSAT?</option>
            <option class="dropdown-item" value="Yes">Yes</option>
            <option class="dropdown-item" value="No">No</option>
   
        </div>
        </select>
        



    </div>



        


        <div id="header">
          <input class=" btn btn-primary" type="button" id="hide" value="Select Column" style="display: none;">
          <input  class="btn btn-primary" type="button" id="show" value="Select Column"></div>
        <div id="content" style="display: none;">



    <div class="containerr">
  <ul class="ks-cboxtags" >
    <li><input type="checkbox" class="mch" id="checkboxOne" value="Employee_Code" name="column[]" checked>
      <label for="checkboxOne">Emp ID</label>
    </li>
    <li><input type="checkbox" class="mch" id="checkboxTwo" value="Department" checked name="column[]" >
      <label for="checkboxTwo">Department</label>
    </li>
    <li><input type="checkbox" class="mch" id="checkboxThree" value="Employee_Name" checked name="column[]">
      <label for="checkboxThree">Employee Name</label>
    </li>
    <li><input type="checkbox" class="mch" id="checkboxFour" value="Employee_Current_Status" name="column[]" checked>
      <label for="checkboxFour">Employee Current Status</label>
    </li>
    <li>
      <input type="checkbox" class="mch" id="checkboxFive" value="Designation" name="column[]">
      <label for="checkboxFive">Designation</label>
    </li>

    <li>
      <input type="checkbox" class="mch" id="checkboxFivee" value="Academic_Year" name="column[]" checked>
      <label for="checkboxFivee">Academic year</label>
    </li>
    <li>
      <input type="checkbox"  class="mch" id="checkboxSix" value="Event_Type" checked name="column[]">
      <label for="checkboxSix">Event_Type</label>
    </li>

    <li>
      <input type="checkbox" class="mch" id="checkboxThirtyThree" class="mch" value="Application_ID" checked name="column[]">
      <label for="checkboxThirtyThree">Application ID</label>
    </li>

    <li><input type="checkbox" class="mch" id="checkboxSixxx" value="Sub_Organization"  name="column[]">
      <label for="checkboxSixxx">Sub Organization</label>
    </li>
    <li><input type="checkbox" class="mch" id="checkboxSeven" value="Event_Level" name="column[]">
      <label for="checkboxSeven">Event_Level</label>
    </li>
    <li><input type="checkbox" class="mch" id="checkboxEight" value="Participation_Presentation_Mode" name="column[]">
      <label for="checkboxEight">Participation Presentation Mode  </label>
    </li>
    <li><input type="checkbox" class="mch" id="checkboxNine" value="Organizing_Body" name="column[]">
      <label for="checkboxNine">Organizing Body</label>
    </li>
    <li><input type="checkbox" class="mch" id="checkboxTen" value="Name_of_Organizing_Body" name="column[]">
      <label for="checkboxTen">Name of Organizing Body</label></li>
    <li >
      <input type="checkbox" class="mch" id="checkboxEleven" value="Title" name="column[]" checked>
      <label for="checkboxEleven">Title</label>
    </li>
    <li><input type="checkbox" class="mch" id="checkboxTwelve" value="Venue" name="column[]" checked>
      <label for="checkboxTwelve">Venue</label>
    </li>
    <li><input type="checkbox" class="mch" id="checkboxThirteen" value="City" name="column[]" checked>
      <label for="checkboxThirteen">City</label>
    </li>
    <li><input type="checkbox" class="mch" id="checkboxFourteen" value="State" name="column[]" checked>
      <label for="checkboxFourteen">State</label>
    </li>
    <li><input type="checkbox" class="mch" id="checkboxFifteenn" value="Country" name="column[]" checked>
      <label for="checkboxFifteenn">Country</label>
    </li>

    <li><input type="checkbox" class="mch" id="checkboxSixteen" value="Event_From" name="column[]" checked>
      <label for="checkboxSixteen">Event From</label>
    </li>
    <li><input type="checkbox" class="mch" id="checkboxSeventeen" value="Event_To" name="column[]" checked>
      <label for="checkboxSeventeen">Event To</label>
    </li>
    <li><input type="checkbox" class="mch" id="checkboxEighteen" value="Total_Hours_of_Participation" name="column[]">
      <label for="checkboxEighteen">Hours of Participation</label>
    </li> 
    <li><input type="checkbox" class="mch" id="checkboxNineteen" value="Leave_Required" name="column[]">
      <label for="checkboxNineteen">Leave Required?</label>
    </li>
            
    <li><input type="checkbox" class="mch" id="checkboxTwenty" value="Purpose_of_Event_Participation" name="column[]">
      <label for="checkboxTwenty">Purpose of Event Participation</label>
    </li>

    <li><input type="checkbox" class="mch" id="checkboxTwentyOne" value="Presenting_as" name="column[]">
      <label for="checkboxTwentyOne">Presenting as</label>
    </li>


    <li><input type="checkbox" class="mch" id="checkboxTwentyTwo" value="Presentation_Mode" name="column[]">
      <label for="checkboxTwentyTwo">Presentation Mode</label>
    </li>

    <li><input type="checkbox" class="mch" id="checkboxTwentyThree" value="Paper_or_Poster_Title" name="column[]">
      <label for="checkboxTwentyThree">Paper or Poster Title</label>
    </li>


    <li><input type="checkbox" class="mch" id="checkboxTwentyFour" value="Member_of_organizing_committee" name="column[]">
      <label for="checkboxTwentyFour">Member of organizing committee</label>
    </li>

    <li><input type="checkbox" class="mch" id="checkboxTwentyFive" value="Financial_Assistance_required_from_CHARUSAT" name="column[]">
      <label for="checkboxTwentyFive">Financial_Assistance_required_from_CHARUSAT</label>
    </li>

    <li><input type="checkbox" class="mch" id="checkboxTwentySix" value="Financial_Assistance_from_Other_Agency" name="column[]">
      <label for="checkboxTwentySix">Financial Assistance from Other Agency</label>
    </li>

    <li><input type="checkbox" class="mch" id="checkboxTwentySeven" value="Name_of_Agency" name="column[]">
      <label for="checkboxTwentySeven">Name of Agency</label>
    </li>

    <li><input type="checkbox" class="mch" id="checkboxTwentyEight" value="Amount_of_Assistance_from_Agency" name="column[]">
      <label for="checkboxTwentyEight">Amount of Assistance from Agency</label>
    </li>

    <li><input type="checkbox" class="mch" id="checkboxTwentyNine" value="Assistance_approved_from_CHARUSAT" name="column[]">
      <label for="checkboxTwentyNine">Assistance approved from CHARUSAT</label>
    </li>


    <li><input type="checkbox" class="mch" id="checkboxThirtyOne" value="Event_Report_Status" name="column[]">
      <label for="checkboxThirtyOne">Event Report Status</label>
    </li>

    <li><input class="mch" type="checkbox" id="checkboxThirtyTwo" value="Actual_Expense" name="column[]">
      <label for="checkboxThirtyTwo">Actual Expense</label>
    </li>
    <li><input type="checkbox" class="mch" id="check-all" value="">
      <label for="check-all">select All</label>
    </li>
  </ul>

</div>

  </div>
  
    </div>
  </div>
</div>

    
  <div align="right">
    <input style="margin-right: 50px" class="btn btn-info" id="fetch"  type="submit" name="fetch" value="Filter">
  </div>
 


  <!-- <div class="normalrow row">
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
   --><div class="container" >
   <p class="font-weight-light" style="color:grey;font-size:18px;">Type something in the input field to search according that.</p>  
                <input id="myInput" type="text" placeholder="Search..." class="form-control" width="30">
                <br><br>

                <div id="loader" >
                  <img id="loading" src="images/loading.gif" alt="Loading..." >

                </div>

  <div>
  <form method="POST" action="add_data.php" enctype="multipart/form-data">
    <div align="center">  
     <label>Select CSV File:</label>
     <input type="file" name="file" /><br>
     <input type="submit" name="submit" value="Import" class="btn btn-info" />
     </div>
  </form>

</div>
               
    <div id="order_table" style="overflow-x:auto; height: 380px;overflow-y: auto;">
  
   <div data-role="main" class="ui-content">
   
    <table id="tblData" style="white-space:nowrap;width:100%;" class="table table-bordered ui-responsive" data-role="table" data-mode="columntoggle">


      <thead>
      
          
        <tr class="table-primary"> 
                              <th>Sr No.</th> 
                               <th   data-priority="1" >Employee Code</th>  
                               <th  data-priority="2">Employee Name</th>  
                               <th  data-priority="3">Employee Current Status</th>  
                               <th  data-priority="4">Event From</th>  
                               <th >Event To</th> 
                               <!-- <th >RecStatus</th> 
                                -->
                              <th >Department</th> 
                               <!-- <th>SubOrgID_H</th> -->                               
                              <!--  <th>DeptID_H</th>
                               <th>ReportSysID_H</th>
                               <th>RepOpt_H</th>
                               -->
                               <th>Academic_Year</th>
                               <th>Event Type</th>
                               <th>Application_ID</th>
                               <th>Title</th>
                               <th>Venue</th>
                               <th>City</th>
                               <th>State</th>
                               <th>Country</th>




                          </tr>  
                          </thead>
                          <tbody id="myTable">
                     <?php  
                      $i=0;
                     while($row = mysqli_fetch_array($result))  
                     {  $i++;
                      
                        ?> 
                          <tr>  
                            <td><?php echo $i ?></td>
                               <td  ><?php echo $row["Employee_Code"]; ?></td>  
                               <td><?php echo $row["Employee_Name"]; ?></td>  
                               <td><?php echo $row["Employee_Current_Status"]; ?></td>  
                               <td> <?php echo $row["Event_From"]; ?></td>  
                               <td><?php echo $row["Event_To"]; ?></td>
                               <td><?php echo $row["Department"]; ?></td>
                               
                               <td><?php echo $row["Academic_Year"]; ?></td>
                               <td><?php echo $row["Event_Type"]; ?></td>
                               
                               <td><?php echo $row["Application_ID"]; ?></td>
                               <td><?php echo $row["Title"]; ?></td>
                               <td><?php echo $row["Venue"]; ?></td>
                               <td><?php echo $row["City"]; ?></td>
                               <td><?php echo $row["State"]; ?></td>
                               <td><?php echo $row["Country"]; ?></td>

                               
                              
                                 
                          </tr>  
                     
                   
                   <?php
                     }  
                     ?> 

      </tbody>
    </table>
  </div>
  </div>
  </div>
<div>
  <center>
    <br><button onclick="exportToExcel('tblData', 'user-data')" class="btn btn-success">Export Table</button>
  </center>
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

 <script>  
      $(document).ready(function(){  
        
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
           }); 
           </script>


  <script type="text/javascript" src="js/showhide.js"></script>


          
</body>
</html> 
     
 <script>  
      $(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
           });  
            
      });  
 </script>
 <script>  
      $(document).ready(function(){  
        
           
           $('#fetch').click(function(){ 


                var action = 'filter'; 
            
                var event_type = $('#event_type').val(); 
                var event_level= $('#event_level').val();
                var academic_year= $('#academic_year').val();
                var report_status=$('#report_status').val();
                var participation_mode=$('#participation_mode').val();
                var organizing_body=$('#organizing_body').val();
                var participation_hour=$('#participation_hour').val();
                var leave_required=$('#leave_required').val();
                var Member_of_organized=$('#Member_of_organized').val();
                var financial_other_agency=$('#financial_other_agency').val();
                var financial_charusat=$('#financial_charusat').val();


                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val(); 
                var array = []; 
                $("input:checkbox[class=mch]:checked").each(function() { 
                  array.push($(this).val()); 
                }); 
                $('#GFG_DOWN').text(array);
                
                //alert(event_level); 
                 
                if(event_type != '' || event_level != '' || academic_year!='' || report_status != '' || participation_mode !='' || organizing_body !='' || participation_hour != '' || leave_required !='' || Member_of_organized !='' || financial_charusat != '' || financial_other_agency != '' || (from_date!='' && to_date!='')  || array.length != 0)  
                { 

                 alert("Hi! chandresh mendapara");

                     $.ajax({  
                          url:"filter.php",  
                          method:"POST",  
                          data:{action:action,

                            event_level:event_level,event_type:event_type,academic_year:academic_year,report_status:report_status,participation_mode:participation_mode,organizing_body:organizing_body,participation_hour:participation_hour,
                              Member_of_organized:Member_of_organized,leave_required:leave_required,financial_other_agency:financial_other_agency,financial_charusat:financial_charusat,from_date:from_date,to_date:to_date,array:array,
                          },  

                          beforeSend:function()
                          {
                            $('#order_table').hide();
                             $('#loader').show();

                          },

                          success:function(data)  
                          { 
                            $('#loader').hide();
                            $('#order_table').show();

                               $('#order_table').html(data);  
                          }  
                     });  
                }

                else{

                  alert("Please add at least one filter or add both Date filter or select at least one column ");




                }  
                
           });  
      });  
 </script>

 <script type="text/javascript">
   document.getElementById('check-all').onclick = function() {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  for (var checkbox of checkboxes) {
    checkbox.checked = this.checked;
  }
}

 </script>
 <script type="text/javascript">
function exportToExcel(tableID, filename = ''){
    var downloadurl;
    var dataFileType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTMLData = tableSelect.outerHTML.replace(/ /g, '%20');
    
    filename = filename?filename+'.xls':'export_excel_data.xls';
    
    downloadurl = document.createElement("a");
    
    document.body.appendChild(downloadurl);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTMLData], {
            type: dataFileType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        downloadurl.href = 'data:' + dataFileType + ', ' + tableHTMLData;
    
        downloadurl.download = filename;
        
        downloadurl.click();
    }
}
 
</script>







