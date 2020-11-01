<?php
require 'include.php';

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
                //$item1 = mysqli_real_escape_string($connect, $data[0]);  
                $item2 = mysqli_real_escape_string($connect, $data[1]);
                $item3 = mysqli_real_escape_string($connect, $data[2]);  
                $item4 = mysqli_real_escape_string($connect, $data[3]); 
                $item5 = mysqli_real_escape_string($connect, $data[4]); 
                $item6 = mysqli_real_escape_string($connect, $data[5]); 
                $item7 = mysqli_real_escape_string($connect, $data[6]); 
                $item8 = mysqli_real_escape_string($connect, $data[7]); 
                $item9 = mysqli_real_escape_string($connect, $data[8]); 
                $item10 = mysqli_real_escape_string($connect, $data[9]); 
                $item11 = mysqli_real_escape_string($connect, $data[10]); 
                $item12 = mysqli_real_escape_string($connect, $data[11]); 
                $item13 = mysqli_real_escape_string($connect, $data[12]); 
                $item14 = mysqli_real_escape_string($connect, $data[13]); 
                $item15 = mysqli_real_escape_string($connect, $data[14]); 
                $item16 = mysqli_real_escape_string($connect, $data[15]); 
                $item17 = mysqli_real_escape_string($connect, $data[16]); 
                $item18 = mysqli_real_escape_string($connect, $data[17]); 
                $item19 = mysqli_real_escape_string($connect, $data[18]); 
                $item20 = mysqli_real_escape_string($connect, $data[19]); 

                $item21 = mysqli_real_escape_string($connect, $data[20]); 
                if($item21 == ""){
                  $item21="N/A";
                }
                $item22 = mysqli_real_escape_string($connect, $data[21]); 
                if($item22 == ""){
                  $item22="N/A";
                }
                $item23 = mysqli_real_escape_string($connect, $data[22]); 
                if($item23 == ""){
                  $item23="N/A";
                }
                $item24 = mysqli_real_escape_string($connect, $data[23]); 
                if($item24 == ""){
                  $item24="N/A";
                }
                $item25 = mysqli_real_escape_string($connect, $data[24]); 
                if($item25 == ""){
                  $item25="N/A";
                }
                $item26 = mysqli_real_escape_string($connect, $data[25]); 
                if($item26 == ""){
                  $item26="N/A";
                }
                $item27 = mysqli_real_escape_string($connect, $data[26]); 
                if($item27 == ""){
                  $item27="N/A";
                }
                $item28 = mysqli_real_escape_string($connect, $data[27]); 
                if($item28 == ""){
                  $item28="N/A";
                }
                $item29 = mysqli_real_escape_string($connect, $data[28]); 
                if($item29 == ""){
                  $item29="N/A";
                }
                $item30 = mysqli_real_escape_string($connect, $data[29]); 
                if($item30 == ""){
                  $item30="N/A";
                }
                $item31 = mysqli_real_escape_string($connect, $data[30]); 
                if($item31 == ""){
                  $item31="N/A";
                }
                $item32 = mysqli_real_escape_string($connect, $data[31]); 
                if($item32 == ""){
                  $item32="N/A";
                }
                $item33 = mysqli_real_escape_string($connect, $data[32]); 

                if($item33 == ""){
                  $item33="N/A";
                }
                $item34 = mysqli_real_escape_string($connect, $data[33]); 
                
                if($item34 == ""){
                  $item34="N/A";
                }
                $item35 = mysqli_real_escape_string($connect, $data[34]);
                
                if($item35 == ""){
                  $item35="N/A";
                }                
                $item36 = mysqli_real_escape_string($connect, $data[35]); 

                if($item36 == ""){
                  $item36="N/A";
                }
                //$item37 = mysqli_real_escape_string($connect, $data[36]); 
              //  $item38 = mysqli_real_escape_string($connect, $data[37]); 
                //$item39 = mysqli_real_escape_string($connect, $data[38]); 
                //$item40 = mysqli_real_escape_string($connect, $data[39]); 
                //$item41 = mysqli_real_escape_string($connect, $data[40]); 
                //$item42 = mysqli_real_escape_string($connect, $data[41]); 
                
                $query = "INSERT into sheet3(
                
                  Report_Option,
                 Academic_Year,
                 Sub_Organization,
                  Department,
                  Application_ID,
                  Employee_Code,
                  Employee_Name,
                  Employee_Current_Status,
                  Designation,  
                  Event_Type,
                  Event_Level,
                  Participation_Presentation_Mode,
                  Organizing_Body,
                  Name_of_Organizing_Body,
                  Title,
                  Venue,
                  City,
                  State,
                  Country,
                  Event_From,
                  Event_To,
                  Total_Hours_of_Participation,
                  Leave_Required,
                  Purpose_of_Event_Participation,
                  Presenting_as,
                  Presentation_Mode,  
                  Paper_or_Poster_Title,
                  Member_of_organizing_committee,
                  Financial_Assistance_required_from_CHARUSAT,
                  Financial_Assistance_from_Other_Agency,
                  Name_of_Agency,
                  Amount_of_Assistance_from_Agency,
                   Assistance_approved_from_CHARUSAT, 
                   Event_Report_Status,
                    Actual_Expense)
                     values 
               ('$item2','$item3','$item4','$item5','$item6',
                '$item7','$item8','$item9','$item10','$item11','$item12',
                '$item13','$item14','$item15','$item16','$item17',
                '$item18','$item19','$item20','$item21','$item22',
                '$item23','$item24','$item25','$item26','$item27',
                '$item28','$item29','$item30','$item31','$item32',
                '$item33','$item34','$item35','$item36')";
                   //'$item37','$item38',
                    // '$item39','$item40','$item41','$item42')";


                mysqli_query($connect, $query);
                

   }
   fclose($handle);
    echo "<script>alert('Import done');</script>";
               
   header('Location: index.php');
    

  }
 }
}
?> 