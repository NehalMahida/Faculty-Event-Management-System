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
                $item1 = mysqli_real_escape_string($connect, $data[0]);  
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
                $item22 = mysqli_real_escape_string($connect, $data[21]); 
                $item23 = mysqli_real_escape_string($connect, $data[22]); 
                $item24 = mysqli_real_escape_string($connect, $data[23]); 
                $item25 = mysqli_real_escape_string($connect, $data[24]); 
                $item26 = mysqli_real_escape_string($connect, $data[25]); 
                $item27 = mysqli_real_escape_string($connect, $data[26]); 
                $item28 = mysqli_real_escape_string($connect, $data[27]); 
                $item29 = mysqli_real_escape_string($connect, $data[28]); 
                $item30 = mysqli_real_escape_string($connect, $data[29]); 

                $item31 = mysqli_real_escape_string($connect, $data[30]); 

                $item32 = mysqli_real_escape_string($connect, $data[31]); 

                $item33 = mysqli_real_escape_string($connect, $data[32]); 

                $item34 = mysqli_real_escape_string($connect, $data[33]); 
                
                $item35 = mysqli_real_escape_string($connect, $data[34]); 
                $item36 = mysqli_real_escape_string($connect, $data[35]); 
                $item37 = mysqli_real_escape_string($connect, $data[36]); 
                $item38 = mysqli_real_escape_string($connect, $data[37]); 
                $item39 = mysqli_real_escape_string($connect, $data[38]); 
                $item40 = mysqli_real_escape_string($connect, $data[39]); 
                $item41 = mysqli_real_escape_string($connect, $data[40]); 
                $item42 = mysqli_real_escape_string($connect, $data[41]); 
                
                $query = "INSERT into sheet3(Sr_No,
                IDtblEventParticipantForm_H,
                RecStatus,
                SubOrgID_H,
                DeptID_H,
                 EmpID_H,
                 ReportSysID_H,
                 RepOpt_H,
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
                  Leave_Required?,
                  Purpose_of_Event_Participation,
                  Presenting_as,
                  Presentation_Mode,  
                  Paper_or_Poster_Title,
                  Member_of_organizing_committee?,
                  Financial_Assistance_required_from_CHARUSAT?,
                  Financial_Assistance_from_Other_Agency,
                  Name_of_Agency,
                  Amount_of_Assistance_from_Agency,
                   Assistance_approved_from_CHARUSAT, 
                   Event_Report_Status,
                    Actual_Expense) values ('$item1','$item2','$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$item11','$item12',
                    '$item13','$item14','$item15','$item16','$item17','$item18','$item19','$item20','$item21','$item22','$item23','$item24','$item25',
                    '$item26','$item27','$item28','$item29','$item30','$item31','$item32','$item33','$item34','$item35','$item36','$item37','$item38',
                    '$item39','$item40','$item41','$item42')";


                mysqli_query($connect, $query);
   }
   fclose($handle);
   echo "<script>alert('Import done');</script>";
    

  }
 }
}
?>  

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
	<title></title>
</head>
<body>

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
