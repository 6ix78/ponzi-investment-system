<?php

$query = "INSERT INTO `mmm`.`diamond` (
`id` ,
`full_names` ,
`phone` ,
`email` ,
`bank_name` ,
`account_number`
)
VALUES (
NULL , '$Fullnames', '$Phone', '$Email', '$Bank', '$Account'
)";

$sql2  = mysql_query($query); 	 

$sql = 'SELECT MAX( id )'
        . ' FROM `diamond`'; 
$max_value = mysql_query($sql); 
		
while($row = mysql_fetch_array($max_value)) 
{ 	 
	 $current_id =  $row[0];	
}

$query5 = "SELECT * FROM diamond WHERE id <= $current_id " or die("error");

$sql5 = mysql_query($query5) or die("You are logged out. <br><br> <a href='login.php'>LOGIN</a>");

$count = mysql_num_rows($sql5);

for($counter = 1; $counter <= $count; $counter++)
{

$query55 = "SELECT * FROM diamond WHERE id = '$counter' " or die("error");
$sql55 = mysql_query($query55) or die("You are logged out. <br><br> <a href='login.php'>LOGIN</a>");

while($row = mysql_fetch_array($sql55)) {
	 	 
	 $diamond_id  = $row[0]; 	
	 $diamond_Paid = $row[7];  
	 $diamond_Leg1 = $row[8];  
	 $diamond_Leg2 = $row[9]; 
	  
	 if($diamond_Paid == "true") 
	 {
         if($diamond_Leg1 != "true" || $diamond_Leg1 != "true")  
	 $current_row = $diamond_id;
	 }
	 
	break;
}
}
	
$query555 = "SELECT * FROM diamond WHERE id = '$current_row' " or die("error");
$sql555 = mysql_query($query555) or die("You are logged out. <br><br> <a href='login.php'>LOGIN</a>");

while($row = mysql_fetch_array($sql555)) {

	 $user_Fullnames = $row[1];  	  	
	 $user_Phone = $row[2];
	 $user_Email = $row[3];  		
	 $user_Bank = $row[4];  	
	 $user_Account = $row[5];  		
}	 

?>