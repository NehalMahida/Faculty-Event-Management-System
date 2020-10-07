<?php  
 //filter.php  
 if(isset($_POST["event_type"])  
 {  
      $connect = mysqli_connect("localhost", "root", "", "sem7_sgp");  
      $output = '';  
      $query = "  
           SELECT * FROM sheet3   
           WHERE Event_Type '".$_POST["event_type"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">EmpID_H</th>  
                     <th width="30%">Employee Name</th>  
                     <th width="43%">Employee Current Status</th>  
                     <th width="10%">Event_From</th>  
                     <th width="12%">Event_To</th>   
                </tr>
                
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= ' 
                <tbody id="myTable">   
                     <tr>  
                          <td>'. $row["EmpID_H"] .'</td>  
                          <td>'. $row["Employee Name"] .'</td>  
                          <td>'. $row["Employee Current Status"] .'</td>  
                          <td> '. $row["Event_From"] .'</td>  
                          <td>'. $row["Event_To"] .'</td>  
                     </tr> 
                     </tbody> 
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
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
