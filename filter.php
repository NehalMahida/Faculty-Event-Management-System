
<?php  
 //filter.php 
require 'include.php';

if(isset($_POST["action"]))
{
$query = "
      SELECT * FROM sheet3 WHERE 1=1
      ";

 if(isset($_POST["event_type"]) && !empty($_POST["event_type"])  )  
 {

        
      $query .= " AND Event_Type = '".$_POST["event_type"]. "' 
      "; 



  }
  if(isset($_POST["event_level"]) && !empty($_POST["event_level"]))  
  {  
    $query .= " AND Event_Level = '".$_POST["event_level"]. "' 
      "; 



      } 
  if(isset($_POST["academic_year"]) && !empty($_POST["academic_year"]))  
  {  
    $query .= " AND Academic_Year = '".$_POST["academic_year"]. "' 
      "; 



      } 


  if(isset($_POST["report_status"]) && !empty($_POST["report_status"]))  
  {  
    $query .= " AND Event_Report_Status = '".$_POST["report_status"]. "' 
      "; 



      } 

  if(isset($_POST["participation_hour"]) && !empty($_POST["participation_hour"]))  
  { 

    $i=$_POST["participation_hour"];
    if($i==4) {

    $query .= " AND Total_Hours_of_Participation <= 3";// '".$_POST["report_status"]. "' 
      //"; 


    }

    else{

         $query .= " AND Total_Hours_of_Participation >= 3";// '".$_POST["report_status"]. "' 


    }


      } 

      $output = ''; 
      $output .= '  
           <table style="white-space:nowrap;width:100%;" class="table table-bordered ">  
                <tr class="table-primary">  
                     <th width="5%">EmpID_H</th>  
                     <th width="30%">Employee Name</th>  
                     <th width="25%">Employee Current Status</th>
                     <th width="25%">Report Status</th>  
                     <th width="25%">Academic Year</th> 
                      
                     <th width="15%">Event_From</th>  
                     <th>Event_To</th>
                        
                     <th width="30%">Employee Name</th>  
                     <th width="25%">Employee Current Status</th> 
                     <th width="25%">Academic Year</th> 
                      
                     <th width="15%">Event_From</th>  
                     <th>Event_To</th>

                </tr>
                
      ';

       // $statement = $connect->prepare($query);
       // $statement->execute();
       // $result = $statement->fetchAll();
       // $total_row = $statement->rowCount();

             $i=true;
     $result = mysqli_query($connect, $query);  

      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
            if(!$i){


                $output .= ' 
                <tbody id="myTable">   
                     <tr style="background-color: #f2f2f2"}>  
                          <td>'. $row["EmpID_H"] .'</td>  
                          <td>'. $row["Employee_Name"] .'</td>  
                          <td>'. $row["Employee_Current_Status"] .'</td>
                          <td>'. $row["Event_Report_Status"] .'</td>

                          <td>'. $row["Academic_Year"] .'</td>   
                          <td> '. $row["Event_From"] .'</td>  
                          <td>'. $row["Event_To"] .'</td>  
                     </tr> 
                     </tbody> 
                ';
                
            $i=true;
                }

            elseif($i){


            $i=false;
                $output .= ' 
                <tbody id="myTable">   
                     <tr>  
                          <td>'. $row["EmpID_H"] .'</td>  
                          <td>'. $row["Employee_Name"] .'</td>  
                          <td>'. $row["Employee_Current_Status"] .'</td>
                          <td>'. $row["Event_Report_Status"] .'</td>

                          <td>'. $row["Academic_Year"] .'</td>   
                          <td> '. $row["Event_From"] .'</td>  
                          <td>'. $row["Event_To"] .'</td>  
                     </tr> 
                     </tbody> 
                ';
                
                }  
           }  
      }
      elseif (!$result) {
          # code...
         printf("Error: %s\n", mysqli_error($connect));
         exit();
        }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="42">No Order Found</td>  
                </tr>  
                </tbody>
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
} 
 ?>

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
