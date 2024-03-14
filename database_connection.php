<?php

$connect = new PDO("mysql:host=localhost;dbname=attendance", "root", "");

$base_url = "http://localhost/Attendance/";

function get_total_records($connect,$table_name){
$query="SELECT * FROM $table_name";
$statement=$connect->prepare($query);
$statement->execute();
return $statement->rowCount(); 
}
function load_grade_list($connect)
{
 $query = "SELECT * FROM  tbl_grade ORDER BY grade_name ASC";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $output = '';
 foreach($result as $row)
 {
  $output .= '<option value="'.$row["grade_id"].'">'.$row["grade_name"].'</option>';
 }
 return $output;
}
?>