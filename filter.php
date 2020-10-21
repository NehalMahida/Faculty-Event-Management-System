
<?php  
 //filter.php 
require 'include.php';
$myArray= $_REQUEST["array"];

if(isset($_POST["action"]) && sizeof($myArray)>0)
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



   if(isset($_POST["leave_required"]) && !empty($_POST["leave_required"]))  
  {  
    $query .= " AND Leave_Required = '".$_POST["leave_required"]. "' 
      "; 



      } 


    if(isset($_POST["participation_mode"]) && !empty($_POST["participation_mode"]))  
  {  
    $query .= " AND Participation_Presentation_Mode  = '".$_POST["participation_mode"]. "' 
      "; 



      } 


   if(isset($_POST["Member_of_organized"]) && !empty($_POST["Member_of_organized"]))  
  {  
    $query .= " AND Member_of_organizing_committee = '".$_POST["Member_of_organized"]. "' 
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



   if(isset($_POST["financial_other_agency"]) && !empty($_POST["financial_other_agency"]))  
  {  
    $query .= " AND Financial_Assistance_from_Other_Agency = '".$_POST["financial_other_agency"]. "' 
      "; 



      }       

   
   if(isset($_POST["financial_charusat"]) && !empty($_POST["financial_charusat"]))  
  {  
    $query .= " AND   Financial_Assistance_required_from_CHARUSAT = '".$_POST["financial_charusat"]. "' 
      "; 



      }
  if(isset($_POST["from_date"])&& !empty($_POST["from_date"]) && isset($_POST["from_date"])&& !empty($_POST["from_date"]))
   {
     $query .= "AND Event_From BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'
     ";



  } 


       $output = ''; 
       $output .= '  
           <table style="white-space:nowrap;width:100%;" class="table table-bordered ">  
                <tr class="table-primary">  
                     <th>Sr No. </th>' ;
                     
                     if(in_array("Employee_Code", $myArray)){ 
                       
                  $output .= ' <th width="5%">Employee Code</th>';
                   }
                    if(in_array("Employee_Name", $myArray)){
                   $output .= ' <th width="30%">Employee Name</th>';
                   }  
                   if(in_array("Employee_Current_Status", $myArray)){
                     $output .= '<th width="25%">Employee Current Status</th>';
                   }

                   if(in_array("report_status", $myArray)){
                     $output .= '<th width="25%">Report Status</th>' ;
                      }



                    if(in_array("academic_year", $myArray)){

                     $output .= '<th width="25%">Academic Year</th>' ;
                   }
                      
                    $output .= ' <th width="15%">Event_From</th>  
                     <th>Event_To</th> 
                      <th width="25%">Leave_Required ?</th> 
                      
                    
                      <th width="25%">Member of organizing committee</th>

                      <th width="25%">Financial Assistance from Other Agency</th>

                      <th width="25%">Financial Assistance from Charusat</th>
                </tr>
                
      ';
             $i=true;
     $result = mysqli_query($connect, $query);  

      if(mysqli_num_rows($result) > 0)  
      {  
        $j=0;
           while($row = mysqli_fetch_array($result))  
           {  

                $j++;
            if(!$i){

                $output .= ' 

                <tbody id="myTable">   
                     <tr style="background-color: #f2f2f2"}>  

                          <td>'.   $j .'</td> ';
                           if(in_array("Employee_Code", $myArray)){ 
                    $output .='
                          <td>'. $row["Employee_Code"] .'</td> ';
                        }
                    $output .=' 
                          <td>'. $row["Employee_Name"] .'</td>  
                          <td>'. $row["Employee_Current_Status"] .'</td>
                          <td>'. $row["Event_Report_Status"] .'</td>

                          <td>'. $row["Academic_Year"] .'</td>   
                          <td> '. $row["Event_From"] .'</td>  
                          <td>'. $row["Event_To"] .'</td>

                          <td>'. $row["Leave_Required"] .'</td> 

                          <td>'. $row["Member_of_organizing_committee"] .'</td> 

                          <td>'. $row["Financial_Assistance_from_Other_Agency"] .'</td> 

                          <td>'. $row["Financial_Assistance_required_from_CHARUSAT"] .'</td> 

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
                          <td>'.  $j .'</td>';
                           if(in_array("Employee_Code", $myArray)){ 
                    $output .='
                          <td>'. $row["Employee_Code"] .'</td> ';
                        }
                    $output .=' <td>'. $row["Employee_Name"] .'</td>  
                          <td>'. $row["Employee_Current_Status"] .'</td>
                          <td>'. $row["Event_Report_Status"] .'</td>

                          <td>'. $row["Academic_Year"] .'</td>   
                          <td> '. $row["Event_From"] .'</td>  
                          <td>'. $row["Event_To"] .'</td> 

                          <td>'. $row["Leave_Required"] .'</td> 
                                

                          <td>'. $row["Member_of_organizing_committee"] .'</td>
                          

                          <td>'. $row["Financial_Assistance_from_Other_Agency"] .'</td> 
                          
                          <td>'. $row["Financial_Assistance_required_from_CHARUSAT"] .'</td> 



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
