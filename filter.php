
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

    $query .= " AND Total_Hours_of_Participation < 3


    ";

    // '".$_POST["report_status"]. "' 
      //"; 


    }

    else{

         $query .= " AND Total_Hours_of_Participation > 2


         ";// '".$_POST["report_status"]. "' 


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
                     <th width="5%">Sr No. </th>' ;
                     
                     if(in_array("Employee_Code", $myArray)){ 
                       
                  $output .= ' <th width="5%">Employee Code</th>';
                   }
                    if(in_array("Employee_Name", $myArray)){
                   $output .= ' <th width="30%">Employee Name</th>';
                   }  
                   if(in_array("Employee_Current_Status", $myArray)){
                     $output .= '<th width="25%">Employee Current Status</th>';
                   }

                   if(in_array("Event_Report_Status", $myArray)){
                     $output .= '<th width="25%">Report Status</th>' ;
                      }



                    if(in_array("Academic_Year", $myArray)){

                     $output .= '<th width="25%">Academic Year</th>' ;
                   }



                    if(in_array("Event_From", $myArray)){

                     $output .= '<th width="25%">Event From</th>' ;
                   }
                      


                    if(in_array("Event_To", $myArray)){

                     $output .= '<th width="25%">Event To</th>' ;
                   }



                    if(in_array("Leave_Required", $myArray)){

                     $output .= '<th width="25%">Leave Required</th>' ;
                   }


                    
                    if(in_array("Department", $myArray)){

                     $output .= '<th width="25%">Department</th>' ;
                   }

                    if(in_array("Designation", $myArray)){

                     $output .= '<th width="25%">Designation</th>' ;
                   }

                    if(in_array("Event_Type", $myArray)){

                     $output .= '<th width="25%">Event_Type</th>' ;
                   }

                    if(in_array("Event_Level", $myArray)){

                     $output .= '<th width="25%">Event_Level</th>' ;
                   }
                    if(in_array("Application_ID", $myArray)){

                     $output .= '<th width="25%">Application_ID</th>' ;
                   }

                    if(in_array("Sub_Organization", $myArray)){

                     $output .= '<th width="25%">Sub_Organization</th>' ;
                   }
                   if(in_array("Title", $myArray)){

                     $output .= '<th width="25%">Title</th>' ;
                   }
                   if(in_array("Venue", $myArray)){

                     $output .= '<th width="25%">Venue</th>' ;
                   }
                   if(in_array("City", $myArray)){

                     $output .= '<th width="25%">City</th>' ;
                   }
                   if(in_array("State", $myArray)){

                     $output .= '<th width="25%">State</th>' ;
                   }
                   if(in_array("Country", $myArray)){

                     $output .= '<th width="25%">Country</th>' ;
                   }

                  if(in_array("Total_Hours_of_Participation", $myArray)){
                    $output .= '<th width="25%">Hours of Participation</th>' ;
                   }
                   
                  if(in_array("Participation_Presentation_Mode", $myArray)){
                    $output .= '<th width="25%">Participation Presentation Mode</th>' ;
                   }

                  if(in_array("Organizing_Body", $myArray)){
                    $output .= '<th width="25%">Organizing Body</th>' ;
                   }

                  if(in_array("Name_of_Organizing_Body", $myArray)){
                    $output .= '<th width="25%">Name of Organizing Body</th>' ;
                   }
                  if(in_array("Purpose_of_Event_Participation", $myArray)){
                    $output .= '<th width="25%">Purpose of Event Participation</th>' ;
                   }

                  if(in_array("Presenting_as", $myArray)){
                    $output .= '<th width="25%">Presenting as</th>' ;
                   }


                  if(in_array("Presentation_Mode", $myArray)){
                    $output .= '<th width="25%">Presentation Mode</th>' ;
                   }

                  if(in_array("Paper_or_Poster_Title", $myArray)){
                    $output .= '<th width="25%">Paper or Poster Title</th>' ;
                   }

                  if(in_array("Member_of_organizing_committee", $myArray)){
                    $output .= '<th width="25%">Member of organizing committee</th>' ;
                   }

                  if(in_array("Financial_Assistance_required_from_CHARUSAT", $myArray)){
                    $output .= '<th width="25%">Financial Assistance required from CHARUSAT</th>' ;
                   }


                  if(in_array("Financial_Assistance_from_Other_Agency", $myArray)){
                    $output .= '<th width="25%">Financial Assistance from Other Agency</th>' ;
                   }
                   



                  if(in_array("Name_of_Agency", $myArray)){
                    $output .= '<th width="25%">Name of Agency</th>' ;
                   }





                  if(in_array("Amount_of_Assistance_from_Agency", $myArray)){
                    $output .= '<th width="25%">Amount of Assistance from Agency</th>' ;
                   }

                  if(in_array("Assistance_approved_from_CHARUSAT", $myArray)){
                    $output .= '<th width="25%">Assistance approved from CHARUSAT</th>' ;
                   }

                  if(in_array("Actual_Expense", $myArray)){
                    $output .= '<th width="25%">Actual Expense</th>' ;
                   }

                
      
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
                        if(in_array("Employee_Name", $myArray)){ 
                    $output .='
                          <td>'. $row["Employee_Name"] .'</td> ';
                        }
                        if(in_array("Employee_Current_Status", $myArray)){ 
                    $output .='
                          <td>'. $row["Employee_Current_Status"] .'</td> ';
                        }

                        if(in_array("Event_Report_Status", $myArray)){ 
                    $output .='
                          <td>'. $row["Event_Report_Status"] .'</td> ';
                        }

                        if(in_array("Academic_Year", $myArray)){ 
                    $output .='
                          <td>'. $row["Academic_Year"] .'</td> ';
                        }
                        if(in_array("Event_From", $myArray)){ 
                    $output .='
                          <td>'. $row["Event_From"] .'</td> ';
                        }
                        if(in_array("Event_To", $myArray)){ 
                    $output .='
                          <td>'. $row["Event_To"] .'</td> ';
                        }
                        if(in_array("Leave_Required", $myArray)){ 
                    $output .='
                          <td>'. $row["Leave_Required"] .'</td> ';
                        }
                        if(in_array("Department", $myArray)){ 
                    $output .='
                          <td>'. $row["Department"] .'</td> ';
                        }



                        if(in_array("Designation", $myArray)){ 
                    $output .='
                          <td>'. $row["Designation"] .'</td> ';
                        }
                        if(in_array("Event_Type", $myArray)){ 
                    $output .='
                          <td>'. $row["Event_Type"] .'</td> ';
                        }
                        if(in_array("Event_Level", $myArray)){ 
                    $output .='
                          <td>'. $row["Event_Level"] .'</td> ';
                        }
                        if(in_array("Application_ID", $myArray)){ 
                    $output .='
                          <td>'. $row["Application_ID"] .'</td> ';
                        }

                        if(in_array("Sub_Organization", $myArray)){ 
                    $output .='
                          <td>'. $row["Sub_Organization"] .'</td> ';
                        }

                        if(in_array("Title", $myArray)){ 
                    $output .='
                          <td>'. $row["Title"] .'</td> ';
                        }
                        if(in_array("Venue", $myArray)){ 
                    $output .='
                          <td>'. $row["Venue"] .'</td> ';
                        }
                        if(in_array("City", $myArray)){ 
                    $output .='
                          <td>'. $row["City"] .'</td> ';
                        }
                        if(in_array("State", $myArray)){ 
                    $output .='
                          <td>'. $row["State"] .'</td> ';
                        }
                        if(in_array("Country", $myArray)){ 
                    $output .='
                          <td>'. $row["Country"] .'</td> ';
                        }

                        if(in_array("Total_Hours_of_Participation", $myArray)){ 
                    $output .='
                          <td>'. $row["Total_Hours_of_Participation"] .'</td> ';
                        }

                        if(in_array("Participation_Presentation_Mode", $myArray)){ 
                    $output .='
                          <td>'. $row["Participation_Presentation_Mode"] .'</td> ';
                        }
                        if(in_array("Organizing_Body", $myArray)){ 
                    $output .='
                          <td>'. $row["Organizing_Body"] .'</td> ';
                        }
                        if(in_array("Name_of_Organizing_Body", $myArray)){ 
                    $output .='
                          <td>'. $row["Name_of_Organizing_Body"] .'</td> ';
                        }
                        if(in_array("Purpose_of_Event_Participation", $myArray)){ 
                    $output .='
                          <td>'. $row["Purpose_of_Event_Participation"] .'</td> ';
                        }
                        if(in_array("Presenting_as", $myArray)){ 
                    $output .='
                          <td>'. $row["Presenting_as"] .'</td> ';
                        }
                        if(in_array("Presentation_Mode", $myArray)){ 
                    $output .='
                          <td>'. $row["Presentation_Mode"] .'</td> ';
                        }
                        if(in_array("Paper_or_Poster_Title", $myArray)){ 
                    $output .='
                          <td>'. $row["Paper_or_Poster_Title"] .'</td> ';
                        }
                        if(in_array("Member_of_organizing_committee", $myArray)){ 
                    $output .='
                          <td>'. $row["Member_of_organizing_committee"] .'</td> ';
                        }
                        if(in_array("Financial_Assistance_required_from_CHARUSAT", $myArray)){ 
                    $output .='
                          <td>'. $row["Financial_Assistance_required_from_CHARUSAT"] .'</td> ';
                        }
                        if(in_array("Financial_Assistance_from_Other_Agency", $myArray)){ 
                    $output .='
                          <td>'. $row["Financial_Assistance_from_Other_Agency"] .'</td> ';
                        }
                        if(in_array("Name_of_Agency", $myArray)){ 
                    $output .='
                          <td>'. $row["Name_of_Agency"] .'</td> ';
                        }


                        if(in_array("Amount_of_Assistance_from_Agency", $myArray)){ 
                    $output .='
                          <td>'. $row["Amount_of_Assistance_from_Agency"] .'</td> ';
                        }


                        if(in_array("Assistance_approved_from_CHARUSAT", $myArray)){ 
                    $output .='
                          <td>'. $row["Assistance_approved_from_CHARUSAT"] .'</td> ';
                        }

                        if(in_array("Actual_Expense", $myArray)){ 
                    $output .='
                          <td>'. $row["Actual_Expense"] .'</td> ';
                        }





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
                        if(in_array("Employee_Name", $myArray)){ 
                    $output .='
                          <td>'. $row["Employee_Name"] .'</td> ';
                        }
                        if(in_array("Employee_Current_Status", $myArray)){ 
                    $output .='
                          <td>'. $row["Employee_Current_Status"] .'</td> ';
                        }

                        if(in_array("Event_Report_Status", $myArray)){ 
                    $output .='
                          <td>'. $row["Event_Report_Status"] .'</td> ';
                        }

                        if(in_array("Academic_Year", $myArray)){ 
                    $output .='
                          <td>'. $row["Academic_Year"] .'</td> ';
                        }
                        if(in_array("Event_From", $myArray)){ 
                    $output .='
                          <td>'. $row["Event_From"] .'</td> ';
                        }
                        if(in_array("Event_To", $myArray)){ 
                    $output .='
                          <td>'. $row["Event_To"] .'</td> ';
                        }
                        if(in_array("Leave_Required", $myArray)){ 
                    $output .='
                          <td>'. $row["Leave_Required"] .'</td> ';
                        }

                        if(in_array("Department", $myArray)){ 
                    $output .='
                          <td>'. $row["Department"] .'</td> ';
                        }




                        if(in_array("Designation", $myArray)){ 
                    $output .='
                          <td>'. $row["Designation"] .'</td> ';
                        }
                        if(in_array("Event_Type", $myArray)){ 
                    $output .='
                          <td>'. $row["Event_Type"] .'</td> ';
                        }
                        if(in_array("Event_Level", $myArray)){ 
                    $output .='
                          <td>'. $row["Event_Level"] .'</td> ';
                        }
                        if(in_array("Application_ID", $myArray)){ 
                    $output .='
                          <td>'. $row["Application_ID"] .'</td> ';
                        }

                        if(in_array("Sub_Organization", $myArray)){ 
                    $output .='
                          <td>'. $row["Sub_Organization"] .'</td> ';
                        }



                        if(in_array("Title", $myArray)){ 
                    $output .='
                          <td>'. $row["Title"] .'</td> ';
                        }
                        if(in_array("Venue", $myArray)){ 
                    $output .='
                          <td>'. $row["Venue"] .'</td> ';
                        }
                        if(in_array("City", $myArray)){ 
                    $output .='
                          <td>'. $row["City"] .'</td> ';
                        }
                        if(in_array("State", $myArray)){ 
                    $output .='
                          <td>'. $row["State"] .'</td> ';
                        }
                        if(in_array("Country", $myArray)){ 
                    $output .='
                          <td>'. $row["Country"] .'</td> ';
                        }

                        if(in_array("Total_Hours_of_Participation", $myArray)){ 
                    $output .='
                          <td>'. $row["Total_Hours_of_Participation"] .'</td> ';
                        }


                        if(in_array("Participation_Presentation_Mode", $myArray)){ 
                    $output .='
                          <td>'. $row["Participation_Presentation_Mode"] .'</td> ';
                        }


                        if(in_array("Organizing_Body", $myArray)){ 
                    $output .='
                          <td>'. $row["Organizing_Body"] .'</td> ';
                        }
                        if(in_array("Name_of_Organizing_Body", $myArray)){ 
                    $output .='
                          <td>'. $row["Name_of_Organizing_Body"] .'</td> ';
                        }
                        if(in_array("Purpose_of_Event_Participation", $myArray)){ 
                    $output .='
                          <td>'. $row["Purpose_of_Event_Participation"] .'</td> ';
                        }
                        if(in_array("Presenting_as", $myArray)){ 
                    $output .='
                          <td>'. $row["Presenting_as"] .'</td> ';
                        }
                        if(in_array("Presentation_Mode", $myArray)){ 
                    $output .='
                          <td>'. $row["Presentation_Mode"] .'</td> ';
                        }
                        if(in_array("Paper_or_Poster_Title", $myArray)){ 
                    $output .='
                          <td>'. $row["Paper_or_Poster_Title"] .'</td> ';
                        }
                        if(in_array("Member_of_organizing_committee", $myArray)){ 
                    $output .='
                          <td>'. $row["Member_of_organizing_committee"] .'</td> ';
                        }
                        if(in_array("Financial_Assistance_required_from_CHARUSAT", $myArray)){ 
                    $output .='
                          <td>'. $row["Financial_Assistance_required_from_CHARUSAT"] .'</td> ';
                        }
                        if(in_array("Financial_Assistance_from_Other_Agency", $myArray)){ 
                    $output .='
                          <td>'. $row["Financial_Assistance_from_Other_Agency"] .'</td> ';
                        }
                        if(in_array("Name_of_Agency", $myArray)){ 
                    $output .='
                          <td>'. $row["Name_of_Agency"] .'</td> ';
                        }


                        if(in_array("Amount_of_Assistance_from_Agency", $myArray)){ 
                    $output .='
                          <td>'. $row["Amount_of_Assistance_from_Agency"] .'</td> ';
                        }


                        if(in_array("Assistance_approved_from_CHARUSAT", $myArray)){ 
                    $output .='
                          <td>'. $row["Assistance_approved_from_CHARUSAT"] .'</td> ';
                        }

                        if(in_array("Actual_Expense", $myArray)){ 
                    $output .='
                          <td>'. $row["Actual_Expense"] .'</td> ';
                          }
                       $output .'    
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
